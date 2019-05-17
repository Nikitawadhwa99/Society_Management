-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 08:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Alt_mob` bigint(10) NOT NULL,
  `Adhar_no` varchar(15) NOT NULL,
  `Staff_for` varchar(15) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_staff`
--

INSERT INTO `add_staff` (`Id`, `Name`, `Address`, `Mobile`, `Alt_mob`, `Adhar_no`, `Staff_for`, `Date`) VALUES
(3, 'Saurabh', 'Sindhi colony Jalgao', 7890674587, 7546392846, '456789345', 'Gardening', '2019-03-20'),
(4, 'Ashwini', 'Aadharsh nagar,jalga', 9453687645, 7546392846, '34657382', 'Watering', '2019-03-04'),
(5, 'Heena', 'Kanwar nagar,malkapu', 9873687645, 0, '34657382', 'Milk', '2019-03-29'),
(6, 'Karan', 'Bj nagar,pachora', 8953425473, 0, '34657382', 'Cleaning', '2019-03-02'),
(7, 'Viren', 'Sindhi colony,pachor', 7890674587, 7546392846, '34657382', 'Gatekeeper', '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Email_Id` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `complain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Name`, `Email_Id`, `status`, `complain`) VALUES
(4, 'Nikita', 'nikita@gmail.com', 'Solved', 'water problem'),
(5, 'Nikita', 'nikita@gmail.com', 'Solved', 'cleaning'),
(8, 'Nisha', 'nisha@gmail.com', 'Solved', 'nisha'),
(9, 'Mohit', 'mohit@gmail.com', 'Solved', 'water problem'),
(10, 'Nikita', 'nikita@gmail.com', 'Pending', 'cleaning'),
(11, 'Nikita', 'nikita@gmail.com', 'Solved', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `guest_entry`
--

CREATE TABLE `guest_entry` (
  `Id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Mobile_no` bigint(10) NOT NULL,
  `Going_In` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Check_in` varchar(10) NOT NULL,
  `Check_out` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_entry`
--

INSERT INTO `guest_entry` (`Id`, `Name`, `Mobile_no`, `Going_In`, `Date`, `Check_in`, `Check_out`) VALUES
(6, 'Nikita', 7895634867, 'Monika', '2019-03-14', '12:00', '01:00'),
(7, 'Nisha', 9856376245, 'Nikita', '2019-03-14', '12:00', '01:59'),
(8, 'Mohit', 7806734255, 'Niki', '2019-03-14', '00:00', '13:59'),
(9, 'Mohini', 8975463425, 'Nikita', '2019-03-18', '12:00', '12:00'),
(10, 'Mohit', 8756390234, 'Seema', '2019-03-18', '12:00', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Id` int(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Notice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Id`, `Date`, `Notice`) VALUES
(14, '2019-03-12', 'Tomorrow there will be a meeting at 2:00 pm'),
(15, '2019-03-07', 'Pay your maintenance on time');

-- --------------------------------------------------------

--
-- Table structure for table `pay_maintenance`
--

CREATE TABLE `pay_maintenance` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Mobile_no` bigint(10) NOT NULL,
  `Date` date NOT NULL,
  `Plot_no` bigint(10) NOT NULL,
  `Payment_mode` varchar(10) NOT NULL,
  `Payment` int(11) NOT NULL,
  `Plans` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_maintenance`
--

INSERT INTO `pay_maintenance` (`Id`, `Name`, `Mobile_no`, `Date`, `Plot_no`, `Payment_mode`, `Payment`, `Plans`) VALUES
(1, 'Nikita', 9856376245, '2019-03-15', 112, 'Cash', 6000, '6 month'),
(2, 'Mohit', 7895634867, '2019-03-19', 112, 'Debit card', 1000, '1 month'),
(3, 'Nikita', 9856376245, '2019-03-14', 112, 'Cash', 6000, '6 month');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Mobile_no` bigint(10) NOT NULL,
  `Email_Id` varchar(25) NOT NULL,
  `Usertype` varchar(8) NOT NULL,
  `Hometype` varchar(5) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirm_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Address`, `Mobile_no`, `Email_Id`, `Usertype`, `Hometype`, `password`, `confirm_password`) VALUES
(5, 'Nisha', 'Kanwar nagar,malkapur', 9864210564, 'nisha@gmail.com', 'Renter', '2BHK', 'nisha1234', 'nisha1234'),
(6, 'Mohit', 'Sindhi colony,pachora', 7895634867, 'mohit@gmail.com', 'Renter', '2BHK', 'mohit1234', 'mohit1234'),
(7, 'Harsh', 'Aadharsh nagar,jalgaon', 8975463425, 'harsh@gmail.com', 'Renter', '3BHK', 'harsh1234', 'harsh1234'),
(8, 'Sagar', 'tm nagar,jalgaon', 8756390234, 'sagar@gmail.com', 'Owner', '2BHK', 'sagar1234', 'sagar1234'),
(9, 'Mohini', 'Ganpati nagar,chalisgaon', 7806734255, 'mohini@gmail.com', 'Renter', '2BHK', 'mohini1234', 'mohini1234'),
(10, 'Nikita', 'Sindhi colony Jalgaon', 7895634867, 'nikita@gmail.com', 'Owner', '3BHK', 'nikita1234', 'nikita1234'),
(11, 'Nikita', 'Kanwar nagar,malkapur', 9864210564, 'nikita@gmail.com', 'Renter', '3BHK', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff_entry`
--

CREATE TABLE `staff_entry` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Staff_for` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Check_in` varchar(10) NOT NULL,
  `Check_out` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_entry`
--

INSERT INTO `staff_entry` (`Id`, `Name`, `Staff_for`, `Date`, `Check_in`, `Check_out`) VALUES
(1, 'Saurabh', 'Gardening', '2019-03-17', '9:00', '10:15'),
(2, 'Ashwini', 'Watering', '2019-03-17', '11:00', '11:45'),
(3, 'Heena', 'Milk', '2019-03-17', '10:00', '10:30'),
(4, 'Karan', 'Cleaning', '2019-03-17', '10:00', '11:30'),
(5, 'Saurabh', 'Milk', '2019-03-18', '10:15', '10:45'),
(6, 'Ashwini', 'Milk', '2019-03-18', '11:00', '12:00'),
(7, 'Ashwini', 'Milk', '2019-04-12', '13:11', '23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_staff`
--
ALTER TABLE `add_staff`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guest_entry`
--
ALTER TABLE `guest_entry`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pay_maintenance`
--
ALTER TABLE `pay_maintenance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `staff_entry`
--
ALTER TABLE `staff_entry`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_staff`
--
ALTER TABLE `add_staff`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guest_entry`
--
ALTER TABLE `guest_entry`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pay_maintenance`
--
ALTER TABLE `pay_maintenance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff_entry`
--
ALTER TABLE `staff_entry`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
