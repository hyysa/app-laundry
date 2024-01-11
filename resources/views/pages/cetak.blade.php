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

    <title>Cetak Pesanan</title>
  </head>
  <body>
  <!-- <div class="container" style="width: 9cm;"> -->

  <hr>
  <h6 class="text-center">
  <b>LAUNDRY 5758</b><br>
  Jl. Panglima Sudirman No.27A, Ngambak, Beru, Kec. Wlingi, Kabupaten Blitar, Jawa Timur 66184<br>
  Telp. 0813-3477-9697<br>
  </h6>
  <hr>
  <div class="row">
    <div class="col-8">
    <h6>
    Nama : {{$data_pelanggan->nama_pelanggan}}<br>
    Kode : {{$data_pelanggan->kode}}<br>
    </h6>
    </div>
    <div class="col-4">
    <h6>
    Tgl : {{$data_pelanggan->created_at}}<br>
    Kasir: Hilga
    </h6>
    </div>
  </div>
  <hr>
  <h6 class="text-center">
  *** keterangan ***
  </h6>
  <hr>
  <table class="table" >
            <thead>
                <tr>
                <th scope="col">Kode</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{ $data_pelanggan->kode }}</td>
                <td>{{ $data_pelanggan->nama_layanan }}</td>
                <td>{{ 'Rp ' . number_format($data_pelanggan->harga, 0, ',', '.') }}</td>
                <td>{{ $data_pelanggan->jumlah}}</td>
                <td>{{ 'Rp ' . number_format($data_pelanggan->harga * $data_pelanggan->jumlah, 0, ',', '.') }}</td>
                </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="4" class="text-end"><b>Total bayar:</b></td>
                <td><b>{{ 'Rp ' . number_format($data_pelanggan->harga * $data_pelanggan->jumlah, 0, ',', '.') }}</b></td>
              </tr>
            </tfoot>
    </table>

    <h6 class="text-center">
    -- Laundry 5758 --
    </h6>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('')}}assets/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<script>
window.print();
</script>