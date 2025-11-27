<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use App\Models\Kategori;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    public function index()
    {
        $penginapan = Penginapan::with(['kategori', 'fasilitas'])->get();
        return view('admin.penginapan.index', compact('penginapan'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        return view('admin.penginapan.create', compact('kategori', 'fasilitas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penginapan' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // upload gambar
        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('penginapan', 'public');
        }

        // create penginapan
        $penginapan = Penginapan::create([
            'nama_penginapan' => $request->nama_penginapan,
            'kategori_id' => $request->kategori_id,
            'detail' => $request->detail,
            'gambar' => $gambar,
            'is_promo' => $request->has('is_promo'),
        ]);

        // pivot fasilitas
        if ($request->has('fasilitas')) {
            $penginapan->fasilitas()->sync($request->fasilitas);
        }

        return redirect()->route('admin.penginapan')->with('success', 'Penginapan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $penginapan = Penginapan::findOrFail($id);
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();

        return view('admin.penginapan.edit', compact('penginapan', 'kategori', 'fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penginapan' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $penginapan = Penginapan::findOrFail($id);

        $gambarBaru = $penginapan->gambar;

        // upload gambar baru
        if ($request->hasFile('gambar')) {
            $fileBaru = $request->file('gambar')->store('penginapan', 'public');

            if ($fileBaru) {
                if ($penginapan->gambar && file_exists(public_path('storage/' . $penginapan->gambar))) {
                    unlink(public_path('storage/' . $penginapan->gambar));
                }
                $gambarBaru = $fileBaru;
            }
        }

        // update data
        $penginapan->update([
            'nama_penginapan' => $request->nama_penginapan,
            'kategori_id' => $request->kategori_id,
            'detail' => $request->detail,
            'gambar' => $gambarBaru,
            'is_promo' => $request->has('is_promo'),
        ]);

        // update fasilitas pivot
        $penginapan->fasilitas()->sync($request->fasilitas);

        return redirect()->route('admin.penginapan')->with('success', 'Penginapan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $penginapan = Penginapan::findOrFail($id);

        // hapus gambar
        if ($penginapan->gambar && file_exists(public_path('storage/' . $penginapan->gambar))) {
            unlink(public_path('storage/' . $penginapan->gambar));
        }

        // hapus pivot
        $penginapan->fasilitas()->detach();

        // hapus data utama
        $penginapan->delete();

        return redirect()->route('admin.penginapan')->with('success', 'Penginapan berhasil dihapus!');
    }

    public function landing()
{
    // Ambil kategori berdasarkan nama
    $hotel = Kategori::where('nama_kategori', 'Hotel')->first();
    $villa = Kategori::where('nama_kategori', 'Villa')->first();
    $apartemen = Kategori::where('nama_kategori', 'Apartemen')->first();

    // Ambil 1 data penginapan untuk setiap kategori (gambar dinamis)
    $hotelImg = $hotel ? Penginapan::where('kategori_id', $hotel->id)->first() : null;
    $villaImg = $villa ? Penginapan::where('kategori_id', $villa->id)->first() : null;
    $aptImg   = $apartemen ? Penginapan::where('kategori_id', $apartemen->id)->first() : null;

    // Promo dinamis
    $promo = Penginapan::where('is_promo', true)->first();

    return view('landing', compact(
        'hotel', 'villa', 'apartemen',
        'hotelImg', 'villaImg', 'aptImg',
        'promo'
    ));
}


public function stayByCategory(Kategori $kategori)
{
    $penginapan = Penginapan::with('fasilitas')
        ->where('kategori_id', $kategori->id)
        ->get();

    return view('stay.list', compact('kategori', 'penginapan'));
}






}
