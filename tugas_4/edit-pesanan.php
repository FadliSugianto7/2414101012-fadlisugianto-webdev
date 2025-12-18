<?php
include 'config/koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if ($_POST) {
  mysqli_query($conn,
    "UPDATE pemesanan SET 
     nama='$_POST[nama]', 
     jumlah='$_POST[jumlah]' 
     WHERE id='$id'"
  );
  header("Location: list-pesanan.php");
}
?>

<form method="POST" class="form__box">
  <input type="text" name="nama" value="<?= $row['nama'] ?>">
  <input type="number" name="jumlah" value="<?= $row['jumlah'] ?>">
  <button class="btn">Update</button>
</form>