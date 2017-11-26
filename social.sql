-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 09:41 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `aashu`
--

CREATE TABLE `aashu` (
  `Text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_list`
--

INSERT INTO `block_list` (`id`, `block_id`, `user_id`) VALUES
(1, 17, 23),
(2, 23, 17);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_since` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `friend_since`) VALUES
(1, 12, 10, 1505707797),
(2, 10, 12, 1505707797),
(3, 12, 14, 1505723603),
(4, 14, 12, 1505723603),
(5, 10, 15, 1505738269),
(6, 15, 10, 1505738269),
(7, 12, 15, 1505747224),
(8, 15, 12, 1505747224),
(9, 10, 17, 1505842875),
(10, 17, 10, 1505842875),
(13, 11, 13, 1505909197),
(14, 13, 11, 1505909197),
(15, 11, 12, 1505909289),
(16, 12, 11, 1505909289),
(20, 20, 10, 1506330773),
(21, 13, 10, 1506332521),
(22, 10, 13, 1506332521),
(23, 13, 12, 1507811356),
(24, 12, 13, 1507811356);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `sent_to_id` int(11) NOT NULL,
  `sent_from_id` int(11) NOT NULL,
  `sent_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `sent_to_id`, `sent_from_id`, `sent_time`) VALUES
(10, 11, 10, 1505678503),
(17, 11, 14, 1505719905),
(18, 14, 10, 1505838285),
(20, 12, 17, 1505846047),
(22, 18, 11, 1505909208),
(23, 12, 19, 1505930969),
(26, 17, 23, 1506334126);

-- --------------------------------------------------------

--
-- Table structure for table `gupta`
--

CREATE TABLE `gupta` (
  `Text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(2048) NOT NULL,
  `posted_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `status`, `posted_at`) VALUES
(44, 10, 'hello', 1505668637),
(45, 12, 'hello', 1505671446),
(46, 10, 'hey!!!!!', 1505675188),
(47, 13, 'hello.........', 1505676362),
(48, 13, 'hey!!!!!!', 1505718022),
(49, 14, 'Hello!!!!!!!!!!', 1505719625),
(50, 12, 'hii everyone', 1505723585),
(51, 17, 'hiiiii', 1505838458),
(52, 11, 'hello.....', 1505908968),
(53, 19, 'hello.....', 1505930962),
(54, 20, 'hello!!!!!', 1506089920),
(55, 10, 'Hello', 1506271804),
(56, 12, 'Hyyyy...........', 1506272227),
(57, 10, 'hello', 1506326766),
(58, 21, 'hello', 1506327042),
(59, 10, 'hii', 1506332698),
(60, 22, 'Hyyy......', 1506333278),
(61, 10, '', 1506333898),
(62, 10, 'hey....', 1506333915),
(63, 23, 'Hello', 1506334117),
(64, 10, 'hello', 1507810153),
(65, 10, 'hey', 1508064336);

-- --------------------------------------------------------

--
-- Table structure for table `rahul`
--

CREATE TABLE `rahul` (
  `Text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `middle_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `joining_time_stamp` bigint(20) NOT NULL,
  `sex` text NOT NULL,
  `profile_status` varchar(256) NOT NULL,
  `profile_picture_path` varchar(256) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `hometown` varchar(256) NOT NULL,
  `school_name` varchar(256) NOT NULL,
  `college_name` varchar(256) NOT NULL,
  `language_1st` varchar(256) NOT NULL,
  `language_2nd` varchar(256) NOT NULL,
  `language_3rd` varchar(256) NOT NULL,
  `relationship` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `joining_time_stamp`, `sex`, `profile_status`, `profile_picture_path`, `mobile_no`, `hometown`, `school_name`, `college_name`, `language_1st`, `language_2nd`, `language_3rd`, `relationship`) VALUES
(10, 'Palash', '', 'Lalwani', 'palash.lalwani04@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505658959, 'male', 'Khaawaani Piwaani Mazzaani Life!!!!!!!!!!', 'http://localhost/connect/uploads/10/1934643_706367076132305_3455526582363512842_n.jpg', '9893956101', 'Jaora', 'St. PAUL\'S CONVENT SCHOOL', 'SGSITS Indore', 'Hindi', 'English', 'Sindhi', 'Single'),
(11, 'Vishal', '', 'Singh', 'vishal04singh09@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505668708, 'male', 'active', 'http://localhost/connect/uploads/11/640.jpg', '7974065392', 'Bhopal', 'St.Xaviers SR. SEC. School', 'SGSITS', 'Hindi', 'English', '', 'Single'),
(12, 'Vinay', '', 'Bhugware', 'vinaybhugware@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505671383, 'male', 'killer man', 'http://localhost/connect/uploads/12/images.jpg', '9179521712', 'SENDHWA', 'B.J.H.S.S', 'SGSITS', 'HINDI', 'ENGLISH', 'NIMADI', 'SINGLE'),
(13, 'Ashish', '', 'Baghel', 'ashish@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505676315, 'male', '', 'http://localhost/connect/uploads/13/640.jpg', '', '', '', '', '', '', '', ''),
(14, 'Sajal', '', 'Jain', 'sajaljain12121997@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505719580, 'male', '', '', '8964017687', 'Khurai', 'Holy Family Convent', 'SGSITS Indore', 'Hindi', 'English', '', 'Single'),
(15, 'Nilesh', '', 'Vishvakarma', 'nileshvishvakarma@gmail.com', 'd17670f349e3e89f2b06d7c02c3a4f7338bb9ee0', 1505724063, 'male', '', '', '', '', '', '', '', '', '', ''),
(17, 'Himanshu', '', 'Gupta', 'h@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505838438, 'male', '', '', '', '', '', '', '', '', '', ''),
(18, 'Arun', '', 'Nagar', 'arunnagar@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505846783, 'male', '', 'http://localhost/connect/uploads/18/640.jpg', '', '', '', '', '', '', '', ''),
(19, 'Gajendra', '', 'Sisodiya', 'gajendra@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1505930919, 'male', '', '', '', '', '', '', '', '', '', ''),
(21, 'Rahul', '', 'Bhalavi', 'bhalavi78@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1506326988, 'male', '', 'http://localhost/connect/uploads/21/640.jpg', '', '', '', '', '', '', '', ''),
(22, 'Aashu', '', 'Baghel', 'ashishbaghel391@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1506333235, 'male', '', 'http://localhost/connect/uploads/22/IMG_20160220_191743.jpg', '8236996094', 'Dhar', 'School Of Excellence Dhar', 'S.G.S.I.T.S Indore', 'Hindi', '', '', 'Single'),
(23, 'Gupta', 'Palash', 'Vishal', 'vishal@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 1506334063, 'male', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_list`
--
ALTER TABLE `block_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_list`
--
ALTER TABLE `block_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
