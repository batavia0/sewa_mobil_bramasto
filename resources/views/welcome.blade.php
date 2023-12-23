@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Sistem Penyewaan Mobil</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Saya Ingin Menyewa Mobil</h5>
                <a href="#" class="btn btn-primary">Pilih Menjadi Penyewa</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Saya Ingin Menyewakan Mobil</h5>
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Pilih Menjadi Rental</a>
            </div>
        </div>
    </div>
@endsection
