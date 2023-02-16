-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 06:38 AM
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
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Name` varchar(30) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Doc_name` varchar(30) NOT NULL,
  `Appointment_date` varchar(15) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Terms` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Age`, `Gender`, `Email`, `Mobile`, `Doc_name`, `Appointment_date`, `Description`, `Terms`) VALUES
('Sazzad', 24, 'Male', 'xyz@yahoo.com', 88012762, 'Dr. Kuddus', '2022-12-30', 'heart attack', 'Yes'),
('Sazzad', 25, 'Male', 'abc@gmail.com', 88032424, 'Dr. Mofiz', '2022-12-29', '', 'Yes'),
('Zihad Hossain ', 24, 'Male', 'abc@gamil.com', 880734134, 'Dr. Abul', '2022-12-29', 'Matha betha', 'Yes'),
('Zihad Hossain Foysal', 25, 'Male', 'Zihad71@gmail.com', 2147483647, 'Dr. Sokhina', '2022-12-30', 'haddi betha', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
