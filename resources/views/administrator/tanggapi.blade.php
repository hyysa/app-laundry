@extends('layout.super')
@section('title', 'Tanggapi | Administrator')
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

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle"
                        src="{{asset('template/img/undraw_profile.svg')}}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tanggapan</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4 h-100">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Form Tanggapi</h6> 
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="post" action="{{ route('transaksi.update', ['id' => $data_pelanggan->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="kode">Kode</label>
                              <input type="number" name="kode" class="form-control" id="kode" value="{{$data_pelanggan->kode}}" readonly>
                              <input type="number" name="id_pesanan" class="form-control" id="inputNo" hidden>
                            </div>
                            <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" name="nama_pelanggan" class="form-control" id="nama" aria-describedby="nama" value="{{$data_pelanggan->nama_pelanggan}}" readonly>
                            </div>
                            <div class="form-group">
                              <label for="telepon">No. Telpon</label>
                              <input type="text" name="telepon" class="form-control" id="telepon" aria-describedby="telepon" value="{{$data_pelanggan->telepon}}" readonly>
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" value="{{$data_pelanggan->alamat}}" readonly>
                            </div>
                            <div class="form-group">
                              <label for="layanan">Layanan</label>
                              <input type="text" name="layanan" class="form-control" id="layanan" aria-describedby="layanan" value="{{$data_pelanggan->nama_layanan}}" readonly>
                            </div>
                            <div class="form-group">
                              <label for="keterangan">Keterangan</label>
                              <select name="keterangan" class="custom-select">
                                <option selected>pilih menu</option>
                                <option value="Proses" {{ $data_pelanggan->keterangan == 'Proses' ? 'selected' : '' }}>Proses</option>
                                <option value="Selesai" {{ $data_pelanggan->keterangan == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="Batal" {{ $data_pelanggan->keterangan == 'Batal' ? 'selected' : '' }}>Batal</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="total">Total Bayar</label>
                              <input type="number" name="total" class="form-control" id="total" aria-describedby="total" value="{{$data_pelanggan->harga*$data_pelanggan->jumlah}}" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
@endsection