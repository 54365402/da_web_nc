CREATE TABLE `card` (
  `card_id` varchar(50) NOT NULL,
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
) 

INSERT INTO `card` (`card_id`, `status`, `packages`, `quantity`, `types_room`, `time_start`, `time_end`, `id_hv`, `id_nv`, `time_private`, `total_money`) VALUES
(1, 1, '2 tháng', 1, 'Gym', '2023-09-02', '2023-11-02', 1, NULL, NULL, 20000),
(2, 0, '3 tháng', 10, 'Swimming', '2023-04-04', '2023-07-04', 2, NULL, NULL, 20000),
(3, 1, '1 năm', 40, 'Gym', '2023-04-05', '2024-04-05', 3, NULL, 60, 100000),
(4, 1, '3 tháng', NULL, 'Dance', '0000-00-00', '0000-00-00', 4, NULL, NULL, 10000),
(5, 1, '2 tiếng', NULL, 'Spa', '2023-04-01', '2023-04-02', 5, NULL, NULL, 30000),
(6, 0, '2 tháng', 45, 'Spa', '2023-12-12', '0000-00-00', 6, NULL, NULL, 65000),
(7, 1, '1 năm', 10, 'Dance', '0000-00-00', '0000-00-00', 7, NULL, NULL, 500000),
(8, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', 8, NULL, NULL, 60000),
(9, 1, '12 tiếng', 65, 'Swimming', '0000-00-00', '0000-00-00', 9, NULL, NULL, 5000),
(10, 0, '6 tháng', 3, 'Gym', '2023-04-19', NULL, 10, NULL, NULL, 21000),
(12, 0, '1 năm', 10, 'Spa', '2023-04-06', NULL, 11, NULL, NULL, 10000),
(13, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', 12, NULL, NULL, 60000),
(14, 0, '3 tháng', 10, 'Spa', '2023-04-21', '2023-07-21', 13, NULL, NULL, 60000),
(15, 1, '6 tháng', 23, 'Swimming', '2023-04-04', '2023-10-04', 14, NULL, NULL, 120000),
(16, 1, '1 năm', 50, 'Dance', '2023-04-03', '2024-04-03', 15, NULL, NULL, 240000),
(18, 0, '3 tháng', 10, 'Swimming', '2023-04-04', '2023-07-04', 16, NULL, NULL, 203000),
(19, 1, '1 năm', 40, 'Gym', '2023-04-05', '2024-04-05', 17, NULL, 60, 10000),
(20, 1, '3 tháng', NULL, 'Dance', '0000-00-00', '0000-00-00', 18, NULL, NULL, 100000),
(21, 1, '2 tiếng', NULL, 'Spa', '2023-04-01', '2023-04-02', 19, NULL, NULL, 330000),
(22, 0, '2 tháng', 45, 'Spa', '2023-12-12', '0000-00-00', 20, NULL, NULL, 45000),
(23, 1, '1 năm', 10, 'Dance', '0000-00-00', '0000-00-00', 21, NULL, NULL, 50000),
(24, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', 22, NULL, NULL, 60000),
(25, 1, '12 tiếng', 65, 'Swimming', '0000-00-00', '0000-00-00', 23, NULL, NULL, 5000),
(26, 0, '6 tháng', 3, 'Gym', '2023-04-19', NULL, 24, NULL, NULL, 21000),
(30, 0, '3 tháng', 10, 'Spa', '2023-04-21', '2023-07-21', 25, NULL, NULL, 60000),
(31, 1, '6 tháng', 23, 'Swimming', '2023-04-04', '2023-10-04', 26, NULL, NULL, 120000),
(32, 1, '1 năm', 50, 'Dance', '2023-04-03', '2024-04-03', 27, NULL, NULL, 240000),
(33, 1, '2 tháng', 1, 'Gym', '2023-09-02', '2023-11-02', 28, NULL, NULL, 200500),
(34, 0, '3 tháng', 10, 'Swimming', '2023-04-04', '2023-07-04', 29, NULL, NULL, 203000),
(35, 1, '1 năm', 10, 'Dance', '0000-00-00', '0000-00-00', 30, NULL, NULL, 50000),
(36, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', 31, NULL, NULL, 60000),
(39, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', 32, NULL, NULL, 60000),
(40, 0, '2 tháng', 645, '546', '0000-00-00', '0000-00-00', '33', NULL, NULL, 50000);

