<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login Page</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="{{ asset('assets/logo fix.png') }}" alt="Logo">
        </div>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>

    <!-- Login Section -->
    <section class="login">
        <div class="container">
            <div class="login-box">
                <!-- Header -->
                <div class="login-header">
                    <div class="profile-icon">
                        <img src="{{ asset('assets/pfp.png') }}" alt="profile-pic">
                    </div>
                    <h1>SELAMAT DATANG!</h1>
                    <p>Silahkan Log In</p>
                </div>

                <!-- Form login -->
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Input Email -->
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required value="{{ old('email') }}">
                    @error('email')
                        <div class="error-message" style="color: red; font-size: 12px;">{{ $message }}</div>
                    @enderror

                    <!-- Input Password -->
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                    @error('password')
                        <div class="error-message" style="color: red; font-size: 12px;">{{ $message }}</div>
                    @enderror

                    <!-- Tombol login -->
                    <button type="submit" class="btn-login">Log In</button>
                </form>

                <!-- Pesan kesalahan umum (misal email/password salah) -->
                @if ($errors->any() && !$errors->has('email') && !$errors->has('password'))
                    <div class="error-message" style="color: red; font-size: 14px; text-align: center;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- Link untuk registrasi jika belum punya akun -->
                <p class="register-link">
                    Tidak punya akun? <a href="{{ route('register') }}">Daftar disini</a>
                </p>
            </div>

            <!-- Kotak gambar tambahan -->
            <div class="image-box">
                <img src="{{ asset('assets/box in.png') }}" alt="Tumpukan Kotak" />
            </div>
        </div>
    </section>
</body>

</html>
