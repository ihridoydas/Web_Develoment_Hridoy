
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2015 at 03:12 AM
-- Server version: 5.1.58
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5494546_resccn`
--

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `name` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `father` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `id` int(15) DEFAULT NULL,
  `semester` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `technology` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `session` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `gpa` varchar(11) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` VALUES('Hridoy Chandra Das', 'Bishownath Chandra das', 1113089, '3rd Semester', 'Computer', '2013-14', '4.00');
