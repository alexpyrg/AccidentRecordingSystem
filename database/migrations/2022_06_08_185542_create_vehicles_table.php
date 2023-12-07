<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accident_id')->references("id")->on("accidents")->onUpdate('cascade');
            $table->string('vehicleLicensePlate');
            $table->foreignId('vehicleColor_id')->references('id')->on('vehicleColor')->onUpdate('cascade');
            $table->foreignId('vehicleType_id')->references('id')->on('vehicleType')->onUpdate('cascade');
            $table->foreignId('vehicleManufacturer_id')->references('id')->on('vehicleManufacturer')->onUpdate('cascade');
            $table->foreignId('vehicleModel_id')->references('id')->on('vehicleModel')->onUpdate('cascade');
            $table->foreignId('vehicleWheelDrive_id')->references('id')->on('vehicleWheelDrive')->onUpdate('cascade');
            $table->foreignId('vehicleDrivePosition_id')->references('id')->on('vehicleDrivePosition')->onUpdate('cascade');
            $table->float('vehicleLength');
            $table->float('vehicleWidth');
            $table->foreignId('vehicleRoadwayAlignment_id')->references('id')->on('vehicleRoadwayAlignment')->onUpdate('cascade');
            $table->foreignId('vehicleTrailer_id')->references('id')->on('vehicleTrailer')->onUpdate('cascade');
            $table->integer('vehicleEnginePower');
            $table->year('vehicleManufactureDate');
            $table->float('vehicleTare');
            $table->float('vehicleAxles');
            $table->longText('vehicleGeneralComments');
            $table->integer('vehicleOccupantsNumber');
            $table->foreignId('vehicleDamagePossibleFactor_id')->references('id')->on('vehicleDamagePossibleFactor')->onUpdate('cascade');
            $table->longText('vehicleDPFComments');
            $table->foreignId('vehicleInspected_id')->references('id')->on('vehicleInspected')->onUpdate('cascade');
            $table->foreignId('vehicleSwerved_id')->references('id')->on('vehicleSwerved')->onUpdate('cascade');
            $table->foreignId('vehicleDangerousCargo_id')->references('id')->on('vehicleDangerousCargo')->onUpdate('cascade');
            $table->foreignId('vehicleScatteredDangerousCargo_id')->references('id')->on('vehicleScatteredDangerousCargo')->onUpdate('cascade');
            $table->integer('vehicleCollisions');
            $table->foreignId('CDC3_id')->onUpdate('cascade')->references('id')->on('cdc3');
            $table->foreignId('CDC4_id')->onUpdate('cascade')->references('id')->on('cdc4');
            $table->foreignId('vehicleOnFire_id')->references('id')->on('vehicleOnFire')->onUpdate('cascade');
            $table->foreignId('vehicleFirefightingEquipmentUsed_id')->references('id')->on('vehicleFireFightingEquipmentUsed')->onUpdate('cascade');
            $table->foreignId('vehicleCollisionOffroadObject_id')->references('id')->on('vehicleCollisionOffroadObject')->onUpdate('cascade');
            $table->foreignId('vehicleCollisionType_id')->references('id')->on('vehicleCollisionType')->onUpdate('cascade');
            $table->foreignId('ABS_id')->onUpdate('cascade')->references('id')->on('abs');
            $table->foreignId('ESP_id')->onUpdate('cascade')->references('id')->on('esp');
            $table->foreignId('TCS_id')->onUpdate('cascade')->references('id')->on('tcs');
            $table->foreignId('ACS_id')->onUpdate('cascade')->references('id')->on('acs');
            $table->foreignId('LDW_id')->onUpdate('cascade')->references('id')->on('ldw');
            $table->foreignId('CSS_id')->onUpdate('cascade')->references('id')->on('css');
            $table->text('vehicleElectronicsComments');
            $table->foreignId('vehicleInformationSource_id')->references('id')->on('vehicleInformationSource')->onUpdate('cascade');
            $table->foreignId('vehicleISTrustLevel_id')->references('id')->on('vehicleISTrustLevel')->onUpdate('cascade');
            $table->text('vehicleISTLDescription');
            $table->foreignId('vehicleInvestigationMethod_id')->references('id')->on('vehicleInvestigationMethod')->onUpdate('cascade');
            $table->foreignId('vehicleIMTrustLevel_id')->references('id')->on('vehicleIMTrustLevel')->onUpdate('cascade');
            $table->text('vehicleIMTLDescription');
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
        Schema::dropIfExists('vehicles');
    }
}
