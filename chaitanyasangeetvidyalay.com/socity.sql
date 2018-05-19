-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2014 at 02:10 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socity`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `contents`) VALUES
(10, '<p > <h1><font color=red>à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯ à¤¸à¤¾à¤‚à¤—à¥‹à¤²à¤¾ </font></h1></p>\r\n                   <p ><h1>à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯à¤¾à¤šà¥€ à¤¸à¥à¤¥à¤¾à¤ªà¤¨à¤¾ <span class="style4">à¤¶à¥à¤°à¥€.à¤ªà¥à¤°à¤¸à¤¾à¤¦ à¤ªà¤¾à¤Ÿà¥€à¤² ( B.A )</span> à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¶à¤¾à¤°à¤¦ à¤¤à¤¬à¤²à¤¾ à¤†à¤£à¤¿ à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¶à¤¾à¤°à¤¦ à¤¸à¤¤à¤¾à¤° à¤¯à¤¾à¤‚à¤¨à¥€ à¥¨à¥¬ à¤œà¤¾à¤¨à¥‡à¤µà¤¾à¤°à¥€ à¥¨à¥¦à¥¦à¥¬ à¤¸à¤¾à¤²à¥€ à¤ à¥‹à¤‚à¤¬à¤°à¥‡ à¤µà¤¾à¤¡à¤¾ à¤®à¤¹à¤¾à¤¦à¥‡à¤µ à¤—à¤²à¥à¤²à¥€ à¤¸à¤¾à¤‚à¤—à¥‹à¤²à¤¾ à¤¯à¥‡à¤¥à¥‡ à¤•à¥‡à¤²à¥€</p>\r\n<b>à¤¸à¤‚à¤—à¥€à¤¤ à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤®à¤§à¥€à¤² à¤—à¥à¤°à¥à¤µà¤°à¥à¤¯ <b>\r\n<br> à¤¶à¥à¤°à¥€.à¤¶à¤¶à¤¿à¤•à¤¾à¤‚à¤¤ à¤¬à¤¾à¤³à¤•à¥ƒà¤·à¥à¤£ à¤ªà¤¾à¤Ÿà¥€à¤² ( à¤µà¤¡à¥€à¤² )\r\n<br> à¤¶à¥à¤°à¥€.à¤­à¤¾à¤¨à¥à¤¦à¤¾à¤¸ à¤¬à¥à¤µà¤¾ à¤¢à¤µà¤³à¥€à¤•à¤° à¤¸à¤° à¤ªà¤‚à¤¢à¤°à¤ªà¥‚à¤° \r\n<br> à¤¶à¥à¤°à¥€.à¤•à¥ˆ. à¤¤à¥à¤°à¥à¤¯à¤¬à¤‚à¤• à¤¦à¤¤à¥à¤¤à¥‹à¤ªà¤‚à¤¤ à¤œà¥‹à¤¶à¥€ à¤¸à¤° à¤®à¤‚à¤—à¤³à¤µà¥‡à¤¢à¥‡à¤•à¤° à¤ªà¤‚à¤¢à¤°à¤ªà¥‚à¤° \r\n<br>à¤¶à¥à¤°à¥€. à¤µà¤¿à¤¨à¤¾à¤¯à¤• à¤«à¤¾à¤Ÿà¤• à¤¸à¤° à¤ªà¥à¤£à¥‡ \r\n<br>à¤¶à¥à¤°à¥€. à¤®à¤¨à¤®à¥‹à¤¹à¤¨ à¤•à¥à¤‚à¤­à¤¾à¤°à¥‡ à¤¸à¤° à¤¸à¤¾à¤‚à¤—à¤²à¥€ \r\n<br> à¤¶à¥à¤°à¥€. à¤®à¥‹à¤¹à¤¸à¥€à¤¨ à¤®à¤¿à¤°à¤œà¤•à¤° à¤¸à¤° à¤®à¤¿à¤°à¤œ    \r\n                   <p align=justify class="style2"><h1>à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯ à¤¹à¥‡ à¤…à¤–à¤¿à¤² à¤­à¤¾à¤°à¤¤à¥€à¤¯ à¤—à¤¾à¤‚à¤§à¤°à¥à¤µ à¤®à¤¹à¤¾à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯ à¤®à¤‚à¤¡à¤³ à¤®à¥à¤‚à¤¬à¤ˆ à¤¯à¤¾ à¤¸à¤‚à¤¸à¥à¤¥à¥‡à¤šà¥€ à¤¸à¤²à¤—à¥à¤¨à¤¤à¤¾ à¤ªà¥à¤°à¤¾à¤ªà¥à¤¤ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯ à¤†à¤¹à¥‡ .                     </p>\r\n                   <p align=justify class="style2"><h1>à¤¸à¤²à¤—à¥à¤¨à¤¤à¤¾ à¤ªà¥à¤°à¤¾à¤ªà¥à¤¤ à¤•à¥à¤°à¤®à¤¾à¤‚à¤• S â€“ M97  à¤†à¤£à¤¿ à¤ªà¥à¤°à¤®à¤¾à¤£à¤ªà¤¤à¥à¤° à¤•à¥à¤°à¤®à¤¾à¤‚à¤• à¥­à¥¨à¥© à¤®à¤¾à¤¨à¥à¤¯à¤¤à¤¾ à¤¸à¤¾à¤² à¥¨à¥¦à¥¦à¥®</p>\r\n                   <p align=justify class="style2"> <h1>à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯à¤¾à¤šà¥€ à¤¦à¥à¤¸à¤°à¥€ à¤¶à¤¾à¤–à¤¾ à¤®à¤‚à¤—à¤³à¤µà¥‡à¤¢à¤¾ à¤¯à¥‡à¤¥à¥‡ à¥§ à¤œà¤¾à¤¨à¥‡à¤µà¤¾à¤°à¥€ à¥¨à¥¦à¥¦à¥¯ à¤ªà¤¾à¤¸à¥‚à¤¨ " à¤¸à¥à¤µà¤° à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯" à¤¯à¤¾ à¤¨à¤¾à¤µà¤¾à¤¨à¥‡ à¤‡à¤‚à¤¡à¥€à¤•à¤°à¤µà¤¾à¤¡à¤¾ à¤•à¤¿à¤²à¥à¤²à¤¾ à¤­à¤¾à¤—, à¤®à¤‚à¤—à¤³à¤µà¥‡à¤¢à¤¾ à¤¯à¥‡à¤¥à¥‡ à¤•à¤¾à¤°à¥à¤¯à¤°à¤¤ à¤†à¤¹à¥‡ </p>');

-- --------------------------------------------------------

--
-- Table structure for table `ahval`
--

CREATE TABLE IF NOT EXISTS `ahval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ahval`
--

INSERT INTO `ahval` (`id`, `name`, `filename`) VALUES
(15, 'à¤ªà¥à¤°à¤µà¥‡à¤¶ à¤…à¤°à¥à¤œ', 'sangeet vidyalay frm.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `branchaddr`
--

CREATE TABLE IF NOT EXISTS `branchaddr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photoid`, `name`) VALUES
(1, 'page1 001_3.jpg'),
(2, 'page1 001.jpg'),
(3, 'Image-4_2.jpg'),
(4, 'Image-2.jpg'),
(5, 'Image-4_2_2.jpg'),
(6, 'Image-3_3.jpg'),
(7, 'Image-4_4.jpg'),
(8, 'Image-5_3.jpg'),
(9, 'Image-5.jpg'),
(10, 'Image-3.jpg'),
(11, 'Image-5.jpg'),
(13, 'Image-6_2.jpg'),
(14, 'Image-6_3.jpg'),
(15, 'Image-5_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `name`) VALUES
(10, '140894209463658.gif');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `post` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`) VALUES
(100, 'admin', 'admin', 'Amit', 'Bhalerao');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(10) NOT NULL AUTO_INCREMENT,
  `contents` text NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `contents`) VALUES
