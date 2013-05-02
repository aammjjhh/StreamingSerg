-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2013 at 05:33 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE IF NOT EXISTS `fans` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `YearEnrolled` year(4) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `ActivationKey` varchar(40) NOT NULL,
  `Verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`ID`, `LastName`, `FirstName`, `Email`, `YearEnrolled`, `Password`, `ActivationKey`, `Verified`) VALUES
(1, 'Hatfield', 'Amanda', 'AMANDA.J.HATFIELD@VANDERBILT.EDU', 2013, '496cad79d2a56c7033e79fac253da162c2238cb7', 'a2af8cbf758905c0094de063472d211dcc8c515e', 0),
(2, 'Rice', 'Scott', 'SCOTT.D.RICE@VANDERBILT.EDU', 2013, '20ce37df77316dccee3ad46d423b21ff3582fcb7', '625c6c0020bb591d5a4279d8d2c9651af5e61373', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
