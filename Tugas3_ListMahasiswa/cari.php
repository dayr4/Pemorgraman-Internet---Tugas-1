<?php
include "koneksi.php";
$keyword = trim($_GET['keyword'] ?? '');
header('Content-Type: application/json; charset=utf-8');

if ($keyword === '') {
  $stmt = $conn->prepare("SELECT id, nim, nama, prodi FROM mahasiswa ORDER BY id DESC");
} else {
  $like = "%{$keyword}%";
  // 🔍 cari berdasarkan nama, NIM, atau program studi
  $stmt = $conn->prepare("SELECT id, nim, nama, prodi FROM mahasiswa 
                          WHERE nama LIKE ? OR nim LIKE ? OR prodi LIKE ?
                          ORDER BY id DESC");
  $stmt->bind_param("sss", $like, $like, $like);
}
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
echo json_encode($data, JSON_UNESCAPED_UNICODE);
