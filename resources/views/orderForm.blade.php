<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="{{ asset('style/orderForm.css') }}">
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
                <div class="buletan aktif">2</div>
                <span class="teks-progress">Penawaran</span>
            </div>
            <div class="langkah">
                <div class="buletan"></div>
                <span class="teks-progress">Pembayaran</span>
            </div>
            <div class="langkah">
                <div class="buletan"></div>
                <span class="teks-progress">Selesai</span>
            </div>
        </div>
    </section>

    <!-- Form Booking Layanan -->
    <main class="main-container">
        <!-- pilihan layanan -->
        <section class="layanan">
            <h2 class="subtitle">Pilih Layanan</h2>
            <div class="service-cards">
                <div class="card" onclick="showForm('packing')">
                    <h3>📦</h3>
                    <p>Packing Barang</p>
                </div>
                <div class="card" onclick="showForm('pindah')">
                    <h3>🏡</h3>
                    <p>Pindah Rumah</p>
                </div>
                <div class="card" onclick="showForm('packing dan pindah')">
                    <h3>🚚</h3>
                    <p>Packing & Pindah</p>
                </div>
            </div>
        </section>

        <!-- Form Booking Layanan -->
        <section class="form-packing" id="packingPindahan" hidden>
            <h3>Form Pemesanan</h3>
            <form class="form" oninput="calculatePrice(this)" method="POST"
                action="{{ route('book-layanan.storeBooking') }}">
                @csrf
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap">
                <label for="">Nomor Telepon</label>
                <input type="text" name="noTelp" placeholder="Nomor Telepon">
                <label for="">Alamat</label>
                <textarea placeholder="Alamat" name="Alamat"></textarea>
                <label for="">Alamat Tujuan</label>
                <textarea placeholder="Alamat Tujuan"  name="AlamatTujuan"></textarea>
                <label>Jarak (km)</label>
                <input type="number" name="Jarak" placeholder="0">
                <label for="">Daftar Barang</label>
                <textarea placeholder="Daftar Barang" name="DaftarBarang"></textarea>
                <label>Berat Barang (kg)</label>
                <input type="number" placeholder="0" class="weight" name="BeratBarang">
                <label for="">Tanggal Layanan</label>
                <input type="date" name="Tanggal">
                <label for="jenislayanan">Jenis Layanan</label>
                <select id="jenislayanan" name="JenisLayanan">
                    <option value="packing">Packing</option>
                    <option value="pindah">Pindah</option>
                    <option value="packing dan pindah">Packing dan Pindah</option>
                </select>
                <input type="hidden" class="priceHidden" name="KisaranHarga">
                <div class="price">Perkiraan harga layanan: Rp <span>0</span></div>
                <div class="buttons">
                    <button type="button" onclick="resetForm()">Batal</button>
                    <button type="submit">Pesan Sekarang</button>
                </div>
            </form>
        </section>
    </main>
    <script src="{{ asset('js/script.js') }}"></script>


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

    <script src="orderForm.js"></script>
</body>

</html>