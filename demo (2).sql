-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 08:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `cnic_gtba` varchar(255) NOT NULL,
  `p_number` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `january` int(11) NOT NULL DEFAULT 0,
  `february` int(11) NOT NULL DEFAULT 0,
  `march` int(11) NOT NULL DEFAULT 0,
  `april` int(11) NOT NULL DEFAULT 0,
  `may` int(11) NOT NULL DEFAULT 0,
  `june` int(11) NOT NULL DEFAULT 0,
  `july` int(11) NOT NULL DEFAULT 0,
  `august` int(11) NOT NULL DEFAULT 0,
  `september` int(11) NOT NULL DEFAULT 0,
  `october` int(11) NOT NULL DEFAULT 0,
  `november` int(11) NOT NULL DEFAULT 0,
  `december` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `cnic_gtba`, `p_number`, `emailaddress`, `password`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`, `created_at`, `updated_at`) VALUES
(1, 'Arqam', 'GTBA 4 - AKRAM ABID BHATTI', '03330208170', 'arqamm904@gmail.com', '$2y$12$5r1TaKvCcnlMXE8/.8GWveEufZaL4flFBLgFld3b8vIv9RogjojJi', 1000, 0, 0, 5000, 0, 1000, 0, 0, 0, 0, 6000, 0, '2024-03-21 05:05:31', '2024-03-21 18:23:19'),
(2, 'Arqam', 'GTBA 4 - AKRAM ABID BHATTI', '03330208170', 'pappu@gmail.com', '$2y$12$wvMW8YsY/L4pFs/4oEfSm.XB9hCm6NqCNunv/Q/yz7TlSLtOkGN7.', 0, 3000, 0, 0, 0, 6000, 0, 0, 0, 9000, 0, 0, '2024-03-21 07:56:08', '2024-03-21 18:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_01_075908_create_members_table', 1),
(6, '2024_03_13_181141_create_products_table', 1),
(7, '2024_03_19_202846_create_members_table', 2),
(8, '2024_03_21_095815_create_members_table', 3),
(9, '2024_03_22_110730_create_products_table', 4),
(10, '2024_03_22_150235_create_products_table', 5),
(11, '2024_03_25_164652_create_products_table', 6),
(12, '2024_03_26_000420_create_products_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `son_of` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `id_cnic` varchar(255) NOT NULL,
  `bar_license` varchar(255) NOT NULL,
  `fbr_photo` varchar(255) DEFAULT NULL,
  `fbr_photo_one` varchar(255) DEFAULT NULL,
  `fbr_photo_two` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) NOT NULL,
  `streetaddress` varchar(255) NOT NULL,
  `town` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `tehsil` varchar(255) NOT NULL,
  `matric_qualification` varchar(255) NOT NULL,
  `matric_institute` varchar(255) NOT NULL,
  `matric_totalMarks` varchar(255) NOT NULL,
  `matric_obtainMarks` varchar(255) NOT NULL,
  `matric_certificate_picture` varchar(255) NOT NULL,
  `inter_qualification` varchar(255) NOT NULL,
  `inter_institute` varchar(255) NOT NULL,
  `inter_totalMarks` varchar(255) NOT NULL,
  `inter_obtainMarks` varchar(255) NOT NULL,
  `inter_certificate_picture` varchar(255) NOT NULL,
  `batch_qualification` varchar(255) NOT NULL,
  `batch_institute` varchar(255) NOT NULL,
  `batch_totalMarks` varchar(255) NOT NULL,
  `batch_obtainMarks` varchar(255) NOT NULL,
  `batch_certificate_picture` varchar(255) NOT NULL,
  `llb_qualification` varchar(255) DEFAULT NULL,
  `llb_institute` varchar(255) DEFAULT NULL,
  `llb_totalMarks` varchar(255) DEFAULT NULL,
  `llb_obtainMarks` varchar(255) DEFAULT NULL,
  `llb_certificate_picture` varchar(255) DEFAULT NULL,
  `other_qualification` varchar(255) DEFAULT NULL,
  `other_institute` varchar(255) DEFAULT NULL,
  `other_totalMarks` varchar(255) DEFAULT NULL,
  `other_obtainMarks` varchar(255) DEFAULT NULL,
  `other_certificate_picture` varchar(255) DEFAULT NULL,
  `acc_no` varchar(255) DEFAULT NULL,
  `transaction_picture` varchar(255) DEFAULT NULL,
  `rec_mem` varchar(255) NOT NULL,
  `gtba_mem` varchar(255) DEFAULT NULL,
  `rec_city` varchar(255) DEFAULT NULL,
  `rec_sig` varchar(255) DEFAULT NULL,
  `rec_nameone` varchar(255) DEFAULT NULL,
  `rec_nametwo` varchar(255) DEFAULT NULL,
  `rec_namethree` varchar(255) DEFAULT NULL,
  `rec_addressone` varchar(255) DEFAULT NULL,
  `rec_addresstwo` varchar(255) DEFAULT NULL,
  `rec_addressthree` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `u_id`, `u_name`, `email`, `phone`, `fname`, `lname`, `son_of`, `gender`, `dob`, `bloodgroup`, `profile_pic`, `id_cnic`, `bar_license`, `fbr_photo`, `fbr_photo_one`, `fbr_photo_two`, `house_no`, `streetaddress`, `town`, `city`, `postalcode`, `country`, `province`, `district`, `tehsil`, `matric_qualification`, `matric_institute`, `matric_totalMarks`, `matric_obtainMarks`, `matric_certificate_picture`, `inter_qualification`, `inter_institute`, `inter_totalMarks`, `inter_obtainMarks`, `inter_certificate_picture`, `batch_qualification`, `batch_institute`, `batch_totalMarks`, `batch_obtainMarks`, `batch_certificate_picture`, `llb_qualification`, `llb_institute`, `llb_totalMarks`, `llb_obtainMarks`, `llb_certificate_picture`, `other_qualification`, `other_institute`, `other_totalMarks`, `other_obtainMarks`, `other_certificate_picture`, `acc_no`, `transaction_picture`, `rec_mem`, `gtba_mem`, `rec_city`, `rec_sig`, `rec_nameone`, `rec_nametwo`, `rec_namethree`, `rec_addressone`, `rec_addresstwo`, `rec_addressthree`, `created_at`, `updated_at`) VALUES
(1, '1', 'Arqam', 'arqamm904@gmail.com', '03330208170', 'sbd', 'ndad', 'kbdhcbf', 'Male', '2024-12-31', 'A+', '1711412529.png', '1212112121212', 'Punjab Bar Council License', NULL, '1711412530.png', '1711412530.png', 'sdnsfncf', 'wkdjsbcf', 'kfbjbfcffd', 'lahore', '12122', 'Pakistan', 'Azad Jammu', 'Gujrat', 'Gujranwala - 041', 'Matric', 'dbjbf', '1212', '21', '1711412530.png', 'Intermediate', 'bsjbd', '22', '2', '1711412530.png', 'Batchelor', 'fjefjeh', '2323', '2', '1711412530.png', 'LLB', NULL, NULL, NULL, NULL, 'Other Qualification', NULL, NULL, NULL, NULL, NULL, NULL, 'Existing', 'GTBA 1 - CH MUHAMMAD ASLAM SAHI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 19:22:10', '2024-03-25 19:22:10'),
(2, '1', 'Arqam', 'arqamm904@gmail.com', '03330208170', 'sbd', 'ndad', 'kbdhcbf', 'Male', '2024-12-31', 'A+', '1711423028.png', '1212112121212', 'Punjab Bar Council License', NULL, '1711423028.png', '1711423028.png', 'sdnsfncf', 'wkdjsbcf', 'kfbjbfcffd', 'lahore', '11221', 'Pakistan', 'Azad Jammu', 'Gujrat', 'Gujranwala - 041', 'Matric', 'dbjbf', '1212', '21', '1711423028.png', 'Intermediate', 'bsjbd', '22', '2', '1711423028.png', 'Batchelor', 'fjefjeh', '2323', '2', '1711423028.png', 'LLB', NULL, NULL, NULL, NULL, 'Other Qualification', NULL, NULL, NULL, NULL, NULL, NULL, 'Existing', 'GTBA 11 - Mian Mehroz Ashraf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 22:17:08', '2024-03-25 22:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
