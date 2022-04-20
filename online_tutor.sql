-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 05:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CID`, `CNAME`) VALUES
(101, 'Algebra'),
(102, 'Arithmetic'),
(103, 'Trignometery'),
(104, 'Geometry'),
(105, 'Ancient History'),
(106, 'Medieval History'),
(107, 'Modern History'),
(108, 'Geography'),
(109, 'Economics'),
(110, 'Physics'),
(111, 'Biology'),
(112, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SID` int(10) NOT NULL,
  `SUSERNAME` varchar(50) NOT NULL,
  `SFIRSTNAME` varchar(50) NOT NULL,
  `SLASTNAME` varchar(50) NOT NULL,
  `SPASSWORD` varchar(50) NOT NULL,
  `CID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SID`, `SUSERNAME`, `SFIRSTNAME`, `SLASTNAME`, `SPASSWORD`, `CID`) VALUES
(109, 'KritikaS', 'Kritika', 'Singh', '123456', 110),
(1001, 'TVance', 'Tim', 'Vance', '123456', 101),
(1002, 'JLamb', 'Jesse', 'Lamb', '123456', 112),
(1003, 'MKong', 'Maria', 'Kong', '123456', 108),
(1004, 'APandey', 'Atiksh', 'Pandey', '123456', 108),
(1005, 'BLee', 'Bob', 'Lee', '123456', 102),
(1006, 'DLee', 'Debi', 'Lee', '123456', 110),
(1007, 'DFrancis', 'DeAndre', 'Francis', '123456', 109),
(1008, 'AWard', 'Allen ', 'Ward', '123456', 109);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `TID` int(11) NOT NULL,
  `TUSERNAME` varchar(50) NOT NULL,
  `TFIRSTNAME` varchar(50) NOT NULL,
  `TLASTNAME` varchar(50) NOT NULL,
  `TPASSWORD` varchar(50) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`TID`, `TUSERNAME`, `TFIRSTNAME`, `TLASTNAME`, `TPASSWORD`, `CID`) VALUES
(2001, 'SLee', 'Shane', 'Lee', '123456', 101),
(2001, 'SLee', 'Shane', 'Lee', '123456', 102),
(2001, 'SLee', 'Shane', 'Lee', '123456', 103),
(2002, 'MJefferson', 'Mary', 'Jefferson', '123456', 104),
(2003, 'LKim', 'Li', 'Kim', '123456', 105),
(2003, 'LKim', 'Li', 'Kim', '123456', 106),
(2004, 'JSpivey', 'Janet', 'Spivey', '123456', 107),
(2005, 'DBrown', 'David', 'Brown', '123456', 108),
(2006, 'FJacob', 'Frenando', 'Jacob', '123456', 109),
(2007, 'RJames', 'Russell', 'James', '123456', 110),
(2008, 'FFarooq', 'Faisal', 'Farooq', '123456', 111),
(2009, 'DMerchant', 'Dan', 'Merchant', '123456', 112),
(2010, 'LAlvergue', 'Luis', 'Alvergue', '123456', 110),
(2011, 'BFox', 'Brian', 'Fox', '123456', 105),
(2011, 'JennyW', 'Jenny', 'William', '123456', 110),
(2013, 'MarkW', 'Mark ', 'William', '123456', 113);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SID`,`CID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`TID`,`CID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
