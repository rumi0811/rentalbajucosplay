-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 11:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalbajucosplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Sekar Puspita Arum', 'sekar', '114148d50080f83b81f26ead2941b69f');

-- --------------------------------------------------------

--
-- Table structure for table `bajucosplay`
--

CREATE TABLE `bajucosplay` (
  `id_cosplay` int(11) NOT NULL,
  `baju_cosplay` varchar(255) NOT NULL,
  `ukbaju_cosplay` varchar(255) NOT NULL,
  `sepatu_cosplay` varchar(255) NOT NULL,
  `uksepatu_cosplay` int(11) NOT NULL,
  `status_cosplay` int(11) NOT NULL COMMENT '1 = tersedia\r\n2 = dirental'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bajucosplay`
--

INSERT INTO `bajucosplay` (`id_cosplay`, `baju_cosplay`, `ukbaju_cosplay`, `sepatu_cosplay`, `uksepatu_cosplay`, `status_cosplay`) VALUES
(11, 'Spiderman Woman', 'L', 'Boots', 39, 2),
(12, 'Thanos', 'XL', 'Boots', 43, 1),
(13, 'Captain America', 'L', 'Boots', 40, 1),
(14, 'Dr. Strange', 'L', 'Boots', 40, 2),
(15, 'Duyung', 'S', 'None', 0, 2),
(16, 'Princess Belle', 'S', 'Hells', 39, 1),
(18, 'Princess Jasmine', 'L', 'Flat Shoe', 39, 1),
(19, 'Princess Rapunzel', 'S', 'None', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `jk_pelanggan` varchar(10) NOT NULL,
  `hp_pelanggan` varchar(20) NOT NULL,
  `ktp_pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `jk_pelanggan`, `hp_pelanggan`, `ktp_pelanggan`) VALUES
(2, 'Sekar Puspita Arum', 'Komplek Kostrad', 'P', '087878802352', '31740548110113'),
(4, 'Suhendra Wijaya', 'Kp Nanggewer', 'L', '089566767001', '31798987878989'),
(5, 'Agrerogates Tambunan', 'Komplek Angkatan Laut', 'L', '081370305781', '31767897656267'),
(6, 'Hamdi Sholahudin', 'Bandung Jl. Patriot', 'L', '085224264858', '31209283193871'),
(7, 'Putri Syabandini', 'Ciputat Jakarta Selatan', 'L', '082249943983', '31278361787312'),
(8, 'Wulan Ramadhoni', 'Ciketing Udik', 'L', '08978855475', '32019674390123'),
(9, 'Shella Puspita Dewi', 'Komplek Angkatan Darat', 'L', '087878897656', '31287567887125'),
(10, 'Danu Acha WIjaya', 'Padurenan City', 'L', '021456723451', '312348933401294');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `karyawan_transaksi` int(11) NOT NULL,
  `pelanggan_transaksi` int(11) NOT NULL,
  `cosplay_transaksi` int(11) NOT NULL,
  `tgl_pinjam_transaksi` date NOT NULL,
  `tgl_kembali_transaksi` date NOT NULL,
  `harga_transaksi` int(11) NOT NULL,
  `denda_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `totaldenda_transaksi` int(11) NOT NULL,
  `status_transaksi` int(11) NOT NULL,
  `tgl_dikembali_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `karyawan_transaksi`, `pelanggan_transaksi`, `cosplay_transaksi`, `tgl_pinjam_transaksi`, `tgl_kembali_transaksi`, `harga_transaksi`, `denda_transaksi`, `tgl_transaksi`, `totaldenda_transaksi`, `status_transaksi`, `tgl_dikembali_transaksi`) VALUES
(2, 1, 2, 9, '2023-05-12', '2023-05-19', 50000, 10000, '2023-05-30', 30000, 1, '2023-05-22'),
(3, 2, 3, 11, '2023-05-25', '2023-05-27', 200000, 5000, '2023-05-30', 0, 0, '0000-00-00'),
(4, 2, 5, 18, '2023-05-27', '2023-05-31', 350000, 10000, '2023-05-30', 100000, 1, '2023-06-10'),
(7, 2, 7, 19, '2023-05-04', '2023-05-11', 200000, 10000, '2023-05-30', 340000, 1, '2023-06-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bajucosplay`
--
ALTER TABLE `bajucosplay`
  ADD PRIMARY KEY (`id_cosplay`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bajucosplay`
--
ALTER TABLE `bajucosplay`
  MODIFY `id_cosplay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
