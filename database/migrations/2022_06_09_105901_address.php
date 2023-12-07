<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('roads', function(blueprint $table){
        $table->id();
        $table->foreignId('accident_id')->references('id')->on('accidents')->onUpdate('cascade'); //FK FROM ACCIDENT <---
        $table->foreignId('roadTrafficwayFlow_id')->references('id')->on('roadTrafficwayFlow')->onUpdate('cascade');//fk
        $table->integer('roadLaneNumber'); // SIMPLE INTEGER
        $table->foreignId('roadType_id')->references('id')->on('roadType')->onUpdate('cascade'); //fk
        $table->integer('roadSpeedLimit'); // SIMPLE INTEGER
        $table->foreignId('roadSpeedLimitType_id')->references('id')->on('roadSpeedLimitType')->onUpdate('cascade');//fk
        $table->foreignId('roadJunction_id')->references('id')->on('roadJunction')->onUpdate('cascade');//fk
        $table->foreignId('roadLocalArea_id')->references('id')->on('roadLocalArea')->onUpdate('cascade');//fk
        $table->foreignId('roadAlignment_id')->references('id')->on('roadAlignment')->onUpdate('cascade');//fk
        $table->foreignId('roadConstructionZone_id')->references('id')->on('roadConstructionZone')->onUpdate('cascade');//fk
        $table->foreignId('roadTrafficSigns_id')->references('id')->on('roadTrafficSigns')->onUpdate('cascade');//fk
        $table->foreignId('roadTrafficSignalDeviceFunctioning_id')->references('id')->on('roadTrafficSignalDeviceFunctioning')->onUpdate('cascade');//fk
        $table->foreignId('roadSurface_id')->references('id')->on('roadSurface')->onUpdate('cascade');//fk
        $table->foreignId('roadPedestrianFacility_id')->references('id')->on('roadPedestrianFacility')->onUpdate('cascade');//fk
        $table->foreignId('roadCycleFacility_id')->references('id')->on('roadCycleFacility')->onUpdate('cascade');//fk
        $table->foreignId('roadLightConditions_id')->references('id')->on('roadLightConditions')->onUpdate('cascade');//fk
        $table->foreignId('roadWeatherConditions_id')->references('id')->on('roadWeatherConditions')->onUpdate('cascade');//fk
        $table->foreignId('roadStrongWinds_id')->references('id')->on('roadStrongWinds')->onUpdate('cascade');//fk
        $table->foreignId('roadFog_id')->references('id')->on('roadFog')->onUpdate('cascade');//fk
        $table->longText('roadConditionComments'); //Huge text
        $table->foreignId('roadPollutants_id')->references('id')->on('roadPollutants')->onUpdate('cascade');//fk
        $table->foreignId('roadTransientConstraints_id')->references('id')->on('roadTransientConstraints')->onUpdate('cascade');//fk
        $table->foreignId('roadAccidentRelatedSignaling_id')->references('id')->on('roadAccidentRelatedSignaling')->onUpdate('cascade');//fk
        $table->foreignId('roadSpeedLimitingFacility_id')->references('id')->on('roadSpeedLimitingFacility')->onUpdate('cascade');//SLI//fk
        $table->foreignId('roadSLIContributedToCollision_id')->references('id')->on('roadSLIContributedToCollision')->onUpdate('cascade');//fk
        $table->longText('roadPossibleFactorsComments');// HUGE TEXT
        $table->longText('roadOtherComments'); //HUGE TEXT
        $table->foreignId('roadInformationSource_id')->references('id')->on('roadInformationSource')->onUpdate('cascade');
        $table->foreignId('roadISTrustLevel_id')->references('id')->on('roadISTrustLevel')->onUpdate('cascade');
        $table->longText('roadISTLDescription');//HUGE TEXT
        $table->foreignId('roadInvestigationMethod_id')->references('id')->on('roadInvestigationMethod')->onUpdate('cascade');
        $table->foreignId('roadIMTrustLevel_id')->references('id')->on('roadIMTrustLevel')->onUpdate('cascade');
        $table->longText('roadIMTLDescription');//HUGE TEXT
        // $table->foreignId('images_id')->references('id')->on('Images');
        $table->foreignId('user_id')->onUpdate('cascade');
        $table->timestamps();

        // $table->foreignId('');
        // $table->foreignId('');
        // $table->foreignId('');
        // $table->foreignId('');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roads');
    }
};
