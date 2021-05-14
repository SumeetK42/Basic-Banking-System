-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:01 PM
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
-- Database: `people`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sr` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sr`, `Name`, `Email`, `Balance`) VALUES
(1, 'Rakesh', 'rakesh23@gmail.com', 2700),
(2, 'Tarun', 'tarun25@gmail.com', 9000),
(3, 'Abdul', 'abdul30@gmail.com', 8000),
(4, 'Abhay', 'abhay89@gmail.com', 2000),
(5, 'Rajesh', 'rajesh42@gmail.com', 4520),
(6, 'Anjali', 'anjali12@gmail.com', 4900),
(7, 'Samat', 'samat20@gmail.com', 1000),
(8, 'Dinesh', 'dinesh345@gmail.com', 880),
(9, 'Prajwal', 'prajwal090@gmail.com', 12000),
(10, 'Hema', 'hema3@gmail.com', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
