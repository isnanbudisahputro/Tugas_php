<?php

// NOMER 1

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Angka $i adalah bilangan genap<br>";
    } else {
        echo "Angka $i adalah bilangan ganjil<br>";
    }
}

echo "<br>";

// NOMER 2


for ($tahun = 2000; $tahun <= 2023; $tahun++) {
    if ((($tahun % 4 == 0) && ($tahun % 100 != 0)) || ($tahun % 400 == 0)) {
        echo "Tahun $tahun adalah tahun kabisat<br>";
    } else {
        echo "Tahun $tahun bukan tahun kabisat<br>";
    }
}

echo "<br>";

// NOMER 3


for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>

