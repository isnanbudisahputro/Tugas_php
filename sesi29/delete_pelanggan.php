<?php

include "connection.php";

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM pelanggan WHERE id = '$id' ");

    header("Location:index.php");

?>