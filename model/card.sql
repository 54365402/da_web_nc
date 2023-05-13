-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2023 lúc 11:14 AM
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
-- Cấu trúc bảng cho bảng `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `packages` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `types_room` varchar(50) DEFAULT NULL,
  `time_start` date DEFAULT NULL,
  `time_end` date DEFAULT NULL,
  `id_hv` varchar(50) DEFAULT NULL,
  `id_nv` varchar(50) DEFAULT NULL,
  `time_private` float DEFAULT NULL,
  `total_money` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `card`
--

INSERT INTO `card` (`card_id`, `status`, `packages`, `quantity`, `types_room`, `time_start`, `time_end`, `id_hv`, `id_nv`, `time_private`, `total_money`) VALUES
(1, 1, '2 tháng', 1, 'Gym', '2023-09-02', '2023-11-02', NULL, NULL, NULL, 20000),
(2, 0, '3 tháng', 10, 'Swimming', '2023-04-04', '2023-07-04', NULL, NULL, NULL, 20000),
(3, 1, '1 năm', 40, 'Gym', '2023-04-05', '2024-04-05', NULL, NULL, 60, 100000),
(4, 1, '3 tháng', NULL, 'Dance', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 10000),
(5, 1, '2 tiếng', NULL, 'Spa', '2023-04-01', '2023-04-02', NULL, NULL, NULL, 30000),
(6, 0, '2 tháng', 45, 'Spa', '2023-12-12', '0000-00-00', NULL, NULL, NULL, 65000),
(7, 1, '1 năm', 10, 'Dance', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 500000),
(8, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', NULL, NULL, NULL, 60000),
(9, 1, '12 tiếng', 65, 'Swimming', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 5000),
(10, 0, '6 tháng', 3, 'Gym', '2023-04-19', NULL, NULL, NULL, NULL, 21000),
(12, 0, '1 năm', 10, 'Spa', '2023-04-06', NULL, NULL, NULL, NULL, 10000),
(13, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', NULL, NULL, NULL, 60000),
(14, 0, '3 tháng', 10, 'Spa', '2023-04-21', '2023-07-21', NULL, NULL, NULL, 60000),
(15, 1, '6 tháng', 23, 'Swimming', '2023-04-04', '2023-10-04', NULL, NULL, NULL, 120000),
(16, 1, '1 năm', 50, 'Dance', '2023-04-03', '2024-04-03', NULL, NULL, NULL, 240000),
(18, 0, '3 tháng', 10, 'Swimming', '2023-04-04', '2023-07-04', NULL, NULL, NULL, 203000),
(19, 1, '1 năm', 40, 'Gym', '2023-04-05', '2024-04-05', NULL, NULL, 60, 10000),
(20, 1, '3 tháng', NULL, 'Dance', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 100000),
(21, 1, '2 tiếng', NULL, 'Spa', '2023-04-01', '2023-04-02', NULL, NULL, NULL, 330000),
(22, 0, '2 tháng', 45, 'Spa', '2023-12-12', '0000-00-00', NULL, NULL, NULL, 45000),
(23, 1, '1 năm', 10, 'Dance', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 50000),
(24, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', NULL, NULL, NULL, 60000),
(25, 1, '12 tiếng', 65, 'Swimming', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 5000),
(26, 0, '6 tháng', 3, 'Gym', '2023-04-19', NULL, NULL, NULL, NULL, 21000),
(30, 0, '3 tháng', 10, 'Spa', '2023-04-21', '2023-07-21', NULL, NULL, NULL, 60000),
(31, 1, '6 tháng', 23, 'Swimming', '2023-04-04', '2023-10-04', NULL, NULL, NULL, 120000),
(32, 1, '1 năm', 50, 'Dance', '2023-04-03', '2024-04-03', NULL, NULL, NULL, 240000),
(33, 1, '2 tháng', 1, 'Gym', '2023-09-02', '2023-11-02', NULL, NULL, NULL, 200500),
(34, 0, '3 tháng', 10, 'Swimming', '2023-04-04', '2023-07-04', NULL, NULL, NULL, 203000),
(35, 1, '1 năm', 10, 'Dance', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 50000),
(36, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', NULL, NULL, NULL, 60000),
(39, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', NULL, NULL, NULL, 60000),
(40, 0, '2 tháng', 645, '546', '0000-00-00', '0000-00-00', '1', NULL, NULL, 50000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `id_hv` (`id_hv`,`id_nv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
