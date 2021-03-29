-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2020 at 02:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `nickName` varchar(20) NOT NULL,
  `pX` int(3) DEFAULT NULL,
  `pY` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tourGuide`
--

CREATE TABLE `tourGuide` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nationalID` varchar(14) NOT NULL,
  `gender` enum('male','famale') NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `locID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tourGuide_phones`
--

CREATE TABLE `tourGuide_phones` (
  `phones` varchar(11) NOT NULL,
  `tourID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `tourID` int(11) NOT NULL,
  `locID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','famale') NOT NULL,
  `travelLog` varchar(100) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `nationalID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourGuide`
--
ALTER TABLE `tourGuide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locID` (`locID`);

--
-- Indexes for table `tourGuide_phones`
--
ALTER TABLE `tourGuide_phones`
  ADD PRIMARY KEY (`phones`,`tourID`),
  ADD KEY `tourID` (`tourID`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourID` (`tourID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `locID` (`locID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tourGuide`
--
ALTER TABLE `tourGuide`
  ADD CONSTRAINT `tourGuide_ibfk_1` FOREIGN KEY (`locID`) REFERENCES `locations` (`id`);

--
-- Constraints for table `tourGuide_phones`
--
ALTER TABLE `tourGuide_phones`
  ADD CONSTRAINT `tourGuide_phones_ibfk_1` FOREIGN KEY (`tourID`) REFERENCES `tourGuide` (`id`);

--
-- Constraints for table `travels`
--
ALTER TABLE `travels`
  ADD CONSTRAINT `travels_ibfk_1` FOREIGN KEY (`tourID`) REFERENCES `tourGuide` (`id`),
  ADD CONSTRAINT `travels_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `travels_ibfk_3` FOREIGN KEY (`locID`) REFERENCES `locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
