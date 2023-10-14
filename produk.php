<?php 
// OOP Dasar pada PHP #3 - Objek dan Method

// Membuat sebuah kelas dengan nama Produk
class Produk {
    // Mendefinisikan variabelnya pada kelas Produk
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
    // Membuat sebuah fungsi bernama getLabel
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// Kode di bawah ini adalah contoh penggunaan kelas dan objek

// Membuat objek $produk1 dari kelas Produk, tetapi tidak mengisi nilainya secara langsung
// $produk1 = new Produk();
// $produk1->judul = "Oshi no Ko";
// var_dump($produk1);

// Membuat objek $produk2 dari kelas Produk, tetapi juga menambah nilainya secara langsung
// $produk2 = new Produk();
// $produk2->judul = "PES 2013";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

// Membuat objek $produk3 dari kelas Produk dan mengisi semua nilai yang sesuai
$produk3 = new Produk();
$produk3->judul = "Oshi no Ko";
$produk3->penulis = "Aka Akasaka";
$produk3->penerbit = "Shueisha";
$produk3->harga = 50000;

// Membuat objek $produk4 dari kelas Produk dan mengisi semua nilai yang sesuai
$produk4 = new Produk();
$produk4->judul = "PES 2013";
$produk4->penulis = "Kei Masuda";
$produk4->penerbit = "Konami";
$produk4->harga = 150000;

// Menampilkan informasi produk dengan menggunakan fungsi getLabel() dari setiap objek
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>