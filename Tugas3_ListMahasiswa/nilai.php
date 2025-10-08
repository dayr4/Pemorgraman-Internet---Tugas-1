<?php
include "koneksi.php";
$mahasiswa_id = $_GET['mahasiswa_id'] ?? 0;

// ambil data mahasiswa
$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
$stmt->bind_param("i", $mahasiswa_id);
$stmt->execute();
$mhs = $stmt->get_result()->fetch_assoc();

$stmt = $conn->prepare("SELECT * FROM nilai WHERE mahasiswa_id = ?");
$stmt->bind_param("i", $mahasiswa_id);
$stmt->execute();
$nilai = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Nilai Mahasiswa</title>
  <link rel="stylesheet" href="style.css"> <!-- panggil CSS pink -->
</head>
<body>
<div class="container">
  <h3>🌸 Nilai Mahasiswa: <?= htmlspecialchars($mhs['nama']); ?> (<?= htmlspecialchars($mhs['nim']); ?>)</h3>
  <div class="top-bar">
    <a href="index.php" class="btn">← Kembali ke Daftar</a>
    <a href="tambahNilai.php?mahasiswa_id=<?= $mahasiswa_id; ?>" class="btn-add">+ Tambah Nilai</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Nilai Angka</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($nilai->num_rows > 0): ?>
        <?php while($n = $nilai->fetch_assoc()): ?>
          <tr>
            <td><?= $n['id']; ?></td>
            <td><?= htmlspecialchars($n['mata_kuliah']); ?></td>
            <td><?= $n['sks']; ?></td>
            <td><?= htmlspecialchars($n['nilai_huruf']); ?></td>
            <td><?= htmlspecialchars($n['nilai_angka']); ?></td>
            <td>
              <a href="editNilai.php?id=<?= $n['id']; ?>&mahasiswa_id=<?= $mahasiswa_id; ?>" class="btn">Edit</a>
              <a href="hapusNilai.php?id=<?= $n['id']; ?>&mahasiswa_id=<?= $mahasiswa_id; ?>" 
                 class="btn" style="background-color:#ff4081;"
                 onclick="return confirm('Yakin ingin menghapus nilai ini?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="6">Belum ada nilai untuk mahasiswa ini.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
</body>
</html>
