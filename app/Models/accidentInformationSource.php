<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentInformationSource extends Model
{
    use HasFactory;

    protected $table = 'accidentInformationSource';
    public function accident(){
        return $this->hasMany(Accident::class, 'accidentInformationSource_id');
    }
}
