-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 21, 2023 at 03:13 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_users`
--

CREATE TABLE `new_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_users`
--

INSERT INTO `new_users` (`id`, `name`, `email`, `password`) VALUES
(14, 'zouhair youssef', 'zouhairyoussef881@gmail.com', 'pogqob-hyJnu1-gepwuf'),
(15, 'ksk', 'niniisi100@gmail.com', 'oindiodnd'),
(16, 'simi', 'simoxrajawi10@gmail.com', 'nicRa5-pekvok-syhzet');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `card_number` int(16) NOT NULL,
  `card_type` varchar(10) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email`, `name`, `card_number`, `card_type`, `exp_date`, `cvv`) VALUES
(21, 'zohairzawza@gmail.com', 'ugugugu', 65656598, 'RuPay', '2023-03-23', '878787878'),
(22, 'zouhairyoussef881@gmail.com', 'zouhair', 89728171, 'MasterCard', '2023-03-24', '999191'),
(23, 'zouhairyoussef881@gmail.com', 'zouhair youssef', 482482, 'visa', '2023-03-17', '8991381'),
(24, 'razineaya8@gmail.com', 'AYA ', 49834, 'visa', '2023-03-09', '0'),
(25, 'othmanamir0722@gmail.com', 'othman amir ', 467, 'visa', '2023-03-19', '0'),
(26, 'othmanamir0722@gmail.com', 'othman amir ', 467, 'visa', '2023-03-19', '0'),
(27, 'othmanamir0722@gmail.com', 'othman amir ', 467, 'visa', '2023-03-19', '0'),
(28, 'othmanamir0722@gmail.com', 'othman amir ', 467, 'visa', '2023-03-19', '0'),
(29, 'zouhairyoussef881@gmail.com', 'drr', 40422, 'visa', '2023-03-22', '0'),
(30, 'zouhairyoussef881@gmail.com', 'zouhair youssef', 42398293, 'visa', '2023-03-18', '0'),
(31, 'zouhairyoussef881@gmail.com', 'zouhair youssef', 42398293, 'visa', '2023-03-18', '0'),
(32, 'zouhairyoussef881@gmail.com', 'zouhairyoussef§', 40162322, 'visa', '2045-04-20', '78294242794'),
(33, 'med.harik@gmail.com', 'med harik', 40234233, 'visa', '2023-03-22', '87841244'),
(34, 'simoxrajawi10@gmail.com', 'simo', 4131, 'visa', '2023-06-07', '2233');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `sport` varchar(255) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `date`, `time`, `sport`, `registration_time`) VALUES
(1, 'zouhair youssef', 'zouhairyoussef881@gmail.com', '2023-03-24', '11:20:00', 'fitness', '2023-03-12 21:18:00'),
(2, 'zouhair youssef', 'zouhairyoussef881@gmail.com', '2023-03-24', '11:20:00', 'fitness', '2023-03-12 21:23:06'),
(3, 'zouhair', 'zouhairyoussef881@gmail.com', '2023-03-22', '11:20:00', 'yoga', '2023-03-12 21:23:33'),
(4, 'youssef', 'zouhairyoussef881@gmail.com', '2023-03-15', '11:30:00', 'bodybuilding', '2023-03-14 12:13:40'),
(5, 'zouhairzr03', 'zohairzawza@gmail.com', '2023-03-15', '06:30:00', 'yoga', '2023-03-14 14:36:45'),
(6, 'salma youssef', 'youssefsalma881@gmail.com', '2023-03-15', '11:30:00', 'bodybuilding', '2023-03-14 17:13:10'),
(7, 'ebdkek', 'youssefsalma881@gmail.com', '2023-03-15', '11:22:00', 'other', '2023-03-14 17:53:19'),
(8, 'hash', 'zouhairyoussef881@gmail.com', '2023-03-17', '11:22:00', 'yoga', '2023-03-16 18:15:42'),
(9, 'Othman amir', 'othmanamir0722@gmail.com', '2023-03-17', '23:59:00', 'bodybuilding', '2023-03-17 17:38:20'),
(10, 'Othman amir', 'othmanamir0722@gmail.com', '2023-03-17', '23:59:00', 'bodybuilding', '2023-03-17 17:38:21'),
(11, 'Othman amir', 'othmanamir0722@gmail.com', '2023-03-17', '23:59:00', 'bodybuilding', '2023-03-17 17:38:29'),
(12, 'Othman amir', 'othmanamir0722@gmail.com', '2023-03-17', '23:59:00', 'bodybuilding', '2023-03-17 17:38:29'),
(13, 'Othman amir', 'othmanamir0722@gmail.com', '2023-03-17', '23:59:00', 'bodybuilding', '2023-03-17 17:38:31'),
(14, 'zouhair youssefair', 'zouhairyoussef881@gmail.com', '2033-03-12', '12:30:00', 'yoga', '2023-03-20 13:59:10'),
(15, 'med harik', 'med.harik@gmail.com', '2023-03-21', '12:30:00', 'bodybuilding', '2023-03-21 10:02:01'),
(16, 'simox', 'simoxrajawi10@gmail.com', '2023-06-22', '11:22:00', 'bodybuilding', '2023-06-21 15:04:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_users`
--
ALTER TABLE `new_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_users`
--
ALTER TABLE `new_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
