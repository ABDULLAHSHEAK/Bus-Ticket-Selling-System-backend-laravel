<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_name',
        'bus_model',
        'supervisor_name',
        'supervisor_number',
    ];
    // public function trip(){
    //     return $this->hasOne(Trip::class);
    // }
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
