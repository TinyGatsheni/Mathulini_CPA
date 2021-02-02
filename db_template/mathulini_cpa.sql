-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 07:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathulini_cpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(2) NOT NULL,
  `gender_name` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`, `status`) VALUES
(1, 'Male', 1),
(2, 'Female', 1),
(3, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_status`) VALUES
(1, 'admin', 1),
(2, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `bnk_name` varchar(50) NOT NULL,
  `bnk_acc_no` varchar(30) NOT NULL,
  `bnk_acc_type` varchar(30) NOT NULL,
  `bnk_branch_code` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `membership` varchar(100) NOT NULL,
  `dividends` int(50) NOT NULL,
  `benefits` varchar(100) NOT NULL,
  `declaration` varchar(200) NOT NULL,
  `acceptance` varchar(150) NOT NULL,
  `role_id` int(2) NOT NULL,
  `status_active` int(2) NOT NULL DEFAULT 1,
  `contact` varchar(15) NOT NULL,
  `gender_id` varchar(20) NOT NULL,
  `user_reg_date` varchar(40) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `id_number`, `bnk_name`, `bnk_acc_no`, `bnk_acc_type`, `bnk_branch_code`, `dob`, `address`, `membership`, `dividends`, `benefits`, `declaration`, `acceptance`, `role_id`, `status_active`, `contact`, `gender_id`, `user_reg_date`) VALUES
(1, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', '', '', '', '2000-01-01', 'test', 'test', 20000, 'test', 'test', 'test', 1, 1, '', '0', '2021-02-02 07:12:14'),
(11, 'Sizakele Ignatia', 'Mbhele', '', 'b59c67bf196a4758191e42f76670ceba', '7804200334082', 'CAPITEC', '14587120236', 'SAVINGS', '140010', '1978-04-20', '15 Tuzi wezi, P.O uvona, 1045', '', 20, '', '', '', 2, 1, '000-000-0000', '2', '2021-02-02 07:16:48'),
(15, 'test', 'test', '1612244740', 'b59c67bf196a4758191e42f76670ceba', '1234567890', 'CAPITEC', '156114984156', 'SAVINGS', '147010', '1994-05-21', '47 thabo morena', 'test', 20, '', '', '', 2, 1, '0623503096', '1', '2021-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `idnumber` (`id_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
