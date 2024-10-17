-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2019 at 07:06 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `enter`
--

CREATE TABLE IF NOT EXISTS `enter` (
  `vid` int(10) NOT NULL,
  `cindate` date NOT NULL,
  `cintime` time NOT NULL,
  `couttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enter`
--

INSERT INTO `enter` (`vid`, `cindate`, `cintime`, `couttime`) VALUES
(1, '2018-02-27', '12:45:00', '14:30:00'),
(1, '2019-03-04', '10:20:00', '11:36:00'),
(1, '2019-03-05', '10:00:00', '12:36:00'),
(1, '2019-03-06', '10:00:00', '11:03:00'),
(2, '2019-03-01', '10:02:00', '11:23:00'),
(2, '2019-03-02', '12:30:00', '14:03:00'),
(2, '2019-03-03', '18:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE IF NOT EXISTS `relation` (
  `sno` int(10) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `rollno` varchar(25) NOT NULL,
  `relationships` varchar(25) NOT NULL,
  `rname` varchar(25) NOT NULL,
  `idtype` varchar(25) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `path` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation`
--

INSERT INTO `relation` (`sno`, `sname`, `rollno`, `relationships`, `rname`, `idtype`, `idno`, `mobile`, `path`) VALUES
(1, 'Priya', '22cs55', 'Father', 'Saravanan', 'Adhaar(UID)', '889636542258', 9447736976, 'relation/1.jpg'),
(2, 'Ramya', '22cs50', 'Father', 'Mohan', 'Adhaar(UID)', '123456789874', 9447799887, 'relation/2.jpg'),
(3, 'Priya', '22cs55', 'Mother', 'Pavitra', 'Adhaar(UID)', '987456328569', 9632587413, 'relation/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(25) NOT NULL,
  `rollno` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `block` varchar(25) NOT NULL,
  `roomno` int(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `sname`, `rollno`, `department`, `year`, `address`, `block`, `roomno`, `mobile`, `path`) VALUES
(1, 'Priya', '22cs55', 'BSc.Computer Science', 'First', 'Mill road, Erode', 'A', 101, 9447736976, 'image/1.jpg'),
(2, 'Ramya', '22cs50', 'BSc.Computer Science', 'First', 'Laksmi Complex Opposite', 'A', 101, 9995699882, 'image/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(25) NOT NULL,
  `vname` varchar(25) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `rollno` varchar(25) NOT NULL,
  `relationships` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `vname`, `idno`, `sname`, `rollno`, `relationships`, `mobile`) VALUES
(1, 'Saravanan', '889636542258', 'Priya', '22cs55', 'Father', 9447736976),
(2, 'Mohan', '123456789874', 'Ramya', '22cs50', 'Father', 9447799887);
