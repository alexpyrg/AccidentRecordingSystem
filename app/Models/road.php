<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class road extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'roads';

    protected $fillable = [
        'accident_id',
        'roadTrafficwayFlow_id',
        'roadLaneNumber',
        'roadType_id',
        'roadSpeedLimit',
        'roadSpeedLimitType_id',
        'roadJunction_id',
        'roadLocalArea_id',
        'roadAlignment_id',
        'roadConstructionZone_id',
        'roadTrafficSigns_id',
        'roadTrafficSignalDeviceFunctioning_id',
        'roadSurface_id',
        'roadPedestrianFacility_id',
        'roadCycleFacility_id',
        'roadLightConditions_id',
        'roadWeatherConditions_id',
        'roadStrongWinds_id',
        'roadFog_id',
        'roadConditionComments',
        'roadPollutants_id',
        'roadTransientConstraints_id',
        'roadAccidentRelatedSignaling_id',
        'roadSignalingFactors_id',
        'roadSpeedLimitingFacility_id',
        'roadSLIContributedToCollision_id',
        'roadPossibleFactorsComments',
        'roadOtherComments',
        'roadInformationSource_id',
        'roadISTrustLevel_id',
        'roadISTLDescription',
        'roadInvestigationMethod_id',
        'roadIMTrustLevel_id',
        'roadIMTLDescription',
        'images',
        'user_id'

    ];

    protected $guarded = [
        'id'
    ];

    public function accident(){
        return $this->belongsTo(Accident::class,'accident_id', 'id');
    }
    public function roadType(){
        return $this->belongsTo(road_type::class, 'roadType_id' ,'id');
    }

    public function roadAccidentRelatedSignaling(){
        return $this->belongsTo(roadAccidentRelatedSignaling::class, 'roadAccidentRelatedSignaling_id' ,'id');
    }

    public function roadAlignment(){
        return $this->belongsTo(roadAlignment::class, 'roadAlignment_id' ,'id');
    }

    public function roadConstructionZone(){
        return $this->belongsTo(roadConstructionZone::class, 'roadConstructionZone_id' ,'id');
    }

    public function roadCycleFacility(){
        return $this->belongsTo(roadCycleFacility::class, 'roadCycleFacility_id' ,'id');
    }

    public function roadFog(){
        return $this->belongsTo(roadFog::class, 'roadFog_id' ,'id');
    }

    public function roadJunction(){
        return $this->belongsTo(roadJunction::class, 'roadJunction_id' ,'id');
    }

    public function roadLightConditions(){
        return $this->belongsTo(roadLightConditions::class, 'roadLightConditions_id' ,'id');
    }

    public function roadLocalArea(){
        return $this->belongsTo(roadLocalArea::class, 'roadLocalArea_id' ,'id');
    }

    public function roadPedestrianFacility(){
        return $this->belongsTo(roadPedestrianFacility::class, 'roadPedestrianFacility_id' ,'id');
    }

    public function roadSLIContributedToCollision(){
        return $this->belongsTo(roadSLIContributedToCollision::class, 'roadSLIContributedToCollision_id' ,'id');
    }

    public function roadSpeedLimitingFacility(){
        return $this->belongsTo(roadSpeedLimitingFacility::class, 'roadSpeedLimitingFacility_id' ,'id');
    }

    public function roadSpeedLimitType(){
        return $this->belongsTo(roadSpeedLimitType::class, 'roadSpeedLimitType_id' ,'id');
    }

    public function roadStrongWinds(){
        return $this->belongsTo(roadStrongWinds::class, 'roadStrongWinds_id' ,'id');
    }

    public function roadSurface(){
        return $this->belongsTo(roadSurface::class, 'roadSurface_id' ,'id');
    }

    public function roadSurfaceContaminents(){
        return  $this->belongsTo(roadSurfaceContaminents::class, 'roadSurfaceContaminents_id' ,'id');
    }

    public function roadTrafficSignalDeviceFunctioning(){
        return $this->belongsTo(roadTrafficSignalDeviceFunctioning::class, 'roadTrafficSignalDeviceFunctioning_id' ,'id');
    }

    public function roadTrafficSigns(){
        return $this->belongsTo(roadTrafficSigns::class, 'roadTrafficSigns_id' ,'id');
    }

    public function roadTrafficWayFlow(){
        return $this->belongsTo(roadTrafficWayFlow::class, 'roadTrafficWayFlow_id' ,'id');
    }

    public function roadTransientConstraints(){
        return $this->belongsTo(roadTransientConstraints::class, 'roadTransientConstraints_id' ,'id');
    }

    public function roadWeatherConditions(){
        return $this->belongsTo(roadWeatherConditions::class, 'roadWeatherConditions_id' ,'id');
    }


    public function Images(){
        $this->hasMany(Image::class);
    }
}
