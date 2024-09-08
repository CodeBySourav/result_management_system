-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 06:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `souravprasad`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `name` varchar(50) NOT NULL,
  `rollid` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL,
  `dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`name`, `rollid`, `email`, `gender`, `class`, `section`, `dateofbirth`) VALUES
('Rahul gupta', 1, 'rahul@gamil.com', 'Male', 'one', 'A', '2015-11-12'),
('sourav prasad', 2, 'sourav@gamil.com', 'Male', 'one', 'A', '2015-12-22'),
('vishal kumar', 3, 'vishal@gamil.com', 'Male', 'one', 'A', '2015-01-11'),
('avishek kumar', 4, 'avishek@gamil.com', 'Male', 'one', 'A', '2015-08-09'),
('nikhil kumar', 5, 'nikhil@gamil.com', 'Male', 'one', 'A', '2015-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `createstudentclass`
--

CREATE TABLE `createstudentclass` (
  `sl_no` int(11) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `classno` int(10) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createstudentclass`
--

INSERT INTO `createstudentclass` (`sl_no`, `classname`, `classno`, `section`) VALUES
(1, 'one', 1, 'A'),
(2, 'two', 2, 'A'),
(3, 'three', 3, 'A'),
(4, 'four', 4, 'A'),
(5, 'five', 5, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `createstudentsubject`
--

CREATE TABLE `createstudentsubject` (
  `sl_no` int(2) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createstudentsubject`
--

INSERT INTO `createstudentsubject` (`sl_no`, `subject_name`, `subject_code`) VALUES
(1, 'mathmatic', 'MH001'),
(2, 'hindi', 'HN001'),
(3, 'english', 'EN001'),
(4, 'science', 'SC001'),
(5, 'social science', 'SS001');

-- --------------------------------------------------------

--
-- Table structure for table `homecontactus`
--

CREATE TABLE `homecontactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedback`
--

CREATE TABLE `studentfeedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentfeedback`
--

INSERT INTO `studentfeedback` (`name`, `email`, `message`) VALUES
('sourav', 'souravprasad110@gmail.com', 'cccccccccccc'),
('gita', 'asdo@mahdnk', 'vvvvvvvvvvvvv'),
('sourav', 'asdo@mahdnk', 'ssssssssssssss'),
('sourav', 'sourav@prasad', 'sourav');

-- --------------------------------------------------------

--
-- Table structure for table `studentregister`
--

CREATE TABLE `studentregister` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `class` int(6) NOT NULL,
  `section` varchar(6) NOT NULL,
  `rollid` varchar(12) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregister`
--

INSERT INTO `studentregister` (`firstname`, `lastname`, `gender`, `dateofbirth`, `address`, `pin`, `class`, `section`, `rollid`, `mobileno`, `pic`, `email`, `password`) VALUES
('suman', 'prasad', 'male', '2011-12-12', 'nai pta', 832309, 1, 'A', '003', 9809809890, 'upload/IMG-20180924-WA0024.jpg', 'suman@gmail.com', '2222'),
('rahul', 'gupta', 'male', '2015-11-12', 'MAHULIA,GALUDIH,EAST SINGHBHUM,JAMSHEDPUR', 832304, 1, 'A', '1', 8997546789, 'upload/IMG_5241.JPG', 'rahul@gamil.com', '2222'),
('sourav', 'prasad', 'male', '2015-12-22', 'MAHULIA,GALUDIH,EAST SINGHBHUM,JAMSHEDPUR', 832304, 1, 'A', '2', 62055377077, 'upload/IMG-20180923-WA0015.jpg', 'sourav@gmail.com', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `subjectmarks`
--

CREATE TABLE `subjectmarks` (
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `rollid` varchar(20) NOT NULL,
  `hindi` int(3) NOT NULL,
  `eng` int(3) NOT NULL,
  `maths` int(3) NOT NULL,
  `science` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `comp` int(3) NOT NULL,
  `totalmarks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectmarks`
--

INSERT INTO `subjectmarks` (`name`, `class`, `section`, `rollid`, `hindi`, `eng`, `maths`, `science`, `sst`, `comp`, `totalmarks`) VALUES
('Rahul gupta', '1', 'A', '1', 67, 78, 98, 45, 87, 88, 463),
('sourav prasad', '1', 'A', '2', 59, 56, 55, 60, 67, 66, 363),
('vishal kumar', '1', 'A', '3', 73, 47, 48, 66, 58, 59, 351),
('nikhil kumar', '1', 'A', '5', 59, 69, 77, 56, 39, 59, 359),
('avishek kumar', '1', 'A', '4', 55, 66, 77, 88, 77, 66, 429),
('sourav prasad', '2', 'A', '2', 55, 66, 55, 66, 55, 66, 363);

-- --------------------------------------------------------

--
-- Table structure for table `teacherregister`
--

CREATE TABLE `teacherregister` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `pic` varbinary(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherregister`
--

INSERT INTO `teacherregister` (`firstname`, `lastname`, `gender`, `dateofbirth`, `address`, `pin`, `mobileno`, `pic`, `email`, `password`) VALUES
('sourav', '', 'male', '0000-00-00', '', 0, 0, '', '', ''),
('sourav', 'prasad', 'male', '1998-04-15', 'jamshedpur', 832304, 9999999999, 0x756740707261736164, '', '1234'),
('', '', 'male', '0000-00-00', '', 0, 0, 0x736f75726176407072617361, '', 'wwww'),
('sourav', '', 'male', '0000-00-00', '', 0, 0, '', 'ssss@ssss', 'ssss'),
('', '', 'male', '0000-00-00', '', 0, 0, 0x494d475f353234302e4a5047, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createstudentclass`
--
ALTER TABLE `createstudentclass`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `createstudentsubject`
--
ALTER TABLE `createstudentsubject`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `studentregister`
--
ALTER TABLE `studentregister`
  ADD PRIMARY KEY (`rollid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
