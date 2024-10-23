-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `is_new` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `date`, `phone`, `doctor`, `message`, `status`, `user_id`, `is_new`, `created_at`, `updated_at`) VALUES
(1, 'test', 'ad', '2023-11-02', '78956895', 'test', 'demo', 'approved', NULL, 0, '2023-11-02 12:54:07', '2024-10-20 08:43:02'),
(3, 'Akthar', 'aabith619@gmail.com', '2023-11-10', '789568954', 'visa', 'we', 'approved', '1', 0, '2023-11-02 13:32:24', '2024-10-20 08:43:02'),
(4, 'test', 'ad', '2023-11-30', '78956895', 'makarim', 'ukj', 'canceled', NULL, 0, '2023-11-02 13:37:38', '2024-10-20 08:43:02'),
(5, 'test1', 'ad@gmail.com', '2023-11-10', '78956895', 'test1', 'sss', 'canceled', NULL, 0, '2023-11-02 13:40:35', '2024-10-20 08:43:02'),
(6, 'Akthar', 'aabith619@gmail.com', '2023-12-02', '0755809737', 're', 'testing for nosenoile', 'canceled', '1', 0, '2023-11-06 18:03:56', '2024-10-20 08:43:02'),
(7, 'Aki', 'dedseccodes@gmail.com', '2023-12-22', '0783473702', 'test', 'burned skin', 'In progress', '10', 0, '2023-11-09 14:24:19', '2024-10-20 08:43:02'),
(8, 'Akthar', 'aabith619@gmail.com', '2023-11-22', '0755809737', 'makarim', 'report', 'approved', '1', 0, '2023-11-12 16:11:48', '2024-10-20 08:43:02'),
(9, 'userr', 'dedseccodes@gmail.com', '2023-12-02', '0783473702', 'test', 'sdsds', 'In progress', NULL, 0, '2023-11-13 17:35:05', '2024-10-20 08:43:02'),
(10, 'test1', 'admin@gmail.com', '2023-11-10', '0755809737', 'test11', 'sdsdsds', 'In progress', NULL, 0, '2023-11-13 17:35:27', '2024-10-20 08:43:02'),
(11, 'Aki', 'ssachuu548@gamil.com', '2023-11-16', '0755809737', 'test11', 'adad', 'In progress', NULL, 0, '2023-11-13 17:36:04', '2024-10-20 08:43:02'),
(12, 'visa', 'ad@gmail.com', '2023-12-05', '0783473702', 'makarim', 'dfrsdsc', 'In progress', NULL, 0, '2023-11-13 17:37:48', '2024-10-20 08:43:02'),
(15, 'test', 'ad@gmail.com', '2023-11-15', '7895689525', 'kevin', 'sff', 'In progress', NULL, 0, '2023-11-14 17:26:48', '2024-10-20 08:43:02'),
(16, 'Akthar', 'aabith619@gmail.com', '2023-12-05', '0755809737', 'kevin', 'checkup', 'approved', '1', 0, '2023-11-14 17:29:57', '2024-10-20 08:43:02'),
(17, 'new test', 'aabith619@gmail.com', '2024-10-31', '755809737', 'edward', 'test mail from the developer', 'canceled', NULL, 0, '2024-10-20 08:42:42', '2024-10-20 08:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `news` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `user`, `date`, `title`, `news`, `created_at`, `updated_at`) VALUES
(1, '1699781477.jpg', 'Admin', '2023-11-12', 'Happy Diwali From Med-Care', 'Diwali, also known as the Festival of Lights, is a major Hindu festival celebrated in India and other countries. It symbolizes the triumph of light over darkness and good over evil. During Diwali, people illuminate their homes with lamps and candles, exchange gifts, and enjoy delicious feasts. It\'s a time for family gatherings and the worship of deities, making it a joyous and spiritually significant occasion.', '2023-11-12 17:31:17', '2023-11-12 17:31:17'),
(2, '1699784073.jpg', 'Admin', '2023-11-02', 'Help Animals | Donate for Animal Home.', 'Donating to animal organizations is a compassionate act that helps support the welfare and protection of animals in need. Your contribution can provide vital resources, such as food, shelter, and medical care, to ensure their well-being. By donating to these causes, you play a crucial role in creating a safer and more compassionate world for animals.\r\n                                Donating to animal organizations is a compassionate act that helps support the welfare and protection of animals in need. Your contribution can provide vital resources, such as food, shelter, and medical care, to ensure their well-being. By donating to these causes, you play a crucial role in creating a safer and more compassionate world for animals.', '2023-11-12 18:14:33', '2023-11-13 18:19:02'),
(3, '1699784436.jpg', 'Admin', '2023-10-25', 'Value of the Time', 'Time is invaluable; it cannot be bought or reversed. It is a finite resource that shapes our lives. Every moment wasted is an opportunity lost, while wisely managed time leads to productivity and success. Recognizing the value of time encourages efficient use and fulfillment of goals, making it a priceless asset.', '2023-11-12 18:20:37', '2023-11-12 18:20:37'),
(5, '1699785936.jpg', 'Admin', '2023-11-13', 'Social Awareness About Internet and Social-Media', 'Breaking the rules in life can lead to innovation, self-discovery, and personal growth. Embracing unconventional paths, challenging societal norms, and taking calculated risks can open doors to extraordinary experiences and opportunities. While it\'s important to respect some rules, daring to break others can be the key to a more fulfilling and exciting life.', '2023-11-12 18:45:36', '2023-11-12 18:45:36'),
(6, '1699855071.jpg', 'Admin', '2023-12-12', 'Break the Rules', 'Breaking the rules in life can lead to innovation, self-discovery, and personal growth. Embracing unconventional paths, challenging societal norms, and taking calculated risks can open doors to extraordinary experiences and opportunities. While it\'s important to respect some rules, daring to break others can be the key to a more fulfilling and exciting life.', '2023-11-13 13:57:51', '2023-11-13 13:57:51'),
(7, '1699954573.jpg', 'Admin', '2023-11-13', 'Remove Dark side From your Inside', 'Unlocking the best in yourself means facing the parts you don\'t like. To find your inner brightness, you have to accept your darker feelings and thoughts. It\'s about understanding where they come from and learning from them. Take time to think about yourself, stay aware of your thoughts, and ask for help if you need it. Be kind to yourself, forgive mistakes, and let go of negativity. Focus on being positive, and you\'ll start to feel brighter inside. When you shine from within, the dark thoughts and feelings fade away. Removing your inner darkness needs you to admit, accept, and work on bringing out your best self.', '2023-11-14 17:36:13', '2023-11-14 17:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `speciality`, `room`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 'makarim', '12343', 'skin', '101', 0, '1699952165.jpg', '2023-11-01 14:04:04', '2024-10-20 08:29:25'),
(2, 'test', '565656', 'skin', '12', 0, '1699354828.png', '2023-11-01 14:13:13', '2024-10-20 08:41:23'),
(5, 'kelvin', '78589621', 'skin', '12', 1, '1699354892.png', '2023-11-01 14:39:54', '2023-11-14 17:32:03'),
(6, 'edward', '779680370', 'nose', '12', 1, '1699954730.jpg', '2023-11-01 14:44:38', '2023-11-14 17:38:50'),
(11, 'kevin', '0779680370', 'heart', '10', 1, '1699953548.png', '2023-11-14 17:19:08', '2023-11-14 17:19:08');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_25_075603_create_sessions_table', 1),
(7, '2023_11_01_062125_create_doctors_table', 2),
(8, '2023_11_02_052557_create_appointments_table', 3),
(9, '2023_11_09_040519_create_specialities_table', 4),
(10, '2023_11_11_065350_create_notifications_table', 5),
(11, '2023_11_12_084454_create_blogs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KCwmqnAzlG6mSluUKhqubYmSCllaH0jhMxCYzMWQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTREQTkyc2lQZDFvUXkyZnpNNk5seXN1d0VlUk1hMzNsdGR2OFZGMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1729663721),
('ORnGeOa49AySpOAQ6F7fiUx9SOKjvpu1CK99f7wI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTRaNjRwM21xMDBNN2l2TGkwU2JEcHRoNDdKMjQyT3U1MWpzVThCNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fX0=', 1699954927),
('vyOl1WNNEQEtiZjsNIaASOrMS3WbmpvJiy0Yd0Bb', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWHIwRGh2TzFYYkxaYTJpek9XNFN0a2xmdkdwZDIxa0ladFVQbGQ4bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1729435064);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Akthar', 'aabith619@gmail.com', '0755809737', '286, hayer mosqoe road', '0', '2023-11-09 14:26:03', '$2y$10$WOOwM13ylbRQoRHK/sxvAe2uiuWFWfUyed/gZLNLIgPTjcuQyE32e', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-29 11:09:19', '2023-11-09 14:26:03'),
(2, 'admin', 'admin@gmail.com', '123456789', 'adress', '1', '2023-11-09 06:27:31', '$2y$10$YOaYSThrXDkWKfjYvN6Gcua3XexKbocbC5UbAp4D9WkX0/KkXhzUO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-29 11:13:47', '2023-10-29 11:13:47'),
(10, 'Aki', 'dedseccodes@gmail.com', '0755809737', '286, hayer mosqoe road', '0', '2023-11-09 14:21:22', '$2y$10$XH7m5ZEXJMvEVm3GcIHnVOU.IQPB5L0hYf13A3RxQhgrUzhgc7aRG', NULL, NULL, NULL, 'aAyieLLO9opbqbr7SHVJNDcUzhS4BAzxWT52bEAiQYiSWghfOzEAFVfBwXAA', NULL, NULL, '2023-11-09 14:11:44', '2023-11-09 14:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
