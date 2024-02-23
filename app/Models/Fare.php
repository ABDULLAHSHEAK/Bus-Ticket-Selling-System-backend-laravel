<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    use HasFactory;
    protected $fillable = [
        'base_location',
        'start_from',
        'destination',
        'fare_amount',
        'effect_from',
    ];

    public function MainLocation(){
        return $this->belongsTo(Location::class,'base_location');
    }
    public function StartLocation(){
        return $this->belongsTo(Location::class,'start_from');
    }
    public function EndLocation(){
        return $this->belongsTo(Location::class,'destination');
    }
}
