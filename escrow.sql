-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 06:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escrow`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `pid` int(30) NOT NULL,
  `rent_id` int(30) NOT NULL,
  `bid_id` int(11) NOT NULL,
  `price` int(30) NOT NULL,
  `urgency` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chatTo`
--

CREATE TABLE `chatTo` (
  `name` varchar(20) NOT NULL,
  `other` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatTo`
--

INSERT INTO `chatTo` (`name`, `other`) VALUES
('ABCD', 'a:1:{i:0;s:5:\"ABCDE\";}'),
('ABCDE', 'a:3:{i:0;s:4:\"ABCD\";i:1;N;i:2;N;}'),
('AAAA', 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `pid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`pid`, `username`, `password`) VALUES
(11, 'AAAA', '1111'),
(9, 'ABCD', '1234'),
(10, 'ABCDE', '12345'),
(1, 'adarsh', 'adarsh'),
(2, 'Pradnya_Pradhan', 'pradnya');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `rent_id` int(30) NOT NULL,
  `bid_id` int(30) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `gateway` varchar(200) NOT NULL,
  `online_trans` varchar(200) NOT NULL,
  `cashback` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` int(30) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `pid` int(30) NOT NULL,
  `rent_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(30) NOT NULL,
  `avail_bids` int(30) NOT NULL,
  `location` varchar(15) NOT NULL,
  `renter_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`pid`, `rent_id`, `title`, `category`, `description`, `image`, `price`, `avail_bids`, `location`, `renter_name`) VALUES
(1, 4, 'Rasp0', 'IOT', 'Microcontroller', 'bitmap', 2000, 2, 'Mumbai', 'ABCDE'),
(1, 5, 'Rasp1', 'IOT', 'Microcontroller', 'bitmap', 2500, 2, 'Mumbai', 'adarsh'),
(1, 6, 'Rasp2', 'IOT', 'Microcontroller', 'bitmap', 2500, 2, 'Borivali', 'adarsh'),
(1, 7, 'Rasp3', 'IOT', 'Microcontroller', 'bitmap', 2500, 2, 'Andheri', 'AAAA');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `search_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `rent_id` (`rent_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`pid`,`username`),
  ADD UNIQUE KEY `pid_2` (`pid`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`trans_id`),
  ADD UNIQUE KEY `pid` (`pid`),
  ADD KEY `rent_id` (`rent_id`),
  ADD KEY `payment_ibfk_1` (`bid_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`,`username`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`rent_id`) REFERENCES `rent` (`rent_id`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `login` (`pid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`bid_id`) REFERENCES `bid` (`bid_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`rent_id`) REFERENCES `rent` (`rent_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `login` (`pid`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `login` (`pid`),
  ADD CONSTRAINT `profile_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login` (`username`),
  ADD CONSTRAINT `profile_ibfk_3` FOREIGN KEY (`password`) REFERENCES `login` (`password`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `login` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
