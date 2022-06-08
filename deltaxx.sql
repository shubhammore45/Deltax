-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Jun 07, 2022 at 09:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deltaxx`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist`, `dob`, `bio`) VALUES
(1, 'Russ Abbot', '2017-06-15', 'He first came to public notice during the 1970s as the singer and drummer with British comedy showband the Black Abbots'),
(2, 'Damon Albarn', '1994-07-07', 'English musician who found fame as the front man for the rock band Blur and as the main creative force behind the pop group'),
(3, 'William de Alburwyke', '1998-01-07', 'He was an English medieval singer, college fellow, and university chancellor.');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `cover`, `song`, `artist`, `date`, `rate`, `email`) VALUES
(1, 'image/light.jpg', 'I see the Light', 'R. Jojenan', '2019-03-13', 0, ''),
(2, 'image/loveyourself.jpg', 'Love yourself', 'Justine Biber ', '2020-01-23', 0, ''),
(3, 'image/motive.jpg', 'Motive', 'Ariana grande', '2021-07-20', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
