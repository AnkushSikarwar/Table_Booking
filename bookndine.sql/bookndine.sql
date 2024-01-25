-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 08:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookndine`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`name`, `email`, `password`, `confirmpassword`) VALUES
('Himanshu Porwal ', 'himanshujma2022@gmail.com', '1234567', '1234567'),
('Suhail Ahmad', 'rishuracer7417@gmail.com', '1111', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tableType` varchar(50) NOT NULL,
  `guestNumber` varchar(50) NOT NULL,
  `placement` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `arrivaltime` time(6) NOT NULL,
  `departuretime` time(6) NOT NULL,
  `mobilenumber` varchar(10) NOT NULL,
  `note` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `firstName`, `lastName`, `email`, `tableType`, `guestNumber`, `placement`, `date`, `arrivaltime`, `departuretime`, `mobilenumber`, `note`) VALUES
(9, 'Himanshu', 'Porwal', 'himanshujma2022@gmail.com', 'large', '10', 'Indoor', '2023-07-20', '05:09:00.000000', '06:10:00.000000', '7417545740', 'hii'),
(12, 'Himanshu', 'Porwal', 'himanshujma2022@gmail.com', 'small', '10', 'Indoor', '2023-07-20', '20:12:00.000000', '22:08:00.000000', '7417545740', 'assdd'),
(13, 'Rishabh', 'Porwal', 'himanshujma2022@gmail.com', 'Small', '10', 'rooftop', '2023-07-20', '20:32:00.000000', '20:28:00.000000', '7417545740', '789'),
(14, 'udate', 'Porwal', 'himanshujma2022@gmail.com', 'Small', '10', 'Indoor', '2023-07-20', '02:38:00.000000', '16:38:00.000000', '7417545740', 'jjbb'),
(21, 'Himanshu', 'Porwal', 'himanshujma2022@gmail.com', 'small', '10', 'Indoor', '2023-06-06', '22:00:00.000000', '23:00:00.000000', '7417545740', 'best food serve');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirmpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `confirmpassword`) VALUES
('Hello', 'Hello123@gmail.com', '1234', '1234'),
('mukesh', 'himanshujma1022@gmail.com', '1111', '1111'),
('himanshu', 'himanshujma2021@gmail.com', 'himanshu99', 'himanshu99'),
('Himanshu Porwal ', 'himanshujma2022@gmail.com', '1234567', '1234567'),
('ffrgff', 'iamkaushikmohit009@gmail.com', '123', '123'),
('ffrgff', 'l@gmail.com', '123', '123'),
('ffrgff', 'll@gmail.com', '123', '123'),
('ffrgff', 'mca22.himanshuporwal@bvicam.in', '123', '123'),
('rahul', 'rahulkumawat@gmail.com', '1111', '1111'),
('mukesh', 'rishuracer7417@gmail.com', 'sssss111', '11111'),
('Viper', 's@gmail.com', '123', '123'),
('Himanshu Porwal ', 'vicky@gmail.com', '12345', '12345'),
('vishal ', 'w@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
