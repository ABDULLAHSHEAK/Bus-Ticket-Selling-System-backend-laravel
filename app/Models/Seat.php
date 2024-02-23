<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'trip_id', 'trip_from', 'trip_to', 'seat_no', 'fare_per_seat', 'total_pare',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
    // public function bus()
    // {
    //     return $this->belongsToMany(Bus::class);
    // }

    public function StartFrom()
    {
        return $this->belongsTo(Location::class, 'trip_from');
    }
    public function Destination()
    {
        return $this->belongsTo(Location::class, 'trip_to');
    }
}
