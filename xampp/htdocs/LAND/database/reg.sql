-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 11:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `me1` varchar(56) NOT NULL,
  `irangamimerere` varchar(255) NOT NULL,
  `id1` int(46) NOT NULL,
  `akarere` varchar(56) NOT NULL,
  `umurenge` varchar(56) NOT NULL,
  `akagari` varchar(56) NOT NULL,
  `umudugudu` varchar(56) NOT NULL,
  `telefoni` int(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `upi` int(56) NOT NULL,
  `intara` varchar(56) NOT NULL,
  `akarere3` varchar(56) NOT NULL,
  `umurenge3` varchar(56) NOT NULL,
  `akagari3` varchar(56) NOT NULL,
  `ibisobanuro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `me1`, `irangamimerere`, `id1`, `akarere`, `umurenge`, `akagari`, `umudugudu`, `telefoni`, `email`, `upi`, `intara`, `akarere3`, `umurenge3`, `akagari3`, `ibisobanuro`) VALUES
(1, 'derrick', 'single', 2147483647, 'gasabo', 'kimironko', 'dfdgdsf', 'ghdht', 0, '', 10, 'Kigali', 'fsghfrh', 'fhhgtfh', 'dehtrh', 'dtrhtrhj');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(39) NOT NULL,
  `me1` varchar(56) NOT NULL,
  `irangamimerere` varchar(56) NOT NULL,
  `id1` int(56) NOT NULL,
  `akarere` varchar(56) NOT NULL,
  `umurenge` varchar(56) NOT NULL,
  `akagari` varchar(56) NOT NULL,
  `umudugudu` varchar(56) NOT NULL,
  `telefoni` int(12) NOT NULL,
  `email` varchar(56) NOT NULL,
  `upi1` int(20) NOT NULL,
  `upi2` int(20) NOT NULL,
  `upi3` int(20) NOT NULL,
  `intara` varchar(10) NOT NULL,
  `akarere3` varchar(20) NOT NULL,
  `umurenge3` varchar(25) NOT NULL,
  `akagari3` varchar(25) NOT NULL,
  `ibisobanuro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `me1`, `irangamimerere`, `id1`, `akarere`, `umurenge`, `akagari`, `umudugudu`, `telefoni`, `email`, `upi1`, `upi2`, `upi3`, `intara`, `akarere3`, `umurenge3`, `akagari3`, `ibisobanuro`) VALUES
(0, 'fdghjd', 'gfjf', 0, '', '', '', '', 0, '', 10, 9, 9, 'Kigali', 'dfgrfb', 'htgrtg', 'gfgrgr', 'gregrgt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
