<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(Accident $accident, Request $request){

        $accident->accidentVehicleSedan = $request->input('accidentVehicleSedan');
        $accident->accidentVehicleVan = $request->input('accidentVehicleVan');
        $accident->accidentVehicleHatchback = $request->input('accidentVehicleHatchback');
        $accident->accidentVehicleTruck = $request->input('accidentVehicleTruck');
        $accident->accidentVehicleCaravan = $request->input('accidentVehicleCaravan');
        $accident->accidentVehicleTrailer = $request->input('accidentVehicleTrailer');
        $accident->accidentVehicleSport = $request->input('accidentVehicleSport');
        $accident->accidentVehicleBus = $request->input('accidentVehicleBus');
        $accident->accidentVehicleComercial = $request->input('accidentVehicleComercial');
        $accident->accidentVehiclePickupTruck = $request->input('accidentVehiclePickupTruck');
        $accident->accidentVehicleOffroad = $request->input('accidentVehicleOffroad');
        $accident->accidentVehicleBike = $request->input('accidentVehicleBike');
        $accident->accidentVehicleSuv = $request->input('accidentVehicleSuv');
        $accident->accidentVehicleBicycle = $request->input('accidentVehicleBicycle');
        $accident->accidentVehicleElectric = $request->input('accidentVehicleElectric');
        $accident->accidentVehicleOtherTwoWheeler = $request->input('accidentVehicleOtherTwoWheeler');
        $accident->accidentVehicleAutonomous = $request->input('accidentVehicleAutonomous');
        $accident->accidentVehicleTricycle = $request->input('accidentVehicleTricycle');
        $accident->accidentVehiclePedestrian = $request->input('accidentVehiclePedestrian');
        $accident->accidentVehicleOther = $request->input('accidentVehicleOther');
        $accident->accidentVehicleUnknown = $request->input('accidentVehicleUnknown');
    }



    public function test2(){
        $accident = new Accident;
        $req = $request->all();
         $req['accidentDate'] = str_replace("T"," ",$request->accidentDate);
        $req['accidentExpertArrivalDate'] = str_replace("T"," ",$request->accidentExpertArrivalDate);
        // dd($req);


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
            'accidentAnimalCollision' => 'required',
            'accidentEventsNumber' => 'required|numeric|min:0',
            'accidentGDV' => 'required|numeric|min:0',
            'accidentEventSequence' => 'required|not_in:0',
            'accidentFirstCollisionEvent' => 'required|not_in:0',
            'accidentMostHarmulEvent' => 'required|not_in:0',
            'accidentRelatedFactors' => 'required|not_in:0',
            'accidentInformationSource' => 'required|not_in:0',
            'accidentISTrustLevel' => 'required|not_in:0',
            'accidentISTLDescription' => 'required',
            'accidentInvestigationMethod' => 'required|not_in:0',
            'accidentIMTrustLevel' => 'required|not_in:0',
            'accidentIMTLDescription' => 'required',
            'accidentTotalVehicles' => 'required|min:1',
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
            // 'accidentTest' => 'required|not_in:0',

        ]);


        //Create accident record in the database

        try {
              // DB::table('accidents')->insert([
            //     'caseNumber' => $caseNumber+1,
            //     'accidentSeverity' => $req['accidentSeverity'],
            //     'accidentAbandonedVictim' => $req['accidentAbandonedVictim'],
            //     'accidentGADAS' => $req['accidentGADAS'],
            //     'accidentAlcohol' => $req['accidentAlcohol'],
            //     'accidentDate' => $req['accidentDate'],
            //     'accidentDay' => $req['accidentDay'],
            //     'accidentExpertArrivalDate' => $req['accidentExpertArrivalDate'],
            //     'accidentCase' => $req['accidentCase'],
            //     'accidentNarcotics' => $req['accidentNarcotics'],
            //     'accidentAnimalCollision' => $req['accidentAnimalCollision'],
            //     'accidentInvestigationMethod' => $req['accidentInvestigationMethod'],
            //     'accidentIMTrustLevel' => $req['accidentIMTrustLevel'],
            //     'accidentLongitude' => $req['accidentLongitude'],
            //     'accidentLatitude' => $req['accidentLatitude'],
            //     'accidentEventsNumber' => $req['accidentEventsNumber'],
            //     'accidentGDV' => $req['accidentGDV'],
            //     'accidentSynopsis' => $req['accidentSynopsis'],
            //     'accidentISTLDescription' => $req['accidentISTLDescription'],
            //     'accidentEventSequence' => $req['accidentEventSequence'],
            //     'accidentFirstCollisionEvent' => $req['accidentFirstCollisionEvent'],
            //     'accidentMostHarmfulEvent' => $req['accidentMostHarmfulEvent'],
            //     'accidentRelatedFactors' => $req['accidentRelatedFactors'],
            //     'accidentInformationSource' => $req['accidentInformationSource'],
            //     'accidentISTrustLevel' => $req['accidentISTrustLevel'],
            //     'accidentIMTLDescription' => $req['accidentIMTLDescription'],
            //     'accidentTotalVehicles' => $req['accidentTotalVehicles'],
            //     'accidentVehicleSedan' => $req['accidentVehicleSedan'],
            //     'accidentVehicleVan' => $req['accidentVehicleVan'],
            //     'accidentVehicleHatchback' => $req['accidentVehicleHatchback'],
            //     'accidentVehicleTruck' => $req['accidentVehicleTruck'],
            //     'accidentVehicleCaravan' => $req['accidentVehicleCaravan'],
            //     'accidentVehicleTrailer' => $req['accidentVehicleTrailer'],
            //     'accidentVehicleSport' => $req['accidentVehicleSport'],
            //     'accidentVehicleBus' => $req['accidentVehicleBus'],
            //     'accidentVehicleComercial' => $req['accidentVehicleComercial'],
            //     'accidentVehiclePickupTruck' => $req['accidentVehiclePickupTruck'],
            //     'accidentVehicleOffroad' => $req['accidentVehicleOffroad'],
            //     'accidentVehicleBike' => $req['accidentVehicleBike'],
            //     'accidentVehicleSuv' => $req['accidentVehicleSuv'],
            //     'accidentVehicleBicycle' => $req['accidentVehicleBicycle'],
            //     'accidentVehicleElectric' => $req['accidentVehicleElectric'],
            //     'accidentVehicleOtherTwoWheeler' => $req['accidentVehicleOtherTwoWheeler'],
            //     'accidentVehicleAutonomous' => $req['accidentVehicleAutonomous'],
            //     'accidentVehicleTricycle' => $req['accidentVehicleTricycle'],
            //     'accidentVehiclePedestrian' => $req['accidentVehiclePedestrian'],
            //     'accidentVehicleOther' => $req['accidentVehicleOther'],
            //     'accidentVehicleUnknown' => $req['accidentVehicleUnknown'],
            //     'user_id' => $user->id,
            //     'created_at' => $now,
            //     'updated_at' => null,
            //    // '' => $req[''],
           // ]);

            // Vehicles End
            dd($accident->all());

                $accident->save();
            }
            catch(Exception $ex){
                dd($ex);
            }

            $accident = Accident::create([
                'caseNumber' => $req['caseNumber'],
                'accidentSeverity' => $req['accidentSeverity'],
                'accidentAbandonedVictim' => $req['accidentAbandonedVictim'],
                'accidentGADAS' => $req['accidentGADAS'],
                'accidentAlcohol' => $req['accidentAlcohol'],
                'accidentDate' => $req['accidentDate'],
                'accidentDay' => $req['accidentDay'],
                'accidentExpertArrivalDate' => $req['accidentExpertArrivalDate'],
                'accidentCase' => $req['accidentCase'],
                'accidentNarcotics' => $req['accidentNarcotics'],
                'accidentAnimalCollision' => $req['accidentAnimalCollision'],
                'accidentLongitude' => $req['accidentLongitude'],
                'accidentLatitude' => $req['accidentLatitude'],
                'accidentEventsNumber' => $req['accidentEventsNumber'],
                'accidentGDV' => $req['accidentGDV'],
                'accidentSynopsis' => $req['accidentSynopsis'],
                'accidentEventSequence' => $req['accidentEventSequence'],
                'accidentFirstCollisionEvent' => $req['accidentFirstCollisionEvent'],
                'accidentMostHarmfulEvent' => $req['accidentMostHarmfulEvent'],
                'accidentRelatedFactors' => $req['accidentRelatedFactors'],
                'accidentInformationSource' => $req['accidentInformationSource'],
                'accidentISTrustLevel' => $req['accidentISTrustLevel'],
                'accidentIMTLDescription' => $req['accidentIMTLDescription'],
                'accidentTotalVehicles' => $req['accidentTotalVehicles'],
                'accidentVehicleSedan' => $req['accidentVehicleSedan'],
                'accidentVehicleVan' => $req['accidentVehicleVan'],
                'accidentVehicleHatchback' => $req['accidentVehicleHatchback'],
                'accidentVehicleTruck' => $req['accidentVehicleTruck'],
                'accidentVehicleCaravan' => $req['accidentVehicleCaravan'],
                'accidentVehicleTrailer' => $req['accidentVehicleTrailer'],
                'accidentVehicleSport' => $req['accidentVehicleSport'],
                'accidentVehicleBus' => $req['accidentVehicleBus'],
                'accidentVehicleComercial' => $req['accidentVehicleComercial'],
                'accidentVehiclePickupTruck' => $req['accidentVehiclePickupTruck'],
                'accidentVehicleOffroad' => $req['accidentVehicleOffroad'],
                'accidentVehicleBike' => $req['accidentVehicleBike'],
                'accidentVehicleSuv' => $req['accidentVehicleSuv'],
                'accidentVehicleBicycle' => $req['accidentVehicleBicycle'],
                'accidentVehicleElectric' => $req['accidentVehicleElectric'],
                'accidentVehicleOtherTwoWheeler' => $req['accidentVehicleOtherTwoWheeler'],
                'accidentVehicleAutonomous' => $req['accidentVehicleAutonomous'],
                'accidentVehicleTricycle' => $req['accidentVehicleTricycle'],
                'accidentVehiclePedestrian' => $req['accidentVehiclePedestrian'],
                'accidentVehicleOther' => $req['accidentVehicleOther'],
                'accidentVehicleUnknown' => $req['accidentVehicleUnknown'],
               // '' => $req[''],

            ]);
    }
}
