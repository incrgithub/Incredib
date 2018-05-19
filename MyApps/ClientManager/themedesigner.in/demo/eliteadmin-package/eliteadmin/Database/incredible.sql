-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2017 at 05:06 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `incredible`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `clientid` int(20) NOT NULL AUTO_INCREMENT,
  `clientname` text NOT NULL,
  `clientaddress` text NOT NULL,
  `clientemailid` text NOT NULL,
  `clientcontactno` text NOT NULL,
  `clienttype` text NOT NULL,
  PRIMARY KEY (`clientid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`clientid`, `clientname`, `clientaddress`, `clientemailid`, `clientcontactno`, `clienttype`) VALUES
(6, 'Phadtare Knowledge City', 'Kalamb, Walchandnagar', 'dkkkp@dkkkp.edu.in', '02118254320', 'Fixed'),
(7, 'Vega Industries', 'Mumbai', 'harsh.mane@gmail.com', '8796154725', 'Fixed'),
(9, 'Kikale Associates', 'Baramati', 'kikaleassociates@gmail.com', '9823025340', 'Fixed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desktopappdev`
--

CREATE TABLE IF NOT EXISTS `tbl_desktopappdev` (
  `appid` int(10) NOT NULL AUTO_INCREMENT,
  `appname` text NOT NULL,
  `desktopappexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_desktopappdev`
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
-- Table structure for table `tbl_mobileappdev`
--

CREATE TABLE IF NOT EXISTS `tbl_mobileappdev` (
  `appid` int(10) NOT NULL AUTO_INCREMENT,
  `appname` text NOT NULL,
  `mobileappexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_mobileappdev`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

CREATE TABLE IF NOT EXISTS `tbl_sms` (
  `smsid` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` varchar(6) NOT NULL,
  `nosms` int(10) NOT NULL,
  `smsexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`smsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_sms`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_voicecalls`
--

CREATE TABLE IF NOT EXISTS `tbl_voicecalls` (
  `callsid` int(11) NOT NULL AUTO_INCREMENT,
  `nocalls` int(10) NOT NULL,
  `callsexpirydate` date NOT NULL,
  `clientid` int(10) NOT NULL,
  PRIMARY KEY (`callsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_voicecalls`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_webappdev`
--

CREATE TABLE IF NOT EXISTS `tbl_webappdev` (
  `appid` int(10) NOT NULL AUTO_INCREMENT,
  `appname` text NOT NULL,
  `webappexpirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_webappdev`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_websites`
--

CREATE TABLE IF NOT EXISTS `tbl_websites` (
  `websiteid` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` text NOT NULL,
  `webspace` text NOT NULL,
  `noofemailds` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  `clientid` int(11) NOT NULL,
  PRIMARY KEY (`websiteid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_websites`
--

INSERT INTO `tbl_websites` (`websiteid`, `domainname`, `webspace`, `noofemailds`, `expirydate`, `clientid`) VALUES
(11, 'www.kikaleassociates.com', '1GB', 8, '2018-01-02', 9),
(8, 'www.dkkkpmba.com', '1GB', 4, '2017-08-31', 6),
(9, 'www.dkkkpbpp.com', '1GB', 4, '2017-08-31', 6),
(10, 'www.vega-soyfit.com', '1GB', 10, '2016-12-31', 7);
