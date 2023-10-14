<?php
// OOP Dasar pada PHP #16 - Autoloading

// Konstruktor untuk kelas Komik dengan implementasi InfoProduk
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
            
        parent::__construct($judul, $penulis, $penerbit, $harga);
            
        $this->jmlHalaman = $jmlHalaman;
    }
    
    // Implementasi metode getInfo untuk mengembalikan informasi produk Komik
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        // Membuat string informasi produk Komik yang mencakup judul, label (penulis dan penerbit), harga, dan waktuMain
        return $str;
    }

     // Implementasi metode getInfoProduk dari interface InfoProduk untuk mengembalikan informasi produk Game
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}