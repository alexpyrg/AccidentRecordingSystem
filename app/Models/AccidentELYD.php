<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentELYD extends Model
{
    use HasFactory;

    //Accident Eager Loading Yajra Datatables

    protected $fillable = [
    'caseNumber',
    'accidentAnimalCollision',
    'accidentAlcohol',
    'accidentSeverity',
    'accidentTotalVehicles',
    'accidentCase',
    'accidentDate'
    ];



}
