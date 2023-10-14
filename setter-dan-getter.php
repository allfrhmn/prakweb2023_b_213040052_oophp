<?php
// OOP Dasar pada PHP #10 - Setter dan Getter

// Membuat sebuah kelas dengan nama Produk
class Produk {

    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    // Membuat constructor (__construct) untuk menginisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat fungsi setJudul untuk mengatur nilai judul
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Membuat fungsi getJudul untuk mengambil nilai judul
    public function getJudul() {
        return $this->judul;
    }

    // Membuat fungsi setPenulis untuk mengatur nilai penulis
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    
    // Membuat fungsi getPenulis untuk mengambil nilai penulis
    public function getPenulis() {
        return $this->penulis;
    }
    
    // Membuat fungsi setPenerbit untuk mengatur nilai penerbit
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    
    // Membuat fungsi getPenerbit untuk mengambil nilai penerbit
    public function getPenerbit() {
        return $this->penerbit;
    }
    
    // Membuat fungsi setDiskon untuk mengatur nilai diskon
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // Membuat fungsi getDiskon untuk mengambil nilai diskon
    public function getDiskon() {
        return $this->diskon;
    }
    
    // Membuat fungsi setHarga untuk mengatur nilai harga
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Membuat fungsi getHarga untuk mengambil nilai harga
    public function getHarga() {
        return $this->harga;
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

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Membuat sebuah kelas dengan nama CetakInfoProduk
class CetakInfoProduk {
    public function cetak (Produk $produk) {
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

// Mengatur $produk2 dengan harga diskon
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

// Mengatur $produk1 dengan nama penulis
$produk1->setPenulis("Allfiandi Rahman");
?>