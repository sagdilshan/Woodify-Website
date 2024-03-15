-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 07:50 AM
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
(1, 'Main Admins', 'admin', 'admin@gmail.com', NULL, '202402100705DSC_0398 n.jpg', '119', 'Panadura', 'admin', 'active', '$2y$12$52bnlbEIblawlIlH0B7Ksupz50b3.2sp8MsClSAEcHHcgicnuo7Jq', '9R4sPrxqIUufZDA8ZkR0Lf8F0AMPh2BZC86oTJj4cbvJY3b7Bdeuw9zmPivo', '2024-01-23 05:10:40', '2024-02-21 12:11:51'),
(2, 'Main Seller', 'seller', 'seller@gmail.com', NULL, '202402100911user8-128x128.jpg', '118', 'Panadura', 'seller', 'active', '$2y$12$OPwR7oR0cDqtUQed2i5zCOF3DP3FYj3PqXdmadaruI7cugu6YFxtS', NULL, '2024-01-22 12:49:02', '2024-03-13 23:14:25'),
(3, 'Main Customer', 'customer', 'customer@gmail.com', NULL, '202402100707pexels-tuấn-kiệt-jr-1468379.jpg', '117', 'Panadura', 'customer', 'active', '$2y$12$BPnXaUkjkggGRt0FIiisWujaPHH20UZqWqGlmYASzr/qQm43KPb6y', NULL, '2024-01-23 12:48:54', '2024-03-13 23:02:02'),
(4, 'Sandesh Aloka', 'devyn99', 'sandesh@gmail.com', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/00ee22?text=voluptatem', '0115874585', '147 Corkery Circle\nCronahaven, OH 26257', 'customer', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'd4KETDqONH', '2024-02-02 01:54:52', '2024-03-14 23:42:34'),
(5, 'Malika Abshire', 'saige74', 'chelsea.smitham@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/0077ff?text=et', '+1-915-395-4040', '83746 Ziemann Forges\nSchummton, ND 16322-5714', 'customer', 'active', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'zbwsOwb65c', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(9, 'Dilshan', NULL, 'dilshan@gmail.com', NULL, NULL, '55998555', NULL, 'customer', 'active', '$2y$12$m8036QLOX186wHU8r.IMF.ZpXQ2zSWCITwR7kR0kIVUwcRhnWLREG', NULL, '2024-02-02 01:57:07', '2024-03-14 06:15:24'),
(10, 'Sandun Pathmika', NULL, 'sandun@gmail.com', NULL, NULL, '0711722633', NULL, 'admin', 'deactive', '$2y$12$4p4IQRECVO9Jeymut.Xd7OufSCP5yO5RPAA7OrxWoK56aoOmxwA6.', NULL, '2024-02-16 08:22:51', '2024-03-14 23:43:09'),
(11, 'Denush', NULL, 'denush@gmail.com', NULL, NULL, '015544121', NULL, 'customer', 'active', '$2y$12$Q2m6nDdX8jfuMIgX1QuTaOvqnNPMOsSIN2pfaalBkv2Jp90VSNoB6', NULL, '2024-02-16 08:23:32', '2024-03-14 06:15:46'),
(12, 'Saritha', NULL, 'saritha@gmail.com', NULL, NULL, '0778958566', NULL, 'customer', 'deactive', '$2y$12$fV3dJ6F1TOC8lWi.YoxJG.n9nM7qvgQULwYHMqAUGpFug0eYg3R5.', NULL, '2024-02-16 08:27:13', '2024-03-14 06:16:02'),
(15, 'Gayathra Dilshan', NULL, 'gayathradilshan1@gmail.com', NULL, NULL, '0779919634', NULL, 'customer', 'deactive', '$2y$12$yePxIqFu64LmzQ/uDSV7bucJTrpJB3kJlzlpIy9O4mHaDtNHrocDi', NULL, '2024-02-21 12:04:30', '2024-03-14 23:43:49'),
(16, 'Gayathra Dilshan', 'sagdilshan', 'dilshan2024@gmail.com', NULL, '202403132020IMG-20211221-WA0006.jpg', '0772780727', 'Panadura', 'admin', 'active', '$2y$12$opOMbROJEdDv81erYwZDZuJ4.zcNcy3x6LGydKce89xfNxBYLxDRu', NULL, '2024-03-12 12:09:28', '2024-03-14 23:44:03'),
(22, 'Test1', NULL, 'test1@gmail.com', NULL, NULL, '0188554412', NULL, 'seller', 'deactive', '$2y$12$gmIJ8en3Cx0Nte8TXk3VbeaPGcnhJcToJC5QAK1iV6ejkvnTfhdua', NULL, '2024-03-14 05:10:20', '2024-03-14 06:15:03'),
(24, 'Test3', NULL, 'test3@gmail.com', NULL, NULL, '0778954789', NULL, 'customer', 'active', '$2y$12$Njybd5aF5YuY0njT8zKHzOGD3rZwIT7ewgs3I4EOB1ZzQQxJorKj6', NULL, '2024-03-14 23:40:59', '2024-03-14 23:40:59'),
(25, 'test4', NULL, 'test4@gmail.com', NULL, NULL, '147895656955', NULL, 'customer', 'active', '$2y$12$ILrUGP3eA78EOJ/1MkTg2edAZO8nA2ceXRnlMZH3KgMVweg1Y1nLO', NULL, '2024-03-14 23:41:30', '2024-03-14 23:41:30'),
(26, 'test5', NULL, 'test5@gmail.com', NULL, NULL, '1458756985', NULL, 'customer', 'active', '$2y$12$6qjPkpJn8eioIftnAm1O5uEjrLua30Eu14GG2lxfVU1fIeFvrIL12', NULL, '2024-03-14 23:41:56', '2024-03-14 23:41:56'),
(27, 'tese8', NULL, 'test8@gmail.com', NULL, NULL, '0778485789', NULL, 'customer', 'deactive', '$2y$12$8ljry8XmKYi72DgNfTvHreq/dW2YoEtT0Lc9IAjAJnBKvsRdv1Gfu', NULL, '2024-03-14 23:46:37', '2024-03-14 23:47:04');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
