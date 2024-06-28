-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 02:07 PM
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
-- Database: `carchoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_variants`
--

CREATE TABLE `add_variants` (
  `id` int(11) NOT NULL,
  `carname` varchar(255) DEFAULT NULL,
  `carmodalname` varchar(255) DEFAULT NULL,
  `availabelstatus` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `pricetype` varchar(255) DEFAULT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `engine` varchar(255) DEFAULT NULL,
  `fueltype` varchar(255) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `seatingcapacity` varchar(255) DEFAULT NULL,
  `userreportedmilage` varchar(255) DEFAULT NULL,
  `keyfeatures` text DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_variants`
--

INSERT INTO `add_variants` (`id`, `carname`, `carmodalname`, `availabelstatus`, `price`, `pricetype`, `mileage`, `engine`, `fueltype`, `transmission`, `seatingcapacity`, `userreportedmilage`, `keyfeatures`, `summary`, `created_at`, `updated_at`) VALUES
(2, 'Omni', 'MM10444', NULL, '90,000 INR/-', 'Lakh', '89', '300', '[\"Petrol\",\"Diesel\",\"Electric\"]', '[\"Automatic\",\"Manual\"]', '5', '66', '<p>this is nexon</p>', '<p>it ok and good</p>', '2024-06-28 03:33:15', '2024-06-28 04:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `categorytype` varchar(255) DEFAULT NULL,
  `blogtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `blogpost` text DEFAULT NULL,
  `vurl` varchar(255) DEFAULT NULL,
  `blogimg` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categorytype`, `blogtitle`, `description`, `blogpost`, `vurl`, `blogimg`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Car News', 'CAR OF THE YEAR', 'fdsgdf', '<p>gffdsgfd</p>', 'https://www.youtube.com/watch?v=spGSAeqxVUc', '1719047765_logo.png', '1', '2024-06-22 03:17:33', '2024-06-28 05:05:50'),
(4, 'Videos', 'THIS IS HOSPITAL BLOG', 'THIS IS HOSPITAL BLOG', '<p>THIS IS HOSPITAL BLOG</p>', 'https://www.youtube.com/watch?v=__2bjWbetsA', '1719048634_logo.png', '0', '2024-06-22 03:47:08', '2024-06-24 05:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('d3160cf376dcbf1f85bde27048f7d2e8', 'i:1;', 1719549693),
('d3160cf376dcbf1f85bde27048f7d2e8:timer', 'i:1719549693;', 1719549693);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_lists`
--

CREATE TABLE `car_lists` (
  `id` int(11) NOT NULL,
  `carname` varchar(255) DEFAULT NULL,
  `brandname` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_lists`
--

INSERT INTO `car_lists` (`id`, `carname`, `brandname`, `created_at`, `updated_at`) VALUES
(2, 'Omni', 'Maruti Suzuki', '2024-06-28 00:19:58', '2024-06-28 00:38:55'),
(3, 'Nexon', 'Tata', '2024-06-28 01:00:26', '2024-06-28 01:00:26'),
(4, 'Thar', 'Mahindra', '2024-06-28 05:35:54', '2024-06-28 05:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companylogo` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `citystateprovince` varchar(255) DEFAULT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `fburl` varchar(255) DEFAULT NULL,
  `igurl` varchar(255) DEFAULT NULL,
  `yturl` varchar(255) DEFAULT NULL,
  `twurl` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `companyname`, `companylogo`, `email`, `phonenumber`, `citystateprovince`, `postalcode`, `fburl`, `igurl`, `yturl`, `twurl`, `linkurl`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mukesh Private Limited', 'logos/bQaWP5yrNM7Yunjvb4ODKjO9O65pKjdIZtBCRpjS.jpg', 'abc@gmail.com', '1234567899', 'Ajmer,Raj', '305001', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'dasdsadas', '2024-06-21 12:34:26', '2024-06-28 04:36:25');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `faqlabel` varchar(255) DEFAULT NULL,
  `faqvalue` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `category`, `faqlabel`, `faqvalue`, `created_at`, `updated_at`) VALUES
(5, 'Car Loan', 'this is car loan update', 'this is car loan update', '2024-06-26 01:14:07', '2024-06-26 01:40:39'),
(7, 'New Car', 'new faq uo', 'new faq uo', '2024-06-26 01:41:22', '2024-06-26 01:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `form_attributes`
--

CREATE TABLE `form_attributes` (
  `id` int(11) NOT NULL,
  `cartype` varchar(255) DEFAULT NULL,
  `formlabels` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `inputtype` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_attributes`
--

INSERT INTO `form_attributes` (`id`, `cartype`, `formlabels`, `value`, `inputtype`, `created_at`, `updated_at`) VALUES
(5, 'Old Car', 'Engine & Transmission', 'Max Speed', 'text', '2024-06-24 01:01:41', '2024-06-24 04:59:42'),
(8, 'Old Car', 'Engine & Transmission', 'Max Power (bhp@rpm)', 'text', '2024-06-24 05:00:35', '2024-06-24 05:00:35'),
(9, 'Old Car', 'Capacity', 'Doors', 'text', '2024-06-24 05:04:35', '2024-06-24 05:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `vehicle` varchar(255) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `leadstatus` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `fullname`, `mobile`, `email`, `city`, `state`, `vehicle`, `remarks`, `leadstatus`, `created_at`, `updated_at`) VALUES
(8, 'Avengers', '1234567897', 'nb@gmail.com', 'Ajmer', 'Rajasthan', 'c', 'This is Remarks and it is good', 'intrested', '2024-06-25 01:37:54', '2024-06-28 04:34:40'),
(9, 'ABC', '2222222222', 'admin@ananttvs.in', 'Ajmer', 'Rajasthan', 'a', 'dfsdfsdsdf', 'final', '2024-06-25 05:12:56', '2024-06-25 05:40:10'),
(10, 'ABC', '2222222222', 'admin@ananttvs.in', 'Ajmer', 'Rajasthan', 'a', 'dfsdfsdsdf', 'intrested', '2024-06-19 05:12:56', '2024-06-26 00:26:14'),
(11, 'ABCDD', '2', 'admin@anantt', 'Ajmer', 'Rajasthan', 'a', 'dfsdfhjmhjkhsdf', 'final', '2024-06-19 05:12:56', '2024-06-27 23:13:42'),
(12, 'ABCDD', '2', 'admin@anantt', 'Ajmer', 'Rajasthan', 'a', 'dfsdfhjmhjkhsdf', 'intrested', '2024-06-28 05:12:56', '2024-06-27 02:30:06'),
(13, 'ABCDDFFF', '34243232432', 'admin@anngmail.com\r\n', 'Ajmer', 'Rajasthan', 'a', 'dfsdfhjmhjkhsdf', 'final', '2024-06-28 05:12:56', '2024-06-28 05:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `iconimage` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `label`, `value`, `type`, `iconimage`, `created_at`, `updated_at`) VALUES
(24, 'E-Commerce', 'E-Commerce', 'Mopeds', '1718969247_logo.png', '2024-06-21 05:57:27', '2024-06-21 11:29:39'),
(25, 'demo', 'demo', 'Mopeds', '1718969332_wp6537938-lord-shiva-desktop-4k-wallpapers.jpg', '2024-06-21 05:58:52', '2024-06-21 05:58:52'),
(26, 'TATA', 'TATA', 'Trucks', '1718969720_logo.png', '2024-06-21 06:05:20', '2024-06-21 06:05:20'),
(27, 'Blog', 'Blog', 'Master', NULL, '2024-06-22 00:15:46', '2024-06-22 00:15:46'),
(29, 'Car News', 'Car News', 'Blog', NULL, '2024-06-22 00:17:00', '2024-06-22 00:17:00'),
(30, 'Videos', 'Videos', 'Blog', NULL, '2024-06-22 00:17:09', '2024-06-22 00:17:09'),
(34, 'Old Car', 'Old Car', 'Master', NULL, '2024-06-23 23:45:28', '2024-06-23 23:45:28'),
(35, 'New Car', 'New Car', 'Master', NULL, '2024-06-23 23:45:36', '2024-06-23 23:45:36'),
(36, 'Engine & Transmission', 'Engine & Transmission', 'Old Car', NULL, '2024-06-23 23:47:19', '2024-06-23 23:47:19'),
(37, 'Dimensions & Weight', 'Dimensions & Weight', 'Old Car', NULL, '2024-06-23 23:50:00', '2024-06-23 23:50:00'),
(38, 'Capacity', 'Capacity', 'Old Car', NULL, '2024-06-23 23:50:10', '2024-06-23 23:50:10'),
(39, 'Suspensions, Brakes, Steering & Tyres', 'Suspensions, Brakes, Steering & Tyres', 'Old Car', NULL, '2024-06-23 23:50:21', '2024-06-23 23:50:21'),
(40, 'FAQ', 'FAQ', 'Master', NULL, '2024-06-26 00:42:32', '2024-06-26 00:42:32'),
(41, 'Car Loan', 'Car Loan', 'FAQ', NULL, '2024-06-26 00:51:04', '2024-06-26 00:51:04'),
(42, 'New Car', 'New Car', 'FAQ', NULL, '2024-06-26 00:51:14', '2024-06-26 00:51:14'),
(43, 'Old Car', 'Old Car', 'FAQ', NULL, '2024-06-26 00:51:25', '2024-06-26 00:51:25'),
(44, 'Vehicle Image', 'Vehicle Image', 'Master', NULL, '2024-06-26 04:04:05', '2024-06-26 04:04:05'),
(45, 'Outer view', 'Outer view', 'Vehicle Image', NULL, '2024-06-26 04:04:26', '2024-06-26 04:04:26'),
(46, 'Seat & seat adjustments', 'Seat & seat adjustments', 'Vehicle Image', NULL, '2024-06-26 04:04:37', '2024-06-26 04:04:37'),
(47, 'Dashboard', 'Dashboard', 'Vehicle Image', NULL, '2024-06-26 04:04:47', '2024-06-26 04:04:47'),
(48, 'Outer lights', 'Outer lights', 'Vehicle Image', NULL, '2024-06-26 04:04:57', '2024-06-26 04:04:57'),
(49, 'Gears, Pedals and Stalks', 'Gears, Pedals and Stalks', 'Vehicle Image', NULL, '2024-06-26 04:05:06', '2024-06-26 04:05:06'),
(50, 'Storage and Cup holders', 'Storage and Cup holders', 'Vehicle Image', NULL, '2024-06-26 04:05:23', '2024-06-26 04:05:23'),
(51, 'Outer Parts', 'Outer Parts', 'Vehicle Image', NULL, '2024-06-26 04:05:34', '2024-06-26 04:05:34'),
(52, 'Entertainment systems', 'Entertainment systems', 'Vehicle Image', NULL, '2024-06-26 04:05:45', '2024-06-26 04:05:45'),
(53, 'AC', 'AC', 'Vehicle Image', NULL, '2024-06-26 04:05:59', '2024-06-26 04:05:59'),
(54, 'Doors and Mirrors', 'Doors and Mirrors', 'Vehicle Image', NULL, '2024-06-26 04:06:27', '2024-06-26 04:06:27'),
(55, 'Interior lights', 'Interior lights', 'Vehicle Image', NULL, '2024-06-26 04:07:09', '2024-06-26 04:07:09'),
(56, 'Charging points', 'Charging points', 'Vehicle Image', NULL, '2024-06-26 04:07:20', '2024-06-26 04:07:20'),
(57, 'Roof', 'Roof', 'Vehicle Image', NULL, '2024-06-26 04:07:28', '2024-06-26 04:07:28'),
(58, 'Doors & Controls', 'Doors & Controls', 'Vehicle Image', NULL, '2024-06-26 04:07:48', '2024-06-26 04:07:48'),
(59, 'Hooks and Handles', 'Hooks and Handles', 'Vehicle Image', NULL, '2024-06-26 04:07:58', '2024-06-26 04:07:58'),
(60, 'AirBags', 'AirBags', 'Vehicle Image', NULL, '2024-06-26 04:08:07', '2024-06-26 04:08:07'),
(61, 'Logo', 'Logo', 'Vehicle Image', NULL, '2024-06-26 04:08:18', '2024-06-26 04:08:18'),
(62, 'Other', 'Other', 'Vehicle Image', NULL, '2024-06-26 04:08:29', '2024-06-26 04:08:29'),
(63, 'Color', 'Color', 'Master', NULL, '2024-06-27 00:47:13', '2024-06-27 00:47:13'),
(66, 'White', '#FFFFFF', 'Color', NULL, '2024-06-27 01:07:23', '2024-06-27 01:07:23'),
(67, 'Silver', '#C0C0C0', 'Color', NULL, '2024-06-27 01:07:52', '2024-06-27 01:07:52'),
(68, 'Grey', '#808080', 'Color', NULL, '2024-06-27 01:08:16', '2024-06-27 01:08:16'),
(69, 'Red', '#FF0000', 'Color', NULL, '2024-06-27 01:08:45', '2024-06-27 01:08:45'),
(70, 'Blue', '#0000FF', 'Color', NULL, '2024-06-27 01:11:23', '2024-06-27 01:11:23'),
(71, 'Green', '#008000', 'Color', NULL, '2024-06-27 01:12:18', '2024-06-27 01:12:18'),
(72, 'Black', '#000000', 'Color', NULL, '2024-06-27 01:12:48', '2024-06-27 01:12:48'),
(73, 'Yellow', '#FFFF00', 'Color', NULL, '2024-06-27 01:13:34', '2024-06-27 01:13:34'),
(74, 'Brown', '#A52A2A', 'Color', NULL, '2024-06-27 01:14:20', '2024-06-27 01:14:20'),
(75, 'Orange', '#FFA500', 'Color', NULL, '2024-06-27 01:14:50', '2024-06-27 01:14:50'),
(76, 'Beige', '#F5F5DC', 'Color', NULL, '2024-06-27 01:15:13', '2024-06-27 01:15:13'),
(77, 'Gold', '#FFD700', 'Color', NULL, '2024-06-27 01:15:35', '2024-06-27 01:15:35'),
(78, 'Bronze', '#CD7F32', 'Color', NULL, '2024-06-27 01:16:02', '2024-06-27 01:16:02'),
(79, 'Copper', '#B87333', 'Color', NULL, '2024-06-27 01:16:33', '2024-06-27 01:16:33'),
(80, 'Brand', 'Brand', 'Master', NULL, '2024-06-27 23:59:39', '2024-06-27 23:59:39'),
(81, 'Maruti Suzuki', 'Maruti Suzuki', 'Brand', '1719552616_maruti-suzuki1647009823420.jpg', '2024-06-28 00:00:16', '2024-06-28 00:00:16'),
(82, 'Tata', 'Tata', 'Brand', '1719552760_tata.jpg', '2024-06-28 00:02:40', '2024-06-28 00:02:40'),
(83, 'Toyota', 'Toyota', 'Brand', '1719552790_toyota.jpg', '2024-06-28 00:03:10', '2024-06-28 00:03:10'),
(84, 'Hyundai', 'Hyundai', 'Brand', '1719552820_hyundai.jpg', '2024-06-28 00:03:40', '2024-06-28 00:03:40'),
(85, 'Mahindra', 'Mahindra', 'Brand', '1719552844_mahindra.jpg', '2024-06-28 00:04:04', '2024-06-28 00:04:04');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_08_103015_add_two_factor_columns_to_users_table', 1),
(5, '2024_06_08_103043_create_personal_access_tokens_table', 1);

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
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(11) NOT NULL,
  `leadid` varchar(255) DEFAULT NULL,
  `remarktext` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `leadid`, `remarktext`, `created_at`, `updated_at`) VALUES
(28, '8', 'this is new remark', '2024-06-25 05:06:18', '2024-06-25 05:06:18'),
(29, '8', 'this is new remark with prvent default', '2024-06-25 05:06:21', '2024-06-25 05:06:21'),
(30, '8', 'hhgfhgfh', '2024-06-25 05:06:39', '2024-06-25 05:06:39'),
(31, '8', 'this is', '2024-06-25 05:09:25', '2024-06-25 05:09:25'),
(32, '12', 'sddsf', '2024-06-26 00:33:42', '2024-06-26 00:33:42');

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
('H5xjcxd5kkLtWaLTHZ3MM8akjU9lW6eB06UHtXc8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSTFKakpBdTI4OEl1RWwzNGxxck55a0NjMXVBNzZUVEtwVXdad2libCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92ZWhpY2xlaW1hZ2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRieVZhN1Z2cnNIT1RjcXBhRWNqTW5PV1dPMlp2VHZ6T1ZCQlNLTkFCcVMwZHdVUFVxZ1dhNiI7fQ==', 1719576459);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Mukesh', 'support@carchoice.com', NULL, '$2y$12$byVa7VvrsHOTcqpaEcjMnOWWO2ZvTvzOVBBSKNABqS0dwUPUqgWa6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-08 05:04:23', '2024-06-20 23:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE `vehicle_images` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `vehicle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mediatype` varchar(255) DEFAULT NULL,
  `addimage` varchar(255) DEFAULT NULL,
  `videourl` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_images`
--

INSERT INTO `vehicle_images` (`id`, `type`, `color`, `vehicle`, `title`, `mediatype`, `addimage`, `videourl`, `created_at`, `updated_at`) VALUES
(8, 'Seat & seat adjustments', 'White', 'Omni', 'Front Row Seats', 'image', '1719575342__a95329a8-fe8d-4c26-8d12-b1fb9f11d3cb.jpeg', 'https://dummy.com', '2024-06-28 06:19:02', '2024-06-28 06:19:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_variants`
--
ALTER TABLE `add_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `car_lists`
--
ALTER TABLE `car_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_attributes`
--
ALTER TABLE `form_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_variants`
--
ALTER TABLE `add_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `car_lists`
--
ALTER TABLE `car_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `form_attributes`
--
ALTER TABLE `form_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
