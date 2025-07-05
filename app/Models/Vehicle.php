<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id', 'region_id', 'license_plate', 'type',
        'brand', 'year', 'status', 'is_rented'
    ];

    public function owner()
    {
        return $this->belongsTo(VehicleOwner::class, 'owner_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function bookings()
    {
        return $this->hasMany(VehicleBooking::class);
    }

    public function fuelLogs()
    {
        return $this->hasMany(FuelLog::class);
    }

    public function services()
    {
        return $this->hasMany(VehicleService::class);
    }
}
