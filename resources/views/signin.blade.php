<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/signin.css')}}">
    <link href="css/bootstrap.min.css">
    <title>Sign In</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('homepage') }}">Tentang</a></li>
            <li><a href="{{ route('login') }}">Layanan</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>
    <section class="signin">
        <div class="container">
            <div class="signin-box">
                <div class="signin-header">
                    <div class="profile-icon"><img src="{{ asset('assets/pfp.png') }}" alt="pfp"></div>
                    <h1>SELAMAT DATANG!</h1>
                    <p>Silahkan Sign In</p>
                </div>
                <form class="signin-form">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username Anda" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email anda">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                    
                    <form action="homepageLogin.html">
                        <a href="{{ route('homepage-login') }}">
                            <button type="submit" class="btn-signin">Sign In</button>    
                        </a>
                        
                    </form>
                    
                </form>
                <p class="register-link">
                    Sudah memiliki akun? <a href="{{ route('login') }}">Log In disini</a>
                </p>
            </div>
            <div class="image-box">
                <img src="{{ asset('assets/box in.png') }}" alt="Tumpukan Kotak" />
            </div>
        </div>
    </section>
</body>
</html>