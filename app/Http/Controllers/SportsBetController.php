<?php

namespace App\Http\Controllers;

use App\BetInvest;
use App\BetOption;
use App\Event;
use App\Sport;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Log;
use View;

class SportsBetController extends Controller
{
    public function index()
    {
        $sports = Sport::get();
        $result = [];
        foreach ($sports as $sport) {
            $data = $this->getData($sport->name, 2);
            if (count($data) > 0) {
                $result[] = [
                    'name' => $sport->name,
                    'data' => $data,
                ];
            }
        }
        // return $result;
        return view('sportsbet.index', ['name' => 'index', 'sports' => $result]);

        // Excel::import(new DataImport, storage_path('data-sportsbet.xlsx'));
    }
    public function import()
    {
        // return view('sportsbet.index', ['name' => 'index']);
        Excel::import(new DataImport, storage_path('data-sportsbet.xlsx'));
    }
    public function test()
    {
        return [(view()->exists('view.name'))];
    }
    public function sports($name)
    {
        // return view('sportsbet.layout.' . $name, ['name' => $name]);
        // return view('sportsbet.index');
        if (view()->exists("sportsbet.sports." . strtolower($name))) {
            return view('sportsbet.layout.' . $name, ['name' => $name]);
        } else {
            return view('sportsbet.layout', ['name' => $name]);
        }
    }

    public function searchSport(Request $request, $name = '')
    {
        $type   = $request->type ?? 1;
        $name   = str_replace('-', ' ', $name);
        $result = $this->getData($name, $type);
        if (view()->exists("sportsbet.sports." . strtolower($name))) {
            return view("sportsbet.sports." . strtolower($name), ['name' => $name, 'data' => $result, 'type' => $type]);
        } else {
            return '';
        }
    }
    private function getData($sportName = '', $type = 1)
    {
        $query = Event::join('sports', 'sports.id', '=', 'events.sport_id')
            ->where('sports.name', ucfirst($sportName));
        switch ($type) {
            case '1': //inline
                $query->with(['matches' => function ($query) {
                    $query->where('matches.status', 1)
                    ->where('matches.start_date', '<=', Carbon::now())
                    ->where('matches.end_date', '>', Carbon::now());
                }, 'matches.questions', 'matches.questions.options']);
                break;
            case '2': //today
                $query->with(['matches' => function ($query) {
                    $query->where('matches.status', 1)
                        ->where('matches.start_date', '>=', Carbon::now())
                        ->whereRaw("TIMESTAMPDIFF(hour, '".Carbon::now()."', matches.start_date) < 24");
                }, 'matches.questions', 'matches.questions.options']);
                break;
            case '3': //future
                $query->with(['matches' => function ($query) {
                    $query->where('matches.status', 1)
                        ->where('matches.start_date', '>', Carbon::now())
                        ->whereRaw("TIMESTAMPDIFF(hour, '".Carbon::now()."', matches.start_date) >= 24");
                }, 'matches.questions', 'matches.questions.options']);
                break;
        }
        $events = $query->select('events.*')
            ->get();
        $result = [];
        foreach ($events as $event) {
            $arrMatch = [];
            foreach ($event->matches as $match) {
                if (count($match->questions) > 0) {
                    $arrData     = [];
                    $arrName     = [];
                    $arrQuestion = [];
                    foreach ($match->questions as $question) {
                        $arrData = [];
                        foreach ($question->options as $option) {
                            if (!in_array($option->option_name, $arrName)) {
                                $arrName[] = $option->option_name;
                            }
                            $arrData[$option->option_name] = [
                                'id'          => $option->id,
                                'ratio1'      => $option->text,
                                'ratio2'      => floatval($option->ratio2),
                                'question_id' => $question->id,
                            ];
                        }
                        if (count($arrData) > 0) {
                            $arrQuestion[$question->question] = $arrData;
                        }

                        // break;
                    }
                    $arrMatch[] = [
                        'id'      => $match->id,
                        'name'    => $match->name,
                        'options' => $arrName,
                        'data'    => $arrQuestion,
                        'time'    => $match->start_date,
                        'score1'  => $match->score1,
                        'score2'  => $match->score2,
                    ];
                }
            }
            if (count($arrMatch) > 0) {
                $result[] = [
                    'name' => $event->name,
                    'data' => $arrMatch,
                ];

            }
        }
        return $result;
    }

    public function betSports(Request $request)
    {
        if (Auth::check()) {
            DB::beginTransaction();
            $total = 0;
            $bets  = $request->bets ?? [];
            // return $bets;
            foreach ($bets as $bet) {
                $data = BetOption::with(['question', 'match'])->find($bet['id']);
                BetInvest::create([
                    'user_id'        => Auth::id(),
                    'betquestion_id' => $data->question->id,
                    'betoption_id'   => $bet['id'],
                    'invest_amount'  => $bet['amount'],
                    'return_amount'  => $bet['amount'] * $bet['odds'],
                    'ratio'          => $bet['odds'],
                    'match_id'       => $data->match->id,
                ]);
                $total += $bet['amount'];
            }
            Log::info($total . "   " . Auth::user()->balance);
            if ($total <= Auth::user()->balance) {
                Auth::user()->balance -= $total;
                Auth::user()->save();
                DB::commit();
                return null;
            } else {
                return response()->json([
                    'error' => 'Your balance is too low to place this bet',
                ]);
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function myBet()
    {
        $data['page_title'] = "My Bet";
        $data['logs']       = BetInvest::with('match', 'user', 'ques', 'betoption')->whereUser_id(Auth::id())->latest()->paginate(20);
        return view('user.my-prediction', $data);
    }
}
