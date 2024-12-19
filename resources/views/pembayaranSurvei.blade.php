<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/paymentSurvei.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>Payment Survei</title>
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

    <main class="main-content">
        <section class="pembayaran">
            <div class="group">
                <h3>Bank</h3>
                <div class="bagian-bank">
                    <img src="{{ asset('assets/bank.png') }}" alt="logoBank">
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
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="upload-box" for="upload-input">
                        <span id="upload-text">Upload here</span>
                        <input type="file" id="upload-input" name="uploaded_file" accept="image/*" required>
                    </label>
                </form>
            </div>

            <div class="harga">
                <div class="total">
                    <span>Subtotal</span>
                    <span>Rp. 200.000</span>
                </div>
                <hr>
                <div class="total2">
                    <span>Total</span>
                    <span>Rp. 200.000</span>
                </div>
            </div>
            <div class="buttons">
                <form action="{{ route('doneSurvey') }}" method="POST">
                    @csrf
                    <input type="hidden" name="uploaded_file_path" id="uploaded_file_path">
                    <button type="submit">Saya sudah transfer</button>
                </form>
            </div>

        </section>
        <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>