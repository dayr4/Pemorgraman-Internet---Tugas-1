<!DOCTYPE html>
<html>
<head>
    <title>Daftar Harga Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Daftar Harga Barang</h2>
    <?php
    $harga = [
        "Nasi Goreng" => 15000,
        "Mie Ayam" => 12000,
        "Soto Ayam" => 18000,
        "Bakso" => 17000,
        "Es Teh" => 5000
    ];

    echo "<table>";
    echo "<tr><th>Nama Barang</th><th>Harga</th></tr>";

    foreach ($harga as $barang => $h) {
        echo "<tr>";
        echo "<td>$barang</td>";
        echo "<td>Rp " . number_format($h, 0, ',', '.') . "</td>";
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
