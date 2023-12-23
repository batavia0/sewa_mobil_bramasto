<?php

namespace App\Models;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReturnCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'return_date',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
