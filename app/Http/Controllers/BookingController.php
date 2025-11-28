<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // ← tambahkan ini

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

    public function history()
    {
        $bookings = Booking::where('email', Auth::user()->email)  // ← aman
                            ->with('penginapan')
                            ->latest()
                            ->get();

        return view('history.index', compact('bookings'));
    }

    public function addRating(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        $booking = Booking::findOrFail($id);

        $booking->rating = $request->rating;
        $booking->review = $request->review;
        $booking->save();

        return back()->with('success', 'Terima kasih sudah memberikan rating!');
    }
}
