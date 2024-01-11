@extends('layout.super')
@section('title', 'Daftar Transaksi | Administrator')
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
        <h1 class="h3 mb-2 text-gray-800">Daftar Transaksi</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi</h6>
                <hr>
                <a class="btn btn-success" href="{{ route('cetak.laporan') }}" role="button"><i class="fas fa-file"></i> Cetak Laporan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kode</th>
                                <th>Nama Pelangan</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pelanggan as $pelanggan)  
                            <tr>
                                <td>{{$pelanggan->created_at}}</td>
                                <td>{{$pelanggan->kode}}</td>
                                <td>{{$pelanggan->nama_pelanggan}}</td>
                                <td>{{$pelanggan->telepon}}</td>
                                <td>{{$pelanggan->alamat}}</td>
                                <td>{{$pelanggan->nama_layanan}}</td>
                                <td>{{$pelanggan->jumlah}}</td>
                                <td>{{$pelanggan->keterangan}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('transaksi.tanggapi', ['id' => $pelanggan->id]) }}" role="button">Tanggapi</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection