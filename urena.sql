-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 02:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urena`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `author`, `publishdate`, `price`, `created_at`, `updated_at`) VALUES
(3, 'Tarik Gates', '1642116276.jpg', 'Marny Weeks', NULL, '350', '2022-01-13 16:20:05', '2022-01-13 18:24:36'),
(4, 'Charlotte Levy', '1642115669.jpg', 'Brock Anthony', NULL, '818', '2022-01-13 16:57:53', '2022-01-13 18:14:29'),
(7, 'Devin Church', '1642115650.jpg', 'Craig Mueller', NULL, '833', '2022-01-13 17:18:41', '2022-01-13 18:14:10'),
(14, 'Fitzgerald Trujillo', '1642115642.jpg', 'Joy Olson', NULL, '22', '2022-01-13 17:32:32', '2022-01-13 18:14:02'),
(15, 'Fletcher Taylor', '1642115632.jpg', 'Donna Alvarez', NULL, '721', '2022-01-13 17:32:56', '2022-01-13 18:13:52'),
(16, 'Wallace Anderson', '1642115622.jpg', 'Eugenia Bryant', NULL, '500', '2022-01-13 17:47:01', '2022-01-13 18:13:43'),
(24, 'Wallace Rivas', '1642118083.jpg', 'Lisandra May', NULL, '690', '2022-01-13 18:54:13', '2022-01-13 18:54:43');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_01_13_201635_create_books_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `lastname`, `email`, `phone_number`, `email_verified_at`, `password`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(99, 'Cullen Jensen', 'Key', 'john@gmail.com', '135', NULL, '$2y$10$FFfL4pDiTGp2pNdsBGOn9ekNA9uCEScIKeySTVOKlIiprHOnJh8b.', '1642118287.jpg', '0jOTEn4JEeRh1K9Liil87nEZZcmS60xe9decqMyc', '2022-01-13 16:44:47', '2022-01-13 18:58:07'),
(100, 'Yardley', 'Gretchen', 'jipugyc@mailinator.com', '963', NULL, '$2y$10$hcna5mH7t61rPmNSBZy63ubT1cuT.BIp7NDBV5OH95LY9ik6IPsWi', '1642118298.jpg', 'vGiEczzhfylnupiCNRK4YclJCuSy8ktuPXyuoKlx', '2022-01-13 18:16:05', '2022-01-13 18:58:18'),
(101, 'Isaac', 'Iliana', 'tusajobu@mailinator.com', '191', NULL, '$2y$10$1hmd1YDUDX5QWcqRBBTGUeCc.OEOFA6ZswTDXzy1zPYgB.EKagBDi', '1642118313.jpg', 'rjV8U8HeWjheGFmtGDUP5KxyqnSuI3YSFG0QGONZ', '2022-01-13 18:16:22', '2022-01-13 18:58:33'),
(102, 'Tanya', 'Aaron', 'pokiju@mailinator.com', '674', NULL, '$2y$10$mdCgc9YSbPdOV7TKltJeaOgbEHYfupMiEXcIYUZRwCL9XykpO414i', '1642118129.jpg', 'Vq9M2LnurtsvcvozWFsohpi2aWO15Q6tCnAI4wcf', '2022-01-13 18:36:52', '2022-01-13 18:55:29'),
(103, 'Caryn', 'Kenneth', 'qikupimofy@mailinator.com', '327', NULL, '$2y$10$yd2z8v6.0dg26mI9NWkuH.zQED1wWV9juiyiSty7UODkHaPfhHkFC', '1642118141.jpg', 'xnCtvpC6Hvp9lmiC9XCKIa00DBVWw2vynpVBWRZ5', '2022-01-13 18:37:30', '2022-01-13 18:55:41'),
(104, 'Zoe', 'Deanna', 'guhu@mailinator.com', '394', NULL, '$2y$10$8XLT4QYMcC57QpnHt5FBBeoSONJEp.frgO9tjzYexTL98XMSRqnGC', '1642118152.jpg', 'Kw3FgNzNLUAXHeqhp816zmWRMvUT4z2rSVxqwSsP', '2022-01-13 18:40:32', '2022-01-13 18:55:52'),
(105, 'Hamish', 'Zorita', 'ravunysuv@mailinator.com', '375', NULL, '$2y$10$NX8Xiknb9/Nt3dN3LbJjtOnflDxK3Iy3vkq.AMLZ0.y8Vdkg7wBMy', '1642118276.jpg', 't6gIwxyIcK5KSvr987okfsKeAbhp6YKmzmIxOyjc', '2022-01-13 18:56:13', '2022-01-13 18:57:56'),
(106, 'Myra', 'Emily', 'hyxene@mailinator.com', '82', NULL, '$2y$10$GHWaJdUnwCJlcyxLaNuad.CwlDyM/JvpG25BZeyLsuhSt.h.VXYLq', 'student-pro-girl.png', 'rELylkvLyBhvACl68sM5vya7ORknPqQ5LZ1yPXXx', '2022-01-13 18:57:30', '2022-01-13 18:57:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
