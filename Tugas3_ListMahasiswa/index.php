<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>📋 Daftar Mahasiswa</h2>

  <div class="top-bar">
    <a href="tambah.php" class="btn">➕ Tambah Mahasiswa</a>

    <div class="search-bar">
      🔍 <input type="text" id="keyword" placeholder="Cari Nama/Prodi/NIM...">
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="hasil">
      <?php
      // tampilkan semua data mahasiswa
      $stmt = $conn->prepare("SELECT id, nim, nama, prodi FROM mahasiswa ORDER BY id DESC");
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        $id = htmlspecialchars($row['id']);
        $nim = htmlspecialchars($row['nim']);
        $nama = htmlspecialchars($row['nama']);
        $prodi = htmlspecialchars($row['prodi']);
        echo "
          <tr>
            <td>$id</td>
            <td>$nim</td>
            <td>$nama</td>
            <td>$prodi</td>
            <td>
              <a class='btn' href='edit.php?id=$id'>Edit</a>
              <a class='btn' style='background-color:#dc3545;' href='hapus.php?id=$id' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a>
              <a class='btn' style='background-color:#28a745;' href='nilai.php?mahasiswa_id=$id'>Input Nilai</a>
            </td>
          </tr>
        ";
      }
      $stmt->close();
      ?>
    </tbody>
  </table>

  <script>
  // fitur pencarian realtime (AJAX)
  document.getElementById("keyword").addEventListener("keyup", function() {
    const keyword = this.value.trim();
    fetch("cari.php?keyword=" + encodeURIComponent(keyword))
      .then(response => response.json())
      .then(data => {
        let isi = "";
        if (data.length === 0) {
          isi = "<tr><td colspan='5'>Tidak ada data ditemukan</td></tr>";
        } else {
          data.forEach(m => {
            isi += `
              <tr>
                <td>${m.id}</td>
                <td>${m.nim}</td>
                <td>${m.nama}</td>
                <td>${m.prodi}</td>
                <td>
                  <a class='btn' href='edit.php?id=${m.id}'>Edit</a>
                  <a class='btn' style='background-color:#dc3545;' href='hapus.php?id=${m.id}' onclick="return confirm('Yakin hapus data?')">Hapus</a>
                  <a class='btn' style='background-color:#28a745;' href='nilai.php?mahasiswa_id=${m.id}'>Input Nilai</a>
                </td>
              </tr>`;
          });
        }
        document.getElementById("hasil").innerHTML = isi;
      });
  });
  </script>
</body>
</html>
