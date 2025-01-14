<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Data Kelas dan Siswa</h1>

    <!-- Tampilkan data kelas -->
    <h2>Daftar Kelas</h2>
    <a href="tambah_kelas.php" class="btn btn-primary mb-3">Tambah Kelas</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM kelas");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id_kelas'] . "</td>";
                echo "<td>" . $row['nama_kelas'] . "</td>";
                echo "<td><a href='edit_kelas.php?id=" . $row['id_kelas'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                echo "<a href='hapus_kelas.php?id=" . $row['id_kelas'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Tampilkan data siswa -->
    <h2>Daftar Siswa</h2>
    <a href="tambah_siswa.php" class="btn btn-primary mb-3">Tambah Siswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT siswa.id_siswa, siswa.nama_siswa, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id_siswa'] . "</td>";
                echo "<td>" . $row['nama_siswa'] . "</td>";
                echo "<td>" . $row['nama_kelas'] . "</td>";
                echo "<td><a href='edit_siswa.php?id=" . $row['id_siswa'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                echo "<a href='hapus_siswa.php?id=" . $row['id_siswa'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>