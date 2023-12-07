<?php

namespace App\Http\Livewire;

use App\Models\Accident;
use App\Models\Vehicle;
use DateTime;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class CreateAccidentForm extends Component
{
    public $mintime;
    public function render(){

    $mintime = new DateTime();
    $mintime = Date::now()-120;
        return view('create-accident-form',['mintime'=>$mintime])->extends('layout')->section('content');
    }
}
