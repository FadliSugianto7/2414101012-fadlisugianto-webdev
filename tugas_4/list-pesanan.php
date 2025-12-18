<?php
date_default_timezone_set('Asia/Jakarta');
include 'config/koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pemesanan</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="section__container">
  <div class="table-card">
    <h2>Data Pemesanan Wisata</h2>

    <div class="table-responsive">
      <table class="styled-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Paket</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Total Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['email'] ?></td>
              <td>
                <span class="badge <?= str_replace(' ', '-', strtolower($row['paket'])) ?>">
                  <?= $row['paket'] ?>
                </span>
              </td>
              <td><?= $row['jumlah'] ?> org</td>
              <td><?= date('d M Y H:i', strtotime($row['created_at'])) ?></td>
              <td>
                Rp <?= number_format($row['total'], 0, ',', '.') ?>
              </td>
              <td class="aksi">
                <a href="edit-pesanan.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
                <a href="hapus-pesanan.php?id=<?= $row['id'] ?>" class="btn-delete"
                   onclick="return confirm('Yakin hapus data?')">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="back-link">
      <a href="form-pesan.php">← Kembali ke Form</a>
    </div>
  </div>
</section>

</body>
</html>