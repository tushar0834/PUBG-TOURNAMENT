-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2020 at 04:18 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pubg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'tournamentmunda', 'lucky@123');

-- --------------------------------------------------------

--
-- Table structure for table `duo`
--

DROP TABLE IF EXISTS `duo`;
CREATE TABLE IF NOT EXISTS `duo` (
  `gameid` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pubgid` varchar(50) NOT NULL,
  `pubgid1` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mygames`
--

DROP TABLE IF EXISTS `mygames`;
CREATE TABLE IF NOT EXISTS `mygames` (
  `email` varchar(25) NOT NULL,
  `gameid` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `paymentstatus` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mygames`
--

INSERT INTO `mygames` (`email`, `gameid`, `type`, `paymentstatus`) VALUES
('tushar3n4@gmail.com', 1023, 'SQUAD', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `transactionid` bigint(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gameid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transactionid`, `email`, `gameid`) VALUES
(104110141445, 'tushar3n4@gmail.com', 1023);

-- --------------------------------------------------------

--
-- Table structure for table `solo`
--

DROP TABLE IF EXISTS `solo`;
CREATE TABLE IF NOT EXISTS `solo` (
  `gameid` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pubgid` varchar(25) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

DROP TABLE IF EXISTS `squad`;
CREATE TABLE IF NOT EXISTS `squad` (
  `email` varchar(25) NOT NULL,
  `gameid` int(10) NOT NULL,
  `pubgid` varchar(50) NOT NULL,
  `pubgid1` varchar(50) NOT NULL,
  `pubgid2` varchar(50) NOT NULL,
  `pubgid3` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

DROP TABLE IF EXISTS `tournament`;
CREATE TABLE IF NOT EXISTS `tournament` (
  `type` varchar(25) NOT NULL,
  `entryfee` int(10) NOT NULL,
  `prize` int(10) NOT NULL,
  `playdate` date NOT NULL,
  `image` blob NOT NULL,
  `gameid` int(10) NOT NULL,
  `playtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`type`, `entryfee`, `prize`, `playdate`, `image`, `gameid`, `playtime`) VALUES
('squad', 10, 1000, '2020-06-12', 0x612e6a7067, 1023, '18:30:00'),
('solo', 10, 100, '2020-06-11', 0x612e6a7067, 101, '14:31:00'),
('duo', 0, 50, '2020-06-12', 0x612e6a7067, 1024, '18:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `tournament1`
--

DROP TABLE IF EXISTS `tournament1`;
CREATE TABLE IF NOT EXISTS `tournament1` (
  `type` varchar(25) NOT NULL,
  `entryfee` int(10) NOT NULL,
  `prize` int(10) NOT NULL,
  `playdate` date NOT NULL,
  `image` blob NOT NULL,
  `playtime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament1`
--

INSERT INTO `tournament1` (`type`, `entryfee`, `prize`, `playdate`, `image`, `playtime`) VALUES
('sqaud', 10, 1000, '2020-06-11', 0x612e6a7067, '20:04:00'),
('solo', 10, 100, '2020-06-11', 0x612e6a7067, '14:31:00'),
('sqaud', 10, 1000, '2020-06-12', 0x612e6a7067, '18:30:00'),
('duo', 0, 50, '2020-06-12', 0x612e6a7067, '18:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location` varchar(25) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `pubgid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `location`, `Mobile`, `pubgid`) VALUES
(2, 'lucky', 'lucky8090@gmail.com', 'lucky@1234', 'LUCKNOW', 123456789, '10210122');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
