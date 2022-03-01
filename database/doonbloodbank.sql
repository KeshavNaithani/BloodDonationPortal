-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 01:03 PM
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
-- Database: `doonbloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `donation_date` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`id`, `name`, `gender`, `email`, `city`, `dob`, `contact_no`, `donation_date`, `password`, `blood_group`) VALUES
(15, 'Keshav Naithani', 'Male', 'keshavnaithani@gmail.com', 'Kargi Grant', '1960-05-05', '7617496791', '2022-03-01', '71b3b26aaa319e0cdf6fdb8429c112b0', 'A-'),
(16, 'Harish Pandey', 'Male', 'harish56@gmail.com', 'Miyanwala', '1972-06-21', '6465668464', '2022-02-26', 'e10adc3949ba59abbe56e057f20f883e', 'B+'),
(17, 'Riya Rawat', 'Female', 'riya123@gmail.com', 'Banjarawala', '1976-11-18', '4988652626', '2022-02-26', 'e10adc3949ba59abbe56e057f20f883e', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
