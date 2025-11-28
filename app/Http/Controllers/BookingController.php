<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('penginapan')->latest()->get();
        return view('admin.booking.index', compact('bookings'));
    }

    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return back()->with('success', 'Status booking berhasil diperbarui!');
    }

}

