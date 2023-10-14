<?php 
// OOP Dasar pada PHP #4 - Constructor

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

// Mmebuat ketiga objek dengan menggunakan constructor
$produk1 = new Produk("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000);
$produk2 = new Produk("PES 2013", "Kei Masuda", "Konami", 150000);
// Tanpa mengisi semua parameter dan hanya menggunakan nilai default dari constructor
$produk3 = new Produk("Bocchi The Rock"); 

// Menampilkan informasi produk dengan menggunakan fungsi getLabel()
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

// Menampilkan informasi $produk3 dengan menggunakan var_dump
var_dump($produk3);
?>