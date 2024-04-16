-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 12:07 PM
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
-- Database: `woodify-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_category`
--

CREATE TABLE `all_category` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_category`
--

INSERT INTO `all_category` (`id`, `name`, `slug`, `status`, `photo`, `created_by`, `is_delete`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Home Decor', 'home-decor', 0, 'home-decor.png', 1, 0, '2024-03-29 09:05:03', NULL, '2024-03-30 04:09:59'),
(2, 'Furniture', 'furniture', 0, 'furniture.png', 1, 0, '2024-03-29 09:06:26', NULL, '2024-04-01 05:04:39'),
(3, 'Kitchen & Dining', 'kitchen-&-dining', 0, 'kitchen.png', 1, 0, '2024-03-29 09:12:59', NULL, '2024-03-29 09:12:59'),
(4, 'Toys & Games', 'toys-&-games', 0, 'games.jpg', 1, 0, '2024-03-29 09:18:04', NULL, '2024-03-29 09:18:04'),
(5, 'Office and workspace', 'office-and-workspace', 0, '290919office.png', 1, 0, '2024-03-29 09:19:24', NULL, '2024-03-29 09:19:24'),
(6, 'Personalized Gifts', 'personalized-gifts', 0, '20240329gift.png', 1, 0, '2024-03-29 09:24:04', NULL, '2024-03-29 09:24:04'),
(7, 'Accessories', 'accessories', 0, '20240329jewel.jpg', 1, 0, '2024-03-29 09:25:03', NULL, '2024-03-29 09:25:03');

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
(3, 'Kitchen & Dining', NULL, NULL),
(6, 'Test12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `admin_id` varchar(11) DEFAULT NULL,
  `status` enum('new','responded') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `answer` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `user_id`, `admin_id`, `status`, `answer`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '012456', 'axbcbc', 'xbahchacva', '1', NULL, 'new', NULL, '2024-04-14 13:06:05', '2024-04-14 13:06:05'),
(2, 'hhvhxcv', 'gcgcyvzc@gmail.com', '14566', 'hxbxhvxh', 'cgygcygcyscgs', '1', NULL, 'new', NULL, '2024-04-14 13:07:42', '2024-04-14 13:07:42'),
(3, 'edgheh', 'dgdg@gmail.com', '2482', 'dncdjbc', 'ckedbcjdbcjd', '1', NULL, 'new', NULL, '2024-04-14 13:10:46', '2024-04-14 13:10:46'),
(4, 'hegdwhdw', 'mksjwdh@gmail.com', '10254', 'behfcyhw', 'csgcebc', NULL, NULL, 'new', NULL, '2024-04-14 13:11:24', '2024-04-14 13:11:24'),
(5, 'Main Customer', 'customer@gmail.com', '117', 'dev', 'evevevedv', '27', NULL, 'new', NULL, '2024-04-14 13:20:36', '2024-04-14 13:20:36');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `photo`, `created_at`, `created_by`, `updated_at`) VALUES
(1, 'Tips, Techniques, and Projects', 'Woodworking is more than just a craft; it\'s a tradition passed down through generations, a form of expression, and for many, a way of life. Whether you\'re carving a spoon, building furniture, or many items in woodify site. buy and look enjoy.', '20240401portfolio-1.jpg', '2024-04-01', 1, '2024-04-01 04:55:35'),
(3, 'Essential Tools for Every Woodworker', 'Grain direction significantly affects the outcome of your project. Working with the grain reduces the chances of tearing or splintering the wood, ensuring a smoother finish', '20240401portfolio-2.jpg', '2024-04-01', 1, '2024-04-01 05:05:05'),
(5, 'Test 1', 'hjeduehbjebjebcebeuhdgueecbeyveyvcehv\r\nehcejcbehcbec\r\n\r\nececveugcue', '20240401gift.png', '2024-04-01', 1, '2024-04-01 05:05:47'),
(6, 'teset 2', 'cuedbcuedgbcuehgcfuecge', '20240401product5.png', '2024-04-01', 1, '2024-04-01 08:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `thumb1` varchar(100) DEFAULT NULL,
  `thumb2` varchar(100) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `sale_price` varchar(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('approve','disapprove','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('stock','out_of_stock') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'stock',
  `sale_type` enum('normal','sale') NOT NULL DEFAULT 'normal',
  `created_by` int(11) NOT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `thumb1`, `thumb2`, `images`, `price`, `sale_price`, `category_id`, `description`, `status`, `stock_status`, `sale_type`, `created_by`, `approved_by`, `updated_at`, `created_at`) VALUES
(13, 'scs', NULL, NULL, '[\"upload\\/product_images\\/20240401_about1.jpg\",\"upload\\/product_images\\/20240401_about2.jpg\",\"upload\\/product_images\\/20240401_about3.jpg\"]', '2424', '242', 1, '2e2', 'approve', 'stock', 'normal', 2, 1, '2024-04-01 18:30:49', '2024-04-01 12:40:58'),
(14, 'n', NULL, NULL, '[\"upload\\/product_images\\/20240401_about1.jpg\"]', '2222', '1255', 2, 'mmlmlm', 'approve', 'stock', 'normal', 22, 1, '2024-04-04 04:28:51', '2024-04-01 15:01:32'),
(15, 'Test 1 Original', NULL, NULL, '[\"upload\\/product_images\\/20240401_coming-soon.jpg\"]', '354353', '244', 3, 'wfsf', 'disapprove', 'stock', 'normal', 2, 1, '2024-04-14 13:24:37', '2024-04-01 16:26:56'),
(16, 'sf', NULL, NULL, '[\"upload\\/product_images\\/20240401_home3-small-banner1.jpg\"]', '442424', '2424', 4, 'svsvs', 'approve', 'out_of_stock', 'normal', 2, 1, '2024-04-14 13:23:55', '2024-04-01 17:27:05'),
(17, 'Test1', NULL, NULL, '[\"upload\\/product_images\\/20240402_contactless.png\",\"upload\\/product_images\\/20240402_credit-card.png\"]', '200', '102', 5, 'bhbdhwvbdhvhsv', 'approve', 'stock', 'normal', 2, 1, '2024-04-02 16:57:28', '2024-04-02 16:56:35'),
(18, 'fhfhf', NULL, NULL, '[\"upload\\/product_images\\/20240402_logo.jpg\",\"upload\\/product_images\\/20240402_Test.jpg\"]', '535', '32', 6, 'wsaeat', 'approve', 'stock', 'normal', 2, 1, '2024-04-14 05:53:52', '2024-04-02 17:41:43'),
(19, 'tes44', NULL, NULL, '[\"upload\\/product_images\\/20240402_IMG-20230921-WA0008.jpg\",\"upload\\/product_images\\/20240402_sg.jpg\"]', '35353', '3224', 7, 'eagea', 'rejected', 'stock', 'normal', 2, 1, '2024-04-14 13:24:32', '2024-04-02 17:43:56'),
(20, 'vnfx', '20240402product-image46-1.jpg', '20240402product-image46-1.jpg', '[\"upload\\/product_images\\/20240402_product-image48.jpg\"]', '353', '32', 3, 'wrafa', 'approve', 'stock', 'normal', 2, 1, '2024-04-02 18:23:49', '2024-04-02 18:23:00'),
(21, 'test 2hdb', '20240402product-image21.jpg', '20240402product-image21-1.jpg', '[\"upload\\/product_images\\/20240402_product-image2.jpg\"]', '1000', '870', 4, 'jwbdjwbdjsbjbcsc', 'approve', 'stock', 'sale', 2, 1, '2024-04-15 09:55:06', '2024-04-02 18:23:36'),
(22, 'testvvchs', '20240402author-2.jpg', '20240402clothing.jpg', '[\"upload\\/product_images\\/20240402_blog-thumb.jpg\",\"upload\\/product_images\\/20240402_blog-thumb-2.jpg\"]', '2242', '24', 7, 'wqfe', 'approve', 'stock', 'sale', 2, 1, '2024-04-15 09:55:42', '2024-04-02 18:36:55'),
(23, 'ooeiieo', '20240402single-pro-thumb-2.jpg', '20240402single-pro-thumb-5.jpg', '[\"upload\\/product_images\\/20240402_sale-product-2.jpg\"]', '44903', '39345', 6, 'ebfjfb', 'approve', 'stock', 'sale', 2, 1, '2024-04-14 13:23:00', '2024-04-02 18:42:13');

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
(1, 'Main Admin', 'admin', 'admin@gmail.com', NULL, '202402100705DSC_0398 n.jpg', '119', 'Panadura', 'admin', 'active', '$2y$12$52bnlbEIblawlIlH0B7Ksupz50b3.2sp8MsClSAEcHHcgicnuo7Jq', '5eRjA58N5cNTgBKnlVA0LQfgyyf2Ejceyh0toVCfK0gXYhtWfEQKXGAcudv5', '2024-01-23 05:10:40', '2024-04-13 06:12:22'),
(2, 'Main Seller', 'seller', 'seller@gmail.com', NULL, '202403191338men-pro.jpg', '118', 'Panadura', 'seller', 'active', '$2y$12$OPwR7oR0cDqtUQed2i5zCOF3DP3FYj3PqXdmadaruI7cugu6YFxtS', NULL, '2024-01-22 12:49:02', '2024-03-19 08:08:39'),
(4, 'Sandesh Aloka', 'devyn99', 'sandesh@gmail.com', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/00ee22?text=voluptatem', '0115874585', '147 Corkery Circle\nCronahaven, OH 26257', 'customer', 'deactive', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'd4KETDqONH', '2024-02-02 01:54:52', '2024-03-14 23:42:34'),
(5, 'Malika Abshire', 'saige74', 'chelsea.smitham@example.net', '2024-02-02 01:54:52', 'https://via.placeholder.com/60x60.png/0077ff?text=et', '+1-915-395-4040', '83746 Ziemann Forges\nSchummton, ND 16322-5714', 'customer', 'active', '$2y$12$m7wg2nSQKPTfYcCJOLBAUuTj3/kKlklOqCd1470rDLqg1YNV06Ct2', 'zbwsOwb65c', '2024-02-02 01:54:52', '2024-02-02 01:54:52'),
(9, 'Dilshan', NULL, 'dilshan@gmail.com', NULL, NULL, '55998555', NULL, 'customer', 'active', '$2y$12$m8036QLOX186wHU8r.IMF.ZpXQ2zSWCITwR7kR0kIVUwcRhnWLREG', NULL, '2024-02-02 01:57:07', '2024-03-14 06:15:24'),
(10, 'Sandun Pathmika', NULL, 'sandun@gmail.com', NULL, NULL, '0711722633', NULL, 'admin', 'deactive', '$2y$12$4p4IQRECVO9Jeymut.Xd7OufSCP5yO5RPAA7OrxWoK56aoOmxwA6.', NULL, '2024-02-16 08:22:51', '2024-03-14 23:43:09'),
(11, 'Denush', NULL, 'denush@gmail.com', NULL, NULL, '015544121', NULL, 'customer', 'active', '$2y$12$Q2m6nDdX8jfuMIgX1QuTaOvqnNPMOsSIN2pfaalBkv2Jp90VSNoB6', NULL, '2024-02-16 08:23:32', '2024-03-14 06:15:46'),
(12, 'Saritha', NULL, 'saritha@gmail.com', NULL, NULL, '0778958566', NULL, 'customer', 'deactive', '$2y$12$fV3dJ6F1TOC8lWi.YoxJG.n9nM7qvgQULwYHMqAUGpFug0eYg3R5.', NULL, '2024-02-16 08:27:13', '2024-03-14 06:16:02'),
(15, 'Gayathra Dilshan', NULL, 'gayathradilshan1@gmail.com', NULL, NULL, '0779919634', NULL, 'customer', 'deactive', '$2y$12$yePxIqFu64LmzQ/uDSV7bucJTrpJB3kJlzlpIy9O4mHaDtNHrocDi', NULL, '2024-02-21 12:04:30', '2024-03-14 23:43:49'),
(16, 'Gayathra Dilshan', 'sagdilshan', 'dilshan2024@gmail.com', NULL, '202403132020IMG-20211221-WA0006.jpg', '0772780727', 'Panadura', 'admin', 'active', '$2y$12$opOMbROJEdDv81erYwZDZuJ4.zcNcy3x6LGydKce89xfNxBYLxDRu', NULL, '2024-03-12 12:09:28', '2024-03-18 00:13:06'),
(22, 'Test1', NULL, 'test1@gmail.com', NULL, NULL, '0188554412', NULL, 'seller', 'active', '$2y$12$gmIJ8en3Cx0Nte8TXk3VbeaPGcnhJcToJC5QAK1iV6ejkvnTfhdua', NULL, '2024-03-14 05:10:20', '2024-04-01 02:44:08'),
(24, 'Test3', NULL, 'test3@gmail.com', NULL, NULL, '0778954789', NULL, 'customer', 'active', '$2y$12$Njybd5aF5YuY0njT8zKHzOGD3rZwIT7ewgs3I4EOB1ZzQQxJorKj6', NULL, '2024-03-14 23:40:59', '2024-03-14 23:40:59'),
(25, 'test4', NULL, 'test4@gmail.com', NULL, NULL, '147895656955', NULL, 'customer', 'active', '$2y$12$ILrUGP3eA78EOJ/1MkTg2edAZO8nA2ceXRnlMZH3KgMVweg1Y1nLO', NULL, '2024-03-14 23:41:30', '2024-03-14 23:41:30'),
(26, 'Test Profile', 'testprofile', 'testprofile@gmail.com', NULL, '202403190419user1-128x128.jpg', '0771999634', 'Panadura', 'customer', 'active', '$2y$12$6qjPkpJn8eioIftnAm1O5uEjrLua30Eu14GG2lxfVU1fIeFvrIL12', NULL, '2024-03-14 23:41:56', '2024-03-18 22:49:10'),
(27, 'Main Customer', NULL, 'customer@gmail.com', NULL, '202404141314logo12.png', '117', NULL, 'customer', 'active', '$2y$12$LkCsaTDu4LvJBoenfH6/.O7vx6kGoJKaBbDIWU/TxwqTGX2hP7a3m', NULL, '2024-03-14 23:46:37', '2024-04-14 07:44:59'),
(28, 'Test23', NULL, 'test23@gmail.com', NULL, NULL, '186262', NULL, 'customer', 'active', '$2y$12$LOGBIPvGnCGfAGG.ebXUmuir8C1Ch4nRfbLIKd7VADVJ2lFieyuaa', NULL, '2024-03-16 10:20:25', '2024-03-19 08:01:56'),
(29, 'test234', 'testori', 'test234@gmail.com', NULL, '202404030756german-flag.png', '0789456123', 'Kuliyapitiya', 'admin', 'active', '$2y$12$Z.FTkGWCuUv2orQ2gZNgT.mdZQDpL0qYsOe8441OTWjjfEitzf1mG', NULL, '2024-03-19 08:03:07', '2024-04-03 02:26:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_category`
--
ALTER TABLE `all_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `all_category`
--
ALTER TABLE `all_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
