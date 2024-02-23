<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'trip_date',
        'trip_time',
        'start_from',
        'destination',
    ];

    public function bus(){
        return $this->belongsTo(Bus::class);
    }
    public function seats(){
        return $this->hasMany(Seat::class);
    }
    public function StartLocation(){
        return $this->belongsTo(Location::class,'start_from');
    }
    public function EndLocation(){
        return $this->belongsTo(Location::class,'destination');
    }
}
