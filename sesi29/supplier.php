<?php
    include "connection.php";
    $query = mysqli_query($connection, "SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            background-color: #A0E9FF;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        tr:nth-child(odd) td {
            background-color: white; 
        }

        tr:nth-child(even) td {
            background-color: #ccc; 
        }

        h1 {
            font-size: 24px; 
            font-weight: bold; 
            text-align: center; 
            color: #333;
            text-transform: uppercase;
        }

        nav {
            background-color: #333;
            color: white;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        nav li {
            margin: 0;
        }

        nav a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mb-5 mt-5">
            <a href="index.php"> Home </a> |
            <a href="supplier.php"> Supplier </a> |
            <a href="produk.php"> Produk </a>
            <hr>
        </div>

    <div class="col-md-12"> 
    <h1>Tabel Data Supplier</h1>
    <a href="tambah_supplier.php" class="btn btn-primary">Tambah data</a><br></br>
    <table>
        <tr>
            <th width="80px"><b>id</b></th>
            <th width="200px"><b>Nama</b></th>
            <th width="200px"><b>Telpon</b></th>
            <th width="100px"><b>Alamat</b></th>
        </tr>
        <?php while ($data = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['telpon']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</div>
</body>
</html>
