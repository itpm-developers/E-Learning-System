-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 11:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sliit`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_assignments`
--

CREATE TABLE `add_assignments` (
  `id` int(11) NOT NULL,
  `Module` varchar(20) NOT NULL,
  `Description` varchar(20) NOT NULL,
  `File_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_assignments`
--

INSERT INTO `add_assignments` (`id`, `Module`, `Description`, `File_name`) VALUES
(5, 'spm', '', ''),
(6, 'SE', 'software engineering', ''),
(7, 'NDM', 'Network Design and M', 'quote.txt');

-- --------------------------------------------------------

--
-- Table structure for table `add_events`
--

CREATE TABLE `add_events` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file_name` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_events`
--

INSERT INTO `add_events` (`id`, `title`, `description`, `file_name`) VALUES
(1, 'VIRAMAYA', 'A  classica musical show which will be held on 9th April 2019 at SLIIT\r\nAll are welcome', 0),
(2, 'Ganthera', 'organized by the faculty of engineering', 0),
(3, 'Annual pirith', 'held at quadrangles', 0),
(4, 'jgfh', 'jghjfjhgk', 0),
(5, 'new', 'new event', 0),
(6, 'Annual Get Together', 'get together of June intake 2019', 20953935);

-- --------------------------------------------------------

--
-- Table structure for table `add_new`
--

CREATE TABLE `add_new` (
  `id` int(10) NOT NULL,
  `new_course` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `add_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_new`
--

INSERT INTO `add_new` (`id`, `new_course`, `description`, `add_user`) VALUES
(1, '', '', 0),
(2, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_quizes`
--

CREATE TABLE `add_quizes` (
  `id` int(11) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `fileName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_quizes`
--

INSERT INTO `add_quizes` (`id`, `module_name`, `descrip`, `fileName`) VALUES
(1, 'PAF', 'This should be compl', 'quote.txt'),
(2, 'MC', 'Students are required to complete the quiz before 15th of May', 'quote.txt');

-- --------------------------------------------------------

--
-- Table structure for table `add_reply`
--

CREATE TABLE `add_reply` (
  `id` varchar(20) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `file_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_reply`
--

INSERT INTO `add_reply` (`id`, `reply`, `file_name`) VALUES
('IT17026208', 'The deadline will be extended upto 10th May.', 'ss.txt');

-- --------------------------------------------------------

--
-- Table structure for table `module_slide`
--

CREATE TABLE `module_slide` (
  `id` int(11) NOT NULL,
  `module` varchar(50) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `add_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_slide`
--

INSERT INTO `module_slide` (`id`, `module`, `file_name`, `add_user`) VALUES
(1, 'MAD', 'IT3050 Reflective Journal.docx', '0');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `index_no` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `f_name`, `l_name`, `email`, `password`, `faculty`, `course`, `batch`, `index_no`, `date`) VALUES
(1, 'Hasini', 'IT17026208', 'hasini.d21@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Faculty_of_Computing', 'Computer Networks', '3rd Year', 'When will be the deadline of NDM assignment?', '2019-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `student_signup`
--

CREATE TABLE `student_signup` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `index_no` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_signup`
--

INSERT INTO `student_signup` (`id`, `f_name`, `l_name`, `email`, `password`, `faculty`, `course`, `batch`, `index_no`, `date`, `active`) VALUES
(1, 'udani', 'isuru', 'udani123@gmail.com', '47f0acce476b3a3350bca047b5630721', 'Faculty_of_Computing', 'Web_Application Development', '2019', 'colombo 7', '2019-04-03', '0'),
(2, 'amasha', 'chamanthi', 'amasha123@gmail.com', '83486bdd766c17fad2d6d0fb09bde998', 'Faculty_of_Computing', 'Software Engineering', '2019', 'Gampaha', '2019-04-06', '0'),
(3, 'Anuththara', 'Hiruni', 'anu123@gmail.com', '98a8d3832ad7f81065524d69085d0597', 'Faculty_of_Computing', 'Software Engineering', '2021', 'galle road,weligama', '2019-04-26', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_group` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `user_group`, `password`) VALUES
(10, 'sachin', 'peries', 'sachinperiez@gmail.com', '1', '12345'),
(11, 'Hasini', 'Devindi', 'hasini@gmail.com', '1', 'hasini'),
(14, 'udani', 'isuru', 'udani123@gmail.com', '0', '8a780ac30ffcc7005ff68adfb99f7319');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_assignments`
--
ALTER TABLE `add_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_events`
--
ALTER TABLE `add_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_new`
--
ALTER TABLE `add_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_quizes`
--
ALTER TABLE `add_quizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_slide`
--
ALTER TABLE `module_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_signup`
--
ALTER TABLE `student_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_assignments`
--
ALTER TABLE `add_assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `add_events`
--
ALTER TABLE `add_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_new`
--
ALTER TABLE `add_new`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_quizes`
--
ALTER TABLE `add_quizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `module_slide`
--
ALTER TABLE `module_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_signup`
--
ALTER TABLE `student_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
