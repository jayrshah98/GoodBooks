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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Cost` int(10) NOT NULL,
  `Edition` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Semester` int(30) NOT NULL,
  `Book_id` int(20) NOT NULL,
  `U_id` int(30) NOT NULL,
  `book_img` varchar(500) CHARACTER SET utf8 NOT NULL,
  `book_quantity` mediumint(5) NOT NULL,
  `book_status` enum('0','1') CHARACTER SET utf8 NOT NULL COMMENT '0-active,1-inactive'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Name`, `Cost`, `Edition`, `Author`, `Semester`, `Book_id`, `U_id`, `book_img`, `book_quantity`, `book_status`) VALUES
('Applied Mathematics-3', 280, '3', 'G.V. Kumbhojkar', 3, 1, 1, 'img_gb/applied-maths-3-sem-3.jpg', 10, '1'),
('Applied Mathematics-2', 320, '1', 'G.V. Kumbhojkar', 2, 2, 1, 'img_gb/Applied-mathematics-2.jpg', 10, '1'),
('Applied Mathematics-1', 300, '4', 'G.V. Kumbhojkar', 1, 3, 1, 'img_gb/AM-1-4thEdition.jpg', 10, '1'),
('Applied Mathematics-4', 300, '2', 'G.V. Kumbhojkar', 4, 4, 1, 'img_gb/Applied-Mathematics-4-G-V-Kumbhojkar.jpg', 10, '1'),
('Applied Physics-1', 180, '3', 'Dr. I.A Shaikh', 2, 5, 2, 'img_gb/Applied-physics-1-edition2015.jpg', 10, '1'),
('Applied Physics-2', 180, '2', 'Dr. Swati Bawra', 2, 6, 3, 'img_gb/Applied-physics-2-2ndEdition.jpg', 10, '1'),
('Software engineering techmax', 170, '1', 'M.A Ansari', 6, 7, 3, 'img_gb/SE-edition2-sem6.png', 10, '1'),
('Software Engineering techmax', 180, '1', 'M.A Ansari', 6, 8, 4, 'img_gb/SE-edition2-sem6.png', 10, '1'),
('Applied Mathematics-1', 250, '4', 'G.V. Kumbhojkar', 1, 9, 5, 'img_gb/gv_kumbhojkar_applied_mathematics_1.jpg', 10, '1'),
('Applied Mathematics-4', 280, '3', 'G.V. Kumbhojkar', 4, 10, 5, 'img_gb/Applied-Mathematics-4-G-V-Kumbhojkar.jpg', 10, '1'),
('Theoretical Computer Science techmax', 290, '1', 'Dilip Kumar Sultania', 4, 11, 6, 'img_gb/Theoretical-Computer-Science.png', 10, '1'),
('Theoretical Computer Science techmax', 270, '1', 'Dilip Kumar Sultania', 4, 12, 7, 'img_gb/Theoretical-Computer-Science.png', 10, '1'),
('Applied Mathematics-2', 300, '1', 'G.V. Kumbhojkar', 2, 13, 7, 'img_gb/Applied-mathematics-2.jpg', 10, '1'),
('Applied Mathematics-3', 290, '1', 'G.V. Kumbhojkar', 3, 14, 6, 'img_gb/applied-maths-3-sem-3.jpg', 10, '1'),
('Theoretical Computer Science techmax', 270, '1', 'Dilip Kumar Sultania', 4, 15, 8, 'img_gb/Theoretical-Computer-Science.png', 10, '1'),
('Applied Mathematics-4', 300, '3', 'G.V. Kumbhojkar', 4, 16, 8, 'img_gb/Applied-Mathematics-4-G-V-Kumbhojkar.jpg', 10, '1'),
('Applied Mathematics-1', 280, '2', 'G.V. Kumbhojkar', 1, 17, 8, 'img_gb/gv_kumbhojkar_applied_mathematics_1.jpg', 10, '1'),
('Software engineering techmax', 180, '2', 'A.A Puntambekar', 6, 18, 8, 'img_gb/SE-edition2-sem6.png', 10, '1'),
('Data Communication and Networking', 350, '4', 'B A Forouzan', 4, 19, 1, 'img_gb/forouzan.jpg', 10, '1'),
('Fluid Mechanics', 300, '4', 'Dr. Sadhu Singh', 3, 20, 1, 'img_gb/fluid.jpg', 10, '1'),
('Engineering Thermodynamics', 500, '4', 'P K NAG', 4, 22, 1, 'img_gb/thermo.jpg', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_id`),
  ADD KEY `foreign key` (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
