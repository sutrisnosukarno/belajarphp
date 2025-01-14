<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $conn->query("UPDATE kelas SET nama_kelas = '$nama_kelas' WHERE id_kelas = '$id_kelas'");
    header('Location: index.php');
}
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM kelas WHERE id_kelas = '$id'");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Edit Kelas</h1>
    <form method="POST">
        <input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas']; ?>">
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas:</label>
            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?php echo $row['nama_kelas']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>