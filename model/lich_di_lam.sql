-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 07:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `lich_di_lam`
--

CREATE TABLE `lich_di_lam` (
  `id` int(30) NOT NULL,
  `lop` text NOT NULL,
  `nhan_vien` text NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lich_di_lam`
--

INSERT INTO `lich_di_lam` (`id`, `lop`, `nhan_vien`, `ngay_bat_dau`, `ngay_ket_thuc`) VALUES
(38, 'Gym đi là vạm vỡ', 'kok', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Gym đi là vạm vỡ', 'tien', '2023-05-08 00:36:00', '2023-05-29 00:36:00'),
(40, 'Gym đi là vạm vỡ', 'pop', '2023-05-01 00:38:00', '2023-05-16 00:38:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lich_di_lam`
--
ALTER TABLE `lich_di_lam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lich_di_lam`
--
ALTER TABLE `lich_di_lam`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
