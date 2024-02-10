-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 10:16 AM
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
(1, 'Main Admin', 'admin', 'admin@gmail.com', NULL, '202402100705DSC_0398 n.jpg', '119', 'Panadura', 'admin', 'active', '$2y$12$5TNXWzmuawfIqhV2esmDE.41JwOWFUyeYdScjWFSzwSKjKDEs5JXy', 'WUwaEzwlnm9GSXdM1iz095yDNUK8nIAappb82AQA3UgJNaV6B4TLKxLyNnhN', '2024-01-23 05:10:40', '2024-02-10 03:36:17'),
(2, 'Main Seller', 'seller', 'seller@gmail.com', NULL, '202402100911user8-128x128.jpg', '118', 'Panadura', 'seller', 'active', '$2y$12$OPwR7oR0cDqtUQed2i5zCOF3DP3FYj3PqXdmadaruI7cugu6YFxtS', NULL, '2024-01-22 12:49:02', '2024-02-10 03:41:26'),
(3, 'Main Customer', 'customer', 'customer@gmail.com', NULL, '202402100707pexels-tuấn-kiệt-jr-1468379.jpg', '117', 'Panadura', 'customer', 'active', '$2y$12$BPnXaUkjkggGRt0FIiisWujaPHH20UZqWqGlmYASzr/qQm43KPb6y', NULL, '2024-01-23 12:48:54', '2024-02-10 03:25:43'),
(4, 'Wilfred Trantow', 'devyn99', 'pdonnelly@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/00ee22?text=voluptatem', '336.895.4828', '147 Corkery Circle\nCronahaven, OH 26257', 'admin', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'd4KETDqONH', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(5, 'Malika Abshire', 'saige74', 'chelsea.smitham@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/0077ff?text=et', '+1-915-395-4040', '83746 Ziemann Forges\nSchummton, ND 16322-5714', 'customer', 'active', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'zbwsOwb65c', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(6, 'Alvera Hodkiewicz', 'towne.carolyn', 'avery.predovic@example.org', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/0044dd?text=voluptatum', '+18653845876', '961 Annetta Camp\nMarcosland, IA 02729', 'admin', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', '95jdzemOt3', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(7, 'Mr. Bennett Huel', 'josh29', 'sadye18@example.com', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/007722?text=aliquid', '+1 (415) 843-0888', '47611 Julien Stream\nPort Georgianaberg, FL 12782', 'admin', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'lMxoR68M3l', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(8, 'Rudy Mayert', 'myles94', 'ddenesik@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/006655?text=iure', '+1.216.814.9356', '73178 Kemmer Vista Suite 490\nRolfsonton, OR 53184-6986', 'seller', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'jsRPb3T7Bd', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(9, 'Dilshan', NULL, 'dilshan@gmail.com', NULL, NULL, NULL, NULL, 'customer', 'active', '$2y$12$m8036QLOX186wHU8r.IMF.ZpXQ2zSWCITwR7kR0kIVUwcRhnWLREG', NULL, '2024-02-02 01:57:07', '2024-02-02 01:57:07');

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
