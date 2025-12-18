<?php
$conn = mysqli_connect("localhost", "root", "", "dilimorefarm");

if (!$conn) {
  die("Koneksi gagal");
}