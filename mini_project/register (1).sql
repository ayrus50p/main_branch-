-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2021 at 02:23 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(40) NOT NULL,
  `username` varchar(56) collate latin1_general_ci NOT NULL,
  `passwor` varchar(56) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `username`, `passwor`) VALUES
(1, 'admin23', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `register2`
--

CREATE TABLE `register2` (
  `username` varchar(40) collate latin1_general_ci NOT NULL,
  `firstname` varchar(40) collate latin1_general_ci NOT NULL,
  `lastname` varchar(40) collate latin1_general_ci NOT NULL,
  `rollno` varchar(40) collate latin1_general_ci NOT NULL,
  `email` varchar(20) collate latin1_general_ci NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `passwor` varchar(11) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `register2`
--

INSERT INTO `register2` (`username`, `firstname`, `lastname`, `rollno`, `email`, `phonenumber`, `passwor`) VALUES
('hello', 'hankar', 'hack', '17C21A0544', 'wer@21223', 42342342, 'qazxsw'),
('admin', 'surya', 'prasad', '17C21A0550', 'suryaprasad@gmail.co', 2147483647, '1235'),
('surya', 's.surya', 'prasad', '17C21A0550', 'surya@gmail.com', 2147483647, '12345'),
('ravi', 'b.ravi', 'kumar', '17C21A0561', 'ravi@123', 1234567891, 'ravi'),
('', '', '', '', '', 0, ''),
('asagi', 'prasad', 'prasad', '17c21A0550', 'surya@gmail.com', 2311445, 'suryra');
