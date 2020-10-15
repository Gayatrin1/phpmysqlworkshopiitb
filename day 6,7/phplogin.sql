-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 03:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `total obtained` int(11) NOT NULL,
  `total marks` int(11) NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `name`, `username`, `password`, `php`, `mysql`, `html`, `total obtained`, `total marks`, `percent`) VALUES
(23, 'adminpage', 'adminpage', 'c8753c5cceaa44b9efdffeffecaadfae', 0, 0, 0, 0, 0, 0),
(24, 'gayatri', 'gayatrin', 'ba2b2cf04d9846c8a468e6b46678c3fd', 99, 89, 95, 283, 100, 94.3333),
(25, 'isha', 'ishap', 'ee280d755afa2b13df74eb28c2a8ba8c', 88, 77, 88, 253, 100, 84.3333),
(26, 'tomcy', 'tomcyt', 'c4ff19df5e481127f43aca9998e7cb44', 44, 55, 44, 143, 100, 47.6667),
(27, 'shreyas', 'shreyasj', '99be170e89f4941e3e225c2d25d131d2', 89, 78, 88, 255, 100, 85),
(29, 'shalak', 'shalakk', '3fb60c19e070937c115c1011d662c255', 99, 98, 97, 294, 100, 98),
(30, 'aayush', 'aayushk', '648800728edbcf97e8a7c576c9850333', 44, 55, 44, 143, 100, 47.6667);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
