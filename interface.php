<?php
// OOP Dasar pada PHP #15 - Interface

// Membuat interface InfoProduk untuk mengimplementasikan fungsi getInfoProduk
interface InfoProduk {
    public function getInfoProduk();
}

// Membuat kelas abstrak Produk
Abstract class Produk {
    protected $judul, 
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

    // Setter dan Getter untuk judul
    public function setJudul($judul) {
        $this->judul = $judul;
    }
    
    public function getJudul() {
        return $this->judul;
    }
    
    // Setter dan Getter untuk penulis
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    
    public function getPenulis() {
        return $this->penulis;
    }
    
    // Setter dan Getter untuk penerbit
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    
    public function getPenerbit() {
        return $this->penerbit;
    }
    
    // Setter dan Getter untuk diskon
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    
    public function getDiskon() {
        return $this->diskon;
    }
    
    // Setter dan Getter untuk harga
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Menggunakan fungsi getLabel() untuk mendapatkan label (penulis dan penerbit)
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Menggunakan abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getInfo();

}

// Membuat kelas sub Komik yang mewarisi dari kelas Produk
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
    
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


// Membuat kelas sub Game yang mewarisi dari kelas Produk
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Membuat kelas CetakInfoProduk untuk mencetak daftar produk
class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk (Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

// Membuat objek-objek produk
$produk1 = new Komik("Oshi no Ko", "Aka Akasaka", "Shueisha", 50000, 80);
$produk2 = new Game("PES 2013", "Kei Masuda", "Konami", 150000, 120);

// Membuat objek CetakInfoProduk dan menambahkan produk ke dalam daftar
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// Mencetak daftar produk
echo $cetakProduk->cetak();

// $tes = new Produk();