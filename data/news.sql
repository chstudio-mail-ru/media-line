-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:28 PM
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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `article`, `date_add`) VALUES
(1, 'Новость 1', 'Текст новости 1', '2020-12-14 17:31:54'),
(2, 'Новость 2', 'Текст новости 2', '2020-12-14 17:31:54'),
(3, 'Новость 3', 'Текст новости 3', '2020-12-14 17:31:54'),
(4, 'Новость 4', 'Текст новости 4', '2020-12-14 17:31:54'),
(5, 'Новость 5', 'Текст новости 5', '2020-12-14 17:31:54'),
(6, 'Новость 6', 'Текст новости 6', '2020-12-14 17:31:54'),
(7, 'Новость 7', 'Текст новости 7', '2020-12-14 17:31:54'),
(8, 'Новость 8', 'Текст новости 8', '2020-12-14 17:31:54'),
(9, 'Новость 9', 'Текст новости 9', '2020-12-14 17:31:54'),
(10, 'Новость 10', 'Текст новости 10', '2020-12-14 17:31:54'),
(11, 'Новость 11', 'Текст новости 11', '2020-12-14 17:31:54'),
(12, 'Новость 12', 'Текст новости 12', '2020-12-14 17:31:54'),
(13, 'Новость 13', 'Текст новости 13', '2020-12-14 17:31:54'),
(14, 'Новость 14', 'Текст новости 14', '2020-12-14 17:31:54'),
(15, 'Новость 15', 'Текст новости 15', '2020-12-14 17:31:54'),
(16, 'Новость 16', 'Текст новости 16', '2020-12-14 17:31:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
