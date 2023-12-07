<?php

namespace App\Http\Livewire;

use App\Models\Accident;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ViewAccidentForm extends Component
{
    public $accident;
    public $user;

    public function mount($id){
        $this->accident = Accident::findOrFail($id);


        $this->user = User::findOrFail($this->accident->user_id);
    }

    public function render()
    {

        $user = Auth::user();
        $userid = $user->id;

        $caseNumber                   = DB::select('select id from accidents ORDER BY id DESC LIMIT 1');
        $caseNumber = intval($caseNumber);
        $caseNumber +=1;
        $accidentSeverities           = DB::select('select * from "accidentSeverity"');
        $accidentAbandonedVictims     = DB::select('select * from "accidentAbandonedVictim"');
        $accidentAlcohols             = DB::select('select * from "accidentAlcohol"');
        $accidentAnimalCollisions     = DB::select('select * from "accidentAnimalCollision"');
        $accidentEventSequences       = DB::select('select * from "accidentEventSequence"');
        $accidentFirstCollisionEvents = DB::select('select * from "accidentFirstCollisionEvent"');
        $accidentGADAs                = DB::select('select * from "accidentGADAS"');
        $accidentIMTrustLevels        = DB::select('select * from "accidentIMTrustLevel"');
        $accidentISTrustLevels        = DB::select('select * from "accidentISTrustLevel"');
        $accidentInformationSources   = DB::select('select * from "accidentInformationSource"');
        $accidentInvestigationMethods = DB::select('select * from "accidentInvestigationMethod"');
        $accidentMostHarmfulEvents    = DB::select('select * from "accidentMostHarmfulEvent"');
        $accidentNarcotics            = DB::select('select * from "accidentNarcotics"');
        $accidentRelatedFactors       = DB::select('select * from "accidentRelatedFactors"');



        return view('livewire.view-accident-form', [
            // 'accident'=>$accident,
            'accidentSeverities'=>$accidentSeverities,
            'accidentAbandonedVictims'=>$accidentAbandonedVictims,
            'accidentAlcohols'=>$accidentAlcohols,
            'accidentAnimalCollisions'=>$accidentAnimalCollisions,
            'accidentEventSequences'=>$accidentEventSequences,
            'accidentFirstCollisionEvents'=>$accidentFirstCollisionEvents,
            'accidentGADAs'=>$accidentGADAs,
            'accidentIMTrustLevels'=>$accidentIMTrustLevels,
            'accidentISTrustLevels'=>$accidentISTrustLevels,
            'accidentInformationSources'=>$accidentInformationSources,
            'accidentInvestigationMethods'=>$accidentInvestigationMethods,
            'accidentMostHarmfulEvents'=>$accidentMostHarmfulEvents,
            'accidentNarcotics'=>$accidentNarcotics,
            'accidentRelatedFactors'=>$accidentRelatedFactors,
            'caseNumber'=>$caseNumber+1,
            'userid'=>$userid]
        )->extends('layout')->section('content');
    }
}
