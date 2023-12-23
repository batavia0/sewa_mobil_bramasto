@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container">
    <div class="col-xl-12 col-lg-12 col-md-9">
        <div class="card-body border-0 p-0">
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                    </div>
                    <form class="register" method="POST" action="{{ route('register.register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-register"
                                id="name" aria-describedby="name" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-register"
                                id="licensePlate" name="license_plate" aria-describedby="licensePlate" placeholder="Nopol Kendaraan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-register"
                                id="driveLicense" name="drive_license_number" aria-describedby="driveLicense" placeholder="Nomor SIM">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control form-control-register"
                                id="phoneNumber" name="phone_number" aria-describedby="phoneNumber" placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-register"
                                id="address" name="address" aria-describedby="address" placeholder="Alamat">
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">
                            Buat akun
                        </button>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection