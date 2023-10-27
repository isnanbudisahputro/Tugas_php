<?php
// Fungsi untuk menghitung luas persegi
function hitungLuasPersegi($sisi) {
    return $sisi * $sisi;
}

// Fungsi untuk menghitung luas persegi panjang
function hitungLuasPersegi_Panjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jari) {
    return 3.14 * $jari * $jari;
}

// Fungsi untuk menghitung luas trapesium
function hitungLuasTrapesium($alasAtas, $alasBawah, $tinggi) {
    return 0.5 * ($alasAtas + $alasBawah) * $tinggi;
}

// Menggunakan looping untuk menghitung luas
$shapes = array(
    array("persegi", 5),
    array("persegi_panjang", 4, 6),
    array("segitiga", 8, 10),
    array("lingkaran", 3),
    array("trapesium", 6, 8, 4)
);

foreach ($shapes as $shape) {
    $namaBangunDatar = array_shift($shape); // Mengambil nama bangun datar
    $luas = call_user_func_array("hitungLuas" . ucwords($namaBangunDatar), $shape); // Memanggil fungsi yang sesuai
    echo "Luas $namaBangunDatar adalah: $luas <br>";
}
?>
