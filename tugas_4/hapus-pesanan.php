<?php
include 'config/koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM pemesanan WHERE id='$id'");
header("Location: list-pesanan.php");