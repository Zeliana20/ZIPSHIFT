<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/done.css">
    <title>Selesai</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="/HTML/homepage.html">Home</a></li>
            <li><a href="/HTML/homepage.html#about">Tentang</a></li>
            <li><a href="/HTML/service.html">Layanan</a></li>
            <li><a href="/HTML/login.html">Login</a></li>
        </ul>
    </nav>

    <section class="bagian-progress">
        <!-- progress pemesanan -->
        <h1 class="judul">Progress Pesanan</h1>
        <div class="progress">
            <div class="garis-progress"></div>
            <div class="langkah">
                <div class="buletan udah">1</div>
                <span class="teks-progress">Survey</span>
            </div>
            <div class="langkah">
                <div class="buletan udah">2</div>
                <span class="teks-progress">Penawaran</span>
            </div>
            <div class="langkah">
                <div class="buletan udah">3</div>
                <span class="teks-progress">Pembayaran</span>
            </div>
            <div class="langkah">
                <div class="buletan aktif">4</div>
                <span class="teks-progress">Selesai</span>
            </div>
        </div>

        <!-- Bulatan besar dengan gambar -->
        <div class="container">
            <div class="circle blur-circle-3"></div>
            <div class="circle blur-circle-2"></div>
            <div class="circle blur-circle-1"></div>
            <div class="circle main-circle">
                <div class="checkmark">✓</div>
            </div>
        </div>

        <!-- Deskripsi dan tombol -->
        <div class="kontainer-deskripsi">
            <p class="deskripsi">
                Terima kasih telah menggunakan layanan kami! Proses pemesanan Anda telah selesai.
                Silakan klik tombol di bawah untuk kembali ke beranda atau memberikan ulasan terkait pengalaman
                Anda.
            </p>
            <div class="kontainer-tombol">
                <button class="tombol home" onclick="location.href='homepage.blade.php'">Home</button>
                <button class="tombol review" onclick="location.href='review.blade.php'">Review</button>
            </div>
        </div>

    </section>
</body>

</html>