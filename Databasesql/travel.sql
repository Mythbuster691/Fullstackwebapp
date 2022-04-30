-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 04:21 PM
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interview_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slottiming` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderidrazor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentidrazor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `paymentstatus` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `fathers_name`, `date_of_birth`, `contact_no`, `email`, `district`, `interview_destination`, `apply_for`, `resume`, `booking_id`, `slotdate`, `slottiming`, `orderidrazor`, `paymentidrazor`, `status`, `paymentstatus`, `created_at`, `updated_at`) VALUES
(1, 'Tarun Kumar Sharma', 'Ranvir Kumar Sharma', '2022-04-30', '8700923313', 'taruniiicool123@gmail.com', 'Nagpur', 'Jaipur', 'intern', 'pdf/pL3yBrE5P584CIye2Q7waZ5O4iAD3xxb4OHeopeW.pdf', '1458c2', '15 July 2022', '10 PM to 11 PM', 'order_JPRDkcT1PkOosg', 'pay_JPRDy7kXdvm6ym', 1, 1, '2022-04-29 23:06:51', '2022-04-29 23:06:51'),
(2, 'ghchgcghc', 'vjhhjvhjv', '2022-04-30', '8700923313', 'admin@task.com', 'Nagpur', 'Jaipur', 'job', 'pdf/jMJ8KLt9pAd8gtBwZVBw4Y6JRVeOUetQoPTMCJt9.pdf', 'cf609d', '15 July 2022', '10 PM to 11 PM', 'order_JPUGzqUF43di51', 'pay_JPUHm8ybzwZYhq', 1, 1, '2022-04-30 02:06:00', '2022-04-30 02:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `name`, `location`, `status`) VALUES
(1, 'Jaipur', 'Spree Hotel', 1),
(2, 'Bikaner', 'Hotel continental Blue', 1),
(3, 'Jodhpur\r\n', 'Lords Inn', 1),
(4, 'Udaipur', 'Hotel Yois', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `status`) VALUES
(1, 'Ganganagar', 0),
(2, 'Hanumangarh', 0),
(3, 'Biakner', 0),
(4, 'Churu', 0),
(5, 'Nagpur', 0),
(6, 'Jhunjhun', 0),
(7, 'Jaisalmer', 0),
(8, 'Jodhpur', 0),
(9, 'Barmen', 0),
(10, 'Jalore', 0),
(11, 'Pali', 0),
(12, 'Sikar', 0),
(13, 'Jaipur', 0),
(14, 'Alwar', 0),
(15, 'Bharatpur', 0),
(16, 'Dausa', 0),
(17, 'Sawa Madhopur', 0),
(18, 'Ajmer', 0),
(19, 'Karaul', 0),
(20, 'Dhalpur', 0),
(21, 'Bundi', 0),
(22, 'Tonk', 0),
(23, 'Chittorgarh', 0),
(24, 'Udaipur', 0),
(25, 'Pratapgarh', 0),
(26, 'Banswara', 0),
(27, 'Dungarpur', 0),
(28, 'Raj Samand', 0),
(29, 'Sirohi', 0),
(30, 'Kota', 0),
(31, 'Baran', 0),
(32, 'Jhalwar', 0),
(33, 'Bhilwara', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city_center`
--

