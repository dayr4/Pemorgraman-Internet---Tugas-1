<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Daftar Barang</h2>
    <?php
    $barang = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
    
    echo "<table>";
    echo "<tr><th>No</th><th>Nama Barang</th></tr>";
    $no = 1;
    foreach($barang as $b){
        echo "<tr><td>$no</td><td>$b</td></tr>";
        $no++;
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
