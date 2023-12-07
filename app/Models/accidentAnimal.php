<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentAnimal extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "accidentAnimalCollision";

    public function accident(){
       return $this->hasMany(Accident::class, 'accidentAnimalCollision_id');
    }


}
