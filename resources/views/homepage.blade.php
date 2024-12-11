<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOMEPAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menggunakan asset() untuk file CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/homepage.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <nav>
        <div class="logo">
            <!-- Ganti dengan asset() untuk gambar logo -->
            <img src="{{ asset('logo sementara.png') }}" alt="Logo">
        </div>
        <ul>
            <!-- Ganti href dengan route() jika ingin menggunakan route Laravel -->
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('tentang') }}">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>

    <div class="homepage">
        <!-- Ganti dengan asset() untuk gambar homepage -->
        <img src="{{ asset('gambarhomepage.png') }}" alt="Homepage Image" class="homepage-image">
        <a class="homepage-title">ZIPSHIFT</a>
    </div>

    <div class="floating-logo1">
        <a href=" ">
            <img src="{{ asset('Desktop - Whatsapp Button.png') }}">
        </a>
    </div>

    <div class="floating-logo2">
        <a href="#">
            <img src="{{ asset('Desktop - Scroll Up Button.png') }}">
        </a>
    </div>

    <section id="about" class="about">
        <!-- Ganti dengan asset() untuk gambar wireframe -->
        <img src="{{ asset('wireframAU.png') }}">
        <a>Zipshift are  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu imperdiet dolor. Curabitur aliquet fringilla odio, ac tincidunt lectus. Quisque nec cursus lectus, at sollicitudin orci. Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed elementum ullamcorper.Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed elementum ullamcorper.Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl.</a>
    </section>

    <section id="set" class="set">
        <section id="head-set" class="head-set">
            <h2>Bagaimana Kita Bekerja</h2>
        </section>
        
        <section id="card" class="card">
            <div class="set-card">
                <!-- Ganti dengan asset() untuk gambar -->
                <img src="{{ asset('ant-design_form-outlined.png') }}">
                <p>Pesan Survei</p>
            </div>

            <div class="set-card">
                <img src="{{ asset('stash_pin-place.png') }}">
                <p>Survei Offline</p>
            </div>

            <div class="set-card">
                <img src="{{ asset('solar_notes-bold.png') }}">
                <p>Detail</p>
            </div>

            <div class="set-card">
                <img src="{{ asset('solar_bill-check-bold.png') }}">
                <p>Konfirmasi</p>
            </div>

            <div class="set-card">
                <img src="{{ asset('stash_pack.png') }}">
                <p>Packing dan Pindah</p>
            </div>
        </section>
    </section>
    
    <section id="layanan" class="layanan">
        <div class="head-layanan">
            <h2>Layanan Kami</h2>
        </div>

        <div class="cards">
            <div class="card-layanan">
                <a>Packing</a>
                <!-- Ganti dengan asset() untuk gambar -->
                <img src="{{ asset('wireframeLK.png') }}">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
            </div>

            <div class="card-layanan">
                <a>Delivery</a>
                <img src="{{ asset('wireframeLK.png') }}">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
            </div>

            <div class="card-layanan">
                <a>Pack n Delivery</a>
                <img src="{{ asset('wireframeLK.png') }}">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
            </div>
        </div>

        <div class="button-container">
            <div class="button-layanan">
                <button>
                    <!-- Ganti dengan route() untuk halaman service -->
                    <a href="{{ route('service') }}">Pesan Kami Sekarang</a>
                    <img src="{{ asset('pesan.png') }}" alt="Pesan">
                </button>
            </div>
        </div>
            
    </section>

    <section id="ulasan" class="ulasan">
        <h1>Ulasan Kami</h1>
        <div class="reviews-container">
            <!-- Ulasan card, tetap dengan format yang sama -->
        </div>

        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
      
        <!-- Linking SwiperJS script -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Linking custom script -->
        <script src="{{ asset('script.js') }}"></script>
    </section>

    <section id="footer" class="footer">
        <div class="footerz">
            <div class="footer-section">
                <img src="{{ asset('/') }}">
            </div>
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>
                    <strong>ZIPSHIFT</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu imperdiet dolor. Curabitur aliquet fringilla odio, ac tincidunt lectus. Quisque nec cursus lectus, at sollicitudin orci. Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed elementum ullamcorper.
                </p>
            </div>
    
            <div class="footer-section">
                <h3>Alamat Kantor</h3>
                <p><strong>MALANG</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <p><strong>JAM OPERASIONAL</strong></p>
                <p><strong>Senin s.d Minggu</strong><br>00.00 - 00.00</p>
            </div>
    
            <div class="footer-section">
                <h3>Site Map</h3>
                <ul>
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('layanan') }}">Layanan Kami</a></li>
                    <li><a href="{{ route('order-jasa') }}">Order Jasa</a></li>
                    <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>
