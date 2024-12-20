-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 01:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housing_livewire`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `slug`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Children\'s Play Area2', 'childrens-play-area2', 'e9ac', 1, '2024-12-15 02:25:05', '2024-12-18 01:33:53'),
(2, 'Service Lift', 'service-lift', 'e977', 1, '2024-12-15 02:27:31', '2024-12-18 01:34:02'),
(3, 'Boom Barriers', 'boom-barriers', 'e9ac', 1, '2024-12-15 02:27:44', '2024-12-18 01:34:43'),
(4, 'Gazebo', NULL, '\\e9ac', 1, '2024-12-15 02:27:51', '2024-12-15 02:27:51'),
(5, 'Lift(s)', NULL, '\\e9ac', 1, '2024-12-15 02:27:58', '2024-12-15 02:27:58'),
(6, 'Terrace Garden', NULL, '\\e9ac', 1, '2024-12-15 02:28:05', '2024-12-15 02:28:05'),
(7, 'Entrance Gate Security Cabin', NULL, '\\e9ac', 1, '2024-12-15 02:28:13', '2024-12-15 02:28:13'),
(8, '24x7 CCTV Surveillance', NULL, '\\e9ac', 1, '2024-12-15 02:28:18', '2024-12-15 02:28:18'),
(9, 'Gymnasium', NULL, '\\e9ac', 1, '2024-12-15 02:28:25', '2024-12-15 02:28:25'),
(10, 'Fire Fighting System', NULL, '\\e9ac', 1, '2024-12-15 02:28:32', '2024-12-15 02:28:32'),
(11, 'Car Parking', NULL, '\\e9ac', 1, '2024-12-15 02:28:38', '2024-12-15 02:28:38'),
(12, 'Swimming Pool', NULL, '\\e9ac', 1, '2024-12-17 00:12:27', '2024-12-17 00:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `slug`, `city_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chandkheda', 'chandkheda', 1, 1, '2024-12-11 07:51:26', '2024-12-11 07:51:26'),
(2, 'Electronic City', 'electronic-city', 2, 1, '2024-12-11 07:52:29', '2024-12-11 07:52:29'),
(3, 'Malad', 'malad', 3, 1, '2024-12-11 07:52:42', '2024-12-11 07:52:42'),
(4, 'Gota', 'gota', 1, 1, '2024-12-12 00:00:16', '2024-12-12 00:00:16'),
(5, 'Borivali', 'borivali', 3, 1, '2024-12-12 00:00:27', '2024-12-12 00:00:27'),
(6, 'Varaha', 'varaha', 1, 1, '2024-12-18 00:57:11', '2024-12-18 00:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `bhk_types`
--

CREATE TABLE `bhk_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', 'ahmedabad', 1, '2024-12-11 07:45:27', '2024-12-11 07:45:27'),
(2, 'Banglore', 'banglore', 1, '2024-12-11 07:46:15', '2024-12-11 07:46:15'),
(3, 'Mumbai', 'mumbai', 1, '2024-12-11 07:47:27', '2024-12-11 07:47:27'),
(4, 'Hyderabad', 'hyderabad', 1, '2024-12-11 23:58:27', '2024-12-11 23:58:27'),
(5, 'Pune', 'pune', 1, '2024-12-11 23:58:45', '2024-12-11 23:58:45'),
(6, 'Chennai', 'chennai', 1, '2024-12-11 23:58:57', '2024-12-11 23:58:57'),
(7, 'Delhi', 'delhi', 1, '2024-12-11 23:59:11', '2024-12-11 23:59:11'),
(8, 'Noida', 'noida', 1, '2024-12-11 23:59:23', '2024-12-11 23:59:23'),
(9, 'Kolkatta', 'kolkatta', 1, '2024-12-11 23:59:34', '2024-12-11 23:59:34'),
(10, 'Thane', 'thane', 1, '2024-12-11 23:59:41', '2024-12-11 23:59:41'),
(11, 'Navi Mumbai', 'navi-mumbai', 1, '2024-12-11 23:59:50', '2024-12-11 23:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `logo`, `address`, `phone`, `contact_person`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Keerthi Estate', '01JEV0NHF80JJ03VHY9ZER2HVK.JPG', 'E-508, Keerthi Royal Palms,', '09978835005', 'Dhruv Bhavsar', 1, '2024-12-11 08:36:19', '2024-12-11 08:36:19'),
(2, 'Dobariya Developers', '01JEWNM2J9EH84NAE815STZWK0.JPG', 'G', '9978812345', 'Anil Dobariya', 1, '2024-12-12 00:01:46', '2024-12-12 00:01:46');

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
-- Table structure for table `filament_password_resets`
--

CREATE TABLE `filament_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_11_110004_create_cities_table', 2),
(6, '2024_12_11_110024_create_areas_table', 2),
(7, '2024_12_11_110231_create_property_types_table', 3),
(8, '2024_12_11_110246_create_bhk_types_table', 3),
(9, '2024_12_11_110314_create_sale_types_table', 3),
(10, '2024_12_11_110341_create_possession_types_table', 3),
(11, '2024_12_11_110401_create_amenities_table', 3),
(12, '2024_12_11_130238_create_developers_table', 4),
(13, '2024_12_11_130414_create_agents_table', 5),
(14, '2024_12_11_130443_create_properties_table', 6),
(15, '2024_12_11_133257_create_properties_table', 7),
(16, '2024_12_11_140530_create_developers_table', 8),
(17, '2024_12_11_140820_create_properties_table', 9),
(18, '2024_12_20_112936_create_permissions_table', 10),
(19, '2024_12_20_113438_create_permission_tables', 11),
(20, '2024_12_20_113852_create_roles_table', 12),
(21, '2024_12_20_114719_create_filament_users_table', 12),
(22, '2024_12_20_114720_create_filament_password_resets_table', 12),
(23, '2024_12_20_115133_create_filament_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view-any Agent', 'web', '2024-12-20 06:10:16', '2024-12-20 06:10:16'),
(2, 'view-any Agent', 'api', '2024-12-20 06:10:16', '2024-12-20 06:10:16'),
(3, 'view Agent', 'web', '2024-12-20 06:10:16', '2024-12-20 06:10:16'),
(4, 'view Agent', 'api', '2024-12-20 06:10:16', '2024-12-20 06:10:16'),
(5, 'create Agent', 'web', '2024-12-20 06:10:16', '2024-12-20 06:10:16'),
(6, 'create Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(7, 'update Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(8, 'update Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(9, 'delete Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(10, 'delete Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(11, 'delete-any Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(12, 'delete-any Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(13, 'replicate Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(14, 'replicate Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(15, 'restore Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(16, 'restore Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(17, 'restore-any Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(18, 'restore-any Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(19, 'reorder Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(20, 'reorder Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(21, 'force-delete Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(22, 'force-delete Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(23, 'force-delete-any Agent', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(24, 'force-delete-any Agent', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(25, 'view-any Amenity', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(26, 'view-any Amenity', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(27, 'view Amenity', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(28, 'view Amenity', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(29, 'create Amenity', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(30, 'create Amenity', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(31, 'update Amenity', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(32, 'update Amenity', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(33, 'delete Amenity', 'web', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(34, 'delete Amenity', 'api', '2024-12-20 06:10:17', '2024-12-20 06:10:17'),
(35, 'delete-any Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(36, 'delete-any Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(37, 'replicate Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(38, 'replicate Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(39, 'restore Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(40, 'restore Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(41, 'restore-any Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(42, 'restore-any Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(43, 'reorder Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(44, 'reorder Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(45, 'force-delete Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(46, 'force-delete Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(47, 'force-delete-any Amenity', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(48, 'force-delete-any Amenity', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(49, 'view-any Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(50, 'view-any Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(51, 'view Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(52, 'view Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(53, 'create Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(54, 'create Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(55, 'update Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(56, 'update Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(57, 'delete Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(58, 'delete Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(59, 'delete-any Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(60, 'delete-any Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(61, 'replicate Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(62, 'replicate Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(63, 'restore Area', 'web', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(64, 'restore Area', 'api', '2024-12-20 06:10:18', '2024-12-20 06:10:18'),
(65, 'restore-any Area', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(66, 'restore-any Area', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(67, 'reorder Area', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(68, 'reorder Area', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(69, 'force-delete Area', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(70, 'force-delete Area', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(71, 'force-delete-any Area', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(72, 'force-delete-any Area', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(73, 'view-any City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(74, 'view-any City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(75, 'view City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(76, 'view City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(77, 'create City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(78, 'create City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(79, 'update City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(80, 'update City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(81, 'delete City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(82, 'delete City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(83, 'delete-any City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(84, 'delete-any City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(85, 'replicate City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(86, 'replicate City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(87, 'restore City', 'web', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(88, 'restore City', 'api', '2024-12-20 06:10:19', '2024-12-20 06:10:19'),
(89, 'restore-any City', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(90, 'restore-any City', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(91, 'reorder City', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(92, 'reorder City', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(93, 'force-delete City', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(94, 'force-delete City', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(95, 'force-delete-any City', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(96, 'force-delete-any City', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(97, 'view-any Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(98, 'view-any Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(99, 'view Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(100, 'view Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(101, 'create Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(102, 'create Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(103, 'update Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(104, 'update Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(105, 'delete Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(106, 'delete Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(107, 'delete-any Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(108, 'delete-any Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(109, 'replicate Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(110, 'replicate Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(111, 'restore Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(112, 'restore Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(113, 'restore-any Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(114, 'restore-any Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(115, 'reorder Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(116, 'reorder Developer', 'api', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(117, 'force-delete Developer', 'web', '2024-12-20 06:10:20', '2024-12-20 06:10:20'),
(118, 'force-delete Developer', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(119, 'force-delete-any Developer', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(120, 'force-delete-any Developer', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(121, 'view-any Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(122, 'view-any Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(123, 'view Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(124, 'view Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(125, 'create Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(126, 'create Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(127, 'update Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(128, 'update Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(129, 'delete Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(130, 'delete Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(131, 'delete-any Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(132, 'delete-any Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(133, 'replicate Property', 'web', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(134, 'replicate Property', 'api', '2024-12-20 06:10:21', '2024-12-20 06:10:21'),
(135, 'restore Property', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(136, 'restore Property', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(137, 'restore-any Property', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(138, 'restore-any Property', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(139, 'reorder Property', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(140, 'reorder Property', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(141, 'force-delete Property', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(142, 'force-delete Property', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(143, 'force-delete-any Property', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(144, 'force-delete-any Property', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(145, 'view-any User', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(146, 'view-any User', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(147, 'view User', 'web', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(148, 'view User', 'api', '2024-12-20 06:10:22', '2024-12-20 06:10:22'),
(149, 'create User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(150, 'create User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(151, 'update User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(152, 'update User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(153, 'delete User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(154, 'delete User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(155, 'delete-any User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(156, 'delete-any User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(157, 'replicate User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(158, 'replicate User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(159, 'restore User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(160, 'restore User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(161, 'restore-any User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(162, 'restore-any User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(163, 'reorder User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(164, 'reorder User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(165, 'force-delete User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(166, 'force-delete User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(167, 'force-delete-any User', 'web', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(168, 'force-delete-any User', 'api', '2024-12-20 06:10:23', '2024-12-20 06:10:23'),
(169, 'User', 'web', '2024-12-20 06:13:28', '2024-12-20 06:13:28'),
(170, 'admin-users.update', 'filament', '2024-12-20 06:18:04', '2024-12-20 06:18:04'),
(171, 'permissions.update', 'filament', '2024-12-20 06:18:04', '2024-12-20 06:18:04');

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
-- Table structure for table `possession_types`
--

CREATE TABLE `possession_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_sell` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `developer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`property_images`)),
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `launch_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `average_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `possession_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `possession_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_seller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bhk_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearby_places` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`nearby_places`)),
  `amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`amenities`)),
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `slug`, `buy_sell`, `city_id`, `area_id`, `developer_id`, `agent_id`, `price`, `cover_photo`, `property_images`, `address`, `launch_date`, `average_price`, `possession_date`, `possession_status`, `contact_seller`, `google_location`, `size`, `bhk_type`, `project_area`, `project_size`, `rera`, `content`, `nearby_places`, `amenities`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Keerthi Royal Palms', 'keerthi-royal-palms', 'Buy', 2, 2, 1, NULL, '9000000', 'propertyPhotos/01JF7SEK068FBVT4RR7XG5FTNY.jpg', '[\"propertyPhotos\\/01JF7SEK09235XF5MA9GKD0512.jpg\",\"propertyPhotos\\/01JF7SEK0B1PHJHWF4HJYCQJWF.jpg\",\"propertyPhotos\\/01JF7SEK0DH90D02A9PG631Q75.jpg\",\"propertyPhotos\\/01JF7SJMATGCXJANAEH8M4QQKX.jpg\",\"propertyPhotos\\/01JF7SJMAX1074MCHBZMDWH3RB.jpg\",\"propertyPhotos\\/01JF7SJMAZVBZMDH24PWWM1X1Q.jpg\"]', 'Keerthi Royal Palms, Keerthi Royal Palms, Keerthi Royal Palms, Keerthi Royal Palms,', '11/12/2024', '8000000', '31/12/2024', 'ready_to_move', 'Keerthi Estate', 'hhh', '1170', '5 BHK', '190', '200', '212121', '<p>sdfsfsdfs</p>', NULL, '[\"Mukesh\",\"4\",\"7\"]', 1, '2024-12-11 08:40:29', '2024-12-16 23:17:01'),
(2, 'Shlok Heights', 'shlok-heights', 'Sell', 1, 1, 2, NULL, '9000000', 'propertyPhotos/01JFC72XQ2QQ4BJGP9RKA5RWGG.jpg', '[\"propertyPhotos\\/01JFC72XR52BPXMFT5PMKKHT0J.jpg\"]', 'Shlok Heights, Mansarova Road,', NULL, '8000000', '01/12/2025', 'under_construction', 'Anil Vaghela', 'Google Location', '1170', '2 BHK', '190', '200', '212121', '<p>Hello this is just dummy text</p>', NULL, '[\"2\",\"3\",\"4\",\"6\",\"9\",\"5\",\"11\",\"12\",\"7\"]', 1, '2024-12-12 00:12:15', '2024-12-18 00:58:35'),
(3, 'Nilyam Parmeshwar', 'nilyam-parmeshwar', 'Sell', 1, 4, 2, NULL, '9000000', '01JF7QMSCRKBBFYP2TSPNFGZQ9.JPG', '[\"propertyPhotos\\/iZxVXMLosPoyRyxdUQepvI95eF073G-metaRmluZVBpeCBTMTUwMDQzMjcuanBn-.jpg\"]', 'Keerthi Royal Palms, Keerthi Royal Palms, Keerthi Royal Palms, Keerthi Royal Palms,', '12/12/2024', '8000000', '12/12/2024', 'ready_to_move', 'Keerthi Estate', 'hddhd', '1170', '4 BHK', '190', '200', '212121', '<p>dfsfsdfdsfds</p>', NULL, '[\"2\",\"4\",\"6\"]', 1, '2024-12-12 04:54:37', '2024-12-17 00:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(170, 1),
(171, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sale_types`
--

CREATE TABLE `sale_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
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
  `user_type` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mukesh', 1, 'mukeshbhavsar210@gmail.com', NULL, '$2y$12$FIMpjjWzZY/cc4TelDxOS.Aj6h4R5KwO9p9F/hqia0kDPSQOfTMjq', NULL, '2024-12-11 05:27:24', '2024-12-11 05:27:24'),
(2, 'Priyanka', 0, 'priyanka@gmail.com', '2024-12-17 06:01:29', '$2y$12$FIMpjjWzZY/cc4TelDxOS.Aj6h4R5KwO9p9F/hqia0kDPSQOfTMjq', NULL, '2024-12-17 06:01:29', '2024-12-17 06:01:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_city_id_foreign` (`city_id`);

--
-- Indexes for table `bhk_types`
--
ALTER TABLE `bhk_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filament_password_resets`
--
ALTER TABLE `filament_password_resets`
  ADD KEY `filament_password_resets_email_index` (`email`);

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
-- Indexes for table `possession_types`
--
ALTER TABLE `possession_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_city_id_foreign` (`city_id`),
  ADD KEY `properties_area_id_foreign` (`area_id`),
  ADD KEY `properties_developer_id_foreign` (`developer_id`),
  ADD KEY `properties_agent_id_foreign` (`agent_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sale_types`
--
ALTER TABLE `sale_types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bhk_types`
--
ALTER TABLE `bhk_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `possession_types`
--
ALTER TABLE `possession_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_types`
--
ALTER TABLE `sale_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_developer_id_foreign` FOREIGN KEY (`developer_id`) REFERENCES `developers` (`id`) ON DELETE CASCADE;

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
