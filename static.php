<?php 
// OOP Dasar pada PHP #11 - Static Keyword

// Membuat kelas ContoStatic
// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

// Membuat kelas Contoh
class Contoh {
    // Membuat static tanpa membuat objek
    public static $angka = 1;

    // Membuat fungsi halo() dengan menggunakan static
    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

// Membuat objek pertama dari kelas Contoh
$obj = new Contoh;

// Memanggil fungsi dari objek pertama
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

// Membuat objek kedua dari kelas Contoh
$obj2 = new Contoh;

// Memanggil fungsi dari objek kedua
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
