-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 09:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `anounce`
--

CREATE TABLE `anounce` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `anounce` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anounce`
--

INSERT INTO `anounce` VALUES(5, '2018-09-17', 'morning');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tel` int(10) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` VALUES(2, 'diane', 787516973, 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `me1` varchar(87) NOT NULL,
  `id1` int(46) NOT NULL,
  `intara` varchar(45) NOT NULL,
  `akarere` varchar(46) NOT NULL,
  `umurenge` varchar(46) NOT NULL,
  `akagari` varchar(56) NOT NULL,
  `umudugudu` varchar(65) NOT NULL,
  `telefoni` int(12) NOT NULL,
  `upi` int(34) NOT NULL,
  `ibisobanuro` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` VALUES(14, 'derrick', 86876, 'Kigali', 'Gasabo', 'vhgvhg', 'gvghv', 'gvhg', 675675, 87587, 'hvgyvy');
INSERT INTO `form1` VALUES(15, 'DIANE', 2147483647, 'South', 'Nyagatare', 'kimironko', 'nyagatovu', 'ijabiro', 788437453, 2147483647, '............');
INSERT INTO `form1` VALUES(17, 'ROMA', 87687, 'North', 'Kicukiro', 'gvyyt', 'gvy', 'gyty', 7867687, 765675, 'ytftyft');
INSERT INTO `form1` VALUES(22, 'ombeni', 2147483647, 'South', 'Nyagatare', 'ydgfetfretgrf', 'egryerferg', 'gegfegf', 2147483647, 2147483647, 'gydgeftef');
INSERT INTO `form1` VALUES(27, 'fgtftetf', 2147483647, 'North', 'Ngoma', 'tyfrfr', 'tftyfr', 'ftfr', 2147483647, 2147483647, 'fdftdr');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` VALUES(1, 'derrick', '119900');

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` VALUES(1, 'dizzo', '119900');
INSERT INTO `loginuser` VALUES(18, 'joyce', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sdate`
--

CREATE TABLE `sdate` (
  `id` int(11) NOT NULL,
  `username` varchar(54) NOT NULL,
  `startdate` datetime DEFAULT NULL,
  `edate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdate`
--

INSERT INTO `sdate` VALUES(1, 'derrick', '2018-09-10 09:13:44', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anounce`
--
ALTER TABLE `anounce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdate`
--
ALTER TABLE `sdate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anounce`
--
ALTER TABLE `anounce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sdate`
--
ALTER TABLE `sdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
