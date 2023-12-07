<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Vehicle;
use App\Models\vehicleManufacturer;
use App\Models\vehicleModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewVehicleForm extends Component
{

   public $vehicle;
   public $user;

    public function mount($id){
        $this->vehicle = Vehicle::findOrFail($id);
        $this->user = User::findOrFail($this->vehicle->user_id);

    }


    public function render()
    {
        $userid = Auth()->user()->id;
        $id = DB::select('select "id" from accidents');
        $abs = DB::select('select * from "abs"');
        $acs = DB::select('select * from "acs"');
        $esp = DB::select('select * from "esp"');
        $cdc3 = DB::select('select * from "cdc3"');
        $cdc4 = DB::select('select * from "cdc4"');
        $css = DB::select('select * from "css"');
        $ldw = DB::select('select * from "ldw"');
        $tcs = DB::select('select * from "tcs"');
        $vehicleCollisionOffroadObject = DB::select('select * from "vehicleCollisionOffroadObject"');
        $vehicleCollisionType = DB::select('select * from "vehicleCollisionType"');
        $vehicleColor = DB::select('select * from "vehicleColor"');
        $vehicleDamagePossibleFactor = DB::select('select * from "vehicleDamagePossibleFactor"');
        $vehicleDangerousCargo = DB::select('select * from "vehicleDangerousCargo"');
        $vehicleDrivePosition = DB::select('select * from "vehicleDrivePosition"');
        $vehicleFirefightingEquipmentUsed = DB::select('select * from "vehicleFireFightingEquipmentUsed"');
        $vehicleIMTrustLevel = DB::select('select * from "vehicleIMTrustLevel"');
        $vehicleISTrustLevel = DB::select('select * from "vehicleISTrustLevel"');
        $vehicleInformationSource = DB::select('select * from "vehicleInformationSource"');
        $vehicleInspected = DB::select('select * from "vehicleInspected"');
        $vehicleInvestigationMethod = DB::select('select * from "vehicleInvestigationMethod"');
        $vehicleManufacturers = DB::select('select * from "vehicleManufacturer"');
        $vehicleModel = DB::select('select * from "vehicleModel"');
        $vehicleOnFire = DB::select('select * from "vehicleOnFire"');
        $vehicleRoadwayAlignment = DB::select('select * from "vehicleRoadwayAlignment"');
        $vehicleScatteredDangerousCargo = DB::select('select * from "vehicleScatteredDangerousCargo"');
        $vehicleSwerved = DB::select('select * from "vehicleSwerved"');
        $vehicleTrailer = DB::select('select * from "vehicleTrailer"');
        $vehicleType = DB::select('select * from "vehicleType"');
        $vehicleWheelDrive = DB::select('select * from "vehicleWheelDrive"');
        // $vehicle = DB::select('select * from "vehicle"'); //SAMPLE

        return view('livewire.view-vehicle-form',[
            'userid' => $userid,
            'id'=> $id,
            'abs'=>$abs,
            'acs'=>$acs,
            'css'=>$css,
            'esp'=>$esp,
            'tcs'=>$tcs,
            'ldw'=>$ldw,
            'cdc3'=>$cdc3,
            'cdc4'=>$cdc4,
            'vehicleCollisionOffroadObject'=>$vehicleCollisionOffroadObject,
            'vehicleCollisionType'=>$vehicleCollisionType,
            'vehicleColor'=>$vehicleColor,
            'vehicleDamagePossibleFactor'=>$vehicleDamagePossibleFactor,
            'vehicleDangerousCargo'=>$vehicleDangerousCargo,
            'vehicleDrivePosition'=>$vehicleDrivePosition,
            'vehicleFirefightingEquipmentUsed'=>$vehicleFirefightingEquipmentUsed,
            'vehicleIMTrustLevel'=>$vehicleIMTrustLevel,
            'vehicleISTrustLevel'=>$vehicleISTrustLevel,
            'vehicleInformationSource'=>$vehicleInformationSource,
            'vehicleInspected'=>$vehicleInspected,
            'vehicleInvestigationMethod'=>$vehicleInvestigationMethod ,
            'vehicleOnFire'=>$vehicleOnFire,
            'vehicleRoadwayAlignment'=>$vehicleRoadwayAlignment,
            'vehicleScatteredDangerousCargo'=>$vehicleScatteredDangerousCargo,
            'vehicleSwerved'=>$vehicleSwerved,
            'vehicleTrailer'=>$vehicleTrailer,
            'vehicleType'=>$vehicleType,
            'vehicleWheelDrive'=>$vehicleWheelDrive,
            'vehicleModels'=>$vehicleModel,
            'vehicleManufacturers'=>$vehicleManufacturers,
            ])->extends('layout')->section('content');
    }
}
