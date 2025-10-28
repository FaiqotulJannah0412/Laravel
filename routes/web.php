<?php
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { 
return "Hello World"; 
}); 

Route::get('/user', function () { 
return "Hello User"; 
}); 

Route::get('/form-produk', function () { 
    return view('form-produk'); 
}); 
// routes/web.php
 
Route::post('/kirim-produk', function (Request $request) { 
    $nama = $request->input('nama'); 
    $harga = $request->input('harga'); 
    $kategori = $request->input('kategori'); 
 
    return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b> 
termasuk kategori <b>$kategori</b> berhasil dikirim!"; 
});
 
Route::get('/produk/edit', function () { 
    return view('edit-produk'); 
});

Route::put('/produk/update', function (Request $request) { 
    $namaBaru = $request->input('nama'); 
    $hargaBaru = $request->input('harga'); 
    $kategoriBaru = $request->input('kategori'); 
 
    return "Data produk berhasil diperbarui menjadi:<br> 
            <b>Nama:</b> $namaBaru <br> 
            <b>Harga:</b> Rp$hargaBaru <br> 
            <b>Kategori:</b> $kategoriBaru"; 
}); 

// routes/web.php

Route::get('/produk/edit-harga', function () {
 return view('edit-harga');
});

// routes/web.php
Route::patch('/produk/update-harga', function (Request $request) {
 $hargaBaru = $request->input('harga');
 return "Harga produk berhasil diperbarui menjadi <b>Rp$hargaBaru</b>
(tanpa mengubah data lain).";
});


// parameter dengan 2 parameter
Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
    return "Kategori: <b>$kategori</b> <br> ID Produk: <b>$id</b>";
});

//parameter nama/profil nama setelah di ubah beb
Route::get('/profil/{nama}', function ($faii) {
    return view('profil', ['nama' => $faii]);
});


// Halaman utama: daftar destinasi wisata
Route::get('/', function () {
    // data destinasi (nama, harga, gambar)
    $wisata = [
        ['nama' => 'Papuma', 'harga' => 20000, 'gambar' => 'papuma.jpg'],
        ['nama' => 'Watu Ulo', 'harga' => 15000, 'gambar' => 'Watu Ulo.jpeg'],
        ['nama' => 'Pancer Puger', 'harga' => 10000, 'gambar' => 'Pancer Puger.jpg'],
    ];

    return view('welcome', compact('wisata'));
});

// Halaman detail tiket wisata
Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    // Coba cari gambar yang cocok di folder public/image
    $namaFile = $tempat; // pakai nama asli dari URL (bisa ada spasi)
    $path = public_path('image/');

    $kemungkinan = [
        $namaFile . '.jpg',
        $namaFile . '.jpeg',
        str_replace(' ', '', strtolower($namaFile)) . '.jpg',
        str_replace(' ', '', strtolower($namaFile)) . '.jpeg'
    ];

    $gambar = 'default.jpg'; // fallback kalau tidak ditemukan
    foreach ($kemungkinan as $file) {
        if (file_exists($path . $file)) {
            $gambar = $file;
            break;
        }
    }

    return view('tiket', [
        'tempat' => $tempat,
        'harga' => number_format($harga, 0, ',', '.'),
        'gambar' => $gambar
    ]);
});