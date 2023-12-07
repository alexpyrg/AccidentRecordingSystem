<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Accident extends Model
{
    use HasFactory;

    protected $table= 'accidents';
    public $timestamps = false;

    protected $fillable = [

        'caseNumber',
        'accidentSeverity',
        'accidentAbandonedVictim',
        'accidentGADAS',
        'accidentAlcohol',
        'accidentDate'  ,
        'accidentDay',
        'accidentExpertArrivalDate'  ,
        'accidentLongitude'  ,
        'accidentLatitude'  ,
        'accidentCase' ,
        'accidentNarcotics',
        'accidentAnimalCollision' ,
        'accidentEventsNumber',
        'accidentGDV',
        'accidentSynopsis',
        'accidentEventSequence',
        'accidentFirstCollisionEvent',
        'accidentMostHarmfulEvent',
        'accidentRelatedFactors',
        'accidentInformationSource',
        'accidentISTrustLevel',
        'accidentISTLDescription' ,
        'accidentInvestigationMethod',
        'accidentIMTrustLevel',
        'accidentIMTLDescription'  ,
        'accidentTotalVehicles',
        'accidentVehicleSedan',
        'accidentVehicleVan',
        'accidentVehicleHatchback',
        'accidentVehicleTruck',
        'accidentVehicleCaravan',
        'accidentVehicleTrailer',
        'accidentVehicleSport',
        'accidentVehicleBus',
        'accidentVehicleComercial',
        'accidentVehiclePickupTruck',
        'accidentVehicleOffroad',
        'accidentVehicleBike',
        'accidentVehicleSuv',
        'accidentVehicleBicycle',
        'accidentVehicleElectric',
        'accidentVehicleOtherTwoWheeler',
        'accidentVehicleAutonomous',
        'accidentVehicleTricycle',
        'accidentVehiclePedestrian',
        'accidentVehicleOther',
        'accidentVehicleUnknown',
        'user_id',
    ];

    protected $guarded = [];
    // FOR CUSTOM TABLES = protected $table = 'table_name_here';
    // protected $primaryKey = 'caseNumber';
    // protected $foreignKey = 'caseNumber';

    public static function find($id){
        $records = self::all();

        foreach ($records as $record){
            if($record['id'] == $id){
                return $record;
            }
        }
    }


    public function streets(){
        return $this->hasMany(Street::class, 'caseNumber', 'caseNumber');
    }

    public function vehicles(){
        $this->hasMany(Vehicle::class, 'caseNumber', 'caseNumber');
    }
    public function user(){
        $this->belongsTo(User::class);
    }// The one that created the accident

    public function accidentAbandonedVictim(){
        return  $this->belongsTo(accidentAbandonedVictim::class,  'accidentAbandonedVictim_id', 'id',);
    }
    public function accidentSeverity(){
        return  $this->belongsTo(accidentSeverity::class,'accidentSeverity_id','id');
    }
    public function accidentAlcohol(){
        return  $this->belongsTo(accidentAlcohol::class,  'accidentAlcohol_id', 'id');
    }
    public function accidentAnimalCollision(){
        return  $this->belongsTo(accidentAnimal::class, 'accidentAnimalCollision_id', 'id');
    }
    public function accidentEventSequence(){
        return  $this->belongsTo(accidentEventSequence::class, 'accidentEventSequence_id', 'id');
    }
    public function accidentFirstCollisionEvent(){
        return  $this->belongsTo(accidentFirstCollisionEvent::class, 'accidentFirstCollisionEvent_id' ,'id');
    }
    public function accidentGadasSort(){
        return $this->belongsTo(accidentGadasSort::class, 'accidentGADAS_id' ,'id');
    }
    public function accidentMostHarmfulEvent(){
        return  $this->belongsTo(accidentMostHarmfulEvent::class, 'accidentMostHarmfulEvent_id' ,'id');
    }
    public function accidentNarcotics(){
        return  $this->belongsTo(accidentNarcotics::class, 'accidentNarcotics_id' ,'id');
    }

    public function Images(){
      return  $this->hasMany(Image::class);
    }

}
