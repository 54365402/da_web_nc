-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanwebnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dung_cu_tap`
--

CREATE TABLE `tbl_dung_cu_tap` (
  `id_may` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `nha_cung_cap` varchar(50) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `gia_nhap` float NOT NULL,
  `bao_tri` date NOT NULL,
  `bao_hanh` date NOT NULL,
  `chi_phi_bao_tri` float NOT NULL,
  `ghi_chu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dung_cu_tap`
--

INSERT INTO `tbl_dung_cu_tap` (`id_may`, `ten`, `so_luong`, `nha_cung_cap`, `ngay_nhap`, `gia_nhap`, `bao_tri`, `bao_hanh`, `chi_phi_bao_tri`, `ghi_chu`) VALUES
(1, '1', 1, '1', '0000-00-00', 1, '0000-00-00', '0000-00-00', 1, '1'),
(3, '3', 3, '3', '0000-00-00', 3, '0000-00-00', '0000-00-00', 2023, '3'),
(5, '1', 1, '1', '0000-00-00', 3, '0000-00-00', '0000-00-00', 3, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dung_cu_tap`
--
ALTER TABLE `tbl_dung_cu_tap`
  ADD PRIMARY KEY (`id_may`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dung_cu_tap`
--
ALTER TABLE `tbl_dung_cu_tap`
  MODIFY `id_may` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
