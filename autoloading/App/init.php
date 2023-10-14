<?php
// OOP Dasar pada PHP #16 - Autoloading

// Memuat file dengan beberapa nama file 
// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// Menggunakan spl_autoload_register() untuk secara dinamis memuat kelas yang diperlukan saat dibutuhkan
spl_autoload_register(function($class) {
    // Menggunakan __DIR__ untuk mendapatkan direktori saat ini, lalu menambahkan '/Produk/' dan nama kelas dengan ekstensi '.php'
    require_once __DIR__ . '/Produk/' . $class . '.php';
});