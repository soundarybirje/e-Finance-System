-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 01:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_finance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_request`
--

CREATE TABLE `account_request` (
  `ac_id` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `age` int(5) NOT NULL,
  `qualifiction` varchar(20) NOT NULL,
  `accupation` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `adharcard` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_request`
--

INSERT INTO `account_request` (`ac_id`, `fname`, `mname`, `lname`, `dob`, `age`, `qualifiction`, `accupation`, `address`, `city`, `pin_code`, `contact_no`, `email_id`, `adharcard`, `status`) VALUES
(1, 'soundarya', 'g', 'Muddi', '2022-08-10', 2, 'ba', 'student', 'dwd', 'dwd', '580003', 8789789722, 'soundar@123', 0, 'Approved'),
(2, 'soundarya', 'g', 'Muddi', '2022-08-03', 23, 'ba', 'student', 'dwd', 'dwd', '580003', 3446657751, 'Neelakm@gmail.com', 0, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(10) NOT NULL,
  `customer_full_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `email_id` varchar(15) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `customer_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_full_name`, `gender`, `occupation`, `address`, `city`, `email_id`, `contact_no`, `customer_code`) VALUES
(2, 'madhu', 'Female', 'studying', 'janath nagar Dharwad', 'mudhol', 'm@gmail.com', 9686594302, 'CUST2'),
(4, 'Vikas naavi', 'male', 'daily wage', '2nd cross Amargol Hu', 'Hubli', 'vikasnavi@gmail', 9902475594, 'CUST4'),
(5, 'Ganesh Bhosale', 'male', 'clerk ', 'bhuvaneshwari nagar ', 'dharwad', 'ganeshb@gmail.c', 7878650210, 'CUST5'),
(6, 'Manjunath B', 'Male', 'electricia', 'dharwad', 'Dharwad', 'manju@gmail.com', 7411362418, 'CUST6'),
(7, 'soukya', 'Female', 'doctor', 'dharwad', 'dharwad', 'soukya@gmail.co', 8861248902, 'CUST7');

-- --------------------------------------------------------

--
-- Table structure for table `loan_allot`
--

CREATE TABLE `loan_allot` (
  `loan_allot_id` int(10) NOT NULL,
  `loan_id` varchar(20) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `allot_date` date NOT NULL,
  `allot_amt` int(10) NOT NULL,
  `duration(month)` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_allot`
--

INSERT INTO `loan_allot` (`loan_allot_id`, `loan_id`, `customer_id`, `allot_date`, `allot_amt`, `duration(month)`) VALUES
(2, '12345678', '1', '2000-12-12', 1, 1),
(7, 'select', 'select', '2000-12-12', 2, 0),
(8, '1', '8', '2000-12-12', 0, 0),
(10, '1', '8', '2010-05-11', 1, 2),
(11, '1234', '6', '2010-05-11', 1, 2),
(12, '2', '10', '2010-05-11', 1, 1),
(13, '2', '7', '2010-05-11', 1032, 3),
(14, '2', '10', '2010-05-11', 1, 1),
(15, '2', '10', '2010-05-11', 1, 10),
(16, '1', '11', '2010-05-11', 1032, 10),
(17, 'select', 'select', '2010-05-11', 1032, 10),
(18, '1', '15', '2010-05-11', 400000, 2),
(19, '1', '15', '2010-05-11', 400000, 10),
(20, '1', '15', '2010-05-11', 400000, 2),
(21, 'select', 'select', '2010-03-01', 1023, 2),
(22, '1', '12', '2013-04-06', 102345, 6),
(23, '11', '1', '2018-03-09', 200000, 24),
(25, '8', '3', '2022-07-11', 400000, 36),
(26, '9', '4', '2022-08-02', 100000, 12),
(27, '10', '5', '2022-08-04', 300000, 56);

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `loan_id` int(20) NOT NULL,
  `loan_name` varchar(50) NOT NULL,
  `loan_desc` varchar(50) NOT NULL,
  `loan_duration` int(11) NOT NULL,
  `loan_ins` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`loan_id`, `loan_name`, `loan_desc`, `loan_duration`, `loan_ins`, `status`) VALUES
(1, 'home loan', 'house construction', 2, '3', 'Active'),
(8, 'gold', 'personal', 3, '2', 'active'),
(9, 'bike', 'personal', 2, '3', 'good'),
(10, 'house loan', 'site ', 4, '3', 'good'),
(11, 'Study Loan', 'Study Loan details', 5, '4', ' Not Active');

