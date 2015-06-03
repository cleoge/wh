-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 05:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wh`
--
DROP DATABASE IF EXISTS wh;

CREATE DATABASE wh;

USE wh;

GRANT ALL PRIVILEGES ON wh.* TO 'whuser'@'localhost' IDENTIFIED BY 'whuser';
-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` int(11) NOT NULL,
  `id_num` varchar(9) CHARACTER SET hebrew NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone_prefix` int(3) NOT NULL,
  `phone_num` int(7) NOT NULL,
  `city` varchar(255) NOT NULL,
  `company` int(11) DEFAULT NULL,
  `job` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `id_num`, `last_name`, `first_name`, `phone_prefix`, `phone_num`, `city`, `company`, `job`) VALUES
(1, '123456789', 'לוי', 'אתי', 50, 1234567, 'כפר סבא', 1, 1),
(2, '012345678', 'כהן', 'דוד', 53, 3333333, 'תל אביב', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `proj_id` int(11) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proj_id`, `proj_name`, `from_date`, `to_date`) VALUES
(1, 'תחבורה ירושלים', '2015-01-01', '2015-04-30'),
(2, 'תחבורה חיפה', '2015-03-15', '2015-04-25'),
(9, 'ניסיון לעדכן', '0000-00-00', '0000-00-00'),
(10, 'ניסיון', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `proj_location`
--

CREATE TABLE IF NOT EXISTS `proj_location` (
  `loc_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `loc_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proj_location`
--

INSERT INTO `proj_location` (`loc_id`, `proj_id`, `loc_name`) VALUES
(1, 1, 'העיר העתיקה'),
(2, 1, 'בנייני האומה');

-- --------------------------------------------------------

--
-- Table structure for table `ref_companies`
--

CREATE TABLE IF NOT EXISTS `ref_companies` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_companies`
--

INSERT INTO `ref_companies` (`comp_id`, `comp_name`) VALUES
(1, 'טרגט מרקט'),
(2, 'מנפאואר'),
(3, 'תיגבור');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jobs`
--

CREATE TABLE IF NOT EXISTS `ref_jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_jobs`
--

INSERT INTO `ref_jobs` (`job_id`, `job_name`) VALUES
(1, 'ראש צוות'),
(2, 'דייל'),
(3, 'דייל הסברה');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `proj_location`
--
ALTER TABLE `proj_location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `ref_companies`
--
ALTER TABLE `ref_companies`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `ref_jobs`
--
ALTER TABLE `ref_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `proj_location`
--
ALTER TABLE `proj_location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ref_companies`
--
ALTER TABLE `ref_companies`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ref_jobs`
--
ALTER TABLE `ref_jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
