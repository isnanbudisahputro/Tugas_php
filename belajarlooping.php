<?php
// Looping untuk mengatur jumlah baris
for ($baris = 9; $baris >= 1; $baris--) {
    // Looping untuk mencetak tanda bintang pada setiap baris
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        echo "*"; // Mencetak tanda bintang
    }
    echo "<br>"; // Mengakhiri baris saat mencetak satu baris tanda bintang
}
?>
