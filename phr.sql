-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 04:53 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phr`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_record`
--

CREATE TABLE `doctor_record` (
  `r_id` int(255) NOT NULL,
  `d_id` int(255) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `Specialization` varchar(200) NOT NULL,
  `hospitals/clinics` varchar(200) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_health_record`
--

CREATE TABLE `patient_health_record` (
  `r_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `height` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `allergies` varchar(1000) NOT NULL,
  `insurance` varchar(1000) NOT NULL,
  `blood_test_report` varchar(10000) NOT NULL,
  `medical_report` varchar(10000) NOT NULL,
  `last_consulted_dr` varchar(1000) NOT NULL,
  `last_consulted_dr_phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `r_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `pincode` int(20) NOT NULL,
  `marital_status` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `emergency-contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE `reg_users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`id`, `username`, `password`, `desig`) VALUES
(2, 'Rasmiya', '1234', 'Dr.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_record`
--
ALTER TABLE `doctor_record`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `patient_health_record`
--
ALTER TABLE `patient_health_record`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_record`
--
ALTER TABLE `doctor_record`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_health_record`
--
ALTER TABLE `patient_health_record`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_record`
--
ALTER TABLE `patient_record`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_record`
--
ALTER TABLE `doctor_record`
  ADD CONSTRAINT `doctor_record_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `reg_users` (`id`);

--
-- Constraints for table `patient_health_record`
--
ALTER TABLE `patient_health_record`
  ADD CONSTRAINT `patient_health_record_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `reg_users` (`id`);

--
-- Constraints for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD CONSTRAINT `patient_record_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `reg_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
