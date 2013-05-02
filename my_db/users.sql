-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2013 at 09:32 AM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `YearEntered` year(4) NOT NULL,
  `ThumbnailURL` varchar(500) NOT NULL,
  `PortraitURL` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `LastName`, `FirstName`, `Email`, `YearEntered`, `ThumbnailURL`, `PortraitURL`) VALUES
(1, 'Mouse', 'Mickey', 'mickey@anonymous.org', 2010, 'my_thumbnails/student1.jpg', 'my_images/student1.jpg'),
(2, 'Duck', 'Donald', 'donald@anonymous.org', 2011, 'my_thumbnails/student2.jpg', 'my_images/student2.gif'),
(13, 'Rice', 'Scott', 'SCOTT.D.RICE@VANDERBILT.EDU', 2013, 'my_thumbnails/user13.jpg', 'my_images/user13.jpg'),
(14, 'Connelly', 'Allison', 'ALLISON.M.CONNELLY@VANDERBILT.EDU', 2013, 'my_thumbnails/user14.jpg', 'my_images/user14.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