(35, '&#2326;&#2337;&#2325;&#2357;&#2366;&#2360;&#2354;&#2366; &#2343;&#2352;&#2339;&#2366;&#2340;&#2368;&#2354; &#2346;&#2366;&#2339;&#2368;&#2360;&#2366;&#2336;&#2381;&#2351;&#2366;&#2340; &#2333;&#2346;&#2366;&#2335;&#2381;&#2351;&#2366;&#2344;&#2375; &#2357;&#2366;&#2338; ');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` char(15) DEFAULT NULL,
  `LastName` char(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `societyinfo`
--

CREATE TABLE IF NOT EXISTS `societyinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `societyinfo`
--

INSERT INTO `societyinfo` (`id`, `name`, `address`) VALUES
(10, 'à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤  à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯ à¤¸à¤¾à¤‚à¤—à¥‹à¤²à¤¾', 'à¤šà¥ˆà¤¤à¤¨à¥à¤¯ à¤¸à¤‚à¤—à¥€à¤¤  à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤²à¤¯ à¤¸à¤¾à¤‚à¤—à¥‹à¤²à¤¾');

-- --------------------------------------------------------

--
-- Table structure for table `yojana`
--

CREATE TABLE IF NOT EXISTS `yojana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `yojana`
--

INSERT INTO `yojana` (`id`, `name`, `filename`) VALUES
(15, 'Application Form', 'sangeet vidyalay frm.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
