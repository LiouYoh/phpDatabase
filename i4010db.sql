-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 10:10 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `i4010db`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupname`
--

CREATE TABLE IF NOT EXISTS `groupname` (
  `gid` varchar(20) NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `valid` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupname`
--

INSERT INTO `groupname` (`gid`, `groupname`, `valid`) VALUES
('UI3A', '資工三年級A班', 'Y'),
('UI3B', '資工三年級B班', 'Y'),
('UI4A', '資工四年級A班', 'Y'),
('UI4B', '資工四年級B班', 'Y'),
('UC3A', '化工系三年級', 'Y'),
('faculty', '教職員', 'Y'),
('student', '學生', 'Y'),
('root', '管理員', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `namelist`
--

CREATE TABLE IF NOT EXISTS `namelist` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `8_to_9` tinyint(1) NOT NULL,
  `9_to_10` tinyint(1) NOT NULL,
  `10_to_11` tinyint(1) NOT NULL,
  `11_to_12` tinyint(1) NOT NULL,
  `12_to_13` tinyint(1) NOT NULL,
  `13_to_14` tinyint(1) NOT NULL,
  `14_to_15` tinyint(1) NOT NULL,
  `15_to_16` tinyint(1) NOT NULL,
  `16_to_17` tinyint(1) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `namelist`
--

INSERT INTO `namelist` (`cid`, `name`, `8_to_9`, `9_to_10`, `10_to_11`, `11_to_12`, `12_to_13`, `13_to_14`, `14_to_15`, `15_to_16`, `16_to_17`, `comment`) VALUES
(1, 'B111-1', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 'B111-2', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 'B111-3', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 'B111-4', 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE IF NOT EXISTS `privileges` (
  `seqno` smallint(6) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(20) NOT NULL,
  `groupid` varchar(20) NOT NULL,
  `privilege` smallint(6) NOT NULL DEFAULT '1',
  `valid` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`seqno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`seqno`, `loginid`, `groupid`, `privilege`, `valid`) VALUES
(1, 'i4010', 'UI3A', 3, 'Y'),
(2, 'i4010', 'UI3B', 3, 'Y'),
(3, 'i4010', 'UI4A', 3, 'N'),
(4, 'i4010', 'UI4B', 3, 'N'),
(5, 'i4010', 'UN4', 3, 'Y'),
(6, 'i4010-3b', 'UI3B', 3, 'Y'),
(7, 'i4010-4a', 'UI4A', 3, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `seqno` smallint(6) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `groupid` varchar(20) NOT NULL,
  `valid` enum('Y','N') NOT NULL DEFAULT 'Y',
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`seqno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`seqno`, `loginid`, `passwd`, `groupid`, `valid`, `email`) VALUES
(1, 'i4010', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'UI3A', 'Y', ''),
(3, 'i4010admin', '3fc846ce89555257c658f3ccd8ddaba1ad188572', 'UI3A', 'Y', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
