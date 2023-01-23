-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 03:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult_price` bigint(20) NOT NULL,
  `children_price` bigint(20) NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `location`, `class`, `description`, `access`, `adult_price`, `children_price`, `image1`, `image2`, `image3`) VALUES
(1, 'Tanah Lot', 'Kabupaten Tabanan', 2, 'Tanah Lot is a rock formation off the Indonesian island of Bali. It is home to the ancient Hindu pilgrimage temple Pura Tanah Lot, a popular tourist and cultural icon for photography. Tanah Lot is claimed to be the work of the 16th-century Dang Hyang Nira', 'Tanah Lot Temple sits around 20kms from Denpasar, south of Tabanan city and west of Canggu. It can be reached by taxi or by hiring a scooter, though many visitors do find it more convenient to visit the temple as part of an island tour.', 50000, 40000, 'https://backpackerjakarta.com/wp-content/uploads/2017/03/173-tanah-lot-temple2.jpg', 'https://www.rentalmobilbali.net/wp-content/uploads/2019/12/Sunset-Pura-Tanah-Lot-Bali-Twitter.jpg', 'https://dolanyok.com/wp-content/uploads/2018/12/Tanah-Lot-Pura.jpg'),
(2, 'Danau Batur', 'Kintamani', 1, 'Lake Batur is a volcanic crater lake in Kintamani, Bali, Bangli Regency of Bali, located about 30 km northeast of Ubud in Bali. The lake is inside of the caldera of an active volcano, Mount Batur, located along the Ring of Fire of volcanic activity.', 'This sacred active volcano lies in Kintamani District in Bali\'s central highlands, about an hour\'s drive from Ubud. The hike, along well-marked trails, is relatively easy and usually takes about two to three hours.', 60000, 50000, 'https://experitour.com/wp-content/uploads/2018/02/Danau-Lake-Batur.jpg', 'https://idetrips.com/wp-content/uploads/2019/03/lake-batur.jpg', 'https://theworldtravelguy.com/wp-content/uploads/2020/06/DJI_0333.jpg'),
(3, 'Pura Uluwatu', 'Uluwatu', 2, 'The temple (pura in Balinese) is built at the edge (ulu) of a 70-meter-high cliff or rock (watu) projecting into the sea. In folklore, this rock is said to be part of Dewi Danu\'s petrified barque. A small temple was claimed to have existed earlier.', 'Uluwatu Temple sits about 45 minutes from the Denpasar airport and Kuta area by road. There\'s no transportation to get here. The most convenient way to get there is on a guided tour like Uluwatu Temple Tour which combined with Kecak dance and a romantic d', 55000, 45000, 'https://theworldtravelguy.com/wp-content/uploads/2021/02/DJI_0377_1300-1024x683.jpg', 'https://www.aswindrajaya.com/wp-content/uploads/2019/08/uluwatu_sunset.jpg', 'https://anakbackpacker.files.wordpress.com/2013/09/uluwatu.jpg'),
(4, 'Tegallalang Rice Terrace', 'Tegallalang', 1, 'An agricultural icon on the cliffs of Tegalalang Village north of Ubud. It’s a very popular tourist hotspot in Bali and a must-see in many Bali itineraries. Without a doubt, the Tegalalang Rice Terrace are one of the most beautiful places to visit in Bali', 'To get to Tegallalang rice terrace you will require a vehicle. The area is about half an hour north of Ubud town centre. From Ubud town centre, take Jalan Raya as far east as you can go, and then turn north for about 9KM and you will reach Tegallalang.', 65000, 55000, 'https://media.cntraveler.com/photos/5e35bdf00e2bfd0008a03691/16:9/w_2560,c_limit/Tegallalang-GettyImages-515480864.jpg', 'https://www.planetware.com/photos-large/INA/bali-jatiluwih-rice-terraces.jpg', 'https://theworldtravelguy.com/wp-content/uploads/2020/05/DJI_0910-3.jpg'),
(5, 'Sacred Monkey Forest Sanctuary', 'Ubud', 1, 'Mandala Suci Wenara Wana, or well known as Ubud Monkey Forest, is the sanctuary and natural habitat of the Balinese long-tailed macaque. It is located at Padangtegal Ubud, Bali. About 1260 monkeys live in this sanctuary.', 'If you are staying in Ubud, you can catch a free shuttle, which runs every 15 minutes, or do the 20-minute walk from the main tourist area. The attraction is located at the end of the conveniently named Monkey Forest Road.', 80000, 65000, 'https://alamubudvilla.com/wp-content/uploads/2019/02/Sangeh-Monkey-Forest-800x533.jpg', 'https://cdn.getyourguide.com/img/location/58bfd004113e3.jpeg/70.jpg', 'https://images.squarespace-cdn.com/content/v1/560dbc25e4b0969564758eb5/1499392245001-UHLJIMW3I1FNQG2CGK0O/Sacred+Monkey+Forest+%2B+www.thetravelpockets.com?format=1000w'),
(6, 'Besakih Great Temple', 'Besakih', 2, 'Besakih Temple is a pura complex in the village of Besakih on the slopes of Mount Agung in eastern Bali, Indonesia. It is the most important, the largest and holiest temple of Balinese Hinduism, and one of a series of Balinese temples', 'From Denpasar, head to Sanur and then to Klungkung by taking the Kusumba bypass. At Klungkung, take the right turn at the Menanga intersection and drive toward Besakih. The journey will take 3 hours from Denpasar.  ', 50000, 40000, 'https://mediaim.expedia.com/destination/1/46fa27ae7ccbf86a5fdd2d989a5f18bd.jpg', 'https://depostjogja.com/photo/plugin/article/2021/1636877355_1-org.jpg', 'https://backpackerjakarta.com/wp-content/uploads/2017/03/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `attraction_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `attraction_name`, `date`, `time`, `adult`, `children`) VALUES
(12, '1', 'Pura Uluwatu', '2023-01-01', '6:00AM - 11:59AM', 2, 0);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_03_143729_create_attractions_table', 1),
(7, '2022_12_16_062932_create_sessions_table', 1),
(8, '2022_12_16_063446_add_google_id_column', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `attraction_id` varchar(5) NOT NULL,
  `review` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `attraction_id`, `review`) VALUES
