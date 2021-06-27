<?php

namespace App\Imports;

use App\BetInvest;
use App\BetOption;
use App\BetQuestion;
use App\Event;
use App\Match;
use App\Sport;
use App\Trx;
use App\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UpdateResult implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        // Log::info(count($rows));
        foreach ($rows as $row) {
            if ($row['sport']) {
                $sport = Sport::where('name', $row['sport'])->first();
                if (!$sport) {
                    // Log::info('Khong co sport');
                    continue;
                }
                if ($row['season']) {
                    $event = Event::where('name', $row['season'])->first();
                    if (!$event) {
                        // Log::info('Khong co season');
                        continue;
                    }
                    if ($row['match']) {
                        $match = Match::where('name', $row['match'])->first();
                        $end   = false;
                        if (!$match) {
                            // Log::info('Khong co match');
                            continue;
                        }
                        if ($row['end_time']) {
                            $match->admin_id = Auth::guard('admin')->id();
                            $match->end_date = $row['end_time'];
                            $match->save();
                        }

                        switch ($row['sport']) {
                            case 'Soccer':
                                $questions = ['1x2', 'hcp', 'tot', '1h 1x2', '1st half hcp', '1st half tot'];
                                break;
                            case 'Basketball':
                                $questions = ['winner', 'hcp', 'tot', '1st half winner', '1st half hcp', '1st half tot'];
                                break;
                            // case 'Baseball':
                            //     $questions = ['winner', 'hcp', 'tot', '1st half winner', '1st half hcp', '1st half tot'];
                            //     break;
                            default:
                                $questions = ['winner', 'hcp', 'tot'];
                                break;
                        }
                        $arrQuestion = [];
                        foreach ($questions as $value) {
                            $question = BetQuestion::where('question', $value)->where('match_id', $match->id)->first();
                            if ($question) {
                                $arrQuestion[$value] = $question->id;
                            }

                        }
                        // Log::info('start');
                        foreach ($questions as $value) {
                            $key = Str::slug("win $value", '_');

                            if ($row[$key]) {
                                $option = BetOption::where('option_name', $row['team'])
                                    ->where('match_id', $match->id)
                                    ->where('question_id', $arrQuestion[$value])
                                    ->first();
                                if ($option) {
                                    // Log::info($key. ":   ". $row[$key]);
                                    if ($row[$key] == 1) {
                                        // Log::info('start check');
                                        $this->makeWinner($match->id, $arrQuestion[$value], $option->id);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    private function makeWinner($match_id, $ques_id, $betoption_id)
    {
        Log::info("$match_id  $ques_id   $betoption_id");
        $winner = BetInvest::where('match_id', $match_id)->where('betquestion_id', $ques_id)->where('betoption_id', $betoption_id)->where('status', 0)->latest()->get();
        $losser = BetInvest::where('match_id', $match_id)->where('betquestion_id', $ques_id)->where('betoption_id', '!=', $betoption_id)->where('status', 0)->latest()->get();

        foreach ($winner as $dd) {
            $return_amo = $dd->return_amount;
            $user       = User::find($dd->user_id);
            $user->balance += round($return_amo, 2);
            $user->save();

            $dd->status = 1;
            $dd->update();

            Trx::create([
                'user_id'  => $user->id,
                'amount'   => round($return_amo, 2),
                'main_amo' => $user->balance,
                'charge'   => round(0, 2),
                'type'     => '*',
                'title'    => "<strong>Event:</strong> " . $dd->match->name . " <br>( <strong> Ques:</strong> " . $dd->ques->question . " <strong>, Threat: " . $dd->betoption->option_name . " => Win)</strong>",
                'trx'      => getTrx(),
            ]);
        }
        foreach ($losser as $dd) {
            $user         = User::find($dd->user_id);
            $dd->status   = -1;
            $dd->admin_id = Auth::guard('admin')->id();
            $dd->update();
        }

        $betQ         = BetQuestion::find($ques_id);
        $betQ->result = 1;
        $betQ->update();

        $betStatus         = BetOption::find($betoption_id);
        $betStatus->status = 2;
        $betStatus->update();

        $betlosser = BetOption::where('id', '!=', $betoption_id)->whereQuestion_id($ques_id)->whereMatch_id($match_id)->get();
        foreach ($betlosser as $data) {
            $data->status = -2;
            $data->update();
        }
        session()->flash('success', 'Make winner Successfully!');
        return back();
    }
}
