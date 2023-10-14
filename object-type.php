<?php
// OOP Dasar pada PHP #5 - Object Type

// Membuat kelas Produk
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // Membuat constructor (__construct) untuk menginisialisasi objek
    public function __construct( $judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    // Membuat fungsi getLabel() untuk mendapatkan labelnya penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// Membuat fungsi getCetakInfoProduk() untuk mencetak labelnya penulis dan penerbit
class CetakInfoProduk {
    // Membuat fungsi produk sebagai penerima objek dari kelas Produk dan sebagai parameter
    public function cetak (Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Membuat kedua objek dengan constructor
$produk1 = new Produk("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000);
$produk2 = new Produk("PES 2013", "Kei Masuda", "Konami", 150000);

// Menampilkan informasi produk dengan menggunakan fungsi getLabel()
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

// Membuat objek $infoProduk1 dari kelas CetakInfoProduk dan mencetak dengan menggunakan fungsi cetak 
$infoProduk1 = new CetakInfoProduk();
?>