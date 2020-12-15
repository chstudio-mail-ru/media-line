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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `date_add`) VALUES
(1, 0, 'Общество', '2020-12-14 17:07:48'),
(2, 1, 'Городская жизнь', '2020-12-14 17:07:48'),
(3, 1, 'Выборы', '2020-12-14 17:09:22'),
(4, 2, 'День города', '2020-12-14 17:09:22'),
(5, 4, 'Салюты', '2020-12-14 17:10:50'),
(6, 2, 'Детская площадка\r\n', '2020-12-14 17:12:33'),
(7, 6, '0-3 года', '2020-12-14 17:12:33'),
(8, 6, '3-7 года', '2020-12-14 17:14:09'),
(9, 1, 'Спорт', '2020-12-14 17:14:09'),
(10, 9, 'Зимний спорт', '2020-12-14 17:15:09'),
(11, 9, 'Летний спорт', '2020-12-14 17:15:09'),
(12, 10, 'Фигурное катание', '2020-12-14 17:16:24'),
(13, 10, 'Саннный спорт', '2020-12-14 17:16:24'),
(14, 12, 'Мужчины', '2020-12-14 17:17:43'),
(15, 12, 'Женщины', '2020-12-14 17:17:43'),
(16, 12, 'Пары', '2020-12-14 17:18:21'),
(17, 14, 'Произвольная программа', '2020-12-14 17:20:36'),
(18, 14, 'Показательные выступления', '2020-12-14 17:20:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
