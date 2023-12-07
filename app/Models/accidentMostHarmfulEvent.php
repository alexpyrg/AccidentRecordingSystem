<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentMostHarmfulEvent extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='accidentMostHarmfulEvent';
    public function accident(){
      return  $this->hasMany(Accident::class, 'accidentMostHarmfulEvent_id');
    }
}
