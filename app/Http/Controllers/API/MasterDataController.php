<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Region;
use App\Models\User;
use App\Models\FuelLog;
use App\Models\VehicleService;
use App\Models\VehicleOwner;

class MasterDataController extends Controller
{
    public function vehicles()
    {
        return response()->json(Vehicle::with(['owner', 'region'])->get());
    }

    public function drivers()
    {
        return response()->json(Driver::with('region')->get());
    }

    public function regions()
    {
        return response()->json(Region::all());
    }

    public function users()
    {
        return response()->json(User::with('region')->get());
    }

    public function fuellogs()
    {
        return response()->json(FuelLog::with('vehicle')->get());
    }

    public function services()
    {
        return response()->json(VehicleService::with('vehicle')->get());
    }

    public function owners()
    {
        return response()->json(VehicleOwner::all());
    }
}
