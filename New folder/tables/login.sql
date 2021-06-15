-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2020 at 02:46 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Name` char(30) NOT NULL,
  `User_ID` varchar(40) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Branch` varchar(40) NOT NULL,
  `Registration_No` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `About` varchar(255) NOT NULL,
  `Mobile_no` varchar(15) NOT NULL,
  `College_ID` longtext NOT NULL,
  `Img` longtext NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `User_ID`, `Password`, `College`, `Branch`, `Registration_No`, `State`, `About`, `Mobile_no`, `College_ID`, `Img`) VALUES
('Ranvijay Singh', 'vijaypop12@gmail.com', '40qGK16GhxW6w', 'JNU', 'CSE', '201713006001', 'RÄjasthÄn', 'B.Tech Student', '7891726688', '', 'IMG_20180630_151705_118.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
