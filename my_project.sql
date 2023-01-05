-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 05:46 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `username`, `password`, `email`, `phonenumber`, `photo`) VALUES
(12, 'admin', 'admin', 'shaikhroman6@gmail.com', '9998611274', '../images/user/'),
(14, 'Roman', 'admin', 'shaikhroman6@gmail.com', '9998611274', '../images/user/builtwww_maintain.png');

-- --------------------------------------------------------

--
-- Table structure for table `bbaitm`
--

CREATE TABLE IF NOT EXISTS `bbaitm` (
  `s_id` int(50) NOT NULL AUTO_INCREMENT,
  `sem` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `sem` (`sem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bbaitm`
--

INSERT INTO `bbaitm` (`s_id`, `sem`) VALUES
(3, 'SEM1'),
(4, 'SEM2'),
(5, 'SEM3');

-- --------------------------------------------------------

--
-- Table structure for table `bbaitm_sem1`
--

CREATE TABLE IF NOT EXISTS `bbaitm_sem1` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub` (`sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bbaitm_sem1`
--

INSERT INTO `bbaitm_sem1` (`sub_id`, `sub`) VALUES
(1, 'C'),
(3, 'Foxpro'),
(2, 'WAD');

-- --------------------------------------------------------

--
-- Table structure for table `bbaitm_sem2`
--

CREATE TABLE IF NOT EXISTS `bbaitm_sem2` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub` (`sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bbaitm_sem2`
--

INSERT INTO `bbaitm_sem2` (`sub_id`, `sub`) VALUES
(2, 'MYSQL'),
(1, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `bbaitm_sem3`
--

CREATE TABLE IF NOT EXISTS `bbaitm_sem3` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub` (`sub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bca`
--

CREATE TABLE IF NOT EXISTS `bca` (
  `s_id` int(50) NOT NULL AUTO_INCREMENT,
  `sem` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `sem` (`sem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bca`
--

INSERT INTO `bca` (`s_id`, `sem`) VALUES
(1, 'SEM1'),
(2, 'SEM2');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem1`
--

CREATE TABLE IF NOT EXISTS `bca_sem1` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub` (`sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bca_sem1`
--

INSERT INTO `bca_sem1` (`sub_id`, `sub`) VALUES
(1, 'c'),
(3, 'foxpro'),
(2, 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `bca_sem2`
--

CREATE TABLE IF NOT EXISTS `bca_sem2` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub` (`sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bca_sem2`
--

INSERT INTO `bca_sem2` (`sub_id`, `sub`) VALUES
(2, 'Advance C'),
(1, 'WAD');

-- --------------------------------------------------------

--
-- Table structure for table `mba`
--

CREATE TABLE IF NOT EXISTS `mba` (
  `s_id` int(50) NOT NULL AUTO_INCREMENT,
  `sem` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `sem` (`sem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mba`
--

INSERT INTO `mba` (`s_id`, `sem`) VALUES
(1, 'SEM1');

-- --------------------------------------------------------

--
-- Table structure for table `mba_sem1`
--

CREATE TABLE IF NOT EXISTS `mba_sem1` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `sub` (`sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mba_sem1`
--

INSERT INTO `mba_sem1` (`sub_id`, `sub`) VALUES
(1, 'Sub1'),
(2, 'sub2');

-- --------------------------------------------------------

--
-- Table structure for table `mca`
--

CREATE TABLE IF NOT EXISTS `mca` (
  `s_id` int(50) NOT NULL AUTO_INCREMENT,
  `sem` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `sem` (`sem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pg_courses`
--

CREATE TABLE IF NOT EXISTS `pg_courses` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `c_name` (`c_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pg_courses`
--

INSERT INTO `pg_courses` (`cid`, `c_name`) VALUES
(13, 'MBA'),
(14, 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(100) NOT NULL AUTO_INCREMENT,
  `qname` varchar(200) NOT NULL,
  `q_creater` varchar(10) NOT NULL,
  `time` datetime(6) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `course` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `qname`, `q_creater`, `time`, `subject`, `topic`, `course`, `sem`) VALUES
(21, 'What is Function ?\r\n', 'Ravi', '2016-10-14 08:19:51.000000', 'C Functon', '', 'BCA', 'SEM2'),
(22, 'What is c ?', 'Akshar', '2016-10-14 14:53:28.000000', 'Subject', '', 'BCA', 'SEM1'),
(24, 'kbhaw', 'Akshar', '2017-01-06 19:42:30.000000', 'foxpro', 'other', 'BCA', 'SEM1'),
(25, 'jjjjjj', 'A', '2017-01-07 17:53:07.000000', 'WAD', 'other', 'BBAITM', 'SEM1');

-- --------------------------------------------------------

--
-- Table structure for table `que_21`
--

CREATE TABLE IF NOT EXISTS `que_21` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `replier` varchar(20) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL,
  `time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `que_21`
--

INSERT INTO `que_21` (`r_id`, `replier`, `reply`, `time`) VALUES
(1, 'Ravi', 'Function ;', '2016-10-14 08:20:29.000000'),
(2, 'Sagar', 'Function ', '2016-10-14 08:21:26.000000'),
(5, 'Sagar', 'Function is Function\r\n', '2016-10-14 14:55:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `que_22`
--

CREATE TABLE IF NOT EXISTS `que_22` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `replier` varchar(20) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL,
  `time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `que_22`
--

INSERT INTO `que_22` (`r_id`, `replier`, `reply`, `time`) VALUES
(1, 'Akshar', 'Akshar', '2016-10-14 14:53:47.000000'),
(2, 'Roman', 'C is C !', '2016-10-14 14:54:31.000000'),
(3, 'Roman', 'C is a Langage', '2016-10-22 11:54:30.000000'),
(4, 'Roman', 'Roman Shaikh !', '2016-11-26 15:22:59.000000'),
(5, 'Roman', 'C is a Language', '2016-11-30 09:36:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `que_24`
--

CREATE TABLE IF NOT EXISTS `que_24` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `replier` varchar(20) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL,
  `time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `que_25`
--

CREATE TABLE IF NOT EXISTS `que_25` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `replier` varchar(20) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL,
  `time` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `que_25`
--

INSERT INTO `que_25` (`r_id`, `replier`, `reply`, `time`) VALUES
(1, 'a', 'jjbjjb', '2017-01-07 17:54:44.000000');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `rev` varchar(100) NOT NULL,
  `r_giver` varchar(20) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `rev`, `r_giver`, `time`) VALUES
(1, '', 'Roman', '2017-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `subject`) VALUES
(3, 'Oops', 'C'),
(4, 'Roman', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `ug_courses`
--

CREATE TABLE IF NOT EXISTS `ug_courses` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `c_name` (`c_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ug_courses`
--

INSERT INTO `ug_courses` (`cid`, `c_name`) VALUES
(12, 'BBAITM'),
(10, 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `sem` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `phonenumber`, `photo`, `course`, `sem`) VALUES
(8, 'Roman', '999', 'shaikhroman6@gmail.com', '7043399398', 'images/user/BeautyPlus_20160131121551_save.jpg', 'BCA', 'SEM1'),
(9, 'Akshar', '999', 'akshar614@gmail.com', '9998611274', 'images/user/akshar.jpg', 'BCA', 'SEM1'),
(10, 'Ravi', '999', 'shaikhroman6@gmail.com', '7043399398', 'images/user/brand3.png', 'BCA', 'SEM1'),
(11, 'A', '999', 'shaikhroman6@gmail.com', '9998611274', 'images/user/builtwww_code.png', 'BBAITM', 'SEM1'),
(12, 'ab', '999', 'shaikhroman6@gmail.com', '9998611274', 'images/user/builtwww_digital.png', 'BBAITM', 'SEM1'),
(13, 'ABC', '999', 'shaikhroman6@gmail.com', '9998611274', 'images/user/builtwww_love.png', 'BBAITM', 'SEM2'),
(14, 'Sagar', '999', 'shaikhroman6@gmail.com', '9998611274', 'images/user/IMG_20150805_160245.jpg', 'BCA', 'SEM2'),
(15, 'axus', 'axus1235', 'akshar614@gmail.com', '8490908900', 'images/user/i1.jpg', 'BCA', 'SEM1'),
(17, 'Temp', '999', 'Temp@gmail.com', '999', 'images/user/20b3f9e.png', 'BBAITM', 'SEM1'),
(18, 'Rutesh', '12345', 'patelrutesh@gmail.com', '9998611274', 'images/user/download.jpg', 'BCA', 'SEM2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
