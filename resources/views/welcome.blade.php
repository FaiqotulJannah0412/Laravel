<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            margin: 0;
            padding: 0;
            color: #fff;
        }
        header {
            text-align: center;
            padding: 60px 20px 30px;
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        header p {
            color: #e3f2fd;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            color: #333;
            border-radius: 15px;
            width: 280px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
            text-align: center;
        }
        .card-content h3 {
            margin: 10px 0;
            color: #185a9d;
        }
        .card-content p {
            margin: 5px 0;
            font-weight: bold;
            color: #009688;
        }
        .card-content a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #185a9d;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .card-content a:hover {
            background: #43cea2;
        }
        footer {
            text-align: center;
            padding: 25px;
            font-size: 0.9rem;
            opacity: 0.8;
            background: rgba(255,255,255,0.1);
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>🌴 Selamat Datang di Sistem Tiket Wisata</h1>
        <p>Pilih destinasi wisata favoritmu dan lihat harga tiket masuk</p>
    </header>

    <div class="container">
        @foreach ($wisata as $item)
            <div class="card">
                <img src="{{ asset('image/'.$item['gambar']) }}" alt="{{ $item['nama'] }}">
                <div class="card-content">
                    <h3>{{ $item['nama'] }}</h3>
                    <p>Harga: Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    <a href="/tiket/{{ $item['nama'] }}/{{ $item['harga'] }}">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>

    <footer>© 2025 Sistem Tiket Wisata — Laravel Blade Design</footer>

</body>
</html>
