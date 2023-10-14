<?php
// OOP Dasar pada PHP #16 - Autoloading

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