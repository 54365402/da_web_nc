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
(1, 1, '1', 1, 1, '0000-00-00', '0000-00-00', '2'),
(3, 2, '2', 2, 2, '0000-00-00', '0000-00-00', '2');

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
  MODIFY `id_wardrobe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
