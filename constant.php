<?php 
// OOP Dasar pada PHP #12 - Constant

// Menggunakan define() untuk mendefinisikan konstanta "nama"
// define('NAMA', 'Allfiandi Rahman');
// echo NAMA;

// echo "<br>";

// Menggunakan const untuk mendefinisikan konstanta "umur"
// const UMUR = 21;
// echo UMUR;

// Mendefinisikan konstanta dalam kelas Coba
// class Coba {
//     const NAMA = 'Allfiandi';
// }

// Mengakses konstanta dalam kelas Coba
// echo Coba::NAMA;

// Menggunakan ini untuk mendapatakan file saat ini
// echo __FILE__;

// Mendefinisikan fungsi coba() dan untuk mendapatkan nama fungsi
// function coba() {
//     return __FUNCTION__;
// }

// Memanggil dan menampilkan fungsi coba()
// echo coba();

// Membuat kelas Coba
class Coba {
    public $kelas = __CLASS__;
}

// Membuat objek dari kelas Coba 
$obj = new Coba;
echo $obj->kelas;
?>