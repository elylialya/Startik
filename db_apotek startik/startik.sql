-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 03:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startik`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_15_051550_create_products_table', 1),
(6, '2024_05_25_152727_transactions', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `product_code`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sangobion 10 Kapsul', '21.000', '10', 'vitamin dan zat besi penambah darah.', 'product-images/lzMhSnBBtk8kF57cc81mQxP3u83T6DTYlD7C1ENz.jpg', '2024-05-27 19:50:55', '2024-05-27 22:25:44'),
(4, 'Paracetamol', '3.000', '9', 'obat penurun panas dan pereda nyeri (analgesic dan antipiretik)', 'product-images/RjGGaxSjKNFUu7IDzboj3GCJCWN2F787Fo1LHXOa.png', '2024-05-27 21:54:46', '2024-05-27 22:25:31'),
(5, 'Neurobion Forte 10 Tablet', '50.900', '8', 'vitamin neurotropik dengan kandungan vitamin B1, vitamin B6, Vitamin B12, yang penting untuk Kesehatan fungsi saraf.', 'product-images/TOXn3gB3PEnVFTMxpxY9HXcsLm0G4ttcpWruoJdh.jpg', '2024-05-27 22:23:56', '2024-05-27 22:25:22'),
(6, 'Imboost Force', '87.400', '7', 'digunakan untuk membantu memelihara daya tahan tubuh.', 'product-images/KTMeofBhx5Bvli885FwL14xcCJs2wPuUEHR8YKQk.png', '2024-05-27 22:27:49', '2024-05-27 22:27:49'),
(7, 'Maltofer Chewable 6 tablet', '22.800', '6', 'Maltofer Cwewable tablet adalah sediaan zat besi yang mengandung 100mg zat besi sebagai iron (III) Hydroxide Polymaltose Complex dlam bentuk tablet kunyah.', 'product-images/izptXb40tEEaVLT2NizHJgYlAIw5G4G63Syhx1nI.jpg', '2024-05-27 22:30:30', '2024-05-27 22:30:30'),
(8, 'Astria 4mg', '35.600', '5', 'ASTRIA merupakan suplemen makanan yang mengandug Astaxanthin yang dapat membantu memelihara Kesehatan tubuh.', 'product-images/7k79sDnCXWb8O3xBzwUKcIKsro5OMluu4Jx0Gaaj.png', '2024-05-27 22:32:21', '2024-05-27 22:32:21'),
(9, 'Imboost Force Kids', '78.300', '4', 'Suplemen ini digunakan untuk membantu memelihara daya tahan tubuh.', 'product-images/8wG6d7gqbxpd8SQ5jON0orJza5g0SetdRmKiaytf.jpg', '2024-05-27 22:34:08', '2024-05-27 22:34:08'),
(10, 'Renovit Multivitamin', '86.100', '3', 'multivitamin dan mineral yang digunakan untuk membantu memenuhi kebutuhan multivitamin dan mineral.', 'product-images/xAtuxLcHiLp298UszYvCXUXkXjrvLNbSVuI3114K.jpg', '2024-05-27 22:39:09', '2024-05-27 22:39:09'),
(11, 'Pharmaton Formula', '31.500', '2', 'membantu meningkatkan kemampuan belajar otak.', 'product-images/fOtlNV2ZxTbpFcDc5UNCVZwndrhsQUwpgzybsq1F.jpg', '2024-05-27 22:40:43', '2024-05-27 22:40:43'),
(12, 'Redoxon Fortimun Effervescent', '61.800', '1', 'suplemen makanan untuk memenuhi kebutuhan vitamin dan mineral sehingga membantu memelihara kesehatan tubuh.', 'product-images/6XCLcG3lTuushelz7dNl1WsasZllytWvi9BpAHBD.png', '2024-05-27 22:42:27', '2024-05-27 22:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL DEFAULT 'COD',
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `produk`, `harga`, `jumlah`, `total`, `metode`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'tes', '10000', 2, 2, 'COD', 'Jl Angsana Raya', '2024-05-27 21:11:09', '2024-05-27 21:11:09'),
(2, 'tes', '10000', 2, 2, 'COD', 'Jl Angsana Raya', '2024-05-27 21:11:20', '2024-05-27 21:11:20'),
(3, 'tes', '10000', 2, 1, 'COD', 'JL', '2024-05-27 21:13:11', '2024-05-27 21:13:11'),
(4, 'tes', '10000', 2, 1, 'COD', 'Jl Angsana Raya', '2024-05-27 21:13:27', '2024-05-27 21:13:27'),
(5, 'tes', '10000', 3, 2, 'COD', 'banjarmasin', '2024-05-27 21:31:54', '2024-05-27 21:31:54'),
(6, 'tes', '10000', 2, 20000, 'COD', 'handil', '2024-05-27 21:35:07', '2024-05-27 21:35:07'),
(7, 'tes', '10000', 2, 20000, 'COD', 'banjarmasin', '2024-05-27 21:35:34', '2024-05-27 21:35:34'),
(8, 'tes', '10000', 2, 20000, 'COD', 'cemara', '2024-05-27 21:36:46', '2024-05-27 21:36:46'),
(9, 'Renovit Multivitamin', '86.100', 1, 1, 'COD', 'hksn', '2024-05-27 22:44:23', '2024-05-27 22:44:23'),
(10, 'Paracetamol', '3.000', 1, 1, 'COD', 'hksn', '2024-05-28 00:14:50', '2024-05-28 00:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `profile_image`, `phone`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nopal', NULL, NULL, NULL, 'nopal@gmail.com', NULL, '$2y$12$HW7kEJdpGNh9XzRnGTaRMOw41fqOnVZq8pWZ3B/a4biV3/fbbrDYy', 1, NULL, '2024-05-27 19:49:26', '2024-05-27 19:49:26'),
(2, 'rindu', 'jln kayu tangi', '1716877692.png', '088766789', 'rindu06@gmail.com', NULL, '$2y$12$wRTYW.bJO7gstKKDiB7RN.zNsbpbUPN3V/OFnaiEsfaPoud7EqBuq', 0, NULL, '2024-05-27 20:53:00', '2024-05-27 23:28:12');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
