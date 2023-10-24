<!DOCTYPE html>
<html>
<head>
    <style>
    table {
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    tr:nth-child(odd) {
        background-color: white;
    }

    tr:nth-child(even) {
        background-color: gray;
    }

    </style>
</head>
<body>
    <table class="header-table">
        <tr>
            <th colspan="8">Daftar Nilai</th>
        </tr>
    </table>
    <br>
<?php
$data = file_get_contents("data.json");
$students = json_decode($data);
if (!empty($students)) {
    echo '<table>';
    echo '<tr>';
    echo '<th>No</th>';
    echo '<th>Nama</th>';
    echo '<th>Tanggal Lahir</th>';
    echo '<th>Umur</th>';
    echo '<th>Alamat</th>';
    echo '<th>Kelas</th>';
    echo '<th>Nilai</th>';
    echo '<th>Hasil</th>';
    echo '</tr>';

    foreach ($students as $key => $student) {
        echo '<tr>';
        echo '<td>' . ($key + 1) . '</td>';
        echo '<td>' . $student->nama . '</td>';
        echo '<td>' . $student->tanggal_lahir . '</td>';
        
        $tanggal_lahir = $student->tanggal_lahir;
        $tahun_lahir = date("Y", strtotime($tanggal_lahir));
        $tahun_sekarang = date("Y");
        $umur = $tahun_sekarang - $tahun_lahir;

        echo '<td>' . $umur . ' tahun</td>';
        echo '<td>' . $student->alamat . '</td>';
        echo '<td>' . $student->kelas . '</td>';
        echo '<td>' . $student->nilai . '</td>';
        
        $hasil = '';
        if ($student->nilai >= 90 && $student->nilai <= 100) {
            $hasil = 'A';
        } elseif ($student->nilai >= 80 && $student->nilai < 90) {
            $hasil = 'B';
        } elseif ($student->nilai >= 70 && $student->nilai < 80) {
            $hasil = 'C';
        } else {
            $hasil = 'D';
        }

        echo '<td>' . $hasil . '</td>';

        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "Data tidak ditemukan.";
}
?>
</body>
</html>
