-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 08:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodify-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Home Decor', NULL, '2024-03-11 22:57:30'),
(2, 'Furniture', NULL, NULL),
(3, 'Kitchen & Dining', NULL, NULL);

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
(5, '2024_03_11_172209_create_categories_table', 2),
(6, '2024_03_12_060405_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'all.type', 'web', 'category', '2024-03-12 03:10:53', '2024-03-12 06:24:53');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-03-12 11:48:39', '2024-03-12 11:48:39'),
(2, 'Seller', 'web', '2024-03-12 11:49:12', '2024-03-12 11:49:12'),
(3, 'Customer', 'web', '2024-03-12 11:49:22', '2024-03-12 11:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','seller','customer') NOT NULL DEFAULT 'customer',
  `status` enum('active','deactive') NOT NULL DEFAULT 'active',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `photo`, `phone`, `address`, `role`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Main Admins', 'admin', 'admin@gmail.com', NULL, '202402100705DSC_0398 n.jpg', '119', 'Panadura', 'admin', 'active', '$2y$12$52bnlbEIblawlIlH0B7Ksupz50b3.2sp8MsClSAEcHHcgicnuo7Jq', 'SBvDpCwNMrSU2Z9BKjSrN3BAk9k74O9bp2aRlB7cJiTxrEUX4Ghgv5yQdZi2', '2024-01-23 05:10:40', '2024-02-21 12:11:51'),
(2, 'Main Seller', 'seller', 'seller@gmail.com', NULL, '202402100911user8-128x128.jpg', '118', 'Panadura', 'seller', 'active', '$2y$12$OPwR7oR0cDqtUQed2i5zCOF3DP3FYj3PqXdmadaruI7cugu6YFxtS', NULL, '2024-01-22 12:49:02', '2024-02-10 03:41:26'),
(3, 'Main Customer', 'customer', 'customer@gmail.com', NULL, '202402100707pexels-tuấn-kiệt-jr-1468379.jpg', '117', 'Panadura', 'customer', 'active', '$2y$12$BPnXaUkjkggGRt0FIiisWujaPHH20UZqWqGlmYASzr/qQm43KPb6y', NULL, '2024-01-23 12:48:54', '2024-02-10 03:25:43'),
(4, 'Wilfred Trvanto', 'devyn99', 'pdonnelly@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/00ee22?text=voluptatem', '336.895.48133', '147 Corkery Circle\nCronahaven, OH 26257', 'admin', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'd4KETDqONH', '2024-02-02 01:54:52', '2024-03-13 14:04:32'),
(5, 'Malika Abshire', 'saige74', 'chelsea.smitham@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/0077ff?text=et', '+1-915-395-4040', '83746 Ziemann Forges\nSchummton, ND 16322-5714', 'customer', 'active', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'zbwsOwb65c', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(6, 'Alvera Hodkiewicz', 'towne.carolyn', 'avery.predovic@example.org', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/0044dd?text=voluptatum', '+18653845876', '961 Annetta Camp\nMarcosland, IA 02729', 'admin', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', '95jdzemOt3', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(7, 'Mr. Bennett Huel', 'josh29', 'sadye18@example.com', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/007722?text=aliquid', '+1 (415) 843-0888', '47611 Julien Stream\nPort Georgianaberg, FL 12782', 'admin', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'lMxoR68M3l', '2024-02-02 01:54:52', '2024-03-13 14:25:46'),
(8, 'Rudy Mayert', 'myles94', 'ddenesik@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/006655?text=iure', '+1.216.814.9356', '73178 Kemmer Vista Suite 490\nRolfsonton, OR 53184-6986', 'seller', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'jsRPb3T7Bd', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(9, 'Dilshan', NULL, 'dilshan@gmail.com', NULL, NULL, NULL, NULL, 'customer', 'active', '$2y$12$m8036QLOX186wHU8r.IMF.ZpXQ2zSWCITwR7kR0kIVUwcRhnWLREG', NULL, '2024-02-02 01:57:07', '2024-02-02 01:57:07'),
(10, 'Sandun', NULL, 'sandun@gmail.com', NULL, NULL, '0711722633', NULL, 'admin', 'active', '$2y$12$4p4IQRECVO9Jeymut.Xd7OufSCP5yO5RPAA7OrxWoK56aoOmxwA6.', NULL, '2024-02-16 08:22:51', '2024-03-13 14:25:35'),
(11, 'fsgdywg', NULL, 'sasd@gmail.com', NULL, NULL, NULL, NULL, 'customer', 'active', '$2y$12$Q2m6nDdX8jfuMIgX1QuTaOvqnNPMOsSIN2pfaalBkv2Jp90VSNoB6', NULL, '2024-02-16 08:23:32', '2024-02-16 08:23:32'),
(12, 'dddd', NULL, 'dddd@gmail.com', NULL, NULL, NULL, NULL, 'customer', 'active', '$2y$12$fV3dJ6F1TOC8lWi.YoxJG.n9nM7qvgQULwYHMqAUGpFug0eYg3R5.', NULL, '2024-02-16 08:27:13', '2024-02-16 08:27:13'),
(13, 'fffffaaa', NULL, 'fffffaaa@gmail.com', NULL, NULL, NULL, NULL, 'customer', 'active', '$2y$12$zhauqtkYU415rUzprizu1uSUptFVYlG6OAlo9b1NlqfgeKQ.yBnjK', NULL, '2024-02-16 08:29:35', '2024-02-16 08:29:35'),
(14, 'ddss', NULL, 'ddsss@gmail.com', NULL, NULL, '1752', NULL, 'customer', 'active', '$2y$12$uFVxOL9jV6SoRr/LtGax1e.GtPY6s6q4C7Rrom5FWcYbqg8NPmG22', NULL, '2024-02-16 08:36:18', '2024-02-16 08:36:18'),
(15, 'Gayathra Dilshan', NULL, 'gayathradilshan1@gmail.com', NULL, NULL, '0779919634', NULL, 'customer', 'active', '$2y$12$yePxIqFu64LmzQ/uDSV7bucJTrpJB3kJlzlpIy9O4mHaDtNHrocDi', NULL, '2024-02-21 12:04:30', '2024-02-21 12:04:30'),
(16, 'Gayathra Dilshan', NULL, 'dilshan2024@gmail.com', NULL, NULL, '0772780727', NULL, 'admin', 'active', '$2y$12$opOMbROJEdDv81erYwZDZuJ4.zcNcy3x6LGydKce89xfNxBYLxDRu', NULL, '2024-03-12 12:09:28', '2024-03-12 12:09:28'),
(18, 'test2', NULL, 'test2@gmail.com', NULL, NULL, '0385898565', NULL, 'seller', 'active', '$2y$12$eQG6/VSeq06.hGRlGiQPVu99j1HYfX0QG7FokqSlgzERI03.rWkoS', NULL, '2024-03-13 12:41:36', '2024-03-13 12:41:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
