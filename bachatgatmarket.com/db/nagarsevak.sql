-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2017 at 04:40 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nagarsevak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint_dtls`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint_dtls` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `complaint_dept` text NOT NULL,
  `address` text NOT NULL,
  `comp_comments` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `action_comments` text NOT NULL,
  `comp_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_complaint_dtls`
--

INSERT INTO `tbl_complaint_dtls` (`id`, `name`, `mobileno`, `complaint_dept`, `address`, `comp_comments`, `status`, `action_comments`, `comp_date`) VALUES
(12, 'Amit Bhalerao', '8796154725', 'ABC', 'Pune ', 'Kasturi ', 'Completed', 'Love You Sweetu', '2017-02-01'),
(13, 'Abhijit Shinde', '9860960529', 'PQR', 'Mangalwedha', 'Hello I am abhijit', 'Completed', 'dfsfdfdsffs', '2017-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`) VALUES
(1, 'admin', '123456', 'Amit', 'Bhalerao'),
(2, 'student', 'student', 'Student', 'Student');
