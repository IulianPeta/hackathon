-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 09:43 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackaton`
--

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `tst_id` int(8) NOT NULL AUTO_INCREMENT,
  `tst_class_name` mediumtext NOT NULL,
  `tst_date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tst_date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_runs`
--

DROP TABLE IF EXISTS `test_runs`;
CREATE TABLE IF NOT EXISTS `test_runs` (
  `tr_id` int(8) NOT NULL AUTO_INCREMENT,
  `tr_name` varchar(255) NOT NULL,
  `tr_status` int(1) NOT NULL DEFAULT '0',
  `tr_runtime` decimal(8,4) NOT NULL,
  `tr_date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tr_date_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tr_tst_id` int(8) NOT NULL DEFAULT '0',
  `tr_error_msg` mediumtext,
  `tr_error_type` mediumtext,
  `tr_sys_out` mediumtext,
  `tr_sys_err` mediumtext,
  `tr_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
