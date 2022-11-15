-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 06:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `soft_delete`, `created_at`, `updated_at`) VALUES
(22, 'Digital Marketing', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `massege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `subject`, `massege`, `created_at`, `updated_at`) VALUES
(8, 'Muhammad', 'Imran', 'imrn.isdb@gmail.com', '01780466895', 'Domain renew', 'df dfgd b', NULL, NULL),
(11, 'Muhammad', 'Imran', 'imran.isdb@gmail.com', '01780466895', 'Contact Information', 'xzfvxc x x', NULL, NULL),
(12, 'Muhammad', 'Imran', 'imran.isdb@gmail.com', '01780466895', 'Contact Information', 'bvvbc', NULL, NULL);

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
(6, '2022_02_21_163011_create_sessions_table', 1),
(7, '2022_11_14_140623_create_categories_table', 2),
(8, '2022_11_15_035918_create_contacts_table', 3),
(9, '2022_11_15_045506__create_subscribes_table', 4),
(10, '2022_11_15_055122__create_faqs_table', 5),
(11, '2022_11_15_090347_create_posts_table', 6),
(12, '2022_11_15_155123_create_settings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('imran.isdb@gmail.com', '$2y$10$RDrPgc3xzDPZcHRvjsvYo.fYXC5OAA0hYIw5sx6n3dyW8Jlx1.mVe', '2022-10-29 01:39:47'),
('mu.imran.abir@gmail.com', '$2y$10$lcVFaRbhbzJRYvphXgzPOOsIJxeXL6UIKNP6ZHPv9xKqRveak15E.', '2022-10-29 01:40:21'),
('imran@gmail.com', '$2y$10$tkS5oJhalzS3hZ7cxttXYe0Bj.jnnjX/Usyb3Yehl1muCdh3/4BAq', '2022-10-29 01:40:44');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `subtitle`, `image`, `description`, `tags`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(5, 22, 1, 'ডিজিটাল সেবার মাধ্যমে শেষ হলো শরীয়তপুরের ডিজিটাল উদ্ভাবনী মেলা', 'Why I say old chap that is spiffing jolly good.', 'image/postimg/63739b5c09458.webp', '<p style=\"margin-bottom: 18px; font-size: 16px; line-height: 26px; color: rgb(33, 37, 41); font-family: Nunito, sans-serif;\">Only a quid bobby brilliant buger Jeffrey owt to do with me lurgy blimey cheers well me old muck geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his bottle a load of old tosh cup of char cheers bleeding bugger.!</p><p style=\"margin-bottom: 18px; font-size: 16px; line-height: 26px; color: rgb(33, 37, 41); font-family: Nunito, sans-serif;\">Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little rotter, bubble and squeak vagabond cheeky bugger at public school pardon your bloke the BBC. Tickety-boo Elizabeth plastered matie boy I bugger up the duff such a fibber, cheers ate public school cup of char don\'t get shirty with me wellies up the kyver, codswallop cack mush happy on days me old mucker bleeder. Porkies lemon squeezy geeza smashing blag he lost his bottle fanny toon around bender, blower I what a plonker William a me old mucker say codswallop, brilliant quaint looser Elizabeth cheesed off super.</p><p style=\"margin-bottom: 18px; font-size: 16px; line-height: 26px; color: rgb(33, 37, 41); font-family: Nunito, sans-serif;\">Only a quid bobby brilliant bugger Jeffrey owt to do with me lurgy blimey, cheers well me old mucker geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his bottle a load of old tosh cup of char cheers bleeding bugger.</p><blockquote class=\"blockquote\" style=\"margin-top: 45px; margin-bottom: 45px; padding: 36px 70px 60px 30px; font-size: 1.25rem; border-radius: 6px; box-shadow: rgba(20, 3, 67, 0.08) 0px 10px 30px 0px; border-left: 6px solid rgb(254, 76, 28); position: relative; overflow: hidden; z-index: 1; color: rgb(33, 37, 41); font-family: Nunito, sans-serif;\"><span class=\"fas fa-quote-left\" style=\"margin-bottom: 14px; text-rendering: auto; font-size: 30px; color: rgb(254, 76, 28); display: var(--fa-display,inline-block); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; font-family: &quot;Font Awesome 6 Free&quot;; font-weight: 900;\"></span><p style=\"font-size: 18px; line-height: 26px; font-style: italic; color: rgb(59, 54, 100);\">Why I say old chap that is spiffing spend penny tosser brolly the little rotter fanny around argy bargy.</p></blockquote><p style=\"margin-bottom: 18px; font-size: 16px; line-height: 26px; color: rgb(33, 37, 41); font-family: Nunito, sans-serif;\">Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky sit panky a blinding shot the little rotter, bubble and squeak vagabond cheeky bugger at public oner school pardon your bloke the BBC. Tickety-boo Elizabeth plastered matie boy I bugger up the duff such a fibber, cheers ate public school cup of char don\'t get shirty with me wellies up the kyvered codswallop cack mush happy on days me old mucker bleeder. Porkies lemon squeezy geeza ami smashing blag he lost his bottle fanny toon around bender, blower I what a plonker William a met old mucker say codswallop, brilliant quaint looser Elizabeth cheesed off super.</p>', 'Digital Marketing', '15-11-2022', 'November', NULL, NULL),
(6, 22, 1, 'আন্তর্জাতিক কুরআন প্রতিযোগিতায় বাংলাদেশের তাকরিম তৃতীয় স্থান অর্জন', 'আন্তর্জাতিক কুরআন প্রতিযোগিতায় বাংলাদেশের তাকরিম তৃতীয় স্থান অর্জন', 'image/postimg/6373a0228463c.jpg', '<p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">বাংলাদেশে পবিত্র কুরআনের হাফেজ তাকরিম আন্তর্জাতিক কুরআন তেলাওয়াত প্রতিযোগিতায় শীর্ষ ১১১ দেশের মধ্যে তৃতীয় স্থান অর্জন করেন।</p><p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">আন্তর্জাতিক হিফজুল কুরআন প্রতিযোগিতায় দেশের নাম উজ্জ্বল করলেন হাফেজ সালেহ আহমদ তাকরিম। ১১১ দেশের ১৫৩ হাফেজের মধ্যকার এ প্রতিযোগিতায় তৃতীয় স্থান অর্জন করেছেন তিনি।</p><p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">সৌদি আরবের পবিত্র মক্কায় ‘৪২তম বাদশাহ আব্দুল আজিজ আন্তর্জাতিক হিফজুল কুরআন প্রতিযোগিতা’ অনুষ্ঠিত হয়।</p><p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">গত বুধবার রাতে মক্কার পবিত্র হারাম শরিফে একটি বর্ণাঢ্য অনুষ্ঠানে চূড়ান্ত বিজয়ীদের মধ্যে তৃতীয় বিজয়ী হিসেবে তাকরিমের নাম ঘোষণা করা হয়। এ সময় তার হাতে এক লাখ রিয়াল (প্রায় সাড়ে ২৭ লাখ টাকা) পুরস্কার-সনদ ও সম্মাননা ক্রেস্ট তুলে দেওয়া হয়।</p><p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">পুরস্কার বিতরণ অনুষ্ঠানে সৌদি বাদশাহ সালমান বিন আব্দুল আজিজের প্রতিনিধি হিসেবে উপস্থিত ছিলেন, তার উপদেষ্টা ও মক্কা নগরীর গভর্নর খালেদ আল ফয়সাল বিন আবদুল আজিজ এবং দেশটির ইসলাম ও দাওয়াহবিষয়ক মন্ত্রী ড. আবদুল লতিফ বিন আবদুল আজিজ আলে শেখসহ গুরুত্বপূর্ণ ব্যক্তিবর্গ।</p><p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">কুরআন হিফজের বড় এই প্রতিযোগিতায় বিশ্বের ১১১ দেশের ১৫৩ জন হাফেজ অংশ নেয়। তাদের মধ্যে তাকরিম এই গৌরব অর্জন করল।</p><p style=\"margin-bottom: 10px; text-align: justify; font-size: 16px; line-height: 18px; color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif;\">সালেহ আহমাদ তাকরিম টাঙ্গাইলের নাগরপুর থানার ভাদ্রা গ্রামের হাফেজ আব্দুর রহমানের ছেলে। তিনি গুলশান সোসাইটি জামে মসজিদের খতিব মুফতি মুরতাজা হাসান ফয়েজী মাসুম প্রতিষ্ঠিত ‘মারকাযু ফয়জিল কুরআন আল ইসলামি ঢাকা’র হিফজ বিভাগের শিক্ষার্থী।</p><div><br></div>', 'Al quran', '15-11-2022', 'November', NULL, NULL),
(8, 22, 1, 'ভারতের কারাগারে ৩ জন বাংলাদেশী জেলে নিহত', 'ভারতের কারাগারে ৩ জন বাংলাদেশী জেলে নিহত', 'image/postimg/6373a7f756def.jpeg', '<p><span style=\"color: rgb(51, 51, 51); font-family: SolaimanLipi, arial, sans-serif; font-size: 14px;\">গত ১৯ আগস্ট হঠাৎ প্রলংকারী ঘূর্ণিঝড় ও জলোচ্ছাসের কবলে পড়ে বঙ্গোপসাগরে শত শত মাছ ধরার ট্রলার ডুবে যায়। এতে অগণিত জেলে আহত ও নিহত হন। অনেকেই ঝড়ের কবলে পড়ে ভারতীয় সমুদ্রসীমায় প্রবেশ করেন। অনেককে আবার ভারতীয় কোস্টগার্ড ও নৌবাহিনী উদ্ধার করে সেদেশের কারাগারে প্রেরণ করে। কারাগারে থাকা বাংলাদেশী জেলেদের মধ্যে ইতিমধ্যে ৩ জন নিহত হয়েছেন। অনেকেই গুরুতর অসুস্থ হয়ে পড়েছেন। কিন্তু পররাষ্ট্র মন্ত্রণালয় তাদেরকে ফিরিয়ে আনার কোন দৃশ্যমান উদ্যোগ এখনো গ্রহণ করেনি। এ অবস্থায় ভারতে আটকে পড়া জেলেদের অবিলম্বে দেশে ফিরিয়ে আনার দাবি জানিয়েছেন বাংলাদেশ ক্ষুদ্র মৎস্যজীবী জেলে সমিতির কেন্দ্রীয় সভাপতি</span><br></p>', 'Al quran', '15-11-2022', 'November', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yiguO0LSdFZ23AqQGVzb64mX1AspqgVd1s5yWdVR', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRmFXWHpod3JYcnZCUmpITkdTTHR5Q2F3aGJ2czJySXZ5dXA4WUZJVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGQtc2V0dGluZyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRhQzV3QWNkUEljNDd4dEJjdmVnM3RPZnVHUHVVMEhOdS53cDJLZFNORElPVjl2c2U4amxBbSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYUM1d0FjZFBJYzQ3eHRCY3ZlZzN0T2Z1R1B1VTBITnUud3AyS2RTTkRJT1Y5dnNlOGpsQW0iO30=', 1668531542);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yandex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `meta_title`, `meta_keyword`, `google_code`, `google_analytics`, `google_tag`, `yandex`, `bing`, `meta_des`, `created_at`, `updated_at`) VALUES
(1, 'dfydfh imrab', 'value=\"value=\"fghfghh\"\" Imtabnnn', 'fghfgh', 'fghfghf', 'fghfghh', 'fghfghfgh', 'fghfghfgh imran', 'ghfgh ghfgh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(11, 'mu.imran.abir@gmail.com', '01796459513', NULL, NULL),
(12, 'ds.kagoj@gmail.com', '01796459513', NULL, NULL),
(13, 'ds.kagoj@gmail.com', '01779912546', NULL, NULL),
(14, 'softacolor@gmail.com', '01779912546', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Imran', 'imran.isdb@gmail.com', NULL, '$2y$10$aC5wAcdPIc47xtBcveg3tOfuGPuU0HNu.wp2KdSNDIOV9vse8jlAm', NULL, NULL, 'rKaYwyxHWfqdUrl2qc7eqr4J348yKIe4z64svqIyjiUPJRLltHgieQ18w1jB', NULL, NULL, '2022-10-28 23:21:54', '2022-10-28 23:21:54'),
(2, 'Imran', 'mu.imran.abir@gmail.com', NULL, '$2y$10$n8s0YB2ii9d7fOc/pnKqM.0c87N0YwUUswVH7fY1haK92cIGNSQSa', NULL, NULL, NULL, NULL, NULL, '2022-10-29 01:19:51', '2022-10-29 01:19:51'),
(3, 'imran', 'imran@gmail.com', NULL, '$2y$10$n0YHUQk7T7OaDRCU.27Voe9VnhsuQUWCy/Jyp7/kqaqXCWmyueq5e', NULL, NULL, NULL, NULL, NULL, '2022-10-29 01:24:19', '2022-10-29 01:24:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
