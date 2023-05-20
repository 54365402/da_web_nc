-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 06:28 AM
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
  `gioi_tinh` varchar(10) NOT NULL DEFAULT '0',
  `tuoi` int(11) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `cmnd` varchar(50) NOT NULL,
  `bien_xe` varchar(50) DEFAULT NULL,
  `diem_tich_luy` float NOT NULL,
  `chieu_cao` float NOT NULL,
  `can_nang` float NOT NULL,
  `phan_tram_mo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hoi_vien`
--

INSERT INTO `tbl_hoi_vien` (`id_hv`, `name_hv`, `ngay_sinh`, `gioi_tinh`, `tuoi`, `sdt`, `cmnd`, `bien_xe`, `diem_tich_luy`, `chieu_cao`, `can_nang`, `phan_tram_mo`) VALUES
(1, 'Nguyễn Văn Dick', '2023-08-10', 'Nam', 20, '45678610', '62763774', '3r3', 90, 1.78, 90, 10),
(2, 'Hạ Quang Dương', '2023-05-23', 'Nữ', 43, '11744671', '21243535', '4f7', 2, 1.76, 50, 4),
(3, 'Bùi Trường Kỳ', '2023-05-08', 'Nam', 34, '45464534', '45643255', '4g6', 5, 1.56, 70, 15),
(4, 'Nghị Quốc Hiền', '2023-09-10', 'nam', 20, '43446366', '45422566', 'r44', 10, 1.79, 100, 20),
(5, 'Nhữ Chế Phương', '2023-05-09', 'Nữ', 24, '10872306', '13301578', '99l0', 2, 1.6, 50, 10),
(6, 'Cấn Hữu Minh', '2023-06-06', 'Nam', 14, '15051489', '16926649', '18p0', 23, 1.8, 60, 3),
(7, 'Dã Bảo Hân', '2023-05-09', 'Nam', 24, '13074010', '16391644', '12f34', 21, 1.3, 100, 30),
(8, 'Hi Hồng Nga', '2023-05-24', 'Nữ', 12, '12009599', '16982899', '6y7', 13, 1.5, 45, 5),
(9, 'Đan Nhật Hà', '2023-05-18', 'Nữ', 56, '16283201', '16306895', '45gh5', 21, 2, 67, 45),
(10, 'Quang Ngọc Minh', '2023-05-03', 'Nam', 19, '18817927', '17542772', '34r5', 13, 1.9, 67, 7);

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
  MODIFY `id_hv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
