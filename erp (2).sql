-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 09:08 AM
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
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `emp_ID` varchar(20) NOT NULL,
  `Date_employed` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Othernames` varchar(50) DEFAULT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Job_Title` varchar(50) NOT NULL,
  `Dept_code` varchar(10) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `Marital_status` varchar(5) NOT NULL,
  `Dependants` int(11) DEFAULT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Address1` varchar(200) NOT NULL,
  `Address2` varchar(200) DEFAULT NULL,
  `Contact1` varchar(20) NOT NULL,
  `Contact2` varchar(20) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `StatusInd` varchar(2) NOT NULL DEFAULT 'A',
  `CreatedBy` varchar(50) NOT NULL,
  `Createdon` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` varchar(50) DEFAULT NULL,
  `UpdatedOn` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_catergory`
--

CREATE TABLE `employee_catergory` (
  `Cat_id` int(11) NOT NULL,
  `Cat_code` varchar(10) NOT NULL,
  `Cat_name` varchar(50) NOT NULL,
  `Description` text,
  `CreatedBy` varchar(50) NOT NULL,
  `Createdon` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updatedby` varchar(50) DEFAULT NULL,
  `Updatedon` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_department`
--

CREATE TABLE `employee_department` (
  `dept_id` int(11) NOT NULL,
  `dept_code` varchar(10) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `descrpition` text,
  `Emp_cat_code` varchar(10) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `Createdon` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updatedby` varchar(50) DEFAULT NULL,
  `Updatedon` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ID` int(11) NOT NULL,
  `ParentID` varchar(20) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Othernames` varchar(50) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Contact1` varchar(15) NOT NULL,
  `Contact2` varchar(15) DEFAULT NULL,
  `Address1` varchar(200) NOT NULL,
  `Address2` varchar(200) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedonDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` varchar(50) DEFAULT NULL,
  `UpdatedOn` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `AdmissionNo` int(11) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `AdmissionDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProgrammeID` varchar(20) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Othernames` varchar(100) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `BirthPlace` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `NationalityID` varchar(20) DEFAULT NULL,
  `Contact1` varchar(15) NOT NULL,
  `Contact2` varchar(15) DEFAULT NULL,
  `Address1` varchar(200) NOT NULL,
  `Address2` varchar(200) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Picture` varchar(200) DEFAULT NULL,
  `StatusInd` varchar(10) NOT NULL DEFAULT 'A',
  `ParentID` varchar(20) NOT NULL,
  `UserID` int(11) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedonDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` varchar(50) DEFAULT NULL,
  `UpdatedOn` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(20) NULL,
  `Contact` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Othernames` varchar(100) NOT NULL,
  `Privilages` varchar(20) NOT NULL,
  `CreatedBy` varchar(100) DEFAULT NULL,
  `CreatedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` varchar(100) DEFAULT NULL,
  `UpdatedOn` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `FirstLogin` varchar(5) NOT NULL DEFAULT 'Yes',
  `StatusInd` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `emp_id_index` (`emp_ID`);

--
-- Indexes for table `employee_catergory`
--
ALTER TABLE `employee_catergory`
  ADD PRIMARY KEY (`Cat_id`),
  ADD UNIQUE KEY `catcodeindex` (`Cat_code`);

--
-- Indexes for table `employee_department`
--
ALTER TABLE `employee_department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_code_index` (`dept_code`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `PID` (`ParentID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`AdmissionNo`),
  ADD UNIQUE KEY `studentid_index` (`StudentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_catergory`
--
ALTER TABLE `employee_catergory`
  MODIFY `Cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_department`
--
ALTER TABLE `employee_department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `AdmissionNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
