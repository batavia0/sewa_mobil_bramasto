<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $validator = $request->validate([
        'name' => 'required',
        'drive_license_number' => 'required|unique:users',
        'phone_number' => 'required',
        'address' => 'required'
    ], [
        'required' => [
            'name' => 'Nama wajib diisi',
            'drive_license_number' => 'Nomor SIM wajib diisi',
            'address' => 'Alamat wajib diisi',
            'phone_number' => 'Nomor telepon wajib diisi'
        ],
        'unique' => [
            'drive_license_number' => 'Nomor SIM sudah pernah terdaftar'
        ]
    ]);
        $user = new User();

        $user->name = $request->input('name');
        $user->drive_license_number = $request->input('drive_license_number');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        if($user->save()){
            return redirect()->route('login')->with('message', 'Terimakasih data anda telah berhasil direkam');    
        } else 
        return redirect()->back()->withErrors($validator)->withInput();
}

}
