<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM kelas WHERE id_kelas = '$id'");
header('Location: index.php');
?>