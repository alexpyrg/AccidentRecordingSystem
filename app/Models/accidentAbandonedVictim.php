<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentAbandonedVictim extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'accidentAbandonedVictim';
    public function accident(){
       return $this->hasMany(Accident::class, 'accidentAbandonedVictim_id');
    }
}
