<?php

namespace App\Http\Livewire;

use App\Models\road;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAddressForm extends Component
{
    use WithFileUploads;

    public road $road;
    public $accident_id;
    public $roadTrafficwayFlow_id;
    public $roadLaneNumber;
    public $roadType_id;
    public $roadSpeedLimit;
    public $roadSpeedLimitType_id;
    public $roadJunction_id;
    public $roadLocalArea_id;
    public $roadAlignment_id;
    public $roadConstructionZone_id;
    public $roadTrafficSigns_id;
    public $roadTrafficSignalDeviceFunctioning_id;
    public $roadSurface_id;
    public $roadPedestrianFacility_id;
    public $roadCycleFacility_id;
    public $roadLightConditions_id;
    public $roadWeatherConditions_id;
    public $roadStrongWinds_id;
    public $roadFog_id;
    public $roadConditionComments;
    public $roadPollutants_id;
    public $roadTransientConstraints_id;
    public $roadAccidentRelatedSignaling_id;
    public $roadSignalingFactors_id;
    public $roadSpeedLimitingFacility_id;
    public $roadSLIContributedToCollision_id;
    public $roadPossibleFactorsComments;
    public $roadOtherComments;
    public $roadInformationSource_id;
    public $roadISTrustLevel_id;
    public $roadISTLDescription;
    public $roadInvestigationMethod_id;
    public $roadIMTrustLevel_id;
    public $roadIMTLDescription;
    public $user_id;
    public $images;






    protected $rules=[
    'accident_id' => 'required|not_in:0',
    'roadTrafficwayFlow_id'=> 'required|not_in:0',
    'roadLaneNumber'=> 'required',
    'roadType_id'=> 'required|not_in:0',
    'roadSpeedLimit'=> 'required',
    'roadSpeedLimitType_id'=> 'required|not_in:0',
    'roadJunction_id'=> 'required|not_in:0',
    'roadLocalArea_id'=> 'required|not_in:0',
    'roadAlignment_id'=> 'required|not_in:0',
    'roadConstructionZone_id'=> 'required|not_in:0',
    'roadTrafficSigns_id'=> 'required|not_in:0',
    'roadTrafficSignalDeviceFunctioning_id'=> 'required|not_in:0',
    'roadSurface_id'=> 'required|not_in:0',
    'roadPedestrianFacility_id'=> 'required|not_in:0',
    'roadCycleFacility_id'=> 'required|not_in:0',
    'roadLightConditions_id'=> 'required|not_in:0',
    'roadWeatherConditions_id'=> 'required|not_in:0',
    'roadStrongWinds_id'=> 'required|not_in:0',
    'roadFog_id'=> 'required|not_in:0',
    'roadConditionComments'=> 'required',
    'roadPollutants_id'=> 'required|not_in:0',
    'roadTransientConstraints_id'=> 'required|not_in:0',
    'roadSignalingFactors_id'=>'required|not_in:0',
    'roadSpeedLimitingFacility_id'=> 'required|not_in:0',
    'roadSLIContributedToCollision_id'=> 'required|not_in:0',
    'roadPossibleFactorsComments'=> 'required',
    'roadOtherComments'=> 'required',
    'roadInformationSource_id'=> 'required|not_in:0',
    'roadISTrustLevel_id'=> 'required|not_in:0',
    'roadISTLDescription'=> 'required',
    'roadInvestigationMethod_id'=> 'required|not_in:0',
    'roadIMTrustLevel_id'=> 'required|not_in:0',
    'roadIMTLDescription'=> 'required',
    'user_id' => 'required',
    // 'images.*' => 'image|max:8192',
    ];


    public function save(){
        $user_id = Auth::user()->id;
        $this->user_id = $user_id;
        try {
        $validated = $this->validate();
        road::create($validated);
        // dd($validated);
            return redirect('/create-new-address');
        }catch(Exception $ex){
            dd($ex);
        }
    }//save

    public function render()
    {

        $roadTrafficwayFlow = DB::select('select * from "roadTrafficwayFlow"');
        $roadType = DB::select('select * from "roadType"');
        $roadSpeedLimitType = DB::select('select * from "roadSpeedLimitType"');
        $roadJunction = DB::select('select * from "roadJunction"');
        $roadLocalArea = DB::select('select * from "roadLocalArea"');
        $roadAlignment = DB::select('select * from "roadAlignment"');
        $roadConstructionZone = DB::select('select * from "roadConstructionZone"');
        $roadTrafficSigns = DB::select('select * from "roadTrafficSigns"');
        $roadTrafficSignalDeviceFunctioning = DB::select('select * from "roadTrafficSignalDeviceFunctioning"');
        $roadSurface = DB::select('select * from "roadSurface"');
        $roadPedestrianFacility = DB::select('select * from "roadPedestrianFacility"');
        $roadCycleFacility = DB::select('select * from "roadCycleFacility"');
        $roadLightConditions = DB::select('select * from "roadLightConditions"');
        $roadWeatherConditions = DB::select('select * from "roadWeatherConditions"');
        $roadStrongWinds = DB::select('select * from "roadStrongWinds"');
        $roadFog = DB::select('select * from "roadFog"');
        $roadPollutants = DB::select('select * from "roadPollutants"');
        $roadTransientFactors = DB::select('select * from "roadTransientFactors"');
        $roadSignalingFactors = DB::select('select * from "roadSignalingFactors"');
        $roadSpeedLimitingFacility = DB::select('select * from "roadSpeedLimitingFacility"');
        $roadSLIContributedToCollision = DB::select('select * from "roadSLIContributedCollision"');
        $roadInformationSource = DB::select('select * from "roadInformationSource"');
        $roadISTrustLevel = DB::select('select * from "roadISTrustLevel"');
        $roadInvestigationMethod = DB::select('select * from "roadInvestigationMethod"');
        $roadIMTrustLevel = DB::select('select * from "roadIMTrustLevel"');
        // $id = DB::select('select "id","accidentCase" from "accidents" where user_id=' . Auth()->user()->id);

        // $road+smth+ = DB::select('select * from "road"'); //SAMPLE
        if (Auth()->user()->role_id < 3) {
            $id = DB::select('select "id","accidentCase" from "accidents" where user_id=' . Auth()->user()->id);
        }else
        {
            $id = DB::select('select "id","accidentCase" from "accidents"');
        }

       return view('livewire.create-address-form', [
            'roadTrafficwayFlow'=>$roadTrafficwayFlow,
            'roadType'=>$roadType,
            'roadSpeedLimitType'=>$roadSpeedLimitType,
            'roadJunction'=>$roadJunction,
            'roadLocalArea'=>$roadLocalArea,
            'roadAlignment'=>$roadAlignment,
            'roadConstructionZone'=>$roadConstructionZone,
            'roadTrafficSigns'=>$roadTrafficSigns,
            'roadTrafficSignalDeviceFunctioning'=>$roadTrafficSignalDeviceFunctioning,
            'roadSurface'=>$roadSurface,
            'roadPedestrianFacility'=>$roadPedestrianFacility,
            'roadCycleFacility'=>$roadCycleFacility,
            'roadLightConditions'=>$roadLightConditions,
            'roadWeatherConditions'=>$roadWeatherConditions,
            'roadStrongWinds'=>$roadStrongWinds,
            'roadFog'=>$roadFog,
            'roadPollutants'=>$roadPollutants,
            'roadTransientFactors'=>$roadTransientFactors,
            'roadSignalingFactors'=>$roadSignalingFactors,
            'roadSpeedLimitingFacility'=>$roadSpeedLimitingFacility,
            'roadSLIContributedCollision'=>$roadSLIContributedToCollision,
            'roadInformationSource'=>$roadInformationSource,
            'roadISTrustLevel'=>$roadISTrustLevel,
            'roadInvestigationMethod'=>$roadInvestigationMethod,
            'roadIMTrustLevel'=>$roadIMTrustLevel,
            'id'=>$id

        ])->extends('layout')->section('content');
    }
}
