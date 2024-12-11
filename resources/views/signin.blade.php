<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/signin.css">
    <link href="css/bootstrap.min.css">
    <title>Sign In</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/HTML/homepage.php">Home</a></li>
            <li><a href="/HTML/homepage.html#about">Tentang</a></li>
            <li><a href="/HTML/service.html">Layanan</a></li>
            <li><a href="/HTML/signin.php">Login</a></li>
        </ul>
    </nav>
    <section class="signin">
        <div class="container">
            <div class="signin-box">
                <div class="signin-header">
                    <div class="profile-icon"><img src="/pfp.png" alt="pfp"></div>
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
                        <button type="submit" class="btn-signin">Sign In</button>    
                    </form>
                    
                </form>
                <p class="register-link">
                    Sudah memiliki akun? <a href="login.html">Log In disini</a>
                </p>
            </div>
            <div class="image-box">
                <img src="/box in.png" alt="Tumpukan Kotak" />
            </div>
        </div>
    </section>
</body>
</html>