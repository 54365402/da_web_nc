-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 11:10 AM
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
-- Table structure for table `tbl_hoi_vien`
--

CREATE TABLE `tbl_hoi_vien` (
  `id_hv` int(11) NOT NULL,
  `name_hv` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL DEFAULT 0,
  `tuoi` int(11) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `cmnd` varchar(50) NOT NULL,
  `bien_xe` varchar(50) DEFAULT NULL,
  `diem_tich_luy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hoi_vien`
--

INSERT INTO `tbl_hoi_vien` (`id_hv`, `name_hv`, `ngay_sinh`, `gioi_tinh`, `tuoi`, `sdt`, `cmnd`, `bien_xe`, `diem_tich_luy`) VALUES
(1, 'mèo', '2023-05-01', 0, 2, '0192328', '24242342', 'f56e6', 2),
(2, 'dog', '2023-05-16', 0, 2, '0192773', '24242342', 'f56e6', 3),
(3, 'chim', '2023-05-24', 0, 12, '12345', '54321', '36', 43),
(4, 'cu', '2023-05-26', 0, 9, '678', '9876', '89j', 45),
(5, 'moi', '2023-05-08', 0, 12, '21212', '342424', 'r34', 4),
(6, 'vượn', '2023-05-17', 0, 12, '545', '5765654', '54', 777),
(10, 'my', '2023-05-04', 0, 32, '23243', '435643', '43', 43),
(17, 'bướm', '2023-05-04', 0, 32, '434', '54545', 'vr4', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hoi_vien`
--
ALTER TABLE `tbl_hoi_vien`
  ADD PRIMARY KEY (`id_hv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hoi_vien`
--
ALTER TABLE `tbl_hoi_vien`
  MODIFY `id_hv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
