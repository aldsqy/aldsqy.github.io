<?php  
session_start();
$id_produk = $_GET["id"];
// menghilangkan session keranjang, jika session dihilangkan maka produk yg ada di keranjang akan terhapus
unset($_SESSION["keranjang"][$id_produk]);

echo "<script>alert('produk dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>