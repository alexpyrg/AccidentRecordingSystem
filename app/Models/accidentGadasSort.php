<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentGadasSort extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='accidentGADAS';
    public function accident(){
      return  $this->hasMany(Accident::class, 'accidentGADAS_id');
    }
}
