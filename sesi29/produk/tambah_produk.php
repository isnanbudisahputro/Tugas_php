<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Tambahkan data Produk</h3>
                <form action="proses_tambahproduk.php" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Kode Produk
                            </td>
                            <td>
                                <input type="number" name="kode_produk" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Produk
                            </td>
                            <td>
                                <input type="text" name="nama_produk" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Harga
                            </td>
                            <td>
                                <input type="text" name="harga" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                stok
                            </td>
                            <td>
                                <input type="number" name="stok" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                satuan
                            </td>
                            <td>
                                <input type="text" name="satuan" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Supplier id
                            </td>
                            <td>
                                <input type="number" name="supplier_id" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            
                            </td>
                            <td>
                                <input type="submit" name="submit" value="tambah" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>