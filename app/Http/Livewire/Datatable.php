<?php

namespace App\Http\Livewire;

use App\Models\Accident;
use Livewire\Component;
use Yajra\DataTables\EloquentDataTable;

class Datatable extends Component
{

    public $term = "";


    public function render()
    {
        // sleep(1);
        $Accidents=null;
        $relations = array('accidentAnimal','accidentAlcohol','accidentAbandonedVictim','accidentSeverity','accidentEventSequence','accidentFirstCollisionEvent','accidentGadasSort','accidentMostHarmfulEvent','accidentNarcotics');
        $Accidents = Accident::with($relations)->get();

        $data = [
            'accidents' => $Accidents,
        ];

        return view('livewire.datatable', $data);
    }
}
