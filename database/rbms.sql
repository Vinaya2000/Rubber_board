-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2020 at 02:35 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount_transfer`
--

CREATE TABLE IF NOT EXISTS `amount_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `accno` varchar(255) NOT NULL,
  `ifcode` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `years` varchar(55) NOT NULL,
  `date_period` varchar(255) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_no` varchar(55) NOT NULL,
  `solid_qty` varchar(55) NOT NULL,
  `dealer_licence` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `dat` date NOT NULL,
  `lstat` varchar(100) NOT NULL,
  `bstat` varchar(100) NOT NULL,
  `bcopy` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bill_submission`
--

CREATE TABLE IF NOT EXISTS `bill_submission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `brd_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `typ` varchar(100) NOT NULL,
  PRIMARY KEY (`brd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`brd_id`, `username`, `password`, `typ`) VALUES
(1, 'board', 'board', 'board');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(55) NOT NULL,
  `dob` date NOT NULL,
  `gendar` varchar(55) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `relation_guardian` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `adhar_no` varchar(255) NOT NULL,
  `rps_permit_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `panchayath` varchar(255) NOT NULL,
  `thaluk` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `year_of_planting` varchar(255) NOT NULL,
  `area_hector` varchar(55) NOT NULL,
  `area_hector_tappig` varchar(55) NOT NULL,
  `no_of_trees` varchar(55) NOT NULL,
  `bank_passbook_copy` varchar(255) NOT NULL,
  `adhar_copy` varchar(255) NOT NULL,
  `tax_reciepts` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE IF NOT EXISTS `incentive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_period` varchar(255) NOT NULL,
  `b_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `annual_qty` varchar(55) NOT NULL,
  `dealer_licence` varchar(55) NOT NULL,
  `date_of_bill` date NOT NULL,
  `invoice_no` varchar(55) NOT NULL,
  `subsidy_qty` varchar(55) NOT NULL,
  `total_amt` decimal(10,0) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  `tim` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rps`
--

CREATE TABLE IF NOT EXISTS `rps` (
  `rps_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `typ` varchar(100) NOT NULL,
  PRIMARY KEY (`rps_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rps`
--

INSERT INTO `rps` (`rps_id`, `username`, `password`, `typ`) VALUES
(1, 'rps', 'rps', 'rps');

-- --------------------------------------------------------

--
-- Table structure for table `subsidy`
--

CREATE TABLE IF NOT EXISTS `subsidy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `years` varchar(55) NOT NULL,
  `date_period` varchar(255) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_no` varchar(55) NOT NULL,
  `solid_qty` varchar(55) NOT NULL,
  `dealer_licence` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `dat` date NOT NULL,
  `lstat` varchar(100) NOT NULL,
  `bstat` varchar(100) NOT NULL,
  `bcopy` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
