-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 07:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `park` varchar(255) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `lat` varchar(55) NOT NULL,
  `lon` varchar(55) NOT NULL,
  `admin` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `stat` int(5) DEFAULT NULL,
  `slots` int(15) DEFAULT NULL,
  `book` int(15) DEFAULT NULL,
  `feed` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `park`, `location`, `lat`, `lon`, `admin`, `rate`, `stat`, `slots`, `book`, `feed`) VALUES
('king', 'king123', 'king@gmail.com', 'demo1', 'indore', '22.82455', '75.84968', 'admin1', '15', 0, 4, 0, 0),
('admin', 'admin123', 'admin@gmail.com', 'demo2', 'indore', '22.82477', '75.84625', 'admin2', '50', 0, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo1`
--

CREATE TABLE `demo1` (
  `id` int(20) NOT NULL,
  `slot` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `In_time` datetime(6) DEFAULT NULL,
  `exit_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo1`
--

INSERT INTO `demo1` (`id`, `slot`, `status`, `user`, `In_time`, `exit_time`) VALUES
(1, 'A', 'available', NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'B', 'available', NULL, NULL, NULL),
(3, 'C', 'available', NULL, NULL, NULL),
(4, 'D', 'available', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `demo2`
--

CREATE TABLE `demo2` (
  `id` int(20) NOT NULL,
  `slot` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `In_time` datetime(6) DEFAULT NULL,
  `exit_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo2`
--

INSERT INTO `demo2` (`id`, `slot`, `status`, `user`, `In_time`, `exit_time`) VALUES
(1, 'A', 'available', NULL, NULL, NULL),
(2, 'B', 'available', NULL, NULL, NULL),
(3, 'C', 'available', NULL, NULL, NULL),
(4, 'D', 'available', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `park` int(10) DEFAULT NULL,
  `tbook` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `password`, `park`, `tbook`) VALUES
(0, 'king', '1234', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parkingbook`
--

CREATE TABLE `parkingbook` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `car_number` varchar(20) NOT NULL,
  `entry` varchar(20) NOT NULL,
  `exittime` varchar(20) NOT NULL,
  `slots` varchar(20) NOT NULL,
  `rates` varchar(20) NOT NULL,
  `parking` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `car` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `number`, `email`, `password`, `car`) VALUES
(5, 'Aman chaurasia', '8251950123', 'chauasiaaman457@gmail.com', '123456', NULL),
(6, 'Satyendra Shivhare', '9685864898', 'satyendra456@gmail.com', '121212', NULL),
(7, 'AYUSH ', '9770591108', 'SELFIEAYU11@GMAIL.COM', '123123', NULL),
(8, 'malviyachetan02@gmail.com', '09926194221', 'malviyachetan02@gmail.com', '1234', NULL),
(9, 'AB', '1323', 'DEV@GMAIL.COM', '1234', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo1`
--
ALTER TABLE `demo1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo2`
--
ALTER TABLE `demo2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo1`
--
ALTER TABLE `demo1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `demo2`
--
ALTER TABLE `demo2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
