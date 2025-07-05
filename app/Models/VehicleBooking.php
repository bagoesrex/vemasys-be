<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id', 'user_id', 'region_id',
        'driver_id', 'booking_date', 'start_time',
        'end_time', 'purpose'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function approvals()
    {
        return $this->hasMany(BookingApproval::class, 'booking_id');
    }
}
