<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        // Ambil kode terakhir
        $last = Kategori::orderBy('id', 'desc')->first();
        $nextNumber = $last ? ((int) substr($last->kode_kategori, 2)) + 1 : 1;

        // Auto code: KH001
        $kode = 'KH' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        Kategori::create([
            'kode_kategori' => $kode,
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_kategori' => 'required',
            'nama_kategori' => 'required'
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus!');
    }
}
