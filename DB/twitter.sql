-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2014 at 12:50 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `userId` int(4) NOT NULL,
  `about` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`userId`, `about`) VALUES
(0, 'ddsd'),
(0, 'erwer'),
(0, 'ewe'),
(0, 'dfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(0, ''),
(0, ''),
(0, 'xdxfxdfxcvxcvcxvxvx'),
(0, 'sadasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `postId` int(4) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `extension` varchar(10) NOT NULL,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(4) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(28) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullname`, `email`, `password`) VALUES
(1, 'waleed', 'waleed@gmail.com', 'hello'),
(2, 'husnain', 'husnainsehgal@gmail.com', 'husni'),
(3, 'some', 'somebody@gmail.com', 'hello'),
(4, 'muneeb', 'khan@gmail.com', 'hello'),
(5, 'usama', 'usama@gmail.com', 'hi'),
(6, 'usman', 'usman@gmail.com', 'hello'),
(7, 'salman', 'salman@gmail.com', 'hi'),
(8, 'waleed', 'aaa@gmail.com', 'ccccccc'),
(9, 'shabuk', 'sain@gmail.com', 'hello'),
(10, 'awais', 'awais@gmail.com', 'hello'),
(11, 'shoaib', 'shoaib@gmail.com', 'hello'),
(12, 'hiii', 'hiii@gmail.com', 'hi'),
(13, 'sallo', 'sallo@gmail.com', 'hello'),
(14, 'ishaq', 'aaaa@gmail.com', 'helloo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
