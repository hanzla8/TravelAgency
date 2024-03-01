-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2024 at 12:40 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Hanzla', 'hanzla123@gmail.com', '$2y$12$mZJO1zKSlZy8pcl5L8A05OpI2w6F2o3LOuwEQGGjSeHv8LzYjbxKm', '2024-02-19 01:19:58', '2024-02-19 01:19:58'),
(5, 'Admin', 'admin321@gmail.com', '$2y$12$q3qncrOq3QBJTmntcOLwNOSFlys2XPoQx3XCiPbdBjuKG6Z.KGjOe', '2024-02-25 01:43:13', '2024-02-25 01:43:13'),
(6, 'Yar Ghaddar', 'admin123@gmail.com', '$2y$12$8oD6VaNv5EfGFTcay02u3.Wv9T.Dfmb1YKEnXzLqQ.UAFXvQhcmWO', '2024-02-25 01:45:28', '2024-02-25 01:45:28'),
(9, 'John Doe', 'bewafa123@gmail.com', '$2y$12$s3Hdbrfqz5sLD1LXjivuKui2QX4hMGw0vu.7th2osDB6h3F1tHbzO', '2024-02-25 01:57:59', '2024-02-25 01:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(10) NOT NULL,
  `num_days` int NOT NULL,
  `country_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `image`, `price`, `num_days`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Berlin', 'cities01.jpg', '100', 5, 1, '2024-02-08 19:42:49', '2024-02-08 19:42:49'),
(2, 'Bangkok', 'cities02.jpg', '250', 4, 2, '2024-02-08 19:42:49', '2024-02-08 19:42:49'),
(3, 'Paris', 'france1.jpg', '500', 6, 3, '2024-02-08 19:42:49', '2024-02-08 19:42:49'),
(4, 'Tokyo', 'cities-04.jpg', '1000', 7, 4, '2024-02-08 19:42:49', '2024-02-08 19:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `population` varchar(30) NOT NULL,
  `territory` varchar(30) NOT NULL,
  `avg_price` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `continent` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `population`, `territory`, `avg_price`, `description`, `image`, `continent`, `created_at`, `updated_at`) VALUES
(1, 'Switzerland', '87.66', '39.290', '46.000', 'Artificial Intelligence (AI) is revolutionizing the world by automating tasks that were once thought to be impossible. ChatGPT, a generative AI model, is one such technology that has been making waves in the field of natural language processing.', 'country-02.jpg', 'Africa', '2024-02-07 23:26:56', '2024-02-07 23:26:56'),
(2, 'Thailand', '425.600', '41.290', '165.450', 'use it for Data science. Indeed, there are many of different tools that have to be learned to be able to properly use Python for Data science and machine learning and each of those tools is not always easy to learn. But, this course will give all the basics you need no mat', 'country-03.jpg', 'North', '2024-02-07 23:26:56', '2024-02-07 23:26:56'),
(3, 'France', '275.66', '41.290', '76.000', 'Artificial Intelligence (AI) is revolutionizing the world by automating tasks that were once thought to be impossible. ChatGPT, a generative AI model, is one such technology that has been making waves in the field of natural language processing.', 'cities-03.jpg', 'Egypt', '2024-02-07 23:26:56', '2024-02-07 23:26:56'),
(4, 'Japan', '975.66', '971.290', '66.000', 'automating tasks that were once thought to be impossible. ChatGPT, a generative AI model, is one such technology that has been making waves in the field of natural language processing.', 'country-01.jpg', 'Tokyo', '2024-02-07 23:26:56', '2024-02-07 23:26:56'),
(6, 'England', '91.86M', '789.478', '91.86M', 'In this place such a beautyfull place in england', 'about-content-bg.jpg', '123.78', '2024-02-25 21:21:26', '2024-02-25 21:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `num_guests` varchar(20) NOT NULL,
  `cheak_in_date` varchar(100) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `price` varchar(30) NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone_number` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `num_guests`, `cheak_in_date`, `destination`, `price`, `user_id`, `status`, `created_at`, `updated_at`, `phone_number`) VALUES
(1, 'Hanzla', '3', '2024-02-23', 'Switzerland', '1050', 2, 'Processing', '2024-02-10 21:41:21', '2024-02-10 21:41:21', '3042380425'),
(2, 'John Doe', '4+', '2024-03-01', 'Germany', '1640', 2, 'Processing', '2024-02-10 21:46:09', '2024-02-10 21:46:09', '03102550425'),
(3, 'John Doe', '3', '2024-03-01', 'Germany', '1230', 2, 'Processing', '2024-02-10 21:46:29', '2024-02-10 21:46:29', '03102550425'),
(5, 'Bewafa', '2', '2024-02-15', 'Berlin', '200', 2, 'Processing', '2024-02-13 23:15:55', '2024-03-01 00:26:14', '3042380425');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hufsa', 'hufsa123@gmail.com', NULL, '$2y$12$f8piREaA1EgWhgE.w3VHBO9aZ7XMdMwSvJf/UDSMWkbHpmp7vnWpa', NULL, '2024-02-07 10:47:13', '2024-02-07 10:47:13'),
(2, 'Hanzla', 'hanzla123@gmail.com', NULL, '$2y$12$mZJO1zKSlZy8pcl5L8A05OpI2w6F2o3LOuwEQGGjSeHv8LzYjbxKm', NULL, '2024-02-07 13:44:42', '2024-02-07 13:44:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
