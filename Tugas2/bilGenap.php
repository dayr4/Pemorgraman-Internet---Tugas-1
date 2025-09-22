<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan Genap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Bilangan Genap antara n1 dan n2</h2>
    <form method="post">
        Nilai n1: <input type="number" name="n1" step="any" required>
        <br><br>
        Nilai n2: <input type="number" name="n2" step="any" required>
        <br><br>
        <input type="submit" value="Tampilkan Bilangan Genap">
    </form>

    <?php
    if (isset($_POST['n1']) && isset($_POST['n2'])) {
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);

        if ($n1 < $n2) {
            echo "<div class='result'><strong>Bilangan Genap dari $n1 sampai $n2:</strong><br>";
            for ($i = ceil($n1); $i <= floor($n2); $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }
            echo "</div>";
        } else {
            echo "<div class='result'>n1 harus lebih kecil dari n2!</div>";
        }
    }
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
