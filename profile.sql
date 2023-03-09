-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 12:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file` longblob NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `timestart` time NOT NULL,
  `day` date NOT NULL,
  `collect_alltime` varchar(255) NOT NULL,
  `score` int(50) NOT NULL,
  `timeend` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `Id` int(11) NOT NULL,
  `username` text NOT NULL,
  `Email` text NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`Id`, `username`, `Email`, `Pass`) VALUES
(22, 'Jeeradech ', 'arm_915@hotmail.co.th', '$2y$10$2QsVWkQqrnlDywkgRs5Zy.GN9rmccNpJW3qWAPJc6BFOOBvVKj9dy'),
(23, 'Jeeradech ', 'arm_15@hotmail.co.th', '$2y$10$GlgivFPOBur7OTcjrsG27eUlCIqspUuOPTfh8fTuV2SINxo1ctatK');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `data_Research` text CHARACTER SET utf8 NOT NULL,
  `time_Research` text CHARACTER SET utf8 NOT NULL,
  `month_Research` text CHARACTER SET utf8 NOT NULL,
  `year_Research` text CHARACTER SET utf8 NOT NULL,
  `collect_budget` text NOT NULL,
  `howmuch_budget` text NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Id` int(11) NOT NULL,
  `name_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
  `file` date NOT NULL,
  `picture` date NOT NULL,
  `Data_service` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time_service` varchar(255) CHARACTER SET utf8 NOT NULL,
  `month_service` varchar(255) CHARACTER SET utf8 NOT NULL,
  `year_service` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `Id` int(11) NOT NULL,
  `name_subject` text CHARACTER SET utf8 NOT NULL,
  `start_teach_time` varchar(50) NOT NULL,
  `end_teach_time` varchar(50) NOT NULL,
  `collect_time_teach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`Id`, `name_subject`, `start_teach_time`, `end_teach_time`, `collect_time_teach`) VALUES
(1, 'sd', '11.30', '12.30', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
