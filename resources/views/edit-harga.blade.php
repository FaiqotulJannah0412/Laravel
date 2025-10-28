<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Edit Harga Imut</title>
 <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
 <style>
    body {
        font-family: 'Comic Neue', cursive;
        background: #FFF5F5;
    }
    .container {
        max-width: 450px;
        background: #FFE4E1;
        margin: 50px auto;
        padding: 30px;
        border-radius: 20px;
        border: 2px dashed #ffb6c1;
        box-shadow: 0 0 15px rgba(255,105,180,0.2);
    }
    h2 {
        text-align: center;
        color: #ff69b4;
    }
    p {
        margin: 10px 0;
        font-size: 16px;
    }
    label {
        color: #cc6699;
    }
    input, button {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        margin-bottom: 15px;
        border-radius: 10px;
        border: 1px solid #ffb6c1;
        font-size: 14px;
    }
    button {
        background-color: #ffb6c1;
        color: white;
        font-weight: bold;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #ff69b4;
    }
 </style>
</head>
<body>
<div class="container">
 <h2>💸 Edit Harga Produk</h2>
 <p>📦 Nama Produk: <b>Laptop ASUS</b></p>
 <p>📁 Kategori: <b>Elektronik</b></p>
 <p>💰 Harga Saat Ini: <b>Rp5.000.000</b></p>

 <form action="/produk/update-harga" method="POST">
   @csrf
   @method('PATCH')
   <label>Harga Baru:</label>
   <input type="number" name="harga" value="5000000" required>
   <button type="submit">🔧 Perbarui Harga</button>
 </form>
</div>
</body>
</html>
