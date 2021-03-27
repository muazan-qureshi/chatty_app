-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 07:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatty_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(11) NOT NULL,
  `ppost` varchar(1000) DEFAULT NULL,
  `ppostBY` int(11) DEFAULT NULL,
  `ppostDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `ppost`, `ppostBY`, `ppostDT`) VALUES
(1, 'Hello My name is Muhammad Ahmed Muazan and I m new to this chatty app and this is my first post on this app', 1, '2021-03-27 16:54:24'),
(2, 'Hello My name is AHmed and I m new to this chatty app and this is my first post on this app', 2, '2021-03-27 16:55:22'),
(3, 'Salam my name is ALi No one wellcome me', 3, '2021-03-27 17:31:21'),
(4, 'This is ali from karachi and fdorm adnsi s', 3, '2021-03-27 17:31:49'),
(5, 'lorem ipsum dolor sit amit constectur amit', 3, '2021-03-27 17:32:16'),
(6, 'Hello WOrld\r\n', 3, '2021-03-27 17:32:25'),
(7, 'Lets get started with this small chatty app', 3, '2021-03-27 17:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'muazan', 'muazan@yahoo.com', '12101'),
(2, 'ahmed', 'ahmed@yahoo.com', '12101'),
(3, 'ali', 'ali@yahoo.com', '12101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
