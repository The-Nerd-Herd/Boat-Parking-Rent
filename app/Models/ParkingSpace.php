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

    protected $fillable = [
        'name',
        'file_path'
    ];

    public function additionalInformation(){
        return $this->hasMany(additionalInformation::class);
    }

    public function yearly(){
        return $this->hasMany(Yearly::class);
    }
    public function montlyFees(){
        return $this->hasMany((Monthly::class));
    }

    public function specialRequirements(){
        return $this->hasMany(SpecialRequirements::class);
    }

    public function houseRules(){
        return $this->hasMany(HouseRules::class);
    }

}
