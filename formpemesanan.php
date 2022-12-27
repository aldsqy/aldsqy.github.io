<?php

// sambungkan dengan file connect.php
include 'connect.php';

// jika tombol continue to checkout diklik maka
if (isset($_POST["checkout"])) {
  $nama = htmlspecialchars($_POST['name']); // ambil inputan nama dan masukkan ke variabel $nama
  $email = htmlspecialchars($_POST['email']); // ambil inputan email dan masukkan ke variabel $email
  $noHp = htmlspecialchars($_POST['phone']); // ambil inputan no hp dan masukkan ke variabel $noHp
  $alamat = htmlspecialchars($_POST['address']); // ambil inputan alamat dan masukkan ke variabel $alamat
  $kecamatan = htmlspecialchars($_POST['kecamatan']); // ambil inputan kecamatan dan masukkan ke variabel $kecamatan
  $kota = htmlspecialchars($_POST['kota']); // ambil inputan kota dan masukkan ke variabel $kota
  $kodepos = htmlspecialchars($_POST['kodepos']); // ambil inputan kodepos dan masukkan ke variabel $kodepos 
  $total_harga = $_GET["total_harga"]; // ambil data total_harga dari keranjang.php dan masukkan ke variabel $total_harga
  $pesanan = $_GET["pesanan"]; // ambil data pesanan dari keranjang.php dan masukkan ke variabel $pesanan

  // buat query insert data ke tabel pemesanan dalam variabel $ins
	$ins = "INSERT INTO pemesanan VALUES
          ('', '$nama', '$email', '$noHp' ,'$alamat', '$kecamatan', '$kota', '$kodepos', '$pesanan' ,$total_harga);
          ";
  
  mysqli_query($koneksi, $ins); // insert data ke tabel pemesanan

  session_start();
  // matikan dan hancurkan session untuk menghapus data-data yang ada di keranjang.php
  session_unset(); 
  session_destroy();

  echo "<script>alert('pemesanan berhasil');</script>"; // tampilkan popup pemesanan berhasil
  echo "<script>location='index.php'</script>"; // direct ke halaman index.php
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/pemesanan.css" />
<title>Form Pemesanan MarryYuk</title>
</head>
<body>
  <!-- Livechat -->
  <script type="text/javascript" src="js/livechat.js"></script> 

  <!-- Navbar Menu -->
  <?php include 'menu.php'; ?>
  
<h2>Form Pemesanan</h2>
<p>Isi biodata diri anda</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Biodata Pemesan</h3>
            <label for="fname"><i class="fa fa-user"></i> Nama Lengkap</label>
            <input type="text" id="fname" name="name" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email">
            <label for="email"><i class="fa fa-phone"></i> No. HP</label>
            <input type="text" id="email" name="phone" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Alamat</label>
            <input type="text" id="adr" name="address" required>
            <label for="kota"><i class="fa fa-institution"></i> Kota</label>
                <input type="text" id="kota" name="kota" required>
            <div class="row">
              <div class="col-50">
                <label for="kecamatan"><i class="fa fa-institution"></i> Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" required>
              </div>
              <div class="col-50">
                <label for="kodepos">Kode Pos</label>
                <input type="text" id="kodepos" name="kodepos" required>
              </div>
            </div>
            <h4>Pesanan : <?= $_GET["pesanan"]; ?></h4>
            <h2 style="margin-top: -70px;"><i class="fa fa-money"></i> Total Harga : <?= number_format($_GET["total_harga"]); ?></h2>
          </div>
        <input type="submit" name="checkout" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>
