-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 01:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcard`
--

CREATE TABLE `bcard` (
  `bt` varchar(30) NOT NULL,
  `bd` varchar(30) NOT NULL,
  `bdes` text NOT NULL,
  `bimg` varchar(30) NOT NULL,
  `bdess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bcard`
--

INSERT INTO `bcard` (`bt`, `bd`, `bdes`, `bimg`, `bdess`) VALUES
('How to be good software engine', '03 Jun 2022', 'Tip about developing yourself in software engineering', '0', ' '),
('qqqqqqqqqqqq', '2102', '2tfhtdfgdf', '1', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `boid` int(11) NOT NULL,
  `bot` varchar(50) NOT NULL,
  `bod` varchar(200) NOT NULL,
  `bol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`boid`, `bot`, `bod`, `bol`) VALUES
(1, 'Pro HTML5 and CSS3 Design Patterns', ' This book unleashes your productivity and creativity in web design and development', 'https://lltldzvgsc.pdcdn1.top/dl2.php?id=12105664&h=34e5f297b998de5f3cc63cbebda16314&u=cache&ext=pdf'),
(2, 'Object Oriented Programming using C#', 'Develop your practical skills in Object Oriented Programming using C#', 'https://rnsm7wq42f.pdcdn1.top/dl2.php?id=1422735&h=2842e5a712623153ffd37afc325ca109&u=cache&ext=pdf&n=Object%20oriented%20programming%20using%20c');

-- --------------------------------------------------------

--
-- Table structure for table `ccard`
--

CREATE TABLE `ccard` (
  `cid` int(11) NOT NULL,
  `ct` varchar(30) NOT NULL,
  `cd` varchar(30) NOT NULL,
  `cdes` text NOT NULL,
  `img` varchar(10) NOT NULL DEFAULT 'user',
  `bdess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ccard`
--

INSERT INTO `ccard` (`cid`, `ct`, `cd`, `cdes`, `img`, `bdess`) VALUES
(10, 'asasdasd', 'asdasdasd', 'asdasdasd', '1', ''),
(11, 'c#', '10 jun 2022', 'qwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `cinfo`
--

CREATE TABLE `cinfo` (
  `id` int(11) NOT NULL,
  `vname` varchar(50) DEFAULT NULL,
  `vlink` varchar(200) NOT NULL DEFAULT '0',
  `imp` int(11) NOT NULL,
  `vfun` varchar(40) NOT NULL DEFAULT 'myfun'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinfo`
--

INSERT INTO `cinfo` (`id`, `vname`, `vlink`, `imp`, `vfun`) VALUES
(41, 'Introduction', 'Hpryaxtto5o', 10, 'myfun'),
(42, 'Install Visual Studio', 'fpgaoAgz7xs', 10, 'myfun'),
(43, 'Data Types & Variables', 'uh4Lb9l8Mio', 10, 'myfun'),
(44, 'Type Casting & Pre & Post', 'u-uZuFjG0v0', 10, 'myfun'),
(45, 'Arrays', 'o55fr7cQxWw', 10, 'myfun'),
(46, '', '', 10, 'myfun'),
(47, 'asddasdasdasd', 'qCvYl_uoR6g', 11, 'myfun'),
(48, '', '', 11, 'myfun'),
(49, '', '', 11, 'myfun'),
(50, '', '', 11, 'myfun'),
(51, '', '', 11, 'myfun'),
(52, '', '', 11, 'myfun');

-- --------------------------------------------------------

--
-- Table structure for table `cmnt`
--

CREATE TABLE `cmnt` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmnt`
--

INSERT INTO `cmnt` (`id`, `comment`, `name`, `img`) VALUES
(10, 'This website really helped me to improve my skills ', 'Ammar', '0'),
(11, 'This is the most powerful website I have ever seen ', 'Ahmad Br', '2'),
(13, 'nice web', 'Rashedrayyan', '0'),
(14, 'Every one is welcomed to our website', 'Azmi', '2'),
(16, 'Very good website', 'Ahmad', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cprofile`
--

CREATE TABLE `cprofile` (
  `cid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cprofile`
--

INSERT INTO `cprofile` (`cid`, `user_id`) VALUES
(10, 1),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'user',
  `avatar` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `level`, `avatar`) VALUES
(1, 'Azmi', 'azmirami@gmail.com', '123', 'admin', '2'),
(69, 'Ahmad', 'ahmad111@gmail.com', '123', 'user', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`boid`);

--
-- Indexes for table `ccard`
--
ALTER TABLE `ccard`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cinfo`
--
ALTER TABLE `cinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imp` (`imp`);

--
-- Indexes for table `cmnt`
--
ALTER TABLE `cmnt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cprofile`
--
ALTER TABLE `cprofile`
  ADD PRIMARY KEY (`cid`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_name` (`user_name`) USING BTREE,
  ADD KEY `user_email` (`user_email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `boid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ccard`
--
ALTER TABLE `ccard`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cinfo`
--
ALTER TABLE `cinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cmnt`
--
ALTER TABLE `cmnt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cinfo`
--
ALTER TABLE `cinfo`
  ADD CONSTRAINT `cinfo_ibfk_1` FOREIGN KEY (`imp`) REFERENCES `ccard` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cprofile`
--
ALTER TABLE `cprofile`
  ADD CONSTRAINT `cprofile_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `ccard` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cprofile_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
