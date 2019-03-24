-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 01:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantreview`
--
CREATE DATABASE IF NOT EXISTS `restaurantreview` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurantreview`;

-- --------------------------------------------------------

--
-- Table structure for table `businessman`
--

DROP TABLE IF EXISTS `businessman`;
CREATE TABLE `businessman` (
  `businessmanID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `ReservationID` int(11) NOT NULL,
  `RestaurantID` int(11) NOT NULL,
  `BusinessmanID` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `GuestNumber` int(11) NOT NULL,
  `additionalRequest` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `RestaurantID`, `BusinessmanID`, `time`, `GuestNumber`, `additionalRequest`) VALUES
(7, 67890, 1, '2019-03-18 00:00:00', 2, 'no'),
(8, 45678, 1, '2019-03-16 00:00:00', 1, 'No'),
(9, 45678, 3, '2019-03-27 00:00:00', 2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE `restaurant` (
  `restaurantID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contactNumber` int(10) NOT NULL,
  `typeOfCuisine` int(11) NOT NULL,
  `priceRange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `userType` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `userType`) VALUES
(2, 'testuserB1', 'kien@gmail.com', 'Ad123456', ''),
(3, 'testuserB', 'lad.me.98@gmail.com', 'Ab123456', 'businessman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businessman`
--
ALTER TABLE `businessman`
  ADD KEY `businessmanID` (`businessmanID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `RestaurantID` (`RestaurantID`),
  ADD KEY `BusinessmanID` (`BusinessmanID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD KEY `restaurantID` (`restaurantID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `businessman`
--
ALTER TABLE `businessman`
  ADD CONSTRAINT `businessman_ibfk_1` FOREIGN KEY (`businessmanID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`restaurantID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
