-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2021 at 02:25 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `result2`
--

CREATE TABLE `result2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) collate latin1_general_ci NOT NULL,
  `roll` varchar(11) collate latin1_general_ci NOT NULL,
  `sessio` varchar(34) collate latin1_general_ci NOT NULL,
  `class` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `social` int(11) NOT NULL,
  `ict` int(11) NOT NULL,
  `gpa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `result2`
--

INSERT INTO `result2` (`id`, `name`, `roll`, `sessio`, `class`, `language`, `math`, `physics`, `chemistry`, `social`, `ict`, `gpa`) VALUES
(2134, 'surya', '550', 'final', 15, 2, 23, 42, 34, 44, 56, 45);
