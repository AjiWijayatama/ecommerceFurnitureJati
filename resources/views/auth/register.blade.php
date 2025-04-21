<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Register</title>

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

    <!-- Pesan Error -->
    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <!-- Pesan Sukses -->
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="wrapper-login">
      <div class="login">
        <div class="wrapper-login-form">
          <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <h1 class="h1 h1Login">Register</h1>
            
            <!-- Input Name -->
            <div class="input-box d-flex align-items-center">
              <input type="text" name="name" placeholder="Full Name" required class="input-email">
              <i class='bx bxs-user'></i>
            </div>

            <!-- Input Email -->
            <div class="input-box d-flex align-items-center">
              <input type="email" name="email" placeholder="Email" required class="input-email">
              <i class='bx bxs-envelope'></i>
            </div>
            
            <!-- Input Password -->
            <div class="input-box d-flex align-items-center">
              <input type="password" name="password" placeholder="Password" required class="input-email"> 
              <i class='bx bxs-lock'></i>
            </div>

            <!-- Input Confirm Password -->
            <div class="input-box d-flex align-items-center">
              <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="input-email"> 
              <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- Input Phone Number -->
            <div class="input-box d-flex align-items-center">
              <input type="text" name="phone_number" placeholder="Phone Number" class="input-email">
              <i class='bx bxs-phone'></i>
            </div>

            <!-- Input Address -->
            <div class="input-box d-flex align-items-center">
              <textarea name="address" placeholder="Address" class="input-email" rows="3" ></textarea>
              <i class='bx bxs-home'></i>
            </div>

            <button type="submit" class="btn login-btn">Register</button>

            <div class="register-link">
              <p class="p-register">Already have an account? <a href="{{ route('login.form') }}" class="a-register">Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

</body>
</html>
