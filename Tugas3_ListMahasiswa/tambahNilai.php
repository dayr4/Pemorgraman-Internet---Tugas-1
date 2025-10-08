<?php
include "koneksi.php";

$mahasiswa_id = $_GET['mahasiswa_id'] ?? 0;
$pesan = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $mata_kuliah = trim($_POST['mata_kuliah']);
  $sks = (int)$_POST['sks'];
  $nilai_angka_input = (float)$_POST['nilai_angka']; // input 0–100
  $nilai_huruf = trim($_POST['nilai_huruf']);
  $angka_mutu = (float)$_POST['angka_mutu']; // otomatis

  if ($mata_kuliah && $sks && $nilai_huruf !== "") {
    $stmt = $conn->prepare("INSERT INTO nilai (mahasiswa_id, mata_kuliah, sks, nilai_huruf, nilai_angka) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiss", $mahasiswa_id, $mata_kuliah, $sks, $nilai_huruf, $angka_mutu);
    $stmt->execute();
    header("Location: nilai.php?mahasiswa_id=$mahasiswa_id");
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
  <title>Tambah Nilai</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h3>🌸 Tambah Nilai Mahasiswa 🌸</h3>
  <form method="post">
    <p>Mata Kuliah:<br><input type="text" name="mata_kuliah"></p>
    <p>SKS:<br><input type="number" name="sks"></p>
    <p>Nilai Angka (0–100):<br><input type="number" step="0.01" name="nilai_angka" id="nilai_angka"></p>
    <p>Nilai Huruf:<br><input type="text" name="nilai_huruf" id="nilai_huruf" readonly></p>
    <p>Angka Mutu:<br><input type="number" step="0.01" name="angka_mutu" id="angka_mutu" readonly></p>
    <input type="submit" value="Simpan">
  </form>
  <p class="error"><?= htmlspecialchars($pesan); ?></p>
  <a href="nilai.php?mahasiswa_id=<?= $mahasiswa_id; ?>" class="btn">← Kembali</a>
</div>

<script>
// 🌸 fungsi otomatis isi nilai huruf dan angka mutu
document.getElementById('nilai_angka').addEventListener('input', function() {
  const n = parseFloat(this.value);
  let huruf = '', mutu = '';

  if (n >= 80 && n <= 100) { huruf = 'A'; mutu = 4.0; }
  else if (n >= 71 && n < 80) { huruf = 'B+'; mutu = 3.5; }
  else if (n >= 65 && n < 71) { huruf = 'B'; mutu = 3.0; }
  else if (n >= 60 && n < 65) { huruf = 'C+'; mutu = 2.5; }
  else if (n >= 55 && n < 60) { huruf = 'C'; mutu = 2.0; }
  else if (n >= 50 && n < 55) { huruf = 'D+'; mutu = 1.5; }
  else if (n >= 40 && n < 50) { huruf = 'D'; mutu = 1.0; }
  else if (n >= 0 && n < 40) { huruf = 'E'; mutu = 0; }

  document.getElementById('nilai_huruf').value = huruf;
  document.getElementById('angka_mutu').value = mutu;
});
</script>
</body>
</html>
