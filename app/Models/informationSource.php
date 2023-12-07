<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informationSource extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function accident(){
        return $this->hasMany(Accident::class,'informationSource', 'id');
    }

    public function road(){
        return $this->hasMany(Road::class,'informationSource', 'id');
    }
}
