@extends('layout.master')
@section('title', 'Order | Laundry 5758')
@section('content')
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <li><a class="btn btn-primary" href="/">Kembali</a></li>
        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4 h-100">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Pilihan Layanan</h6> 
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="post" action="{{ route('order.store') }}">
                            @csrf
                            @php
                                $nomor_pesanan=mt_rand(0000000,9999999);
                            @endphp
                            <div class="form-group">
                              <label for="kode">Kode</label>
                              <input type="number" name="kode" class="form-control" id="kode" value="{{$nomor_pesanan}}" readonly>
                              <input type="number" name="id_pesanan" class="form-control" id="inputNo" hidden>
                            </div>
                            <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" name="nama_pelanggan" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                              <label for="telepon">No. Telpon</label>
                              <input type="text" name="telepon" class="form-control" id="telepon" aria-describedby="telepon" placeholder="Masukkan No. Telpon">
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                              <label for="layanan">Layanan</label>
                              <select name="layanan" class="custom-select">
                                <option selected>pilih menu</option>
                                @foreach($data_layanan as $layanan)
                                <option value="{{ $layanan->id }}">{{ $layanan->layanan }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="jumlah">Berat / Jumlah</label>
                              <input type="number" name="jumlah" class="form-control" id="jumlah" aria-describedby="jumlah" placeholder="Berat / jumlah (Kg/satuan)">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Harga</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="pb-2 d-flex flex-column">
                            @foreach ($data_layanan as $layanan)
                            <span class="mb-2">
                                <i class="fas fa-circle text-primary"></i> {{$layanan->layanan}} :
                                <span>{{$layanan->harga}} /kg</span>
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
@endsection