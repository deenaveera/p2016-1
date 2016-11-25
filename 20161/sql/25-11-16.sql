-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 11:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lottary_bond`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_role` tinyint(1) NOT NULL COMMENT '0-super admin',
  `status` tinyint(1) NOT NULL COMMENT '1-Active,0-Inactive',
  `is_deleted` tinyint(1) NOT NULL COMMENT '0-No,1-Yes',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `user_role`, `status`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lottary', 'super admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'vino', 'mano', 'vinobha', '5f4dcc3b5aa765d61d8327deb882cf99', 'vino@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'mihir', 'oza', 'mihir', '5f4dcc3b5aa765d61d8327deb882cf99', 'mihir@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'mani', 'ben', 'mani', '5f4dcc3b5aa765d61d8327deb882cf99', 'mani@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'john', 'ben', 'john', '5f4dcc3b5aa765d61d8327deb882cf99', 'john@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'bala', 'bala', 'bala', '5a22e6c339c96c9c0513a46e44c39683', 'bala@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'vikram', 'vikram', 'vikram', '5f4dcc3b5aa765d61d8327deb882cf99', 'vikram@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'niki', 'niki', 'niki', '5f4dcc3b5aa765d61d8327deb882cf99', 'niki@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'sangee', 'sangee', 'sangee', '5f4dcc3b5aa765d61d8327deb882cf99', 'sangee@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'sruthi', 'sruthi', 'sruthi', '5f4dcc3b5aa765d61d8327deb882cf99', 'sruthi@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'aaa', 'aaa', 'aaa@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'aaa@gmail.com', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-11-23 12:29:03'),
(12, 'bbb', 'bbb', 'bbb', '5f4dcc3b5aa765d61d8327deb882cf99', 'bbb@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'ccc', 'ccc', 'ccc', '5f4dcc3b5aa765d61d8327deb882cf99', 'ccc@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'ddd', 'ddd', 'ddd', '5f4dcc3b5aa765d61d8327deb882cf99', 'ddd@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'eee', 'eee', 'eee', '5f4dcc3b5aa765d61d8327deb882cf99', 'eee@gmail.com', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-11-24 07:14:01'),
(17, 'ggg', 'ggg', 'ggg', '5f4dcc3b5aa765d61d8327deb882cf99', 'ggg@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'hhh', 'hhh', 'hhh', '5f4dcc3b5aa765d61d8327deb882cf99', 'hhh@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'iii', 'iii', 'iii', '5f4dcc3b5aa765d61d8327deb882cf99', 'iii@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'jjj', 'jjj', 'sruthi', '5f4dcc3b5aa765d61d8327deb882cf99', 'jjj@gmail.com', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-11-23 12:29:46'),
(21, 'kkk', 'kkk', 'kkk', '5f4dcc3b5aa765d61d8327deb882cf99', 'kkk@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'lll', 'lll', 'lll', '5f4dcc3b5aa765d61d8327deb882cf99', 'lll@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'mmm', 'mmm', 'mmm', '5f4dcc3b5aa765d61d8327deb882cf99', 'mmm@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'nnn', 'nnn', 'nnn', '5f4dcc3b5aa765d61d8327deb882cf99', 'nnn@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'ooo', 'ooo', 'ooo', '5f4dcc3b5aa765d61d8327deb882cf99', 'ooo@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'ppp', 'ppp', 'ppp', '5f4dcc3b5aa765d61d8327deb882cf99', 'ppp@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'qqq', 'qqq', 'qqq', '5f4dcc3b5aa765d61d8327deb882cf99', 'qqq@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'rrr', 'rrr', 'rrr', '5f4dcc3b5aa765d61d8327deb882cf99', 'rrr@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'sss', 'sss', 'sss', '5f4dcc3b5aa765d61d8327deb882cf99', 'sss@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'ttt', 'ttt', 'ttt', '5f4dcc3b5aa765d61d8327deb882cf99', 'ttt@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'uuu', 'uuu', 'uuu', '5f4dcc3b5aa765d61d8327deb882cf99', 'uuu@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'vvv', 'vvv', 'vvv', '5f4dcc3b5aa765d61d8327deb882cf99', 'vvv@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'www', 'www', 'www', '5f4dcc3b5aa765d61d8327deb882cf99', 'www@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'xxx', 'xxx', 'xxx', '5f4dcc3b5aa765d61d8327deb882cf99', 'xxx@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'yyy', 'yyy', 'yyy', '5f4dcc3b5aa765d61d8327deb882cf99', 'yyy@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'zzz', 'zzz', 'zzz', '5f4dcc3b5aa765d61d8327deb882cf99', 'zzz@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'new', 'new', 'new', '5f4dcc3b5aa765d61d8327deb882cf99', 'new@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'paramu', 'paramul', 'paramu', '5f4dcc3b5aa765d61d8327deb882cf99', 'paramu@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'paramu1', 'paramu1', 'paramu1', '5f4dcc3b5aa765d61d8327deb882cf99', 'paramu1@gmail.com', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
