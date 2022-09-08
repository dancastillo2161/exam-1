-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 07:21 PM
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
-- Database: `interviewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_table`
--

CREATE TABLE `applicant_table` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `cellphone_no` varchar(20) DEFAULT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant_table`
--

INSERT INTO `applicant_table` (`id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `gender`, `cellphone_no`, `address`) VALUES
(15, 'Dante', 'Paris', 'Castillo', '1996-04-03', 'Male', '09567112959', '7825 Jb Roxas St, Olympia, Makati City');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ralph', '$2y$10$mW41xVUA8wIaCXqkJqk0N.YAw78sW49LpNRhn.pmctbkuj9mHjRwm', '2022-08-31 15:07:45'),
(2, 'dandan', '$2y$10$Y9gsG8BIwwiCbkiL.uLV5.8j51EgVXhV/vJcIjrEg0Hb1a6AChnQ2', '2022-09-02 23:57:23'),
(3, 'admin', '$2y$10$kAyXa/5ooXf/Cz1i5YPWlu9gpRlG.ZxT5swKb4KgZd146F126X4pS', '2022-09-08 22:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_table`
--
ALTER TABLE `applicant_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_table`
--
ALTER TABLE `applicant_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
