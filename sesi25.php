<?php

//soal 1

$bilangan = 6;

if ($bilangan % 2 == 0) {
    echo "Bilangan $bilangan adalah bilangan genap.";
} else {
    echo "Bilangan $bilangan adalah bilangan ganjil.<br>";
}

//soal 2

$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year . " adalah tahun kabisat.";
} else {
    echo $year . " bukan tahun kabisat.<br>";
}

//soal 3
$nilai = 85;

if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $grade = "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $grade = "D";
} else {
    $grade = "E";
}
echo "Nilai Anda adalah $nilai, dan grade Anda adalah $grade.<br>";
?>