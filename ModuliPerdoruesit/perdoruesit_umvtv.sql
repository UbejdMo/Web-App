-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 12:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umvtv`
--

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit_umvtv`
--

CREATE TABLE `perdoruesit_umvtv` (
  `ID_perdoruesi_umvtv` int(11) NOT NULL,
  `perdoruesi_umvtv` varchar(255) NOT NULL,
  `fjalekalimi_umvtv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perdoruesit_umvtv`
--

INSERT INTO `perdoruesit_umvtv` (`ID_perdoruesi_umvtv`, `perdoruesi_umvtv`, `fjalekalimi_umvtv`) VALUES
(1, 'ubejd', 'ubejd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perdoruesit_umvtv`
--
ALTER TABLE `perdoruesit_umvtv`
  ADD PRIMARY KEY (`ID_perdoruesi_umvtv`),
  ADD UNIQUE KEY `perdoruesi_umvtv` (`perdoruesi_umvtv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perdoruesit_umvtv`
--
ALTER TABLE `perdoruesit_umvtv`
  MODIFY `ID_perdoruesi_umvtv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
