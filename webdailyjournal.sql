-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 07:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Butterfly Head', 'greatness happens when you\'re focused on your flight path.', 'butterfly_head.jpg', '2024-12-06 21:44:59', 'admin'),
(2, 'im in love with my future', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'inlove.jpg', '2024-12-06 23:11:30', 'admin'),
(3, 'DONT DIE WONDERING', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'dontdie.jpg', '2024-12-06 23:23:02', 'admin'),
(4, 'IF NOT U, THEN WHO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'if.jpg', '2024-12-06 23:25:27', 'admin'),
(5, 'BURNED CAR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'burnedcar.jpg', '2024-12-06 23:26:13', 'admin'),
(6, 'SAVE ME', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'saveme.jpg', '2024-12-06 23:26:38', 'admin'),
(7, 'CAR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '20241216115407.jpg', '2024-12-16 11:54:07', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(20) NOT NULL,
  `judul` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Basketball Ring', 'mathias-reding-NRX0VIQKMSI-unsplash.jpg', '2025-01-10 18:50:31', 'admin'),
(2, 'Sport', 'atul-pandey-TFQxG7quwto-unsplash.jpg', '2025-01-10 18:53:53', 'admin'),
(3, 'Porsche', '1168.jpg', '2025-01-10 19:38:42', 'admin'),
(4, 'stormtrooper', '20250110195040.jpg', '2025-01-10 19:50:40', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'svckliens', 'e10adc3949ba59abbe56e057f20f883e', ''),
(7, 'marcel', 'e10adc3949ba59abbe56e057f20f883e', ''),
(9, 'abin', 'e10adc3949ba59abbe56e057f20f883e', '6781639fcab1e_20250110195040.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
