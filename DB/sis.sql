-- Host: localhost


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Table structure for table `std_info`
--


CREATE TABLE `std_info` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `rn` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY  (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `std_info`
--

