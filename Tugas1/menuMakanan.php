<form method="post">
  Pilih Makanan:
  <select name="menu">
    <option value="nasi">Nasi Goreng</option>
    <option value="soto">Soto</option>
    <option value="mie">Mie Ayam</option>
  </select>
  <input type="submit" value="Lihat Harga">
</form>

<?php
if (isset($_POST['menu'])) {
    switch ($_POST['menu']) {
        case "nasi": echo "Harga Nasi Goreng: Rp20.000"; break;
        case "soto": echo "Harga Soto: Rp15.000"; break;
        case "mie":  echo "Harga Mie Ayam: Rp12.000"; break;
    }
}
?>
