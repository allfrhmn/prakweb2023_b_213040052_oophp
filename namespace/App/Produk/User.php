<?php 
// OOP Dasar pada PHP #17 - Namespace

// Mendefinisikan namespace App\Produk
namespace App\Produk;

// Membuat kelas User di dalam namespace App\Produk
class User {
    public function __construct() {
        // Mencetak pesan yang menyatakan bahwa ini adalah class User dari namespace App\Produk
        echo "ini adalah class " . __CLASS__;
    }
}