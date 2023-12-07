<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentNarcotics extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='accidentNarcotics';
    public function accident(){
        return   $this->hasMany(Accident::class, 'accidentNarcotics_id');
    }
}
