<?php
// OOP Dasar pada PHP #9 - Visibility

// Membuat sebuah kelas dengan nama Produk
class Produk {
    // Membuat properti public yang dapat bisa semua akses dimanapun
    public $judul,
           $penulis,
           $penerbit;
    
    // Membuat properti protected yang dapat diakses oleh kelas dan sub kelas itu sendiri
    protected $diskon = 0;
    
    // Membuat properti private yang hanya dapat diakes oleh kelas ini
    private $harga;

    // Membuat constructor (__construct) untuk menginisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat fungsi getHarga() untuk mendapatkan informasi tentang harga
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    // Membuat fungsi getLabel() untuk mendapatkan labelnya penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Membuat fungsi getInfoProduk untuk mengambil nilai informasi
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    
}

// Membuat kelas sub Komik yang mewarisi dari kelas Produk
class Komik extends Produk {
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        // Memanggil konstruktor dari kelas induk dengan beberapa parameter
        parent::__construct($judul, $penulis, $penerbit, $harga);
            
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Membuat kelas sub Game yang mewarisi dari kelas Produk
class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {     
        // Memanggil konstruktor dari kelas induk dengan beberapa parameter
        parent::__construct($judul, $penulis, $penerbit, $harga);
            
        $this->waktuMain = $waktuMain;
    }

    // Mengatur diskon untuk produk Game
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Membuat sebuah kelas dengan nama CetakInfoProduk
class CetakInfoProduk {
    public function cetak (Produk $produk) {
        // Menggunakan method getHarga() untuk mendapatkan harga yang sudah termasuk diskon
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Membuat kedua objek dengan constructor
$produk1 = new Komik("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000, 80);
$produk2 = new Game("PES 2013", "Kei Masuda", "Konami", 150000, 120);

// Menampilkan informasi produk dengan menggunakan fungsi getInfoProduk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// Menampilkan $produk2 dengan harga diskon
$produk2->setDiskon(50);