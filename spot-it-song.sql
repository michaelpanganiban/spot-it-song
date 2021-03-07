-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 11:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spot-it-song`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_03_07_070720_create_password_resets_table', 0),
(4, '2021_03_07_070720_create_songs_table', 0),
(5, '2021_03_07_070720_create_users_table', 0),
(6, '2021_03_07_072709_create_password_resets_table', 0),
(7, '2021_03_07_072709_create_songs_table', 0),
(8, '2021_03_07_072709_create_users_table', 0),
(9, '2021_03_07_072817_create_password_resets_table', 0),
(10, '2021_03_07_072817_create_songs_table', 0),
(11, '2021_03_07_072817_create_users_table', 0),
(12, '2021_03_07_072937_create_password_resets_table', 0),
(13, '2021_03_07_072937_create_songs_table', 0),
(14, '2021_03_07_072937_create_users_table', 0),
(15, '2021_03_07_072938_add_foreign_keys_to_songs_table', 0);

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
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `lyrics` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `title`, `lyrics`, `author`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(1, 'Unwell', 'All day starin\' at the ceilin\' makin\'\r\nFriends with shadows on my wall\r\nAll night hearing voices tellin\' me\r\nThat I should get some sleep\r\nBecause tomorrow might be good for somethin\'\r\nHold on, feelin\' like I\'m headed for a breakdown\r\nAnd I don\'t know why\r\nBut I\'m not crazy, I\'m just a little unwell\r\nI know, right now you can\'t tell\r\nBut stay a while and maybe then you\'ll see\r\nA different side of me\r\nI\'m not crazy, I\'m just a little impaired\r\nI know, right now you don\'t care\r\nBut soon enough you\'re gonna think of me\r\nAnd how I used to be, me\r\nI\'m talkin\' to myself in public, dodging glances on the train\r\nAnd I know, I know they\'ve all been talkin\' about me\r\nI can hear them whisper, and it makes me think\r\nThere must be somethin\' wrong with me\r\nOut of all the hours thinkin\', somehow I\'ve lost my mind\r\nBut I\'m not crazy, I\'m just a little unwell\r\nI know, right now you can\'t tell\r\nBut stay a while and maybe then you\'ll see\r\nA different side of me\r\nI\'m not crazy, I\'m just a little impaired\r\nI know, right now you don\'t care\r\nBut soon enough you\'re gonna think of me\r\nAnd how I used to be\r\nI\'ve been talkin\' in my sleep\r\nPretty soon they\'ll come to get me\r\nYeah, they\'re takin\' me away\r\nI\'m not crazy, I\'m just a little unwell\r\nI know, right now you can\'t tell\r\nBut stay a while and maybe then you\'ll see\r\nA different side of me\r\nI\'m not crazy, I\'m just a little impaired\r\nI know, right now you don\'t care\r\nBut soon enough you\'re gonna think of me\r\nAnd how I used to be yeah, how I used to be\r\nHow I used to be\r\nHow I used to be\r\nWell, I\'m just a little unwell\r\nHow I used to be\r\nHow I used to be\r\nI\'m just a little unwell...', 'Matchbox Twenty', 1, '2021-03-06 23:08:41', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Michael Panganiban', 'johnmichaelpanganiban.its@gmail.com', NULL, '$2y$10$/kbwhha3XBK7GCmF9EAuiOfdkXKehwDw6EfgeXlpktNPM555vJYgS', NULL, '2021-03-07 13:46:54', '2021-03-07 13:46:54');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `fk_created_by` (`created_by`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `fk_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