-- --------------------------------------------------------

--
-- Table structure for table `loan_request`
--

CREATE TABLE `loan_request` (
  `loan_request_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `request_discription` varchar(200) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hintq` varchar(100) NOT NULL,
  `hinta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `hintq`, `hinta`) VALUES
('admin', '123456', 'admin', 'who i am', 'admin'),
('CUST1', 'CUST1', 'customer', 'Enter Ur Contact No', '9886631818'),
('ACODE10', 'ACODE10', 'agent', 'Enter contact no', '9886631818'),
('CUST2', 'CUST2', 'customer', 'Enter Ur Contact No', '9686594302'),
('CUST3', 'CUST3', 'customer', 'Enter Ur Contact No', '7204923961'),
('CUST4', 'CUST4', 'customer', 'Enter Ur Contact No', '9902475594'),
('CUST5', 'CUST5', 'customer', 'Enter Ur Contact No', '7878650210'),
('CUST6', 'CUST6', 'customer', 'Enter Ur Contact No', '7411362418'),
('CUST7', 'CUST7', 'customer', 'Enter Ur Contact No', '1234567889');

-- --------------------------------------------------------

--
-- Table structure for table `pigmy_agent`
--

CREATE TABLE `pigmy_agent` (
  `pigmy_agent_id` int(11) NOT NULL,
  `pigmy_agent_name` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(15) NOT NULL,
  `email_id` varchar(15) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `agent_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pigmy_agent`
--

INSERT INTO `pigmy_agent` (`pigmy_agent_id`, `pigmy_agent_name`, `gender`, `address`, `email_id`, `contact_no`, `agent_code`) VALUES
(10, 'Vinayak B', 'male', 'Dharwad', 'vinay@gmail,com', 9886631818, 'ACODE10');

-- --------------------------------------------------------

--
-- Table structure for table `pigmy_collect`
--

CREATE TABLE `pigmy_collect` (
  `pigmy_collect_id` int(25) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `pigmy_agent_id` int(11) NOT NULL,
  `collect_amt` bigint(10) NOT NULL,
  `collect_date` date NOT NULL,
  `time` varchar(6) NOT NULL,
  `references_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pigmy_ins_rates`
--

CREATE TABLE `pigmy_ins_rates` (
  `pigmy_ins_rates_id` int(11) NOT NULL,
  `pigmy_ins_name` varchar(50) NOT NULL,
  `interest_rate` int(11) NOT NULL,
  `duration(month)` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pigmy_ins_rates`
--

INSERT INTO `pigmy_ins_rates` (`pigmy_ins_rates_id`, `pigmy_ins_name`, `interest_rate`, `duration(month)`) VALUES
(10, 'NNND', 5, '12'),
(11, 'Monthly', 2, '16'),
(18, 'weekly', 2, '12'),
(19, 'house loan ', 3, '48'),
(21, 'daily', 5, '24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_request`
--
ALTER TABLE `account_request`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `loan_allot`
--
ALTER TABLE `loan_allot`
  ADD PRIMARY KEY (`loan_allot_id`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `loan_request`
--
ALTER TABLE `loan_request`
  ADD PRIMARY KEY (`loan_request_id`);

--
-- Indexes for table `pigmy_agent`
--
ALTER TABLE `pigmy_agent`
  ADD PRIMARY KEY (`pigmy_agent_id`);

--
-- Indexes for table `pigmy_collect`
--
ALTER TABLE `pigmy_collect`
  ADD PRIMARY KEY (`pigmy_collect_id`);

--
-- Indexes for table `pigmy_ins_rates`
--
ALTER TABLE `pigmy_ins_rates`
  ADD PRIMARY KEY (`pigmy_ins_rates_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_request`
--
ALTER TABLE `account_request`
  MODIFY `ac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loan_allot`
--
ALTER TABLE `loan_allot`
  MODIFY `loan_allot_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `loan_details`
--
ALTER TABLE `loan_details`
  MODIFY `loan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loan_request`
--
ALTER TABLE `loan_request`
  MODIFY `loan_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pigmy_agent`
--
ALTER TABLE `pigmy_agent`
  MODIFY `pigmy_agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pigmy_collect`
--
ALTER TABLE `pigmy_collect`
  MODIFY `pigmy_collect_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pigmy_ins_rates`
--
ALTER TABLE `pigmy_ins_rates`
  MODIFY `pigmy_ins_rates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
