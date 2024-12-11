<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ganti path asset menggunakan helper Laravel -->
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('images/logo sementara.png') }}" alt="Logo">
        </div>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="{{ route('signin') }}">Login</a></li>
        </ul>
    </nav>
    <section class="signin">
        <div class="container">
            <div class="signin-box">
                <div class="signin-header">
                    <div class="profile-icon"></div>
                    <h1>SELAMAT DATANG!</h1>
                    <p>Silahkan Sign In</p>
                </div>
                <form class="signin-form" method="POST" action="{{ route('signin.submit') }}">
                    @csrf
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username Anda" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email anda">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                    
                    <!-- Tombol untuk submit form -->
                    <button type="submit" class="btn-signin">Sign In</button>    
                </form>
                <p class="register-link">
                    Sudah memiliki akun? <a href="{{ route('login') }}">Log In disini</a>
                </p>
            </div>
            <div class="image-box">
                <!-- Ganti path image menggunakan helper Laravel -->
                <img src="{{ asset('images/box in.png') }}" alt="Tumpukan Kotak" />
            </div>
        </div>
    </section>
</body>
</html>
