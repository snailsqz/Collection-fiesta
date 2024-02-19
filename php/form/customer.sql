-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 05:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customertest`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `major` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `firstname`, `lastname`, `email`, `telephone`, `age`, `address`, `gender`, `major`) VALUES
('123534', 'Pawee', 'Indulakshana', 'snailsqz@gmail.com', '0954545454', '12', 'axdasdasdasd', 'Male', 'IT'),
('12353412', 'Pawee', 'Indulakshana', 'snailsqz@gmail.com', '0954545454', '12', 'axdasdasdasd', 'Male', 'IT'),
('486458', 'Boss', 'Nuttawat', 'nuttawat@gmail.com', '0521236879', '25', 'erwr3453543534543', 'Female', 'INET'),
('5645231316', 'Pawee', 'Indulakshana', 'snailsqz@gmail.com', '095-454-5454', '4', 'dfgsgdfg', 'Other', 'IT'),
('6456546', 'Pawee', 'Indulakshana', 'snailsqz@gmail.com', '0954545454', '10', 'dsadadasd', 'Female', 'IT'),
('867834', 'Robert', 'Pakinson', 'pakinson@gmail.com', '0659841254', '24', 'adfdsfsdgsdfgsdfgfeg', 'Male', 'CA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
