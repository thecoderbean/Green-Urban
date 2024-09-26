-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2021 at 06:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `club_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `present` int(11) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`a_id`, `m_id`, `username`, `date`, `present`) VALUES
(1, 5, '', '2021-10-05', 1),
(2, 5, '', '2021-10-13', 1),
(3, 5, '', '2021-10-27', 1),
(4, 5, '', '2021-10-26', 1),
(5, 6, '', '2021-10-27', 1),
(6, 6, 'hari123', '2021-10-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `club_reg`
--

CREATE TABLE IF NOT EXISTS `club_reg` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `club_name` varchar(30) NOT NULL,
  `club_address` varchar(50) NOT NULL,
  `club_place` varchar(20) NOT NULL,
  `club_phno` double NOT NULL,
  `club_email` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `club_reg`
--

INSERT INTO `club_reg` (`c_id`, `club_name`, `club_address`, `club_place`, `club_phno`, `club_email`) VALUES
(9, 'j', 'assd', 'jj', 4444, 'jj@gmail.com'),
(10, 'ass', 'd', 'ds', 56, 'aa@gmail.com'),
(11, 'ds', 'sds', 'ds', 56, 'asdd@gmail.com'),
(12, 'awert', 'tr', 'rr', 987667888, 'asw@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `username`, `password`, `user_type`, `reg_id`, `status`) VALUES
(5, 'admin', 'admin', 'Admin', 0, 1),
(7, 'lll', 'kkk', 'Club', 0, 0),
(8, 'df', 'df', 'Club', 0, 0),
(9, 'asdfg', '1234', 'Club', 10, 0),
(10, 'anju', 'aaa', 'Member', 5, 1),
(11, 'liju', '1234', 'Trainer', 2, 1),
(12, 'gym123', '123gym', 'Club', 12, 1),
(13, 'hari123', '123hari', 'Member', 6, 1),
(14, 'tra123', '1234', 'Trainer', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member_reg`
--

CREATE TABLE IF NOT EXISTS `member_reg` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(20) NOT NULL,
  `m_address` varchar(50) NOT NULL,
  `m_id_proof` int(11) NOT NULL,
  `m_time` time NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `m_email` varchar(20) NOT NULL,
  `m_phno` double NOT NULL,
  `m_height` int(11) NOT NULL,
  `m_weight` int(11) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member_reg`
--

INSERT INTO `member_reg` (`m_id`, `m_name`, `m_address`, `m_id_proof`, `m_time`, `age`, `gender`, `m_email`, `m_phno`, `m_height`, `m_weight`) VALUES
(5, 'ss', 'sd', 34, '00:00:07', 56, 'on', 'ass@gmail.com', 9898777, 123, 40),
(6, 'hari', 'hgde', 343, '00:00:04', 34, 'on', 'h@gmail.com', 77887788, 143, 45);

-- --------------------------------------------------------

--
-- Table structure for table `pkg_conform`
--

CREATE TABLE IF NOT EXISTS `pkg_conform` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pkg_name` varchar(50) NOT NULL,
  `amt` int(11) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_phno` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pkg_conform`
--

INSERT INTO `pkg_conform` (`o_id`, `m_id`, `p_id`, `pkg_name`, `amt`, `m_name`, `m_phno`, `status`, `c_id`) VALUES
(1, 2, 1, 'golden', 5000, 'df', 3434, 1, 10),
(2, 5, 1, 'rt', 5, 'gr', 45, 1, 10),
(3, 5, 1, 'golden', 15, 'sdf', 76, 1, 10),
(4, 6, 3, 'diamond', 30, 'aji', 889776, 0, 12),
(5, 6, 4, 'silver', 30, 'liju', 987887, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `u_id`, `u_type`, `comment`) VALUES
(1, 2, 'Member', 'thank you'),
(2, 10, '', 'please approve members'),
(3, 10, 'admin', 'rt'),
(4, 5, 'admin', 'hghg'),
(5, 12, 'member', 'www'),
(6, 6, 'member', 'ghh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE IF NOT EXISTS `tbl_package` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  `d_rate` int(11) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `add_ons` varchar(50) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`p_id`, `c_id`, `p_name`, `rate`, `d_rate`, `spec`, `add_ons`, `no_of_days`) VALUES
(1, 10, 'golden', 5000, 4000, 'hfdghfdh hghdf bhfgdhg', 'hghfh', 15),
(2, 10, 'swdw', 3, 3, 'ret', 'er', 4),
(4, 12, 'silver', 7000, 6790, 'sfd', 'ere', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `tcost` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cnumber` int(11) NOT NULL,
  `exp` date NOT NULL,
  `cvv` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `m_id`, `p_id`, `tcost`, `cname`, `cnumber`, `exp`, `cvv`) VALUES
(1, 6, 2, 5000, 'gh', 677778, '2021-10-27', 456),
(2, 6, 5, 30, 'de', 5656, '2021-10-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainer`
--

CREATE TABLE IF NOT EXISTS `tbl_trainer` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_address` varchar(50) NOT NULL,
  `t_place` varchar(20) NOT NULL,
  `t_exp` int(11) NOT NULL,
  `phno` double NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_trainer`
--

INSERT INTO `tbl_trainer` (`t_id`, `c_id`, `t_name`, `t_address`, `t_place`, `t_exp`, `phno`, `email`) VALUES
(1, 10, 'aji', 'asedsa', 'dsfd', 3, 768, 'aji@gmai.om'),
(2, 10, 'liju', 't_add', 'dfre', 3, 677, 'asd@gmail.om'),
(3, 12, 'dsd', 'we', 'ew', 4, 77677767, 't@gmailcom');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
