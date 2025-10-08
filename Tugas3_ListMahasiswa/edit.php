<?php
include "koneksi.php";

$id = $_GET['id'] ?? 0;
$pesan = "";

// Ambil data mahasiswa berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nim = trim($_POST['nim']);
  $nama = trim($_POST['nama']);
  $prodi = trim($_POST['prodi']);

  if ($nim && $nama && $prodi) {
    $stmt = $conn->prepare("UPDATE mahasiswa SET nim=?, nama=?, prodi=? WHERE id=?");
    $stmt->bind_param("sssi", $nim, $nama, $prodi, $id);
    $stmt->execute();
    header("Location: index.php");
    exit;
  } else {
    $pesan = "Semua field wajib diisi!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h3>📝 Edit Data Mahasiswa</h3>
  <form method="post">
    <p>NIM:<br><input type="text" name="nim" value="<?= htmlspecialchars($data['nim']); ?>"></p>
    <p>Nama:<br><input type="text" name="nama" value="<?= htmlspecialchars($data['nama']); ?>"></p>
    <p>Program Studi:<br><input type="text" name="prodi" value="<?= htmlspecialchars($data['prodi']); ?>"></p>
    <input type="submit" value="💾 Simpan Perubahan">
  </form>
  <p class="error"><?= htmlspecialchars($pesan); ?></p>
  <a href="index.php" class="btn">← Kembali</a>
</div>
</body>
</html>
