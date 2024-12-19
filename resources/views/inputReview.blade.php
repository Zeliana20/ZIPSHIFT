<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Review</title>
    <link rel="stylesheet" href="{{ asset('style/inputReview.css') }}">
</head>
<body>
    <nav>
        <div class="logo">
          <img src="{{ asset('assets/logo fix.png') }}" alt="Logo">
        </div>
    
        <ul>
          <li><a href="{{ route('homepage-login') }}">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="{{ route('service') }}">Layanan</a></li>
          <li>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background: none; border: none; cursor: pointer;">
                    <img src="{{ asset('assets/logout.png') }}" alt="logout" style="width: 24px; height: 24px;">
                </button>
            </form>
          </li>
        </ul>
      </nav>
    
    <section id="rate-us" class="rate-us-section">
        <img src="{{ asset('assets/image 6.png') }}" alt="">
        <h1 class="rate-us-title">RATE US</h1>
        <div class="rate-us-container">
            <div class="rate-us-content">
            <form action="{{ route('submit-review') }}" method="POST" class="rate-us-form">
                    @csrf
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

                    <label for="service">Nama Service</label>
                    <input type="text" id="service" name="service_name" placeholder="Masukkan nama service" required>

                    <label for="date">Tanggal</label>
                    <input type="date" id="date" name="review_date" required>

                    <label for="rating">Rating</label>
                    <input type="number" id="rating" name="rating" placeholder="Masukkan rating" min="1" max="5" required>

                    <label for="review">Ulasan</label>
                    <textarea id="review" name="review" placeholder="Tulis ulasan Anda" required></textarea>

                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <section id="footer" class="footer">
    <div class="footerz">
      <div class="footer-section">
        <img src="{{ asset('assets/gambar footer.png') }}">
      </div>
      <div class="footer-section">
        <h3>Tentang Kami</h3>
        <p>
          <strong>ZIPSHIFT</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu imperdiet dolor.
          Curabitur aliquet fringilla odio, ac tincidunt lectus. Quisque nec cursus lectus, at sollicitudin orci. Morbi
          sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed elementum ullamcorper.
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