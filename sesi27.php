<!DOCTYPE html>
<?php
//NOMER 1
for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
//NOMER 2

echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            background-color: blue;
            color: black;
            border-collapse: collapse;
            width: 30%;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: blue;
        }

        tr:nth-child(odd) {
            background-color: white;
        }

        tr:nth-child(even) {
            background-color: grey;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
    for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>Nama ke $i</td>";
    echo "<td>Kelas " . (11 - $i) . "</td>";
    echo "</tr>";
}
    echo "</tbody>";
    echo "</table>";
        
        ?>
    </table>
</body>
</html>

