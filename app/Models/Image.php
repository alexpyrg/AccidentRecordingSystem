<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    public $timestamps = false;

    protected $fillable = [
        'ImageName',
        'ImageLocation',
        'ImageExtension'
    ];

    public function accident (){
      return  $this->belongsTo(Accident::class);
    }

    public function street(){
      return  $this->belongsTo(Street::class);
    }

    public function vehicle(){
       return $this->belongsTo(Vehicle::class);
    }
}
