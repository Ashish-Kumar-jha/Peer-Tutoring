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
-- Table structure for table `teacherlogin`
--

DROP TABLE IF EXISTS `teacherlogin`;
CREATE TABLE IF NOT EXISTS `teacherlogin` (
  `Name` varchar(50) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `About` varchar(255) NOT NULL,
  `Booked` int(11) NOT NULL,
  `College_ID` longtext NOT NULL,
  `Img` longtext NOT NULL,
  `Resume` longtext NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`Name`, `Mobile_No`, `College`, `Subject`, `State`, `Email`, `Password`, `About`, `Booked`, `College_ID`, `Img`, `Resume`) VALUES
('Ashish Kumar Jha', '7004467429', 'Lovely Professional University', 'Java', 'Bihar', 'aj310161@gmail.com', '40F2K1OSHf/ho', 'BCA Student', 1, '', 'ashish.png', ''),
(' Apoorv Srivastava', '8968135752', 'Lovely Professional University', 'Java', 'Utter Pradesh', 'apoorvsrivastava3546@gmail.com', '40sSjI8Xa1N2I', 'Java ', 0, '', 'apoorv.png', ''),
('Prayas Drolia', '7002482502', 'Lovely Professional University', 'Java', 'Haryana', 'prayasdrolia@gmail.com', '400EjnvnMFQWI', 'Excellent hands on java', 0, '', 'prayas.png', ''),
('Jaibhav Thukral', '757928877', 'Lovely Professional University', 'SQL', 'Uttrakhand', 'jaithukral25@gmail.com', '40yllLiC2oFAM', 'SQl', 0, '', 'jaibhav.png', ''),
('Aamir Iqbal', '8484867661', 'Lovely Professional University', 'CSS', 'Jammu', 'aamir.iqbal040@gmail.com', '40BAeatIkzCRY', 'CSS', 0, '', 'aamir.jpg', ''),
('Madisetty Sudhir', '8002038014', 'Lovely Professional University', 'CSS', 'Andhra Pradesh', 'sudheer.madisetty111@gmail.com', '40VCm9ROpaGqA', 'CSS', 0, '', 'mady.png', ''),
('Sanatan Upadhaya', '8427953897', 'Lovely Professional University', 'PLSQL', 'Utter Pradesh', 'rockcriz000@gmail.com', '40bOMl.OdZKCE', 'PLSQL', 0, '', 'sanatan.jpg', ''),
('Mira Gurung', '8002038014', 'Lovely Professional University', 'PLSQL', 'Punjab (Orig-> Afganistan)', 'miragurung9931@gmail.com', '40D7gP2eu6Yzg', 'PLSQL', 0, '', 'mira.png', ''),
('Vishwanath Reddy', '8074490605', 'Lovely Professional University', 'C++', 'Andhra Pradesh', 'j.vishwanath16072000@gmail.com', '40MGToYJXFMog', 'C++', 0, '', 'vishwanath.jpg', ''),
('Sahil', '7001598110', 'Lovely Professional University', 'C++', 'Delhi', 'sahil.kishore1989@gmail.com', '40XouASfmTk6c', 'C++', 0, '', 'sahil.png', ''),
('Sitesh Roy', '8859266316', 'Lovely Professional University', 'HTML', 'Bihar', 'siteshroy786@gmail.com', '40M0LDbNwrch.', 'HTML', 0, '', 'sitesh.png', ''),
('Yashasvee Mehrotra', '7355945494', 'Lovely Professional University', 'HTML', 'Utter Pradesh', 'ym11708032@gmail.com', '40MqrrHcBN9NU', 'HTML', 0, '', 'yashi.png', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
