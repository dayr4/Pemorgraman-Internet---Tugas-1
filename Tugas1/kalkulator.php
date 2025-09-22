<h2>Kalkulator Sederhana</h2>
<form method="post">
  Angka 1: <input type="number" step="any" name="angka1" required><br><br>
  Angka 2: <input type="number" step="any" name="angka2" required><br><br>
  Operator: 
  <select name="operator">
    <option value="tambah">+</option>
    <option value="kurang">-</option>
    <option value="kali">*</option>
    <option value="bagi">/</option>
  </select>
  <br><br>
  <input type="submit" value="Hitung">
</form>

<?php
if (isset($_POST['angka1']) && isset($_POST['angka2'])) {
    $a = floatval($_POST['angka1']);
    $b = floatval($_POST['angka2']);
    $op = $_POST['operator'];
    $hasil = 0;

    switch ($op) {
        case "tambah": $hasil = $a + $b; break;
        case "kurang": $hasil = $a - $b; break;
        case "kali":   $hasil = $a * $b; break;
        case "bagi":   
            if ($b != 0) {
                $hasil = $a / $b; 
            } else {
                echo "<div class='result'>Tidak bisa membagi dengan nol!</div>";
                exit;
            }
            break;
    }

    echo "<div class='result'>Hasil: $hasil</div>";
}
?>
