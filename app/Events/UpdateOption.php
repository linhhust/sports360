<?php

namespace App\Events;

use App\BetQuestion;
use App\Match;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UpdateOption implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $option, $view;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($option)
    {
        $this->option = $option;
        $question     = BetQuestion::where('id', $option->question_id)->first();
        $match        = Match::where('id', $option->match_id)->first();
        $data         = [
            'match_name'  => $match->name,
            'option_name' => $option->option_name,
            'type'        => '1x2',
            'option_id'   => $option->question_id,
            'question_id' => $option->question_id,
            'ratio'       => $option->ratio2,
            'text'        => $option->text,
        ];
        switch ($question->question) {
            case '1x2':
                $data['type'] = '1x2';
                $this->view = $this->getItem_1($data);
                break;
            case 'winner':
                $data['type'] = 'winner';
                $this->view = $this->getItem_1($data);
                break;
            case 'hcp':
                $data['type'] = 'Handicap (incl. overtime)';
                $this->view = $this->getItem_2($data);
                break;
            case 'tot':
                $data['type'] = 'Total (incl. overtime)';
                $this->view = $this->getItem_2($data);
                break;
            case '1h 1x2':
                $data['type'] = '1st Half - 1x2';
                $this->view = $this->getItem_1($data);
                break;
            case '1st half winner':
                $data['type'] = '1st Half - Winner';
                $this->view = $this->getItem_1($data);
                break;
            case '1st half hcp':
                $data['type'] = '1st Half - Handicap';
                $this->view = $this->getItem_2($data);
                break;
            case '1st half tot':
                $data['type'] = '1st Half - Total';
                $this->view = $this->getItem_2($data);
                break;

            default:
                # code...
                break;
        }
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['update-option'];
    }

    private function getItem_1($arrData = []){
        return "<div class='Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS' data-info='" . $arrData['match_name']. "' data-option='".$arrData['option_name']."' data-type='". ucwords($arrData['type']) ."' data-id='".$arrData['option_id']."' data-question='".$arrData['question_id']."'><p class='Selection__Odds-sc-1tx8nkd-0 ilfAV'>".number_format($arrData['ratio'],2) ."</p></div>";
    }
    private function getItem_2($arrData = []){
        return '<div class="Selection__SelectionWrapper-sc-1tx8nkd-2 bGbaJS" data-info="'.$arrData['match_name'].'" data-option="'.$arrData['option_name'].'" data-type="'.ucwords($arrData['type']).'" data-id="'.$arrData['option_id'].'" data-question="'.$arrData['question_id'].'"><p class="Selection__Name-sc-1tx8nkd-1 eieSeJ">'.$arrData['text'].'</p><p class="Selection__Odds-sc-1tx8nkd-0 ilfAV">'.number_format($arrData['ratio'],2).'</p></div>';
    }
}
