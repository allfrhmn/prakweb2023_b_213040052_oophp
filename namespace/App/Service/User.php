<?php
// OOP Dasar pada PHP #17 - Namespace

// Mendefinisikan namespace App\Service
namespace App\Service;

// Membuat kelas User di dalam namespace App\Service
class User {
    public function __construct() {
        // Mencetak pesan yang menyatakan bahwa ini adalah class User dari namespace App\Service
        echo "ini adalah class " . __CLASS__;
    }
}