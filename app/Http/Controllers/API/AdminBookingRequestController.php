<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleBooking;
use App\Models\BookingApproval;

class AdminBookingRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id'   => 'required|exists:vehicles,id',
            'user_id'      => 'required|exists:users,id',
            'region_id'    => 'required|exists:regions,id',
            'driver_id'    => 'required|exists:drivers,id',
            'booking_date' => 'required|date',
            'start_time'   => 'required|date_format:Y-m-d H:i:s',
            'end_time'     => 'required|date_format:Y-m-d H:i:s|after_or_equal:start_time',
            'purpose'      => 'required|string|max:100',
        ]);

        $booking = VehicleBooking::create([
            'vehicle_id'   => $request->vehicle_id,
            'user_id'      => $request->user_id,
            'region_id'    => $request->region_id,
            'driver_id'    => $request->driver_id,
            'booking_date' => $request->booking_date,
            'start_time'   => $request->start_time,
            'end_time'     => $request->end_time,
            'purpose'      => $request->purpose,
        ]);

        BookingApproval::create([
            'booking_id'   => $booking->id,
            'approver_id'  => 1,
            'level'        => 1,
            'approved_at'  => null,
            'status'       => 'pending',
        ]);

        return response()->json([
            'message'    => 'Booking berhasil dibuat, menunggu approval.',
            'booking_id' => $booking->id
        ]);
    }
}
