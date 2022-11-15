-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2022 at 03:49 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `courseno` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `lecturar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseno`, `name`, `title`, `lecturar`) VALUES
(4, 'C002', 'IT', 'ITgfd', 'romiyal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fname`, `lname`, `username`, `password`) VALUES
('sayan', 'nikka', '2020ictbit1@gma.com', 'da'),
('nasim', 'khan', 'nasim123@gmail.com', 'password123'),
('leave', 'ka', 'nima@lkgmi.vpm', 'aaaa'),
('nimzy', 'nimzy', 'nimzylk@gmail.com', 'nimzy'),
('sayan', 'khan', 'sayanoiw@gamil.com', 'qwqe');

--
-- Triggers `login`
--
DROP TRIGGER IF EXISTS `old_login`;
DELIMITER $$
CREATE TRIGGER `old_login` BEFORE DELETE ON `login` FOR EACH ROW BEGIN
INSERT INTO old_login(fname,lname)VALUES(old.fname,old.lname);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `name`, `email`, `username`, `password`) VALUES
(13, '001', 'fsef', 'nimzylk@gmail.com', 'nimzylk@gmail.com', 'nimzy'),
(14, '003', 'AARIFF MOHAMED NIMZY', 'admin@example.com', 'gdf', 'rtyrty'),
(15, '002', 'aariff', 'nimzykhan123@gmail.com', 'nimzykhan123@gmail.com', 'nimzykhan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
