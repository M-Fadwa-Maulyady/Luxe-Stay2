<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'penginapan_id',
        'nama',
        'email',
        'telepon',
        'checkin_date',
        'checkout_date',
        'total_night',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }   
    
    public function penginapan()
    {
        return $this->belongsTo(Penginapan::class);
    }
}

