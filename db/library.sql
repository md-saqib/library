-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 10:39 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `ISBN`, `title`, `author`, `Class`, `grade`, `semester`) VALUES
(1, 1111, 'Mathematics', 'Dr. KSC', 'Math', 'A', 3),
(2, 1213, 'Automata', 'Dr Vikram', 'Data Science', 'B', 7),
(3, 4325, 'The Indian Heritages', 'K.V Shastri', 'Economics', 'D', 1),
(4, 4324, 'Web Development', 'Shree', 'Engineering', 'A', 7),
(5, 5645, 'Data Structures', 'Padmanabha', 'Computer Science', 'S', 4),
(6, 5416, 'English', 'KC Das', 'General', 'A', 1),
(7, 5421, 'Software Design', 'Mohammed', 'UI/UX', 'E', 5),
(8, 2132, 'Operating System', 'P.V Kamal', 'Computation', 'A', 4),
(9, 5646, 'Python', 'Kavita', 'Programming', 'A', 4),
(10, 6565, 'Physics', 'Shiva Reddy', 'General', 'G', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lendbook`
--

CREATE TABLE `lendbook` (
  `id` int(10) NOT NULL,
  `lend_book_from` varchar(100) NOT NULL,
  `lend_book_till` varchar(100) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `UID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lendbook`
--

INSERT INTO `lendbook` (`id`, `lend_book_from`, `lend_book_till`, `ISBN`, `UID`) VALUES
(2, '2019-10-29', '2019-10-31', 1213, 112),
(3, '2019-10-30', '2019-10-31', 1213, 112),
(6, '2019-10-22', '2019-10-24', 2132, 123);

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE `returnbook` (
  `id` int(10) NOT NULL,
  `Fine` int(100) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `UID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `returnbook`
--

INSERT INTO `returnbook` (`id`, `Fine`, `ISBN`, `UID`) VALUES
(1, 70, 4324, 545),
(2, 30, 1213, 101),
(3, 80, 1213, 545),
(8, 40, 1111, 100);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `UID` int(10) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `UID`, `course`, `semester`, `email`, `mobile`) VALUES
(1, 'Mohammed Saqib', 100, 'Information Science', 7, 'mdsaqib108@gmail.com', 9851224101),
(2, 'Ansar Ahmed', 101, 'Information Science', 8, 'ansar@gmail.com', 9026465131),
(3, 'Ahmed', 112, 'Commerce', 2, 'ahmed@yahoo.in', 9658743212),
(4, 'Siva', 545, 'Engineering', 7, 'siva@gmail.com', 8964753210),
(5, 'shabana', 123, 'commerce', 6, 'shabana@gmail.com', 7854693213),
(6, 'Monish', 852, 'Arts', 1, 'monish@gmail.com', 7756982130),
(11, 'Muskaan', 165, 'Arts', 1, 'muskan@gmail.com', 9851251446);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lendbook`
--
ALTER TABLE `lendbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returnbook`
--
ALTER TABLE `returnbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lendbook`
--
ALTER TABLE `lendbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `returnbook`
--
ALTER TABLE `returnbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
