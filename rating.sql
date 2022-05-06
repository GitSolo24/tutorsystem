-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 08:23 AM
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
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`) VALUES
(1, 'New Balance CK4040 V5', 'Phasellus at scelerisque eros, elementum congue leo.'),
(2, 'SS Players Series - Chest Guard', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(3, 'Shrey Supporters - TRUNK', 'Ut ultrices nibh non orci sollicitudin.'),
(4, 'New Balance - Batting Inners', 'Sed sed magna consequat, cursus felis.'),
(5, 'Gray-Nicolls TEST Arm Guard', 'Etiam vulputate condimentum facilisis.'),
(6, 'SS Ton Vintage MSD 4.0 - Cricket Bat', 'Aliquam nec tortor porttitor, mollis quam sit amet.'),
(7, 'Shrey Pro Guard - Titanium', 'Vivamus lacinia augue id ipsum luctus molestie.');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `title`, `description`, `rating`) VALUES
(1, 'Maths', 'Tutor: Shane Lee', 2),
(2, 'Maths', 'Tutor: Mary Jefferson', 4),
(3, 'History', 'Tutor: Li Kim', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
