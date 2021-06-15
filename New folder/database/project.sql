-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 07:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User`, `Password`, `Email`) VALUES
('admin@admin', 'd0oN7iZkpQII2', 'vijaypop12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
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
  `Img` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `User_ID`, `Password`, `College`, `Branch`, `Registration_No`, `State`, `About`, `Mobile_no`, `College_ID`, `Img`) VALUES
('Ranvijay Singh', 'vijaypop12@gmail.com', '40qGK16GhxW6w', 'JNU', 'CSE', '201713006001', 'RÄjasthÄn', 'B.Tech Student', '7891726688', '', 'IMG_20180630_151705_118.jpg'),
('ASHISH KUMAR JHA', 'aj310161@gmail.com', '29m8XME9qawVM', 'Lovely Professional University', 'BCA', '11708214', 'punjab', 'CODING IS LIFE', '7004467429', '', 'ashish.png'),
('ABHAY BHATTACHARYA', 'abhayharidwar1@gmail.com', 'afMlQDzHEUy46', 'Lovely Professional University', 'B. TECH CSE', '', 'WEST BANGAL', 'CODER', '8077740584', '', ''),
('keshav jha', 'jhashishkeshav6@gmail.com', '29v92vDsP5hUM', 'Lovely Professional University', 'BCA', '', 'BIHAR', 'learner', '9971995074', '', ''),
('BHATTA', 'abhay.bhatta@yahoo.com', '29X3h/mWmGBzc', 'Lovely Professional University', 'BTECH CSE', '', 'UTTRAKHAND', 'STUDENT', '8859266316', '', ''),
('jaibhav thukral', 'jaithukral25@gmail.com', '4e9duzRZ5CkxY', 'Lovely Professional University', 'BCA', '', 'UK', 'topper', '7579228877', '', ''),
('YASH GUPTA', 'yashgupta11708193@gmail.com', 'adta6p207flXU', 'Lovely Professional University', 'BCA', '', 'UP', 'CODER', '9628672527', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
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
  `Resume` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`Name`, `Mobile_No`, `College`, `Subject`, `State`, `Email`, `Password`, `About`, `Booked`, `College_ID`, `Img`, `Resume`) VALUES
('Ashish Kumar Jha', '7004467429', 'Lovely Professional University', 'Java', 'Bihar', 'aj310161@gmail.com', '40F2K1OSHf/ho', 'BCA Student', 5, '', 'ashish.png', ''),
(' Apoorv Srivastava', '8968135752', 'Lovely Professional University', 'Java', 'Utter Pradesh', 'apoorvsrivastava3546@gmail.com', '40sSjI8Xa1N2I', 'Java ', 0, '', 'apoorv.png', ''),
('Prayas Drolia', '7002482502', 'Lovely Professional University', 'Java', 'Haryana', 'prayasdrolia@gmail.com', '400EjnvnMFQWI', 'Excellent hands on java', 0, '', 'prayas.png', ''),
('Jaibhav Thukral', '757928877', 'Lovely Professional University', 'SQL', 'Uttrakhand', 'jaithukral25@gmail.com', '40yllLiC2oFAM', 'SQl', 2, '', 'jaibhav.png', ''),
('Aamir Iqbal', '8484867661', 'Lovely Professional University', 'CSS', 'Jammu', 'aamir.iqbal040@gmail.com', '40BAeatIkzCRY', 'CSS', 0, '', 'aamir.jpg', ''),
('Madisetty Sudhir', '8002038014', 'Lovely Professional University', 'CSS', 'Andhra Pradesh', 'sudheer.madisetty111@gmail.com', '40VCm9ROpaGqA', 'CSS', 0, '', 'mady.png', ''),
('Sanatan Upadhaya', '8427953897', 'Lovely Professional University', 'PLSQL', 'Utter Pradesh', 'rockcriz000@gmail.com', '40bOMl.OdZKCE', 'PLSQL', 1, '', 'sanatan.jpg', ''),
('Mira Gurung', '8002038014', 'Lovely Professional University', 'PLSQL', 'Punjab (Orig-> Afganistan)', 'miragurung9931@gmail.com', '40D7gP2eu6Yzg', 'PLSQL', 0, '', 'mira.png', ''),
('Vishwanath Reddy', '8074490605', 'Lovely Professional University', 'C++', 'Andhra Pradesh', 'j.vishwanath16072000@gmail.com', '40MGToYJXFMog', 'C++', 0, '', 'vishwanath.jpg', ''),
('Sahil', '7001598110', 'Lovely Professional University', 'C++', 'Delhi', 'sahil.kishore1989@gmail.com', '40XouASfmTk6c', 'C++', 1, '', 'sahil.png', ''),
('Sitesh Roy', '8859266316', 'Lovely Professional University', 'HTML', 'Bihar', 'siteshroy786@gmail.com', '40M0LDbNwrch.', 'HTML', 1, '', 'sitesh.png', ''),
('Yashasvee Mehrotra', '7355945494', 'Lovely Professional University', 'HTML', 'Utter Pradesh', 'ym11708032@gmail.com', '40MqrrHcBN9NU', 'HTML', 0, '', 'yashi.png', ''),
('SHIVANSH ', '9877644122', 'Lovely Professional University', 'c++', 'UP', 'shivansh.upd@gmail.com', 'e9wnJcQmy99H6', 'Creative and Goal-Oriented Computer Science enthusiast with Problem\r\nSolving abilities.', 0, '', 'shivansh.png', ''),
('KRISHNA', '9454331573', 'Lovely Professional University', 'sql', 'UP', 'krishnatiwari.in@gmail.com', '166cx8XSGY8VU', 'DATABASE DEVELOPER', 1, '', 'krishna.png', ''),
('YASH', '9628672527', 'Lovely Professional University', 'sql', 'UP', 'yashgupta11708193@gmail.com', 'adta6p207flXU', 'SQL DEVELOPER', 0, '', 'yash.png', ''),
('ABHAY', '8859266316', 'Lovely Professional University', 'HTML', 'WEST BANGAL', 'abhayharidwar1@gmail.com', 'afMlQDzHEUy46', 'HTML', 2, '', 'abhay.png', ''),
('PRITAM', '7024634168', 'Lovely Professional University', 'CSS', 'MP', 'pritamdhoke3@gmail.com', 'c2oxVxPJFxaXA', 'CSS DEVELOPER', 0, '', 'pritam.png', ''),
('Sabir', '8146275333', 'Lovely Professional University', 'plsql', 'AFGANISTAN', 'jonsabir25@gmail.com', 'fe5vfIir1Divc', 'PLSQL DEVELOPER', 0, '', 'sabir.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
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
  `TutingMode` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Order_ID`, `User`, `Tutor`, `Txn_ID`, `Txn_Amount`, `BankTxn_ID`, `Bank_Name`, `Mode`, `Ask`, `TXN_Date`, `Start`, `End`, `TutingMode`) VALUES
