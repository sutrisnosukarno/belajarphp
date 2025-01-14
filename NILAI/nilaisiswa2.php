<?php
// Fungsi untuk memproses data siswa
function prosesDataSiswa($siswa, $batas_kelulusan) {
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
}

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $nilai = $_POST['nilai'] ?? 0;

    // Validasi input
    if (!empty($nama) && is_numeric($nilai)) {
        $siswa = [
            ["nama" => $nama, "nilai" => (int)$nilai]
        ];
        $batas_kelulusan = 60;
        prosesDataSiswa($siswa, $batas_kelulusan);
    } else {
        echo "<p style='color:red;'>Masukkan nama dan nilai yang valid!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
</head>
<body>
    <h2>Input Data Siswa</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nilai">Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
