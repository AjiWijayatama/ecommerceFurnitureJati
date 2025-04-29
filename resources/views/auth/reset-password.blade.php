<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Reset Password</title>

  <!-- Fonts & Styles -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Custom Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  <!-- Error Message -->
  @if($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <!-- Success Message -->
  @if (session('success'))
    <div class="alert alert-success mt-3">
      {{ session('success') }}
    </div>
  @endif

  <div class="wrapper-login">
    <div class="login">
      <div class="wrapper-login-form">
        <form action="{{ route('password.update') }}" method="POST">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}">
          <h1 class="h1 h1Login">Reset Password</h1>

          <!-- Email -->
          <div class="input-box d-flex align-items-center">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required class="input-email">
            <i class='bx bxs-envelope'></i>
          </div>

          <!-- Password -->
          <div class="input-box d-flex align-items-center">
            <input type="password" name="password" placeholder="New Password" required class="input-email">
            <i class='bx bxs-lock'></i>
          </div>

          <!-- Confirm Password -->
          <div class="input-box d-flex align-items-center">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="input-email">
            <i class='bx bxs-lock'></i>
          </div>

          <button type="submit" class="btn login-btn">Reset Password</button>

          <div class="register-link">
            <p class="p-register">Remember your password? <a href="{{ route('login.form') }}" class="a-register">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
