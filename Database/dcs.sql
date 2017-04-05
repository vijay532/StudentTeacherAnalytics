-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 12:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `student cocurric`
--

CREATE TABLE `student cocurric` (
  `email` varchar(40) NOT NULL,
  `event1` int(11) NOT NULL,
  `event2` int(11) NOT NULL,
  `event3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student extra curric`
--

CREATE TABLE `student extra curric` (
  `email` varchar(40) NOT NULL,
  `event1` int(11) NOT NULL,
  `event2` int(11) NOT NULL,
  `event3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student profile`
--

CREATE TABLE `student profile` (
  `email` varchar(40) NOT NULL,
  `lib card no` int(11) NOT NULL,
  `first name` varchar(20) NOT NULL,
  `last name` varchar(20) NOT NULL,
  `ph no` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher profile`
--

CREATE TABLE `teacher profile` (
  `email` varchar(40) NOT NULL,
  `first name` varchar(20) NOT NULL,
  `last name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `class1` varchar(4) NOT NULL,
  `class2` varchar(4) NOT NULL,
  `class3` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student cocurric`
--
ALTER TABLE `student cocurric`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student extra curric`
--
ALTER TABLE `student extra curric`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student profile`
--
ALTER TABLE `student profile`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `lid card no` (`lib card no`);

--
-- Indexes for table `teacher profile`
--
ALTER TABLE `teacher profile`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
