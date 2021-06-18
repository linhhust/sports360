<?php

namespace App\Http\Controllers;

use App\BetInvest;
use App\BetOption;
use App\Event;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use View;

class SportsBetController extends Controller
{
    public function index()
    {
        $events = Event::get();
        $result = [];
        foreach ($events as $event) {
            $data = $this->getData($event->name);
            if (count($result) > 0) {
                $result[] = [
                    'name' => $event->name,
                    'data' => $data,
                ];
            }
        }
        return view('sportsbet.index', ['name' => 'index', 'data' => $result]);

        // Excel::import(new DataImport, storage_path('data-sportsbet.xlsx'));
    }
    public function import()
    {
        // return view('sportsbet.index', ['name' => 'index']);
        Excel::import(new DataImport, storage_path('data-sportsbet.xlsx'));
    }
    public function test(){
        return [(view()->exists('view.name'))];
    }
    public function sports($name)
    {
        // return view('sportsbet.layout.' . $name, ['name' => $name]);
        // return view('sportsbet.index');
        if (view()->exists("sportsbet.sports." . strtolower($name))){
            return view('sportsbet.layout.' . $name, ['name' => $name]);
        }else{
            return view('sportsbet.layout', ['name' => $name]);
        }
    }

    public function searchSport(Request $request, $name = '')
    {
        $type          = $request->type ?? 1;
        $name          = str_replace('-', ' ', $name);
        $result = $this->getData($name, $type);
        if (view()->exists("sportsbet.sports." . strtolower($name))){
            return view("sportsbet.sports." . strtolower($name), ['data' => $result, 'type' => $type]);
        }else{
            return '';
        }
    }
    private function getData($sportName = '', $type = 2)
    {
        $query = Event::join('sports', 'sports.id', '=', 'events.sport_id')
            ->where('sports.name', ucfirst($sportName));
        switch ($type) {
            case '1': //inline
                $query->with(['matches' => function ($query) {
                    $query->where('matches.status', 2);
                }, 'matches.questions', 'matches.questions.options']);
                break;
            case '2': //today
                $query->with(['matches' => function ($query) {
                    $query->where('matches.status', 1)
                        ->where('matches.start_date', '>', Carbon::now())
                        ->whereRaw('TIMESTAMPDIFF(hour, now(), matches.start_date) < 24');
                }, 'matches.questions', 'matches.questions.options']);
                break;
            case '3': //future
                $query->with(['matches' => function ($query) {
                    $query->where('matches.status', 1)
                        ->whereRaw('TIMESTAMPDIFF(hour, now(), matches.start_date) >=24');
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
                    $arrData = [];
                    $arrName = [];
                    $arrQuestion = [];
                    foreach ($match->questions as $question) {
                        foreach ($question->options as $option) {
                            if (!in_array($option->option_name, $arrName)) {
                                $arrName[] = $option->option_name;
                            }
                            $arrData[$option->option_name] = [
                                'id'      => $option->id,
                                'ratio1' => $option->ratio1,
                                'ratio2' => $option->ratio2,
                            ];
                        }
                        $arrQuestion[$question->question] = $arrData;
                    }
                    $arrMatch[] = [
                        'name'    => $match->name,
                        'options' => $arrName,
                        'data'    => $arrQuestion,
                        'time'    => $match->start_date,
                        'score1'    => $match->score1,
                        'score2'    => $match->score2,
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
            $bets = $request->bets ?? [];
            // return $bets;
            foreach ($bets as $bet) {
                $data = BetOption::with(['question','match'])->find($bet['id']);
                BetInvest::create([
                    'user_id'        => Auth::id(),
                    'betquestion_id' => $data->question->id,
                    'betoption_id'   => $bet['id'],
                    'invest_amount'  => $bet['amount'],
                    'return_amount'  => $bet['amount'] * $bet['odds'],
                    'ratio'          => $bet['odds'],
                    'match_id'       => $data->match->id,
                ]);
            }
            return null;
        } else {
            return redirect()->route('/login');
        }
    }

    public function myBet()
    {
        $data['page_title'] = "My Bet";
        $data['logs'] = BetInvest::with('match', 'user', 'ques', 'betoption')->whereUser_id(Auth::id())->latest()->paginate(20);
        return view('user.my-prediction', $data);
    }
}
