-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 07:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(42) NOT NULL,
  `address` varchar(30) NOT NULL,
  `emailaddress` varchar(32) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `address`, `emailaddress`, `gender`) VALUES
(12, 'ram', '4641999a7679fcaef2df0e26d11e3c72', 'ktm', 'ram@gmail.com', 'male'),
(13, 'devenkan', '1d3693c74ae7957cdae160d16e02b60f', 'gaindakot', 'deven.kan90@gmail.com', 'male'),
(14, 'devenkanray', '1d3693c74ae7957cdae160d16e02b60f', 'gaindakot', 'ram@gmail.com', 'male'),
(15, 'roshan', 'd6dfb33a2052663df81c35e5496b3b1b', 'gaindakot', 'roshan@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(5) NOT NULL,
  `nameevent` varchar(15) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `organizer` varchar(30) NOT NULL,
  `aboutevent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `nameevent`, `venue`, `date`, `organizer`, `aboutevent`) VALUES
(32, 'football match', 'las vegas nevada', '2016-12-16', 'ahskw', 'friendly football match'),
(35, 'birthday', 'gaindakot', '2016-12-31', 'roshan', 'birthday party '),
(36, 'coldplayconcert', 'chitwan', '2016-12-31', 'deven ', 'band concert'),
(41, 'git workshop', 'lumbini ict college', '2016-12-09', 'lumbini ict college', 'knowing about git'),
(42, 'adhaksha', 'haja', '2016-12-07', 'devenkanray', 'sds'),
(43, 'jkdbs', 'weqm,fwbj,fwe', '2016-12-07', 'devenkanray', 'wdfewgthf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

CREATE TABLE `tbl` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(42) NOT NULL,
  `address` varchar(30) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl`
--

INSERT INTO `tbl` (`id`, `username`, `password`, `address`, `type`) VALUES
(1, 'deven', 'deven123', 'gaindakot', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl`
--
ALTER TABLE `tbl`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
