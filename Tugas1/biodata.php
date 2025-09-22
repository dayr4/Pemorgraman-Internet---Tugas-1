<form method="post">
  Nama: <input type="text" name="nama"><br>
  Umur: <input type="number" name="umur"><br>
  Jenis Kelamin: 
  <select name="jk">
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
  </select><br>
  Alamat: <input type="text" name="alamat"><br>
  <input type="submit" value="Kirim">
</form>

<?php
if (isset($_POST['nama'])) {
    echo "Halo, nama saya " . $_POST['nama'] . ". Umur saya " . $_POST['umur'] .
         ". Saya seorang " . $_POST['jk'] . ". Saya tinggal di " . $_POST['alamat'];
}
?>
