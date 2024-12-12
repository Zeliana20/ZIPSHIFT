<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/service.css')}}">
    <link href="css/bootstrap.min.css">
    <title>service</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul>
            <li><a href="/HTML/homepage.html">Home</a></li>
            <li><a href="/HTML/homepage.html#about">Tentang</a></li>
            <li><a href="/HTML/service.html">Layanan</a></li>
            <li><a href="/HTML/login.html">Login</a></li>
        </ul>
    </nav>

    <section id="layanan" class="layanan">
        <div class="head-layanan">
            <h2>Layanan Kami</h2>
        </div>

        <div class="cards">
            <div class="card-layanan">
                <a>Packing</a>
                <img src="/wireframeLK.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
            </div>

            <div class="card-layanan">
                <a>Delivery</a>
                <img src="/wireframeLK.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
            </div>

            <div class="card-layanan">
                <a>Pack n Delivery</a>
                <img src="/wireframeLK.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
            </div>
        </div>
  
    </section>
    
    <section class="booking">
        <section class="book-box">
            <div class="head-booking">
                <h2>Booking Untuk Survei</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non facilisis leo. Nam ex dui, aliquet sed sodales finibus, rhoncus vel metus. ultrices eros iaculis id. Cras ullamcorper dui eget felis ultricies suscipit. Nulla quis lorem sodales, placerat velit vel, sodales sapien. </p>
            </div>
        
            <form class="form-book-survei">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
                <label for= "NoTelp">Nomor Telepon</label>
                <input type="text" id="NoTelp" name="NoTelp" required>
                <label for="name">E-mail</label>
                <input type="email" id="email" name="email" required>
                <label for="alamat">Alamat lengkap Rumah (untuk di survei)</label>
                <input type="text" id="alamat" name="alamat" required>
                <label for="catatan">Catatan Tambahan</label>
                <input type="text" id="catatan" name="catatan">
                <button type="submit">
                    <a href="">Selanjutnya</a>
                </button>
            </form>
        </section>
    </section>
   
    
    <section id="footer" class="footer">
        <div class="footerz">
            <div class="footer-section">
                <img src="/">
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
                    <li><a href="/HTML/homepage.html">Home</a></li>
                    <li><a href="/HTML/service.html">Layanan Kami</a></li>
                    <li><a href="/HTML/orderForm.html">Order Jasa</a></li>
                    <li><a href="/HTML/homepage.html#ulasan">Testimoni</a></li>
                </ul>
            </div>
        </div>
        
    </section>
</body>
</html>