-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2013 at 10:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mh`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `did` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `foe` varchar(30) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `contact` varchar(100) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`did`, `user`, `pass`, `name`, `foe`, `exp`, `contact`) VALUES
(1, 'vasanth', 'bea940d09ec4e5dd3df8ea44ca1ae0da', 'Vasanth Kumar', 'Cardiologist', '10', '9000000001'),
(2, 'david', '82b4de4323427835fc0f1f784c0f7e75', 'David Billa', 'Neurologist', '14', '9000000002'),
(3, 'watson', 'db747348904993748785ce6a3e09fd2e', 'James Watsson', 'Physician', '19', '9000000003');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `pid`, `comment`) VALUES
(1, 1, 'Its Coolest hospital meh!');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(2) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `did` int(10) NOT NULL,
  `visits` varchar(10) NOT NULL,
  `last` varchar(30) NOT NULL,
  `meds` varchar(200) NOT NULL,
  `amount` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `did` (`did`),
  KEY `did_2` (`did`),
  KEY `did_3` (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `user`, `pass`, `name`, `age`, `gender`, `blood`, `problem`, `did`, `visits`, `last`, `meds`, `amount`) VALUES
(1, 'nitin', '35be2c1cf2cc489bdb16b678cd73cd78', 'Nitin George Ponolly', '21', 'M', 'O+', 'Alzheimer’s (Memory Loss)', 2, '8', '21st January, 2013', 'Aricept, Exelon, Razadyne, Cognex.', '35,00,000'),
(2, 'harsh', '35be2c1cf2cc489bdb16b678cd73cd78', 'Harsh Naidu', '45', 'M', 'A+', 'Cardiac Arrest', 1, '10', '3rd March, 2013', 'Dalteparin (Fragmin), Danaparoid (Orgaran).', '10,00,000'),
(3, 'manohar', '35be2c1cf2cc489bdb16b678cd73cd78', 'Malayali Manohar', '39', 'M', 'AB+', 'Artery Blockage', 1, '10', '4th July, 2013', 'Heparin (various),Tinzaparin (Innohep)', '40,00,000'),
(4, 'gajala', '35be2c1cf2cc489bdb16b678cd73cd78', 'Achi Kutti Gajala', '27', 'F', 'O-', 'Cotard Delusion', 2, '20', '7th July, 2013', ' Antidepressants, antipsychotics and Mood stabilizers', '10,000'),
(5, 'charles', '35be2c1cf2cc489bdb16b678cd73cd78', 'Charles Shobaraj', '52', 'M', 'B+', 'Cerebral hemorrhage', 2, '20', '24th February, 2010', 'Antihypertensive therapy, Acetaminophen.', '20,00,000'),
(6, 'sampoornesh', '35be2c1cf2cc489bdb16b678cd73cd78', 'Sampoornesh Babu', '25', 'M', 'BOMBAY', 'Bulbar palsy', 2, '30', '15th June, 2012', 'Tranquilizers', '2,00,00,000'),
(7, 'rasna', '35be2c1cf2cc489bdb16b678cd73cd78', 'Rasna Rasnan', '25', 'F', 'A-', 'Arthritis', 3, '2', '23rd July, 2012', 'Ibuprofen', '20,000');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `result` varchar(200) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`rid`, `pid`, `time`, `result`) VALUES
(1, 1, '2013-07-07 17:49:20', '<b>Near Infrared Report:</b> <br /> <img src="images/1.jpg" /> <br /><b>PET Report</b><br /><img src="images/2.jpg" />'),
(2, 2, '2013-07-07 17:52:01', '<b>X-Ray - Front:</b> <br /> <img src="images/3.jpg" /> <br /><b>X-Ray - Side</b><br /><img src="images/xray.png" />');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `user`, `pass`, `name`) VALUES
(1, 'sharath', '35be2c1cf2cc489bdb16b678cd73cd78', 'Sharath Blaziken'),
(2, 'maruthi', '35be2c1cf2cc489bdb16b678cd73cd78', 'Maruthi Sharma');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
