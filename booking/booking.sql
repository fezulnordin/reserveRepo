-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 04:45 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(6, 'faizul', '1234'),
(7, 'Aiman', '1234'),
(8, 'Hafiz', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `venuebook`
--

CREATE TABLE `venuebook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `Matric` text,
  `Email` varchar(50) DEFAULT NULL,
  `Userstatus` varchar(30) DEFAULT NULL,
  `Kulliyyah` varchar(30) DEFAULT NULL,
  `Phone` text,
  `Venue` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `Timein` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venuebook`
--

INSERT INTO `venuebook` (`id`, `Title`, `FName`, `Matric`, `Email`, `Userstatus`, `Kulliyyah`, `Phone`, `Venue`, `Date`, `stat`, `Timein`) VALUES
(152, 'Br.', 'Fattah Amin', '1232343', 'fattahamin@gmail.com', 'Student', 'KLM', '0123656989', 'Futsal', '2017-12-21', NULL, '0800'),
(153, 'Br.', 'Aiman Farhan', '1228874', 'aimanfarhan@gmail.com', 'Student', 'ENGINEERING', '0123656989', 'Futsal', '2017-12-21', NULL, '0900'),
(154, 'Br.', 'Hafiz Mokhtar', '1227853', 'hafizmokhtar@gmail.com', 'Student', 'ENGINEERING', '0125698989', 'Futsal', '2017-12-21', NULL, '1000'),
(155, 'Br.', 'Faizul Nordin', '1221625', 'fezulnordin@gmail.com', 'Student', 'ENGINEERING', '0193012934', 'Futsal', '2017-12-21', NULL, '1100'),
(156, 'Br.', 'Ahmad Azam', '1223659', 'ahmadazam@gmail.com', 'Student', 'ENGINEERING', '01912334345', 'Futsal', '2017-12-21', NULL, '1200'),
(157, 'Br.', 'Zikri Zahar', '1224567', 'Zikrizahar@gmail.com', 'Student', 'ENGINEERING', '0157878845', 'Handball', '2017-12-21', NULL, '1400'),
(158, 'Br.', 'Aiez Anzac', '1223455', 'aiezanzac@gmail.com', 'Student', 'IRKHS', '0189656325', 'Football', '2017-12-22', NULL, '2100'),
(159, 'Br.', 'Hafiz Mokhtar', '1227853', 'hafizmokhtar@gmail.com', 'Student', 'ENGINEERING', '0189656325', 'Rugby', '2017-12-23', NULL, '1700'),
(160, 'Br.', 'Aaron Aziz', '1345326', 'aaronklgangster@gmail.com', 'Student', 'ENGINEERING', '0124578965', 'Futsal', '2017-12-21', NULL, '1300'),
(161, 'Mrs.', 'Neelofa', '1216969', 'neelofa@gmail.com', 'Student', 'ENMS', '0163548756', 'Volleyball', '2017-12-24', NULL, '2000'),
(162, 'Br.', 'Ahmad Kasan', '1221343', 'ahmadkasan@gmail.com', 'Student', 'ARCHITECTURE', '0132565235', 'Volleyball', '2018-04-20', NULL, '1400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venuebook`
--
ALTER TABLE `venuebook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `venuebook`
--
ALTER TABLE `venuebook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
