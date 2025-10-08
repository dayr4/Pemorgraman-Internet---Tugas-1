<?php
include "koneksi.php";

$id = $_GET['id'] ?? 0;
$mahasiswa_id = $_GET['mahasiswa_id'] ?? 0;

$stmt = $conn->prepare("DELETE FROM nilai WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: nilai.php?mahasiswa_id=$mahasiswa_id");
exit;
?>
