<?php
// OOP Dasar pada PHP #17 - Namespaces

// Memuat file dengan beberapa nama file 
// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// Menggunakan spl_autoload_register() untuk secara dinamis memuat kelas yang diperlukan saat dibutuhkan
spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});