-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2017 at 03:05 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `objective_exam`
--

CREATE TABLE `objective_exam` (
  `id` int(10) NOT NULL,
  `question` longtext NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objective_exam`
--

INSERT INTO `objective_exam` (`id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Who has been sworn-in as the new President of South Korea?  ', 'Moon Jae-in ', 'Hong Joon-pyo ', 'Goh Kun ', 'Roh Tae-woo ', 'Moon Jae-in', '2017-06-16 03:12:31', '2017-06-16 03:12:31'),
(2, 'The 70th edition of World Health Assembly (WHA70) has started in which city?', 'Brussels ', 'New Delhi', 'Paris', 'Geneva', 'Geneva', '2017-06-30 11:34:28', '2017-06-30 06:04:28'),
(3, 'Which country has become the first Asian country to recognize same sex marriage?', 'Taiwan', ' Lebanon', 'Timor-Leste', 'Jordan', 'Taiwan', '2017-06-30 11:22:24', '2017-06-30 05:52:24'),
(4, 'Which country has recently ratify International Solar Alliance (ISA) framework?', 'Zimbabwe', 'Nauru', 'Vanuatu', 'Uganda', 'Nauru', '2017-06-30 05:53:25', '2017-06-30 05:53:25'),
(5, 'The boring of India’s first underwater rail tunnel has completed under which river?', 'Kaveri', 'Godavari', 'Hooghly', 'Krishna', 'Hooghly', '2017-06-30 11:28:00', '2017-06-30 05:58:00'),
(6, 'Which country’s police has officially recruited the world’s first operational robot police officer “Robocop”?', 'UAE', 'Israel', 'Japan', 'Germany', 'UAE', '2017-06-30 06:13:07', '2017-06-30 06:13:07'),
(7, 'The Union Cabinet has approved how much percentage of Central Road Fund (CRF) for development and maintenance of National Waterways (NWs)?', '3.5%', '2.5%', '4.5%', ' 5.5%', '2.5%', '2017-06-30 06:17:33', '2017-06-30 06:17:33'),
(8, 'Who has become the new President of Ecuador?', 'Guillermo Lasso', 'Rafael Correa', 'Jorge Glas', ' Lenin Moreno', 'Lenin Moreno', '2017-06-30 06:23:25', '2017-06-30 06:23:25'),
(9, 'Which country is hosting the 2017 North Atlantic Treaty Organization (NATO)?', 'Romania', 'Belgium', 'Italy', 'Latvia', 'Belgium', '2017-06-30 06:27:22', '2017-06-30 06:27:22'),
(10, 'Which Indian sportsperson has elected as the new member of BWF Atheletes’ commission?', ' Jwala Gutta', 'Ashwini Ponnappa', 'P V Sindhu', 'Aparna Popat', 'P V Sindhu', '2017-06-30 06:40:24', '2017-06-30 06:40:24'),
(11, 'The Union Government has launched which web portal for online documentation verification for students?', ' e-Verification ', 'e-Sanad', 'e-Students', 'e-Certificates', 'e-Sanad', '2017-07-01 04:56:07', '2017-06-30 23:26:07'),
(12, 'Who has been appointed the new chairman of International Fertiliser Association (IFA)?', 'Kaustubh Shah', 'Naoki Tajima', 'Rakesh Kapoor', 'Vinodh Bhat', 'Rakesh Kapoor', '2017-07-01 04:58:07', '2017-06-30 23:28:07'),
(13, 'Which Indian state to host 2017 Asian Junior Tennis Championship?', 'Punjab', 'West Bengal', 'Kerala', 'Maharashtra', 'Maharashtra ', '2017-07-01 04:59:01', '2017-06-30 23:29:01'),
(14, 'India’s longest bridge “Dhola-Sadia Bridge” has built over which tributary of the Brahmaputra River?', 'Kameng River', 'Lohit River', 'Subansiri River', 'Manas River', 'Lohit River', '2017-07-01 05:00:01', '2017-06-30 23:30:01'),
(15, 'Which state govenrment has launched Japanese Encephalitis (JE) vaccination drive for the people of the state?', 'Uttar Pradesh', 'Madhya Pradesh', 'Rajasthan', 'Punjab', 'Uttar Pradesh', '2017-07-01 05:01:00', '2017-06-30 23:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sarwan@gmail.com', '17e264c7df044afd34fce2add7a80c44af5e2647c34470654f0ab0bef177f9c5', '2017-08-23 05:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sarwan', 'sarwan@gmail.com', '$2y$10$uLiqcVIcCreXCc0m.vGULOlgwKM3uQrt05wEc6La60uouaG/x85OG', 'i4LNXTGLcCfNFILhxSSZmEeIVkykRdFT8xNeaVrHIE71Z8fAYz2qC7xsbJMN', '2017-05-09 00:31:35', '2017-11-21 23:08:22'),
(2, 'arun', 'arun@gmail.com', '$2y$10$YInaOHHX3edG7X4coNRNMuHn6ztzkGGL90XauNKWuOKLA8QdpjZs2', '7hw8SmMgPTLD8vB6dwy9oSDM3M3uuW2tHQM67sAwOE9f6sS2KA5ok97flwOe', '2017-05-10 04:04:02', '2017-05-10 04:14:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective_exam`
--
ALTER TABLE `objective_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `objective_exam`
--
ALTER TABLE `objective_exam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
