-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medialine`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `news_id`, `category_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 2),
(4, 3, 2),
(5, 4, 3),
(6, 5, 4),
(7, 6, 4),
(8, 6, 5),
(9, 7, 5),
(10, 8, 6),
(11, 8, 9),
(12, 9, 10),
(13, 10, 11),
(14, 10, 12),
(15, 11, 11),
(16, 12, 12),
(17, 13, 11),
(18, 14, 13),
(19, 14, 13),
(20, 15, 14),
(21, 16, 15),
(22, 16, 17),
(23, 16, 18),
(24, 16, 3),
(25, 16, 2),
(26, 20, 16),
(27, 1, 15),
(28, 2, 15),
(29, 4, 15),
(30, 5, 15),
(31, 6, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
