<?php
// OOP Dasar pada PHP #6 - Inheritance (Bagian 1)

// Membuat sebuah kelas dengan nama Produk
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;
           
    // Membuat constructor (__construct) untuk menginisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // Membuat fungsi getLabel() untuk mendapatkan labelnya penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";        
    }

    // Membuat fungsi getInfoLengkap() untuk mendapatkan informasi
    public function getInfoLengkap() {
        // Komik : Oshi No Ko | Aka Akasaka, Shueisha (Rp. 50000) - 80 Halaman
        
        // Format informasi produk
        $str = "{this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} jam.";
        }
        
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
$produk1 = new Produk("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000, 80, 0, "Komik");
$produk2 = new Produk("PES 2013", "Kei Masuda", "Konami", 150000, 0, 120, "Game");

// Menampilkan informasi produk dengan menggunakan fungsi getInfoLengkap
echo $produk1->getInfoLengkap();
echo "<br>";
?>