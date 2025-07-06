<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\BookingApproval;
use App\Models\User;

class ApprovalController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $query = BookingApproval::with('booking')
            ->where('status', 'pending');

        if ($user->role === 'approver_1') {
            $query->where('level', 1);
        } elseif ($user->role === 'approver_2') {
            $query->where('level', 2);
        }

        $approvals = $query->get();

        return response()->json($approvals);
    }

    public function approve($id)
    {
        $approval = BookingApproval::findOrFail($id);

        $approval->update([
            'status' => 'approved',
            'approved_at' => now(),
            'approver_id' => Auth::id()
        ]);

        if ($approval->level == 1) {
            $nextApprover = User::where('role', 'approver_2')->first();

            BookingApproval::create([
                'booking_id'  => $approval->booking_id,
                'approver_id' => $nextApprover->id,
                'level'       => 2,
                'approved_at' => null,
                'status'      => 'pending',
            ]);

            return response()->json(['message' => 'Booking disetujui, menunggu approval level 2']);
        }

        return response()->json(['message' => 'Booking disetujui oleh approver level 2']);
    }

    public function reject($id)
    {
        $approval = BookingApproval::findOrFail($id);

        $approval->update([
            'status' => 'rejected',
            'approved_at' => now(),
            'approver_id' => Auth::id()
        ]);

        return response()->json(['message' => 'Booking ditolak']);
    }

    public function history()
    {
        $user = Auth::user();

        $query = BookingApproval::with('booking')
            ->where('status', '!=', 'pending');

        if ($user->role === 'approver_1') {
            $query->where('level', 1);
        } elseif ($user->role === 'approver_2') {
            $query->where('level', 2);
        }

        $history = $query->orderBy('approved_at', 'desc')->get();

        return response()->json($history);
    }
}
