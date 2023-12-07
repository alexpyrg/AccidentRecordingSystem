<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->string('caseNumber')->unique();
            $table->timestamp('accidentDate');
            $table->string('accidentDay');
            $table->timestamp('accidentExpertArrivalDate');
            $table->float('accidentLongitude');
            $table->float('accidentLatitude');
            $table->string('accidentCase');
            $table->foreignId('accidentSeverity_id')->references('id')->on('accidentSeverity')->onUpdate('cascade');
            $table->foreignId('accidentNarcotics_id')->references('id')->on('accidentNarcotics')->onUpdate('cascade');
            $table->foreignId('accidentAlcohol_id')->references('id')->on('accidentAlcohol')->onUpdate('cascade');
            $table->foreignId('accidentAbandonedVictim_id')->references('id')->on('accidentAbandonedVictim')->onUpdate('cascade');
            $table->foreignId('accidentAnimalCollision_id')->references('id')->on('accidentAnimalCollision')->onUpdate('cascade');
            $table->integer('accidentEventsNumber');
            $table->integer('accidentGDV');
            $table->foreignId('accidentGADAS_id')->references('id')->on('accidentGADAS')->onUpdate('cascade');
            $table->foreignId('accidentEventSequence_id')->references('id')->on('accidentEventSequence')->onUpdate('cascade');
            $table->foreignId('accidentFirstCollisionEvent_id')->references('id')->on('accidentFirstCollisionEvent')->onUpdate('cascade');
            $table->foreignId('accidentMostHarmfulEvent_id')->references('id')->on('accidentMostHarmfulEvent')->onUpdate('cascade');
            $table->foreignId('accidentRelatedFactors_id')->references('id')->on('accidentRelatedFactors')->onUpdate('cascade');
            $table->integer('accidentTotalVehicles');
            $table->integer('accidentVehicleSedan');
            $table->integer('accidentVehicleHatchback');
            $table->integer('accidentVehicleCaravan');
            $table->integer('accidentVehicleSport');
            $table->integer('accidentVehicleComercial');
            $table->integer('accidentVehicleOffroad');
            $table->integer('accidentVehicleSuv');
            $table->integer('accidentVehicleElectric');
            $table->integer('accidentVehicleAutonomous');
            $table->integer('accidentVehiclePedestrian');
            $table->integer('accidentVehicleUnknown');
            $table->integer('accidentVehicleVan');
            $table->integer('accidentVehicleTruck');
            $table->integer('accidentVehicleTrailer');
            $table->integer('accidentVehicleBus');
            $table->integer('accidentVehiclePickupTruck');
            $table->integer('accidentVehicleBike');
            $table->integer('accidentVehicleBicycle');
            $table->integer('accidentVehicleOtherTwoWheeler');
            $table->integer('accidentVehicleTricycle');
            $table->integer('accidentVehicleOther');
            $table->text('accidentSynopsis');
            $table->boolean('accidentFlagged')->nullable();
            $table->foreignId('accidentInformationSource_id')->references('id')->on('accidentInformationSource')->onUpdate('cascade');
            $table->foreignId('accidentISTrustLevel_id')->references('id')->on('accidentISTrustLevel')->onUpdate('cascade');
            $table->text('accidentISTLDescription');
            $table->foreignId('accidentInvestigationMethod_id')->references('id')->on('accidentInvestigationMethod')->onUpdate('cascade');
            $table->foreignId('accidentIMTrustLevel_id')->references('id')->on('accidentIMTrustLevel')->onUpdate('cascade');
            $table->text('accidentIMTLDescription');
            // $table->foreignId('accidentImages')->onUpdate('cascade')->nullable();
            $table->foreignId('user_id')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accidents');
    }
}
