
 -- phpMyAdmin SQL Dump\
-- version 4.8.3\
-- https://www.phpmyadmin.net/\
--
-- Host: localhost:8889\
-- Generation Time: Jan 25, 2019 at 03:18 PM\
-- Server version: 5.7.23\
-- PHP Version: 7.2.10\

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Restaurant`\
--

-- --------------------------------------------------------\

--
-- Table structure for table `Restaurant`\
--
 CREATE DATABASE if NOT EXISTS `restaurantreview`;
 USE `restaurantreview`;
CREATE TABLE `Restaurant` (
  `restaurantID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactNumber` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `averageRating` double NOT NULL,
  `typeOfCuisine` varchar(100) NOT NULL,
  `priceRange` int(11) NOT NULL,
  `buffetAvailable` tinyint(1) NOT NULL,
  `privateRoomAvailable` tinyint(1) NOT NULL,
  `availableTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables\
--

--
-- Indexes for table `Restaurant`\

ALTER TABLE `Restaurant`
  ADD PRIMARY KEY (`restaurantID`);
