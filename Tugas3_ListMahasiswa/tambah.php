<?php
include "koneksi.php";
$pesan = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nim = trim($_POST['nim']);
  $nama = trim($_POST['nama']);
  $prodi = trim($_POST['prodi']);
  if ($nim && $nama && $prodi) {
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nim, nama, prodi) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nim, $nama, $prodi);
    $stmt->execute();
    header("Location: index.php");
  } else {
    $pesan = "Semua field wajib diisi!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h3>🌸 Tambah Mahasiswa 🌸</h3>
  <form method="post">
    <p>NIM:<br><input type="text" name="nim"></p>
    <p>Nama:<br><input type="text" name="nama"></p>
    <p>Prodi:<br><input type="text" name="prodi"></p>
    <input type="submit" value="Simpan">
  </form>
  <p class="error"><?= htmlspecialchars($pesan); ?></p>
</div>
</body>
</html>
