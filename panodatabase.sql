-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 09:23 PM
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
-- Database: `panodatabase`
--

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Kholoud', 'kh@gmail.com', 'good job', '2024-08-14 13:28:13', '2024-08-14 13:28:13'),
(3, 'Maram', 'maram3@gmail.com', 'great', '2024-08-14 13:29:52', '2024-08-14 13:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(6, 'مخابز وحلويات الارياف', 'images/L0pP3btouPymMONqecFTQoOMieDOoGsnDX47kFBo.jpg', 'مخابز وحلويات الأرياف.. 40 عاماً من التميز والنجاح 11 فرعاً حول المملكة', '2024-08-15 08:48:59', '2024-08-15 08:48:59'),
(7, 'نادي الصقر', 'images/Nf6vd3ikxaOxxLHTjDKmRXETC6EjOBTpl41cXxyU.jpg', 'تاسس نادي الصقر عام 1401هـ على يد مجموعة من اهالي مركز البصر', '2024-08-15 08:51:04', '2024-08-15 08:51:04'),
(9, 'مستشفى بريدة المركزي', 'images/dqXcfiw6V7vXkwGZJuBaMFAh6gpy3VGnfF5dRSqE.jpg', 'صرح طبي عريق بالقصيم منطقة بريده أنجز مستشفى بريدة المركزي أحد مكونات تجمع القصيم الصحي, أكثر من 12 ألف عملية جراحية', '2024-08-16 14:48:13', '2024-08-16 14:52:12'),
(10, 'أركال للإستشارات الهندسيه', 'images/KTCae0dUZEWZakXHefQkaJ3rsgiC9PQEH6cBssTq.jpg', 'أركال للإستشارات الهندسيه المتخصص في تصميم المخططات المعماريه بأحدث الأساليب العصريه', '2024-08-16 14:49:34', '2024-08-16 14:49:34'),
(11, 'نادي الرائد الرياضي', 'images/T4OPuSuU96tgtERqAXbFpCREtnCfNlzx3u4TTkb3.jpg', 'رؤيتنا أن نكون ناديًا رائدًا يعزز النمو المستدام في المجال الرياضي محلياً ودولياً', '2024-08-16 14:53:38', '2024-08-16 14:53:38'),
(12, 'النادي العربي', 'images/CCq2ksjl2rBvNqAoLTgfjo0Wa1T7PuRGjLkDxwa0.jpg', 'النادي العربي الرياضي بعنيزة, في محافظة عنيزة بمنطقة القصيم وسط المملكة العربية السعودية', '2024-08-16 14:54:49', '2024-08-16 14:54:49'),
(13, 'نادي السر', 'images/s2QCzkuFpQky0tQqga3wRiZS13A13HxBdi2RApBu.jpg', 'نسعى بنادي السر الرياضي للتميز الرياضي والإداري عبر عمل مؤسسي لتحقيق أهدافنا وطموحاتنا', '2024-08-16 14:56:00', '2024-08-16 14:56:00'),
(14, 'نادي التقدم', 'images/vCeI8lqIsaTzZkW4NlLSSLw5xMmDNUS9X06PQrvS.jpg', 'كانت بدايات النادي بسيطة باجتهادات ألهالي المذنب في عام 1968م', '2024-08-16 14:58:07', '2024-08-16 14:58:07'),
(15, 'حاضنة الجمعيات', 'images/tq49RDAjoP19a2Q1BWmXLjntpmxGqhwrZ3GgBoiy.jpg', 'حاضنة للجمعيات الأهلية الناشئة هدفها دراسة الاحتياجات بمنطقة القصيم ودعم الافكار', '2024-08-16 14:59:26', '2024-08-16 14:59:26'),
(16, 'كليات عنيزة', 'images/B8FBv85Gfai3MtexPO2peFvdv3KXDrIl3GRYTeou.jpg', 'تعد كليات عنيزة من الكليات الناشئة في المملكة؛', '2024-08-16 15:01:00', '2024-08-16 15:01:00'),
(17, 'جمعية تجهيز', 'images/N7jMeo8miVZOFfppodyQUC6s8UzrJQtevYpnfgPL.jpg', 'جمعية خيرية تهتم بشؤون المسلم بعد موته، وتوعية المجتمع بأحكام الجنائز', '2024-08-16 15:02:37', '2024-08-16 15:02:37'),
(18, 'مكتب المحامي عبدالرحمن الجمعة', 'images/2r9qyYrHDUf2UGQZtkJEI8bNinVxd7yhkVFcsxiM.jpg', 'مكتب عبدالرحمن محمد الجمعة محامون ومستشارون وموثقون هو مكتب مرخص له بمزاولة المحاماة', '2024-08-16 15:03:48', '2024-08-16 15:03:48'),
(19, 'مكتب القصيم للزواج', 'images/YFIxcw1MX1NREXCgEamWvy6UG13EXR9svSt0WoM6.jpg', 'مكتب القصيم للزواج القصيم بريده حي السالميه شرق مسجد الجارالله الجامع المكتب له حوالي 16سنه زوج كثير من الرجال على مستوى المملكه', '2024-08-16 15:05:15', '2024-08-16 15:05:15');

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
(4, '2024_08_13_215916_create_contacts_table', 1),
(5, '2024_08_15_103233_create_customers_table', 2),
(6, '2024_08_15_132616_create_services_table', 3);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'البرمجة من الصفر', 'services/PWfVldRk0AQfODEsPvRDDZeLznnpq5jo0Wuqut1Y.jpg', 'نقوم بتحويل فكرتك إلى موقع إلكتروني أو تطبيق جوال', '2024-08-15 11:28:24', '2024-08-15 11:28:24'),
(4, 'نظام قمة للمحاماة', 'services/mL99S9gwksobZj6A1SIc6SFsoLll0WDgNBRXzQtU.jpg', 'هو نظام يمكن مكاتب المحاماة من إدارة جميع أعمالها', '2024-08-15 11:30:34', '2024-08-15 11:30:34'),
(8, 'سكريبت الجمعيات الخيرية', 'images/oilyWAHpTB5acyXhLEMKdwhjgnnge20Ubm9I3dAM.jpg', 'سكريبت متكامل لمواقع الجمعيات الخيرية وفق ضوابط المركز السعودي للحوكمة.', '2024-08-16 15:59:27', '2024-08-16 15:59:27'),
(9, 'برنامج قمة للنداء الالي', 'images/X6Q5QD8iTQ81hVjmdRjWcOR1C1ib2kWrM33ctf5Q.jpg', 'نظام تبليغ عن الحالات الطارئة للمنشآت الصحية أو غيرها من الأماكن التي تحتاج سرعة استجابة', '2024-08-16 16:00:43', '2024-08-16 16:01:13'),
(10, 'برنامج قمة لنقاط البيع', 'images/it4vVUOmd2N5MRI6PXpbPMJAtlUYXWB35QOY6I2B.jpg', 'لا يحتاج جهاز بمواصفات عالية،\r\nيعمل على الجوال', '2024-08-16 16:02:48', '2024-08-16 16:03:08'),
(11, 'منصة بانوراما المتكاملة للأندية الرياضية', 'images/xPa4UseoBKCwXR9eErxuWyUgxnrMDIyVQen9Sp35.jpg', 'تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة الأندية الرياضية', '2024-08-16 16:09:21', '2024-08-16 16:09:21'),
(12, 'نظام قمة للمحاسبة', 'images/poZ0LAg1i804DZT8ZpCZCmr42h2xn1PJgg54p0re.jpg', 'هو نظام يمكن مكاتب المحاسبة من إدارة جميع أعمالها', '2024-08-16 16:10:30', '2024-08-16 16:10:30'),
(13, 'منصة بانوراما لادارة المشاريع الهندسية', 'images/xHRaw0gx2QoQ6toyTWALKffaxq7kGd9cqDa0Bzm9.jpg', 'تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة المكاتب الهندسية الكبيرة', '2024-08-16 16:20:12', '2024-08-16 16:20:12');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
