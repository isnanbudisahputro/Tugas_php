<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Tambahkan stylesheet DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
        .navbar-custom {
            background-color: #A0E9FF;
        }

        .navbar-custom a {
            color: black;
        }

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
        <div class="col-md-12 text-center mb-5 mt-5 loader">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="supplier.php"><b>Supplier</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produk.php"><b>Produk</b></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
            <hr>
        </div>

        <div class="col-md-12"> 
            <h1>Tabel Data Pelanggan</h1>
            <a href="tambah.php" class="btn btn-primary">Tambah data</a><br><br>
            
            <!-- Tambahkan ID pada tabel untuk menginisialisasi DataTable -->
            <table id="pelangganTable">
                <thead>
                    <tr>
                        <th width="80px"><b>id</b></th>
                        <th width="250px"><b>Nama</b></th>
                        <th width="100px"><b>Jenis Kelamin</b></th>
                        <th width="100px"><b>Telpon</b></th>
                        <th width="200px"><b>Alamat</b></th>
                        <th width="200px"><b>Tanggal Lahir</b></th>
                        <th width="80px"><b>Aksi</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td><?php echo $data['telpon']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['tanggal_lahir']; ?></td>
                            <td>
                                <a href="edit_pelanggan.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_pelanggan.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!-- Tambahkan script untuk inisialisasi DataTable -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#pelangganTable').DataTable();
                });
            </script>
        </div>
    </div>
</div>
</body>
</html>
