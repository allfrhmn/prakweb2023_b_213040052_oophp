<?php 
// OOP Dasar pada PHP #16 - Autoloading

class CetakInfoProduk {
    // Menyimpan daftar produk
    public $daftarProduk = array();

    // Berfungsi untuk menambahkan produk ke dalam daftar
    public function tambahProduk (Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    // Metode untuk mencetak daftar produk
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        // Mengulang melalui daftar produk dan mengambil informasi produk menggunakan fungsi getInfoProduk
        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        // Mengembalikan teks yang berisi daftar produk
        return $str;
    }
}