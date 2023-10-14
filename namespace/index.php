<?php
// OOP Dasar pada PHP #17 - Namespace

// Mengimpor (require_once) file 'init.php' yang berisi konfigurasi atau pemuatan kelas yang diperlukan
require_once 'App/init.php';
// $produk1 = new Komik("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000, 80);
// $produk2 = new Game("PES 2013", "Kei Masuda", "Konami", 150000, 120);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

// new Coba();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();