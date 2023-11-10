<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
</head>
<?php


include "connection.php";

$id = $_GET['id'];

$suppliers = mysqli_query($connection, " SELECT * FROM supplier WHERE id = '$id' ");

foreach ($suppliers as $key => $supplier) {
    $nama = $supplier['nama'];
    $telpon = $supplier['telpon'];
    $alamat = $supplier['alamat'];
}

?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Edit data Supplier</h3>
                <form action="proses_editsupplier.php?id=<?php echo $id; ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>
                                <input type="text" name="nama" class="form-control" required="" autocomplete="off"
                                value="<?php echo $nama; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Telpon
                            </td>
                            <td>
                                <input type="number" name="telpon" class="form-control" required="" autocomplete="off"
                                value="<?php echo $telpon; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <textarea class="form-control" name="alamat" rows="5" required=""><?php echo $alamat;
                                ?></textarea>
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