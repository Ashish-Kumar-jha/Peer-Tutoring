-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2020 at 06:38 AM
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
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `Order_ID` varchar(255) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Tutor` varchar(50) NOT NULL,
  `Txn_ID` varchar(255) NOT NULL,
  `Txn_Amount` int(11) NOT NULL,
  `BankTxn_ID` varchar(255) NOT NULL,
  `Bank_Name` varchar(60) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Ask` varchar(255) NOT NULL,
  `TXN_Date` varchar(50) NOT NULL,
  `Start` varchar(20) NOT NULL,
  `End` varchar(20) NOT NULL,
  `TutingMode` varchar(20) NOT NULL,
  PRIMARY KEY (`Order_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Order_ID`, `User`, `Tutor`, `Txn_ID`, `Txn_Amount`, `BankTxn_ID`, `Bank_Name`, `Mode`, `Ask`, `TXN_Date`, `Start`, `End`, `TutingMode`) VALUES
('ORDS58259179', 'vijaypop12@gmail.com', 'aj310161@gmail.com', '', 0, '', '', '', 'swing', '', '', '', ''),
('ORDS64127122', 'vijaypop12@gmail.com', 'aj310161@gmail.com', '20200323111212800110168133901388282', 30, '777001009467163', 'Union Bank of India', 'DC', 'OOPS', '', '', '', ''),
('ORDS55345042', 'vijaypop12@gmail.com', 'ym11708032@gmail.com', '20200401111212800110168920501398227', 20, '777001047315257', 'Union Bank of India', 'DC', 'About CSS', '', '04/02/2020', '04/16/2020', ''),
('ORDS83543515', 'vijaypop12@gmail.com', 'miragurung9931@gmail.com', '20200401111212800110168748601417289', 30, '777001656351513', 'Union Bank of India', 'DC', 'anything, that you can teach.....', '2020-04-01 23:28:27.0', '04/04/2020', '04/16/2020', 'Video');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
