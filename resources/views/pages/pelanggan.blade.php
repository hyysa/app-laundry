@extends('layout.master')
@section('title', 'Pelanggan | Laundry 5758')
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
        <h1 class="h3 mb-2 text-gray-800">Daftar Pelanggan</h1>
        <p class="mb-4"><i><b>Note :</b></i> Admin akan menghubungi pelanggan untuk melakukan konfirmasi layanan yang dipilih dan saat pengantaran laundry.</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pelanggan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kode</th>
                                <th>Nama Pelangan</th>
                                <th>Layanan</th>
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
                                <td>{{$pelanggan->nama_layanan}}</td>
                                <td>{{$pelanggan->jumlah}}</td>
                                <td>{{$pelanggan->keterangan}}</td>
                                <td><a class="btn btn-success" href="{{route('pelanggan.cetak', $pelanggan->id)}}" role="button">Cetak</a></td>
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