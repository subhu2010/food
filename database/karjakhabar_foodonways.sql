-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2022 at 11:39 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karjakhabar_foodonways`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Banned') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Banned',
  `verified` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `profile`, `email`, `password`, `address`, `phone`, `status`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'admin@test.com', '$2y$10$z8xGwPP/YTTFfv5CjGElm.PfKUUtvpPXP/puH8KrC3PFV6xY.apR2', NULL, NULL, 'Active', '0', NULL, '2022-03-15 05:13:54', '2022-03-15 05:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lorem repudiandae ci', 'lorem-repudiandae-ci', 'Omnis voluptate sint', 'active', 'Banner-Image164734309624.jpg', '2022-03-15 05:33:16', '2022-03-15 05:33:16'),
(2, 'In rerum occaecat se', 'in-rerum-occaecat-se', 'Et est placeat fugi', 'active', 'Banner-Image164734311093.jpg', '2022-03-15 05:33:31', '2022-03-15 05:33:31'),
(3, 'Deserunt quo pariatu', 'deserunt-quo-pariatu', 'Excepteur non soluta', 'active', 'Banner-Image164734314388.jpg', '2022-03-15 05:34:04', '2022-04-11 10:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('available','notavailable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `name`, `slug`, `price`, `discount`, `description`, `primary_image`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black Forest', 'black-forest', 1200, 5, 'Typically, Black Forest gateau consists of several layers of chocolate sponge cake sandwiched with whipped cream and cherries. It is decorated with additional whipped cream, maraschino cherries, and chocolate shavings.', 'Cake-Image164734323011.png', '2 Pound', 'available', '2022-03-15 05:35:30', '2022-03-15 05:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `cake_banners`
--

CREATE TABLE `cake_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cake_banners`
--

INSERT INTO `cake_banners` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Commodo maiores volu', NULL, 'CakeBanner-Image164734325394.jpg', 'active', '2022-03-15 05:35:54', '2022-03-15 05:35:54'),
(2, 'Sed praesentium iust', NULL, 'CakeBanner-Image164734326446.jpg', 'active', '2022-03-15 05:36:04', '2022-03-15 05:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `cake_images`
--

CREATE TABLE `cake_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cake_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'breakfast', 'Available time 6:30AM-9PM', 'breakfast.png', NULL, NULL),
(2, 'Lunch', 'lunch', 'Available time 9PM-6PM', 'lunch.png', NULL, NULL),
(3, 'Dinner', 'dinner', 'Available time 6:30AM-9PM', 'dinner.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ingredient_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `ingredient_name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Tomato', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(2, 'Sauce', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(3, 'Mozzarella', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(4, 'Olive', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(5, 'Cheese', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(6, 'Flour', 2, '2022-03-15 05:32:43', '2022-03-15 05:32:43'),
(7, 'Vegetables', 2, '2022-03-15 05:32:43', '2022-03-15 05:32:43'),
(8, 'Garlic', 2, '2022-03-15 05:32:43', '2022-03-15 05:32:43'),
(9, 'Onion', 2, '2022-03-15 05:32:43', '2022-03-15 05:32:43'),
(10, 'salt', 3, '2022-04-25 22:36:52', '2022-04-25 22:36:52'),
(11, 'tomato', 3, '2022-04-25 22:36:52', '2022-04-25 22:36:52'),
(12, 'cheese', 3, '2022-04-25 22:36:52', '2022-04-25 22:36:52'),
(13, 'flour', 3, '2022-04-25 22:36:52', '2022-04-25 22:36:52'),
(14, 'sauses', 3, '2022-04-25 22:36:52', '2022-04-25 22:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_132813_create_admins_table', 1),
(4, '2014_10_12_135801_create_admin_password_resets_table', 1),
(5, '2019_06_19_062109_create_roles_table', 1),
(6, '2019_06_19_062205_create_permissions_table', 1),
(7, '2019_06_19_062234_create_permission_role_table', 1),
(8, '2019_06_19_062257_create_admin_role_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2020_09_26_071750_create_setting_table', 1),
(12, '2022_03_06_044236_create_staff_table', 1),
(13, '2022_03_06_143633_create_tickets_table', 1),
(14, '2022_03_06_150508_create_categories_table', 1),
(15, '2022_03_06_150809_create_banners_table', 1),
(16, '2022_03_06_152722_create_sub_categories_table', 1),
(17, '2022_03_06_153929_create_products_table', 1),
(18, '2022_03_06_155536_create_product_images_table', 1),
(19, '2022_03_06_162316_create_user_images_table', 1),
(20, '2022_03_10_085101_create_ingredients_table', 1),
(21, '2022_03_14_100918_create_cakes_table', 1),
(22, '2022_03_14_102259_create_cake_images_table', 1),
(23, '2022_03_15_071052_create_cake_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 11, '9845926849', 'd65b62063e5c2eb141b9a7eaf3680465e72e7aca5c09a90adba9bad9ef09e30e', '[\"*\"]', NULL, '2022-03-15 22:22:03', '2022-03-15 22:22:03'),
(2, 'App\\Models\\User', 11, '9845926849', '53717000ecd7d331c4b642de6c619b6f85118494984fc30d5bf678da16b0cb44', '[\"*\"]', NULL, '2022-03-15 22:22:30', '2022-03-15 22:22:30'),
(3, 'App\\Models\\User', 11, '9845926849', '0012f7d8dc1f047126b67ddbc269f6f52f2ae96e9d6dedd1c323b15241cba862', '[\"*\"]', NULL, '2022-03-15 22:26:08', '2022-03-15 22:26:08'),
(4, 'App\\Models\\User', 11, '9845926849', '2050b8829b2ef87039602fd868e5ad39dd001e652adf1d27a8bbbb46410a8359', '[\"*\"]', NULL, '2022-03-15 23:23:44', '2022-03-15 23:23:44'),
(5, 'App\\Models\\User', 11, '9845926849', '1bc68728cd1fc3d24e756b56b1be3cf44c77748b3e4809d1cafbc55b0e5329c0', '[\"*\"]', NULL, '2022-03-15 23:43:15', '2022-03-15 23:43:15'),
(6, 'App\\Models\\User', 12, '9866844771', '56e9ba5606010799bb453547dbd043a2b4f233ee89feb9bcf80c8d18f7bac739', '[\"*\"]', NULL, '2022-03-21 02:40:01', '2022-03-21 02:40:01'),
(7, 'App\\Models\\User', 12, '9866844771', 'aab04b2e0b0b560978a7ed19e130a89854ab22c3d1d2c537857df1cadd9df53d', '[\"*\"]', NULL, '2022-03-21 02:40:21', '2022-03-21 02:40:21'),
(8, 'App\\Models\\User', 11, '9845926849', '05ec240c27100c482578c7706bf14920ecbe6243f5b102af3c80bd3db6d5ec4e', '[\"*\"]', NULL, '2022-03-21 22:37:12', '2022-03-21 22:37:12'),
(9, 'App\\Models\\User', 11, '9845926849', '849c9cbca27fa5a505fa33f0ea0c73c0c66fdc3339c729d050f49abcb906c385', '[\"*\"]', NULL, '2022-03-25 00:46:27', '2022-03-25 00:46:27'),
(10, 'App\\Models\\User', 11, '9845926849', 'cca2cd3e39f2bf7ee71dd5ff2ae7e13a7dfafbb04bfae1712b39b3c945a14663', '[\"*\"]', NULL, '2022-03-25 00:47:50', '2022-03-25 00:47:50'),
(11, 'App\\Models\\User', 11, '9845926849', 'd5060852e212acb2e182885add45e27ba719b66b1642aa859f25fc81730399eb', '[\"*\"]', NULL, '2022-03-25 04:01:20', '2022-03-25 04:01:20'),
(12, 'App\\Models\\User', 11, '9845926849', 'b3ee5192ac84777813f7c767f55c99e1bc7c6ba09e7f0a45135ca61dcbae9800', '[\"*\"]', NULL, '2022-03-25 04:03:05', '2022-03-25 04:03:05'),
(13, 'App\\Models\\User', 11, '9845926849', 'fd8273aa7aad8b04c652631f93895310d87a42191a0fbc8a730c04c1ca5ab112', '[\"*\"]', NULL, '2022-03-25 04:20:54', '2022-03-25 04:20:54'),
(14, 'App\\Models\\User', 11, '9845926849', '31935977942024222c866bb3cbd040328b7e76e41ad32369b8b6a0337fd81059', '[\"*\"]', NULL, '2022-03-25 05:38:44', '2022-03-25 05:38:44'),
(15, 'App\\Models\\User', 11, '9845926849', '61b19b80db93159ac7ce0b0a1ae9bb3f351661c7c1339e99bbce8279177cd3af', '[\"*\"]', NULL, '2022-03-25 05:51:47', '2022-03-25 05:51:47'),
(16, 'App\\Models\\User', 11, '9845926849', '12f318060922ae73be19a22ada505f073c8db0bf16f00b954c7bbaa5a09b0498', '[\"*\"]', NULL, '2022-03-25 06:12:50', '2022-03-25 06:12:50'),
(17, 'App\\Models\\User', 11, '9845926849', '9763be4f42151168307e0baa3fce476fd7e80efead2c004cd2ae35c299ce1593', '[\"*\"]', NULL, '2022-03-25 06:13:33', '2022-03-25 06:13:33'),
(18, 'App\\Models\\User', 11, '9845926849', 'e6947bde427377fd6c02c8e9889411e6cd0470a4ef9a14f31828fd8be8446f70', '[\"*\"]', NULL, '2022-03-25 06:16:31', '2022-03-25 06:16:31'),
(19, 'App\\Models\\User', 11, '9845926849', '1972e49fc91168cd4f5d841a7c8aeec545807045e11307222a5450f0243de986', '[\"*\"]', NULL, '2022-03-25 06:17:09', '2022-03-25 06:17:09'),
(20, 'App\\Models\\User', 11, '9845926849', 'c5f90d2c4540d80f8d541911c4d7162bd832a340dece933319fc6e3734911c83', '[\"*\"]', NULL, '2022-03-29 00:07:13', '2022-03-29 00:07:13'),
(21, 'App\\Models\\User', 11, '9845926849', 'e420c3e9336f3cc7406a9a0c7f0f1ea63a9d4100d94e557d28e481e2d19d0216', '[\"*\"]', NULL, '2022-03-29 00:23:28', '2022-03-29 00:23:28'),
(22, 'App\\Models\\User', 11, '9845926849', '5ecac37482dc208885dedcb1db0cd6dee5e5f2e710c044792db3af687197cbdd', '[\"*\"]', NULL, '2022-03-29 02:49:57', '2022-03-29 02:49:57'),
(23, 'App\\Models\\User', 11, '9845926849', 'ec0e013af29caf3dee4039b7531b3dcf18a7fbfba091fb0b0d18930d65a63668', '[\"*\"]', NULL, '2022-03-29 03:53:37', '2022-03-29 03:53:37'),
(24, 'App\\Models\\User', 11, '9845926849', 'fd0d9b5f956308815047edf14839696d6bab00a3434d34db9b5bd11b675e216c', '[\"*\"]', NULL, '2022-03-29 04:14:30', '2022-03-29 04:14:30'),
(25, 'App\\Models\\User', 11, '9845926849', '9f76cc043270e86f7da4961a5573350c5ba4d83ce734dab9944da1bc4aa36b85', '[\"*\"]', NULL, '2022-03-29 05:04:46', '2022-03-29 05:04:46'),
(26, 'App\\Models\\User', 11, '9845926849', 'c0c45f94b3b545435a0d575644111608dd868f3189a554be9eaa8b4c82ba2b87', '[\"*\"]', NULL, '2022-03-29 09:15:46', '2022-03-29 09:15:46'),
(27, 'App\\Models\\User', 13, '9845443345', 'fc9fb36d12e12e5b8c99436472ffe5ae763dc3eed1d25abc69d802c8b1557020', '[\"*\"]', '2022-03-30 04:22:49', '2022-03-30 00:03:20', '2022-03-30 04:22:49'),
(28, 'App\\Models\\User', 14, '9845445454', 'c7ffc58b0c9f14684c1afa82ab753b32f0b4babbf559eaae9cc0b7a379656673', '[\"*\"]', NULL, '2022-03-30 00:07:25', '2022-03-30 00:07:25'),
(29, 'App\\Models\\User', 11, '9845926849', '2ed3091c4db30f4ab44fd2361743913f4fcbce5693a93c4fea0ba8e8de4120d6', '[\"*\"]', NULL, '2022-03-30 00:09:52', '2022-03-30 00:09:52'),
(30, 'App\\Models\\User', 11, '9845926849', '84eadb6275fd51dad1d4783c0dff14f0d914699ca1a7a0e42e7a6205fe1c7a4c', '[\"*\"]', NULL, '2022-03-30 00:12:32', '2022-03-30 00:12:32'),
(31, 'App\\Models\\User', 15, '9845464245', '5f7f72a8a466375c2df74df875f9096b0fe05c9a893e88103573522c19770874', '[\"*\"]', NULL, '2022-03-30 00:13:08', '2022-03-30 00:13:08'),
(32, 'App\\Models\\User', 11, '9845926849', 'a823547f72716507f8ad095929221ed3e869ac7351e753412fa28b9136642e32', '[\"*\"]', NULL, '2022-03-30 00:17:02', '2022-03-30 00:17:02'),
(33, 'App\\Models\\User', 16, '9845445548', '34d1a7b2545f2f2ef6ef704fbf551e0959b9f4eba9942c7af2522d4cf1252a89', '[\"*\"]', NULL, '2022-03-30 00:19:06', '2022-03-30 00:19:06'),
(34, 'App\\Models\\User', 16, '9845445548', 'd3b77f69a895d3d4cd26609f768b1bd5b0547bd312776a1367c16aa268b42a6d', '[\"*\"]', NULL, '2022-03-30 00:22:12', '2022-03-30 00:22:12'),
(35, 'App\\Models\\User', 17, '9845445525', 'a23340db30fb8b8588591a2fea678f08dff9dba6cd5e6eb00f73eef6d2381dd1', '[\"*\"]', '2022-03-30 00:22:58', '2022-03-30 00:22:48', '2022-03-30 00:22:58'),
(36, 'App\\Models\\User', 17, '9845445525', '47edb4f15aaf4c03e9f1856bb1a835a5601b9e7e3208d82573a1b0951022ab00', '[\"*\"]', '2022-03-30 04:58:48', '2022-03-30 00:27:57', '2022-03-30 04:58:48'),
(37, 'App\\Models\\User', 18, '9845445522', '590f7e17ee6fcf47508d7e9974f07f03d562ac73fd9eac89dec4a39b1d8a62ba', '[\"*\"]', NULL, '2022-03-30 00:34:56', '2022-03-30 00:34:56'),
(38, 'App\\Models\\User', 20, '9845445529', 'd0b6213c1e61a61ab12566d8f5340b48eba507a90b5278ddfe9ee8161eb0e340', '[\"*\"]', NULL, '2022-03-30 01:13:05', '2022-03-30 01:13:05'),
(39, 'App\\Models\\User', 20, '9845445529', '0baeda65c64494de497d63345c9324c43e8ac3f29da63c8eeea112d5eb967278', '[\"*\"]', NULL, '2022-03-30 01:14:05', '2022-03-30 01:14:05'),
(40, 'App\\Models\\User', 11, '9845926849', '525309a0b0cb023ee4cd5479fd934c61bb8a0c16144141da6f564e10248d36e4', '[\"*\"]', NULL, '2022-03-30 03:08:17', '2022-03-30 03:08:17'),
(41, 'App\\Models\\User', 21, '9845445580', 'ea96769a20f3b44b2fcb52e552af33588e3e6bdf570a8c21e6835354a1f6070c', '[\"*\"]', NULL, '2022-03-30 03:09:45', '2022-03-30 03:09:45'),
(42, 'App\\Models\\User', 11, '9845926849', 'f8ffba649336f01d89f57482a8127c3d71a1ebe49d740f766274f8bc0d4d42d2', '[\"*\"]', NULL, '2022-03-30 03:12:31', '2022-03-30 03:12:31'),
(43, 'App\\Models\\User', 22, '9845445511', 'cae67521abe9235821752194940099d08e2d41e018a7897fb64d774dd1795252', '[\"*\"]', NULL, '2022-03-30 03:14:34', '2022-03-30 03:14:34'),
(44, 'App\\Models\\User', 11, '9845926849', '4c2c48ce52fc487ab627985c18cff341b84faa5419859883cc0b578594da0d50', '[\"*\"]', NULL, '2022-03-30 03:17:27', '2022-03-30 03:17:27'),
(45, 'App\\Models\\User', 11, '9845926849', '21887c49df0c197eec4fb6e24bfe43cc96a6736ad12cf05b42818e6a67c33599', '[\"*\"]', NULL, '2022-03-30 03:18:16', '2022-03-30 03:18:16'),
(46, 'App\\Models\\User', 11, '9845926849', 'd2824e9e91d23414050b098953dc59395f0517541dc1539aa421fee9d7a0e164', '[\"*\"]', NULL, '2022-03-30 04:35:43', '2022-03-30 04:35:43'),
(47, 'App\\Models\\User', 11, '9845926849', '51f33494ebfc4b0b53b6bad4b2fe6a5950b6d067bab9fc54d7b36c087a7d08a2', '[\"*\"]', NULL, '2022-03-30 04:43:55', '2022-03-30 04:43:55'),
(48, 'App\\Models\\User', 23, '9845445582', '5707131e093141dee39e35ba7675be0276fd1ecb3221001ab3a8a2e02fd4e15a', '[\"*\"]', NULL, '2022-03-30 04:44:27', '2022-03-30 04:44:27'),
(49, 'App\\Models\\User', 24, '9845442235', '67224c5da7da315cc09b84fedc9e410970b8a128f935d3aed9af83c5835d611d', '[\"*\"]', NULL, '2022-03-30 04:47:38', '2022-03-30 04:47:38'),
(50, 'App\\Models\\User', 25, '9845445523', 'c53f91b48a5ae8ab59c8835be5e95752c4ed23ba3484c8ce29ba589fafada7d7', '[\"*\"]', NULL, '2022-03-30 04:58:44', '2022-03-30 04:58:44'),
(51, 'App\\Models\\User', 26, '9845445544', '309974dbbc8e83da3aa1a035d7695353e3988e626fc4e0a1e6ac8378f4e63f98', '[\"*\"]', NULL, '2022-03-30 04:59:59', '2022-03-30 04:59:59'),
(52, 'App\\Models\\User', 26, '9845445544', '9f4546a1dcff08e4c5d0271dc6847414306208f1aa80f829ca056ea37f6691b1', '[\"*\"]', '2022-03-30 05:02:11', '2022-03-30 05:01:56', '2022-03-30 05:02:11'),
(53, 'App\\Models\\User', 11, '9845926849', 'a57fefebc5955c16abbf2d4e186198bc45602f6fa1d883ec55260859c0599347', '[\"*\"]', '2022-03-30 05:02:45', '2022-03-30 05:02:44', '2022-03-30 05:02:45'),
(54, 'App\\Models\\User', 11, '9845926849', '262a866b9e500f738dc6282e527b584c11bf7ddd5f2e87f61b010428866342b7', '[\"*\"]', '2022-03-30 05:06:43', '2022-03-30 05:06:42', '2022-03-30 05:06:43'),
(55, 'App\\Models\\User', 11, '9845926849', 'ea64d543fa403df7d3fdd69b2fac4f434c8e5a5a9380620aa53207718e48563f', '[\"*\"]', '2022-03-30 05:08:10', '2022-03-30 05:07:05', '2022-03-30 05:08:10'),
(56, 'App\\Models\\User', 11, '9845926849', '3cd51700ccd62ef82b78ba176154b404e99a6db9ca873b5d248fdc192120fcc6', '[\"*\"]', '2022-03-30 05:08:29', '2022-03-30 05:08:29', '2022-03-30 05:08:29'),
(57, 'App\\Models\\User', 11, '9845926849', 'd7faa60c8ec3d8e0b105cf42c2be02a4d3566bd69e3424880caab0634fb9b88c', '[\"*\"]', '2022-03-30 05:08:47', '2022-03-30 05:08:43', '2022-03-30 05:08:47'),
(58, 'App\\Models\\User', 11, '9845926849', 'db5adffb27002cbfd985068ed1dfc4497999b914dc29d0b2e75ddd28875cf79e', '[\"*\"]', NULL, '2022-03-31 00:31:18', '2022-03-31 00:31:18'),
(59, 'App\\Models\\User', 11, '9845926849', 'bb1997a9fadbb814d8aea9b8c671dde4e99619688c2f3304369288bd5c69db89', '[\"*\"]', '2022-03-31 01:31:33', '2022-03-31 00:59:54', '2022-03-31 01:31:33'),
(60, 'App\\Models\\User', 11, '9845926849', '53bcd2cf2e98562fd525aa8e5ccab3087f367384ef65d61a0e0bf5b40933392f', '[\"*\"]', '2022-03-31 03:24:21', '2022-03-31 03:24:20', '2022-03-31 03:24:21'),
(61, 'App\\Models\\User', 11, '9845926849', 'f5281902e5ab40e7fbf4069f5c33a55b3ff05ce6b899cb83e7ee54fe076abc13', '[\"*\"]', '2022-03-31 03:26:31', '2022-03-31 03:26:27', '2022-03-31 03:26:31'),
(62, 'App\\Models\\User', 11, '9845926849', '6092afc4f071fca6c6d313a002814eb2b68daab07f7183220cdb405293e4de61', '[\"*\"]', '2022-03-31 03:39:34', '2022-03-31 03:29:00', '2022-03-31 03:39:34'),
(63, 'App\\Models\\User', 21, '9845445580', '850bb0e93d2330149469860af9df2a319f431d7f404b35b82f9944d991bda3e6', '[\"*\"]', '2022-03-31 03:42:48', '2022-03-31 03:42:48', '2022-03-31 03:42:48'),
(64, 'App\\Models\\User', 27, '9845445575', '0c80ba5612b1272610266e589c79a159795859d0bbe35ead0f656d0ec55366fa', '[\"*\"]', '2022-03-31 04:05:07', '2022-03-31 03:45:46', '2022-03-31 04:05:07'),
(65, 'App\\Models\\User', 28, '9845445570', '56626c9f65a4e92db10cab3ca626f99949ed26fb8e04f8cb401eba1c64e0a465', '[\"*\"]', '2022-03-31 05:19:06', '2022-03-31 05:18:41', '2022-03-31 05:19:06'),
(66, 'App\\Models\\User', 11, '9845926849', '3e2fcbdfc0d46323fe60a2c73d9b2c6d497e5687d50bc0769204844b7248f0a4', '[\"*\"]', '2022-04-04 01:31:59', '2022-04-04 01:29:01', '2022-04-04 01:31:59'),
(67, 'App\\Models\\User', 11, '9845926849', '4b0f5abd9b70f92af09cb0a04af47015cd756a741f2d0781829ac548524a8fd6', '[\"*\"]', '2022-04-04 03:28:54', '2022-04-04 03:28:53', '2022-04-04 03:28:54'),
(68, 'App\\Models\\User', 11, '9845926849', 'f323d36cdad639378e554a68c9975963780fd3d71f637a2c50c2dd04fa3dc743', '[\"*\"]', '2022-04-04 04:19:43', '2022-04-04 04:14:29', '2022-04-04 04:19:43'),
(69, 'App\\Models\\User', 11, '9845926849', 'c732005dae4eb69df2e4272e7cce5f19ecc6c8301bba8c99fa34d179d2b706b2', '[\"*\"]', '2022-04-04 22:49:14', '2022-04-04 22:45:16', '2022-04-04 22:49:14'),
(70, 'App\\Models\\User', 11, '9845926849', 'c36a2e65a99c313ec3eda10e48825e9c9536a40b605237d02ef988699d1f7752', '[\"*\"]', '2022-04-04 23:22:36', '2022-04-04 23:04:19', '2022-04-04 23:22:36'),
(71, 'App\\Models\\User', 11, '9845926849', '93451860acfd7c5b30b2c256bc5ed1275635abc7cd1ef4c8e87d96677f1ba2cf', '[\"*\"]', '2022-04-05 00:36:41', '2022-04-05 00:25:21', '2022-04-05 00:36:41'),
(72, 'App\\Models\\User', 11, '9845926849', 'ad95e27b25a7105608f4c4070764e68499d1dd0bc4c34559ec50b9bde9c49fe8', '[\"*\"]', '2022-04-05 01:06:14', '2022-04-05 00:37:52', '2022-04-05 01:06:14'),
(73, 'App\\Models\\User', 11, '9845926849', '229efa19cae673fc6f64990358aa8e24c14a3abfc5169fcc3b82225f14736c6f', '[\"*\"]', '2022-04-05 22:46:33', '2022-04-05 22:35:19', '2022-04-05 22:46:33'),
(74, 'App\\Models\\User', 29, '9845442323', '94c9ff7d41dcc9348f968b05c65d916f6f7f02815efbf6f0330c18142f795eb0', '[\"*\"]', '2022-04-05 22:51:46', '2022-04-05 22:50:48', '2022-04-05 22:51:46'),
(75, 'App\\Models\\User', 11, '9845926849', '609c667183bac9112835e22e18f190068cc87ce94e5d9ebf4b5e52a06431d8e0', '[\"*\"]', '2022-04-05 23:14:04', '2022-04-05 23:13:54', '2022-04-05 23:14:04'),
(76, 'App\\Models\\User', 11, '9845926849', 'b7c6b0239f5060bb6b0bbf81fbf197a87fbcd67a7fcf5bbf573cb2ba4a8a23ed', '[\"*\"]', '2022-04-05 23:57:58', '2022-04-05 23:50:18', '2022-04-05 23:57:58'),
(77, 'App\\Models\\User', 11, '9845926849', 'ac4b66e39a71b587669a4e528994801d2b1cbb7751e8c048f8404512eaaaaa67', '[\"*\"]', '2022-04-06 00:34:19', '2022-04-06 00:32:17', '2022-04-06 00:34:19'),
(78, 'App\\Models\\User', 11, '9845926849', 'c12b729fa0493142fac563c24d48487d2209894586f334afe5c932bdca4c4ae6', '[\"*\"]', '2022-04-06 03:07:16', '2022-04-06 03:07:15', '2022-04-06 03:07:16'),
(79, 'App\\Models\\User', 30, '9845926840', '1ea3fb209170ac8074a8f6906235aea76a7c897be8ab67ad6a26e8c3603a8802', '[\"*\"]', '2022-04-06 03:14:09', '2022-04-06 03:14:03', '2022-04-06 03:14:09'),
(80, 'App\\Models\\User', 31, '9845445555', 'f20bd49f58ca66d68123befdd15c805cd4280ad34683021701f20b696f5b0a6a', '[\"*\"]', '2022-04-11 04:48:41', '2022-04-11 04:48:36', '2022-04-11 04:48:41'),
(81, 'App\\Models\\User', 11, '9845926849', 'bc0eadd1ab97b015036690006bf6fe528e4f88c9082983f6d1337828ee36f021', '[\"*\"]', '2022-04-12 01:15:22', '2022-04-12 01:15:21', '2022-04-12 01:15:22'),
(82, 'App\\Models\\User', 32, '9845926844', '505a2d7e230745d9f39fa57cd9df38c297366bed013a59696d2b63e6b9cb2b18', '[\"*\"]', '2022-04-12 05:57:09', '2022-04-12 05:57:02', '2022-04-12 05:57:09'),
(83, 'App\\Models\\User', 33, '9845926822', '9e5b55834947ad9e22df1517400381581124e2d2a77b3e0af71003ad1ba55797', '[\"*\"]', '2022-04-25 02:49:42', '2022-04-25 02:49:33', '2022-04-25 02:49:42'),
(84, 'App\\Models\\User', 11, '9845926849', '9a45f199138c7ac196fab28222c269690c687cca9320e335148a3d5e6ceec60c', '[\"*\"]', '2022-04-25 03:01:05', '2022-04-25 03:01:04', '2022-04-25 03:01:05'),
(85, 'App\\Models\\User', 11, '9845926849', '0bfdd1b3654c7f69ed4e785a05bd22423ba00a59e6796c5483a062ea4a13421c', '[\"*\"]', '2022-04-25 03:02:44', '2022-04-25 03:02:43', '2022-04-25 03:02:44'),
(86, 'App\\Models\\User', 11, '9845926849', '228682203ead7a7c980261ba88352d2d26c7bb71dca9b9d2ed780e043a134df6', '[\"*\"]', '2022-04-25 03:04:07', '2022-04-25 03:04:06', '2022-04-25 03:04:07'),
(87, 'App\\Models\\User', 11, '9845926849', '9873829e824676cd62ecf9ddaae0424d7205d8b0af61c38bb1c03fe229b2f54e', '[\"*\"]', '2022-04-25 03:10:18', '2022-04-25 03:05:25', '2022-04-25 03:10:18'),
(88, 'App\\Models\\User', 11, '9845926849', '9bb2b622d3a532ba56558d5467cbebbc22952271a21e99148bca4ace59214778', '[\"*\"]', '2022-04-25 03:13:37', '2022-04-25 03:10:46', '2022-04-25 03:13:37'),
(89, 'App\\Models\\User', 11, '9845926849', 'b6743b0ec2bb188b239a77457e7ffb78fffb42d1fa496991b2d5571b4aac0f5e', '[\"*\"]', '2022-04-25 03:15:47', '2022-04-25 03:15:43', '2022-04-25 03:15:47'),
(90, 'App\\Models\\User', 11, '9845926849', 'bb1bf31dbaf8a65268f39b7ed0e3f3c016c9d108cf5da2740e8ec02c570f58b7', '[\"*\"]', NULL, '2022-04-25 03:16:47', '2022-04-25 03:16:47'),
(91, 'App\\Models\\User', 11, '9845926849', '1b26497a1b744fc836a9298e45921b50f3acd743de3a1c25915b1d044d050d4d', '[\"*\"]', '2022-04-25 03:19:45', '2022-04-25 03:18:09', '2022-04-25 03:19:45'),
(92, 'App\\Models\\User', 11, '9845926849', '44c9b6fb2ae04b5078464be3f2d6a83f08062de53eb4b7d8c7bd757b395a360f', '[\"*\"]', '2022-04-25 03:38:59', '2022-04-25 03:26:34', '2022-04-25 03:38:59'),
(93, 'App\\Models\\User', 34, '9845626849', 'c26b6a96c896d948046656b7712702f167ed2fa77bb691dbd6fb5701c6bc9e3a', '[\"*\"]', '2022-04-25 03:58:16', '2022-04-25 03:58:08', '2022-04-25 03:58:16'),
(94, 'App\\Models\\User', 35, '9845926542', '92b317b678f8857de9e41befe2eb16b163e5e55590b90d310ab1e6bbcc927303', '[\"*\"]', '2022-04-25 04:28:12', '2022-04-25 04:28:08', '2022-04-25 04:28:12'),
(95, 'App\\Models\\User', 36, '9845441123', 'de2f5692846cd3112de89baa07ff6362d1d3e61cacb8360773d8307e5532d1a2', '[\"*\"]', '2022-04-25 04:50:02', '2022-04-25 04:49:57', '2022-04-25 04:50:02'),
(96, 'App\\Models\\User', 37, '9845926554', '4fb8c5d32ca57e0bfc524e5c5fe22691fbb012d4bc8dabd5eaa3dc4931df5ea4', '[\"*\"]', '2022-04-25 05:13:42', '2022-04-25 05:13:17', '2022-04-25 05:13:42'),
(97, 'App\\Models\\User', 11, '9845926849', '85e774a5ea8741f7f01800a9df0a0d8d0ad2ce8b172a6ace1f343ffb44ce54a5', '[\"*\"]', NULL, '2022-04-25 05:15:19', '2022-04-25 05:15:19'),
(98, 'App\\Models\\User', 11, '9845926849', '5f67cfe77fdd2d63ff40935c637b8322ac6e3d0959e3a335fecd99716aecbd07', '[\"*\"]', '2022-04-25 22:30:28', '2022-04-25 22:30:27', '2022-04-25 22:30:28'),
(99, 'App\\Models\\User', 11, '9845926849', '2a96c297a4971701b894fc5af497c0f2fe9d28a6c8f3a363978cb46ef9a0c0e8', '[\"*\"]', NULL, '2022-04-25 22:46:37', '2022-04-25 22:46:37'),
(100, 'App\\Models\\User', 38, '9864837762', '7ef61f15a40ee122610c1189e0cf69cbdf9dd4b83bd66b25f11df8769c5a13b3', '[\"*\"]', '2022-04-25 23:13:20', '2022-04-25 23:13:05', '2022-04-25 23:13:20'),
(101, 'App\\Models\\User', 38, '9864837762', '2594732533e7cb47c5b89dd81129da19e0637d9f8c91cfb604c7135482a63a88', '[\"*\"]', NULL, '2022-04-25 23:14:31', '2022-04-25 23:14:31'),
(102, 'App\\Models\\User', 38, '9864837762', '8e8749ed7be8a73fe8afd02b9d885a05d523b8ae80cfda9f562f607caa5404bb', '[\"*\"]', '2022-04-26 00:07:04', '2022-04-26 00:06:59', '2022-04-26 00:07:04'),
(103, 'App\\Models\\User', 38, '9864837762', 'b058e0df8ff04ff88ef4b6e40804b729d854d81b0f27ad1cf79cd0a8314f0caf', '[\"*\"]', '2022-04-26 00:37:43', '2022-04-26 00:37:38', '2022-04-26 00:37:43'),
(104, 'App\\Models\\User', 38, '9864837762', 'de36ad304ad3d1ec1b684fdda78337fc0437b81d6e0d5cc021e512ab12d48411', '[\"*\"]', '2022-04-26 01:04:33', '2022-04-26 01:04:27', '2022-04-26 01:04:33'),
(105, 'App\\Models\\User', 38, '9864837762', '8f62d467aa6815a03822f4de444d9034c8a7cdabb5f374813ba682697c884e1d', '[\"*\"]', NULL, '2022-04-26 02:43:55', '2022-04-26 02:43:55'),
(106, 'App\\Models\\User', 38, '9864837762', 'cd7763be3afb3084023e98295e057e5e300b4fe924610cb972ac815edb19821a', '[\"*\"]', '2022-04-26 02:50:08', '2022-04-26 02:50:02', '2022-04-26 02:50:08'),
(107, 'App\\Models\\User', 38, '9864837762', '028fe239dbb7ae693afd32a1e52ccac2b2c88b4b04f0cdeb72f5e92951735be8', '[\"*\"]', '2022-04-26 03:04:42', '2022-04-26 03:04:38', '2022-04-26 03:04:42'),
(108, 'App\\Models\\User', 38, '9864837762', '6a678e1cbad219cf3af7cf839006434190f99eec5d417d8cc50b6375700a84b7', '[\"*\"]', '2022-04-26 22:33:59', '2022-04-26 22:33:44', '2022-04-26 22:33:59'),
(109, 'App\\Models\\User', 38, '9864837762', '903e921b3c5cd826d36f7397e50343db39b960788ecadd7e4992ff48ab2daa68', '[\"*\"]', '2022-04-26 22:37:43', '2022-04-26 22:37:39', '2022-04-26 22:37:43'),
(110, 'App\\Models\\User', 38, '9864837762', '5ecfdc6b47d46977f5a76478b432fc8d18965a171a75aaacc9b940663e48324d', '[\"*\"]', '2022-05-05 04:50:56', '2022-05-05 04:50:48', '2022-05-05 04:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_trending` tinyint(1) NOT NULL DEFAULT 0,
  `is_recommended` tinyint(1) NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `status` enum('available','not-available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `is_veg` tinyint(1) NOT NULL DEFAULT 0,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `primary_image`, `price`, `description`, `is_trending`, `is_recommended`, `discount`, `status`, `is_veg`, `sub_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Margherita Pizza', 'Product-Image164734271166.png', 250, 'Pizza margherita, as the Italians call it, is a simple pizza hailing from Naples. When done right, margherita pizza features a bubbly crust, crushed San Marzano tomato sauce, fresh mozzarella and basil, a drizzle of olive oil, and a sprinkle of salt.', 0, 1, 0, 'available', 0, 2, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(2, 'Veg Momo', 'Product-Image16473430638.png', 180, 'Momo is a type of steamed dumpling with some form of filling. Momo has become a traditional delicacy in Nepal, Tibet, as well as among Nepalese and Tibetan communities in Bhutan, as well as people of the Indian regions of Darjeeling, Ladakh, Sikkim, Assam, Uttarakhand, Himachal Pradesh and Arunachal Pradesh.', 1, 0, 0, 'available', 1, 1, '2022-03-15 05:32:43', '2022-03-15 05:32:43'),
(3, 'pizza', 'Product-Image165094691140.jpg', 1000, 'Get high quality pizza pictures here in our handpicked collection. No attribution required, download for free! Pizza, Italian, Homemade, Cheese, Crust.', 1, 1, 200, 'available', 0, 2, '2022-04-25 22:36:52', '2022-04-25 22:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Product-Image164734271118.png', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51'),
(2, 'Product-Image16473427112.png', 1, '2022-03-15 05:26:51', '2022-03-15 05:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `image`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Momo', 'Menu-Image164734250356.png', 'Momo is a type of steamed dumpling with some form of filling. Momo has become a traditional delicacy in Nepal, Tibet, as well as among Nepalese and Tibetan communities in Bhutan, as well as people of the Indian regions of Darjeeling, Ladakh, Sikkim, Assam, Uttarakhand, Himachal Pradesh and Arunachal Pradesh.', 2, '2022-03-15 05:23:24', '2022-03-15 05:23:24'),
(2, 'Pizza', 'Menu-Image164734254067.png', 'pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot', 2, '2022-03-15 05:24:00', '2022-03-15 05:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('opened','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'opened',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact_number`, `email`, `bio`, `password`, `otp`, `verified`, `address`, `social_id`, `social_type`, `facebook`, `instagram`, `twitter`, `youtube`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Makenna Hegmann', '974805399', 'devonte14@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', 'AZJ2HPAzel', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(2, 'Briana Kling', '970035325', 'gtreutel@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', 'rzLRLNW7Hr', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(3, 'Mrs. Meagan Mann V', '945043384', 'considine.roderick@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', 'WOAZBvmri4', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(4, 'Meda Haley', '998181662', 'xdaugherty@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', '7MOcAHb3UH', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(5, 'Nakia Kris', '948876981', 'penelope.runolfsson@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', '52OU8o5xsQ', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(8, 'Miss Alaina Kuphal', '944549235', 'laverna.larson@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', 'wypUlS1jyf', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(9, 'Dr. Kira Ledner Jr.', '915955097', 'octavia.gislason@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', 'vEPdE4QJ38', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(10, 'Green Brown', '980519036', 'justus.hickle@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:13:54', 'NiBobBJ4lx', '2022-03-15 05:13:54', '2022-03-15 05:13:54'),
(11, NULL, '9845926849', NULL, NULL, '$2y$10$JPcDfyijKQIAKgO1lDyGq.mg0AJuVZtZOU.40RQcvO7QKyeIc.rem', '4415', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 22:22:00', '2022-04-25 22:30:16'),
(12, NULL, '9866844771', NULL, NULL, '$2y$10$nlfhkdE57Q9PKoyW7pAjX.kVSuekStwVdRmxu28SmQgrRmiJmGU7m', '1013', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-21 02:39:39', '2022-03-21 02:40:15'),
(13, NULL, '9845443345', NULL, NULL, '$2y$10$KDwdTSwmGq44H5dRv7ZEuO/S.Zf/9eeGZzCSdj/c9fdA9bC2u7bVm', '7350', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 00:01:28', '2022-03-30 00:03:20'),
(14, 'saugatt', '9845445454', NULL, NULL, '$2y$10$7k9wlr31gVMaPrgBk7l4M.DbEQBMO0LDrB227xe5nKd1VzMo.uH3O', '3829', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 00:07:21', '2022-03-30 00:11:48'),
(15, NULL, '9845464245', NULL, NULL, '$2y$10$FD0pks7zwv2LrPVHtq803.vUipuFtuQ9MRDhBkNEngpSmpXN/nD.2', '6516', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 00:13:02', '2022-03-30 00:13:08'),
(16, NULL, '9845445548', NULL, NULL, '$2y$10$g.YFzRwJn.3xauxF6M7QW.nTlKx0YZHuko7IOf15clCLsdez6XEDi', '1021', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 00:19:02', '2022-03-30 00:19:06'),
(17, NULL, '9845445525', NULL, NULL, '$2y$10$pe5M94l8pGv3qrYgGQWqlOJbzn62mK4nJoM1Q0zHRmyW6EgeuK0JS', '4959', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 00:22:42', '2022-03-30 00:22:48'),
(18, 'hii there', '9845445522', NULL, NULL, '$2y$10$xCUH0ubSHcWdiRgAvtyIUOWZRB9lPCsi9QrrYRmk8/mFp8qtGsuJe', '8837', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 00:34:53', '2022-03-30 00:44:54'),
(19, NULL, '9845445521', NULL, NULL, '$2y$10$dY7FKiqjDOORvIvximYcne6xiM7PjzfY4WyzfIh8WGozTKyumD8o6', '5742', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 01:01:53', '2022-03-30 01:01:53'),
(20, NULL, '9845445529', NULL, NULL, '$2y$10$PY.h7v5dqbojquaRCBdGSexBNShavKjldYqszxt4Lx7JHv8QVvEWK', '2661', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 01:12:49', '2022-03-30 01:13:05'),
(21, 'hellow there', '9845445580', NULL, NULL, '$2y$10$ZYmcaTLlflxRBv.gV8nXQejLmdfSL4bNyeO2FRPwsybf4iS/3P5rC', '4347', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 03:09:41', '2022-03-31 03:42:44'),
(22, 'dffff', '9845445511', NULL, NULL, '$2y$10$iGpJ88aOZ/zio53ynfjEF.S3ebwsp6Nd4U52rTMqk/vKFIntUTzFO', '2175', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 03:14:22', '2022-03-31 03:42:22'),
(23, 'bBahahfgggg', '9845445582', NULL, NULL, '$2y$10$PY4b.KTEzN3qvKEYjeqbbug4z6X.IyyCUkxFtJ6zvZjY3fPpMPttm', '8041', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 04:44:23', '2022-03-30 04:46:23'),
(24, 'saugat oudasaini', '9845442235', NULL, NULL, '$2y$10$gx8CPg.hiE3dTOUh776/Tu8vE7J4iifjXHKHvsX15g4Zb1laIFAq2', '3470', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 04:47:33', '2022-03-30 04:47:44'),
(25, 'hahah', '9845445523', NULL, NULL, '$2y$10$sfNCSLf4mMel9ThvBODq0.pIUcY0iZZWZF9GDH470HaY7QzT7d3B6', '9040', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 04:58:39', '2022-03-30 04:58:46'),
(26, 'wjjaja', '9845445544', NULL, NULL, '$2y$10$/Si.vDG.XbNDJgHz9yUmKexrg7301A4RTD/ySVZo3YqDUXIx.C0ca', '7916', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 04:59:54', '2022-03-30 05:01:59'),
(27, 'thisssis', '9845445575', NULL, NULL, '$2y$10$tbCjNECFbk9w/paNrUlCt.j1C2OOu2GhCoIWXCqtmOCoYkpD6a5Ga', '4973', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 03:45:41', '2022-03-31 03:45:51'),
(28, 'saugat pudasaini', '9845445570', NULL, NULL, '$2y$10$W2mM.I9CuOOXzLuDs6/3q.wrfF3g0RyV7BqaKjUahcfh8mWfYHCtW', '5313', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 05:18:27', '2022-03-31 05:18:48'),
(29, 'hii there', '9845442323', NULL, NULL, '$2y$10$qgu.fGs3Qo0XouvmNDgB1eV4v96aXribU48VuEKYlsUwsyRMz77oS', '5747', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-05 22:50:42', '2022-04-05 22:50:59'),
(30, 'hii there', '9845926840', NULL, NULL, '$2y$10$wGVx1eun6Wu0dkwPOVY7Mu4caar8GZ2lTZXTMB30OzR/.nI1bPsCa', '5150', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-06 03:13:58', '2022-04-06 03:14:08'),
(31, 'saugat', '9845445555', NULL, NULL, '$2y$10$X43RpSLTbcS4tk56qZ3bA.VN9DJlKdS0v1XjUGutKReTv9adhSlz.', '7982', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-11 04:48:32', '2022-04-11 04:48:40'),
(32, 'saugatpusasafafa', '9845926844', NULL, NULL, '$2y$10$g70F1.o4SSdeDGlCZs3T8.5R/3Np2Scc3aCUBOK4V5ZULqk5a36zq', '5591', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12 05:56:55', '2022-04-12 05:57:08'),
(33, 'saugat pudasaini', '9845926822', NULL, NULL, '$2y$10$jEMs1fOGmoZMpRIBlDwRl.Mx1UrSG8o15NuQB9QlJTZxw4dsr0YQG', '9280', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 02:49:29', '2022-04-25 02:49:40'),
(34, 'rammm', '9845626849', NULL, NULL, '$2y$10$nhBu5YwT1TSZZtVfr7clCOagolqzO27wN1WyYQHE1oBOcukQIQoyC', '6875', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:58:01', '2022-04-25 03:58:15'),
(35, 'hiiii', '9845926542', NULL, NULL, '$2y$10$H1vj464aT6BuVfhHTJJpee3cpvkkmon/kX/jAiY7MtP4tWqEcZKfm', '5709', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 04:28:04', '2022-04-25 04:28:11'),
(36, 'hiuiii', '9845441123', NULL, NULL, '$2y$10$.pSX61ZPQewgws/2ywmrNeC/HXjq8N1ZRIXmkSuKsShcpkZlbKEmW', '8474', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 04:49:49', '2022-04-25 04:50:01'),
(37, 'hiiuser', '9845926554', NULL, NULL, '$2y$10$u/7OfBeqnVGQ49nB.rKSg.Ypot5iZl2JnMkHfuVn9N8x5.WQlWLI.', '7563', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 05:12:48', '2022-04-25 05:13:41'),
(38, 'rina', '9864837762', NULL, NULL, '$2y$10$RomyVh/7tJNtETI3NzzJwOk8BKuCdb3ns0XQ3zaNKU/vIMRwEDGsi', '4524', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 23:12:54', '2022-05-05 04:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_type` enum('cover','profile') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
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
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`),
  ADD KEY `admin_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake_banners`
--
ALTER TABLE `cake_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake_images`
--
ALTER TABLE `cake_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cake_images_cake_id_foreign` (`cake_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredients_product_id_foreign` (`product_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

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
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staffs_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_number_unique` (`contact_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_images_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_banners`
--
ALTER TABLE `cake_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cake_images`
--
ALTER TABLE `cake_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cake_images`
--
ALTER TABLE `cake_images`
  ADD CONSTRAINT `cake_images_cake_id_foreign` FOREIGN KEY (`cake_id`) REFERENCES `cakes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_images`
--
ALTER TABLE `user_images`
  ADD CONSTRAINT `user_images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
