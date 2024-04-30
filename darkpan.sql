-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 12:46 PM
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
-- Database: `darkpan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin22', 'kareemashraf20011@gmail.com', '2024-04-30 07:28:40', '$2y$10$PCWsLbKTPpwS2mdiZaHlNeNf8veVwFyHzIOxnqaZa0nSgFNhjyTS6', '1', NULL, '2024-04-30 07:28:41', '2024-04-30 07:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'white', '1', '2024-04-30 07:32:39', '2024-04-30 07:32:39'),
(2, 'black', '1', '2024-04-30 07:32:45', '2024-04-30 07:32:45'),
(3, 'red', '1', '2024-04-30 07:32:48', '2024-04-30 07:32:48'),
(4, 'gray', '1', '2024-04-30 07:32:54', '2024-04-30 07:32:54'),
(5, 'blue', '1', '2024-04-30 07:33:00', '2024-04-30 07:33:00'),
(6, 'magenta', '1', '2024-04-30 07:33:10', '2024-04-30 07:33:10'),
(7, 'green', '1', '2024-04-30 07:33:20', '2024-04-30 07:33:20'),
(8, 'cyan', '1', '2024-04-30 07:33:33', '2024-04-30 07:33:33'),
(9, 'yallow', '1', '2024-04-30 07:33:40', '2024-04-30 07:33:40');

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
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'technology', '1', '2024-04-30 07:30:02', '2024-04-30 07:30:02'),
(2, 'home furnture', '1', '2024-04-30 07:30:30', '2024-04-30 07:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Product', 2, '3cc60293-d954-4fc6-b17e-ce1fae5b0215', 'images', 'download (1)', 'download-(1).jpg', 'image/jpeg', 'media', 'media', 8411, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:34:33', '2024-04-30 07:34:33'),
(2, 'App\\Models\\Product', 3, 'b729ce7a-458b-4725-b41a-7d67b15bc940', 'images', 'Firefly candle in a terrifying atmosphere 54869', 'Firefly-candle-in-a-terrifying-atmosphere-54869.jpg', 'image/jpeg', 'media', 'media', 555784, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:35:23', '2024-04-30 07:35:23'),
(3, 'App\\Models\\Product', 4, 'b0c37200-b499-490a-9de0-67b27680407c', 'images', 'Firefly Inpaint 20230702115157', 'Firefly-Inpaint-20230702115157.png', 'image/png', 'media', 'media', 1722813, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:35:39', '2024-04-30 07:35:39'),
(4, 'App\\Models\\Product', 5, 'f6db7c6f-d03d-4aee-9e2a-6b51a2b8c24b', 'images', 'Firefly Inpaint 20230702123859', 'Firefly-Inpaint-20230702123859.png', 'image/png', 'media', 'media', 2355719, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:36:13', '2024-04-30 07:36:13'),
(5, 'App\\Models\\Product', 6, '8ba687b2-da94-42e7-b2fb-9e666edb8bae', 'images', 'Firefly cottage overgrown with ancient trees, cold color 80411', 'Firefly-cottage-overgrown-with-ancient-trees,-cold-color-80411.jpg', 'image/jpeg', 'media', 'media', 1525857, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:36:54', '2024-04-30 07:36:54'),
(6, 'App\\Models\\Product', 7, '4bc5c3b4-4d9e-451a-a86e-a904febb59e8', 'images', 'Firefly cottage overgrown with ancient trees, cold color 80411', 'Firefly-cottage-overgrown-with-ancient-trees,-cold-color-80411.jpg', 'image/jpeg', 'media', 'media', 1525857, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:37:13', '2024-04-30 07:37:13'),
(7, 'App\\Models\\Product', 1, '8819183c-117a-4b55-8d4f-24e805b522ae', 'images', 'Firefly lighthouse in the ocean behind a small house, cold color 51007', 'Firefly-lighthouse-in-the-ocean-behind-a-small-house,-cold-color-51007.jpg', 'image/jpeg', 'media', 'media', 734980, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:37:40', '2024-04-30 07:37:40'),
(8, 'App\\Models\\MainCategory', 1, 'a54a93b3-5f53-4732-87bb-93f2ad6f7484', 'images', 'images', 'images.jpg', 'image/jpeg', 'media', 'media', 9833, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:38:09', '2024-04-30 07:38:09'),
(9, 'App\\Models\\MainCategory', 2, '2afcac5d-36ac-497c-b5ed-8e7b3f2e1336', 'images', 'download (3)', 'download-(3).jpg', 'image/jpeg', 'media', 'media', 7212, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:38:27', '2024-04-30 07:38:27'),
(10, 'App\\Models\\Product', 8, '76cd4a7c-26a0-4f9d-8da7-45696119c2b5', 'images', 'download (4)', 'download-(4).jpg', 'image/jpeg', 'media', 'media', 8254, '[]', '[]', '[]', '[]', 1, '2024-04-30 07:45:19', '2024-04-30 07:45:19');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_28_194357_create_admins_table', 1),
(6, '2024_03_11_152909_create_main_categories_table', 1),
(7, '2024_03_11_152910_create_sub_categories_table', 1),
(8, '2024_03_11_152911_create_products_table', 1),
(9, '2024_03_11_153045_create_order_lists_table', 1),
(10, '2024_03_12_184331_create_media_table', 1),
(11, '2024_04_29_071040_create_colors_table', 1),
(12, '2024_04_29_071147_create_product_colors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_lists`
--

