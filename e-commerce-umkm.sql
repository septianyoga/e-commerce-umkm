-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 03:55 AM
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
(4, 6, 2, 5, '20230809-1051203686', 'Checkout'),
(5, 2, 2, 7, '20230809-1028265371', 'Checkout'),
(6, 3, 1, 7, '20230809-1028265371', 'Checkout'),
(7, 5, 1, 5, '20230809-1051203686', 'Checkout'),
(8, 6, 1, 7, '20230809-1139131663', 'Checkout'),
(9, 5, 4, 7, '20230809-1139131663', 'Checkout'),
(10, 3, 2, 5, '20230809-495626288', 'Checkout'),
(11, 2, 2, 5, '20230809-495626288', 'Checkout'),
(12, 3, 1, 7, '20230809-1139131663', 'Checkout'),
(13, 5, 1, 5, '20230809-495626288', 'Checkout'),
(14, 6, 1, 5, '20230809-495626288', 'Checkout'),
(15, 2, 1, 7, '20230809-1680571396', 'Checkout'),
(16, 3, 1, 7, '20230809-1680571396', 'Checkout'),
(17, 5, 1, 5, '20230809-1235409167', 'Checkout'),
(18, 2, 1, 5, '20230809-1235409167', 'Checkout'),
(19, 2, 1, 7, '20230809-661323430', 'Checkout'),
(20, 5, 1, 7, '20230809-661323430', 'Checkout'),
(21, 2, 1, 7, '20230813-328413012', 'Checkout'),
(22, 3, 2, 7, '20230813-328413012', 'Checkout'),
(23, 6, 2, 7, '20230813-1317622129', 'Checkout'),
(24, 3, 3, 7, '20230813-34640303', 'Checkout'),
(25, 2, 1, 7, '20230813-1781591137', 'Checkout'),
(26, 3, 1, 7, '20230813-1781591137', 'Checkout'),
(27, 3, 1, 7, '20230813-2094989884', 'Checkout'),
(28, 6, 1, 7, '20230813-2094989884', 'Checkout'),
(29, 2, 3, 7, '20230813-1805086620', 'Checkout'),
(30, 3, 1, 7, '20230813-1805086620', 'Checkout'),
(31, 3, 3, 7, '20230813-708646998', 'Checkout'),
(34, 2, 1, 7, '20230813-834840644', 'Checkout'),
(35, 2, 2, 7, '20230813-556551588', 'Checkout'),
(36, 2, 2, 7, '20230813-22542977', 'Checkout'),
(37, 3, 1, 7, '20230813-1573359710', 'Checkout'),
(38, 5, 1, 7, '20230813-1573359710', 'Checkout'),
(39, 2, 2, 7, '20230813-1585996172', 'Checkout'),
(40, 3, 1, 7, '20230813-236268444', 'Checkout'),
(41, 5, 1, 7, '20230813-236268444', 'Checkout'),
(45, 3, 1, 7, '20230814-397506936', 'Checkout'),
(46, 5, 1, 7, '20230814-397506936', 'Checkout'),
(47, 2, 2, 7, '20230814-1755951160', 'Checkout');

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
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `va_number` varchar(255) DEFAULT NULL,
  `batas_transaksi` datetime DEFAULT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `status_pesanan` enum('Menunggu Pembayaran','Dibatalkan','Pending','Expired','Selesai','Dikemas','Dikirim','Diterima') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `tanggal`, `total_pembayaran`, `kurir`, `ongkir`, `resi`, `metode_pembayaran`, `bank`, `va_number`, `batas_transaksi`, `id_transaksi`, `status_pesanan`) VALUES
