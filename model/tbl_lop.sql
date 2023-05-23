-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2023 lúc 12:50 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanwebnc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lop`
--

CREATE TABLE `tbl_lop` (
  `id_lop` int(50) NOT NULL,
  `id_nv` int(50) NOT NULL,
  `typres_room` varchar(50) NOT NULL,
  `ten_lop` varchar(50) NOT NULL,
  `packages` varchar(50) DEFAULT NULL,
  `types_room` varchar(50) NOT NULL,
  `thoi_luong` int(50) NOT NULL,
  `ngay_hoat_dong` varchar(50) DEFAULT NULL,
  `so_luong_hv` int(11) DEFAULT NULL,
  `time_start` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `doanh_thu` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lop`
--

INSERT INTO `tbl_lop` (`id_lop`, `id_nv`, `typres_room`, `ten_lop`, `packages`, `types_room`, `thoi_luong`, `ngay_hoat_dong`, `so_luong_hv`, `time_start`, `time_end`, `doanh_thu`) VALUES
(1, 1, 'Gym', 'Gym đi là vạm vỡ', NULL, 'Gym', 10, NULL, NULL, '0000-00-00', '0000-00-00', 250000),
(2, 1, 'Gym', 'Gym đi là vạm vỡ', NULL, 'Gym', 10, NULL, NULL, '2023-05-11', '2023-10-11', 250000),
(3, 3, 'Swimming', 'Swimming tận chân trời', '3', 'Swimming', 3, '3', 3, NULL, NULL, 3),
(4, 3, 'Aerobic', 'Aerobic nơi tình yêu bắt đầu', '3', '', 3, '3', 3, NULL, NULL, 3),
(5, 2, 'Spa', 'Spa quên lối về ', '2 tháng', '', 10, 't2,t3', 40, NULL, NULL, 25000),
(6, 1, 'Spa', 'Spa quên lối về ', '2 tháng', '', 10, 't2,t3', 40, NULL, NULL, 3555);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  ADD PRIMARY KEY (`id_lop`),
  ADD KEY `id_nv` (`id_nv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  MODIFY `id_lop` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8890;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
