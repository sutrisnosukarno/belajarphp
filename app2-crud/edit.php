<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = $koneksi->query("SELECT * FROM mahasiswa WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat', tanggal_lahir='$tanggal_lahir' WHERE id=$id";

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
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="POST" action="">
        Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>
        NIM: <input type="text" name="nim" value="<?= $row['nim']; ?>" required><br>
        Jurusan: <input type="text" name="jurusan" value="<?= $row['jurusan']; ?>" required><br>
        Alamat: <textarea name="alamat" required><?= $row['alamat']; ?></textarea><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
