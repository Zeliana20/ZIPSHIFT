<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/signin.css') }}">
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

                <form class="signin-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Input Username -->
                    <label for="username">Username</label>
                    <input type="text" id="username" name="name" placeholder="Masukkan username Anda" required value="{{ old('name') }}">
                    @error('name')
                        <div class="error-message" style="color: red; font-size: 12px;">{{ $message }}</div>
                    @enderror

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

                    <!-- Input Confirm Password -->
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Masukkan konfirmasi password" required>
                    @error('password_confirmation')
                        <div class="error-message" style="color: red; font-size: 12px;">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn-signin">Sign In</button>
                </form>

                <!-- Link ke halaman login jika sudah memiliki akun -->
                <p class="register-link">
                    Sudah memiliki akun? <a href="{{ route('login') }}">Log In di sini</a>
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
