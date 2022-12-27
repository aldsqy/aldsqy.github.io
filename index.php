<?php 
session_start();
//koneksi ke database
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MarryYuk</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>

  <body>
    <audio autoplay="" loop="" src="lagu.mp3"></audio>
    <script type="text/javascript" src="js/livechat.js"></script>


    <!-- Navbar Menu -->
    <?php include 'menu.php'; ?>
    <!-- Navbar Menu -->

    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="video/nikahni.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Selamat Datang di MarryYUK</h3>
          <p>
            Kami menyediakan berbagai solusi untuk memenuhi kebutuhan pernikahanmu
          </p>
          <p>
            <a href="index.php#aboutus" class="tombol">Jelajahi Sekarang</a>
          </p>
        </div>
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>Tentang MarryYuk</h3>
            <p class="ringkasan">
              Terima kasih atas kunjungan anda di website kami, Sambutlah Kami
            </p>
            <div class="konten-isi">
                <p align="center">
                  MarryYuk merupakan sebuah jasa yang menyediakan segala kebutuhan untuk melangsungkan pernikahan. 
                  MarryYuk hadir bertujuan untuk mewujudkan pernikahan impian setiap calon pengantin dengan harapan pernikahan 
                  yang diimpikan oleh calon pengantin dapat terwujudkan sesuai dengan keinginannya. MarryYuk menyediakan berbagai 
                  segala kebutuhan pernikahan seperti sewa gedung, dekorasi, sewa baju resepsi, souvenir, layanan catering dan 
                  lain-lainnya. Namun, tidak hanya disitu saja, MaryyYuk juga memberikan harga yang jauh lebih murah dari tempat lain 
                  dan banyak memberikan penawaran khusus. Sehingga, para calon pengantin dapat memilih sesuai budget yang disiapkan
              </p>
            </div>
          </div>
        </section>
        <section class="services" id="support">
      <div class="cen">
        <div class="service">
        <i class="fa-solid fa-users"></i>
          <h2>Total Klien</h2>
          <p>Berpengalaman 5 Tahun dengan Lebih dari 100+ acara pernikahan bertema internasional dan adat daerah</p>
        </div>

        <div class="service">
        <i class="fa-solid fa-face-smile"></i>
          <h2>Bidang Kategori</h2>
          <p>Kami membantu memberikan pernikahan impian mereka dengan berbagai produk yang kami tawarkan</p>
        </div>

        <div class="service">
        <i class="fa-solid fa-money-bill-wave"></i>
          <h2>Harga Termurah</h2>
          <p> Kami menawarkan jasa kami dengan harga murah dibanding toko lain, dengan segala kebutuhan yang kami tawarkan.</p>
        </div>
      </div>
        </section>
        <!-- Cathering -->
        <section class="cathering" id="product">
          <center><h3>Produk Kami</h3></center>
          </p></center>
      <h4>Cathering</h4>
      <div class="wrapper">
          <div class="cards_wrap">
          <!-- Ambil data dari database -->
          <?php $cathering = $koneksi->query("SELECT * FROM produk WHERE kategori='cathering'"); ?>
          <?php while($cat = $cathering->fetch_assoc()){ ?>
            <div class="card_item">
              <div class="card_inner">
                <img src="<?= $cat["gambar"]; ?>">
                <div class="role_name"><?= $cat["nama"]; ?></div>
                <div class="real_name">Rp <?= number_format($cat["harga"]); ?> /200 pax</div>
                <a class="tombol-order" href="beli.php?id=<?= $cat["id"]; ?>">Order</a>
                <div class="button"><a href="#popup<?= $cat["id"]; ?>">Detail</a></div>
                <div id="popup<?= $cat["id"]; ?>">
                  <div class="window">
                    <a href="#close" class="close-button" title="Close">X</a>
                    <?= $cat["detail"]; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
        <!-- Sewa Gedung -->
    <section class="cathering" id="product2">
      <h4>Sewa Gedung</h4>
      <div class="wrapper">
        <div class="cards_wrap">
          <?php $gedung = $koneksi->query("SELECT * FROM produk WHERE kategori='gedung'"); ?>
          <?php while($ged = $gedung->fetch_assoc()){ ?>
            <div class="card_item">
              <div class="card_inner">
                <img src="<?= $ged["gambar"]; ?>">
                <div class="role_name"><?= $ged["nama"]; ?></div>
                <div class="real_name">Rp <?= number_format($ged["harga"]); ?></div>
                <div class="film"><?= $ged["detail"]; ?> </div>
                  <a class="tombol-order" href="beli.php?id=<?= $ged["id"]; ?>">Order</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- Souvenir -->
  <section class="cathering" id="product3">
    <h4>Souvenir</h4>
    <div class="wrapper">
      <div class="cards_wrap">
        <?php $souvenir = $koneksi->query("SELECT * FROM produk WHERE kategori='suvenir'"); ?>
        <?php while($sou = $souvenir->fetch_assoc()){ ?>
          <div class="card_item">
            <div class="card_inner">
              <img src="<?= $sou["gambar"]; ?>">
              <div class="role_name"><?= $sou["nama"]; ?></div>
              <div class="real_name">Rp.<?= number_format($sou["harga"]); ?> /100pcs</div>
              <div class="film"><?= $sou["detail"]; ?></div>
              <a class="tombol-order" href="beli.php?id=<?= $sou["id"];?>&jumlah=<script>quantity.value;<script/>">Order</a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div> 
    <!-- Sewa Baju -->
    <section class="cathering" id="product4">
      <h4>Sewa Baju</h4>
      <div class="wrapper1">
        <div class="cards_wrap1">
          <?php $bajubaju = $koneksi->query("SELECT * FROM produk WHERE kategori='baju'"); ?>
          <?php while($baju = $bajubaju->fetch_assoc()){ ?>
            <div class="card_item1">
              <div class="card_inner1">
                <img src="img/<?= $baju["gambar"]; ?>">
                <div class="role_name1"><?= $baju["nama"]; ?></div>
                <div class="real_name1">Rp.<?= number_format($baju["harga"]); ?> / Pasang</div>
                <div class="film1"><?= $baju["detail"]; ?></div>
                <a class="tombol-order1" href="beli.php?id=<?= $baju["id"]; ?>">Order</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>


<!-- Testimoni -->
<section class="cathering" id="testimoni-content">
<div class="testimonials12">
      <div class="inner12">
      <center><h3>Apa Kata Mereka</h3></center>

        <div class="row12">
          <div class="col12">
            <div class="testimonial12">
              <img src="img/p1.png" alt="">
              <div class="name12">Faishal Andus</div>
              <div class="stars12">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
              Bermodalkan rekomendasi dari temen kantor, akhirnya beraniin diri buat pake jasa weeding organizer ini. Awalnya ragu dan khawatir ditipu atau semacamnya, tapi ternyata memuaskan banget!
              </p>
            </div>
          </div>

          <div class="col12">
            <div class="testimonial12">
              <img src="img/p2.png" alt="">
              <div class="name12">Putri Santika</div>
              <div class="stars12">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
              Merchandise-nya lucu-lucu, packagingnya juga ngga kalah menarik. Dekorasi yang diminta juga sesuai ekspektasi bahkan lebih bagus hasilnya. Ini sih recommended banget bet banget sih!!
              </p>
            </div>
          </div>

          <div class="col12">
            <div class="testimonial12">
              <img src="img/p3.png" alt="">
              <div class="name12">Irfan Wahyu</div>
              <div class="stars12">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
              Makanan cathering-nya enak dan keliatan mewah, padahal harganya murah. Baju pengantinnya juga bagus-bagus, semua ukuran ada jadi ga perlu khawatir. Pokoknya recommended banget!
              </p>
            </div>
            
          </div>
          </div>
        </div>
      </div>
    
<!-- FAQ -->
      <section class="faq" id="faq-content">
      <center><h3>Frequently Asked Questions</h3></center>
<div class="faq-content">
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title">MarryYuk itu platform apa?</label>
    <div class="panel-content">MarryYuk merupakan sebuah jasa yang menyediakan segala kebutuhan untuk melangsungkan pernikahan. MarryYuk hadir bertujuan untuk mewujudkan pernikahan impian setiap calon pengantin dengan harapan pernikahan yang diimpikan oleh calon pengantin dapat terwujudkan sesuai dengan keinginannya. </div>
  </div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">Product apa saja yang ditawarkan di MarryYuk?</label>
    <div class="panel-content">Kami menghadirkan 4 category product yang sangat penting dalam pernikahan seperti chatering, sewa gedung, souvenir dan sewa baju</div>
  </div>
  
  <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title">Kenapa kami harus memilih MarryYUK?</label>
    <div class="panel-content">Karena di website kami menyediakan paket-paket pernikahan dengan harga murah.</div>
  </div>

  <div class="faq-question">
    <input id="q4" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q4" class="panel-title">Bagimana jika terjadi kesalahan saat melakukan pemesanan maupun pembayaran?</label>
    <div class="panel-content">Jika anda mengalami kesalahan saat melakukan pemesanan jangan khawatir, anda bisa langsung menghubungi kami melalui live chat atau Whatsapp.</a></div>
  </div>
</div>

<div class="faq-question">
    <input id="q5" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q5" class="panel-title">Kenapa paket pernikahan yang di sediakan dibandrol dengan harga murah ?</label>
    <div class="panel-content">Karena kami tidak ingin membebani klien kami dan ingin mewujudkan pernikahan impian untuk semua kalangan.</a></div>
  </div>
</div>
</main> 

  <footer class="footer" id="contactus">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Sitemap</h4>
  	 			<ul>
  	 				<li><a href="index.php#aboutus">Tentang Kami</a></li>
  	 				<li><a href="index.php#product">Produk Kami</a></li>
  	 				<li><a href="#testimoni-content">Testimoni</a></li>
  	 				<li><a href="#faq-content">FAQ</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Product</h4>
  	 			<ul>
  	 				<li><a href="index.php#product">Cathering</a></li>
  	 				<li><a href="index.php#product2">Sewa Gedung</a></li>
  	 				<li><a href="index.php#product3">Souvenir</a></li>
  	 				<li><a href="index.php#product4">Sewa Baju</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Kontak Kami</h4>
  	 			<ul>
  	 				<li><a href="#">Whatsapp</a></li>
  	 				<li><a href="#">Instagram</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Follow Kami</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


</body>
</html>
