<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOMEPAGE LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/homepageLogin.css')}}">
    <link href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul>
          <li><a href="{{ route('homepage-login') }}">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#layanan">Layanan</a></li>
          <li><a href=""></a>👤</li>
        </ul>
    </nav>

    <div class="homepage">
      <img src="{{ asset('assets/gambarhomepage.png') }}" alt="Homepage Image" class="homepage-image">
      <a class="homepage-title">ZIPSHIFT</a>
  </div>

  <div class="floating-logo1">
      <a href="">
          <img src="{{ asset('assets/Desktop - Whatsapp Button.png') }}" >
      </a>
  </div>

  <div class="floating-logo2">
      <a href="#">
          <img src="{{ asset('assets/Desktop - Scroll Up Button.png') }}">
      </a>
  </div>

  <section id="about" class="about">
      <img src="{{ asset('assets/wireframAU.png') }}">
      <a>Zipshift are  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu imperdiet dolor. Curabitur aliquet fringilla odio, ac tincidunt lectus. Quisque nec cursus lectus, at sollicitudin orci. Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed elementum ullamcorper.Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed elementum ullamcorper.Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl.</a>
  </section>


  <section id="set" class="set">
      <section id="head-set" class="head-set">
          <h2>Bagaimana Kita Bekerja</h2>
      </section>
      
      <section id="card" class="card">
          <div class ="set-card">
              <img src="{{ asset('assets/ant-design_form-outlined.png') }}">
              <p>Pesan Survei</p>
          </div>

          <div class ="set-card">
              <img src="{{ asset('assets/stash_pin-place.png') }}">
              <p>Survei Offline</p>
          </div>

          <div class ="set-card">
              <img src="{{ asset('assets/solar_notes-bold.png') }}">
              <p>Detail</p>
          </div>

          <div class ="set-card">
              <img src="{{ asset('assets/solar_bill-check-bold.png') }}">
              <p>Konfirmasi</p>
          </div>

          <div class ="set-card">
              <img src="{{ asset('assets/stash_pack.png') }}">
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
              <img src="{{ asset('assets/wireframeLK.png') }}">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
          </div>

          <div class="card-layanan">
              <a>Delivery</a>
              <img src="{{ asset('assets/wireframeLK.png') }}">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
          </div>

          <div class="card-layanan">
              <a>Pack n Delivery</a>
              <img src="{{ asset('assets/wireframeLK.png') }}">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet laoreet magna eget consequat. Vestibulum posuere fermentum mattis. Mauris odio augue, tempor non metus eget, mollis auctor augue. Maecenas vel faucibus ante, at consequat sapien. Pellentesque non nisi mattis ligula dignissim convallis. Quisque sagittis euismod auctor. Aliquam viverra eros quis tortor euismod, at aliquam sapien posuere. </p>
          </div>
      </div>

      <div class="button-container">
          <div class="button-layanan">
              <button>
                  <a href="{{ route('service') }}">Pesan Kami Sekarang</a>
                  <img src="{{ asset('assets/pesan.png') }}" alt="Pesan">
              </button>
          </div>
      </div>
          
      </section>
  </section>

  <section id="ulasan" class="ulasan">
    <h1>Ulasan Kami</h1>
    <div class="reviews-container">
      <div class="review-card">
        <div class="review-header">
          <div class="profile-pic"></div>
          <div class="profile-info">
            <h2>Name</h2>
            <p>service name</p>
          </div>
        </div>
        <div class="review-details">
          <p><span>Date</span> | <span>Rate</span></p>
        </div>
        <div class="review-content">
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id faucibus quam, iaculis feugiat ante.”</p>
        </div>
      </div>
      <div class="review-card">
        <div class="review-header">
          <div class="profile-pic"></div>
          <div class="profile-info">
            <h2>Name</h2>
            <p>service name</p>
          </div>
        </div>
        <div class="review-details">
          <p><span>Date</span> | <span>Rate</span></p>
        </div>
        <div class="review-content">
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id faucibus quam, iaculis feugiat ante.”</p>
        </div>
      </div>
      <div class="review-card">
        <div class="review-header">
          <div class="profile-pic"></div>
          <div class="profile-info">
            <h2>Name</h2>
            <p>service name</p>
          </div>
        </div>
        <div class="review-details">
          <p><span>Date</span> | <span>Rate</span></p>
        </div>
        <div class="review-content">
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id faucibus quam, iaculis feugiat ante.”</p>
        </div>
      </div>
      <div class="review-card">
        <div class="review-header">
          <div class="profile-pic"></div>
          <div class="profile-info">
            <h2>Name</h2>
            <p>service name</p>
          </div>
        </div>
        <div class="review-details">
          <p><span>Date</span> | <span>Rate</span></p>
        </div>
        <div class="review-content">
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id faucibus quam, iaculis feugiat ante.”</p>
        </div>
      </div>
      <div class="review-card">
        <div class="review-header">
          <div class="profile-pic"></div>
          <div class="profile-info">
            <h2>Name</h2>
            <p>service name</p>
          </div>
        </div>
        <div class="review-details">
          <p><span>Date</span> | <span>Rate</span></p>
        </div>
        <div class="review-content">
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id faucibus quam, iaculis feugiat ante.”</p>
        </div>
      </div>
    </div>
    <div class="dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  
      <!-- Linking SwiperJS script -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <!-- Linking custom script -->
      <script src="script.js"></script>
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
                <li><a href="{{ route('homepage-login') }}">Home</a></li>
                <li><a href="{{ route('service') }}">Layanan Kami</a></li>
                <li><a href="{{ route('order-form') }}">Order Jasa</a></li>
                <li><a href="{{ route('homepage-login') }}#ulasan">Testimoni</a></li>
              </ul>
          </div>
      </div>

      
      
  </section>
</body>
</html>