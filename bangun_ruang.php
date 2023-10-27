<?php
// Fungsi untuk menghitung volume kubus
function hitungVolumeKubus($sisi) {
    return $sisi * $sisi * $sisi;
}

// Fungsi untuk menghitung volume balok
function hitungVolumeBalok($panjang, $lebar, $tinggi) {
    return $panjang * $lebar * $tinggi;
}

// Fungsi untuk menghitung volume bola
function hitungVolumeBola($jari) {
    return (4/3) * 3.14 * $jari * $jari * $jari;
}

// Menggunakan looping untuk menghitung volume
$shapes = array(
    array("kubus", 5),
    array("balok", 4, 6, 8),
    array("bola", 3),
);

foreach ($shapes as $shape) {
    $namaBangunRuang = array_shift($shape); // Mengambil nama bangun ruang
    $volume = call_user_func_array("hitungVolume" . ucwords($namaBangunRuang), $shape); // Memanggil fungsi yang sesuai
    echo "Volume $namaBangunRuang adalah: $volume <br>";
}
?>
