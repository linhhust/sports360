<?php

namespace App\Imports;

use App\BetOption;
use App\BetQuestion;
use App\Event;
use App\Events\UpdateOption;
use App\Events\UpdateScore;
use App\Match;
use App\Sport;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;

class DataImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if ($row['sport']) {
                $sport = Sport::where('name', $row['sport'])->first();
                if (!$sport) {
                    $sport = Sport::create([
                        'name'   => $row['sport'],
                        'slug'   => str_slug($row['sport']),
                        'status' => 1,
                    ]);
                }
                if ($row['season']) {
                    $event = Event::where('name', $row['season'])->first();
                    if (!$event) {
                        $event = Event::create([
                            'sport_id' => $sport->id,
                            'name'     => $row['season'],
                            'slug'     => str_slug($row['season']),
                            'status'   => 1,
                        ]);
                    }
                    if ($row['match']) {
                        $match = Match::where('name', $row['match'])->first();
                        $end   = false;
                        // Log::info($row['match'] . ': ' .$row['start_time']);
                        if (!$match) {
                            $match = Match::create([
                                'event_id'   => $event->id,
                                'name'       => $row['match'],
                                'slug'       => str_slug($row['match']),
                                'start_date' => str_replace('/', '-', $row['start_time']),
                                'status'     => 1,
                                'end_date'   => $row['end_time'] ? str_replace('/', '-', $row['end_time']) : '2100-12-31 23:59:59',
                                'admin_id'   => Auth::guard('admin')->id(),
                            ]);
                        } else {
                            if ($row['end_time']) {
                                $match->end_date = str_replace('/', '-', $row['end_time']);
                                $end             = true;
                            }
                            $is_update = false;
                            if ($row['score_1']) {
                                $match->score1 = $row['score_1'] ?? 0;
                                $is_update     = true;
                            }
                            if ($row['score_2']) {
                                $match->score2 = $row['score_2'] ?? 0;
                                $is_update     = true;
                            }
                            $match->admin_id = Auth::guard('admin')->id();
                            $match->save();
                            if ($is_update) {
                                event(new UpdateScore($match));
                            }
                            // if ($end){
                            //     event(new UpdateMatch($match->id));
                            // }

                        }

                        switch ($row['sport']) {
                            case 'Soccer':
                                $questions = ['1x2', 'hcp', 'tot', '1h 1x2', '1st half hcp', '1st half tot'];
                                break;
                            case 'Basketball':
                                $questions = ['winner', 'hcp', 'tot', '1st half winner', '1st half hcp', '1st half tot'];
                                break;
                            case 'Baseball':
                                $questions = ['winner', 'hcp', 'tot', '1st half winner', '1st half hcp', '1st half tot'];
                                break;
                            default:
                                $questions = ['winner', 'hcp', 'tot'];
                                break;
                        }
                        $arrQuestion = [];
                        foreach ($questions as $value) {
                            $question = BetQuestion::where('question', $value)->where('match_id', $match->id)->first();
                            if (!$question) {
                                if (!$end) {
                                    $question = BetQuestion::create([
                                        'match_id' => $match->id,
                                        'question' => $value,
                                        'limit'    => 100,
                                        'admin_id' => Auth::guard('admin')->id(),
                                        'end_time' => '2100/12/31 23:59:59',
                                    ]);
                                }
                            } else {
                                if ($end) {
                                    $question->admin_id = Auth::guard('admin')->id();
                                    $question->end_time = $row['end_time'];
                                    $question->save();
                                }
                            }
                            $arrQuestion[$value] = $question->id;
                        }
                        foreach ($questions as $value) {
                            $key    = Str::slug($value, '_');
                            $option = BetOption::where('option_name', $row['team'])
                                ->where('match_id', $match->id)
                                ->where('question_id', $arrQuestion[$value])
                                ->first();
                            if ($option) {
                                $option->text   = $row[$key] ? $row[$key] : '';
                                $option->ratio2 = $row[$key] ? $row[$key] : 0;
                                if ($value == 'hcp' || $value == 'tot' || $value == '1st half hcp' || $value == '1st half tot') {
                                    $option->ratio2 = $row[$key . "_2"] ? $row[$key . "_2"] : 0;
                                }
                                $option->admin_id = Auth::guard('admin')->id();
                                $option->save();
                                event(new UpdateOption($option));
                            } else {
                                $arr = [
                                    'question_id' => $arrQuestion[$value],
                                    'match_id'    => $match->id,
                                    'option_name' => $row['team'],
                                    'ratio1'      => 1,
                                    'ratio2'      => $row[$key] ? $row[$key] : 0,
                                    'text'        => $row[$key] ? $row[$key] : '',
                                    'admin_id'    => Auth::guard('admin')->id(),
                                ];
                                if ($value == 'hcp' || $value == 'tot' || $value == '1st half hcp' || $value == '1st half tot') {
                                    $arr['ratio2'] = $row[$key . "_2"];
                                }
                                $option = BetOption::create($arr);
                            }
                        }
                    }
                }
            }
        }
    }

}
