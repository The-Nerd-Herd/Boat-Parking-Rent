<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yearly extends Model
{
    use HasFactory;


    function parkingSpace(){
        return $this->belongsTo(ParkingSpace::class);
    }
}
