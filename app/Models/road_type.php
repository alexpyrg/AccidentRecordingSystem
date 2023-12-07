<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class road_type extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function road(){
        $this->hasMany('road');
    }
}
