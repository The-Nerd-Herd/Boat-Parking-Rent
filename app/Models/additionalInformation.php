<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class additionalInformation extends Model
{
    use HasFactory;

    public function parkingSpace()
    {
        $this->belongsTo(ParkingSpace::class);
    }

}
