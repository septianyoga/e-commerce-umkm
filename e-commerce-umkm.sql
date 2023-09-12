-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 11:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce-umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` varchar(255) DEFAULT NULL,
  `status_cart` enum('Selesai','Belum Checkout','Checkout') NOT NULL DEFAULT 'Belum Checkout'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_produk`, `qty`, `id_user`, `id_order`, `status_cart`) VALUES
(1, 7, 1, 8, '20230815-71498633', 'Checkout'),
(2, 7, 1, 8, '20230815-739895375', 'Checkout'),
(3, 7, 1, 8, '20230815-1486192686', 'Checkout'),
(7, 3, 2, 7, '20230815-1947601027', 'Checkout'),
(9, 5, 2, 7, '20230815-1947601027', 'Checkout'),
(10, 2, 1, 7, '20230815-2111820128', 'Checkout'),
(11, 3, 1, 7, '20230815-2111820128', 'Checkout'),
(16, 2, 1, 7, '20230815-1516001967', 'Checkout'),
(17, 3, 1, 7, '20230815-1516001967', 'Checkout'),
(18, 2, 2, 7, '20230815-1044739056', 'Checkout'),
(19, 6, 2, 7, '20230815-4562121', 'Checkout'),
(20, 2, 1, 7, '20230816-1949800765', 'Checkout'),
(21, 3, 1, 7, '20230816-1949800765', 'Checkout'),
(22, 5, 2, 7, '20230816-1949800765', 'Checkout'),
(23, 2, 1, 7, '20230824-263311440', 'Checkout'),
(24, 3, 1, 7, '20230824-263311440', 'Checkout'),
(25, 2, 1, 7, '20230905-1997017982', 'Checkout'),
(26, 3, 1, 7, '20230905-1997017982', 'Checkout'),
(27, 3, 1, 7, '20230905-503413747', 'Checkout'),
(28, 5, 1, 7, '20230905-503413747', 'Checkout');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(255) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_pembayaran` int(11) NOT NULL,
  `kurir` varchar(30) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `resi` varchar(255) DEFAULT NULL,
  `tanggal_dikirim` date DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `va_number` varchar(255) DEFAULT NULL,
  `batas_transaksi` datetime DEFAULT NULL,
  `batas_waktu_pesan` datetime DEFAULT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `status_pesanan` enum('Menunggu Pembayaran','Dibatalkan','Pending','Expired','Selesai','Dikemas','Dikirim','Diterima') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `tanggal`, `total_pembayaran`, `kurir`, `ongkir`, `resi`, `tanggal_dikirim`, `metode_pembayaran`, `bank`, `va_number`, `batas_transaksi`, `batas_waktu_pesan`, `id_transaksi`, `status_pesanan`) VALUES
('20230815-1044739056', 7, '2023-08-15 15:27:52', 32000, 'OKE', 12000, NULL, NULL, 'bank_transfer', 'bca', '38972689811', '2023-08-16 22:31:13', '2023-08-16 22:27:52', '4dedd919-c314-4933-978c-b2f3ab020a77', 'Selesai'),
('20230815-1486192686', 8, '2023-08-15 07:17:30', 174000, 'OKE', 24000, NULL, NULL, 'bri_epay', NULL, NULL, '2023-08-15 16:17:43', NULL, '9b1674ad-0bc7-4075-893a-b4b8daac155f', 'Selesai'),
('20230815-1516001967', 7, '2023-08-15 15:17:03', 27000, 'OKE', 12000, NULL, NULL, 'qris', NULL, NULL, '2023-08-15 22:23:39', '2023-08-16 22:17:03', 'a549006f-982e-4cb4-8a8e-e62f301c57bc', 'Expired'),
('20230815-1947601027', 7, '2023-08-15 13:57:49', 46000, 'OKE', 12000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Expired'),
('20230815-2111820128', 7, '2023-08-15 14:10:32', 27000, 'OKE', 12000, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-15 21:45:32', NULL, 'Expired'),
('20230815-4562121', 7, '2023-08-15 15:32:14', 28000, 'OKE', 12000, NULL, NULL, 'bank_transfer', 'bri', '389721141962046410', '2023-08-15 22:33:27', '2023-08-16 22:32:14', '2e898d8f-f28b-4ae5-9f9a-eb6e7c82379c', 'Expired'),
('20230815-71498633', 8, '2023-08-15 06:34:07', 174000, 'OKE', 24000, NULL, NULL, 'bank_transfer', 'bca', '38972973951', '2023-08-16 13:34:17', NULL, 'c3c8afe2-43ca-4cea-b85a-7772acc0e67e', 'Dikemas'),
('20230815-739895375', 8, '2023-08-15 07:15:27', 174000, 'OKE', 24000, NULL, NULL, 'gopay', NULL, NULL, '2023-08-15 14:31:03', NULL, '68237999-daba-4136-b6ee-49f7b129123d', 'Selesai'),
('20230816-1949800765', 7, '2023-08-16 05:56:14', 54000, 'OKE', 15000, '123123123', NULL, 'bank_transfer', 'bca', '38972333829', '2023-08-17 12:57:37', '2023-08-17 12:56:14', 'a900ce06-4e9d-4d54-bdce-691a060a9227', 'Expired'),
('20230824-263311440', 7, '2023-08-24 02:26:19', 30000, 'OKE', 15000, '121212121212112', '2023-08-03', 'bank_transfer', 'bca', '38972815096', '2023-08-25 09:26:56', '2023-08-25 09:26:19', 'bda8d3e0-4ece-468e-ae77-f8a8af4c0e31', 'Expired'),
('20230905-1997017982', 7, '2023-09-04 22:56:21', 30000, 'OKE', 15000, '123321456654', '2023-09-04', 'bank_transfer', 'bca', '38972978119', '2023-09-06 05:58:19', '2023-09-06 05:56:21', '3ec48e34-2913-4506-b90d-6bc907d2bc51', 'Dikirim'),
('20230905-503413747', 7, '2023-09-04 23:01:47', 32000, 'OKE', 15000, '123123', '2023-09-08', 'bank_transfer', 'bca', '38972993324', '2023-09-06 06:02:02', '2023-09-06 06:01:47', '84913019-7ab0-4b44-9813-a5933f8f9fa4', 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` text NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(11) DEFAULT NULL,
  `status_produk` enum('Aktif','Non Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `deskripsi_produk`, `stok_produk`, `status_produk`) VALUES
(2, 'Kripik Pisang Sale', 10000, 200, '1690349384_5945d8743f34e61a7166.jpeg', 'Kripik Pisang Rasa Asli', 15, 'Non Aktif'),
(3, 'Kripik Pisang Goreng Kriuk', 5000, 150, '1690348405_a87f99c53a109b38ab87.jpg', 'Kripik Pisang Krispi', 5, 'Aktif'),
(5, 'Kripik Pisang Goreng', 12000, 200, '1690947391_8c756dcac0a16b97d0ba.webp', 'Kripik Pisang yang renyah dan krispi', 3, 'Aktif'),
(6, 'Kripik Pisang', 8000, 200, '1690947490_3521c84ea911727c1e66.jpg', 'Kripik Pisang yang renyah dan krispi', 20, 'Aktif'),
(7, 'Paket Reseller 20 pcs Kripik Pisang Sale', 150000, 1500, '1691936448_2f1091fb230f6dcf9ee7.jpeg', 'Paket Reseller murah dan mendapatkan potongan harga jika dibandingkan anda membelinya per PCS', NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `role` enum('Admin','Ketua','User','Reseller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `email`, `password`, `no_telp`, `alamat`, `kota`, `provinsi`, `id_kota`, `id_provinsi`, `role`) VALUES
(1, 'Penjual', 'admin', 'admin@gmail.com', 'password', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin'),
(2, 'coba', 'coba', 'coba@gmail.com', '123456', '89893843', 'Bekasi', NULL, NULL, NULL, NULL, ''),
(3, 'coba', 'admin', 'antono@gmail.com', '123123', '898923', 'Bekasi', NULL, NULL, NULL, NULL, 'Admin'),
(5, 'Yoga', 'yogs', 'septianyoga111@gmail.com', 'password', '08973343843933', 'Bekasi', 'Bekasi', 'Jawa Barat', 54, 9, 'User'),
(7, 'Pembeli', 'pembeli', 'pembeli@gmail.com', 'password', '0899893489384', 'jl raya cikamurang padaasih cibogo', 'Kabupaten Garut', 'Jawa Barat', 126, 9, 'User'),
(8, 'Susanti', 'reseller', 'reseller@gmail.com', 'password', '08953993894839', 'Jl. Raya Cikamurang Padaasih Cibogo', 'Kabupaten Bekasi', 'Jawa Barat', 54, 9, 'Reseller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_produk` (`id_produk`,`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
