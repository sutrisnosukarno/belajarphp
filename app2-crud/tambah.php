<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "INSERT INTO mahasiswa (nama, nim, jurusan, alamat, tanggal_lahir) VALUES ('$nama', '$nim', '$jurusan', '$alamat', '$tanggal_lahir')";

    if ($koneksi->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa Baru</h1>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Jurusan: <input type="text" name="jurusan" required><br>
        Alamat: <textarea name="alamat" required></textarea><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
