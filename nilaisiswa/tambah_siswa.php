<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_siswa = $_POST['nama_siswa'];
    $id_kelas = $_POST['id_kelas'];
    $conn->query("INSERT INTO siswa (nama_siswa, id_kelas) VALUES ('$nama_siswa', '$id_kelas')");
    header('Location: index.php');
}
$result = $conn->query("SELECT * FROM kelas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Tambah Siswa</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa:</label>
            <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_kelas" class="form-label">Kelas:</label>
            <select name="id_kelas" id="id_kelas" class="form-select" required>
                <?php while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_kelas'] . "'>" . $row['nama_kelas'] . "</option>";
                } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>