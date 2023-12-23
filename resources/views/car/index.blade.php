@extends('dashboard.dashboard')
@section('title', 'Dashboard - Tambah Mobil')
@section('content-tambah-mobil')
<div class="col-lg-6 mb-4">
    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Mobil</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" aria-describedby="brand" name="brand" placeholder="Daihatsu" required>
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" aria-describedby="model" placeholder="Pickup 2010" name="model">
                </div>
                <div class="form-group">
                    <label for="nopol">Nopol Kendaraan</label>
                    <input type="text" class="form-control" id="nopol" aria-describedby="nopol" name="nopol" required placeholder="B 1234 ABC">
                </div>
                <div class="form-group">
                    <label for="rental_rate">Tarif sewa perhari</label>
                    <input type="number" class="form-control" id="nopol" aria-describedby="nopol" name="nopol" aria-valuemin="50000" value="50000" required><small>IDR</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
</div>
@endsection