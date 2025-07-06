<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\VehicleBooking;

class AdminBookingPendingController extends Controller
{
    public function index()
    {
        $bookings = VehicleBooking::with([
                'vehicle',
                'user',
                'region',
                'driver',
                'approvals' => function ($q) {
                    $q->where('status', 'pending');
                }
            ])
            ->whereHas('approvals', function ($q) {
                $q->where('status', 'pending');
            })
            ->orderBy('booking_date', 'desc')
            ->get();

        return response()->json($bookings);
    }
}
