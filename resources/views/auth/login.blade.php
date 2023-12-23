@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="col-xl-12 col-lg-12 col-md-9">
        <div class="card-body border-0">
            <div class="col-lg-12">
                <div class="p-5">
                    @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                    @endif

                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('login.login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="phone_number" aria-describedby="phoneNumber" name="phone_number"
                                placeholder="Nomor telepon">
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">
                            Login
                        </button>
                        <hr>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('register') }}">Buat akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection