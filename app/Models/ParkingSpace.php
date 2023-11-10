<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    use HasFactory;

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function additionalInformation(){
        return $this->belongsTo(additionalInformation::class);
    }

    public function yearlyFees(){
        return $this->belongsTo(yearlyFees::class);
    }
}
