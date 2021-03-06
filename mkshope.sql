-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 05:57 AM
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
-- Database: `mkshope`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessesoris`
--

CREATE TABLE `accessesoris` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `madein` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessesoris`
--

INSERT INTO `accessesoris` (`id`, `name`, `code`, `image`, `price`, `madein`) VALUES
(1, 'Medieval History', '106', '1532615337.jpg', 200.00, 'Online'),
(2, 'Modern History', '107', '1532615381.jpg', 250.00, 'Hybrid');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `profile`) VALUES
(1, 'admin', 'ksingh5@pvamu.edu', 'admin', 'president.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `action`, `data`) VALUES
(1, '2018-07-03 05:15:37', 'Delete User', ' '),
(2, '2018-07-03 05:16:33', 'Delete User', ' '),
(3, '2018-07-03 05:17:26', 'Delete User', ''),
(4, '2018-07-03 05:17:56', 'Delete User', ' '),
(5, '2018-07-03 05:34:36', 'Delete User', ' '),
(6, '2018-07-03 05:34:36', 'Delete User', ' '),
(7, '2018-07-03 05:34:44', 'Delete User', ' '),
(8, '2018-07-03 05:34:44', 'Delete User', ' '),
(9, '2018-07-03 05:47:29', 'Delete User', ' '),
(10, '2018-07-03 05:48:07', 'Delete User', ' '),
(11, '2018-07-03 05:50:51', 'Delete User', ' '),
(12, '2018-07-03 05:50:55', 'Delete User', ' '),
(13, '2018-07-03 05:52:45', 'Delete User', ' '),
(14, '2018-07-03 05:53:35', 'Delete User', ' '),
(15, '2018-07-03 05:53:42', 'Delete User', ' '),
(16, '2018-07-04 03:56:35', 'Delete User', ' '),
(17, '2018-07-04 04:01:13', 'Delete User', ' '),
(18, '2018-07-20 01:28:31', 'Delete User', ' '),
(19, '2018-07-20 01:30:12', 'Delete User', ' '),
(20, '2018-07-20 01:30:15', 'Delete User', ' '),
(21, '2018-07-20 01:30:42', 'Delete User', ' '),
(22, '2018-07-20 01:30:46', 'Delete User', ' '),
(23, '2018-07-20 01:31:20', 'Delete User', ' '),
(24, '2018-07-20 01:57:02', 'Edit User Details', 'haben mesfin'),
(25, '2018-07-20 01:57:44', 'Edit User Details', 'haben mesfin'),
(26, '2018-07-20 02:01:50', 'Edit User Details', ' '),
(27, '2018-07-20 02:03:08', 'Edit User Details', 'haben mesfin'),
(28, '2018-07-20 02:03:49', 'Edit User Details', 'haben mesfin'),
(29, '2018-07-20 02:06:04', 'Edit User Details', 'haben mesfin'),
(30, '2018-07-20 02:35:42', 'Delete User', ' '),
(31, '2018-07-24 02:14:24', 'Edit User Details', 'haben mesfin'),
(32, '2018-07-24 02:14:58', 'Edit User Details', 'haben mesfin'),
(33, '2018-07-24 02:15:42', 'Edit User Details', 'haben mesfin'),
(34, '2018-07-26 02:18:25', 'Edit User Details', ' '),
(35, '2018-07-26 02:19:26', 'Edit User Details', ' '),
(36, '2018-07-26 02:38:17', 'Edit User Details', ' '),
(37, '2018-07-26 02:48:29', 'Edit User Details', 'habe mesfin'),
(38, '2018-07-26 04:13:24', 'Edit User Details', ' '),
(39, '2018-07-26 04:13:52', 'Edit User Details', ' '),
(40, '2018-07-26 04:52:36', 'Delete User', ' '),
(41, '2018-07-26 04:52:40', 'Delete User', ' '),
(42, '2018-07-26 04:52:43', 'Delete User', ' '),
(43, '2018-07-26 04:52:45', 'Delete User', ' '),
(44, '2018-07-26 05:38:36', 'Delete User', ' '),
(45, '2018-07-26 05:39:27', 'Delete User', ' '),
(46, '2018-07-26 05:43:36', 'Delete User', ' '),
(47, '2018-07-26 05:48:03', 'Delete User', ' '),
(48, '2018-07-26 05:49:21', 'Delete User', ' '),
(49, '2018-07-29 03:54:07', 'Edit User Details', 'habe mesfin'),
(50, '2018-07-29 14:08:58', 'Edit User Details', 'habe mesfin'),
(51, '2018-07-29 14:09:24', 'Edit User Details', 'habe mesfin'),
(52, '2018-07-29 14:58:02', 'Edit User Details', 'haben mesfin'),
(53, '2018-07-29 14:59:54', 'Edit User Details', 'haben mesfin'),
(54, '2018-07-29 14:59:56', 'Edit User Details', 'haben mesfin'),
(55, '2018-07-29 15:00:02', 'Edit User Details', 'haben mesfin'),
(56, '2018-07-29 15:00:06', 'Edit User Details', 'haben mesfin'),
(57, '2018-07-29 17:05:49', 'Edit User Details', 'hermon haylay'),
(58, '2018-07-29 17:06:06', 'Edit User Details', 'hermon haylay'),
(59, '2018-07-29 18:09:30', 'Delete User', 'hermon haylay'),
(60, '2018-07-29 18:17:18', 'Delete User', 'hermon haylay'),
(61, '2018-07-29 18:17:50', 'Delete User', 'hermon haylay'),
(62, '2018-07-29 18:20:34', 'Delete User', 'hermon haylay'),
(63, '2018-07-29 18:21:18', 'Delete User', 'hermon haylay'),
(64, '2018-07-29 18:25:00', 'Delete User', 'hermon haylay'),
(65, '2018-07-29 18:25:01', 'Delete User', 'hermon haylay'),
(66, '2018-07-29 18:26:03', 'Delete User', 'hermon haylay'),
(67, '2018-07-29 18:26:04', 'Delete User', 'hermon haylay'),
(68, '2018-07-29 18:26:49', 'Delete User', 'hermon haylay'),
(69, '2018-07-29 18:26:51', 'Delete User', 'hermon haylay'),
(70, '2018-07-29 18:27:23', 'Delete User', 'hermon haylay'),
(71, '2018-07-29 18:28:33', 'Delete User', 'hermon haylay'),
(72, '2018-07-29 18:28:34', 'Delete User', 'hermon haylay'),
(73, '2018-07-29 18:31:25', 'Delete User', 'hermon haylay'),
(74, '2018-07-29 18:31:25', 'Delete User', 'hermon haylay'),
(75, '2018-07-29 18:31:25', 'Delete User', 'hermon haylay'),
(76, '2018-07-29 18:31:25', 'Delete User', 'hermon haylay'),
(77, '2018-07-29 18:31:25', 'Delete User', 'hermon haylay'),
(78, '2021-05-08 10:11:38', 'Edit User Details', 'John Smith'),
(79, '2021-05-08 10:45:11', 'Delete User', 'cloth 200.00'),
(80, '2021-05-08 10:46:00', 'Delete User', 'Men Shirt 101 300.00'),
(81, '2021-05-08 10:46:22', 'Delete User', 'camera 2000.00'),
(82, '2021-05-08 10:48:08', 'Delete User', 'asdasd 234.00'),
(83, '2021-05-08 10:49:02', 'Delete User', ' '),
(84, '2021-05-08 10:49:25', 'Delete User', 'Sample Woman Shirt 101 350.00'),
(85, '2021-05-08 10:50:17', 'Delete User', 'Sample Woman Shirt 101 350.00'),
(86, '2021-05-08 10:50:45', 'Delete User', 'Sample Woman Shirt 101 350.00'),
(87, '2021-05-08 10:50:59', 'Delete User', 'Sample 150.00'),
(88, '2022-04-04 21:48:31', 'Delete User', 'Alex Rogers'),
(89, '2022-04-09 16:54:22', 'Delete User', ' '),
(90, '2022-04-09 16:54:25', 'Delete User', ' '),
(91, '2022-04-09 17:26:44', 'Delete User', 'Maths  5866.00'),
(92, '2022-04-09 17:28:32', 'Delete User', 'Maths  56.00'),
(93, '2022-04-09 18:38:55', 'Delete User', 'Maths  5866.00'),
(94, '2022-04-09 18:44:24', 'Delete User', 'Maths  56.00'),
(95, '2022-04-09 18:51:06', 'Delete User', 'Maths  5866.00'),
(96, '2022-04-09 19:15:21', 'Delete User', 'Art 5866.00'),
(97, '2022-04-09 19:18:16', 'Delete User', 'Art 5866.00'),
(98, '2022-04-09 19:23:42', 'Delete User', 'Art 25.00'),
(99, '2022-04-09 19:26:16', 'Delete User', 'Art 45.00'),
(100, '2022-04-09 19:27:25', 'Delete User', 'Art 49.00'),
(101, '2022-04-09 19:46:07', 'Delete User', 'Art 56.00'),
(102, '2022-04-10 15:31:09', 'Delete User', 'Art 56.00'),
(103, '2022-04-10 15:33:15', 'Delete User', 'Art 56.00'),
(104, '2022-04-10 15:35:57', 'Delete User', 'Art 25.00'),
(105, '2022-04-10 15:38:53', 'Delete User', 'Art 45.00'),
(106, '2022-04-10 15:40:40', 'Delete User', 'Art 45.00'),
(107, '2022-04-10 15:59:41', 'Delete User', 'Art 45.00'),
(108, '2022-04-10 16:00:40', 'Delete User', 'Art 25.00'),
(109, '2022-04-10 16:03:27', 'Delete User', 'Art 45.00'),
(110, '2022-04-10 21:24:36', 'Delete User', 'Art 25.00'),
(111, '2022-04-10 21:26:03', 'Delete User', 'Art 25.00'),
(112, '2022-04-10 22:04:20', 'Delete User', 'Art 25.00'),
(113, '2022-04-10 22:05:25', 'Delete User', 'Art 45.00'),
(114, '2022-04-10 22:07:51', 'Delete User', 'Art 56.00'),
(115, '2022-04-11 23:18:21', 'Delete User', 'Art 45.00'),
(116, '2022-04-11 23:19:26', 'Delete User', 'Art 45.00'),
(117, '2022-04-12 18:54:26', 'Delete User', 'Art 25.00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`, `profile`, `product`) VALUES
(17, 'Kritika', 'Singh', 'Ksingh5', 'kritsingh31@gmail.com', '123456', 'default.jpg', ''),
(18, 'Rich ', 'Calderon', 'Rcalderon', 'rich@gmail.com', '123456', 'default.jpg', ''),
(19, 'Dennis', 'Mitchel', 'DMit', 'Dmit@gmail.com', '123456', 'default.jpg', ''),
(20, 'Alex', 'Rogers', 'ARogers', 'arogers@gmail.com', '123456', '1649129676.jfif', ''),
(22, 'Addy', 'Hastrup', 'Ahastrup', 'addy@gmail.com', '123456', 'default.jpg', ''),
(23, 'Pranoti ', 'Pakhare ', 'ppakhare', 'ppakhare@gmail.com', '123456', 'default.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `productgirl`
--

CREATE TABLE `productgirl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `madein` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productgirl`
--

INSERT INTO `productgirl` (`id`, `name`, `code`, `image`, `price`, `madein`) VALUES
(1, 'Geography', '108', '1532613061.png', 400.00, 'Hybrid'),
(2, 'Economics', '109', '1532613493.png', 357.00, 'Online'),
(3, 'Physics', '110', '1532613523.png', 500.00, 'Online'),
(4, 'Biology', '111', '1532613559.png', 450.00, 'In Person'),
(5, 'Chemistry ', '112', '1532613607.png', 80.00, 'In Person');

-- --------------------------------------------------------

--
-- Table structure for table `productmen`
--

CREATE TABLE `productmen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `madein` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productmen`
--

INSERT INTO `productmen` (`id`, `name`, `code`, `image`, `price`, `madein`) VALUES
(18, 'Algebra', '101', '1532612103.jpg', 200.00, 'Online'),
(19, 'Arithmetic', '102', '1532613837.png', 400.00, 'Online'),
(20, 'Trignometery', '103', '1532614029.png', 80.00, 'In Person'),
(21, 'Geometery', '104', '1532614597.png', 100.00, 'Hybrid'),
(22, 'Ancient History', '105', '1532614680.png', 400.00, 'Hybrid');

-- --------------------------------------------------------

--
-- Table structure for table `userproduct`
--

CREATE TABLE `userproduct` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `madein` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userproduct`
--

INSERT INTO `userproduct` (`id`, `username`, `name`, `code`, `image`, `price`, `madein`) VALUES
(1, 'username', 'cloth', 'tishrt', '1532603828.png', 200.00, 'china');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessesoris`
--
ALTER TABLE `accessesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `productgirl`
--
ALTER TABLE `productgirl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productmen`
--
ALTER TABLE `productmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userproduct`
--
ALTER TABLE `userproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessesoris`
--
ALTER TABLE `accessesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `productgirl`
--
ALTER TABLE `productgirl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productmen`
--
ALTER TABLE `productmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userproduct`
--
ALTER TABLE `userproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
