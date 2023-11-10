<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialRequirements extends Model
{
    use HasFactory;

    public function parkingSpaces(){
        return $this->belongsTo(ParkingSpace::class);
    }
}
