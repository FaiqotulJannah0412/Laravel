<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef6ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        h2 {
            color: #185a9d;
            margin-bottom: 15px;
        }
        p {
            font-size: 1rem;
            margin: 5px 0;
        }
        .harga {
            font-weight: bold;
            color: #00a152;
            font-size: 1.2rem;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            background-color: #185a9d;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background-color: #43cea2;
        }
    </style>
</head>
<body>
        <div class="card">
            <img src="{{ asset('image/' . $gambar) }}" alt="{{ $tempat }}">
            <h2>Informasi Tiket Wisata</h2>
            <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
            <p>Harga Tiket: <span class="harga">Rp {{ $harga }}</span></p>
            <a href="/">⬅️ Kembali ke Halaman Utama</a>
        </div>
</body>
</html>
