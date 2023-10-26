<?php
    include "connection.php";
    $query = mysqli_query($conn, "SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
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
    </style>
</head>
<body>
    <h1>Tabel Data Pelanggan</h1>
    <table>
        <tr>
            <th width="80px"><b>id</b></th>
            <th width="300px"><b>Nama</b></th>
            <th width="200px"><b>Jenis Kelamin</b></th>
            <th width="100px"><b>Telepon</b></th>
            <th width="300px"><b>Alamat</b></th>
        </tr>
        <?php while ($data = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['telpon']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
