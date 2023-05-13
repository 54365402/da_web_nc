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
-- Table structure for table `tbl_nuoc_va_thuc_pham`
--

CREATE TABLE `tbl_nuoc_va_thuc_pham` (
  `id_nuoc_va_tp` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `loai_tp` varchar(50) NOT NULL,
  `gia_ban` float NOT NULL,
  `gia_nhap` float NOT NULL,
  `so_luong_nhap` int(11) NOT NULL,
  `so_luong_ton` int(11) NOT NULL,
  `nha_cung_cap` varchar(50) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ngay_het_han` date NOT NULL,
  `tong_tien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nuoc_va_thuc_pham`
--

INSERT INTO `tbl_nuoc_va_thuc_pham` (`id_nuoc_va_tp`, `name`, `loai_tp`, `gia_ban`, `gia_nhap`, `so_luong_nhap`, `so_luong_ton`, `nha_cung_cap`, `ngay_nhap`, `ngay_het_han`, `tong_tien`) VALUES
(1, 'Cocacola7<br>', 'Nước', 10000, 8000, 2000, 100, 'Cocacola', '0000-00-00', '0000-00-00', 1600000),
(121214, 'Cocacola1', 'Nước', 10000, 8000, 200, 100, 'Cocacola1', '2023-04-07', '2024-04-07', 1600000),
(121217, 'a', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121218, 'a', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121221, 'b', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121222, 'b', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121223, 'b', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121224, 'c', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121225, 'c', 'Nước<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121226, 'c', 'Nước<br>', 8000, 1000020, 1000, 100424, 'sad', '2023-12-11', '2024-12-11', 0),
(121235, 'aaa', 'Thực phẩm<br>', 8000, 10000, 100, 100, 'sad', '2023-12-11', '2024-12-11', 0),
(121312, '', 'Thực phẩm', 0, 0, 1000, 0, '', '0000-00-00', '0000-00-00', 0),
(121314, '121234', 'Thực phẩm', 100, 0, 1000, 0, '', '0000-00-00', '0000-00-00', 0),
(121316, '121235', 'Thực phẩm', 100, 100, 1000, 100, '', '0000-00-00', '0000-00-00', 0),
(121335, '', '', 0, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nuoc_va_thuc_pham`
--
ALTER TABLE `tbl_nuoc_va_thuc_pham`
  ADD PRIMARY KEY (`id_nuoc_va_tp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nuoc_va_thuc_pham`
--
ALTER TABLE `tbl_nuoc_va_thuc_pham`
  MODIFY `id_nuoc_va_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121344;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
