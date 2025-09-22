<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa (Multidimensi)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Data Mahasiswa</h2>
    <?php
    $mahasiswa = [
        ["nim" => "2205551001", "nama" => "Andi Pratama", "umur" => 20, "prodi" => "TI"],
        ["nim" => "2205551002", "nama" => "Budi Santoso", "umur" => 21, "prodi" => "TI"],
        ["nim" => "2205551003", "nama" => "Citra Dewi", "umur" => 19, "prodi" => "TI"],
        ["nim" => "2205551004", "nama" => "Dewi Lestari", "umur" => 22, "prodi" => "TI"],
        ["nim" => "2205551005", "nama" => "Eko Wibowo", "umur" => 20, "prodi" => "TI"],
        ["nim" => "2205551006", "nama" => "Farah Putri", "umur" => 19, "prodi" => "TI"],
        ["nim" => "2205551007", "nama" => "Gilang Saputra", "umur" => 20, "prodi" => "TI"],
        ["nim" => "2205551008", "nama" => "Hendra Wijaya", "umur" => 21, "prodi" => "TI"],
        ["nim" => "2205551009", "nama" => "Intan Sari", "umur" => 19, "prodi" => "TI"],
        ["nim" => "2205551010", "nama" => "Joko Purnomo", "umur" => 22, "prodi" => "TI"],
    ];

    echo "<table>";
    echo "<tr><th>NIM</th><th>Nama</th><th>Umur</th><th>Prodi</th></tr>";

    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['umur']}</td>";
        echo "<td>{$mhs['prodi']}</td>";
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
