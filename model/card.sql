SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `card` (`card_id`, `status`, `packages`, `quantity`, `types_room`, `time_start`, `time_end`, `id_hv`, `id_nv`, `time_private`, `total_money`) VALUES
( 1, 1, '2 tháng', 1, 'Gym', '2023-09-02', '2023-11-02', 1, 1, NULL, 100000),
( 2, 0, 'average', 10, 'Swimming', '2023-04-04', '2023-07-04', 2, 2, NULL, 200000),
( 3, 1, '1 năm', 40, 'Gym', '2022-02-05', '2024-04-05', 3, 3, 60, 1000000),
( 4, 1, 'average', 20, 'Boxing', '2023-02-05', '2024-04-05', 4, 4, NULL, 100000),
( 5, 1, 'advance', 16, 'Yoga', '2023-01-01', '2023-04-02', 5, 5, NULL, 300000),
( 6, 0, 'basic', 45, 'Yoga', '2023-02-12', '2023-10-12', 6, 6, NULL, 265000),
( 7, 1, 'advance', 10, 'Boxing', '2023-02-05', '2024-07-05', 7, 7, NULL, 500000),
( 8, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', 8, 8, NULL, 600000),
( 9, 1, 'average', 65, 'Swimming', '2022-02-05', '2023-04-05', 9, 3, NULL, 500000),
( 10, 0, '6 tháng', 3, 'Gym', '2023-04-19', '2023-10-12', 10, 2, NULL, 210000),
( 11, 0, 'average', 10, 'Yoga', '2023-01-06', '2023-02-12', 11, 9, NULL, 100000),
( 12, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', 12, 1, NULL, 600000),
( 13, 0, 'advance', 10, 'Yoga', '2022-04-21', '2023-04-21', 13, 10, NULL, 600000),
( 14, 1, 'basic', 23, 'Aerobic', '2023-04-04', '2023-05-04', 14, 12, NULL, 1200000),
( 15, 1, 'advance', 50, 'Boxing', '2022-04-03', '2023-07-03', 15, 11, NULL, 2400000),
( 16, 0, 'advance', 10, 'Swimming', '2022-04-04', '2023-07-04', 16, 7, NULL, 2030000),
( 17, 1, '1 năm', 40, 'Gym', '2023-04-05', '2024-04-05', 17, 14, 60, 100000),
( 18, 1, 'advance', 25, 'Aerobic', '2023-02-05', '2024-04-05', 18, 12, NULL, 1000000),
( 19, 1, 'advance', 35, 'Yoga', '2023-04-01', '2023-04-02', 19, 3, NULL, 3300000),
( 20, 0, 'basic', 45, 'Yoga', '2023-12-12', '2023-02-12', 20, 13, NULL, 450000),
( 21, 1, 'basic', 10, 'Aerobic', '2023-02-05', '2024-04-05', 21, 8, NULL, 500000),
( 22, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', 22, 2, NULL, 600000),
( 23, 1, 'average', 65, 'Swimming', '2023-02-05', '2024-04-05', 23, 1, NULL, 50000),
( 24, 0, '6 tháng', 3, 'Gym', '2022-08-19', '2023-02-12', 24, 3, NULL, 210000),
( 25, 0, 'average', 10, 'Yoga', '2023-04-21', '2023-07-21', 25, 4, NULL, 600000),
( 26, 1, 'basic', 23, 'Swimming', '2023-04-04', '2023-10-04', 26, 16, NULL, 1200000),
( 27, 1, 'basic', 50, 'Boxing', '2023-04-03', '2024-04-03', 27, 17, NULL, 2400000),
( 28, 1, '2 tháng', 1, 'Gym', '2023-09-02', '2023-11-02', 28, 12, NULL, 2005000),
( 29, 0, 'basic', 10, 'Aerobic', '2023-04-04', '2023-07-04', 29, 11, NULL, 2030000),
( 30, 1, 'basic', 10, 'Aerobic', '2023-02-05', '2024-04-05', 30, 10, NULL, 500000),
( 31, 0, '6 tháng', 12, 'Gym', '2023-04-05', '2023-10-05', 31, 6, NULL, 600000),
( 32, 1, '3 tháng', 43, 'Gym', '2023-04-15', '2023-07-15', 32, 2, NULL, 600000),
( 33, 0, '2 tháng', 645, 'Gym', '2023-02-05', '2024-04-05', '33', 1, NULL, 500000);

ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;