CREATE TABLE `city_center` (
  `id` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `centerid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_center`
--

INSERT INTO `city_center` (`id`, `cityid`, `centerid`, `status`) VALUES
(1, 1, 2, 1),
(2, 2, 2, 1),
(3, 3, 2, 1),
(4, 4, 2, 1),
(5, 5, 2, 1),
(6, 6, 2, 1),
(7, 5, 1, 1),
(8, 6, 1, 1),
(9, 7, 3, 1),
(10, 8, 3, 1),
(11, 9, 3, 1),
(12, 10, 3, 1),
(13, 11, 3, 1),
(14, 12, 1, 1),
(15, 13, 1, 1),
(16, 14, 1, 1),
(17, 15, 1, 1),
(18, 16, 1, 1),
(19, 17, 1, 1),
(20, 18, 1, 1),
(21, 19, 1, 1),
(22, 20, 1, 1),
(23, 21, 1, 1),
(24, 22, 1, 1),
(25, 23, 4, 1),
(26, 24, 4, 1),
(27, 25, 4, 1),
(28, 26, 4, 1),
(29, 27, 4, 1),
(30, 28, 4, 1),
(31, 29, 4, 1),
(32, 29, 3, 1),
(33, 30, 1, 1),
(34, 30, 4, 1),
(35, 31, 1, 1),
(36, 31, 4, 1),
(37, 32, 1, 1),
(38, 32, 4, 1),
(39, 33, 1, 1),
(40, 33, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_04_23_102009_create_careers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@test.com', '$2y$10$ggsMhkrgkGg9GvsChwQ/oe0/jyW7d2Ce2j3.XMM046R3qIdzNqDZu', '2022-04-25 04:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `centerid` int(11) NOT NULL,
  `slot_date` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT 0,
  `max_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `centerid`, `slot_date`, `timing`, `seats`, `max_seats`) VALUES
(1, 1, '15 July 2022', '10 PM to 11 PM', 2, 150),
(2, 1, '15 July 2022', '11 PM to 12 PM', 0, 150),
(3, 1, '15 July 2022', '12 PM to 1 PM', 0, 150),
(4, 1, '15 July 2022', '2 PM to 3 PM', 0, 150),
(5, 1, '15 July 2022', '3 PM to 4 PM', 0, 150),
(6, 1, '15 July 2022', '4 PM to 5 PM', 0, 150),
(7, 1, '15 July 2022', '5 PM to 6 PM', 0, 150),
(8, 1, '16 July 2022', '10 PM to 11 PM', 0, 150),
(9, 1, '16 July 2022', '11 PM to 12 PM', 0, 150),
(10, 1, '16 July 2022', '12 PM to 1 PM', 0, 150),
(11, 1, '16 July 2022', '2 PM to 3 PM', 0, 150),
(12, 1, '16 July 2022', '3 PM to 4 PM', 0, 150),
(13, 1, '16 July 2022', '4 PM to 5 PM', 0, 150),
(14, 1, '16 July 2022', '5 PM to 6 PM', 0, 150),
(15, 1, '17 July 2022', '10 PM to 11 PM', 0, 150),
(16, 1, '17 July 2022', '11 PM to 12 PM', 0, 150),
(17, 1, '17 July 2022', '12 PM to 1 PM', 0, 150),
(18, 1, '17 July 2022', '2 PM to 3 PM', 0, 150),
(19, 1, '17 July 2022', '3 PM to 4 PM', 0, 150),
(20, 1, '17 July 2022', '4 PM to 5 PM', 0, 150),
(21, 1, '17 July 2022', '5 PM to 6 PM', 0, 150),
(22, 2, '22 July 2022', '10 PM to 11 PM', 8, 150),
(23, 2, '22 July 2022', '11 PM to 12 PM', 0, 150),
(24, 2, '22 July 2022', '12 PM to 1 PM', 0, 150),
(25, 2, '22 July 2022', '2 PM to 3 PM', 0, 150),
(26, 2, '22 July 2022', '3 PM to 4 PM', 0, 150),
(27, 2, '22 July 2022', '4 PM to 5 PM', 0, 150),
(28, 2, '22 July 2022', '5 PM to 6 PM', 0, 150),
(29, 2, '23 July 2022', '10 PM to 11 PM', 0, 150),
(30, 2, '23 July 2022', '11 PM to 12 PM', 0, 150),
(31, 2, '23 July 2022', '12 PM to 1 PM', 0, 150),
(32, 2, '23 July 2022', '2 PM to 3 PM', 0, 150),
(33, 2, '23 July 2022', '3 PM to 4 PM', 0, 150),
(34, 2, '23 July 2022', '4 PM to 5 PM', 0, 150),
(35, 2, '23 July 2022', '5 PM to 6 PM', 0, 150),
(36, 2, '24 July 2022', '10 PM to 11 PM', 0, 150),
(37, 2, '24 July 2022', '11 PM to 12 PM', 0, 150),
(38, 2, '24 July 2022', '12 PM to 1 PM', 0, 150),
(39, 2, '24 July 2022', '2 PM to 3 PM', 0, 150),
(40, 2, '24 July 2022', '3 PM to 4 PM', 0, 150),
(41, 2, '24 July 2022', '4 PM to 5 PM', 0, 150),
(42, 2, '24 July 2022', '5 PM to 6 PM', 0, 150),
(43, 3, '29 July 2022', '10 PM to 11 PM', 0, 150),
(44, 3, '29 July 2022', '11 PM to 12 PM', 0, 150),
(45, 3, '29 July 2022', '12 PM to 1 PM', 0, 150),
(46, 3, '29 July 2022', '2 PM to 3 PM', 0, 150),
(47, 3, '29 July 2022', '3 PM to 4 PM', 0, 150),
(48, 3, '29 July 2022', '4 PM to 5 PM', 0, 150),
(49, 3, '29 July 2022', '5 PM to 6 PM', 0, 150),
(50, 3, '30 July 2022', '10 PM to 11 PM', 0, 150),
(51, 3, '30 July 2022', '11 PM to 12 PM', 0, 150),
(52, 3, '30 July 2022', '12 PM to 1 PM', 0, 150),
(53, 3, '30 July 2022', '2 PM to 3 PM', 0, 150),
(54, 3, '30 July 2022', '3 PM to 4 PM', 0, 150),
(55, 3, '30 July 2022', '4 PM to 5 PM', 0, 150),
(56, 3, '30 July 2022', '5 PM to 6 PM', 0, 150),
(57, 3, '31 July 2022', '10 PM to 11 PM', 0, 150),
(58, 3, '31 July 2022', '11 PM to 12 PM', 0, 150),
(59, 3, '31 July 2022', '12 PM to 1 PM', 0, 150),
(60, 3, '31 July 2022', '2 PM to 3 PM', 0, 150),
(61, 3, '31 July 2022', '3 PM to 4 PM', 0, 150),
(62, 3, '31 July 2022', '4 PM to 5 PM', 0, 150),
(63, 3, '31 July 2022', '5 PM to 6 PM', 0, 150),
(64, 4, '5 July 2022', '10 PM to 11 PM', 0, 150),
(65, 4, '5 July 2022', '11 PM to 12 PM', 0, 150),
(66, 4, '5 July 2022', '12 PM to 1 PM', 0, 150),
(67, 4, '5 July 2022', '2 PM to 3 PM', 0, 150),
(68, 4, '5 July 2022', '3 PM to 4 PM', 0, 150),
(69, 4, '5 July 2022', '4 PM to 5 PM', 0, 150),
(70, 4, '5 July 2022', '5 PM to 6 PM', 0, 150),
(71, 4, '6 July 2022', '10 PM to 11 PM', 0, 150),
(72, 4, '6 July 2022', '11 PM to 12 PM', 0, 150),
(73, 4, '6 July 2022', '12 PM to 1 PM', 0, 150),
(74, 4, '6 July 2022', '2 PM to 3 PM', 0, 150),
(75, 4, '6 July 2022', '3 PM to 4 PM', 0, 150),
(76, 4, '6 July 2022', '4 PM to 5 PM', 0, 150),
(77, 4, '6 July 2022', '5 PM to 6 PM', 0, 150),
(78, 4, '7 July 2022', '10 PM to 11 PM', 0, 150),
(79, 4, '7 July 2022', '11 PM to 12 PM', 0, 150),
(80, 4, '7 July 2022', '12 PM to 1 PM', 0, 150),
(81, 4, '7 July 2022', '2 PM to 3 PM', 0, 150),
(82, 4, '7 July 2022', '3 PM to 4 PM', 0, 150),
(83, 4, '7 July 2022', '4 PM to 5 PM', 0, 150),
(84, 4, '7 July 2022', '5 PM to 6 PM', 0, 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tarun Sharma', 'admin@test.com', NULL, '$2y$10$c1zYi7sjC.8uJE7Oby0wnOd4l5L26Mtce1feviWY0WRV1oCGphTSG', NULL, NULL, NULL),
(2, 'xyz', 'tarunicool123@gmail.com', NULL, '$2y$10$04lMM.Q1Zn6ZiBa.Jucvd.UVdy.N/uukCLco1L6aWooQnFJW2Hr.K', 'fMydr73VJPUiHgDr1Ci5oXnur8HV2z9eTqh7z9tpg6FCynkMp97q8sQYVG8j', NULL, '2022-04-25 07:48:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `careers_email_unique` (`email`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_center`
--
ALTER TABLE `city_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `city_center`
--
ALTER TABLE `city_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
