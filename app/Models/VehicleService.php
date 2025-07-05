<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleService extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'service_date', 'cost', 'service_type', 'description'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
