<?php

include "connection.php";

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM supplier WHERE id = '$id' ");

    header("Location: supplier.php");

?>