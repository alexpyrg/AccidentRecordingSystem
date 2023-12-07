<?php

namespace App\Http\Livewire;

use DateTime;
use Livewire\Component;

class UpdateMinTime extends Component
{
    public $updatemintime;

    public function render()
    {
        $minimumTime = new DateTime();
        $minimumTime;
        return view('livewire.update-min-time');
    }
}
