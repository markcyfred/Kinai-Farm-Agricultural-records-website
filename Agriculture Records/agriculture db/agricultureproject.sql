-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agricultureproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(38) DEFAULT NULL,
  `description` varchar(38) DEFAULT NULL,
  `image` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `farmer` varchar(30) DEFAULT NULL,
  `email` varchar(38) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `farmer`, `email`, `phone`, `message`) VALUES
(1, 'mark', 'mark1kinai1@gmail.com', 111893789, 'loving your work'),
(4, 'joseph', 'joseph@gmail.com', 111893789, 'can you teach me on pest control'),
(5, 'paul', 'paul@gmail.com', 111893789, 'what can i do to finish weeds fast'),
(6, 'fred', 'mark1knai1@gmail.com', 111893789, 'which is the best crop to grow'),
(7, 'brian', 'brian@gmail.com', 111893789, 'which are the tallest trees'),
(8, 'mark', 'mark@gmail.com', 723559794, 'best'),
(9, 'mark', 'brian@gmail.com', 723559794, 'best\r\n'),
(10, 'Dan', 'dan@gmail.com', 2147483647, 'Help me on vegitable farming');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 111893789, 'mark1kinai1@gmail.com', 'admin', 'mark@cyfred'),
(9, 'Brian', 111345678, 'brian@gmail.com', 'farmer', 'mark@cyfred'),
(10, 'fred', 711998076, 'fred@gmail.com', 'farmer', 'mark@cyfred'),
(11, 'Gladys', 111893789, 'gladys@gmail.com', 'farmer', 'mark@cyfred'),
(12, 'mark', 111893789, 'mark1kinai1@gmail.com', 'farmer', 'mark@cyfred'),
(13, 'Dan', 111893789, 'dan@gmail.com', 'farmer', 'mark@cyfred');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
