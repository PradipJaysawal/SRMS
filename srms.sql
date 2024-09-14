-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 10:15 AM
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
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `image`, `description`) VALUES
(3, 'srms.png', 'smrs');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `grade` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `english` int(11) DEFAULT NULL,
  `maths` int(11) DEFAULT NULL,
  `computer` int(11) DEFAULT NULL,
  `nepali` int(11) DEFAULT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `code`, `name`, `grade`, `marks`, `english`, `maths`, `computer`, `nepali`, `percentage`) VALUES
(1, 312, '', 0, 30, 90, 55, 70, 60, 61),
(7, 456, '', 0, 12, 75, 11, 90, 11, 39.8),
(8, 789, '', 0, 90, 80, 70, 60, 50, 70);

-- --------------------------------------------------------

--
-- Table structure for table `studentclasses`
--

CREATE TABLE `studentclasses` (
  `id` int(11) NOT NULL,
  `num` int(11) DEFAULT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentclasses`
--

INSERT INTO `studentclasses` (`id`, `num`, `grade`) VALUES
(66, 0, '6'),
(68, 2, '12');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `sid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `midname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`sid`, `firstname`, `midname`, `lastname`, `gender`, `address`, `grade`) VALUES
(213, 'Niraj', '', 'G.C', 'Female', 'ktm', 12),
(312, 'Pradip', 'kumar', 'jaysawal', 'Male', 'bht', 12),
(456, 'Dipak', 'kumar', 'jaysawal', 'male', 'bht', 8),
(789, 'sita', '', 'acharya', 'female', 'ktm', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `subjects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `code`, `subjects`) VALUES
(36, 101, 'english'),
(37, 102, 'maths'),
(38, 201, 'computer'),
(39, 202, 'nepali'),
(40, 203, 'marks');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`) VALUES
(10, 'Pradip Kumar Jaysawal', 'Jaysawal@gmail.com', 'd51fec12a7d813a26a841b9bb6cd498e', 'admin'),
(11, 'Sunil Baral', 'sunil@gmail.com', '48ccc87cd7afb85704a63e8d5953d326', 'user'),
(16, 'ram', '123@123.com', '25f9e794323b453885f5181f1b624d0b', 'user'),
(18, '123', '123@123.com', '25f9e794323b453885f5181f1b624d0b', 'user'),
(19, 'niraj gc', 'abc@gmail.com', '$2y$10$dcuJnvJx.AzT/LUMGXIO5Oe8i', 'user'),
(20, '123', '123@123.com', '$2y$10$0Rsxn75tQGcKvIppY9EoTOviH', 'user'),
(21, '123', '123@123.com', '$2y$10$gZQug06qzmpiCse8HUva4eQnz', 'user'),
(22, 'niraj gc', 'abc123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'user'),
(23, 'niraj gc', 'gc123@gmail.com', 'fc353f48fb48c9adbb3dafb2253c198b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`code`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `studentclasses`
--
ALTER TABLE `studentclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `studentclasses`
--
ALTER TABLE `studentclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`code`) REFERENCES `studentinfo` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