CREATE TABLE `order_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `offers` int(11) DEFAULT NULL,
  `total` double(8,2) NOT NULL,
  `status` enum('Pending','Processing','Shipped','Delivered','Cancelled','Returned') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `sub_category_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ratione et et ullam', 'Eius iste nisi amet', 722.00, 6, 30, '1', '2024-04-30 07:33:54', '2024-04-30 07:33:54'),
(2, 'Ut est sed sint volu', 'Ipsam in laboris omn', 4.00, 2, 911, '1', '2024-04-30 07:34:31', '2024-04-30 07:34:31'),
(3, 'Aut non porro itaque', 'Tempore atque autem', 745.00, 1, 314, '1', '2024-04-30 07:35:23', '2024-04-30 07:35:23'),
(4, 'Recusandae Dolorum', 'Aut delectus quis a', 38.00, 3, 676, '1', '2024-04-30 07:35:38', '2024-04-30 07:45:29'),
(5, 'Praesentium velit ve', 'Qui eum aliqua Et e', 116.00, 4, 423, '1', '2024-04-30 07:35:53', '2024-04-30 07:35:53'),
(6, 'Quo minus ex cupidit', 'Pariatur Commodi ea', 515.00, 5, 859, '1', '2024-04-30 07:36:37', '2024-04-30 07:36:37'),
(7, 'Voluptatem vitae rec', 'Sint ut quo provide', 662.00, 6, 979, '1', '2024-04-30 07:37:13', '2024-04-30 07:37:13'),
(8, 'Sapiente quaerat et', 'Culpa sed suscipit', 512.00, 3, 275, '1', '2024-04-30 07:40:31', '2024-04-30 07:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 1, 5, NULL, NULL),
(4, 1, 7, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 2, 3, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 3, 2, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 3, 6, NULL, NULL),
(11, 3, 7, NULL, NULL),
(12, 3, 8, NULL, NULL),
(13, 4, 3, NULL, NULL),
(14, 4, 4, NULL, NULL),
(15, 4, 8, NULL, NULL),
(16, 4, 9, NULL, NULL),
(17, 5, 2, NULL, NULL),
(18, 5, 3, NULL, NULL),
(19, 6, 3, NULL, NULL),
(20, 6, 4, NULL, NULL),
(21, 6, 5, NULL, NULL),
(22, 6, 6, NULL, NULL),
(23, 6, 7, NULL, NULL),
(24, 7, 2, NULL, NULL),
(25, 7, 4, NULL, NULL),
(26, 7, 6, NULL, NULL),
(27, 7, 8, NULL, NULL),
(28, 7, 9, NULL, NULL),
(29, 8, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `main_category_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `main_category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'laptops', 1, '1', '2024-04-30 07:30:44', '2024-04-30 07:30:44'),
(2, 'mobiles', 1, '1', '2024-04-30 07:30:58', '2024-04-30 07:30:58'),
(3, 'TV', 1, '1', '2024-04-30 07:31:07', '2024-04-30 07:31:07'),
(4, 'Beds', 2, '1', '2024-04-30 07:31:21', '2024-04-30 07:31:21'),
(5, 'Chares', 2, '1', '2024-04-30 07:31:37', '2024-04-30 07:31:37'),
(6, 'Tables', 2, '1', '2024-04-30 07:31:45', '2024-04-30 07:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('seller','user') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_lists`
--
ALTER TABLE `order_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_lists_user_id_foreign` (`user_id`),
  ADD KEY `order_lists_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_main_category_id_foreign` (`main_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_lists`
--
ALTER TABLE `order_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_lists`
--
ALTER TABLE `order_lists`
  ADD CONSTRAINT `order_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_main_category_id_foreign` FOREIGN KEY (`main_category_id`) REFERENCES `main_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
