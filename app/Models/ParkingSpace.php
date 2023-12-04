<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'file_path'
    ];



    public function yearly()
    {
        return $this->hasMany(Yearly::class);
    }

    public function monthly()
    {
        return $this->hasMany(Monthly::class);
    }

    public function daily()
    {
        return $this->hasMany(Daily::class);
    }

    public function special()
    {
        return $this->hasMany(Special::class);
    }

    public function additional()
    {
        return $this->hasMany(Additional::class);
    }

    public function houseRules()
    {
        return $this->hasMany(HouseRules::class);
    }

}
