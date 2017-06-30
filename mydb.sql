-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 02:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `sno` int(50) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `sno` int(11) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `pw` varchar(40) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `desig` varchar(40) DEFAULT NULL,
  `dept` varchar(40) DEFAULT NULL,
  `urole` char(2) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `extn` varchar(16) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `custname` varchar(35) DEFAULT NULL,
  `llogind` date DEFAULT NULL,
  `llogint` date DEFAULT NULL,
  `pwcd` date DEFAULT NULL,
  `logincount` int(11) DEFAULT NULL,
  `inipwd` int(11) DEFAULT NULL,
  `agency` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`sno`, `mail`, `pw`, `name`, `desig`, `dept`, `urole`, `phone`, `extn`, `mobile`, `custname`, `llogind`, `llogint`, `pwcd`, `logincount`, `inipwd`, `agency`) VALUES
(1, 'varun', '11', 'Varun', 'abc', 'xyz', 'jj', '9790724730', '110', '7358624643', 'rajesh', '2017-06-08', '2017-06-07', '2017-06-06', 4, 1100, 'abcd'),
(4, 'vagarwal', '123', 'Varun Agarwal', 'ABC', 'XYZ', 'AA', '67368925', '110', '9790724730', '', '2017-06-08', '2017-06-08', '2017-06-06', 5, 1101, '11'),
(5, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, ''),
(6, 'vagarwal1256@gmail.com', '11', 'Varun', 'aa', 'xyzz', 'bc', '9899417504', '20', '9699451215', 'bbc', '2013-06-19', '2015-04-21', '0000-00-00', 5, 1101, '11'),
(7, 'abc', 'abc', 'abc', 'abc', 'abc', 'ab', '9792721864', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, ''),
(8, 'vsdv', 'aaa', 'asdca', 'vds', 'vsd', 'ca', '7484144889', '48', '4894654444', 'sd', '2017-06-19', '2017-06-19', '0000-00-00', 5, 1101, '11'),
(9, 'varun@gmail.com', '11', 'Varun', 'abc', 'xyz', 'qw', '9790724730', '110', '9790724730', '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '11'),
(10, 'varun@gmail.com', '11', 'Varun', 'abc', 'xyz', 'qw', '9790724730', '110', '9790724730', NULL, NULL, NULL, NULL, NULL, NULL, '11'),
(11, 'varun', '11', 'Varun', 'abc', 'asd', 'as', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(12, 'vaunn', '123', 'Varun', 'abc', 'asd', 'ew', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, 'varun@gmail', '11', 'VarunAgarwal', 'abc', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, 'varunag@gmail.com', '123', 'VarunAgarwal', 'abc', 'AB', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, 'jdn', '11', 'safcjk', 'cbdsvnd', 'AB', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `rissue`
--

CREATE TABLE `rissue` (
  `machines` varchar(7) NOT NULL,
  `work` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `product` varchar(3) NOT NULL,
  `received` varchar(2) NOT NULL,
  `issue` varchar(250) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `remarks` varchar(250) NOT NULL,
  `forward` varchar(2) NOT NULL,
  `attach` varchar(250) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `comm` varchar(250) DEFAULT NULL,
  `final` varchar(250) DEFAULT NULL,
  `rattach` varchar(1000) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `status` varchar(15) NOT NULL,
  `cause` varchar(250) DEFAULT NULL,
  `action` varchar(250) DEFAULT NULL,
  `sno` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rissue`
--

INSERT INTO `rissue` (`machines`, `work`, `date`, `product`, `received`, `issue`, `phone`, `remarks`, `forward`, `attach`, `email`, `comm`, `final`, `rattach`, `keyword`, `status`, `cause`, `action`, `sno`, `name`) VALUES
('', '', '2017-06-26', 'ABC', 'GH', 'Hello testing', 0, 'asdasd', 'AB', '', '', '', '', '', '', 'Yes', '', '', 1, ''),
('', '', '0000-00-00', 'ABC', 'GH', '', 0, 'asdasd', 'AB', '', '', '', '', '', '', 'Yes', '', '', 2, ''),
('', '', '0000-00-00', '', '', '', 0, 'asdasd', '', '', '', '', '', '', '', '', '', '', 3, ''),
('', '', '0000-00-00', '', '', '', 0, 'asdasd', '', '', '', '', '', '', '', '', '', '', 4, ''),
('', '', '0000-00-00', 'ABC', 'GH', '', 0, 'asdasd', 'AB', '', '', '', '', '', '', 'Yes', '', '', 5, ''),
('', '', '0000-00-00', 'ABC', 'GH', '', 0, 'asdasd', 'AB', '', '', '', '', '', '', 'Yes', '', '', 6, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 7, ''),
('', '', '0000-00-00', 'ABC', 'AB', 'safsafdsf', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 8, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', 'C:xampphtdocsiwp_proje1.jpg', '', '', '', '', '', 'Yes', '', '', 18, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', 'C:xampphtdocsiwp_proje1.jpg', '', '', '', '', '', 'Yes', '', '', 19, ''),
('', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 20, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', 'C:xampphtdocsiwp_proje1.jpg', '', '', '', '', '', 'Yes', '', '', 21, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', 'C:xampphtdocsiwp_proje1.jpg', '', '', '', '', '', 'Yes', '', '', 22, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', 'C:xampphtdocsiwp_proje1.jpg', '', '', '', '', '', 'Yes', '', '', 23, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', 'C:xampphtdocsiwp_proje1.jpg', '', '', '', '', '', 'Yes', '', '', 24, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 25, ''),
('10012', '11', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 26, 'Varun'),
('1265', '864658', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 27, ''),
('1265', '864658', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 28, ''),
('1265', '864658', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 29, ''),
('1265', '864658', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 30, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 31, ''),
('2132', '1232', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 32, 'Varuna'),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 33, ''),
('', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 34, ''),
('', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 35, ''),
('', '', '0000-00-00', 'ABC', 'AB', '', 0, '', 'AB', '', '', '', '', '', '', 'Yes', '', '', 36, '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `type`, `size`, `content`) VALUES
(1, '1.jpg', '', 0, ''),
(2, '01 - Maze of Bones (Rick Riord', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rissue`
--
ALTER TABLE `rissue`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rissue`
--
ALTER TABLE `rissue`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
