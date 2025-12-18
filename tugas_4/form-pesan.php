<?php
$paket = isset($_GET['paket']) ? $_GET['paket'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="css/style.css" />
  <title>Form Pemesanan | DilimoreFarm</title>
</head>
<body>

<nav>
  <div class="nav__header">
    <div class="logo nav__logo">
      <a href="index.html">Dilimore <span>Farm</span></a>
    </div>
    <div class="nav__menu__btn" id="menu-btn">
      <span><i class="ri-menu-line"></i></span>
    </div>
  </div>
  <ul class="nav__links" id="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="form-pesan.php">Explore</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
  <div class="nav__btn">
    <button class="btn"><i class="ri-shopping-bag-fill"></i></button>
  </div>
</nav>

<section class="section__container" style="padding-top: 8rem;">
  <div class="form-card">
    <h2>Form Pemesanan Wisata</h2>

    <form action="proses-pesan.php" method="POST" class="booking-form">

      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" required>
      </div>

      <div class="form-group">
        <label>Pilih Paket</label>
        <select name="paket" id="paket" required>
          <option value="">-- Pilih Paket --</option>
          <option value="Crimson Harvest" <?= $paket=="Crimson Harvest"?'selected':'' ?>>
            Crimson Harvest (Rp 30.000)
          </option>
          <option value="Feeding Frenzy" <?= $paket=="Feeding Frenzy"?'selected':'' ?>>
            Feeding Frenzy (Rp 20.000)
          </option>
          <option value="Wildflower Journey" <?= $paket=="Wildflower Journey"?'selected':'' ?>>
            Wildflower Journey (Rp 25.000)
          </option>
        </select>
      </div>

      <div class="form-group">
        <label>Jumlah Orang</label>
        <input type="number" name="jumlah" id="jumlah" min="1" value="1" required>
      </div>

      <div class="form-group">
        <label>Total Harga</label>
        <input type="text" id="total_display" readonly>
        <input type="hidden" name="total" id="total">
      </div>

      <button type="submit" class="btn btn-full">Pesan Sekarang</button>
    </form>

    <p class="link-center">
      <a href="list-pesanan.php">Lihat Data Pesanan</a>
    </p>
  </div>
</section>

<script>
const hargaPaket = {
  "Crimson Harvest": 30000,
  "Feeding Frenzy": 20000,
  "Wildflower Journey": 25000
};

const paket = document.getElementById("paket");
const jumlah = document.getElementById("jumlah");
const totalDisplay = document.getElementById("total_display");
const totalInput = document.getElementById("total");

function hitungTotal() {
  const harga = hargaPaket[paket.value] || 0;
  const qty = parseInt(jumlah.value) || 0;
  const total = harga * qty;

  totalDisplay.value = "Rp " + total.toLocaleString("id-ID");
  totalInput.value = total;
}

paket.addEventListener("change", hitungTotal);
jumlah.addEventListener("input", hitungTotal);

hitungTotal();

const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});
</script>

</body>
</html>