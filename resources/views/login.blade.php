<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menggunakan asset untuk link CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <nav>
        <div class="logo">
            <!-- Menggunakan asset untuk gambar -->
            <img src="{{ asset('logo sementara.png') }}" alt="Logo">
        </div>
        <ul>
            <!-- Menggunakan route() untuk menuju halaman homepage -->
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <!-- Menggunakan route() untuk menuju halaman login -->
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>
    
    <section class="login">
        <div class="container">
            <div class="login-box">
                <div class="login-header">
                    <div class="profile-icon"></div>
                    <h1>SELAMAT DATANG!</h1>
                    <p>Silahkan Log In</p>
                </div>
                
                <!-- Form Login menggunakan route() pada action -->
                <form class="login-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username Anda" required>
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                    
                    <button type="submit" class="btn-login">Log In</button>
                </form>
                
                <p class="register-link">
                    Tidak punya akun? <a href="{{ route('signin') }}">Daftar disini</a>
                </p>
            </div>
            <div class="image-box">
                <!-- Menggunakan asset untuk gambar -->
                <img src="{{ asset('box in.png') }}" alt="Tumpukan Kotak" />
            </div>
        </div>
    </section>
</body>
</html>
