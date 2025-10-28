<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Produk Imut</title>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Comic Neue', cursive;
      background-color: #FFF0F5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 450px;
      margin: 50px auto;
      background-color: #FFFAFA;
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(255, 182, 193, 0.3);
      border: 3px dashed pink;
    }
    h2 {
      text-align: center;
      color: #ff69b4;
      font-size: 24px;
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
      transition: background 0.3s;
    }
    button:hover {
      background-color: #ff69b4;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🌸 Form Input Produk 🌸</h2>
    <form action="/kirim-produk" method="POST">
      @csrf
      <label>🍰 Nama Produk:</label>
      <input type="text" name="nama" required>

      <label>💰 Harga Produk:</label>
      <input type="number" name="harga" required>

      <label>🎁 Kategori:</label>
      <select name="kategori">
        <option value="Makanan">🍩 Makanan</option>
        <option value="Minuman">🧃 Minuman</option>
        <option value="Elektronik">💻 Elektronik</option>
      </select>

      <button type="submit">✨ Kirim ✨</button>
    </form>
  </div>
</body>
</html>
