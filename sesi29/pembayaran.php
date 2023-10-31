<?php
    include "connection.php";
    $query = mysqli_query($conn, "SELECT * FROM pembayaran");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            background-color: blue;
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
            <a href="index.php">Home</a> |
            <a href="produk.php">Produk</a> |
            <a href="pembayaran.php">Pembayaran</a>
            <hr>
        </div>
    
    <h1>Tabel Data Pembayaran</h1>
    <table>
        <tr>
            <th width="80px"><b>id</b></th>
            <th width="200px"><b>Tanggal bayar</b></th>
            <th width="100px"><b>Total</b></th>
            <th width="80px"><b>Metode</b></th>
            <th width="80px"><b>Penjualan id</b></th>
        </tr>
        <?php while ($data = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['tanggal_bayar']; ?></td>
                <td><?php echo $data['total']; ?></td>
                <td><?php echo $data['metode']; ?></td>
                <td><?php echo $data['penjualan_id']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</div>
</body>
</html>