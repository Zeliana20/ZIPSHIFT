<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="/CSS/orderForm.css">
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

    <header class="progress-section">
        <h1 class="title">Progress Pemesanan</h1>
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
                <div class="buletan">3</div>
                <span class="teks-progress">Pembayaran</span>
            </div>
            <div class="langkah">
                <div class="buletan">4</div>
                <span class="teks-progress">Selesai</span>
            </div>
        </div>
        
    </header>

    <main class="main-container">
        <section class="services">
            <h2 class="subtitle">Pilih Layanan</h2>
            <div class="service-cards">
                <div class="card" onclick="showForm('packing')">
                    <h3>📦</h3>
                    <p>Packing Barang</p>
                </div>
                <div class="card" onclick="showForm('pindahan')">
                    <h3>🏡</h3>
                    <p>Pindahan Rumah</p>
                </div>
                <div class="card" onclick="showForm('packingPindahan')">
                    <h3>🚚</h3>
                    <p>Packing & Pindahan</p>
                </div>
            </div>
        </section>

        <section class="form-packing" id="form-packing">
            <h3>Form Pemesanan Packing Barang</h3>
            <form class="form">
                <label for="">Nama Lengkap</label>
                <input type="text" placeholder="Nama Lengkap">
                <label for="">Nomor Telepon</label>
                <input type="tel" placeholder="Nomor Telepon">
                <label for="">Alamat</label>
                <textarea placeholder="Alamat"></textarea>
                <label for="">Daftar Barang</label>
                <textarea placeholder="Daftar Barang"></textarea>
                <label for="">Tanggal Layanan</label>
                <input type="date">
                <div class="price">Perkiraan harga layanan: Rp 10.000.000</div>
                <div class="buttons">
                    <button type="button" onclick="resetForm()">Batal</button>
                    <button type="submit">Pesan Sekarang</button>
                </div>
            </form>
        </section>
    </main>

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
                    li><a href="/HTML/homepage.html">Home</a></li>
                    <li><a href="/HTML/service.html">Layanan Kami</a></li>
                    <li><a href="/HTML/orderForm.html">Order Jasa</a></li>
                    <li><a href="/HTML/homepage.html#ulasan">Testimoni</a></li>
                </ul>
            </div>
        </div>
        
    </section>

    <script src="orderForm.js"></script>
</body>
</html>
