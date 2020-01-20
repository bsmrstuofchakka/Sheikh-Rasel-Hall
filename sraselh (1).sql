-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2020 at 09:33 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sraselh`
--

-- --------------------------------------------------------

--
-- Table structure for table `barcode_models`
--

DROP TABLE IF EXISTS `barcode_models`;
CREATE TABLE IF NOT EXISTS `barcode_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bstudent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barcode_models_bstudent_id_unique` (`bstudent_id`),
  UNIQUE KEY `barcode_models_bcode_unique` (`bcode`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barcode_models`
--

INSERT INTO `barcode_models` (`id`, `bstudent_id`, `bcode`, `created_at`, `updated_at`) VALUES
(1, '20151201034', '4zajhkrsert', '2019-12-09 15:08:33', '2019-12-09 15:08:33'),
(2, '20151201047', '9hag12yetrahj', '2019-12-09 15:18:42', '2019-12-09 15:18:42'),
(3, '20151201027', 'uewknhdjkskjsh', '2019-12-09 15:20:16', '2019-12-09 15:34:38'),
(5, '20151201010', 'tiui532567889yhgf', '2019-12-09 19:43:02', '2019-12-09 19:43:02'),
(6, '20151201031', 'uueujuw89393jjd', '2019-12-10 03:25:36', '2019-12-10 03:25:36'),
(7, '20151201028', 'jdkkkei83943jjf', '2019-12-10 03:26:07', '2019-12-10 03:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
CREATE TABLE IF NOT EXISTS `meals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morning_meal_quantity` smallint(6) NOT NULL,
  `launch_meal_quantity` smallint(6) NOT NULL,
  `dinner_meal_quantity` smallint(6) NOT NULL,
  `cost` double NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2014_10_12_000000_create_users_table', 4),
(27, '2014_10_12_100000_create_password_resets_table', 4),
(28, '2019_09_07_163341_create_profile_models_table', 4),
(9, '2019_12_09_195655_create_barcode_models_table', 2),
(10, '2019_12_09_222014_create_security_models_table', 3),
(29, '2019_12_01_232843_create_meals_table', 4),
(30, '2019_12_03_114130_create_report_models_table', 4),
(31, '2019_12_09_203249_create_token_sells_table', 4),
(32, '2020_01_02_005049_create_notice_models_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notice_models`
--

DROP TABLE IF EXISTS `notice_models`;
CREATE TABLE IF NOT EXISTS `notice_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nfile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_models`
--

INSERT INTO `notice_models` (`id`, `ntitle`, `nfile`, `created_at`, `updated_at`) VALUES
(1, 'Hall Admitted', 'Notice//SxAKClPYjkEeaOqo6efLn7wMknUax5O373qnwh3W.pdf', '2020-01-02 18:17:57', '2020-01-02 18:17:57'),
(2, 'Hall Alotment', 'Notice//dMZEsy8ztWDT84NCZdVqDFhtlYGpjLygy8DX2ceA.jpeg', '2020-01-02 18:18:10', '2020-01-02 18:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_models`
--

DROP TABLE IF EXISTS `profile_models`;
CREATE TABLE IF NOT EXISTS `profile_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctactnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_models`
--

INSERT INTO `profile_models` (`id`, `login_id`, `ctactnumber`, `guarnumber`, `created_at`, `updated_at`) VALUES
(1, '20151201034', '01515640087', '01939685059', '2020-01-02 17:44:47', '2020-01-02 17:44:47'),
(2, '20151201057', '01829947637', '01701310878', '2020-01-02 17:48:20', '2020-01-02 17:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `report_models`
--

DROP TABLE IF EXISTS `report_models`;
CREATE TABLE IF NOT EXISTS `report_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rstudent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcontent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_models`
--

INSERT INTO `report_models` (`id`, `rstudent_id`, `rtitle`, `rcontent`, `rfile`, `created_at`, `updated_at`) VALUES
(1, '20151201057', 'Why do we use it?', 'The Monty Hall problem is a counter-intuitive statistics puzzle:\r\n\r\nThere are 3 doors, behind which are two goats and a car.\r\nYou pick a door (call it door A). You’re hoping for the car of course.\r\nMonty Hall, the game show host, examines the other doors (B & C) and opens one with a goat. (If both doors have goats, he picks randomly.)\r\nHere’s the game: Do you stick with door A (original guess) or switch to the unopened door? Does it matter?', 'Report//nWxD6zM3FNCPAfPZSW2bGZRVsDKVdJLHBxg53o6W.pdf', '2020-01-02 18:22:13', '2020-01-02 18:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `security_models`
--

DROP TABLE IF EXISTS `security_models`;
CREATE TABLE IF NOT EXISTS `security_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `barcodeNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `security_models`
--

INSERT INTO `security_models` (`id`, `barcodeNumber`, `currentDate`, `created_at`, `updated_at`) VALUES
(1, '4zajhkrsert', '2019-12-10', '2019-12-09 19:11:05', '2019-12-09 19:11:05'),
(2, 'uewknhdjkskjsh', '2019-12-10', '2019-12-09 19:12:03', '2019-12-09 19:12:03'),
(3, '9hag12yetrahj', '2019-12-10', '2019-12-09 19:12:13', '2019-12-09 19:12:13'),
(4, '9hag12yetrahjhhdjjd', '2019-12-10', '2019-12-09 19:12:24', '2019-12-09 19:12:24'),
(5, 'hsjkweklldkskkd', '2019-12-10', '2019-12-10 03:26:39', '2019-12-10 03:26:39'),
(7, '737hdhjejjkkekkr', '2019-12-10', '2019-12-10 03:55:55', '2019-12-10 03:55:55'),
(8, '9hag12yetrahjhhdjjd', '2019-12-15', '2019-12-15 12:25:16', '2019-12-15 12:25:16'),
(9, 'sttyuii67788', '2019-12-15', '2019-12-15 12:25:26', '2019-12-15 12:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `token_sells`
--

DROP TABLE IF EXISTS `token_sells`;
CREATE TABLE IF NOT EXISTS `token_sells` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` smallint(6) NOT NULL,
  `morning_meal_cost` double NOT NULL,
  `launch_meal_cost` double NOT NULL,
  `dinner_meal_cost` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `token_sells`
--

INSERT INTO `token_sells` (`id`, `status`, `morning_meal_cost`, `launch_meal_cost`, `dinner_meal_cost`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, '2019-12-31 18:00:00', '2020-01-02 19:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `userType` tinyint(1) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roomno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearSem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` text COLLATE utf8mb4_unicode_ci,
  `cnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guarcontact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_student_id_unique` (`student_id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `username`, `email`, `password`, `amount`, `userType`, `name`, `roomno`, `bedno`, `department`, `ses`, `yearSem`, `fname`, `mname`, `address`, `birth_date`, `cnumber`, `guarcontact`, `blood_group`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@test.com', '$2y$10$46Y2SPvnA.GIejLuevj5Q.x/oHV8.nAcv/pMNC6wWZ3Cjjq3iw9A2', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'IfPi7RZrbzVSgIfWaSL8s5JcmNpkL97Mpm9JWpdj37cG5ErgsrDgAtvDEiV1', '2019-12-31 18:00:00', '2019-12-31 18:00:00'),
(2, '20151201034', 'murad087', 'muradmd312@gmail.com', '$2y$10$bGamP3gC4DX8w2u8Fb2tQuAxcc609wTdW6gazFRY5PfzgnsqutelW', 0, 1, 'Md Murad Hossain', '404', '5', 'CSE', '2015-16', '4th/2nd', 'Md. Sirajul Islam', 'Amena Khatun', 'Jashore, Manirampur, Kuada Bazar, Dhonar', '04-10-1998', '01515640087', '01939685059', 'B+', '5e0e31a31eea1.JPG', '6dko3skmTHkxoSyrM2tyXyGo5kKOWuA2kQdunQoGXwOK9qhXzxCcLad0QaYV', '2020-01-02 18:08:35', '2020-01-02 19:06:52'),
(3, '20151201057', 'pallab47', 'pallab312@gmail.com', '$2y$10$OErmB1srdgb/JJXsccjN7e8t0762lQcWcC5rphItxEpxn.H99pitK', 0, 0, 'Syed Pallab', '403', '1', 'Finance', '2011-12', '2nd/ 2nd semester', 'Abdul Khaled', 'Razia Khatun', 'Khulna, Terokhada, Terokhada, Terokhada', '23-05-1995', '01829947637', '01701310878', 'A+', '5e0e3288cb8b7.jpeg', 'R8L5mKhShTrBSc0sUQK9VQbmvbGOxPGwmheywvdsFEyi91AbCSQeaUc91JQS', '2020-01-02 18:12:24', '2020-01-02 18:12:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
