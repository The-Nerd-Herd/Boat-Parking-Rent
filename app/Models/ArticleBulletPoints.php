<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleBulletPoints extends Model
{
    use HasFactory;

    public function houseRule(){
        return $this->belongsTo(HouseRules::class);
    }
}
