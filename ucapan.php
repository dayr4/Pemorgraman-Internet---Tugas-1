<form method="post">
  Nama: <input type="text" name="nama">
  <input type="submit" value="Kirim">
</form>

<?php
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    echo "Halo, $nama selamat belajar PHP!";
}
?>
