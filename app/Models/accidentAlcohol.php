<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentAlcohol extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "accidentAlcohol";

    public function accident(){
      return  $this->hasMany(Accident::class,'accidentAlcohol_id');
    }
}
