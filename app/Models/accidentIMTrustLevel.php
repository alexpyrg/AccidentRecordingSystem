<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentIMTrustLevel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'accidentIMTrustLevel';
    public function accident(){
        return $this->hasMany(Accident::class, 'accidentIMTrustLevel_id');
    }
}
