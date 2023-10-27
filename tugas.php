<?php
// Looping untuk mengatur jumlah baris (10 baris)
for ($baris = 0; $baris <= 8; $baris++) {
    // Looping untuk mencetak angka pada setiap baris
    for ($angka = 0; $angka <= $baris; $angka++) {
        echo $angka; // Mencetak angka
    }
    echo "<br>"; // Mengakhiri baris saat mencetak satu baris angka
}
?>
