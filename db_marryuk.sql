-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_marryuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no. telepon` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `pesanan` varchar(100) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `email`, `no. telepon`, `alamat`, `kecamatan`, `kota`, `kodepos`, `pesanan`, `total_harga`) VALUES
(1, 'Lionel Messi', 'angkaramessi@gmail.com', '089845601030', 'jl. doang jadian kaga', 'Situ Waringin', 'Nganjuk', '15640', 'Paket MIDDLE,Sky Garden,Scented Candle,Jawa', 203038000),
(2, 'Fioreza Radhin Naufal', 'fiorezarn@gmail.com', '085282810339', 'Cattleya Residence No 18, JL Anggrek, Benda Baru, ', 'eee', 'Tangerang Selatan', '15418', 'Paket STANDARD,Hotel Olive', 110820000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gambar`, `kategori`, `detail`) VALUES
(1, 'Paket STANDARD', 20000, 'https://i.ibb.co/FmKsxDW/Whats-App-Image-2022-11-12-at-6-33-08-PM.jpg', 'cathering', '<h1>Paket STANDARD (20k/porsi min.200 pax)</h1>\r\n<ol><li>Nasi Putih</li>\r\n<li>Soup Ayam Jagung</li>\r\n<li>Ayam Goreng Mentega</li>\r\n<li>Asinan</li>\r\n<li>Kerupuk Udang</li>\r\n<li>Aneka Puding</li>\r\n<li>Air Mineral</li>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br></ol>'),
(2, 'Paket MIDDLE', 25000, 'https://i.ibb.co/kDkyrfn/Whats-App-Image-2022-11-12-at-6-33-07-PM.jpg', 'cathering', '<h1>Paket MIDDLE (25k/porsi min.200 pax)</h1>\r\n                  <p><ol><li>Nasi Putih</li>\r\n                    <li>Soup Ayam Sosis</li>\r\n                    <li>Daging Teriyaki</li>\r\n                    <li>Cah Sayuran</li>\r\n                    <li>Kerupuk Udang</li>\r\n                    <li>Aneka Puding</li>\r\n                    <li>Aneka Buah Potong</li>\r\n                    <li>Air Mineral</li>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n</ol>\r\n               '),
(3, 'Paket HIGH', 28000, 'https://i.ibb.co/YbPYsFM/Whats-App-Image-2022-11-12-at-6-33-07-PM-1.jpg', 'cathering', '<h1>Paket HIGH (28k/porsi min.200 pax)</h1>\r\n                  <p><ol><li>Nasi Putih</li>\r\n                    <li>Soup Kimlo</li>\r\n                    <li>Ayam Lapis Keju</li>\r\n                     <li>Nasi Putih</li>\r\n  <li>Soup Kimlo</li>\r\n  <li>Ayam Lapis Keju</li>\r\n  <li>Rolade Daging</li>\r\n  <li>Selada Bangkok</li>\r\n  <li>Kerupuk Udang</li>\r\n  <li>Aneka Puding</li>\r\n  <li>Aneka Buah Potong</li>\r\n  <li>Air Mineral</li>\r\n  <li>Soft Drink</li>'),
(4, 'Paket DELUXE', 35000, 'https://i.ibb.co/pjv22wM/Whats-App-Image-2022-11-12-at-6-33-06-PM.jpg', 'cathering', '<h1>Paket DELUXE (35k/porsi min.200 pax)</h1>\r\n                  <p><ol><li>Nasi Putih</li>\r\n                    <li>Nasi Kebuli</li>\r\n                    <li>Bihun Goreng</li>\r\n                    <li>Soup Kimlo</li>\r\n                    <li>Ayam Bumbu Bali</li>\r\n                    <li>Kakap Asam Manis</li>\r\n                    <li>Selada Bangkok</li> \r\n                    <li>Kerupuk Udang</li>\r\n                    <li>Aneka Puding</li>\r\n                    <li>Aneka Buah Potong</li>\r\n                    <li>Air Mineral</li>\r\n                    <li>Soft Drink</li>\r\n                    <li>Es Buah</li>'),
(5, 'Sky Garden', 195000000, 'https://i.ibb.co/B6NGx7B/Whats-App-Image-2022-10-26-at-11-37-46-AM.jpg', 'gedung', '500-700 pax <br> Jl. Lkr. Luar Barat No.1, Rawa Buaya, Cengkareng, Jakarta Barat, 11740\n            Telepon: 08161872733'),
(6, 'Hotel Olive', 110800000, 'http://www.hoteloliveindonesia.com/temp/decoration/59.jpg', 'gedung', '200 pax <br>Jalan Imam Bonjol No.777, Panunggangan Barat, Kec. Cibodas, Kota Tangerang, Banten 15138'),
(7, 'Aryaduta Hotel', 107500000, 'https://images.bridestory.com/image/upload/v1501817546/assets/decor8_ydzyqw.jpg', 'gedung', '80 pax <br>Lippo Village, Jl. Boulevard Jend. Sudirman No.401, Bencongan, Kec. Klp. Dua, Kota Tangerang, Banten 15811'),
(8, 'Atria Serpong', 120500000, 'https://i.ibb.co/L1nsfXw/Whats-App-Image-2022-10-26-at-11-37-46-AM-1.jpg', 'gedung', '100 pax <br>Jl. Boulevard, CBD Gading Serpong Lot no. 5, Paramount Serpong, Tangerang, 15810 Serpong, Indonesia'),
(9, 'Kipas Tangan Kayu', 5000, 'https://i.ibb.co/H21nkYY/Whats-App-Image-2022-11-12-at-9-19-22-PM.jpg', 'suvenir', 'min.order 100 pcs'),
(10, 'Alat Makan Rustic', 10000, 'https://i.ibb.co/Dr6T5V4/Whats-App-Image-2022-11-12-at-9-19-25-PM.jpg', 'suvenir', 'min.order 100 pcs'),
(11, 'Scented Candle', 13000, 'https://i.ibb.co/fC9DT2j/Whats-App-Image-2022-11-12-at-9-19-24-PM.jpg', 'suvenir', 'min.order 100 pcs'),
(12, 'Gantungan', 20000, 'https://i.ibb.co/9Nx3w6t/Whats-App-Image-2022-11-12-at-9-19-23-PM.jpg', 'suvenir', 'min.order 100 pcs'),
(13, 'Jawa', 8000000, 'jawa.jpg', 'baju', 'include hiasan kepala'),
(14, 'Sumatera', 10000000, 'sumatera.jpg', 'baju', 'include hiasan kepala'),
(15, 'Kalimantan', 9000000, 'kalimantan.jpg', 'baju', 'include hiasan kepala'),
(16, 'Sulawesi', 8500000, 'sulawesi.jpg', 'baju', 'include hiasan kepala'),
(17, 'Papua', 11000000, 'papua.jpg', 'baju', 'include hiasan kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
