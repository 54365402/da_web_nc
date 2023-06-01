-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 04:22 PM
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
-- Table structure for table `tbl_qua_tang`
--

CREATE TABLE `tbl_qua_tang` (
  `id_gift` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `diem` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_qua_tang`
--

INSERT INTO `tbl_qua_tang` (`id_gift`, `name`, `diem`, `so_luong`, `image`) VALUES
(15, '2', 5000, 100, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/book.jpg'),
(16, '123', 13, 123, '../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/book.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_qua_tang`
--
ALTER TABLE `tbl_qua_tang`
  ADD PRIMARY KEY (`id_gift`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_qua_tang`
--
ALTER TABLE `tbl_qua_tang`
  MODIFY `id_gift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
