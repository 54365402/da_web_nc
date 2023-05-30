-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 04:35 PM
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
  `diem_tich_luy` float NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hoi_vien`
--

INSERT INTO `tbl_hoi_vien` (`id_hv`, `name_hv`, `ngay_sinh`, `gioi_tinh`, `tuoi`, `sdt`, `cmnd`, `bien_xe`, `diem_tich_luy`, `gmail`) VALUES
(1, '1', '0000-00-00', 1, 1, '1', '1', '1', 1, '1'),
(2, '2', '0000-00-00', 2, 2, '2', '2', '2', 2, '2'),
(3, '3', '2023-05-24', 0, 3, '3', '3', '3', 3, ''),
(4, '4', '2023-05-03', 0, 4, '4', '4', '4', 4, ''),
(5, '5', '2023-05-02', 0, 5, '5', '5', '5', 5, ''),
(6, '6', '2023-05-05', 0, 6, '6', '6', '6', 6, ''),
(7, '7', '0000-00-00', 1, 7, '7', '7', '7', 7, '7@gmail.com'),
(10, '10', '2023-05-24', 0, 10, '10', '101', '010', 10, '10'),
(11, '454', '2023-05-24', 0, 1, '1', '1', '1', 1, '1'),
(50, 'Kiên', '2013-05-01', 1, 23, '0836759850', '124354345', '3543434', 53434500, 'phamkien5402@gmail.com'),
(51, 'kien', '2023-05-25', 0, 1, '1', '11', '1', 1, '');

--
-- Triggers `tbl_hoi_vien`
--
DELIMITER $$
CREATE TRIGGER `hoi_vien_add` BEFORE INSERT ON `tbl_hoi_vien` FOR EACH ROW INSERT INTO tbl_sinh_nhat_hoi_vien SET tbl_sinh_nhat_hoi_vien.id_hv=NEW.id_hv, tbl_sinh_nhat_hoi_vien.ten_hv=NEW.name_hv,
tbl_sinh_nhat_hoi_vien.ngay_sinh=NEW.ngay_sinh,
tbl_sinh_nhat_hoi_vien.diem_tich_luy=NEW.diem_tich_luy
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_sua_hoi_vien` BEFORE UPDATE ON `tbl_hoi_vien` FOR EACH ROW UPDATE tbl_sinh_nhat_hoi_vien SET 			
    tbl_sinh_nhat_hoi_vien.id_hv=tbl_hoi_vien.id_hv,
    tbl_sinh_nhat_hoi_vien.ten_hv = tbl_hoi_vien.name_hv,
    tbl_sinh_nhat_hoi_vien.diem_tich_luy = tbl_hoi_vien.diem_tich_luy,
    tbl_sinh_nhat_hoi_vien.ngay_sinh=tbl_hoi_vien.ngay_sinh
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_xoa_hoi_vien` BEFORE DELETE ON `tbl_hoi_vien` FOR EACH ROW DELETE FROM tbl_sinh_nhat_hoi_vien WHERE tbl_sinh_nhat_hoi_vien.id_hv = tbl_hoi_vien.id_hv
$$
DELIMITER ;

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
  MODIFY `id_hv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
