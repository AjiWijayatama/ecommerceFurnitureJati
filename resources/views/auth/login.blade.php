<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Styles / Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])          
  
</head>
<body>
    <!-- Menampilkan pesan jika login berhasil -->
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan pesan error jika login gagal -->
    @if (session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif

    <!-- Menampilkan pesan info untuk pendaftaran -->
    @if (session('signup_message'))
        <div class="alert alert-info mt-3">
            {{ session('signup_message') }}
        </div>
    @endif

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div class="wrapper-login">
      <div class="login">
        <div class="wrapper-login-form">
          <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <h1 class="h1 h1Login">Login</h1>
            
            <!-- Input Email -->
            <div class="input-box">
              <input type="email" name="email" placeholder="Email" required class="input-email">
              <i class='bx bxs-user icons-ep'></i>
            </div>
            
            <!-- Input Password -->
            <div class="input-box">
              <input type="password" name="password" placeholder="Password" required class="input-email"> 
              <i class='bx bxs-lock icons-ep'></i>
            </div>
  
            <div class="remember-forgot">
              <label for="" class="label-rf">
                <input type="checkbox" name="remember" class="input-rf"> Remember Me
              </label>
              <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>
  
            <button type="submit" class="btn login-btn">Login</button>
  
            <div class="register-link">
              <p class="p-register">Don't have an account? <a href="{{ route('register.form') }}" class="a-register">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

</body>
</html>