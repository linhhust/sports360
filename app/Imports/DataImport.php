<?php

namespace App\Imports;

use App\BetOption;
use App\BetQuestion;
use App\Event;
use App\Match;
use App\Sport;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Log;
use App\Events\UpdateOption;

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
                        if (!$match) {
                            $match = Match::create([
                                'event_id'   => $event->id,
                                'name'       => $row['match'],
                                'slug'       => str_slug($row['match']),
                                'start_date' => $row['start_time'],
                                'status'     => 1,
                                'end_date'   => '2100/12/31 23:59:59',
                                'admin_id'   => 1,
                            ]);
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
                                $question = BetQuestion::create([
                                    'match_id' => $match->id,
                                    'question' => $value,
                                    'limit'    => 100,
                                    'admin_id' => 1,
                                    'end_time' => '2100/12/31 23:59:59',
                                ]);
                            }
                            $arrQuestion[$value] = $question->id;
                        }
                        foreach ($questions as $value) {
                            $key = Str::slug($value, '_');
                            
                            if ($row[$key]) {
                                $option = BetOption::where('option_name', $row['team'])
                                ->where('match_id', $match->id)
                                ->where('question_id', $arrQuestion[$value])
                                ->first();
                                if (!$option) {
                                    $arr = [
                                        'question_id' => $arrQuestion[$value],
                                        'match_id'    => $match->id,
                                        'option_name' => $row['team'],
                                        'ratio1'      => 1,
                                        'ratio2'      => $row[$key],
                                        'text'        => $row[$key],
                                        'admin_id'    => 1,
                                    ];
                                    if ($value == 'hcp' || $value == 'tot' || $value == '1st half hcp' || $value == '1st half tot') {
                                        $arr['ratio2'] = $row[$key . "_2"];
                                    }
                                    $option = BetOption::create($arr);
                                } else {
                                    Log::info($key);
                                    $option->text = $row[$key];
                                    $option->ratio2 = $row[$key];
                                    if ($value == 'hcp' || $value == 'tot' || $value == '1st half hcp' || $value == '1st half tot') {
                                        $option->ratio2 = $row[$key . "_2"];
                                    }
                                    $option->save();
                                    event(new UpdateOption($option));
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
