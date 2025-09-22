<form method="post">
  Nilai: <input type="number" name="nilai" min="0" max="100">
  <input type="submit" value="Cek Grade">
</form>

<?php
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];
    if ($nilai >= 85) $grade = "A";
    elseif ($nilai >= 70) $grade = "B";
    elseif ($nilai >= 55) $grade = "C";
    elseif ($nilai >= 40) $grade = "D";
    else $grade = "E";

    echo "Nilai Anda: $nilai, Grade: $grade";
}
?>
