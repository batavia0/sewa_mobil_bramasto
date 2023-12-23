<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function indexRentCar()
    {
        return view('rental.index');
    }
}
