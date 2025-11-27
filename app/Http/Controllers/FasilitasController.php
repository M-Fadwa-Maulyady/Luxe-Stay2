<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required'
        ]);

        // Kode otomatis
        $last = Fasilitas::orderBy('id', 'desc')->first();
        $nextNumber = $last ? ((int) substr($last->kode_fasilitas, 2)) + 1 : 1;

        $kode = 'FP' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        Fasilitas::create([
            'kode_fasilitas' => $kode,
            'nama_fasilitas' => $request->nama_fasilitas,
        ]);

        return redirect()->route('admin.fasilitas')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_fasilitas' => 'required',
            'nama_fasilitas' => 'required'
        ]);

        $fasilitas = Fasilitas::findOrFail($id);

        $fasilitas->update([
            'kode_fasilitas' => $request->kode_fasilitas,
            'nama_fasilitas' => $request->nama_fasilitas
        ]);

        return redirect()->route('admin.fasilitas')->with('success', 'Fasilitas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();

        return redirect()->route('admin.fasilitas')->with('success', 'Fasilitas berhasil dihapus!');
    }
}
