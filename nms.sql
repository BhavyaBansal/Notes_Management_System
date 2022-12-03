-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 04:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nms`
--

-- --------------------------------------------------------

--
-- Table structure for table `signupnms`
--

CREATE TABLE `signupnms` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `teacher_code` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupnms`
--

INSERT INTO `signupnms` (`id`, `name`, `dob`, `phone_no`, `email`, `password`, `teacher_code`, `created_at`, `updated_at`, `token`, `status`) VALUES
(4, 'admin', '2002-11-12', '0976183845', 'notesmanagementsystem@gmail.com', '$2y$10$B4GV7/LEhGSc5oCVEUk9qeqIQeDpCMrxuTv8pPUS8C.oXTofO3x5O', '', '2021-02-11 07:41:23', '2021-02-11 12:14:12', '', 'active'),
(6, 'Gaurav agarwal', '2002-11-12', '0639502719', 'gaurav183002@dei.ac.in', '$2y$10$ZsivHX5jor5nDTEZKa6mzeh2.TOOMQeSiNVxefAHbBa680W2Lc0gG', '', '2021-02-11 12:44:36', '2021-02-11 12:45:02', '6d2a01cdd3ce3cddb5bb9af460b33a', 'active'),
(8, 'sheeldeep singh', '1998-07-02', '8171167179', 'sheeldeepsingh0336@gmail.com', '$2y$10$CWFDpU67EuS3x28Lg5vb9uW0nJ6FM..Hdm36C8kkKR2Ql2I4lWnYa', '', '2021-02-12 04:39:00', '2021-02-12 04:41:03', '012ce24a8eabcb331bb8925fcc0fde', 'active'),
(9, 'gaurav', '2020-11-30', '8171167179', 'gauravagarwal091@gmail.com', '$2y$10$21VTwRCIaZyvpS5/xsBVRumhSwr4TAA4K15meCAhr.//LXvTjKNJ6', '', '2021-02-12 08:44:47', '2021-02-12 08:45:27', '63b6996869e9af473e9688a4a0058d', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_id` varchar(50) DEFAULT NULL,
  `file_name` varchar(60) DEFAULT NULL,
  `file_size` int(11) NOT NULL,
  `uploaded_by_email` varchar(40) DEFAULT NULL,
  `faculty` varchar(40) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `subject` varchar(40) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_id`, `file_name`, `file_size`, `uploaded_by_email`, `faculty`, `course`, `branch`, `semester`, `subject`, `uploaded_on`) VALUES
(13, '1nE9zeJ2uM1IxOxK7Mp35erZ-UjHrBQV1', 'Unit-2.PDF', 1610, 'gauravagarwal091@gmail.com', 'Technical', 'diploma', 'vit', 'semester1', 'applied physics i', '2021-02-11 15:38:41'),
(20, '1qyXmUCmZjlALnBlImuwVLXbxd-nUuSqe', 'Unit-2.PDF', 1610, 'notesmanagementsystem@gmail.com', 'technical', 'diploma', 'vit', 'semester2', 'applied physics i', '2021-02-11 17:12:45'),
(21, '1UJippE3G6ho9BzlYw_u7y-HXWz6XTbFZ', 'Unit-1.PDF', 4096, 'notesmanagementsystem@gmail.com', 'technical', 'diploma', 'vit', 'semester3', 'applied physics i', '2021-02-11 17:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'google', '100412199721683250945', 'gaurav', 'agarwal', 'gauravagarwal091@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/a-/AOh14Gi15JUfeYuyZznE7PhP3vamLBeaJEHvcbn3EEngXA=s96-c', '', '2021-02-12 08:22:12', '2021-02-12 15:30:05'),
(2, 'google', '112050348484332738680', 'Gaurav', 'Agarwal', 'gaurav183002@dei.ac.in', '', 'en', 'https://lh3.googleusercontent.com/a-/AOh14GjSUA-nCNtnqG00n4S1CCSp1VX9-GSUeeF-2j_Q=s96-c', '', '2021-02-12 15:30:28', '2021-02-12 15:30:28'),
(3, 'google', '116870180940585116198', 'Notes', 'Management System', 'notesmanagementsystem@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/a-/AOh14GiwA_XRT4NVg-d3c2fqk4Z61fNVgeFmyK4ZWKjr=s96-c', '', '2021-02-12 15:57:38', '2021-02-12 15:57:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signupnms`
--
ALTER TABLE `signupnms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
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
-- AUTO_INCREMENT for table `signupnms`
--
ALTER TABLE `signupnms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
