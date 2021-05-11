-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 04:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrsppdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculationstbl`
--

CREATE TABLE `calculationstbl` (
  `unitSales` int(11) NOT NULL,
  `costInsurer` int(11) NOT NULL,
  `numIncident` int(11) NOT NULL,
  `numVehicles` int(11) NOT NULL,
  `totDistance` int(11) NOT NULL,
  `preInsurance` int(11) NOT NULL,
  `excClaim` int(11) NOT NULL,
  `returnOn` int(11) NOT NULL,
  `grossAnual` int(11) NOT NULL,
  `avgUnit` int(11) NOT NULL,
  `greyFleet` int(11) NOT NULL,
  `liableFleet` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculationstbl`
--

INSERT INTO `calculationstbl` (`unitSales`, `costInsurer`, `numIncident`, `numVehicles`, `totDistance`, `preInsurance`, `excClaim`, `returnOn`, `grossAnual`, `avgUnit`, `greyFleet`, `liableFleet`, `ID`) VALUES
(546456, 7457457, 768678, 9679, 9679, 67, 679679, 97, 678678, 67867, 678678, 686786, 1),
(4500000, 12000, 111, 50, 2147483647, 50000, 850, 15, 150000, 60000, 15, 500000, 2),
(678678, 67867, 8678, 678, 678, 68, 8678, 67867, 8678, 67868, 67867, 86, 3),
(123, 132, 12312, 312, 123, 312, 12312, 31, 2312, 123, 123, 123, 4),
(605, 2, 456, 456, 6456, 456, 534, 345, 324, 234, 234, 452, 525),
(100000, 1, 43534, 34534, 534534, 5345, 345345, 34534, 43534, 3534, 34534, 345345, 526),
(98, 678678, 75677, 657657, 56767, 5675675, 67575, 75757, 57575, 75757, 5757, 57757, 527),
(98, 678678, 75677, 657657, 56767, 5675675, 67575, 75757, 57575, 75757, 5757, 57757, 528),
(567567, 56756, 657, 567, 657657, 56756, 575, 756, 7, 7567, 567, 56, 529),
(150, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 530),
(4500, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 531),
(56346, 5646, 456, 5464, 6546, 45645, 6456, 456546, 546, 546, 5464, 546, 532),
(787997, 10, 4535, 3453, 4534, 5435, 353, 535, 43543, 5345, 3534, 5345, 533);

-- --------------------------------------------------------

--
-- Table structure for table `firstdatatbl`
--

CREATE TABLE `firstdatatbl` (
  `preVehi` int(11) NOT NULL,
  `profitsFrm` int(11) NOT NULL,
  `overClaim` int(11) NOT NULL,
  `kmperclaim` int(11) NOT NULL,
  `ovrClaim` int(11) NOT NULL,
  `dirCost` int(11) NOT NULL,
  `percentGrossdir` int(11) NOT NULL,
  `percentProfdir` int(11) NOT NULL,
  `indCost` int(11) NOT NULL,
  `percentGrossind` int(11) NOT NULL,
  `percentProfind` int(11) NOT NULL,
  `estCostfleet` int(11) NOT NULL,
  `percentGrossfleet` int(11) NOT NULL,
  `percentProffleet` int(11) NOT NULL,
  `allvehCost` int(11) NOT NULL,
  `percentGrossallveh` int(11) NOT NULL,
  `percentProfallveh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_password`) VALUES
(1, 'Hello', 'World', 'helloworld@gmail.com', 'Admin', 'test123'),
(2, 'Shanon', 'Teach', 'shanon@gmail.com', 'Admin', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `sector` varchar(254) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `sector`, `revenue`) VALUES
(41, 'Public Transportation', 60000),
(42, '0', 5000),
(43, '0', 5000),
(44, '0', 5000),
(45, '0', 5000),
(46, '0', 5000),
(47, 'Services - Banking and finance', 7600),
(48, 'Services - Banking and finance', 2147483647),
(49, 'Public Transportation', 5000),
(50, 'Services - Utilities', 5000),
(51, 'Transport - interstate and heavy haulage', 8777778),
(52, 'Public Transportation', 2147483647),
(53, 'Transport - interstate and heavy haulage', 2147483647),
(54, 'Construction and associated trades', 98000),
(55, 'Transport - interstate haulage and distribution', 800000000),
(56, 'Transport - light haulage and freight', 768768),
(57, 'Transport - interstate and heavy haulage', 9888);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculationstbl`
--
ALTER TABLE `calculationstbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculationstbl`
--
ALTER TABLE `calculationstbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=534;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
