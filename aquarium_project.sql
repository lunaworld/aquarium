-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 03:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquarium_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `IDAnimal` int(11) NOT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `NameAnimal` varchar(30) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Size` varchar(30) DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `ImageName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`IDAnimal`, `IDCategory`, `NameAnimal`, `Age`, `Size`, `Description`, `ImageName`) VALUES
(1, 1, 'ca thu', 12, '15', '<p>ca an rat ngon</p>\r\n', 'moverimage.png'),
(2, 1, 'fish2', 12, '15', '<p>rgfgfgfgfg</p>\r\n', 'moverimage1.png'),
(3, 2, 'bird1', 12, '15', '<p>zxdfdfd</p>\r\n', 'heimen1.jpg'),
(4, 1, 'aaaaa', 12, '12', '<p>fdfgdfgfdg</p>\r\n', 'content1.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `IDCustomer` int(11) NOT NULL,
  `IDEvent` int(11) DEFAULT NULL,
  `NameCustomer` varchar(50) DEFAULT NULL,
  `ImageCustomer` varchar(50) DEFAULT NULL,
  `EventPrice` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Mail` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Note` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `IDCategory` int(11) NOT NULL,
  `CategoryName` varchar(30) NOT NULL,
  `SpeciesInfomaton` varchar(50) DEFAULT NULL,
  `ImageCategory` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`IDCategory`, `CategoryName`, `SpeciesInfomaton`, `ImageCategory`) VALUES
(1, 'fish1', '<p>this is the test data 1</p>\r\n', 'heimen1.jpg'),
(2, 'bird', '<p>bird test</p>\r\n\r\n<figure class=\"easyimage easyi', 'ttt.png'),
(3, '3', '<p><strong>category 3</strong></p>\r\n', 'ttt1.png'),
(4, 'sdfdsfsdf', '<p>sdfsdfsdfsdf</p>\r\n', 'test.png'),
(5, 'sdfdsfsdf', '<p>sdfsdfsdfsdf</p>\r\n', 'test1.png');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `IDEvent` int(11) NOT NULL,
  `ImageEvent` varchar(50) DEFAULT NULL,
  `NameEvent` varchar(50) DEFAULT NULL,
  `AgeAllow` int(11) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `EventPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`IDEvent`, `ImageEvent`, `NameEvent`, `AgeAllow`, `StartDate`, `EndDate`, `StartTime`, `EndTime`, `Description`, `EventPrice`) VALUES
(1, 'ttt.png', 'event 1', 14, '0000-00-00', '0000-00-00', '06:00:00', '18:00:00', NULL, 15000),
(2, 'ttt.png', 'su kien 2', 3, '2019-04-19', '2019-04-26', '06:12:00', '14:00:00', '<p>sdfsdfsdfsdfsdfsdffffffffffffff</p>\r\n', 13000),
(3, 'index_img_consulting01.png', 'event childent', 15, '2019-12-12', '2019-12-12', '06:30:00', '19:30:00', '<p>su kien danh cho tre nho</p>\r\n', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `IDFeedback` int(11) NOT NULL,
  `Content` varchar(300) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `IDLogin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registion`
--

CREATE TABLE `registion` (
  `IDRegistion` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ImageUser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registion`
--

INSERT INTO `registion` (`IDRegistion`, `Name`, `Email`, `username`, `password`, `ImageUser`) VALUES
(1, 'tao ne', 'mark.hua91@gmail.com', 'user123', '12345678', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`IDAnimal`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`IDCustomer`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDCategory`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`IDEvent`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`IDFeedback`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDLogin`);

--
-- Indexes for table `registion`
--
ALTER TABLE `registion`
  ADD PRIMARY KEY (`IDRegistion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `IDAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `IDCustomer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `IDCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `IDEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `IDFeedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `IDLogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registion`
--
ALTER TABLE `registion`
  MODIFY `IDRegistion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
