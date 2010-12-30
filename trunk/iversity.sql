-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2010 at 10:14 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--
-- Creation: Dec 30, 2010 at 09:36 AM
-- Last update: Dec 30, 2010 at 09:36 AM
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_status` int(11) NOT NULL,
  `booking_status` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `booking`:
--   `booking_status`
--       `book_status` -> `id`
--   `pay_status`
--       `payment` -> `id`
--   `u_name`
--       `user` -> `u_name`
--

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `book_status`
--
-- Creation: Dec 30, 2010 at 09:37 AM
-- Last update: Dec 30, 2010 at 09:42 AM
--

DROP TABLE IF EXISTS `book_status`;
CREATE TABLE IF NOT EXISTS `book_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book_status`
--

INSERT INTO `book_status` (`id`, `status`) VALUES
(1, 'Booked'),
(2, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
-- Creation: Dec 30, 2010 at 09:36 AM
-- Last update: Dec 30, 2010 at 09:42 AM
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `method`) VALUES
(1, 'Cash'),
(2, 'CashCard');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--
-- Creation: Dec 30, 2010 at 09:30 AM
-- Last update: Dec 30, 2010 at 09:50 AM
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(60) NOT NULL,
  `room` varchar(60) NOT NULL,
  `module` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `time`, `room`, `module`) VALUES
(1, '0800', 'A01-01', 'MA1401 - Mathematics'),
(2, '0800', 'B02-01', 'BU1250 - Business Stuff'),
(3, '0800', 'C02-01', 'PY2014 - How to find Psycho People'),
(4, '0800', 'A01-02', 'CP3014 - How to Hack'),
(5, '0900', 'B02-02', 'CP666 - Satans Army'),
(6, '0900', 'C02-04', 'BU2349 - How to Con');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Dec 30, 2010 at 09:40 AM
-- Last update: Dec 30, 2010 at 09:45 AM
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_name` (`u_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `password`, `f_name`) VALUES
(1, 'jc12345678', '12345678', 'test user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
