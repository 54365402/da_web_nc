-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2023 lúc 07:44 AM
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

INSERT INTO `tbl_lop` (`id_lop`, `id_nv`, `typres_room`, `ten_lop`, `packages`, `thoi_luong`, `ngay_hoat_dong`, `so_luong_hv`, `time_start`, `time_end`, `doanh_thu`) VALUES
(0, 4, 'Boxing', 'Boxing oneshot', '2 tháng', 10, 'all', 40, NULL, NULL, 200000),
(1, 1, 'Gym', 'Gym đi là vạm vỡ', '1 tháng', 10, 't2,t4,t6', 40, '0000-00-00', '0000-00-00', 250000),
(2, 1, 'Gym', 'Gym đi là vạm vỡ', '1 tháng', 10, 't3,t5,t7', 40, '2023-05-11', '2023-10-11', 250000),
(3, 3, 'Swimming', 'Swimming tận chân trời', '3', 3, 't2,t4,t6', 3, NULL, NULL, 35000),
(4, 3, 'Aerobic', 'Aerobic nơi tình yêu bắt đầu', '3', 3, 't3,t5,t7', 3, NULL, NULL, 30000),
(5, 2, 'Yoga', 'Yoga xập xình', '2 tháng', 10, 't2,t3', 40, NULL, NULL, 25000),
(6, 1, 'Yoga', 'Yoga tịnh như nước', '2 tháng', 10, 't2,t3', 40, NULL, NULL, 3555),
(7, 4, 'Boxing', 'Boxing cứng cỏi', '2 tháng', 10, 'all', 40, NULL, NULL, 200000),
(8, 6, 'Aerobic', 'Aerobic nhịp điệu', 'bacsic', 10, 'all', 50, '2023-05-11', '2023-05-31', 500000),
(9, 5, 'Yoga', 'Yoga lười biếng', 'bacsic', 20, 't2,t4,t6', 30, NULL, NULL, 20000),
(10, 4, 'Gym', 'Gym thoát ế', '6 tháng', 3, 'all', 100, NULL, NULL, 80000);

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
  MODIFY `id_lop` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8893;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
