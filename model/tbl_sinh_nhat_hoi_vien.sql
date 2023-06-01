-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:05 PM
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
-- Table structure for table `tbl_sinh_nhat_hoi_vien`
--

CREATE TABLE `tbl_sinh_nhat_hoi_vien` (
  `id_hv` varchar(50) NOT NULL,
  `ten_hv` varchar(50) NOT NULL,
  `diem_tich_luy` float NOT NULL,
  `ngay_sinh` date NOT NULL,
  `id_gift` int(11) DEFAULT NULL,
  `trang_thai` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sinh_nhat_hoi_vien`
--

INSERT INTO `tbl_sinh_nhat_hoi_vien` (`id_hv`, `ten_hv`, `diem_tich_luy`, `ngay_sinh`, `id_gift`, `trang_thai`) VALUES
('1', '1', 1, '2023-05-23', 1, 1),
('7', '7', 7, '0000-00-00', NULL, 0),
('10', '10', 10, '2023-05-24', NULL, 0),
('11', '454', 1, '2023-05-24', NULL, 0),
('50', 'Kiên', 53434500, '2013-05-01', NULL, 0),
('0', 'kien', 1, '2023-05-25', NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
