<?php
// Fungsi untuk menghitung BMI
function hitungBMI($beratBadan, $tinggiBadan) {
    return $beratBadan / ($tinggiBadan * $tinggiBadan);
}

// Input data
$nama = "Isnan Budi Sahputro"; // Gantilah dengan nama Anda
$tinggiBadan = 1.73; // tinggi badan Anda (dalam meter)
$beratBadan = 66; // berat badan (dalam kilogram)

// Menghitung BMI
$bmi = hitungBMI($beratBadan, $tinggiBadan);

// Menentukan kelompok BMI
if ($bmi < 18.5) {
    $kelompokBMI = "kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $kelompokBMI = "sedang";
} else {
    $kelompokBMI = "gemuk";
}

// Menampilkan hasil
echo "Halo, $nama. Nilai BMI anda adalah " . number_format($bmi, 2) . ", anda termasuk dalam kelompok $kelompokBMI.";
?>
