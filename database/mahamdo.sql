-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahamdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `list` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`list_id`, `list`) VALUES
(1, 'اساسية'),
(2, 'شخصية'),
(3, 'عمل'),
(4, 'تسوق'),
(5, 'أمنيات'),
(6, 'أخرى');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `dueDate` date NOT NULL,
  `dueTime` time DEFAULT NULL,
  `list` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `done` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task`, `dueDate`, `dueTime`, `list`, `priority`, `user_id`, `done`) VALUES
(1, 'ss', '2022-10-12', '04:34:35', 6, 1, 2, 0),
(5, 'انجار المشروع', '2022-10-30', '11:14:00', 3, 11, 7, 0),
(6, 'ahshshas', '2022-10-02', '00:00:00', 2, 2, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `notes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `UserName`, `password`, `email`, `phone`, `notes`) VALUES
(1, 'tawaf', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'tawaf@gmail.com', '212212121', 1),
(2, 'samia', '8cb2237d0679ca88db6464eac60da96345513964', 'gagagg@gmail.com', '12221', 1),
(3, 'ahmed', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'tad@gmail.com', '121221121', 1),
(4, 'samiii', '1d7068e0ebba37d9b545245e781508987e0fc59a', 'tad@gmail.com', '1221221', 1),
(5, 'lkjajljdlkjk', '7d37e379b76b1a9a56eaa2104a70ceb2f9758007', 'tad@gmail.com', '2211212', 1),
(6, 'jehad', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'tad@gmail.com', '212122', 1),
(7, 'asma', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'asma@gmail.com', '6165366121', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `taskFG1` (`list`),
  ADD KEY `taskFG2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `taskFG1` FOREIGN KEY (`list`) REFERENCES `list` (`list_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taskFG2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
