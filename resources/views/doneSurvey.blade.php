<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doneSurvey</title>
    <link rel="stylesheet" href="{{ asset('style/doneSurvey.css') }}">
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

    <section class="selesai">
        <div class="group">
            <h3>Terimakasih Telah Booking Survey!</h3>
            <div class="usai">
                <h4>Setelah melewati proses survey, anda bisa melakukan booking layanan kami pada halaman berikut:</h4>
                <button>
                    <a href="{{ route('order-form') }}">Booking Layanan</a>
                    <img src="{{ asset('assets/pesan.png') }}" alt="booking layanan">
                </button>
            </div>
        </div>
    </section>
    
</body>
</html>
