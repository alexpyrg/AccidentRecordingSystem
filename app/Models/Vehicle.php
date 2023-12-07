<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = [
        'accident_id',
        'vehicleLicensePlate',
        'vehicleColor_id',
        'vehicleType_id',
        'vehicleManufacturer_id',
        'vehicleModel_id',
        'vehicleWheelDrive_id',
        'vehicleDrivePosition_id',
        'vehicleLength',
        'vehicleWidth',
        'vehicleRoadwayAlignment_id',
        'vehicleTrailer_id',
        'vehicleEnginePower',
        'vehicleManufactureDate',
        'vehicleTare',
        'vehicleAxles',
        'vehicleGeneralComments',
        'vehicleOccupantsNumber',
        'vehicleDamagePossibleFactor_id',
        'vehicleDPFComments',
        'vehicleInspected_id',
        'vehicleSwerved_id',
        'vehicleDangerousCargo_id',
        'vehicleScatteredDangerousCargo_id',
        'vehicleCollisions',
        'CDC3_id',
        'CDC4_id',
        'vehicleOnFire_id',
        'vehicleFirefightingEquipmentUsed_id',
        'vehicleCollisionOffroadObject_id',
        'vehicleCollisionType_id',
        'ABS_id',
        'ESP_id',
        'TCS_id',
        'ACS_id',
        'LDW_id',
        'CSS_id',
        'vehicleElectronicsComments',
        'vehicleInformationSource_id',
        'vehicleISTrustLevel_id',
        'vehicleISTLDescription',
        'vehicleInvestigationMethod_id',
        'vehicleIMTrustLevel_id',
        'vehicleIMTLDescription',
        'user_id'
    ];

    protected $guarded = [
        'id'
    ];

    public function accident(){
        return $this->belongsTo(Accident::class, 'accident_id', 'id');
    }

    public function vehicleABS(){
        return $this->belongsTo(vehicleAbs::class, 'ABS_id', 'id');
    }

    public function vehicleAcs(){
        return $this->belongsTo(vehicleAcs::class, 'ACS_id', 'id');
    }

    public function vehicleCdc3(){
        return $this->belongsTo(vehicleCdc3::class, 'CDC3_id', 'id');
    }

    public function vehicleCdc4(){
        return $this->belongsTo(vehicleCdc4::class, 'CDC4_id', 'id');
    }

    public function vehicleCollisionOffroadObject(){
        return $this->belongsTo(vehicleCollisionOffroadObject::class, 'vehicleCollisionOffroadObject_id', 'id');
    }

    public function vehicleCollisionType(){
        return $this->belongsTo(vehicleCollisionType::class, 'vehicleCollisionType_id', 'id');
    }

    public function vehicleColor(){
        return $this->belongsTo(vehicleColor::class, 'vehicleColor_id', 'id');
    }

    public function vehicleCss(){
        return $this->belongsTo(vehicleCss::class, 'CSS_id', 'id');
    }

    public function vehicleDamagePossibleFactor(){
        return $this->belongsTo(vehicleDamagePossibleFactor::class, 'vehicleDamagePossibleFactor_id', 'id');
    }

    public function vehicleDangerousCargo(){
        return $this->belongsTo(vehicleDangerousCargo::class, 'vehicleDangerousCargo_id', 'id');
    }

    public function vehicleDrivePosition(){
        return $this->belongsTo(vehicleDrivePosition::class, 'vehicleDrivePosition_id', 'id');
    }

    public function vehicleEsp(){
        return $this->belongsTo(vehicleEsp::class, 'ESP_id', 'id');
    }

    public function vehicleFirefightingEquipmentUsed(){
        return $this->belongsTo(vehicleFirefightingEquipmentUsed::class, 'vehicleFirefightingEquipmentUsed_id', 'id');
    }

    public function vehicleInspected(){
        return $this->belongsTo(vehicleInspected::class, 'vehicleInspected_id', 'id');
    }

    public function vehicleLdw(){
        return $this->belongsTo(vehicleLdw::class, 'LDW_id', 'id');
    }

    public function vehicleManufacturer(){
        return $this->belongsTo(vehicleManufacturer::class, 'vehicleManufacturer_id', 'id');
    }

    public function vehicleModel(){
        return $this->belongsTo(vehicleModel::class, 'vehicleModel_id', 'id');
    }

    public function vehicleOnfire(){
        return $this->belongsTo(vehicleOnfire::class, 'vehicleOnfire_id', 'id');
    }

    public function vehicleRoadwayAlignment(){
        return $this->belongsTo(vehicleRoadwayAlignment::class, 'vehicleRoadwayAlignment_id', 'id');
    }

    public function vehicleScatteredDangerousCargo(){
        return $this->belongsTo(vehicleScatteredDangerousCargo::class, 'vehicleScatteredDangerousCargo_id', 'id');
    }

    public function vehicleSwerved(){
        return $this->belongsTo(vehicleSwerved::class, 'vehicleSwerved_id', 'id');
    }

    public function vehicleTcs(){
        return $this->belongsTo(vehicleTcs::class, 'TCS_id', 'id');
    }

    public function vehicleTrailer(){
        return $this->belongsTo(vehicleTrailer::class, 'vehicleTrailer_id', 'id');
    }


    public function vehicleType(){
        return $this->belongsTo(vehicleType::class, 'vehicleType_id', 'id');
    }

    public function vehicleWheelDrive(){
        return $this->belongsTo(vehicleWheelDrive::class, 'vehicleWheelDrive_id', 'id');
    }

    public function vehicleISTrustLevel(){
        return $this->belongsTo(vehicleISTrustLevel::class, 'vehicleISTrustLevel_id', 'id');
    }
    public function vehicleIMTrustLevel(){
        return $this->belongsTo(vehicleIMTrustLevel::class, 'vehicleIMTrustLevel_id', 'id');
    }
    public function vehicleInformationSource(){
        return $this->belongsTo(vehicleInformationSource::class, 'vehicleInformationSource_id', 'id');
    }
    public function vehicleInvestigationMethod(){
        return $this->belongsTo(vehicleInvestigationMethod::class, 'vehicleInvestigationMethod_id', 'id');
    }



    // public function Images(){
    //     return $this->hasMany(Image::class);
    // }


}