('ORDS58259179', 'vijaypop12@gmail.com', 'aj310161@gmail.com', '', 0, '', '', '', 'swing', '', '', '', ''),
('ORDS64127122', 'vijaypop12@gmail.com', 'aj310161@gmail.com', '20200323111212800110168133901388282', 30, '777001009467163', 'Union Bank of India', 'DC', 'OOPS', '', '', '', ''),
('ORDS55345042', 'vijaypop12@gmail.com', 'ym11708032@gmail.com', '20200401111212800110168920501398227', 20, '777001047315257', 'Union Bank of India', 'DC', 'About CSS', '', '04/02/2020', '04/16/2020', ''),
('ORDS83543515', 'vijaypop12@gmail.com', 'miragurung9931@gmail.com', '20200401111212800110168748601417289', 30, '777001656351513', 'Union Bank of India', 'DC', 'anything, that you can teach.....', '2020-04-01 23:28:27.0', '04/04/2020', '04/16/2020', 'Video'),
('ORDS94424265', 'aj310161@gmail.com', 'rockcriz000@gmail.com', '20200402111212800110168363001416037', 30, '777001479856188', 'STATE BANK OF INDIA', 'DC', 'TESTING@noReply\r\nTeam PEER TUTORING', '2020-04-02 00:01:55.0', '05/02/2020', '05/06/2020', 'Video'),
('ORDS55345963', 'aj310161@gmail.com', 'apoorvsrivastava3546@gmail.com', '', 0, '', '', '', 'java?', '', '04/08/2020', '04/16/2020', 'Audio'),
('ORDS81775535', 'aj310161@gmail.com', 'jaithukral25@gmail.com', '20200405111212800110168799001425016', 20, '777001643093557', 'STATE BANK OF INDIA', 'DC', 'ModuleTesting .\r\n@PeerTutoring', '2020-04-05 21:25:15.0', '04/14/2020', '04/23/2020', 'Audio'),
('ORDS96974807', 'aj310161@gmail.com', 'abhayharidwar1@gmail.com', '', 0, '', '', '', 'Testing@PeerTutoring \r\nMobile msg', '', '04/08/2020', '04/10/2020', 'Video'),
('ORDS13628014', 'aj310161@gmail.com', 'abhayharidwar1@gmail.com', '20200407111212800110168891401442185', 20, '777001996300287', 'STATE BANK OF INDIA', 'DC', 'Testing@ PeerTutoring', '2020-04-07 20:57:32.0', '04/15/2020', '03/27/2020', 'Audio'),
('ORDS62465075', 'aj310161@gmail.com', 'abhayharidwar1@gmail.com', '20200407111212800110168910201439963', 20, '777001411393422', 'STATE BANK OF INDIA', 'DC', 'Testing@PeerTutoring', '2020-04-07 21:02:56.0', '04/09/2020', '04/21/2020', 'Audio'),
('ORDS88453359', 'aj310161@gmail.com', 'krishnatiwari.in@gmail.com', '20200408111212800110168050801426794', 20, '777001612796881', 'STATE BANK OF INDIA', 'DC', 'Testing@PeerTutoring \r\nCEO @AshishKumarJha', '2020-04-08 02:12:20.0', '04/13/2020', '04/29/2020', 'Audio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
