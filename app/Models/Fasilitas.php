<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
     use HasFactory;

    protected $fillable = [
        'kode_fasilitas',
        'nama_fasilitas',
    ];

    public function penginapan()
    {
        return $this->belongsToMany(Penginapan::class, 'penginapan_fasilitas');
    }

}


