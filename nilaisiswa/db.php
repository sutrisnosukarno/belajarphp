<?php
// File: db.php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nilai_siswa";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>