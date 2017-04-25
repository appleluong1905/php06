-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2017 at 10:16 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-10+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php06`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `f_name`, `l_name`, `email`, `pass`) VALUES
(1, 'modi', 'bixa', 'admin', 'admin'),
(2, 'abc', 'admin', 'abc@gmail.com', '123456'),
(3, 'ABC', 'DEF', 'a@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `userId`, `title`, `content`, `status`) VALUES
(1, 1, 'riki', 'fork', 0),
(2, 2, 'kun', 'ship', 0),
(3, 3, 'furi', 'travel', 1),
(4, 2, 'congkhuong', 'tra', 0),
(5, 3, 'tttttttttt', 'CCCCCCCCCCC', NULL),
(6, 2, 'qqqqqqq', 'wwwwwww', NULL),
(7, 2, 'tttttttttt', 'CCCCCCCCCCC', NULL),
(8, 1, 'qqqqqqq', 'CCCCCCCCCCC', NULL),
(9, 2, 'aaaaaaaaaaaa', 'bbbbbbbbbbbbb', NULL),
(10, 1, 'ggggggg', 'ggggggggggg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `pass`, `priority`) VALUES
(1, 'kun', 'ka', 'admin', 'admin', 1),
(2, 'Jonh', 'ka', 'lead', 'lead', 2),
(3, 'Jonh', 'phi', 'user', 'user', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
