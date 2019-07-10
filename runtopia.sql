-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 04:09 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `runtopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_accounts`
--

CREATE TABLE `customer_accounts` (
  `customerID` int(100) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registrationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_accounts`
--

INSERT INTO `customer_accounts` (`customerID`, `firstName`, `lastName`, `email`, `registrationDate`, `phone`, `username`, `hashed_password`) VALUES
(2, 'Kathryn', 'Baynes', 'ktsidders@me.com', '2018-11-16 15:37:35', '9105207288', 'K@T1e', '$2y$10$EobZ2BJfgndX5N3d28LRK.TiRWlWRlpdUFqFhXZpY.L5yCy2JGx7S'),
(3, 'Max', 'Baynes', 'max@email.com', '2018-11-16 15:38:29', '336-797-1592', 'M@x1Mus', '$2y$10$dxjh.tI3hHGgoVM0peT4GOcLWqsNDpojznA9abdfXKDiUZtp5G3za'),
(5, 'Jacob', 'Baynes', 'Jabay87@gmail.com', '2018-12-03 22:53:41', '3366136162', 'J@cOb', '$2y$10$HTZmpw8NvC9ccwG6XQ/5WOcD1xrA4Ns/hWwgiiT2vNBIkeLoxg7MS'),
(6, 'Jacob', 'Baynes', 'Jabay87@gmail.com', '2019-02-18 18:59:13', '3366136162', '', '$2y$10$KYGiC/ebvcdyUGeckf4Bu.rRr.iUneg95WN4DTgwixckKNvNJub2m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_accounts`
--
ALTER TABLE `customer_accounts`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_accounts`
--
ALTER TABLE `customer_accounts`
  MODIFY `customerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
