<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="{{asset('style/pembayaran.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="/logo sementara.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('homepage-login') }}">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href=""></a>👤</li>
        </ul>
        </ul>
    </nav>

    <main class="main-content">
        <section class="kiri">
            <div class="group">
                <h3>Bank</h3>
                <div class="bagian-bank">
                    <img src="/resources/views/asset/bank.png" alt="logoBank">
                    <h4>Bank Central Asia</h4>
                </div>
            </div>
            <div class="group">
                <h3>No Rekening</h3>
                <div class="bagian-norek">
                    <h4>1234 5678 9012 3456</h4>
                </div>
            </div>
            <div class="group">
                <h3>Bukti Pembayaran</h3>
                <form action="/resources/views/upload.blade.php" method="POST" enctype="multipart/form-data">
                    <label class="upload-box" for="upload-input">
                        <span id="upload-text">Upload here</span>
                        <input type="file" id="upload-input" name="uploaded_file" accept="image/*">
                    </label>
                    <div class="buttons">
                        <a href="">
                            <button type="submit">Saya sudah transfer</button>
                        </a>
                        
                    </div>
                </form>
            </div>

        </section>

        <section class="kanan">
            <h3>Total Tagihan</h3>
            <div class="order">
                <span class="pembayaran">Rp. 000.000.</span>
                <hr>
                <div class="details">
                    <h4>Rincian Pesanan</h4>
                    <ul>
                        <li><span class="nama">Lorem Ipsum</span> <span class="hrg">Rp. 00.000</span></li>
                        <li><span class="nama">Lorem Ipsum</span> <span class="hrg">Rp. 00.000</span></li>
                        <li><span class="nama">Lorem Ipsum</span> <span class="hrg">Rp. 00.000</span></li>
                    </ul>
                    <hr>
                </div>
                <div class="harga">
                    <div class="total">
                        <span>Subtotal</span>
                        <span>Rp. 00.000</span>
                    </div>
                    <div class="total">
                        <span>Ongkir</span>
                        <span>Rp. 00.000</span>
                    </div>
                    <hr>
                    <div class="total2">
                        <span>Total</span>
                        <span>Rp. 00.000</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>