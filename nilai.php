<?php
// Array nama siswa dan nilai
$nilaiSiswa = array(
    "Isnan" => 95,
    "Budi" => 85,
    "Sahputro" => 75,
    "Ajeng" => 60,
    "Dimas" => 45
);

// Looping untuk mengkategorikan nilai
foreach ($nilaiSiswa as $siswa => $nilai) {
    $kategori = "";

    if ($nilai >= 90 && $nilai <= 100) {
        $kategori = "A";
    } elseif ($nilai >= 80 && $nilai < 90) {
        $kategori = "B";
    } elseif ($nilai >= 70 && $nilai < 80) {
        $kategori = "C";
    } else {
        $kategori = "D";
    }

    echo "$siswa mendapatkan kategori $kategori <br>";
}
?>
