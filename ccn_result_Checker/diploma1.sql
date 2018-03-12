-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2015 at 06:17 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultccn`
--

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE IF NOT EXISTS `diploma` (
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `father` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id` int(15) DEFAULT NULL,
  `semester` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `technology` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `session` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gpa` varchar(11) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`name`, `father`, `id`, `semester`, `technology`, `session`, `gpa`) VALUES
('Hridoy Chandra Das', 'Bissanath Chandra Das', 1113089, '3rd semester', 'Computer', '2013-14', '4.00'),
('Firoj Uddin', 'Kamal Uddin', 1113050, '3rd semester', 'Computer', '2013-14', '4.00'),
('Jahidul Islam Robin', 'Nurul Islam', 1113065, '3rd semester', 'Computer', '2013-14', '4.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
