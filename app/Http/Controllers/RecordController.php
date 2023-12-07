<?php

namespace App\Http\Controllers;

use App\Models\Accident;
use App\Models\Image;
use App\Models\road;
use App\Models\Vehicle;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RecordController extends Controller
{



    protected $asd;
    public function index(){
        // return view('records');
            $allAccidents = DB::select('select * from accidents');
            $userAccidents = DB::select('select * from accidents where user_id=' . auth()->user->id . ' ');
        if (auth()->user->role == 2 || auth()->user->role == 3) {
            if ($allAccidents!=null) {
                return view('records', ['accidents'=>$allAccidents]);
            } else {
                return view('records', ['accidents'=>'No accidents found']);
            }
        }else{

        }

    }//index - to load everything

    public function show(Accident $accident){
        return view('records', [
            'Accident' => $accident
        ]);
    }//show


    public function loadAccidentForm(){
        $user = Auth::user();
        $userid = $user->id;
        $caseNumber                   = DB::select('select id from accidents ORDER BY id DESC LIMIT 1');
        // if($caseNumber)
        // $caseNumber = 1234455;
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


        return view('livewire.create-accident-form',
        ['accidentSeverities'=>$accidentSeverities,
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


     );


    } //loadAccidentForm

    public function loadVehicleForm(){
        //Fetch from database all required data from vehicleTables
        $userid = auth()->user()->id;
        $accidentID = DB::select('select "accident_id" from accidents');
        $abs = DB::select('select * from "ABS_id"');
        $acs = DB::select('select * from "ACS_id"');
        $esp = DB::select('select * from "ESP_id"');
        $cdc3 = DB::select('select * from "CDC3_id"');
        $cdc4 = DB::select('select * from "CDC4_id"');
        $css = DB::select('select * from "CSS_id"');
        $ldw = DB::select('select * from "LDW_id"');
        $tcs = DB::select('select * from "TCS_id"');
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
        $vehicleManufacturer = DB::select('select * from "vehicleManufacturer"');
        $vehicleModel = DB::select('select * from "vehicleModel"');
        $vehicleOnFire = DB::select('select * from "vehicleOnFire"');
        $vehicleRoadwayAlignment = DB::select('select * from "vehicleRoadwayAlignment"');
        $vehicleScatteredDangerousCargo = DB::select('select * from "vehicleScatteredDangerousCargo"');
        $vehicleSwerved = DB::select('select * from "vehicleSwerved"');
        $vehicleTrailer = DB::select('select * from "vehicleTrailer"');
        $vehicleType = DB::select('select * from "vehicleType"');
        $vehicleWheelDrive = DB::select('select * from "vehicleWheelDrive"');
        // $vehicle = DB::select('select * from "vehicle"'); //SAMPLE


        return view('livewire.create-vehicle-form',
        [
        'userid' => $userid,
        'accidentID'=> $accidentID,
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
        'vehicleManufacturer'=>$vehicleManufacturer,
        'vehicleModel'=>$vehicleModel,
        'vehicleOnFire'=>$vehicleOnFire,
        'vehicleRoadwayAlignment'=>$vehicleRoadwayAlignment,
        'vehicleScatteredDangerousCargo'=>$vehicleScatteredDangerousCargo,
        'vehicleSwerved'=>$vehicleSwerved,
        'vehicleTrailer'=>$vehicleTrailer,
        'vehicleType'=>$vehicleType,
        'vehicleWheelDrive'=>$vehicleWheelDrive
        ]);

    }//loadVehicleForm

    public function loadRoadForm(){
        //Fetch from database all required data from road Tables

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
        $roadTransientConstraints = DB::select('select * from "roadTransientConstraints"');
        $roadAccidentRelatedSignaling = DB::select('select * from "roadAccidentRelatedSignaling"');
        $roadSpeedLimitingFacility = DB::select('select * from "roadSpeedLimitingFacility"');
        $roadSLIContributedToCollision = DB::select('select * from "roadSLIContributedToCollision"');
        $roadInformationSource = DB::select('select * from "roadInformationSource"');
        $roadISTrustLevel = DB::select('select * from "roadISTrustLevel"');
        $roadInvestigationMethod = DB::select('select * from "roadInvestigationMethod"');
        $roadIMTrustLevel = DB::select('select * from "roadIMTrustLevel"');
       // $road = DB::select('select * from "road"'); //SAMPLE


       return view('livewire.create-address-form', [
        'roadTrafficwayFlow_id'=>$roadTrafficwayFlow,
        'roadType_id'=>$roadType,
        'roadSpeedLimitType_id'=>$roadSpeedLimitType,
        'roadJunction_id'=>$roadJunction,
        'roadLocalArea_id'=>$roadLocalArea,
        'roadAlignment_id'=>$roadAlignment,
        'roadConstructionZone_id'=>$roadConstructionZone,
        'roadTrafficSign_id'=>$roadTrafficSigns,
        'roadTrafficSignalDeviceFunctioning_id'=>$roadTrafficSignalDeviceFunctioning,
        'roadSurface_id'=>$roadSurface,
        'roadPedestrianFacility_id'=>$roadPedestrianFacility,
        'roadLightConditions_id'=>$roadLightConditions,
        'roadWeatherConditions_id'=>$roadWeatherConditions,
        'roadStrongWinds_id'=>$roadStrongWinds,
        'roadFog_id'=>$roadFog,
        'roadPollutants_id'=>$roadPollutants,
        'roadTransientConstraints_id'=>$roadTransientConstraints,
        'roadAccidentRelatedSignaling_id'=>$roadAccidentRelatedSignaling,
        'roadSpeedLimitingFacility_id'=>$roadSpeedLimitingFacility,
        'roadSLIContributedToCollision_id'=>$roadSLIContributedToCollision,
        'roadInformationSource_id'=>$roadInformationSource,
        'roadISTrustLevel_id'=>$roadISTrustLevel,
        'roadInvestigationMethod_id'=>$roadInvestigationMethod,
        'roadIMTrustLevel_id'=>$roadIMTrustLevel,
        'roadCycleFacility_id'=>$roadCycleFacility
       ]);

    }//loadRoadForm


    public function postAccidentForm(Request $request){
        $accident = new Accident;
        $user = Auth::user();
        $req = $request->all();
        $idDB= DB::table('accidents')->max('caseNumber');
        $caseNumber = intval($idDB);
        //$d=strtotime("now"); //DEBUG
        $req['accidentDate'] = str_replace("T"," ",$request->accidentDate);
        $req['accidentExpertArrivalDate'] = str_replace("T"," ",$request->accidentExpertArrivalDate);
        $req['caseNumber'] = $caseNumber +1;
        $req['user_id'] = $user->id;
        // dd($request->file('accidentImage'));
        // dd($req);

        $formFields = $request->validate([
            'caseNumber' => 'required|min:1',
            'accidentSeverity_id' => 'required|not_in:0',
            'accidentAbandonedVictim_id' => 'required|not_in:0',
            'accidentGADAS_id' => 'required|not_in:0',
            'accidentAlcohol_id' => 'required|not_in:0',
            'accidentDate' => 'required',
            'accidentDay' => 'required|not_in:0',
            'accidentExpertArrivalDate' => 'required',
            'accidentLongitude' => 'required',
            'accidentLatitude' => 'required',
            'accidentCase' => 'required',
            'accidentNarcotics_id' => 'required|not_in:0',
            'accidentAnimalCollision_id' => 'required|not_in:0',
            'accidentEventsNumber' => 'required|numeric|min:0',
            'accidentGDV' => 'required|numeric|min:0',
            'accidentSynopsis' => 'required',
            'accidentEventSequence_id' => 'required|not_in:0',
            'accidentFirstCollisionEvent_id' => 'required|not_in:0',
            'accidentMostHarmfulEvent_id' => 'required|not_in:0',
            'accidentRelatedFactors_id' => 'required|not_in:0',
            'accidentInformationSource_id' => 'required|not_in:0',
            'accidentISTrustLeve_idl' => 'required|not_in:0',
            'accidentISTLDescription' => 'required',
            'accidentInvestigationMethod_id' => 'required|not_in:0',
            'accidentIMTrustLevel_id' => 'required|not_in:0',
            'accidentIMTLDescription' => 'required',
            'accidentTotalVehicles' => 'required|numeric|min:1',
            'accidentVehicleSedan' => 'required|min:0',
            'accidentVehicleVan' => 'required|min:0',
            'accidentVehicleHatchback' => 'required|min:0',
            'accidentVehicleTruck' => 'required|min:0',
            'accidentVehicleCaravan' => 'required|min:0',
            'accidentVehicleTrailer' => 'required|min:0',
            'accidentVehicleSport' => 'required|min:0',
            'accidentVehicleBus' => 'required|min:0',
            'accidentVehicleComercial' => 'required|min:0',
            'accidentVehiclePickupTruck' => 'required|min:0',
            'accidentVehicleOffroad' => 'required|min:0',
            'accidentVehicleBike' => 'required|min:0',
            'accidentVehicleSuv' => 'required|min:0',
            'accidentVehicleBicycle' => 'required|min:0',
            'accidentVehicleElectric' => 'required|min:0',
            'accidentVehicleOtherTwoWheeler' => 'required|min:0',
            'accidentVehicleAutonomous' => 'required|min:0',
            'accidentVehicleTricycle' => 'required|min:0',
            'accidentVehiclePedestrian' => 'required|min:0',
            'accidentVehicleOther' => 'required|min:0',
            'accidentVehicleUnknown' => 'required|min:0',
            'user_id' => 'required',

        ]);

        try {

            if($request->hasFile('accidentImage')){
                $imageloc = $request->file('accidentImage')->store('images', 'public');
                $image = Image::create([
                    'ImageName' => 'test',
                    'ImageLocation' => $imageloc,
                    'ImageExtension' => 'not-set'
                ]);
            }

            $accident = Accident::create($formFields);



            }
            catch(Exception $ex){
                 return Redirect::back()->withErrors(['all' => 'Error: ' . $ex->getMessage()]);
            }

         return redirect('/dashboard');

    }//postAccidentForm

    public function postVehicleForm(Request $request){
        $user = Auth::user();
        $req = $request->all();
        $idDB= DB::table('vehicles')->max('id');
        $vehicleID = intval($idDB);
        //$d=strtotime("now"); //DEBUG
        $req['-adas-das-d-asd'] = str_replace("T"," ",$request->vehicle);
        $req['-asd-asdas-da-s'] = str_replace("T"," ",$request->vehicle);

        $req['user_id'] = $user->id;
        // $req['accidentID'] = DB::table('accidents')->select('id')->where('caseNumber', '==' , $req['caseNumber']);
        // το παραπάνω αφαιραίθηκε λόγω καλύτερης μεθόδου.
        // dd($req);

        $formFields = $request->validate([
            'accidentID' => 'required|min:0',
            'vehicleLicensePlate' => 'required|min:4',
            'vehicleColor_id' => 'required|not_in:0',
            'vehicleType_id' => 'required|not_in:0',
            'vehicleManufacturer_id' => 'required|not_in:0',
            'vehicleModel_id' => 'required|not_in:0',
            'vehicleWheelDrive_id' => 'required|not_in:0',
            'vehicleDrivePosition_id' => 'required|not_in:0',
            'vehicleLength' => 'required|min:30',
            'vehicleWidth' => 'required|min:30',
            'vehicleRoadWayAlignment_id' => 'required|not_in:0',
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
            'vehicleISTrustLevel_id' => 'required|required|not_in:0',
            'vehicleISTLDescription' => 'required|min:1|max:1000',
            'vehicleInvestigationMethod_id' => 'required|not_in:0',
            'vehicleIMTrustLevel_id' => 'required|not_in:0',
            'vehicleIMTLDescription' => 'required|min:1|max:1000',
            'user_id' => 'required', // THIMISOU NA TO FTIAKSEIS


        ]);

        //var_dump($formFields);
        //Create accident record in the database


        try {
            $vehicle = Vehicle::create($req);
            }
            catch(Exception $ex){
                 return Redirect::back()->withErrors(['all' => 'Error: ' . $ex->getMessage()]);
            }


         return redirect('/dashboard');
    }//postVehicleForm

    public function postAddressForm(Request $request){
        $user = Auth::user();
        $req = $request->all();
        $idDB= DB::table('roads')->max('id');
        $roadID = intval($idDB);
        //$d=strtotime("now"); //DEBUG
        $req['-adas-das-d-asd'] = str_replace("T"," ",$request->vroad);
        $req['-asd-asdas-da-s'] = str_replace("T"," ",$request->road);

        $req['user_id'] = $user->id;

        // dd($req);

        $formFields = $request->validate([
            'caseNumber' => 'required|min:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required',
            '' => 'required|not_in:0',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|numeric|min:0',
            '' => 'required|numeric|min:0',
            '' => 'required',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required',
            '' => 'required|not_in:0',
            '' => 'required|not_in:0',
            '' => 'required|numeric|min:1',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            '' => 'required|min:0',
            'user_id' => 'required', // THIMISOU NA TO FTIAKSEIS


        ]);



        try {
            $vehicle = road::create($req);
            }
            catch(Exception $ex){
                 return Redirect::back()->withErrors(['all' => 'Error: ' . $ex->getMessage()]);
            }


         return redirect('/dashboard');
    }//postAddressForm

    public function viewAccident(Request $req){
        $accidentID = $req->accident;

        dd($req);
        return view('livewire.view-accident', [
            'req' => $req->accident
        ]);
        }

    /// LOAD FORMS --- LOAD ITEMS

    public function editAccident(Accident $accident){
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


        return view('livewire.editAccident', [
        'accident'=>$accident,
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
        'userid'=>$userid
    ]);

    }
    public function update(Request $request, Accident $accident){
        $formFields = $request->validate([
            'caseNumber' => 'required|min:0',
            'accidentSeverity' => 'required|not_in:0',
            'accidentAbandonedVictim' => 'required|not_in:0',
            'accidentGADAS' => 'required|not_in:0',
            'accidentAlcohol' => 'required|not_in:0',
            'accidentDate' => 'required',
            'accidentDay' => 'required|not_in:0',
            'accidentExpertArrivalDate' => 'required',
            'accidentLongitude' => 'required',
            'accidentLatitude' => 'required',
            'accidentCase' => 'required',
            'accidentNarcotics' => 'required|not_in:0',
            'accidentAnimalCollision' => 'required|not_in:0',
            'accidentEventsNumber' => 'required|numeric|min:0',
            'accidentGDV' => 'required|numeric|min:0',
            'accidentSynopsis' => 'required',
            'accidentEventSequence' => 'required|not_in:0',
            'accidentFirstCollisionEvent' => 'required|not_in:0',
            'accidentMostHarmfulEvent' => 'required|not_in:0',
            'accidentRelatedFactors' => 'required|not_in:0',
            'accidentInformationSource' => 'required|not_in:0',
            'accidentISTrustLevel' => 'required|not_in:0',
            'accidentISTLDescription' => 'required',
            'accidentInvestigationMethod' => 'required|not_in:0',
            'accidentIMTrustLevel' => 'required|not_in:0',
            'accidentIMTLDescription' => 'required',
            'accidentTotalVehicles' => 'required|numeric|min:1',
            'accidentVehicleSedan' => 'required|min:0',
            'accidentVehicleVan' => 'required|min:0',
            'accidentVehicleHatchback' => 'required|min:0',
            'accidentVehicleTruck' => 'required|min:0',
            'accidentVehicleCaravan' => 'required|min:0',
            'accidentVehicleTrailer' => 'required|min:0',
            'accidentVehicleSport' => 'required|min:0',
            'accidentVehicleBus' => 'required|min:0',
            'accidentVehicleComercial' => 'required|min:0',
            'accidentVehiclePickupTruck' => 'required|min:0',
            'accidentVehicleOffroad' => 'required|min:0',
            'accidentVehicleBike' => 'required|min:0',
            'accidentVehicleSuv' => 'required|min:0',
            'accidentVehicleBicycle' => 'required|min:0',
            'accidentVehicleElectric' => 'required|min:0',
            'accidentVehicleOtherTwoWheeler' => 'required|min:0',
            'accidentVehicleAutonomous' => 'required|min:0',
            'accidentVehicleTricycle' => 'required|min:0',
            'accidentVehiclePedestrian' => 'required|min:0',
            'accidentVehicleOther' => 'required|min:0',
            'accidentVehicleUnknown' => 'required|min:0',
            'user_id' => 'required',

        ]);

        try {

            if($request->hasFile('accidentImage')){
                $imageloc = $request->file('accidentImage')->store('images', 'public');
                $image = Image::create([
                    'ImageName' => 'test',
                    'ImageLocation' => $imageloc,
                    'ImageExtension' => 'not-set'
                ]);


            }

            $accident->update($formFields);



            }
            catch(Exception $ex){
                 return Redirect::back()->withErrors(['all' => 'Error: ' . $ex->getMessage()]);
            }

         return redirect('/dashboard')->with('message', 'Η ΕΠΕΞΕΡΓΑΣΙΑ ΤΟΥ ΑΤΥΧΗΜΑΤΟΣ ΗΤΑΝ ΕΠΙΤΥΧΗΣ!');
    }

    public function deleteAccident(Accident $accident){
        $accident->delete();
        return redirect('/')->with('message','ΕΠΙΤΥΧΗ ΔΙΑΓΡΑΦΗ ΤΟΥ ΑΤΥΧΗΜΑΤΟΣ');
    }


}
