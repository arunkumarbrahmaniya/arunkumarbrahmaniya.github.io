-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2014 at 01:32 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pswd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`, `pswd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_mstr`
--

CREATE TABLE IF NOT EXISTS `book_mstr` (
  `bname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_no` int(4) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `no_copy` int(2) DEFAULT NULL,
  `issue_copy` int(2) DEFAULT '0',
  PRIMARY KEY (`bname`),
  KEY `FK_book_mstr` (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_mstr`
--

INSERT INTO `book_mstr` (`bname`, `author_name`, `pname`, `page_no`, `price`, `no_copy`, `issue_copy`) VALUES
('3', '3', 'new prints', 5, '5.00', 5, 0),
('C in Depth', 'Deepali Srivastava', 'TechGuru', 350, '430.00', 10, 0),
('C sharp Programming', 'Vivek Pandey', 'ram publication', 440, '376.00', 4, 2),
('CBNST', 'P. Mishra', 'ram publication', 3000, '350.00', 20, 0),
('HTML', 'William Jhonson', 'Hindustan Press', 2000, '200.00', 30, 0),
('Java', 'James', 'TechGuru', 300, '200.00', 20, 1),
('Java Core', '1', 'Hindustan Press', 1, '1.00', 1, 0),
('Let us C', 'Pankaj Misra', 'Hindustan Press', 310, '215.00', 10, 6),
('PHP', 'P. Mishra', 'Hindustan Press', 400, '270.00', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isuue_mstr`
--

CREATE TABLE IF NOT EXISTS `isuue_mstr` (
  `issue_no` int(11) NOT NULL AUTO_INCREMENT,
  `enroll_no` int(11) DEFAULT NULL,
  `bname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `fine` decimal(6,2) DEFAULT '0.00',
  `book_returned` int(1) DEFAULT '0',
  PRIMARY KEY (`issue_no`),
  KEY `FK_isuue_mstr1` (`enroll_no`),
  KEY `FK_isuue_mstr` (`bname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=109 ;

--
-- Dumping data for table `isuue_mstr`
--

INSERT INTO `isuue_mstr` (`issue_no`, `enroll_no`, `bname`, `issue_date`, `return_date`, `fine`, `book_returned`) VALUES
(100, 1000, 'C sharp Programming', '2013-04-12', '2013-04-12', '0.00', 1),
(102, 1001, 'C sharp Programming', '2013-04-12', '2014-05-03', '568.50', 1),
(103, 1002, 'C sharp Programming', '2013-04-02', '2013-04-12', '4.50', 1),
(104, 1003, 'Let us C', '2013-04-12', '2013-04-12', '0.00', 1),
(105, 1000, 'Let us C', '2014-05-02', '2014-05-09', '0.00', 1),
(106, 1003, 'Java', '2014-05-09', NULL, '0.00', 0),
(107, 1002, 'C sharp Programming', '2014-05-09', NULL, '0.00', 0),
(108, 1003, 'Let us C', '2014-05-09', NULL, '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `publisher_mstr`
--

CREATE TABLE IF NOT EXISTS `publisher_mstr` (
  `pname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publisher_mstr`
--

INSERT INTO `publisher_mstr` (`pname`, `address`, `city`, `state`, `country`, `pin`, `phone`, `email`) VALUES
('Analyze InfoTech', 'Lucknow', 'Lucknow', 'up', 'India', '20012', '9839434821', 'pratham.anilyadav@gmail.com'),
('Hindustan Press', 'HazratGanj', 'Lucknow', 'Uttar Pradesh', 'india', '123', '0522789', 'hindustan@gmail.com'),
('new prints', 'aliganj', 'Lucknow', 'up', 'india', '123', '0522789', 'dffg@dfff.com'),
('ram publication', 'kaisarbagh', 'lko', 'up', 'india', '123', '0522789', 'ram@dashrath.com'),
('TechGuru', 'LalBagh', 'Lucknow', 'up', 'india', '123', '0522789', 'techguru@gmail.com'),
('Tom Cat', 'Lucknow', 'Lucknow', 'UP', 'India', '20012', '9839434821', 'ashbhandari44@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stu_mstr`
--

CREATE TABLE IF NOT EXISTS `stu_mstr` (
  `enroll_no` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sclass` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stream` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pswd` varchar(20) COLLATE utf8_unicode_ci DEFAULT '123456',
  `photo` longblob,
  PRIMARY KEY (`enroll_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1022 ;

--
-- Dumping data for table `stu_mstr`
--

INSERT INTO `stu_mstr` (`enroll_no`, `sname`, `fname`, `gender`, `sclass`, `stream`, `semester`, `pswd`, `photo`) VALUES
(1020, 'Amit', 'Anil', 'Male', 'BCA', 'IT', '1', '123456', 0x75706c6f61642f4465736572742e6a7067),
(1021, 'Anuj Kumar Gautam', 'Anil', 'Male', 'BCA', 'IT', '3', '123456', 0x75706c6f61642f50656e6775696e732e6a7067);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_mstr`
--
ALTER TABLE `book_mstr`
  ADD CONSTRAINT `FK_book_mstr` FOREIGN KEY (`pname`) REFERENCES `publisher_mstr` (`pname`);

--
-- Constraints for table `isuue_mstr`
--
ALTER TABLE `isuue_mstr`
  ADD CONSTRAINT `FK_isuue_mstr` FOREIGN KEY (`bname`) REFERENCES `book_mstr` (`bname`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_isuue_mstr1` FOREIGN KEY (`enroll_no`) REFERENCES `stu_mstr` (`enroll_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
