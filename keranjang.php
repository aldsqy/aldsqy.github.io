<?php
// nyalakan session keranjang  
session_start();

include 'connect.php'; // sambungkan file connect.php untuk mengambil database

// Jika tidak ada session keranjang, maka munculkan pesan keranjang kosong, silakan belanja dulu
if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
	echo "<script>location='index.php#product';</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>keranjang belanja</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

<script type="text/javascript" src="js/livechat.js"></script>

<!-- Navbar Menu -->
<?php include 'menu.php'; ?>
<!-- Navbar Menu -->

<section class="konten">
	<div class="container">
		<h1 style="padding-top: 40px;">Keranjang Belanja</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Produk</th>
					<th>Kategori</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$nomor=1;
					$pesanan = array();
					$total_harga=0; 
				 ?>
				<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
				<!-- menampilkan produk yg sedang diperulangkan berdasarkan id_produk -->	
				<?php
				$ambil = $koneksi->query("SELECT * FROM produk
					WHERE id='$id_produk'");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah["harga"]*$jumlah;
				$total_harga+=$subharga;
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["nama"]; ?></td>
					<td><?php echo $pecah["kategori"]; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
					<td>
						<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a>
					</td>
				</tr>
				<?php
				array_push($pesanan, $pecah["nama"]);
				$nomor++; 
				?>
				<?php endforeach ?>
			</tbody>
		</table>
    <div class="container">
      <div class="row">
       <div class="col">
        <a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>
		<a href="formpemesanan.php?total_harga=<?= $total_harga; ?>&pesanan=<?= implode(",", $pesanan); ?>" class="btn btn-primary">Checkout</a>
      </div>
      <div class="col">
        <h4>Total Harga : Rp. <?= number_format($total_harga); ?></h4>
      </div>
    </div>

	</div>
</section>

</body>
</html>