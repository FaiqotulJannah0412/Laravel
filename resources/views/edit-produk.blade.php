<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk Imut</title>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Comic Neue', cursive;
      background: #FFF0F5;
    }
    .container {
      max-width: 450px;
      background: #FFF5FA;
      margin: 50px auto;
      padding: 30px;
      border-radius: 20px;
      border: 2px dashed #ffb6c1;
      box-shadow: 0 0 15px rgba(255,182,193,0.3);
    }
    h2 {
      text-align: center;
      color: #ff69b4;
    }
    label {
      font-weight: bold;
      color: #cc6699;
    }
    input, select, button {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
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
  <h2>🛠️ Edit Produk</h2>
  <form action="/produk/update" method="POST">
    @csrf
    @method('PUT')

    <label>🎀 Nama Produk:</label>
    <input type="text" name="nama" value="Laptop Lama">

    <label>💸 Harga Produk:</label>
    <input type="number" name="harga" value="5000000">

    <label>🧺 Kategori:</label>
    <select name="kategori">
      <option value="Elektronik">💻 Elektronik</option>
      <option value="Makanan">🍕 Makanan</option>
      <option value="Minuman">🥤 Minuman</option>
    </select>

    <button type="submit">🌟 Perbarui Data</button>
  </form>
</div>
</body>
</html>
