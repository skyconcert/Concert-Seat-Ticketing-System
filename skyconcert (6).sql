-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 09:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyconcert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `userlevel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `phone`, `userlevel`) VALUES
(1, 'Nurul Alieyah Binti Azam', '123', '0136248447', 'Admin'),
(2, 'Ku Nur Hidayah Binti Ku Ahmad Romzi', '123', '012-3324431', 'Staff'),
(3, 'Nuradlin Irdina', 'adlin123', '0127829821', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `aid` int(12) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`aid`, `aname`, `company`, `phone`, `address`) VALUES
(1, 'Dato Siti Nurhaliza', 'EM Record', '019-2902210', 'Kuala Lumpur'),
(2, 'Faizal Tahir', 'SME Record', '019-2904000', 'Kuala Lumpur'),
(3, 'Alieyah', 'Alieyah SDN BHD', '013-6248446', 'Selangor'),
(4, 'Nur Ain', 'Ain Trading', '013-6928412', 'Bukit Kapar'),
(5, 'Aina Abdul', 'MSG SDN BHD', '019-2902562', 'Kuala Lumpur ');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(12) NOT NULL,
  `date` date NOT NULL,
  `cuid` int(12) NOT NULL,
  `aid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `date`, `cuid`, `aid`) VALUES
(1, '2019-12-12', 1, NULL),
(2, '2019-12-12', 2, NULL),
(3, '2019-12-12', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `coid` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`coid`, `name`, `date`, `start_time`, `end_time`) VALUES
(1, 'Hello Zen', '2019-12-18', '00:13:00', '01:00:00'),
(2, 'Gegar Vaganza', '2019-12-31', '21:00:00', '00:00:00'),
(3, 'Mentor Milenial', '2020-01-23', '17:00:00', '22:00:00'),
(4, 'BTS', '2020-04-16', '01:00:00', '12:00:00'),
(5, 'Black Pink', '1998-12-22', '00:00:00', '04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `concert_artist`
--

CREATE TABLE `concert_artist` (
  `coid` int(12) NOT NULL,
  `aid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concert_artist`
--

INSERT INTO `concert_artist` (`coid`, `aid`) VALUES
(3, 1),
(3, 2),
(3, 5),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cuid` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cuid`, `name`, `birthdate`, `address`, `phone`, `email`) VALUES
(1, 'Nurul Alieyah Binti Azam', '1997-12-12', 'Kapar', '013-6248446', 'nurulalieyah20@gmail.com'),
(2, 'Muhamad Iqmal', '1997-12-02', 'Bukit Kapar', '012-3557853', 'aqblur@gmailcom'),
(3, 'Nur Ain Binti', '1998-12-11', 'Selangor', '01333971542', 'nurainain34@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(12) NOT NULL,
  `bid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `bid`) VALUES
(5, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_no` varchar(4) NOT NULL,
  `row_num` varchar(3) NOT NULL,
  `category` varchar(25) NOT NULL,
  `price_seat` double(8,2) NOT NULL,
  `entrance_hall` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_no`, `row_num`, `category`, `price_seat`, `entrance_hall`) VALUES
('B1', '1', 'BACK', 860.00, 'E1'),
('B10', '5', 'BACK', 860.00, 'E2'),
('B2', '2', 'BACK', 860.00, 'E1'),
('B3', '1', 'BACK', 860.00, 'E1'),
('B4', '2', 'BACK', 860.00, 'E2'),
('B5', '5', 'BACK', 860.00, 'E1'),
('B6', '5', 'BACK', 860.00, 'E1'),
('B7', '5', 'BACK', 860.00, 'E1'),
('B8', '5', 'BACK', 860.00, 'E2'),
('B9', '5', 'BACK', 860.00, 'E2'),
('M1', '1', 'MIDDLE', 1000.00, 'E1'),
('M10', '4', 'MIDDLE', 1000.00, 'E2'),
('M2', '2', 'MIDDLE', 1000.00, 'E1'),
('M3', '1', 'MIDDLE', 1000.00, 'E2'),
('M4', '2', 'MIDDLE', 1000.00, 'E2'),
('M5', '4', 'MIDDLE', 1000.00, 'E1'),
('M6', '4', 'MIDDLE', 1000.00, 'E1'),
('M7', '4', 'MIDDLE', 1000.00, 'E1'),
('M8', '4', 'MIDDLE', 1000.00, 'E2'),
('M9', '4', 'MIDDLE', 1000.00, 'E2'),
('V1', '1', 'VIP', 1600.00, 'E1'),
('V10', '3', 'VIP', 1600.00, 'E2'),
('V2', '2', 'VIP', 1600.00, 'E1'),
('V3', '2', 'VIP', 1600.00, 'E2'),
('V4', 'A', 'VIP', 1600.00, 'E2'),
('V5', '3', 'VIP', 1600.00, 'E1'),
('V6', '3', 'VIP', 1600.00, 'E1'),
('V7', '3', 'VIP', 1600.00, 'E1'),
('V8', '3', 'VIP', 1600.00, 'E2'),
('V9', '3', 'VIP', 1600.00, 'E2');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(12) NOT NULL,
  `bid` int(12) NOT NULL,
  `coid` int(12) NOT NULL,
  `seat_no` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `bid`, `coid`, `seat_no`) VALUES
(7, 1, 4, 'M7'),
(5, 1, 4, 'V1'),
(9, 2, 4, 'V10'),
(10, 2, 4, 'V2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cuid` (`cuid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `concert_artist`
--
ALTER TABLE `concert_artist`
  ADD PRIMARY KEY (`coid`,`aid`),
  ADD KEY `coid` (`coid`,`aid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cuid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_no`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `bid` (`bid`,`coid`,`seat_no`),
  ADD KEY `coid` (`coid`),
  ADD KEY `seat_no` (`seat_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cuid`) REFERENCES `customer` (`cuid`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`);

--
-- Constraints for table `concert_artist`
--
ALTER TABLE `concert_artist`
  ADD CONSTRAINT `concert_artist_ibfk_2` FOREIGN KEY (`coid`) REFERENCES `concert` (`coid`),
  ADD CONSTRAINT `concert_artist_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `artist` (`aid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `booking` (`bid`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`seat_no`) REFERENCES `seat` (`seat_no`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `booking` (`bid`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`coid`) REFERENCES `concert` (`coid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
