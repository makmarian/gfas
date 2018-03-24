-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 08:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gfes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bruker`
--

CREATE TABLE `bruker` (
  `brukernavn` char(2) NOT NULL,
  `dato` date DEFAULT NULL,
  `tidfor` time DEFAULT NULL,
  `tidetter` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bruker`
--

INSERT INTO `bruker` (`brukernavn`, `dato`, `tidfor`, `tidetter`) VALUES
('aa', '2018-03-21', '18:18:00', '21:59:00'),
('ab', '2018-03-21', '19:19:00', '21:21:00'),
('ac', '2018-03-24', '08:15:00', '13:45:00'),
('bm', '2018-03-24', '12:12:00', '13:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `liste`
--

CREATE TABLE `liste` (
  `type` char(1) DEFAULT NULL,
  `refID` varchar(20) DEFAULT NULL,
  `tonerID` int(11) NOT NULL,
  `hplaser` int(11) DEFAULT NULL,
  `hpink` int(11) DEFAULT NULL,
  `nonhplaser` int(11) DEFAULT NULL,
  `nonhpink` int(11) DEFAULT NULL,
  `others` int(11) DEFAULT NULL,
  `samsunglaser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liste`
--

INSERT INTO `liste` (`type`, `refID`, `tonerID`, `hplaser`, `hpink`, `nonhplaser`, `nonhpink`, `others`, `samsunglaser`) VALUES
('X', '2304892035', 34, 2, 4, 5, 4, 0, 0),
('2', '3459380495', 35, 0, 0, 0, 0, 0, 0),
('2', '3804958094', 36, 0, 0, 0, 0, 0, 0),
('2', '2348092834', 37, 0, 0, 0, 0, 0, 0),
('2', '3', 38, 0, 0, 0, 0, 0, 0),
('2', '2342342342', 39, 0, 0, 0, 0, 0, 0),
('2', '2342342342', 40, 0, 0, 0, 0, 0, 0),
('2', '2342342342', 41, 0, 0, 0, 0, 0, 0),
('2', '0303030352', 42, 885, 5, 5, 5, 2, 5),
('2', '5252859466', 43, 5, 0, 0, 0, 0, 0),
('2', '1231231666', 44, 0, 0, 0, 0, 0, 0),
('x', '1231231666', 45, 0, 0, 0, 0, 0, 0),
('1', '1231231666', 46, 100, 0, 0, 0, 0, 0),
('X', '1231231782', 47, 0, 0, 0, 0, 0, 0),
('3', '1231231782', 48, 0, 0, 0, 0, 0, 0),
('3', '1231231782', 49, 0, 0, 0, 0, 0, 0),
('T', '1231231782', 50, 0, 0, 0, 0, 0, 0),
('1', '1231231782', 51, 0, 0, 0, 0, 0, 0),
('2', '0370676710', 52, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bruker`
--
ALTER TABLE `bruker`
  ADD PRIMARY KEY (`brukernavn`);

--
-- Indexes for table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`tonerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liste`
--
ALTER TABLE `liste`
  MODIFY `tonerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
