-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 08:36 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `teacher_num` varchar(30) NOT NULL,
  `teacher_fname` varchar(20) NOT NULL,
  `teacher_lname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `contact` int(20) NOT NULL,
  PRIMARY KEY (`teacher_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`teacher_num`, `teacher_fname`, `teacher_lname`, `address`, `contact`) VALUES
('123', 'yolo', 'test', 'asdasdasd', 123132213);

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_num` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `temp_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_num` varchar(255) NOT NULL,
  `user_pw` varchar(255) NOT NULL,
  `account_type` enum('administrator','student') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `stud_num`, `user_pw`, `account_type`) VALUES
(1, 'QC10500070', 'dale', 'administrator'),
(3, 'dale', 'dale', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `stud_num` varchar(20) NOT NULL,
  `stud_fname` varchar(30) NOT NULL,
  `stud_lname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `contact` int(30) NOT NULL,
  PRIMARY KEY (`stud_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`stud_num`, `stud_fname`, `stud_lname`, `address`, `contact`) VALUES
('qc10500070', 'yolo', 'devera', 'asdasdaasdd', 1312313),
('qc10500008', 'maria', 'maria', 'asdasd', 23123123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
