<?php

//Nomor 1

$array = array("satu", "dua", "tiga", "empat", "lima");

for ($i = count($array) - 1; $i >= 0; $i--) {
    echo $array[$i] . "\n";
    echo "<br>";   
}
echo "<br>";

//Nomor 2

$array = array("Apel", "Nanas", "Mangga", "Jeruk");
$count = count($array);

if ($count > 0) {
    echo "Terdapat $count buah";
} else {
    echo "Array kosong";
}
echo "<br>";

//Nomor 3

echo "<br>";
$array = array("7", "3", "4", "9");
$total = 0;

foreach ($array as $nilai) {
    $total += (int)$nilai; // Konversi nilai ke integer sebelum penjumlahan
}

echo "Totalnya adalah $total";
echo "<br>";

//Nomor 4

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "1x" . $i . "=" . (1 * $i) . "\n";
    echo "<br>";
}




?>

