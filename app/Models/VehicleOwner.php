<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleOwner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'contact_info'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'owner_id');
    }
}
