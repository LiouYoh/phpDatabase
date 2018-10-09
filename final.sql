-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2017 at 10:20 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE IF NOT EXISTS `average` (
  `seqno` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) NOT NULL,
  `student_name` varchar(10) NOT NULL,
  `average_score` decimal(5,1) NOT NULL,
  `rank` tinyint(4) NOT NULL,
  PRIMARY KEY (`seqno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `average`
--

INSERT INTO `average` (`seqno`, `student_id`, `student_name`, `average_score`, `rank`) VALUES
(1, 'A2010', '李四', '80.1', 1),
(2, 'B1102', '王五', '79.3', 2),
(3, 'A1001', '張三', '0.0', 3),
(57, 'A1001', '張三', '0.0', 3),
(56, 'B1102', '王五', '79.3', 2),
(55, 'A2010', '李四', '80.1', 1),
(54, 'A1001', '張三', '0.0', 3),
(53, 'B1102', '王五', '79.3', 2),
(52, 'A2010', '李四', '80.1', 1),
(51, 'A1001', '張三', '0.0', 3),
(50, 'B1102', '王五', '79.3', 2),
(49, 'A2010', '李四', '80.1', 1),
(48, 'A1001', '張三', '0.0', 3),
(47, 'B1102', '王五', '79.3', 2),
(46, 'A2010', '李四', '80.1', 1),
(45, 'A1001', '張三', '0.0', 3),
(44, 'B1102', '王五', '79.3', 2),
(43, 'A2010', '李四', '80.1', 1),
(42, 'A1001', '張三', '0.0', 3),
(41, 'B1102', '王五', '79.3', 2),
(40, 'A2010', '李四', '80.1', 1);

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
  `comment` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `namelist`
--

INSERT INTO `namelist` (`cid`, `name`, `groupid`, `birthday`, `phone`, `address`, `valid`, `comment`, `gender`) VALUES
(1, '123456', 'UI3A', '2011-02-01', '(2)21822928 x6561', '台北市中山北路三段40號', 'Y', '123456', 'M'),
(2, '張三', 'UI3B', '2000-12-12', '0912345678', '台中市', 'Y', '789465', 'F'),
(3, '李四', 'UI4A', '1998-01-01', '0932456567', '台北市', 'Y', '45123456', 'U'),
(4, '林大同', 'UI3A', '2010-01-05', '0912345678', '台北市中山北路', 'Y', '', ''),
(5, '張三豐', 'UI3A', '2008-05-20', '0933456789', '台北市羅斯福路', 'Y', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `loginid` varchar(20) NOT NULL,
  `privilege` int(1) NOT NULL,
  `valid` varchar(1) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`loginid`, `privilege`, `valid`) VALUES
('i4010', 2, 'Y'),
('999', 2, 'Y'),
('1111', 3, 'Y'),
('1010', 2, 'Y'),
('777', 1, 'Y'),
('', 1, 'Y'),
('555', 1, 'Y'),
('aa', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `cid` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `A1` varchar(11) NOT NULL,
  `A2` varchar(11) NOT NULL,
  `A3` varchar(11) NOT NULL,
  `A4` varchar(11) NOT NULL,
  `A5` varchar(11) NOT NULL,
  `A6` varchar(11) NOT NULL,
  `A7` varchar(11) NOT NULL,
  `A8` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `valid` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`cid`, `Name`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `date`, `valid`) VALUES
(1, '814', '555', '1010', 'aa', 'aa', '555', 'aa', '0', 'aa', '2017-06-04', 'Y'),
(2, '612', '0', '555', '555', '0', '0', '0', '0', '0', '2017-06-10', 'Y'),
(3, '711', '0', '0', '0', '0', '0', '0', '0', '0', '2017-06-09', 'Y'),
(4, '803', '0', '0', '0', '0', '0', '0', '0', '0', '2017-06-08', 'Y'),
(5, '602', '0', '0', '0', '0', '0', '0', '0', '0', '2017-06-08', 'Y'),
(6, '712', '0', '0', '0', '0', '0', '999', '999', '999', '2017-06-23', 'Y'),
(8, '705', '0', '0', '0', '0', '0', '0', '0', '0', '2017-09-21', 'Y'),
(7, '701', '0', '0', '0', '0', '0', '0', '0', '0', '2017-07-27', 'Y'),
(9, '510', '0', '0', '0', '0', '0', '0', '0', '0', '2017-06-21', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `room_`
--

CREATE TABLE IF NOT EXISTS `room_` (
  `date` datetime NOT NULL COMMENT '預約日期時間',
  `userID` varchar(9) NOT NULL COMMENT '使用者的學號',
  `status` varchar(1) NOT NULL COMMENT '使用者是否已使用會議室(Y/N)',
  `room_id` varchar(5) NOT NULL COMMENT '會議室編號',
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_`
--

INSERT INTO `room_` (`date`, `userID`, `status`, `room_id`) VALUES
('2017-06-22 09:00:00', '410306229', 'N', '814'),
('2017-06-29 14:00:00', '410306244', 'N', '612');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(20) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `studentID` varchar(9) NOT NULL,
  `valid` enum('Y','N') NOT NULL DEFAULT 'Y',
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `loginid`, `passwd`, `studentID`, `valid`, `name`) VALUES
('1345', 'i4010', 'e5d8f45ba5126f9ff16df3407f3c9849d9e213fe', '410306222', 'Y', 'kk'),
('aa@aa', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'aa', 'Y', 'aa'),
('sgdhfhfd', '555', 'b1aa73650af1bcd672a544c668acf99d250d3d37', '9999', 'Y', 'fghfgh'),
('999', '999', 'afc97ea131fd7e2695a98ef34013608f97f34e1d', '999', 'Y', '999'),
('1010', '1010', '1966e694bad90686516f99cdf432800fdca39290', '1010', 'Y', '1010'),
('777', '777', 'fc7a734dba518f032608dfeb04f4eeb79f025aa7', '777', 'Y', '777'),
('1111', '1111', '011c945f30ce2cbafc452f39840f025693339c42', '1111', 'Y', '1111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
