<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Booking; // <-- tambahkan ini
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahHotel = Penginapan::count();
        $jumlahUser = User::count();
        $jumlahKategori = Kategori::count();

        // HITUNG RATING DARI TABEL BOOKINGS
        $jumlahRating = Booking::whereNotNull('rating')->count();

        return view('admin.dashboard.index', compact(
            'jumlahHotel',
            'jumlahUser',
            'jumlahKategori',
            'jumlahRating'
        ));
    }
}
