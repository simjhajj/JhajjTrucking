-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 09:14 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `truckdriver`
--

CREATE TABLE `truckdriver` (
  `driver_ID` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `licenseNumber` varchar(20) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `vehicleYear` date NOT NULL,
  `model` varchar(40) NOT NULL,
  `mileage` bigint(10) NOT NULL,
  `registrationNumber` int(10) NOT NULL,
  `capacity` bigint(10) NOT NULL,
  `engineType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truckdriver`
--

INSERT INTO `truckdriver` (`driver_ID`, `fname`, `lname`, `licenseNumber`, `phoneNumber`, `email`, `vehicleYear`, `model`, `mileage`, `registrationNumber`, `capacity`, `engineType`) VALUES
(63, 'Peter', 'William', 'L4T21097', 2147483647, 'peterwilliam@gmail.com', '2023-06-28', 'Peterbilt 389', 564, 6545, 3546, 'Diesel'),
(64, 'Peter', 'William', 'L4T21097', 2147483647, 'peterwilliam@gmail.com', '2023-06-28', 'Peterbilt 389', 564, 6545, 3546, 'Diesel'),
(65, 'Peter', 'William', 'L4T21097', 2147483647, 'peterwilliam@gmail.com', '2023-06-28', 'Peterbilt 389', 564, 6545, 3546, 'Diesel'),
(66, 'Harry', 'Potter', 'T21789', 2147483647, 'johnsmith@gmail.com', '2023-10-03', 'Peterbilt 389', 564, 0, 0, ''),
(67, 'daniel', 'black', 'XCFSTRY780', 2147483647, 'dradcliff@yahoo.com', '2023-07-05', 'Peterbilt 389', 564, 564, 654, 'Diesel'),
(68, 'daniel', 'black', 'XCFSTRY780', 2147483647, 'dradcliff@yahoo.com', '2023-07-05', 'Peterbilt 389', 564, 564, 654, 'Diesel'),
(69, 'Elvin', 'gray', 'XCFSTRY780', 2147483647, 'elvgray@gmail.com', '2023-09-07', 'Peterbilt 389', 564, 456, 465, 'Diesel'),
(70, 'Elvin', 'gray', 'XCFSTRY780', 2147483647, 'elvgray@gmail.com', '2023-09-07', 'Peterbilt 389', 564, 456, 465, 'Diesel'),
(71, 'Elvin', 'gray', 'XCFSTRY780', 2147483647, 'elvgray@gmail.com', '2023-09-07', 'Peterbilt 389', 564, 456, 465, 'Diesel'),
(72, 'Lily', 'Blossom', 'CYUF76454', 2147483647, 'lily@gmail.com', '0000-00-00', '', 0, 0, 0, ''),
(73, 'Lily', 'Blossom', 'CYUF76454', 2147483647, 'lily@gmail.com', '0000-00-00', '', 0, 0, 0, ''),
(74, 'hen', 'black', 'XCFSTRY780', 2147483647, 'henred@gmail.com', '2023-10-04', 'Peterbilt 389', 45, 65, 456, 'Diesel'),
(75, '', '', '', 0, '', '0000-00-00', '', 0, 0, 0, ''),
(76, 'John', 'gray', 'L4T21097', 0, '', '0000-00-00', '', 0, 0, 0, ''),
(77, 'John', 'gray', 'L4T21097', 0, '', '0000-00-00', '', 0, 0, 0, ''),
(78, 'Peter', 'William', 'L4T21097', 2147483647, 'johnsmith@gmail.com', '2023-10-04', 'Peterbilt 389', 423, 2432, 354, 'Diesel'),
(79, 'Hermione', 'Granger', 'L4T21097', 2147483647, 'hermionegranger@gmail.com', '2023-10-01', 'Peterbilt 389', 4233, 24322, 35432, 'Petrol'),
(80, 'harvey', 'frank', 'T21789', 2147483647, 'harveyfrank@gmail.com', '2023-10-02', 'Peterbilt 389', 23, 243, 453, 'Diesel'),
(81, 'Jimmy', 'Choo', 'L4T21097', 2147483647, 'jimmychoo@gmail.com', '2014-01-28', 'Peterbilt 109', 123424, 324235, 3000, 'Petrol'),
(82, 'kim', 'gray', 'L4T21097', 2147483647, 'johnsmith@gmail.com', '2023-10-04', 'Peterbilt 389', 435, 5346, 435, 'Diesel'),
(83, 'Albert', 'William', 'CFSE35436', 2147483647, 'albertwilliam@gmail.com', '2023-10-04', 'Peterbilt 389', 23454, 32645, 3000, 'Petrol'),
(84, 'ash', 'gray', 'L4T21097', 2147483647, 'johnsmith@gmail.com', '2023-10-04', 'Peterbilt 389', 234, 243, 234, 'Diesel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `truckdriver`
--
ALTER TABLE `truckdriver`
  ADD PRIMARY KEY (`driver_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `truckdriver`
--
ALTER TABLE `truckdriver`
  MODIFY `driver_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
