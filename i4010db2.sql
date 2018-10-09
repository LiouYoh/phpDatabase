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
-- Database: `i4010db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE IF NOT EXISTS `average` (
  `seqno` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `student_name` varchar(10) NOT NULL,
  `average_score` decimal(5,1) NOT NULL,
  `rank` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `average`
--

INSERT INTO `average` (`seqno`, `student_id`, `student_name`, `average_score`, `rank`) VALUES
(0, 'A2010', '李四', '80.1', 1),
(0, 'B1102', '王五', '79.3', 2),
(0, 'A1001', '張三', '0.0', 3);

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
('UC3A', '化工系三年級', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `namelist`
--

CREATE TABLE IF NOT EXISTS `namelist` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `groupid` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `valid` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `namelist`
--

INSERT INTO `namelist` (`cid`, `name`, `groupid`, `birthday`, `phone`, `address`, `valid`) VALUES
(1, '網頁程式', 'UI3A', '2011-02-01', '(2)21822928 x6561', '台北市中山北路三段40號', 'Y'),
(2, '張三', 'UI3B', '2000-12-12', '0912345678', '台中市', 'Y'),
(3, '李四', 'UI4A', '1998-01-01', '0932456567', '台北市', 'Y'),
(4, '林大同', 'UI3A', '2010-01-05', '0912345678', '台北市中山北路', 'Y'),
(5, '張三豐', 'UI3A', '2008-05-20', '0933456789', '台北市羅斯福路', 'Y');

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
  PRIMARY KEY (`seqno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`seqno`, `loginid`, `passwd`, `groupid`, `valid`) VALUES
(1, 'i4010', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'UI3A', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
