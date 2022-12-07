-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 05:02 AM
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
-- Database: `hrapplication_app1`
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
(1, 'Administration'),
(2, 'Marketing'),
(3, 'Teaching'),
(4, 'Engineering');

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
(1, 'test ', 'test ', 'test@gmail.com', 50000, '2022-12-06', 3456789, 1, 1, 3, 1, 'username'),
(26, 'demo  ', 'de  ', 'demo@d.d', 29000, '2022-12-07', 7654, 5, 1, 2, 0, 'username');

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
(2, 'ENG', 'Engineers', 50000, 80000),
(3, 'FI_ACCOUNT', 'ACCOUNTANT', 80000, 90001),
(4, 'SA_REP', 'Sales Representative', 40000, 50000),
(5, 'SA_MAN', 'Sales Manager', 20000, 45000);

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
(1, 'Alexander ', 'Hunold'),
(2, 'Nancy', 'Greenberg');

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
(1, 'username', 'test@gmail.com', 'password');

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
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

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
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hr_jobs`
--
ALTER TABLE `hr_jobs`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hr_manager`
--
ALTER TABLE `hr_manager`
  MODIFY `mgr_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
