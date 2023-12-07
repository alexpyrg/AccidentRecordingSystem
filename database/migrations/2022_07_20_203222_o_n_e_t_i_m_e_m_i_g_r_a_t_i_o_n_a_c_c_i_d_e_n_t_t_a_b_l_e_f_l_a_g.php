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
        Schema::create('accidents', function(Blueprint $table){
            $table->renameColumn('accidentGADAS','accidentGADAS_id');
            $table->renameColumn('accidentEventSequence','accidentEventSequence_id');
            $table->renameColumn('accidentFirstCollisionEvent','accidentFirstCollisionEvent_id');
            $table->renameColumn('accidentMostHarmfulEvent','accidentMostHarmfulEvent_id');
            $table->renameColumn('accidentRelatedFactors','accidentRelatedFactors_id');
            $table->renameColumn('accidentAnimalCollision','accidentAnimalCollision_id');
            $table->renameColumn('accidentAbandonedVictim','accidentAbandonedVictim_id');
            $table->renameColumn('accidentAlcohol','accidentAlcohol_id');
            $table->renameColumn('accidentSeverity','accidentSeverity_id');
            $table->renameColumn('accidentNarcotics','accidentNarcotics_id');
            $table->renameColumn('accidentInformationSource','accidentInformationSource_id');
            $table->renameColumn('accidentISTrustLevel','accidentISTrustLevel_id');
            $table->renameColumn('accidentInvestigationMethod','accidentInvestigationMethod_id');
            $table->renameColumn('accidentIMTrustLevel','accidentIMTrustLevel_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('accidents', function(Blueprint $table){
            $table->renameColumn('accidentGADAS','accidentGADAS_id');
            $table->renameColumn('accidentEventSequence','accidentEventSequence_id');
            $table->renameColumn('accidentFirstCollisionEvent','accidentFirstCollisionEvent_id');
            $table->renameColumn('accidentMostHarmfulEvent','accidentMostHarmfulEvent_id');
            $table->renameColumn('accidentRelatedFactors','accidentRelatedFactors_id');
            $table->renameColumn('accidentAnimalCollision','accidentAnimalCollision_id');
            $table->renameColumn('accidentAbandonedVictim','accidentAbandonedVictim_id');
            $table->renameColumn('accidentAlcohol','accidentAlcohol_id');
            $table->renameColumn('accidentSeverity','accidentSeverity_id');
            $table->renameColumn('accidentNarcotics','accidentNarcotics_id');
            $table->renameColumn('accidentInformationSource','accidentInformationSource_id');
            $table->renameColumn('accidentISTrustLevel','accidentISTrustLevel_id');
            $table->renameColumn('accidentInvestigationMethod','accidentInvestigationMethod_id');
            $table->renameColumn('accidentIMTrustLevel','accidentIMTrustLevel_id');
        });
    }
};
