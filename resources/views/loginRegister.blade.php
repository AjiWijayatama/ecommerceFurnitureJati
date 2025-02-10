<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

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
  <div class="wrapper-login">
    <div class="login">
      <div class="wrapper">
        <form action="">
          <h1>Login</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" required>
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock' ></i>
          </div>
    
          <div class="remember-forgot">
            <label for="">
              <input type="checkbox"> Remember Me
            </label>
            <a href="">Forgot Password?</a>
          </div>
    
          <button type="submit" class="btn">Login</button>
          <div class="register-link">
            <p>Don't have an account? <a href="">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>