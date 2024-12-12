<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Review</title>
    <link rel="stylesheet" href="/CSS/inputReview.css">
</head>
<body>
    <nav>
        <div class="logo">
        <img src="/logo sementara.png" alt="Logo">
    </div>
    <ul>
        <li><a href="/HTML/homepage.html">Home</a></li>
        <li><a href="/">Tentang</a></li>
        <li><a href="#layanan">Layanan</a></li>
        <li><a href=""></a>👤</li>
    </ul>
    </nav>
    

    <section id="rate-us" class="rate-us-section">
        <h1 class="rate-us-title">RATE US</h1>
        <div class="rate-us-container">
            
            <div class="rate-us-content">
                <form class="rate-us-form">
                    <label for="name">Nama</label>
                    <input type="text" id="name" placeholder="Masukkan nama Anda">
    
                    <label for="service">Nama Service</label>
                    <input type="text" id="service" placeholder="Masukkan nama service">
    
                    <label for="date">Tanggal</label>
                    <input type="date" id="date">
    
                    <label for="rating">Rating</label>
                    <input type="number" id="rating" placeholder="Masukkan rating" min="1" max="5">
    
                    <label for="review">Ulasan</label>
                    <textarea id="review" placeholder="Tulis ulasan Anda"></textarea>
    
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>