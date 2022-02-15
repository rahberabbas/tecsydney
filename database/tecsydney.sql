-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 12:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecsydney`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(6) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'tecsydney@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(6) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(800) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `updated_at` varchar(200) NOT NULL,
  `deleted_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aa', 'http://localhost/tecsydney/assets/blogs/1.jpg', '<p>ghcghghc</p>', '0000-00-00 00:00:00.00000', '2022-02-15 16:18:09', '2022-02-15 16:19:45'),
(2, 'test rohit', 'http://localhost/tecsydney/assets/blogs/1.jpg', '<p>test vvhj</p>', '2022-02-11 09:48:59.00000', '2022-02-11 15:24:33', '2022-02-15 16:19:54'),
(3, 'first blog', 'http://localhost/tecsydney/assets/blogs/1.jpg', '<p>welcome blog</p>', '2022-02-15 10:48:39.00000', '', '2022-02-15 16:19:48'),
(4, 'tenn', 'http://localhost/tecsydney/assets/blogs/3.jpg', '<p>hello</p>', '2022-02-15 10:49:09.00000', '', ''),
(5, 'teen', 'http://localhost/tecsydney/assets/blogs/6.jpg', '<p>hvhhj</p>', '2022-02-15 10:49:39.00000', '', ''),
(6, 'one blog 11', 'http://localhost/tecsydney/assets/blogs/4.jpg', '<p>helloo vhjvhj</p>', '2022-02-15 10:51:45.00000', '2022-02-15 16:31:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'test one', 'jsbbhatirohit47@gmail.com', '9871750901', 'test', 'hello', '2022-02-14 05:03:30.466049'),
(2, 'rohit', 'jsbbhatirohit47@gmail.com', '9871750901', 'test', 'test message', '2022-02-14 08:59:46.327154');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `email`, `phone`, `service`, `message`) VALUES
(1, 'test one', 'jsbbhatirohit47@gmail.com', '9871750901', 'Search Engine Optimization', 'hello'),
(2, 'raahul', 'jsbbhatirohit47@gmail.com', '9871750901', 'Search Engine Optimization', 'cgh'),
(3, 'abhishek', 'abhisheksquadup@gmail.com', '9569985339', 'Search Engine Optimization', 'Hello'),
(4, 'test one', 'jsbbhatirohit47@gmail.com', '9871750901', 'Paid Advertising', 'testts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
