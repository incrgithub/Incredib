-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2016 at 05:22 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Role` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `UserName`, `Password`, `FirstName`, `LastName`, `Role`) VALUES
(32, 'amey', '12345678', 'Abhijit Shinde', 'Abhijit Shinde', 'SA'),
(12, 'admin', 'admin', 'Amit', 'Bhalerao', 'SU'),
(18, 'dff', 'dff', 'dd', 'dd', 'SA'),
(17, 'svems.kalamb20', '123456', 'Mr.Nitin Patil', 'Mr.Nitin Patil', 'SA'),
(106, 'uttamrao', 'phadtare', 'Uttarmrao Babasaheb', 'Phadtare', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_details`
--

CREATE TABLE IF NOT EXISTS `tbl_school_details` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(100) NOT NULL,
  `school_address` text NOT NULL,
  `no_of_teaching_staff` int(10) NOT NULL,
  `no_of_non_teaching_staff` int(10) NOT NULL,
  `no_of_peon` int(10) NOT NULL,
  `no_of_student` int(10) NOT NULL,
  `name_of_head_master` text NOT NULL,
  `contact_no_head_master` varchar(10) NOT NULL,
  `name_of_head_clark` text NOT NULL,
  `contact_no_head_clark` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_school_details`
--

INSERT INTO `tbl_school_details` (`id`, `school_name`, `school_address`, `no_of_teaching_staff`, `no_of_non_teaching_staff`, `no_of_peon`, `no_of_student`, `name_of_head_master`, `contact_no_head_master`, `name_of_head_clark`, `contact_no_head_clark`) VALUES
(32, 'Phadtare Global School', 'Kalamb,Walchandnagar', 15, 15, 15, 15, 'Amey Bhalerao', '8796154725', 'Abhijit Shinde', '9860960529'),
(17, 'Vyankateshwara English Medium School', 'Kalamb,Walchandnagar', 14, 14, 3, 2, 'Sandip Pansare', '9970446416', 'Mr.Nitin Patil', '8796154725');
