<form method="post">
  Masukkan angka: <input type="number" name="angka">
  <input type="submit" value="Cek">
</form>

<?php
if (isset($_POST['angka'])) {
    $n = $_POST['angka'];
    if ($n % 2 == 0) {
        echo "$n adalah bilangan Genap";
    } else {
        echo "$n adalah bilangan Ganjil";
    }
}
?>
