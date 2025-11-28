<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penginapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'gallery',
        'nama_penginapan',
        'kategori_id',
        'detail',
        'harga',  
        'alamat',
        'latitude',
        'longitude',
        'is_promo',
    ];

    protected $casts = [
        'gallery' => 'array',
        'is_promo' => 'boolean',
    ];

    // Relasi ke kategori (1 penginapan punya 1 kategori)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // Relasi ke fasilitas (banyak fasilitas)
    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'penginapan_fasilitas');
    }
}
