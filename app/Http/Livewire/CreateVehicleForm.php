<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vehicle;
use App\Models\vehicleManufacturer;
use App\Models\vehicleModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateVehicleForm extends Component
{

    public Vehicle $vehicle;
    public $manufacturers;
    public $recordFinished;
    public $models;
    public $accident_id;
    public $vehicleLicensePlate;
    public $vehicleColor_id;
    public $vehicleType_id;
    public $vehicleManufacturers;
    public $vehicleModel_id;
    public $vehicleWheelDrive_id;
    public $vehicleDrivePosition_id;
    public $vehicleLength;
    public $vehicleWidth;
    public $vehicleRoadwayAlignment_id;
    public $vehicleTrailer_id;
    public $vehicleEnginePower;
    public $vehicleManufactureDate;
    public $vehicleTare;
    public $vehicleAxles;
    public $vehicleGeneralComments;
    public $vehicleOccupantsNumber;
    public $vehicleDamagePossibleFactor_id;
    public $vehicleDPFComments;
    public $vehicleInspected_id;
    public $vehicleSwerved_id;
    public $vehicleDangerousCargo_id;
    public $vehicleScatteredDangerousCargo_id;
    public $vehicleCollisions;
    public $CDC3_id;
    public $CDC4_id;
    public $vehicleOnFire_id;
    public $vehicleFirefightingEquipmentUsed_id;
    public $vehicleCollisionOffroadObject_id;
    public $vehicleCollisionType_id;
    public $ABS_id;
    public $ESP_id;
    public $TCS_id;
    public $ACS_id;
    public $LDW_id;
    public $CSS_id;
    public $vehicleElectronicsComments;
    public $vehicleInformationSource_id;
    public $vehicleISTrustLevel_id;
    public $vehicleISTLDescription;
    public $vehicleInvestigationMethod_id;
    public $vehicleIMTrustLevel_id;
    public $vehicleIMTLDescription;
    public $user_id;


    public $vehicleManufacturer= NULL;

    protected $rules = [
        'accident_id' => 'required|min:0',
        'vehicleLicensePlate' => 'required|min:4',
        'vehicleColor_id' => 'required|not_in:0',
        'vehicleType_id' => 'required|not_in:0',
        'vehicleManufacturer_id' => 'required|not_in:0',
        'vehicleModel_id' => 'required|not_in:0',
        'vehicleWheelDrive_id' => 'required|not_in:0',
        'vehicleDrivePosition_id' => 'required|not_in:0',
        'vehicleLength' => 'required|min:1',
        'vehicleWidth' => 'required|min:1',
        'vehicleRoadwayAlignment_id' => 'required|not_in:0',
        'vehicleTrailer_id' => 'required|not_in:0',
        'vehicleEnginePower' => 'required|min:1',
        'vehicleManufactureDate' => 'required|numeric|min:1900',
        'vehicleTare' => 'required|numeric|min:0',
        'vehicleAxles' => 'required|numeric|min:0',
        'vehicleGeneralComments' => 'required|max:1000',
        'vehicleOccupantsNumber' => 'required|numeric|min:1',
        'vehicleDamagePossibleFactor_id' => 'required|not_in:0',
        'vehicleDPFComments' => 'required|max:1000',
        'vehicleInspected_id' => 'required|not_in:0',
        'vehicleSwerved_id' => 'required|not_in:0',
        'vehicleDangerousCargo_id' => 'required|not_in:0',
        'vehicleScatteredDangerousCargo_id' => 'required|not_in:0',
        'vehicleCollisions' => 'required|numeric|min:1',
        'CDC3_id' => 'required|not_in:0',
        'CDC4_id' => 'required|not_in:0',
        'vehicleOnFire_id' => 'required|required|not_in:0',
        'vehicleFirefightingEquipmentUsed_id' => 'required|required|not_in:0',
        'vehicleCollisionOffroadObject_id' => 'required|required|not_in:0',
        'vehicleCollisionType_id' => 'required|required|not_in:0',
        'ABS_id' => 'required|required|not_in:0',
        'ESP_id' => 'required|required|not_in:0',
        'TCS_id' => 'required|required|not_in:0',
        'ACS_id' => 'required|not_in:0',
        'LDW_id' => 'required|not_in:0',
        'CSS_id' => 'required|not_in:0',
        'vehicleElectronicsComments' => 'required|min:0|max:1000',
        'vehicleInformationSource_id' => 'required|not_in:0',
        'vehicleISTrustLevel_id' => 'required|not_in:0',
        'vehicleISTLDescription' => 'required|min:0|max:1000',
        'vehicleInvestigationMethod_id' => 'required|not_in:0',
        'vehicleIMTrustLevel_id' => 'required|not_in:0',
        'vehicleIMTLDescription' => 'required|min:0|max:1000',
        'user_id' => 'required',


    ];




    public function mount(){
        $this->vehicleManufacturers = vehicleManufacturer::all();
        $this->models = collect();

    }

    public function updatedVehicleManufacturer($manufacturer){
        if(!is_null($manufacturer)){
            $this->models = vehicleModel::where('manufacturer_id', $manufacturer)->get();
        }
    }


    public function save(){
        // dd('VEHICLE');
        $user_id = Auth::user()->id;
        $this->user_id = $user_id;
        $this->vehicleManufacturer_id = $this->vehicleManufacturer; //FIX FIX FIX
        $validatedVehicle = $this->validate();
        // dd($validatedVehicle);


try {
    Vehicle::create($validatedVehicle);

    redirect('/');
}catch ( Exception $ex){
    dd($ex);
}

    //    dd($validatedVehicle);
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
        // $vehicleManufacturers = DB::select('select * from "vehicleManufacturer"');
        // $vehicleModel = DB::select('select * from "vehicleModel"');
        $vehicleOnFire = DB::select('select * from "vehicleOnFire"');
        $vehicleRoadwayAlignment = DB::select('select * from "vehicleRoadwayAlignment"');
        $vehicleScatteredDangerousCargo = DB::select('select * from "vehicleScatteredDangerousCargo"');
        $vehicleSwerved = DB::select('select * from "vehicleSwerved"');
        $vehicleTrailer = DB::select('select * from "vehicleTrailer"');
        $vehicleType = DB::select('select * from "vehicleType"');
        $vehicleWheelDrive = DB::select('select * from "vehicleWheelDrive"');
        // $vehicle = DB::select('select * from "vehicle"'); //SAMPLE

        return view('livewire.create-vehicle-form',[
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
            'vehicleWheelDrive'=>$vehicleWheelDrive])->extends('layout')->section('content');
    }
}
