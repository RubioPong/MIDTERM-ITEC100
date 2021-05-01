-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 06:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awit`
--

-- --------------------------------------------------------

--
-- Table structure for table `awitise`
--

CREATE TABLE `awitise` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awitise`
--

INSERT INTO `awitise` (`user`, `pass`) VALUES
('admin', 'Admin123'),
('pong', 'Pong123!@#'),
('inchoker69', 'Pong123@'),
('lazada', 'Lazada1@'),
('nike', 'Nike123!'),
('Fuma', 'Fuma123!');

-- --------------------------------------------------------

--
-- Table structure for table `keycode`
--

CREATE TABLE `keycode` (
  `id` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `vcode` int(6) NOT NULL,
  `Created` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keycode`
--

INSERT INTO `keycode` (`id`, `user`, `pass`, `vcode`, `Created`) VALUES
(27, '', '', 0, '2021-03-23 02:36:05.137439'),
(28, 'pong', 'Pong123!@#', 829802, '2021-03-23 02:38:52.132871'),
(29, 'pong', 'Pong123!@#', 297933, '2021-03-23 02:44:34.002380'),
(30, 'pong', 'Pong123!@#', 400059, '2021-03-23 02:52:18.550473'),
(31, 'admin', 'Admin123', 155099, '2021-03-23 02:57:19.383996'),
(32, 'admin', 'Admin123', 913268, '2021-03-23 02:59:20.980511'),
(33, 'pong', 'Pong123!@#', 370032, '2021-03-23 03:04:54.465586'),
(34, 'lazada', 'Lazada1@', 980801, '2021-03-23 03:10:50.188794'),
(35, 'lazada', 'Lazada1@', 792353, '2021-03-23 03:53:05.968100'),
(36, 'nike', 'Nike123!', 381953, '2021-03-23 04:13:57.643873'),
(37, 'pong', 'Pong123!@#', 884795, '2021-03-23 04:26:31.382476'),
(39, 'pong', 'Pong123!@#', 650342, '2021-03-23 04:44:23.886440'),
(40, 'admin', 'Admin123', 619505, '2021-03-23 05:46:26.687586'),
(41, 'pong', 'Pong123!@#', 343640, '2021-03-23 05:48:11.500993'),
(42, 'Fuma', 'Fuma123!', 442886, '2021-03-23 05:49:11.762781');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keycode`
--
ALTER TABLE `keycode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keycode`
--
ALTER TABLE `keycode`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
