<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class RatingController extends Controller
{
    public function index()
    {
        // hanya rating yang sudah diisi
        $ratings = Booking::whereNotNull('rating')
                           ->with(['user', 'penginapan'])
                           ->latest()
                           ->get();

        return view('admin.rating.index', compact('ratings'));
    }
}
