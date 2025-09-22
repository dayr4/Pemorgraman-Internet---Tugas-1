<!DOCTYPE html>
<html>
<head>
    <title>Nilai Mahasiswa dengan Kondisi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Nilai Mahasiswa</h2>
    <?php
    $mahasiswa = [
        ["nim" => "2205551001", "nama" => "Andi Pratama", "nilai" => 85],
        ["nim" => "2205551002", "nama" => "Budi Santoso", "nilai" => 68],
        ["nim" => "2205551003", "nama" => "Citra Dewi", "nilai" => 92],
        ["nim" => "2205551004", "nama" => "Dewi Lestari", "nilai" => 55],
        ["nim" => "2205551005", "nama" => "Eko Wibowo", "nilai" => 74],
        ["nim" => "2205551006", "nama" => "Farah Putri", "nilai" => 40],
        ["nim" => "2205551007", "nama" => "Gilang Saputra", "nilai" => 95],
        ["nim" => "2205551008", "nama" => "Hendra Wijaya", "nilai" => 60],
        ["nim" => "2205551009", "nama" => "Intan Sari", "nilai" => 72],
        ["nim" => "2205551010", "nama" => "Joko Purnomo", "nilai" => 30],
    ];

    echo "<table>";
    echo "<tr><th>NIM</th><th>Nama</th><th>Nilai</th><th>Status</th></tr>";

    foreach ($mahasiswa as $mhs) {
        $status = ($mhs['nilai'] >= 70) ? "Lulus" : "Tidak Lulus";
        echo "<tr>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['nilai']}</td>";
        echo "<td>$status</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <p><a href="index.php" style="
    display:inline-block;
    margin-top:20px;
    padding:8px 14px;
    background:#6c757d;
    color:white;
    border-radius:5px;
    text-decoration:none;">⬅ Kembali</a></p>

</div>
</body>
</html>
