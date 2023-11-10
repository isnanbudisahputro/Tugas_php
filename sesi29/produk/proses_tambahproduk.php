<?php
include "connection.php";

if (!is_numeric($_POST['harga']) || !is_numeric($_POST['stok']) || !is_numeric($_POST['supplier_id'])) {
    echo "Input harga, stok, atau supplier_id tidak valid!";
    exit;
}

$kode_produk = $_POST['kode_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$supplier_id = $_POST['supplier_id'];

$stmt = $connection->prepare("INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga`, `stok`, `satuan`, `supplier_id`) 
                              VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ississ", $kode_produk, $nama_produk, $harga, $stok, $satuan, $supplier_id);
$stmt->execute();
$stmt->close();

header("Location:produk.php");
?>
