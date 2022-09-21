-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 06:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career_boosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `course_c` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `relishion` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_pass` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `name`, `father_name`, `course_c`, `age`, `cnic`, `relishion`, `gender`, `phone_number`, `email`, `password_pass`, `address`) VALUES
(1, 'Moheez', 'Abdul-razzaq', 'web-developmet', '23', '42301-123456-7', 'islam', 'male', '03362464318', 'moheez123@gmail.com', '1234', 'lyari,karachi'),
(2, 'Rehman', 'Tariq', 'Graphic-designig', '21', '42301-129056-7', 'islam', 'male', '03339876453', 'rehman123@gmail.com', '1234', 'lyari,karachi'),
(3, 'Muzamil', 'Ahmed', 'Ms-office', '22', '42301-149052-7', 'islam', 'male', '03362964332', 'muzamil@gmail.com', '1567', 'lyari,karachi'),
(4, 'Saira', 'Razza', 'Graphic-designig', '21', '42301-129056-7', 'islam', 'Female', '02362364518', 'saira12@gamil.com', '0987', 'lyari,karachi');

-- --------------------------------------------------------

--
-- Table structure for table `student_info4`
--

CREATE TABLE `student_info4` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info4`
--

INSERT INTO `student_info4` (`id`, `username`, `email`, `password_pass`) VALUES
(1, 'Moheez', 'moheez123@gmail.com', '1234'),
(2, 'Muzamil', 'muzamil123@gmail.com', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `v_code`
--

CREATE TABLE `v_code` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info4`
--
ALTER TABLE `student_info4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `v_code`
--
ALTER TABLE `v_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info4`
--
ALTER TABLE `student_info4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `v_code`
--
ALTER TABLE `v_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
