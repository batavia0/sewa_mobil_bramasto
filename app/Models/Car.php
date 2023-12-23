<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'brand',
        'model',
        'license_plate',
        'rental_rate',
        'daily_rate',
        'is_rented',
    ];

    // Relasi dengan tabel users (pemilik mobil)
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
