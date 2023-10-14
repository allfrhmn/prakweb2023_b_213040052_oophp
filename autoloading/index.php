<?php
// OOP Dasar pada PHP #16 - Autoloading

// Mengimpor (require_once) file 'init.php' yang berisi konfigurasi atau pemuatan kelas yang diperlukan.
require_once 'App/init.php';

// Membuat dua objek dengan mengisi parameter konstruktor dan menyimpannya dalam dua variabel 
$produk1 = new Komik("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000, 80);
$produk2 = new Game("PES 2013", "Kei Masuda", "Konami", 150000, 120);

// Membuat objek 'CetakInfoProduk' yang digunakan untuk mencetak daftar produk.
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();