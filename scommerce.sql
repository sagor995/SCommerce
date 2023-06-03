-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 04:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Game', 'game', 'This is a game logo', '1684177458-br.png', 1, '2023-05-15 07:04:18', '2023-05-15 07:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` int(11) NOT NULL DEFAULT 0 COMMENT '0=parent',
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `is_parent`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Education', 'education', 'This is the primary Cat Edu', 0, '1684177550-cat.png', 1, '2023-05-15 07:05:50', '2023-05-15 07:05:50'),
(2, 'Primary Education', 'primary-education', 'The is under education', 1, '1684177601-cat.png', 1, '2023-05-15 07:06:41', '2023-05-15 07:06:41'),
(3, 'IT', 'it', 'Information Technology', 0, '1684177727-cat.jpg', 1, '2023-05-15 07:08:47', '2023-05-15 07:08:47'),
(4, 'App Development', 'app-development', 'App Development', 3, '1684177877-cat.png', 1, '2023-05-15 07:11:17', '2023-05-15 07:11:17'),
(5, 'Higher Studies', 'higher-studies', 'A dream.', 1, '1684177989-cat.png', 1, '2023-05-15 07:13:09', '2023-05-15 07:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `slug`, `division_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'dhaka', '1', 1, '2023-05-15 07:15:03', '2023-05-15 07:15:03'),
(2, 'Munshiganj', 'munshiganj', '1', 1, '2023-05-15 07:15:15', '2023-05-15 07:15:15'),
(3, 'Kishoreganj', 'kishoreganj', '1', 1, '2023-05-15 07:15:52', '2023-05-15 07:15:52'),
(4, 'Gazipur', 'gazipur', '1', 1, '2023-05-15 07:16:05', '2023-05-15 07:16:05'),
(5, 'Narayanganj', 'narayanganj', '1', 1, '2023-05-15 07:16:16', '2023-05-15 07:16:16'),
(6, 'Manikganj', 'manikganj', '1', 1, '2023-05-15 07:16:27', '2023-05-15 07:16:27'),
(7, 'Narsingdi', 'narsingdi', '1', 1, '2023-05-15 07:16:36', '2023-05-15 07:16:36'),
(8, 'Faridpur', 'faridpur', '1', 1, '2023-05-15 07:16:45', '2023-05-15 07:16:45'),
(9, 'Tangail', 'tangail', '1', 1, '2023-05-15 07:17:03', '2023-05-15 07:17:03'),
(10, 'Gopalganj', 'gopalganj', '1', 1, '2023-05-15 07:17:17', '2023-05-15 07:17:17'),
(11, 'Madaripur', 'madaripur', '1', 1, '2023-05-15 07:17:28', '2023-05-15 07:17:28'),
(12, 'Rajbari', 'rajbari', '1', 1, '2023-05-15 07:17:39', '2023-05-15 07:17:39'),
(13, 'Shariatpur', 'shariatpur', '1', 1, '2023-05-15 07:17:50', '2023-05-15 07:17:50'),
(14, 'Comilla', 'comilla', '2', 1, '2023-05-15 07:19:12', '2023-05-15 07:19:12'),
(15, 'Cox\'s Bazar', 'coxs-bazar', '2', 1, '2023-05-15 07:19:26', '2023-05-15 07:19:26'),
(16, 'Chittagong', 'chittagong', '2', 1, '2023-05-15 07:19:35', '2023-05-15 07:19:35'),
(17, 'Bandarban', 'bandarban', '2', 1, '2023-05-15 07:19:49', '2023-05-15 07:19:49'),
(18, 'Rangamati', 'rangamati', '2', 1, '2023-05-15 07:19:58', '2023-05-15 07:19:58'),
(19, 'Khagrachhari', 'khagrachhari', '2', 1, '2023-05-15 07:20:08', '2023-05-15 07:20:08'),
(20, 'Feni', 'feni', '2', 1, '2023-05-15 07:20:16', '2023-05-15 07:20:16'),
(21, 'Noakhali', 'noakhali', '2', 1, '2023-05-15 07:20:25', '2023-05-15 07:20:25'),
(22, 'Lakshmipur', 'lakshmipur', '2', 1, '2023-05-15 07:20:36', '2023-05-15 07:20:36'),
(23, 'Chandpur', 'chandpur', '2', 1, '2023-05-15 07:20:47', '2023-05-15 07:20:47'),
(24, 'Brahmanbaria', 'brahmanbaria', '2', 1, '2023-05-15 07:21:13', '2023-05-15 07:21:13'),
(25, 'Dinajpur', 'dinajpur', '7', 1, '2023-05-15 07:21:49', '2023-05-15 07:21:49'),
(26, 'Kurigram', 'kurigram', '7', 1, '2023-05-15 07:21:59', '2023-05-15 07:21:59'),
(27, 'Gaibandha', 'gaibandha', '7', 1, '2023-05-15 07:22:08', '2023-05-15 07:22:08'),
(28, 'Lalmonirhat', 'lalmonirhat', '7', 1, '2023-05-15 07:22:20', '2023-05-15 07:22:20'),
(29, 'Nilphamari', 'nilphamari', '7', 1, '2023-05-15 07:22:29', '2023-05-15 07:22:29'),
(30, 'Panchagarh', 'panchagarh', '7', 1, '2023-05-15 07:22:42', '2023-05-15 07:22:42'),
(31, 'Rangpur', 'rangpur', '7', 1, '2023-05-15 07:22:50', '2023-05-15 07:22:50'),
(32, 'Thakurgaon', 'thakurgaon', '7', 1, '2023-05-15 07:23:02', '2023-05-15 07:23:02'),
(33, 'Habiganj', 'habiganj', '5', 1, '2023-05-15 07:23:30', '2023-05-15 07:23:30'),
(34, 'Moulvibazar', 'moulvibazar', '5', 1, '2023-05-15 07:23:42', '2023-05-15 07:23:42'),
(35, 'Sunamganj', 'sunamganj', '5', 1, '2023-05-15 07:23:50', '2023-05-15 07:23:50'),
(36, 'Sylhet', 'sylhet', '5', 1, '2023-05-15 07:23:58', '2023-05-15 07:23:58'),
(37, 'Natore', 'natore', '3', 1, '2023-05-15 07:24:16', '2023-05-15 07:24:16'),
(38, 'Rajshahi', 'rajshahi', '3', 1, '2023-05-15 07:26:11', '2023-05-15 07:26:11'),
(39, 'Sirajganj', 'sirajganj', '3', 1, '2023-05-15 07:26:19', '2023-05-15 07:26:19'),
(40, 'Pabna', 'pabna', '3', 1, '2023-05-15 07:26:28', '2023-05-15 07:26:28'),
(41, 'Bogura', 'bogura', '3', 1, '2023-05-15 07:26:39', '2023-05-15 07:26:39'),
(42, 'Chapainawabganj', 'chapainawabganj', '3', 1, '2023-05-15 07:26:47', '2023-05-15 07:26:47'),
(43, 'Naogaon', 'naogaon', '3', 1, '2023-05-15 07:26:55', '2023-05-15 07:26:55'),
(44, 'Joypurhat', 'joypurhat', '3', 1, '2023-05-15 07:27:03', '2023-05-15 07:27:03'),
(45, 'Barisal', 'barisal', '6', 1, '2023-05-15 07:27:26', '2023-05-15 07:27:26'),
(46, 'Barguna', 'barguna', '6', 1, '2023-05-15 07:27:36', '2023-05-15 07:27:36'),
(47, 'Bhola', 'bhola', '6', 1, '2023-05-15 07:27:47', '2023-05-15 07:27:47'),
(48, 'Jhalokati', 'jhalokati', '6', 1, '2023-05-15 07:27:56', '2023-05-15 07:27:56'),
(49, 'Patuakhali', 'patuakhali', '6', 1, '2023-05-15 07:28:04', '2023-05-15 07:28:04'),
(50, 'Pirojpur', 'pirojpur', '6', 1, '2023-05-15 07:28:13', '2023-05-15 07:28:13'),
(51, 'Bagerhat', 'bagerhat', '4', 1, '2023-05-15 07:28:29', '2023-05-15 07:28:29'),
(52, 'Chuadanga', 'chuadanga', '4', 1, '2023-05-15 07:28:38', '2023-05-15 07:28:38'),
(53, 'Jashore', 'jashore', '4', 1, '2023-05-15 07:28:45', '2023-05-15 07:28:45'),
(54, 'Jhenaidah', 'jhenaidah', '4', 1, '2023-05-15 07:28:52', '2023-05-15 07:28:52'),
(55, 'Khulna', 'khulna', '4', 1, '2023-05-15 07:28:59', '2023-05-15 07:28:59'),
(56, 'Kushtia', 'kushtia', '4', 1, '2023-05-15 07:29:07', '2023-05-15 07:29:07'),
(57, 'Magura', 'magura', '4', 1, '2023-05-15 07:29:14', '2023-05-15 07:29:14'),
(58, 'Meherpur', 'meherpur', '4', 1, '2023-05-15 07:29:23', '2023-05-15 07:29:23'),
(59, 'Narail', 'narail', '4', 1, '2023-05-15 07:29:31', '2023-05-15 07:29:31'),
(60, 'Satkhira', 'satkhira', '4', 1, '2023-05-15 07:29:39', '2023-05-15 07:29:39'),
(61, 'Mymensingh', 'mymensingh', '8', 1, '2023-05-15 07:29:53', '2023-05-15 07:29:53'),
(62, 'Jamalpur', 'jamalpur', '8', 1, '2023-05-15 07:30:02', '2023-05-15 07:30:02'),
(63, 'Netrokona', 'netrokona', '8', 1, '2023-05-15 07:30:12', '2023-05-15 07:30:12'),
(64, 'Sherpur', 'sherpur', '8', 1, '2023-05-15 07:30:24', '2023-05-15 07:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `slug`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'dhaka', '1', 1, '2023-05-15 07:13:23', '2023-05-15 07:13:23'),
(2, 'Chittagong', 'chittagong', '2', 1, '2023-05-15 07:13:44', '2023-05-15 07:18:29'),
(3, 'Rajshahi', 'rajshahi', '3', 1, '2023-05-15 07:13:54', '2023-05-15 07:13:54'),
(4, 'Khulna', 'khulna', '4', 1, '2023-05-15 07:14:03', '2023-05-15 07:14:03'),
(5, 'Sylhet', 'sylhet', '5', 1, '2023-05-15 07:14:13', '2023-05-15 07:14:13'),
(6, 'Barishal', 'barishal', '6', 1, '2023-05-15 07:14:22', '2023-05-15 07:14:22'),
(7, 'Rangpur', 'rangpur', '7', 1, '2023-05-15 07:14:35', '2023-05-15 07:14:35'),
(8, 'Mymensingh', 'mymensingh', '8', 1, '2023-05-15 07:14:54', '2023-05-15 07:14:54');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_29_160800_create_brands_table', 1),
(6, '2023_05_03_144836_create_categories_table', 1),
(7, '2023_05_08_120830_create_divisions_table', 1),
(8, '2023_05_08_120836_create_districts_table', 1),
(9, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 2 COMMENT '1=admin, 2=customner',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address_line1`, `address_line2`, `image`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'AppsDevSA', 'appsdevsa.me@gmail.com', '2023-06-03 08:26:12', '$2y$10$q7qDPHHAn/8QsYRWB4u1yOFTVeJIsXOhPi9DHTAY9o1xuU9KqEn.6', NULL, NULL, NULL, NULL, 2, NULL, '2023-06-03 08:25:37', '2023-06-03 08:26:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_name_unique` (`name`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisions_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
