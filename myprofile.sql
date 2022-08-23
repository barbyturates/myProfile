-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 08:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(25) NOT NULL,
  `admin_lname` varchar(25) NOT NULL,
  `admin_uname` varchar(25) NOT NULL,
  `admin_pword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_uname`, `admin_pword`) VALUES
(1, 'Franze Dale', 'Barbosa', 'fdbarbosa', '$2y$10$JlcLASOznGT.t091qCYrx.3bQEiCLPjNkyGUP6OeYhFEwhIlgPU7a');

-- --------------------------------------------------------

--
-- Table structure for table `objectives`
--

CREATE TABLE `objectives` (
  `objective_id` int(11) NOT NULL,
  `objective_name` varchar(100) NOT NULL,
  `objective_desc` longtext NOT NULL,
  `objective_reason` longtext NOT NULL,
  `objective_tdate` varchar(25) NOT NULL,
  `objective_cdate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`objective_id`, `objective_name`, `objective_desc`, `objective_reason`, `objective_tdate`, `objective_cdate`) VALUES
(1, 'Academic Award - With Honors', 'Jose Rizal Institute Orion - Senior High School', '', '', 'April 2018'),
(2, 'DOST Scholarship Award', 'DOST Bataan Office - RA 7687 Scholarship', '', '', 'June 2018'),
(3, 'Academic Award - Dean`s Lister', 'Bataan Peninsula State University Main Campus - 2nd Semester of A.Y. 2018-2019', '', '', 'August 2020'),
(4, 'Academic Award - Dean`s Lister', 'Bataan Peninsula State University Main Campus - 1st Semester of A.Y. 2019-2020', '', '', 'August 2020'),
(5, 'Academic Award - Dean`s Lister', 'Bataan Peninsula State University Main Campus - 2nd Semester of A.Y. 2019-2020', '', '', 'July 2021'),
(6, 'Academic Award - Dean`s Lister', 'Bataan Peninsula State University Main Campus - 1st Semester of A.Y. 2020-2021', '', '', 'July 2021'),
(7, 'Academic Award - Dean`s Lister', 'Bataan Peninsula State University Main Campus - 2nd Semester of A.Y. 2020-2021', '', '', 'August 2022'),
(8, 'Academic Award - Dean`s Lister', 'Bataan Peninsula State University Main Campus - 1st Semester of A.Y. 2021-2022', '', '', 'August 2022'),
(9, 'Secure a Job', 'To be able to get an entry-level job that will allow me to share and improve my expertise while garnering invaluable skills and work experiences', 'To provide for my family whilst honing my professional skills', 'July 2022', 'September 2022'),
(10, 'Learn more Java and Python', 'In the future, I hope to improve on and learn more Java and Python software development.', 'I think these two are the most valuable languages to specialize on.', 'September 2022', 'September 2024'),
(11, 'Learn more about Network Principles and Frameworks', 'I would like to gather more intermediate knowledge on networks and network programming.', 'I only have basic knowledge on network principles and frameworks.', 'November 2022', 'November 2023'),
(15, 'test', 'test', 'test', 'August 2022', 'August 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`objective_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `objective_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
