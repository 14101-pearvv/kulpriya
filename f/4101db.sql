-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2025 at 06:04 AM
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
-- Database: `4101db`
--
CREATE DATABASE IF NOT EXISTS `4101db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4101db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(6) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_prefix` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_dob` date NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_skills` mediumtext NOT NULL,
  `a_experience` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_prefix`, `a_name`, `a_dob`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, 'Software Developer', 'นางสาว', 'กุลปริยา แก้วตา', '2003-08-14', 'ปริญญาตรี', 'xxxxx', 'xxxxx'),
(2, 'Software Developer', 'นาย', 'รัฐภูมิ แก้วตา', '2006-10-18', 'ปวส.', 'ooooo', 'ooooo'),
(3, 'Software Developer', 'นางสาว', 'กุลปริยา แก้วตา', '2003-08-14', 'ปริญญาตรี', 'xxx', 'xxx'),
(4, 'Software Developer', 'นางสาว', 'กุลปริยา แก้วตา', '2003-08-14', 'ปริญญาตรี', 'xxx', 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(6) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_color`, `r_major`) VALUES
(1, 'กุลปริยา แก้วตา', '', 0, '', ''),
(2, 'กุลปริยา แก้วตา', '', 0, '', ''),
(3, 'ชยานันท์ จาง', '', 0, '', ''),
(4, 'ชยานนท์ จาง', '', 0, '', ''),
(5, 'สวัสดี สวีดัด', '0315792468', 0, '', ''),
(6, 'นิรดา อัครนันทสกุล', '0147258369', 170, '#8e0b51', 'การตลาด'),
(7, 'ภูริภัทร อัครนันทสกุล', '0963852741', 180, '#1e6c14', 'คอมพิวเตอร์ธุรกิจ'),
(8, 'กุลปริยา แก้วตา', '0610313362', 160, '#258bb6', 'คอมพิวเตอร์ธุรกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
