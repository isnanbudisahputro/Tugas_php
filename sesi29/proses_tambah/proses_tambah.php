<?php

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    include "connection.php";

    mysqli_query($connection, "INSERT INTO `pelanggan` (`nama`, `jenis_kelamin`, `telpon`, `alamat`, `tanggal_lahir`) 
    VALUES ('$nama', '$jenis_kelamin', '$telpon', '$alamat', '$tanggal_lahir'); ");

    
    header("Location:index.php");

?>