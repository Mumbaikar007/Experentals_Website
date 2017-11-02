-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 03:41 PM
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
  `bidd` int(30) NOT NULL,
  `renter` int(30) NOT NULL,
  `bidder_id` int(100) NOT NULL,
  `renter_id` int(100) NOT NULL,
  `bid_id` int(11) NOT NULL,
  `price` int(30) NOT NULL,
  `ItemName` text NOT NULL,
  `BidderName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bidd`, `renter`, `bidder_id`, `renter_id`, `bid_id`, `price`, `ItemName`, `BidderName`) VALUES
(3, 3, 4, 4, 39, 86, 'Arduino', 'Pranav'),
(3, 3, 4, 4, 40, 123, 'Arduino', 'Pranav'),
(3, 3, 4, 3, 41, 123, 'Protable Pi', 'Pranav');

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
('Adarsh ', 'a:1:{i:0;s:6:\"Pranav\";}'),
('Pranav', 'a:1:{i:0;s:7:\"Adarsh \";}'),
('abcdefg', 'a:0:{}'),
('abcdefw', 'a:0:{}'),
('aaaaaa', 'a:0:{}');

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
(3, 'Adarsh ', 'Aa!1Bb@2'),
(4, 'Pranav', 'Aa!1Bb@2'),
(7, 'aaaaaa', 'abcd12#'),
(5, 'abcdefg', 'abcdefg1@'),
(6, 'abcdefw', 'abcdefgh1@');

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
  `renter_name` varchar(20) NOT NULL,
  `lessor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`pid`, `rent_id`, `title`, `category`, `description`, `image`, `price`, `avail_bids`, `location`, `renter_name`, `lessor`) VALUES
(4, 3, 'Arduino', 'IOT', 'asf', 'images/Raspbeerry.jpg', 250, 0, 'Borivali', 'Pranav', 'Pranav');

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
  ADD KEY `rent_id` (`renter`),
  ADD KEY `pid` (`bidd`);

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
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`renter`) REFERENCES `rent` (`rent_id`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`bidd`) REFERENCES `login` (`pid`);

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
