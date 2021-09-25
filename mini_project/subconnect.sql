-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2021 at 02:24 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `subconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `rollno` varchar(40) collate latin1_general_ci NOT NULL,
  `branch` varchar(11) collate latin1_general_ci NOT NULL,
  `section` varchar(11) collate latin1_general_ci NOT NULL,
  `Marks_out_of` int(40) NOT NULL,
  `Data mining` int(40) NOT NULL,
  `ppl` int(40) NOT NULL,
  `python` int(40) NOT NULL,
  `sppm` int(40) NOT NULL,
  `cloud computing` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`rollno`, `branch`, `section`, `Marks_out_of`, `Data mining`, `ppl`, `python`, `sppm`, `cloud computing`) VALUES
('17C21A0550', 'cse', 'B', 25, 22, 23, 23, 23, 21),
('17C21A0544', 'ece', 'A', 100, 99, 92, 93, 94, 98),
('17C21A0561', 'cse', 'b', 100, 99, 98, 97, 98, 99);
