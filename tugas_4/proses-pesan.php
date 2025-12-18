<?php
include 'config/koneksi.php';

$nama    = $_POST['nama'];
$email   = $_POST['email'];
$paket   = $_POST['paket'];
$jumlah  = $_POST['jumlah'];
$total = $_POST['total'];

$query = "INSERT INTO pemesanan 
(nama, email, paket, jumlah, total)
VALUES
('$nama', '$email', '$paket', '$jumlah', '$total')";

mysqli_query($conn, $query);

header("Location: list-pesanan.php");