(1, 'Rishard', '1', 'This place is very good.'),
(4, 'Rishard', '3', 'Pura uluwatu is very interesting.');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QeoB3kWtXtLomrQDTXjxdFY7o3nWGrzN1hpII77v', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRUlGWHFwWHF3OUxZSUE0ZUY5dXBWbDRRR1RYV3dLQzE5aXBDbWJMbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdHRyYWN0aW9uLzYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFlvVTdLQ2FrUmZ1WXRTMC8wTlQ3aGVwRFNxaWI2S3dIbW9hN1ZucnVuQkVhUFNacm5KSEdDIjt9', 1674034536);

-- --------------------------------------------------------

--
-- Table structure for table `travellist`
--

CREATE TABLE `travellist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attraction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travellist`
--

INSERT INTO `travellist` (`id`, `user_id`, `attraction_id`) VALUES
(2, 1, 2);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Rishard', 'rishardtan@gmail.com', NULL, '$2y$10$YoU7KCakRfuYtS0/0NT7hepDSqib6KwHmoa7VnrunBEaPSZrnJHGC', NULL, NULL, NULL, 'eJ9Marutdzs3XcJ6UFpstoUsALuFG3nMRLt1e9gP8Ke4d9IKo6CQAqEIDnXD', NULL, NULL, '2022-12-16 18:10:40', '2022-12-16 18:10:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `travellist`
--
ALTER TABLE `travellist`
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
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travellist`
--
ALTER TABLE `travellist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
