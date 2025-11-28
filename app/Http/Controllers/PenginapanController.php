<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use App\Models\Kategori;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Gambar utama
        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('penginapan', 'public');
        }

        // Gallery (banyak gambar)
        $gallery = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $gallery[] = $file->store('penginapan/gallery', 'public');
            }
        }

        // Create data utama
        $penginapan = Penginapan::create([
            'nama_penginapan' => $request->nama_penginapan,
            'kategori_id'     => $request->kategori_id,
            'detail'          => $request->detail,
            'gambar'          => $gambar,
            'gallery'         => $gallery,
            'alamat'          => $request->alamat,
            'latitude'        => $request->latitude,
            'longitude'       => $request->longitude,
            'is_promo'        => $request->has('is_promo'),
        ]);

        // Fasilitas pivot
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
            'kategori_id'     => 'required',
            'gambar'          => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'gallery.*'       => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $penginapan = Penginapan::findOrFail($id);

        // Gambar utama
        $gambar = $penginapan->gambar;
        if ($request->hasFile('gambar')) {
            if ($gambar && Storage::disk('public')->exists($gambar)) {
                Storage::disk('public')->delete($gambar);
            }
            $gambar = $request->file('gambar')->store('penginapan', 'public');
        }

        // Gallery baru (ditambah)
        $gallery = $penginapan->gallery ?? [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $gallery[] = $file->store('penginapan/gallery', 'public');
            }
        }

        // Update data
        $penginapan->update([
            'nama_penginapan' => $request->nama_penginapan,
            'kategori_id'     => $request->kategori_id,
            'detail'          => $request->detail,
            'gambar'          => $gambar,
            'gallery'         => $gallery,
            'alamat'          => $request->alamat,
            'latitude'        => $request->latitude,
            'longitude'       => $request->longitude,
            'is_promo'        => $request->has('is_promo'),
        ]);

        // Update fasilitas pivot
        $penginapan->fasilitas()->sync($request->fasilitas);

        return redirect()->route('admin.penginapan')->with('success', 'Penginapan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $penginapan = Penginapan::findOrFail($id);

        // Hapus gambar utama
        if ($penginapan->gambar && Storage::disk('public')->exists($penginapan->gambar)) {
            Storage::disk('public')->delete($penginapan->gambar);
        }

        // Hapus semua gallery
        if ($penginapan->gallery) {
            foreach ($penginapan->gallery as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        // Hapus pivot
        $penginapan->fasilitas()->detach();

        // Hapus data
        $penginapan->delete();

        return redirect()->route('admin.penginapan')->with('success', 'Penginapan berhasil dihapus!');
    }


    /*** LANDING ***/
    public function landing()
    {
        $hotel = Kategori::where('nama_kategori', 'Hotel')->first();
        $villa = Kategori::where('nama_kategori', 'Villa')->first();
        $apartemen = Kategori::where('nama_kategori', 'Apartemen')->first();

        $hotelImg = $hotel ? Penginapan::where('kategori_id', $hotel->id)->first() : null;
        $villaImg = $villa ? Penginapan::where('kategori_id', $villa->id)->first() : null;
        $aptImg   = $apartemen ? Penginapan::where('kategori_id', $apartemen->id)->first() : null;

        $promo = Penginapan::where('is_promo', true)->first();

        return view('landing', compact(
            'hotel','villa','apartemen','hotelImg','villaImg','aptImg','promo'
        ));
    }

    public function stayByCategory(Kategori $kategori)
    {
        $penginapan = Penginapan::with('fasilitas')
            ->where('kategori_id', $kategori->id)
            ->get();

        return view('stay.list', compact('kategori', 'penginapan'));
    }

    public function detail($id)
    {
        $p = Penginapan::with(['kategori', 'fasilitas'])->findOrFail($id);
        return view('stay.detail', compact('p'));
    }

}
