-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 12:52 PM
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
-- Database: `voguevista`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `del_flg`, `created_at`, `updated_at`) VALUES
(3, 4, 3, 1, 1, '2024-08-07 00:29:46', '2024-08-07 00:31:21'),
(4, 4, 4, 1, 1, '2024-08-07 00:30:58', '2024-08-07 00:31:21'),
(5, 4, 5, 1, 1, '2024-08-07 00:31:01', '2024-08-07 00:31:21'),
(6, 4, 2, 1, 0, '2024-08-11 01:09:55', '2024-08-11 01:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fullName`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Choo Pwint Chal', 'choopwintchal@gmail.com', 'Hello!', '2024-08-07 00:33:18', '2024-08-07 00:33:18');

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `cat_name`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'Women', 0, '2024-07-16 06:31:58', NULL),
(2, 'Men', 0, '2024-07-16 06:31:58', NULL),
(3, 'Accessories', 0, '2024-07-16 06:32:34', NULL);

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
(4, '2024_06_21_073016_create_homes_table', 1),
(5, '2024_07_02_140705_create_abouts_table', 1),
(6, '2024_07_10_063924_create_contact_us_table', 1),
(7, '2024_07_16_053042_create_main_categories_table', 1),
(8, '2024_07_16_053249_create_sub_categories_table', 1),
(9, '2024_07_16_053550_create_products_table', 1),
(12, '2024_07_31_091803_create_payment_methods_table', 1),
(15, '2024_07_24_090429_create_carts_table', 2),
(16, '2024_07_30_075051_create_wishlists_table', 2),
(17, '2024_07_31_092013_create_orders_table', 2),
(18, '2024_07_31_092018_create_order_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `deliveryName` varchar(255) NOT NULL,
  `deliveryAddress` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `postalCode` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `totalPrice`, `payment_method_id`, `deliveryName`, `deliveryAddress`, `region`, `postalCode`, `phone`, `del_flg`, `created_at`, `updated_at`) VALUES
