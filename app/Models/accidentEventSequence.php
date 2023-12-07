<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentEventSequence extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='accidentEventSequence';
    public function accident(){
      return  $this->hasMany(Accident::class, 'accidentEventSequence_id');
    }
}
