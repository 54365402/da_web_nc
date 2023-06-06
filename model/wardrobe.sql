-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 11:59 AM
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
-- Table structure for table `wardrobe`
--

CREATE TABLE `wardrobe` (
  `id_wardrobe` int(11) NOT NULL,
  `so_tu` int(11) NOT NULL,
  `loai_tu` varchar(50) NOT NULL,
  `trang_thai` tinyint(1) DEFAULT 0,
  `id_hv` int(11) DEFAULT NULL,
  `time_start` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `ghi_chu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wardrobe`
--

INSERT INTO `wardrobe` (`id_wardrobe`, `so_tu`, `loai_tu`, `trang_thai`, `id_hv`, `time_start`, `time_end`, `ghi_chu`) VALUES
(5, 10, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(6, 11, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(7, 12, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(8, 13, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(9, 14, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(10, 15, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(11, 16, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(12, 17, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(13, 18, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(14, 19, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(15, 20, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(16, 21, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(17, 22, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(18, 23, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(19, 24, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(20, 25, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(21, 26, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(22, 27, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(23, 28, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(24, 29, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(25, 30, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(26, 31, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(27, 32, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(28, 33, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(29, 34, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(30, 35, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(31, 36, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(32, 37, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(33, 38, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(34, 39, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(35, 40, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(36, 41, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(37, 42, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(38, 43, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(39, 44, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(40, 45, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(41, 46, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(42, 47, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(43, 48, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(44, 49, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(45, 50, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(46, 51, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(47, 52, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(48, 53, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(49, 54, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(50, 55, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(51, 56, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(52, 57, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(53, 58, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(54, 59, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(55, 60, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(56, 61, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(57, 62, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(58, 63, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(59, 64, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(60, 65, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(61, 66, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(62, 67, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(63, 68, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(64, 69, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(65, 70, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(66, 71, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(67, 72, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(68, 73, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(69, 74, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(70, 75, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(71, 76, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(72, 77, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(73, 78, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(74, 79, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(75, 80, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(76, 81, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(77, 82, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(78, 83, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(79, 84, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(80, 85, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(81, 86, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(82, 87, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(83, 88, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(84, 89, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(85, 90, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(86, 91, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(87, 92, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(88, 93, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(89, 94, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(90, 95, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(91, 96, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(92, 97, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(93, 98, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(94, 99, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(95, 100, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(96, 101, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(97, 102, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(98, 103, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(99, 104, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(100, 105, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(101, 106, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(102, 107, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(103, 108, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(104, 109, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', ''),
(105, 110, 'Đơn', 0, 0, '0000-00-00', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wardrobe`
--
ALTER TABLE `wardrobe`
  ADD PRIMARY KEY (`id_wardrobe`),
  ADD KEY `id_hv` (`id_hv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wardrobe`
--
ALTER TABLE `wardrobe`
  MODIFY `id_wardrobe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
