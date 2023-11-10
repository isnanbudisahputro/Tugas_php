<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<?php
include "connection.php";

$id = $_GET['id'];

$produks = mysqli_query($connection, "SELECT * FROM produk WHERE id = '$id' ");

foreach ($produks as $key => $produk) {
    $kode_produk = $produk['kode_produk'];
    $nama_produk = $produk['nama_produk'];
    $harga = $produk['harga'];
    $stok = $produk['stok'];
    $satuan = $produk['satuan'];
    $supplier_id = $produk['supplier_id'];
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Edit data Produk</h3>
                <form action="proses_editproduk.php?id=<?php echo $id; ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Kode Produk
                            </td>
                            <td>
                                <input type="number" name="kode_produk" class="form-control" required="" autocomplete="off"
                                value="<?php echo $kode_produk; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Produk
                            </td>
                            <td>
                                <input type="text" name="nama_produk" class="form-control" required="" autocomplete="off"
                                value="<?php echo $nama_produk; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Harga
                            </td>
                            <td>
                                <input type="number" name="harga" class="form-control" required="" autocomplete="off"
                                value="<?php echo $harga; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Stok
                            </td>
                            <td>
                                <input type="number" name="stok" class="form-control" required="" autocomplete="off"
                                value="<?php echo $stok; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Satuan
                            </td>
                            <td>
                                <input type="text" name="satuan" class="form-control" required="" autocomplete="off"
                                value="<?php echo $satuan; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Supplier id
                            </td>
                            <td>
                                <input type="number" name="supplier_id" class="form-control" required="" autocomplete="off"
                                value="<?php echo $supplier_id; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            
                            </td>
                            <td>
                                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
