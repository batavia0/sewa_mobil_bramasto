<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'phone_number' => 'required',
        ]);

        $phone_number = $request->input('phone_number');
        $user = User::where('phone_number', $phone_number)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->intended('dashboard');
        }
    return redirect('login')->withInput()->with(['error' => 'Akun tidak ditemukan atau login salah.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return redirect()->route('login');
    }
}
