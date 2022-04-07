-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2022 at 11:59 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaurasiya_ji`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`id`, `name`, `email`, `pass`) VALUES
(1, 'admin', 'admin@login.com', '0e7517141fb53f21ee439b355b5a1d0a'),
(2, 'Akshat_Chaurasiya', 'akshat@gmail.com', '637534835cb265c5e844f6d2e76a79b0'),
(4, 'Deepanshu Kasera', 'skracora@gmail.com', '27b907d471377a2b76af60bedc287880'),
(5, 'Gust', 'gust@gust.com', 'e95f5029eb4baf57264e785f2ed79dbf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_form`
--
ALTER TABLE `login_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
