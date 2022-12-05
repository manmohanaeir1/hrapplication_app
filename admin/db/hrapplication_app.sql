-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 06:11 AM
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
-- Database: `hrapplication_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hr_departments`
--

CREATE TABLE `hr_departments` (
  `dept_id` int(3) NOT NULL,
  `dept_name` char(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_departments`
--

INSERT INTO `hr_departments` (`dept_id`, `dept_name`) VALUES
(14, 'IT'),
(15, 'Engineering'),
(16, 'Administration'),
(17, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees`
--

CREATE TABLE `hr_employees` (
  `per_id` int(11) NOT NULL,
  `per_firstname` varchar(223) NOT NULL,
  `per_lastname` varchar(223) NOT NULL,
  `per_email` varchar(223) NOT NULL,
  `per_salary` bigint(20) NOT NULL,
  `per_hire_data` date NOT NULL,
  `per_phone` bigint(20) NOT NULL,
  `job_id` int(7) NOT NULL,
  `mgr_id` int(4) NOT NULL,
  `dept_id` int(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_employees`
--

INSERT INTO `hr_employees` (`per_id`, `per_firstname`, `per_lastname`, `per_email`, `per_salary`, `per_hire_data`, `per_phone`, `job_id`, `mgr_id`, `dept_id`, `status`, `user_name`) VALUES
(12, 'Manmohan  ', 'Aeir  ', 'manmohanaeir012@gmail.com', 432111, '2022-12-03', 986591421, 2, 3, 15, 1, 'username'),
(14, 'abc', 'xyz', 'abc@gmail.com', 3422, '2022-12-04', 2324567689, 1, 3, 15, 1, 'username');

-- --------------------------------------------------------

--
-- Table structure for table `hr_jobs`
--

CREATE TABLE `hr_jobs` (
  `job_id` int(5) NOT NULL,
  `job_code` varchar(222) NOT NULL,
  `job_name` varchar(233) NOT NULL,
  `min_salary` bigint(11) NOT NULL,
  `max_salary` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_jobs`
--

INSERT INTO `hr_jobs` (`job_id`, `job_code`, `job_name`, `min_salary`, `max_salary`) VALUES
(1, 'TCH', 'Teachers', 20000, 50000),
(2, 'ENG', 'Engineering', 80000, 100000),
(5, 'FI_ACCOUNT', 'ACCOUNTANT', 40000, 100000),
(6, 'SA_REP', 'Sales Representative', 50000, 80000),
(7, 'SDV', 'Software Developer', 50000, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `hr_manager`
--

CREATE TABLE `hr_manager` (
  `mgr_id` int(4) NOT NULL,
  `first_name` varchar(222) NOT NULL,
  `last_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_manager`
--

INSERT INTO `hr_manager` (`mgr_id`, `first_name`, `last_name`) VALUES
(3, 'Alexander ', 'Hunold'),
(4, 'Nancy', 'Greenberg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personnel`
--

CREATE TABLE `tbl_personnel` (
  `per_id` int(6) NOT NULL,
  `per_firstname` char(20) NOT NULL,
  `per_middlename` char(20) NOT NULL,
  `per_lastname` char(20) NOT NULL,
  `per_suffix` char(2) NOT NULL,
  `pos_id` int(3) NOT NULL,
  `per_gender` char(6) NOT NULL,
  `per_status` char(8) NOT NULL,
  `per_address` varchar(150) NOT NULL,
  `per_date_of_birth` date NOT NULL,
  `per_place_of_birth` varchar(150) NOT NULL,
  `per_date_of_original_appointment` date NOT NULL,
  `per_eligibility` varchar(20) NOT NULL,
  `per_campus` char(14) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `per_designation` varchar(50) NOT NULL,
  `per_tin_no` varchar(20) NOT NULL,
  `per_gsis_bp_no` varchar(15) NOT NULL,
  `per_pagibig_no` varchar(14) NOT NULL,
  `per_plantilla_no` int(25) NOT NULL,
  `promote_id` int(5) NOT NULL,
  `per_contact_no` varchar(20) NOT NULL,
  `rank_id` int(3) NOT NULL,
  `bs_name` varchar(50) NOT NULL,
  `bs_year` year(4) NOT NULL,
  `bs_school` varchar(50) NOT NULL,
  `ms_name` varchar(50) NOT NULL,
  `ms_with_unit` varchar(12) NOT NULL,
  `ms_year` year(4) NOT NULL,
  `ms_school` varchar(50) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_year` year(4) NOT NULL,
  `dr_with_unit` varchar(12) NOT NULL,
  `dr_school` varchar(50) NOT NULL,
  `other_degree` varchar(50) NOT NULL,
  `other_year` year(4) NOT NULL,
  `other_school` varchar(50) NOT NULL,
  `per_image` varchar(1000) NOT NULL,
  `date_modified` date NOT NULL,
  `gass_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `pos_id` int(3) NOT NULL,
  `pos_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_name`, `email`, `password`) VALUES
(5, 'username', 'user@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_departments`
--
ALTER TABLE `hr_departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `hr_employees`
--
ALTER TABLE `hr_employees`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `hr_jobs`
--
ALTER TABLE `hr_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `hr_manager`
--
ALTER TABLE `hr_manager`
  ADD PRIMARY KEY (`mgr_id`);

--
-- Indexes for table `tbl_personnel`
--
ALTER TABLE `tbl_personnel`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hr_departments`
--
ALTER TABLE `hr_departments`
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hr_jobs`
--
ALTER TABLE `hr_jobs`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hr_manager`
--
ALTER TABLE `hr_manager`
  MODIFY `mgr_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_personnel`
--
ALTER TABLE `tbl_personnel`
  MODIFY `per_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
