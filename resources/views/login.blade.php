<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/login.css')}}">
    <link href="css/bootstrap.min.css">
    <title>Login Page</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>
    <section class="login">
        <div class="container">
            <div class="login-box">
                <div class="login-header">
                    <div class="profile-icon"><img src="{{ asset('assets/pfp.png') }}" alt="profile-pic"></div>
                    <h1>SELAMAT DATANG!</h1>
                    <p>Silahkan Log In</p>
                </div>
                <form class="login-form">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username Anda" required>
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                    
                    <form action="{{ route('homepage-login') }}">
                       <button type="submit" class="btn-login">Log In</button> 
                    </form>
                </form>
                <p class="register-link">
                    Tidak punya akun? <a href="{{ route('signin') }}">Daftar disini</a>
                </p>
            </div>
            <div class="image-box">
                <img src="{{ asset('assets/box in.png') }}" alt="Tumpukan Kotak" />
            </div>
        </div>
    </section>

    </nav>
</body>
</html>