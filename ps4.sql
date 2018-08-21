-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 03:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps4`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `images`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Game bán Chạy', 'Hot game hot price', 'https://homer.dl.playstation.net/pr/bam-art/707/854/79cd3648-5648-4186-a9b4-cc70a7e67319.jpg', NULL, NULL, 1),
(2, 'Game Sale Sập Sàn', '40%-50%', 'https://homer.dl.playstation.net/pr/bam-art/709/116/dfa74166-a16c-4545-a4d4-22102e32f767.jpg', NULL, NULL, 1),
(3, 'Game sắp ra mắt', 'Có thể đặt hàng trước', 'https://homer.dl.playstation.net/pr/bam-art/676/633/e2872136-3628-41b8-9985-2f8b5f0fbba0.jpg', NULL, NULL, 1),
(4, 'Độc quyền PS4', 'Không thể bỏ qua', 'https://homer.dl.playstation.net/pr/bam-art/693/526/e14b780d-7e40-44d7-ae59-637c096f5a85.jpg', NULL, NULL, 1),
(5, 'FIFA 19 Bundle', 'Pre-order now', 'https://homer.dl.playstation.net/pr/bam-art/693/583/e00b8353-a3e8-492c-8371-8e00ae3851eb.jpg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `price`, `images`, `categoryId`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Detroit:Become Humand', 60, 'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg', 1, NULL, NULL, 1),
(2, 'Gow Of War', 60, 'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg', 1, NULL, NULL, 1),
(3, 'Monster Hunter: World', 60, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 1, NULL, NULL, 1),
(4, 'RedDead Redemtion', 60, 'https://upload.wikimedia.org/wikipedia/vi/thumb/a/a7/Red_Dead_Redemption.jpg/280px-Red_Dead_Redemption.jpg', 1, NULL, NULL, 1),
(5, 'FiFA 18', 40, 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d4/FIFA18cover.png/220px-FIFA18cover.png', 2, NULL, NULL, 1),
(6, 'Pes 2018', 40, 'https://www.virginmegastore.ae/medias/sys_master/root/h4a/hcb/9093245272094/PES-2018-Pro-Evolution-Soccer-324844-Detail.jpg', 2, NULL, NULL, 1),
(7, 'For Honor', 60, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKKLpFAKlbmB9DSSR8OsZMCf5kHaRnpnSX09JBkpgF6boaEQdu', 3, NULL, NULL, 1),
(8, 'Goat Simulator:', 20, 'https://images-na.ssl-images-amazon.com/images/I/71QiqoGNZqL.jpg', 3, NULL, NULL, 1),
(9, 'Monster Hunter XX', 19, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 3, NULL, NULL, 1),
(10, 'Doom', 60, 'https://images.g2a.com/newlayout/323x433/1x1x0/40687a4fba21/5912d667ae653a98cb5745ac', 1, NULL, NULL, 1),
(11, 'Gow Of War', 60, 'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg', 1, NULL, NULL, 1),
(12, 'Monster Hunter: World', 60, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 1, NULL, NULL, 1),
(13, 'RedDead Redemtion', 60, 'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg', 1, NULL, NULL, 1),
(14, 'Gow Of War', 60, 'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg', 2, NULL, NULL, 1),
(15, 'Monster Hunter: World', 60, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 2, NULL, NULL, 1),
(16, 'Detroit:Become Humand', 60, 'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg', 3, NULL, NULL, 1),
(17, 'Gow Of War', 60, 'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg', 3, NULL, NULL, 1),
(18, 'Monster Hunter: World', 60, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 3, NULL, NULL, 1),
(19, 'Monster Hunter: World', 60, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 3, NULL, NULL, 1),
(20, 'Monster Hunter: World', 60, 'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901', 3, NULL, NULL, 1);

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
(3, '2018_08_09_065255_create_categories_table', 1),
(4, '2018_08_10_160624_create_games_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_categoryid_foreign` (`categoryId`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
