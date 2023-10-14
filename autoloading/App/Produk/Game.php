<?php
// OOP Dasar pada PHP #16 - Autoloading

// Konstruktor untuk kelas Game dengan implementasi InfoProduk
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    // Memanggil konstruktor dari kelas Produk (kelas dasar) menggunakan parent::__construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {     
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
         // Mengatur atribut spesifik kelas Game, yaitu waktuMain
        $this->waktuMain = $waktuMain;
    }

    // Implementasi metode getInfo untuk mengembalikan informasi produk Game
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        // Membuat string informasi produk Game yang mencakup judul, label (penulis dan penerbit), harga, dan waktuMain
        return $str;
    }

     // Implementasi metode getInfoProduk dari interface InfoProduk untuk mengembalikan informasi produk Game
    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}
