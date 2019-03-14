-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 06:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `U_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`, `Contact`, `U_id`) VALUES
('jay', 'jay.shah7@somaiya.edu', '123', '9879643256', 1),
('Raj', 'raj.veera@gmail.com', 'asdf', '9745124585', 2),
('Shivam', 'shivam.mahajan@somaiya.edu', 'qwert', '9022349618', 3),
('Rutwij', 'rutwij.daptadar@somaiya.edu', 'aqswd', '9172316610', 4),
('dhruvit', 'dhruivit98@gmail.com', 'dhruvit', '9574125486', 5),
('sangram', 'sangram.desai@somaiya.edu', 'desai', '8745216983', 6),
('vatsal', 'vatsaldoshi@gmail.com', 'vatsal', '7584126589', 7),
('gaurav', 'gaurav007@gmail.com', 'gaurav98', '9451236547', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
