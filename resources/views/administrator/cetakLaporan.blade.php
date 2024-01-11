<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <title>Cetak Laporan</title>
  </head>
  <body>
    <h5 class="text-center">
        <b>Laporan Penjualan Laundry 5758</b><br>
        </h5>
        <h6 class="text-center">
        Jl. Panglima Sudirman No.27A, Ngambak, Beru, Kec. Wlingi, Kabupaten Blitar, Jawa Timur 66184<br>
        Telp. 0813-3477-9697<br>
        </h6>
        <hr>
        <table class="table" id="datatables">
                      <thead>
                          <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nomor Pesanan</th>
                          <th scope="col">Nama Pemesan</th>
                          <th scope="col">No. Telp</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Tanggal Pesanan</th>
                          <th scope="col">keterangan</th>
                          <th scope="col">Total Bayar</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($data_pelanggan as $data)
                          <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{ $data->kode }}</td>
                          <td>{{ $data->nama_pelanggan }}</td>
                          <td>{{ $data->telepon }}</td>
                          <td>{{ $data->alamat }}</td>
                          <td>{{ $data->created_at}}</td>
                          <td>{{ $data->nama_layanan }} | {{ $data->keterangan }}</td>
                          <td>{{ $data->harga * $data->jumlah }}</td>
                          </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                    <tr>
                      <td colspan="5" class="text-center"><b>Total Pendapatan:</b></td>
                      <td><b>{{ 'Rp ' . number_format($total_pendapatan, 0, ',', '.') }}</b></td>
                    </tr>
                  </tfoot>
          </table>
          </div>
  </body>
</html>
<script>
window.print();
</script>