(2, 4, 52, 2, 'John Smith', 'BLK 6, Geylang East Avenue 2,', 'Singapore', 389756, 12345678, 0, '2024-08-07 00:30:42', '2024-08-07 00:30:42'),
(3, 4, 44, 1, 'John Smith', 'BLK 6, Geylang East Avenue 2,', 'Singapore', 389756, 12345678, 0, '2024-08-07 00:31:21', '2024-08-07 00:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `totalPrice`, `del_flg`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 1, 52, 0, '2024-08-07 00:30:42', '2024-08-07 00:30:42'),
(4, 3, 4, 1, 20, 0, '2024-08-07 00:31:21', '2024-08-07 00:31:21'),
(5, 3, 5, 1, 24, 0, '2024-08-07 00:31:21', '2024-08-07 00:31:21');

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment_method`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'cash', 0, NULL, NULL),
(2, 'card', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `p_photo` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `p_detail` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `pname`, `p_photo`, `stock`, `p_detail`, `price`, `size`, `del_flg`, `created_at`, `updated_at`) VALUES
(2, 1, 'Blue Blouse', '/images/women/top/w top 1.jpg', 20, 'Non rerum odio quos quidem aut dicta voluptate. Quaerat ipsum et ut. Vel qui totam et autem deserunt voluptatem voluptatum iure. Possimus explicabo itaque voluptatem dolorem non.', 70, 'XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(3, 1, 'Off Shoulder Top', '/images/women/top/w top 2.jpg', 13, 'Exercitationem cumque suscipit dolores. Magni aut aut delectus rerum eum. Voluptatum alias voluptate pariatur dolores rerum.', 52, 'M', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(4, 1, 'Striped Top', '/images/women/top/w top 3.jpeg', 1, 'Velit accusantium accusamus autem et accusantium blanditiis debitis minus. Id est eveniet aut est corrupti. Molestiae dolores commodi culpa odit reiciendis harum quam.', 20, 'XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(5, 1, 'Black Off Shoulder', '/images/women/top/w top 4.jpg', 6, 'Ipsum laboriosam id dolores non. Est veritatis rem dignissimos alias aspernatur. Aut incidunt omnis ut est eveniet.', 24, 'M', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(6, 1, 'Smart White Top', '/images/women/top/w top 5.jpg', 51, 'Tenetur quia non quos sed beatae doloribus. Aliquid dolores voluptatem et non in nisi expedita. Rerum fugiat voluptatem est quaerat aut minus officiis. Consequuntur recusandae et esse quam.', 26, 'L', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(7, 1, 'Black Top', '/images/women/top/w top 6.jpg', 80, 'Ratione aut autem voluptas beatae non. Eos sed qui optio amet voluptates. Ipsam recusandae saepe qui reiciendis doloremque rerum.', 20, 'S', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(8, 1, 'Beige Top', '/images/women/top/w top 7.jpeg', 49, 'Harum laboriosam tempore ut aut. Est porro ratione aliquam vel sapiente minus ut. Aliquid enim a veritatis voluptatem itaque corrupti distinctio. Sint placeat aut est vel excepturi.', 24, 'S', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(9, 1, 'Pink Shirt', '/images/women/top/w top 8.jpg', 57, 'Est eos veritatis labore est asperiores. Atque ea consequatur ab quia. Enim perspiciatis minus dolorem ipsum repellendus dolores temporibus. Voluptatem recusandae sit at nam culpa inventore dolores.', 18, 'XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(10, 1, 'Frill Top', '/images/women/top/w top 9.jpeg', 16, 'Eligendi nam et aut sit aut. Quia ut quia distinctio id enim aut. Quia et aut qui fugit excepturi qui animi. Sunt voluptas inventore necessitatibus est harum rerum id.', 23, 'M', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(11, 1, 'Ribbon Top', '/images/women/top/w top 10.jpg', 67, 'Nobis quod sit est ut dolor voluptatum. Consectetur est est beatae earum vitae magni et in. Recusandae incidunt quisquam ut iure nemo in veritatis.', 21, 'L', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(12, 1, 'Pink Top', '/images/women/top/w top 11.jpg', 20, 'adilas;ldkfnaw;dfhaldkfjasld', 25, 'L', 0, '2024-08-06 05:32:36', NULL),
(13, 1, 'Lace Black Top', '/images/women/top/w top 12.jpg', 10, 'slidhvpaodhfsa;kfhsadfidasd', 35, 'M', 0, '2024-08-06 05:32:36', NULL),
(14, 3, 'lkhoixzc', '/images/men/men top/men tee 1.jpg', 10, 'lhpaidoaidfas', 28, 'M', 0, '2024-08-06 05:32:36', NULL),
(15, 3, 'lkhoixzc', '/images/men/men top/men tee 2.jpeg', 20, 'lhpaidoaidfas', 30, 'L', 0, '2024-08-06 05:32:36', NULL),
(16, 3, 'lkhoixzc', '/images/men/men top/men tee 3.jpg', 20, 'lhpaidoaidfas', 34, 'L', 0, '2024-08-06 05:32:36', NULL),
(17, 3, 'Men Shirt', '/images/men/men top/men shirt 4.jpg', 15, 'ladoifaodiapoiasd', 30, 'L', 0, '2024-08-06 05:32:36', NULL),
(18, 3, 'Men Shirt 2', '/images/men/men top/men shirt 5.jpg', 25, 'oihpoixhvoaihdpa', 32, 'L', 0, '2024-08-06 05:32:36', NULL),
(19, 3, 'Men Shirt 3', '/images/men/men top/men shirt 6.jpg', 8, 'ladhiadjpaodihfpoad', 36, 'L', 0, '2024-08-06 05:32:36', NULL),
(20, 3, 'Men Coat', '/images/men/men top/men coat 9.jpg', 10, 'oiahpoifdhpaoidhao', 45, 'L', 0, '2024-08-06 05:32:36', NULL),
(21, 3, 'Men Coat 2', '/images/men/men top/men coat 10.jpg', 5, 'aidhapiodhoaihdopaihfsd', 35, 'L', 0, '2024-08-06 05:32:36', NULL),
(22, 3, 'Men Coat 11', '/images/men/men top/men coat 11.jpg', 2, 'aoidhaopidhpoiad', 34, 'L', 0, '2024-08-06 05:32:36', NULL),
(23, 3, 'Men Coat 12', '/images/men/men top/men coat 12.jpg', 15, 'oiadiuahfopaidhfass', 30, 'L', 0, '2024-08-06 05:32:36', NULL),
(26, 3, 'Dark Jean', '/images/men/men top/men shirt 7.jpeg', 20, 'aodihfapidjpoijPOixcj', 50, 'L', 0, '2024-08-06 05:32:36', NULL),
(27, 3, 'Light Jean', '/images/men/men top/men shirt 8.jpg', 40, 'iadhovijzoxicdjzpoidjv', 40, 'L', 0, '2024-08-06 05:32:36', NULL),
(28, 2, 'Brown Long Pant', '/images/women/skirt/w long 8.jpeg', 20, '', 80, 'M, L, XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(29, 2, 'Tight Jean', '/images/women/skirt/w long 9.jpeg', 15, 'Exercitationem cumque suscipit dolores. Magni aut aut delectus rerum eum. Voluptatum alias voluptate pariatur dolores rerum.', 70, 'M, L, XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(30, 2, 'Wide Jean', '/images/women/skirt/w long 10.jpeg', 1, 'Velit accusantium accusamus autem et accusantium blanditiis debitis minus. Id est eveniet aut est corrupti. Molestiae dolores commodi culpa odit reiciendis harum quam.', 20, 'XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(31, 2, 'Blue Short Jean', '/images/women/skirt/w short 6.jpg', 6, 'Ipsum laboriosam id dolores non. Est veritatis rem dignissimos alias aspernatur. Aut incidunt omnis ut est eveniet.', 40, 'M', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(32, 2, 'Black Short Rip Jean', '/images/women/skirt/w short 7.jpg', 50, 'Tenetur quia non quos sed beatae doloribus. Aliquid dolores voluptatem et non in nisi expedita. Rerum fugiat voluptatem est quaerat aut minus officiis. Consequuntur recusandae et esse quam.', 54, 'L', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(33, 2, 'Beige Short Pant', '/images/women/skirt/w short 11.jpg', 80, 'Ratione aut autem voluptas beatae non. Eos sed qui optio amet voluptates. Ipsam recusandae saepe qui reiciendis doloremque rerum.', 38, 'S', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(34, 2, 'Black Short Pant', '/images/women/skirt/w short 12.jpg', 32, 'Harum laboriosam tempore ut aut. Est porro ratione aliquam vel sapiente minus ut. Aliquid enim a veritatis voluptatem itaque corrupti distinctio. Sint placeat aut est vel excepturi.', 30, 'S', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(35, 2, 'White Spot Skirt', '/images/women/skirt/w skirt 5.jpg', 60, 'Est eos veritatis labore est asperiores. Atque ea consequatur ab quia. Enim perspiciatis minus dolorem ipsum repellendus dolores temporibus. Voluptatem recusandae sit at nam culpa inventore dolores.', 28, 'XL', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(36, 2, 'Black Jean Skirt', '/images/women/skirt/w skirt 4.jpg', 16, 'Eligendi nam et aut sit aut. Quia ut quia distinctio id enim aut. Quia et aut qui fugit excepturi qui animi. Sunt voluptas inventore necessitatibus est harum rerum id.', 45, 'L', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(37, 2, 'Black Belt Skirt', '/images/women/skirt/w skirt 3.jpg', 70, 'Nobis quod sit est ut dolor voluptatum. Consectetur est est beatae earum vitae magni et in. Recusandae incidunt quisquam ut iure nemo in veritatis.', 48, 'L', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(38, 2, '2 Layers Jean Skirt', '/images/women/skirt/w skirt 2.jpg', 30, 'adilas;ldkfnaw;dfhaldkfjasld', 55, 'L', 0, '2024-08-06 05:32:36', NULL),
(39, 2, 'Blue Jean Mini Skirt', '/images/women/skirt/w skirt 1.jpg', 43, 'slidhvpaodhfsa;kfhsadfidasd', 32, 'M', 0, '2024-08-06 05:32:36', NULL),
(40, 6, 'Black Purse', '/images/bags/purse 1.jpg', 15, 'Exercitationem cumque suscipit dolores. Magni aut aut delectus rerum eum. Voluptatum alias voluptate pariatur dolores rerum.', 110, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(41, 6, 'White Bag', '/images/bags/purse 2.jpg', 10, 'Velit accusantium accusamus autem et accusantium blanditiis debitis minus. Id est eveniet aut est corrupti. Molestiae dolores commodi culpa odit reiciendis harum quam.', 99, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(42, 6, 'Black & White Purse', '/images/bags/purse 3.jpg', 6, 'Ipsum laboriosam id dolores non. Est veritatis rem dignissimos alias aspernatur. Aut incidunt omnis ut est eveniet.', 120, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(43, 6, 'Dark Blue Purse', '/images/bags/purse 4.jpg', 50, 'Tenetur quia non quos sed beatae doloribus. Aliquid dolores voluptatem et non in nisi expedita. Rerum fugiat voluptatem est quaerat aut minus officiis. Consequuntur recusandae et esse quam.', 89, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(44, 6, 'Pink Purse', '/images/bags/purse 5.jpg', 80, 'Ratione aut autem voluptas beatae non. Eos sed qui optio amet voluptates. Ipsam recusandae saepe qui reiciendis doloremque rerum.', 30, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(45, 6, 'Brown Purse', '/images/bags/purse 6.jpg', 32, 'Harum laboriosam tempore ut aut. Est porro ratione aliquam vel sapiente minus ut. Aliquid enim a veritatis voluptatem itaque corrupti distinctio. Sint placeat aut est vel excepturi.', 150, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(46, 6, 'Brown Designed', '/images/bags/wallet 7.jpg', 60, 'Est eos veritatis labore est asperiores. Atque ea consequatur ab quia. Enim perspiciatis minus dolorem ipsum repellendus dolores temporibus. Voluptatem recusandae sit at nam culpa inventore dolores.', 130, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(47, 6, 'Brown Wallet', '/images/bags/wallet 8.jpg', 24, 'Eligendi nam et aut sit aut. Quia ut quia distinctio id enim aut. Quia et aut qui fugit excepturi qui animi. Sunt voluptas inventore necessitatibus est harum rerum id.', 95, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(48, 6, 'Black Wallet', '/images/bags/wallet 9.jpg', 20, 'Nobis quod sit est ut dolor voluptatum. Consectetur est est beatae earum vitae magni et in. Recusandae incidunt quisquam ut iure nemo in veritatis.', 70, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(49, 6, 'Pattern Black', '/images/bags/wallet 10.jpg', 35, 'adilas;ldkfnaw;dfhaldkfjasld', 158, '-', 0, '2024-08-06 05:32:36', NULL),
(50, 6, 'YSL Black', '/images/bags/wallet 11.jpeg', 47, 'slidhvpaodhfsa;kfhsadfidasd', 80, '-', 0, '2024-08-06 05:32:36', NULL),
(51, 6, 'Light Brown', '/images/bags/wallet 12.jpg', 40, 'slidhvpaodhfsa;kfhsadfidasd', 86, '-', 0, '2024-08-06 05:32:36', NULL),
(52, 4, 'Washed Jean', '/images/men/men pants/men jean 1.jpg', 17, 'ladoifaodiapoiasd', 78, 'L', 0, '2024-08-06 05:32:36', NULL),
(53, 4, 'Blue Jean', '/images/men/men pants/men jean 2.jpg', 25, 'oihpoixhvoaihdpa', 66, 'L', 0, '2024-08-06 05:32:36', NULL),
(54, 4, 'Brown Pant', '/images/men/men pants/men long 5.jpeg', 8, 'ladhiadjpaodihfpoad', 76, 'L', 0, '2024-08-06 05:32:36', NULL),
(55, 4, 'White Pant', '/images/men/men pants/men long 6.jpeg', 15, 'oiahpoifdhpaoidhao', 49, 'L', 0, '2024-08-06 05:32:36', NULL),
(56, 4, 'Y2K Black', '/images/men/men pants/men long 7.jpg', 20, 'aidhapiodhoaihdopaihfsd', 95, 'L', 0, '2024-08-06 05:32:36', NULL),
(57, 4, 'Y2K Grey', '/images/men/men pants/men long 8.jpeg', 16, 'aoidhaopidhpoiad', 95, 'L', 0, '2024-08-06 05:32:36', NULL),
(58, 4, 'Black Pant', '/images/men/men pants/men long 9.jpg', 15, 'oiadiuahfopaidhfass', 70, 'L', 0, '2024-08-06 05:32:36', NULL),
(59, 4, 'Grey Pant', '/images/men/men pants/men long 10.jpg', 20, 'aodihfapidjpoijPOixcj', 55, 'L', 0, '2024-08-06 05:32:36', NULL),
(60, 4, 'Style Pant', '/images/men/men pants/men long 11.jpg', 11, 'ladhiadjpaodihfpoad', 70, 'L', 0, '2024-08-06 05:32:36', NULL),
(61, 4, 'White Style Pant', '/images/men/men pants/men long 12.jpg', 15, 'oiahpoifdhpaoidhao', 58, 'L', 0, '2024-08-06 05:32:36', NULL),
(62, 4, 'Grey Short', '/images/men/men pants/men short 3.jpg', 20, 'aidhapiodhoaihdopaihfsd', 56, 'L', 0, '2024-08-06 05:32:36', NULL),
(63, 4, 'Black Short', '/images/men/men pants/men short 4.jpg', 16, 'aoidhaopidhpoiad', 59, 'L', 0, '2024-08-06 05:32:36', NULL),
(64, 5, 'Colorful Pearl', '/images/jewellery/jewel 1.jpg', 6, 'Ipsum laboriosam id dolores non. Est veritatis rem dignissimos alias aspernatur. Aut incidunt omnis ut est eveniet.', 20, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(65, 5, 'Moon Necklace', '/images/jewellery/jewel 2.jpeg', 10, 'Tenetur quia non quos sed beatae doloribus. Aliquid dolores voluptatem et non in nisi expedita. Rerum fugiat voluptatem est quaerat aut minus officiis. Consequuntur recusandae et esse quam.', 16, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(66, 5, 'Stars Necklace', '/images/jewellery/jewel 3.jpg', 18, 'Ratione aut autem voluptas beatae non. Eos sed qui optio amet voluptates. Ipsam recusandae saepe qui reiciendis doloremque rerum.', 20, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(67, 5, '2 Strings Necklace', '/images/jewellery/jewel 4.jpg', 32, 'Harum laboriosam tempore ut aut. Est porro ratione aliquam vel sapiente minus ut. Aliquid enim a veritatis voluptatem itaque corrupti distinctio. Sint placeat aut est vel excepturi.', 26, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(68, 5, 'Ring Necklace', '/images/jewellery/jewel 5.jpg', 30, 'Est eos veritatis labore est asperiores. Atque ea consequatur ab quia. Enim perspiciatis minus dolorem ipsum repellendus dolores temporibus. Voluptatem recusandae sit at nam culpa inventore dolores.', 28, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(69, 5, 'Infinity Necklace', '/images/jewellery/jewel 6.jpg', 20, 'Eligendi nam et aut sit aut. Quia ut quia distinctio id enim aut. Quia et aut qui fugit excepturi qui animi. Sunt voluptas inventore necessitatibus est harum rerum id.', 22, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(70, 5, 'Chain Necklace', '/images/jewellery/jewel 7.png', 20, 'Nobis quod sit est ut dolor voluptatum. Consectetur est est beatae earum vitae magni et in. Recusandae incidunt quisquam ut iure nemo in veritatis.', 20, '-', 0, '2024-08-05 21:26:18', '2024-08-05 21:26:18'),
(71, 5, 'Y2K Necklace', '/images/jewellery/jewel 8.jpg', 40, 'adilas;ldkfnaw;dfhaldkfjasld', 35, '-', 0, '2024-08-06 05:32:36', NULL),
(72, 5, 'Lion Necklace', '/images/jewellery/jewel 9.jpg', 47, 'slidhvpaodhfsa;kfhsadfidasd', 35, '-', 0, '2024-08-06 05:32:36', NULL),
(73, 5, 'Black Necklace', '/images/jewellery/jewel 10.jpg', 40, 'slidhvpaodhfsa;kfhsadfidasd', 26, '-', 0, '2024-08-06 05:32:36', NULL),
(74, 5, '2 Rings Necklace', '/images/jewellery/jewel 11.jpg', 17, 'ladoifaodiapoiasd', 24, '-', 0, '2024-08-06 05:32:36', NULL),
(75, 5, '4 Rings Necklace', '/images/jewellery/jewel 12.jpg', 25, 'oihpoixhvoaihdpa', 32, '-', 0, '2024-08-06 05:32:36', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `main_category_id` bigint(20) UNSIGNED NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `main_category_id`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'Tops', 1, 0, '2024-07-16 06:34:08', NULL),
(2, 'Bottoms', 1, 0, '2024-07-16 06:34:31', NULL),
(3, 'Tops', 2, 0, '2024-07-16 06:34:53', NULL),
(4, 'Bottoms', 2, 0, '2024-07-16 06:35:07', NULL),
(5, 'Jewelries', 3, 0, '2024-07-16 06:35:53', NULL),
(6, 'Bags', 3, 0, '2024-07-16 06:36:04', NULL);

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
  `profile` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `wishlist_id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `phone`, `address`, `postcode`, `wishlist_id`, `del_flg`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Choo Pwint', 'choopwintchal@gmail.com', NULL, '$2y$12$4ZUc8wRvpuauY9G28LFeSezH9ViI2hH3PwyOEmKwg5bzlYQOvf0mC', NULL, '12345678', NULL, NULL, 1, 0, NULL, '2024-08-07 08:27:59', NULL),
(4, 'Chu Pwint', 'chupwintchal99@gmail.com', NULL, '$2y$12$G0XC363XjHjh1P1QzSyXzuoVuh0rJfuAdCkEVi7D.Zw2aHpkjhRU.', 'profile_images/cVfEiKHQQpj1r51t0xp3hbbgdHn24wRpxQZZ1Vj2.jpg', '3567', 'fyi', NULL, 2, 0, NULL, '2024-08-07 08:29:21', '2024-08-07 00:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `del_flg`, `created_at`, `updated_at`) VALUES
(2, 4, 2, 1, '2024-08-07 00:29:29', '2024-08-07 00:29:43'),
(3, 4, 3, 0, '2024-08-07 00:29:32', '2024-08-07 00:29:32'),
(4, 4, 4, 0, '2024-08-07 00:30:55', '2024-08-07 00:30:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_us_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
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
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_method_id_foreign` (`payment_method_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_main_category_id_foreign` FOREIGN KEY (`main_category_id`) REFERENCES `main_categories` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
