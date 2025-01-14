<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <style>
        table {
            width: 100%;
        }
        th {
                background-color: tomato;
        }

        td {
                text-align: center;
        }

            .kuning {
                background-color: yellow;
        }
        h3, p {
            text-align: center;
        }

    </style>
</head>
<body>
    <?php
    // Array data siswa dengan nama dan nilai
    $siswa = [
        ["nama" => "Ali", "nilai" => 85],
        ["nama" => "Budi", "nilai" => 55],
        ["nama" => "Citra", "nilai" => 75],
        ["nama" => "Dewi", "nilai" => 40],
        ["nama" => "Eka", "nilai" => 90]
    ];

    // Batas kelulusan
    $batas_kelulusan = 60;

    // Menampilkan status kelulusan siswa
    echo "<h3>Status Kelulusan Siswa</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nama</th><th>Nilai</th><th>Status</th></tr>";

    foreach ($siswa as $data) {
        $status = $data['nilai'] > $batas_kelulusan ? 'Lulus' : 'Tidak Lulus';
        echo "<tr>";
        echo "<td>{$data['nama']}</td>";
        echo "<td>{$data['nilai']}</td>";
        echo "<td>$status</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <p>
        Copyright &copy; 2024 www.soetrisnogaleri.com
    </p>
</body>
</html>