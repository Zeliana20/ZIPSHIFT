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

    <section id="layanan" class="layanan">
        <div class="head-layanan">
            <h2>Layanan Kami</h2>
        </div>

        <div class="cards">
            <div class="card-layanan">
              <a>Packing</a>
              <img src="{{ asset('assets/pack.png') }}">
              <p>ZIPSHIFT hadir untuk membantu Anda dalam proses packing barang. Kami memastikan setiap item dikemas secara aman dan rapi, menggunakan material berkualitas tinggi. Dengan tim berpengalaman, barang-barang Anda terlindungi dari risiko kerusakan. Kami memahami pentingnya keamanan barang Anda dan selalu berusaha memberikan pelayanan terbaik demi kepuasan pelanggan.</p>
            </div>
      
            <div class="card-layanan">
              <a>move</a>
              <img src="{{ asset('assets/delivery.png') }}">
              <p>Layanan move kami dirancang khusus untuk membantu proses pemindahan barang dari satu tempat ke tempat lain. Tim profesional ZIPSHIFT bekerja secara cepat dan terorganisir. Dengan peralatan dan transportasi yang tepat, kami memastikan barang tiba tepat waktu dan dalam kondisi yang prima. Kenyamanan pelanggan adalah prioritas kami, sehingga Anda tidak perlu khawatir lagi.</p>
            </div>
      
            <div class="card-layanan">
              <a>Pack n move</a>
              <img src="{{ asset('assets/pack n move.png') }}">
              <p>Layanan pack dan deivery dari ZIPSHIFT memberikan solusi lengkap untuk kebutuhan pindahan Anda. Kami menangani semua tahapan, mulai dari packing barang hingga proses pemindahan ke lokasi tujuan. Dengan layanan ini, Anda bisa fokus pada langkah baru Anda tanpa perlu repot. Kami berkomitmen memberikan pengalaman pindahan yang mudah, cepat, dan bebas stres untuk setiap pelanggan.</p>
            </div>
          </div>

    </section>

    <section class="booking">
        <section class="book-box">
            <div class="head-booking">
                <h2>Booking Untuk Survei</h2>
                <p>Layanan ini memungkinkan Anda untuk melakukan konsultasi pindahan sebelum memutuskan layanan yang dibutuhkan. Tim profesional ZIPSHIFT akan melakukan pengukuran dan penilaian langsung di lokasi Anda. Dengan survei ini, kami memastikan semua kebutuhan pindahan Anda dapat dipenuhi secara tepat dan efisien. Setelah survei selesai, Anda bisa dengan mudah melanjutkan ke booking layanan utama sesuai kebutuhan. </p>
            </div>
            <form class="form-book-survei" action="{{ route('store-booking') }}" method="POST">
                @csrf <!-- Menambahkan token CSRF -->
                <label for="name">Nama</label>
                <input type="text" id="name" name="nama" required>

                <label for="NoTelp">Nomor Telepon</label>
                <input type="text" id="NoTelp" name="nomor_telepon" required>

                <label for="name">E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="alamat">Alamat lengkap Rumah (untuk di survei)</label>
                <input type="text" id="alamat" name="alamat_lengkap_rumah" required>

                <label for="catatan">Catatan Tambahan</label>
                <input type="text" id="catatan" name="catatan_tambahan">

                <!-- Mengubah tombol menjadi submit -->
                <button type="submit">
                    <a href="{{ route('pembayaran') }}">Selanjutnya</a>
                </button>
            </form>

        </section>
    </section>


    <section id="footer" class="footer">
        <div class="footerz">
            <div class="footer-section">
                <img src="{{ asset('assets/gambar footer.png') }}">
            </div>
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>
                    <strong>ZIPSHIFT</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu
                    imperdiet dolor. Curabitur aliquet fringilla odio, ac tincidunt lectus. Quisque nec cursus lectus,
                    at sollicitudin orci. Morbi sollicitudin malesuada ipsum dictum mollis. Aliquam feugiat nisl sed
                    elementum ullamcorper.
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