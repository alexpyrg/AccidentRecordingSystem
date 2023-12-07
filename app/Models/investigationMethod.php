<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investigationMethod extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function accident(){
        return $this->hasMany(Accident::class,'investigationMethod', 'id');
    }

    public function road(){
        return $this->hasMany(Road::class,'investigationMethod', 'id');
    }
}
