<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\VehicleBooking;

class AdminBookingHistoryController extends Controller
{
    public function index()
    {
        $bookings = VehicleBooking::with(['vehicle', 'user', 'region', 'driver', 'approvals'])
            ->whereDoesntHave('approvals', function ($query) {
                $query->where('status', 'pending');
            })
            ->orderBy('booking_date', 'desc')
            ->get();

        return response()->json($bookings);
    }
}
