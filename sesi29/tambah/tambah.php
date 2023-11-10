<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Tambahkan data pelanggan</h3>
                <form action="proses_tambah.php" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>
                                <input type="text" name="nama" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jenis kelamin
                            </td>
                            <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Pria" checked="">
                                <label class="form-check-label" for="flexRadioDefault1"> Pria
                                </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Wanita">
                            <label class="form-check-label" for="flexRadioDefault1"> wanita
                            </label>
                        </div>
                             </td>
                        </tr>
                        <tr>
                            <td>
                                Telpon
                            </td>
                            <td>
                                <input type="number" name="telpon" class="form-control" required="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <textarea class="form-control" name="alamat" rows="5" required="" autocomplete="off"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal lahir
                            </td>
                            <td>
                                <input type="date" name="tanggal lahir" class="form-control" required="" autocomplete="off">
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