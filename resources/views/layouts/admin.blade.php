
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
  @yield('css')
</head>

<body class="">
  <div class="wrapper ">
    @include('components.sidebar'){{-- Untuk memanggil komponen yang ada di sidebade.blade.php --}}
        
    <div class="main-panel">
      <!-- Navbar -->
      @include('components.navbar'){{-- Untuk memanggil komponen yang ada di navbar.blade.php --}}
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
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
  @yield('js')
</body>

</html>