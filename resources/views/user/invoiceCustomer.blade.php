<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('templateadmin')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('templateadmin')}}/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('tittle') {{-- agar dinamis --}}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('templateadmin')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('templateadmin')}}/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('templateadmin')}}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="">
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="{{asset('templateadmin')}}/assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{ asset('templateadmin/assets/img/mike.jpg') }}" alt="...">
                        <h5 class="title">{{ $user->name }}</h5> <!-- Menampilkan nama user -->
                    </a>
                    <p class="description">
                        {{ $user->role }} <!-- Menampilkan role user -->
                    </p>
                    <p class="description">
                        {{ $user->email }} <!-- Menampilkan email user -->
                    </p>
                    <p class="description">
                        {{ $user->phone_number }} <!-- Menampilkan phone number user -->
                    </p>
                    <p class="description">
                        {{ $user->address }} <!-- Menampilkan address user -->
                    </p>
                </div>
            </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Invoice Pembelian</h5>
              </div>
              <div class="card-body">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Produk</th>
                    <td>: {{ $product->name }}</td>
                  </tr>
                  <tr>
                    <th>Harga Satuan</th>
                    <td>: Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                  </tr>
                  <tr>
                    <th>Jumlah Beli</th>
                    <td>: {{ $quantity }}</td>
                  </tr>
                  <tr>
                    <th>Total Harga</th>
                    <td>: <strong>Rp{{ number_format((float) $product->harga * (int) $quantity, 2) }}</strong></td>
                  </tr>
                  <tr>
                    <th>Tanggal Transaksi</th>
                    <td>: {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}</td>
                  </tr>
                </table>
          
                <div class="alert alert-warning mt-4" role="alert">
                  Silakan lakukan pembayaran ke rekening yang telah ditentukan dan unggah bukti pembayaran Anda di halaman riwayat pesanan.
                </div>
          
                <div class="text-center mt-4">
                  <a href="#" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('templateadmin')}}/assets/js/core/jquery.min.js"></script>
  <script src="{{asset('templateadmin')}}/assets/js/core/popper.min.js"></script>
  <script src="{{asset('templateadmin')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{asset('templateadmin')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('templateadmin')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('templateadmin')}}/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('templateadmin')}}/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('templateadmin')}}/assets/demo/demo.js"></script>
</body>

</html>