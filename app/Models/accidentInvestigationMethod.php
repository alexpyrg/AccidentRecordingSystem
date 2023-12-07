<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentInvestigationMethod extends Model
{
    use HasFactory;
    protected $table ='accidentInvestigationMethod';
    public function accident(){
        return $this->hasMany(Accident::class, 'accidentInvestigationMethod_id');
    }
}