('20230809-1028265371', 7, '2023-08-09 14:37:12', 40000, 'OKE', 15000, NULL, NULL, NULL, NULL, NULL, NULL, 'Menunggu Pembayaran'),
('20230809-1051203686', 5, '2023-08-09 14:40:40', 40000, 'OKE', 12000, NULL, 'qris', NULL, NULL, '2023-08-09 21:45:16', 'b8a8ed18-f1ac-4a44-801a-fd71686eec97', 'Selesai'),
('20230809-1139131663', 7, '2023-08-09 14:57:08', 76000, 'OKE', 15000, NULL, NULL, NULL, NULL, NULL, NULL, 'Menunggu Pembayaran'),
('20230809-1235409167', 5, '2023-08-09 15:49:30', 34000, 'OKE', 12000, NULL, 'qris', NULL, NULL, '2023-08-09 22:43:46', '96353ca5-25d6-4759-a08a-387b11db848f', 'Expired'),
('20230809-1680571396', 7, '2023-08-09 15:06:11', 30000, 'OKE', 15000, NULL, 'gopay', NULL, NULL, '2023-08-09 22:16:38', '032e9afb-a6a4-43c7-93d6-9dc082c3fe44', 'Selesai'),
('20230809-495626288', 5, '2023-08-09 15:22:21', 62000, 'OKE', 12000, NULL, 'qris', NULL, NULL, '2023-08-09 22:14:04', '7ea51e9b-9a7d-4d43-bb9a-75e95386db7f', 'Expired'),
('20230809-661323430', 7, '2023-08-09 15:51:29', 37000, 'OKE', 15000, NULL, 'bank_transfer', 'bca', '38972035296', '2023-08-10 22:49:47', '30e0a89e-3fad-4a1b-85e4-cfa7f0783211', 'Selesai'),
('20230813-1317622129', 7, '2023-08-13 07:18:17', 28000, 'OKE', 12000, NULL, 'gopay', NULL, NULL, '2023-08-13 14:32:18', '10a571ff-2c5b-4d1d-b28b-7b149288eae7', 'Selesai'),
('20230813-1573359710', 7, '2023-08-13 08:12:47', 29000, 'OKE', 12000, NULL, 'alfamart', NULL, NULL, '2023-08-14 15:12:22', 'c4daf88a-0634-4dc2-a732-1efcdcc4e4c0', 'Selesai'),
('20230813-1585996172', 7, '2023-08-13 08:13:57', 32000, 'OKE', 12000, NULL, 'bri_epay', NULL, NULL, '2023-08-13 17:13:47', 'fb8deb97-20f6-4263-8838-4c65768bdd13', 'Selesai'),
('20230813-1781591137', 7, '2023-08-13 07:24:11', 27000, 'OKE', 12000, NULL, 'bank_transfer', 'bri', '389729078256722121', '2023-08-14 14:23:43', 'ea3c9abd-921e-4eb7-922c-5a41f1111ed6', 'Selesai'),
('20230813-1805086620', 7, '2023-08-13 07:25:44', 47000, 'OKE', 12000, NULL, 'shopeepay', NULL, NULL, '2023-08-13 14:30:35', '2941f7b4-92b1-47ce-91a1-58ebb7a275d7', 'Selesai'),
('20230813-2094989884', 7, '2023-08-13 07:24:54', 25000, 'OKE', 12000, NULL, 'gopay', NULL, NULL, '2023-08-13 14:39:43', '3da7b0c6-581a-4cf1-8e8f-b0415de395e5', 'Selesai'),
('20230813-2117104757', 7, '2023-08-13 07:40:05', 22000, 'OKE', 12000, NULL, NULL, NULL, NULL, NULL, NULL, 'Menunggu Pembayaran'),
('20230813-22542977', 7, '2023-08-13 08:11:01', 22000, 'OKE', 12000, NULL, 'shopeepay', NULL, NULL, '2023-08-13 15:15:53', '5839c9d5-098d-4596-8549-361284ff0db6', 'Selesai'),
('20230813-236268444', 7, '2023-08-14 12:17:38', 29000, 'OKE', 12000, NULL, 'alfamart', NULL, NULL, '2023-08-14 15:19:49', '8b2c4d09-8a7d-4b95-8039-5de8d33cbeff', 'Dikemas'),
('20230813-328413012', 7, '2023-08-13 07:15:55', 32000, 'OKE', 12000, NULL, 'bank_transfer', 'bca', '38972730647', '2023-08-14 14:12:06', 'f494995f-f5fb-4e2f-ad0b-ed7be1a6e5eb', 'Selesai'),
('20230813-34640303', 7, '2023-08-13 07:22:37', 27000, 'OKE', 12000, NULL, 'shopeepay', NULL, NULL, '2023-08-13 14:24:08', 'bb8349d9-befe-40c6-a50e-dc755f60ecdf', 'Selesai'),
('20230813-556551588', 7, '2023-08-13 08:07:22', 32000, 'OKE', 12000, NULL, 'cstore', NULL, NULL, '2023-08-14 15:05:06', '4c0eec00-c8f5-45ac-9b59-1f9d1163bac1', 'Selesai'),
('20230813-708646998', 7, '2023-08-13 07:30:14', 27000, 'OKE', 12000, '112223333444444', 'cstore', NULL, NULL, '2023-08-14 14:27:59', '3a697c8f-54ee-4736-8374-321680bfcadc', 'Dikirim'),
('20230813-834840644', 7, '2023-08-14 13:10:26', 22000, 'OKE', 12000, NULL, 'bri_epay', NULL, NULL, '2023-08-13 16:40:31', 'd0c5bb49-f854-47b9-a088-1afa457aa1a6', 'Dikemas'),
('20230814-1755951160', 7, '2023-08-14 13:01:29', 32000, 'OKE', 12000, '11223344', 'bank_transfer', 'bca', '38972946351', '2023-08-15 11:08:17', '365fcf4d-521e-454f-8cf0-e297a170547a', 'Dikirim'),
('20230814-397506936', 7, '2023-08-14 04:18:02', 29000, 'OKE', 12000, NULL, 'qris', NULL, NULL, '2023-08-14 11:17:57', '785e8268-a30b-4694-ba29-f204d09069d5', 'Expired');

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
(2, 'Kripik Pisang Sale', 10000, 200, '1690349384_5945d8743f34e61a7166.jpeg', 'Kripik Pisang Rasa Asli', 20, 'Non Aktif'),
(3, 'Kripik Pisang Goreng Kriuk', 5000, 150, '1690348405_a87f99c53a109b38ab87.jpg', 'Kripik Pisang Krispi', 10, 'Aktif'),
(5, 'Kripik Pisang Goreng', 12000, 200, '1690947391_8c756dcac0a16b97d0ba.webp', 'Kripik Pisang yang renyah dan krispi', 20, 'Aktif'),
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
(7, 'Pembeli', 'pembeli', 'pembeli@gmail.com', 'password', '0899893489384', 'jl raya cikamurang padaasih cibogo', 'Kabupaten Bekasi', 'Jawa Barat', 54, 9, 'User'),
(8, 'Susanti', 'reseller', 'reseller@gmail.com', 'password', '08953993894839', 'Jl. Raya Cikamurang Padaasih Cibogo', 'Kabupaten Subang', 'Jawa Barat', 428, 9, 'Reseller');

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
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
