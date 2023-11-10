<?php
    include "connection.php";
    $query = mysqli_query($connection, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Tambahkan library DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
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
                <hr>
            </div>

            <div class="col-md-12"> 
                <h1>Tabel Data Produk</h1>
                <a href="tambah_produk.php" class="btn btn-primary">Tambah data</a><br></br>

                <!-- Tambahkan ID untuk tabel -->
                <table id="produkTable">
                    <thead>
                        <tr>
                            <th width="80px"><b>id</b></th>
                            <th width="200px"><b>Kode Produk</b></th>
                            <th width="100px"><b>Nama Produk</b></th>
                            <th width="80px"><b>Harga</b></th>
                            <th width="80px"><b>Stok</b></th>
                            <th width="80px"><b>Satuan</b></th>
                            <th width="80px"><b>Supplier id</b></th>
                            <th width="80px"><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['kode_produk']; ?></td>
                                <td><?php echo $data['nama_produk']; ?></td>
                                <td><?php echo $data['harga']; ?></td>
                                <td><?php echo $data['stok']; ?></td>
                                <td><?php echo $data['satuan']; ?></td>
                                <td><?php echo $data['supplier_id']; ?></td>
                                <td>
                                    <a href="edit_produk.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_produk.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Inisialisasi DataTable -->
    <script>
        $(document).ready(function() {
            $('#produkTable').DataTable();
        });
    </script>
</body>
</html>
