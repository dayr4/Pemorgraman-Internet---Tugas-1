<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <?php
    $mahasiswa = [
        "2205551001" => "Andi Pratama",
        "2205551002" => "Budi Santoso",
        "2205551003" => "Citra Dewi",
        "2205551004" => "Dewi Lestari",
        "2205551005" => "Eko Wibowo"
    ];

    echo "<table>";
    echo "<tr><th>NIM</th><th>Nama</th></tr>";
    foreach ($mahasiswa as $nim => $nama) {
        echo "<tr><td>$nim</td><td>$nama</td></tr>";
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
