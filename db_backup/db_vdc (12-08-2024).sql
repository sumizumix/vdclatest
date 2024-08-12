-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2024 at 04:56 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `email` text,
  `gender` text,
  `prescription` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

DROP TABLE IF EXISTS `award`;
CREATE TABLE IF NOT EXISTS `award` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `name`, `description`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(3, 'award', 'award', 'seo tiitle', 'werh', '2024-06-01 03:54:44', '2024-06-01 03:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookpackage`
--

DROP TABLE IF EXISTS `bookpackage`;
CREATE TABLE IF NOT EXISTS `bookpackage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` text,
  `name` text,
  `phone` text,
  `email` text,
  `status` text,
  `created_at` text,
  `updated_at` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookpackage`
--

INSERT INTO `bookpackage` (`id`, `product_name`, `name`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(6, 'PACKAGE -2(ADVANCED BASIC)', 'test', '89211862894', 'soniyacn62@gmail.com', 'approved', '2024-05-22 05:23:38', '2024-05-22 05:23:42'),
(5, 'PACKAGE -3(WELL WOMAN)', 'Dr.K K Manojan', '8921186289', 'govindr.logiprompt@gmail.com', 'rejected', '2024-05-22 05:10:10', '2024-05-22 05:30:06'),
(7, 'PACKAGE -2(ADVANCED BASIC)', 'test', '857496321', 'govindr.logiprompt@gmail.com', NULL, '2024-05-23 09:15:41', '2024-05-23 09:15:41'),
(8, 'PACKAGE-1 (BASIC PACKAGE)', 'test logiprompt', '9876543210', 'vishnuvijayan.logiprompt@gmail.com', NULL, '2024-05-30 11:22:41', '2024-05-30 11:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `booksamplecollection`
--

DROP TABLE IF EXISTS `booksamplecollection`;
CREATE TABLE IF NOT EXISTS `booksamplecollection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `address` text,
  `package` text,
  `test` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` text,
  `status` text,
  `userid` int DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `age` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booksamplecollection`
--

INSERT INTO `booksamplecollection` (`id`, `name`, `phone`, `address`, `package`, `test`, `created_at`, `updated_at`, `email`, `status`, `userid`, `image`, `age`) VALUES
(40, 'test1', '9605347997', 'test2', 'Package-2(Basic Package),Package-6(advanced Healthyman )', 'TC/DC', '2024-07-31 04:56:46', '2024-07-31 04:56:46', 'sumizumix88@gmail.com', NULL, 17, NULL, '12'),
(38, 'SDFGH', '123456789123456789023456789', 'SDFGHJ', 'Package-2(Basic Package)', 'TC/DC', '2024-07-31 04:38:25', '2024-07-31 04:38:25', 'ASDFGHJ', NULL, 17, NULL, '1234567890-098765234567890-'),
(37, 'ASDFG', '096', 'DFQWERTYU', 'Package-2(Basic Package),Package -3(Well Woman)', 'TC/DC,HB', '2024-07-31 04:36:17', '2024-07-31 04:36:17', 'ASDFV', NULL, 17, NULL, '12'),
(35, 'sumi', '09605347997', 'pullipachayil veedu aroor', 'Package-2(Basic Package)', 'HB,MP(Card Test)', '2024-07-31 01:34:25', '2024-07-31 01:34:25', 'admin@gmail.com', NULL, 17, NULL, '123'),
(36, 'HB', '8695420707', 'a', 'Package -3(Well Woman)', 'PCV', '2024-07-31 01:35:22', '2024-07-31 01:35:22', 'ammu@gmail.com', NULL, 17, NULL, '54'),
(34, 'xox', '1234567891', 'pullipachayil veedu aroor', 'Package -5 (Healthyman),Package-6(advanced Healthyman )', 'HB,ESR', '2024-07-31 01:32:49', '2024-07-31 01:32:49', 'sumizumix88@gmail.com', NULL, 8, NULL, '22'),
(39, 'SDFGH', '123456789123456789023456789', 'SDFGHJ', 'Package-2(Basic Package)', 'TC/DC', '2024-07-31 04:38:25', '2024-07-31 04:38:25', 'ASDFGHJ', NULL, 17, NULL, '1234567890-098765234567890-'),
(41, 'test', '09605347997', 'test2', 'Package -3(Well Women)', 'TC/DC', '2024-08-01 00:04:47', '2024-08-01 00:04:47', 'admin@gmail.com', NULL, 17, NULL, '123'),
(42, 'test1', '09605347997', 'test2', 'Package -3(Well Women)', 'HB', '2024-08-01 00:06:11', '2024-08-01 00:06:11', 'sumizumix88@gmail.com', NULL, 17, NULL, '123'),
(43, 'test', '8695420707', 'df', 'Package-2(Basic Package)', NULL, '2024-08-01 00:08:54', '2024-08-01 00:08:54', 'admin@gmail.com', NULL, 17, NULL, '54'),
(44, 'test1', '09605347997', 'car2', NULL, 'TC/DC', '2024-08-01 00:09:11', '2024-08-01 00:09:11', 'sumizumix88@gmail.com', NULL, 17, NULL, '123');

-- --------------------------------------------------------

--
-- Table structure for table `callback`
--

DROP TABLE IF EXISTS `callback`;
CREATE TABLE IF NOT EXISTS `callback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `callback`
--

INSERT INTO `callback` (`id`, `name`, `phone`, `email`, `updated_at`, `created_at`) VALUES
(1, 'sumi@gmail.com', '09605347997', 'sumi@gmail.com', '2024-05-29 04:44:17', '2024-05-29 04:44:17'),
(2, 'moby', '7293925399', 'mobydanphilip@gmail.com', '2024-06-17 02:16:55', '2024-06-17 02:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'pending',
  `paystatus` int DEFAULT '0',
  `razorid` text,
  `type` text COMMENT 'package,test',
  `method` text,
  `amount` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`, `status`, `paystatus`, `razorid`, `type`, `method`, `amount`) VALUES
(57, 17, 15, 1, '2024-08-09 23:12:55', '2024-08-09 23:12:55', 'approved', 1, '66b6efdc704d3', 'package', NULL, NULL),
(55, 17, 197, 1, '2024-08-09 23:07:50', '2024-08-09 23:07:50', 'approved', 1, '66b6eed054fe9', 'test', NULL, NULL),
(54, 17, 198, 1, '2024-08-09 23:07:48', '2024-08-09 23:07:48', 'approved', 1, '66b6eed054fe9', 'test', NULL, NULL),
(53, 17, 198, 1, '2024-08-09 23:07:47', '2024-08-09 23:07:47', 'approved', 1, '66b6eed054fe9', 'test', NULL, NULL),
(52, 17, 199, 1, '2024-08-09 23:07:45', '2024-08-09 23:07:45', 'approved', 1, '66b6eed054fe9', 'test', NULL, NULL),
(51, 17, 17, 1, '2024-08-09 23:07:27', '2024-08-09 23:07:27', 'approved', 1, '66b6eed054fe9', 'package', NULL, NULL),
(50, 17, 16, 1, '2024-08-09 23:07:23', '2024-08-09 23:07:23', 'approved', 1, '66b6eed054fe9', 'package', NULL, NULL),
(45, 17, 15, 1, '2024-08-09 23:07:17', '2024-08-09 23:07:17', 'approved', 1, '66b6eed054fe9', 'package', NULL, NULL),
(46, 17, 14, 1, '2024-08-09 23:07:19', '2024-08-09 23:07:19', 'approved', 1, '66b6eed054fe9', 'package', NULL, NULL),
(48, 17, 16, 1, '2024-08-09 23:07:23', '2024-08-09 23:07:23', 'approved', 1, '66b6eed054fe9', 'package', NULL, NULL),
(44, 17, 196, 1, '2024-08-09 23:04:43', '2024-08-09 23:04:43', 'approved', 1, '66b6ee00debcf', 'test', NULL, NULL),
(43, 17, 197, 1, '2024-08-09 23:04:38', '2024-08-09 23:04:38', 'approved', 1, '66b6ee00debcf', 'test', NULL, NULL),
(41, 17, 199, 1, '2024-08-09 23:04:34', '2024-08-09 23:04:34', 'approved', 1, '66b6ee00debcf', 'test', NULL, NULL),
(42, 17, 198, 1, '2024-08-09 23:04:36', '2024-08-09 23:04:36', 'approved', 1, '66b6ee00debcf', 'test', NULL, NULL),
(40, 17, 19, 1, '2024-08-09 03:42:29', '2024-08-09 03:42:29', 'approved', 1, '66b5dd82c71f8', 'package', NULL, NULL),
(39, 17, 18, 1, '2024-08-09 03:42:25', '2024-08-09 03:42:25', 'approved', 1, '66b5dd82c71f8', 'package', NULL, NULL),
(35, 17, 198, 1, '2024-08-09 03:40:49', '2024-08-09 03:40:49', 'approved', 1, '66b5dd31b5086', 'test', NULL, NULL),
(38, 17, 15, 1, '2024-08-09 03:42:20', '2024-08-09 03:42:20', 'approved', 1, '66b5dd82c71f8', 'package', NULL, NULL),
(37, 17, 194, 1, '2024-08-09 03:40:57', '2024-08-09 03:40:57', 'approved', 1, '66b5dd31b5086', 'test', NULL, NULL),
(36, 17, 197, 1, '2024-08-09 03:40:53', '2024-08-09 03:40:53', 'approved', 1, '66b5dd31b5086', 'test', NULL, NULL),
(34, 17, 199, 1, '2024-08-09 03:40:46', '2024-08-09 03:40:46', 'approved', 1, '66b5dd31b5086', 'test', NULL, NULL),
(58, 17, 15, 1, '2024-08-09 23:12:56', '2024-08-09 23:12:56', 'approved', 1, '66b6efdc704d3', 'package', NULL, NULL),
(59, 17, 14, 1, '2024-08-09 23:13:00', '2024-08-09 23:13:00', 'approved', 1, '66b6efdc704d3', 'package', NULL, NULL),
(60, 17, 15, 1, '2024-08-09 23:51:50', '2024-08-09 23:51:50', 'approved', 0, NULL, 'package', NULL, NULL),
(61, 17, 18, 1, '2024-08-09 23:51:56', '2024-08-09 23:51:56', 'approved', 0, NULL, 'package', NULL, NULL),
(62, 17, 19, 1, '2024-08-09 23:52:03', '2024-08-09 23:52:03', 'approved', 0, NULL, 'package', NULL, NULL),
(63, 17, 198, 1, '2024-08-09 23:52:25', '2024-08-09 23:52:25', 'approved', 0, NULL, 'test', NULL, NULL),
(64, 17, 195, 1, '2024-08-09 23:52:29', '2024-08-09 23:52:29', 'approved', 0, NULL, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

DROP TABLE IF EXISTS `center`;
CREATE TABLE IF NOT EXISTS `center` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text,
  `time` text,
  `mapcode` text,
  `maplink` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seotitle` text,
  `seodescription` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `name`, `email`, `location`, `phone`, `address`, `time`, `mapcode`, `maplink`, `created_at`, `updated_at`, `seotitle`, `seodescription`) VALUES
(1, 'center1', 'center1@gmail.com', 'center1 kochi', '8129641262', 'kochi', '6:00 am to 8:00 pm', '<iframe                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31525.343838522484!2d76.74273660558772!3d9.002666940206117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b060ba986c7134f%3A0xf1f4ecd7f3cf5149!2sKottarakkara%2C%20Kerala!5e0!3m2!1sen!2sin!4v1717334876531!5m2!1sen!2sin\"                             width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                             referrerpolicy=\"no-referrer-when-downgrade\">                         </iframe>', 'https://maps.app.goo.gl/hnGX1ZbGVA54nXor9', '2024-05-31 05:45:52', '2024-07-24 03:00:25', 'center', 'center'),
(4, 'Center2', 'Center2@gmail.com', 'Center2 kollam', '9605347997', 'kollam', '4:00am to 4 pm', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341.3313604513387!2d76.87556220800617!3d8.557934081400521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06083393c69511%3A0x6ec7f808c9191914!2sLogiprompt%20Techno%20Solutions%20India%20P(Ltd)!5e0!3m2!1sen!2sin!4v1721810986670!5m2!1sen!2sin\" width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://maps.app.goo.gl/1NT7iiBEvtfapSvUA', '2024-07-24 02:24:29', '2024-07-24 03:20:03', 'TETS', 'RESTDYFG'),
(5, 'center 3', 'center3@gmail.com', '	\r\ncenter 3 tvm', '08129641262', 'tvm', '6:00 am to 8:00 pm', '<iframe                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31525.343838522484!2d76.74273660558772!3d9.002666940206117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b060ba986c7134f%3A0xf1f4ecd7f3cf5149!2sKottarakkara%2C%20Kerala!5e0!3m2!1sen!2sin!4v1717334876531!5m2!1sen!2sin\"                             width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                             referrerpolicy=\"no-referrer-when-downgrade\">                         </iframe>', 'https://maps.app.goo.gl/hnGX1ZbGVA54nXor9', '2024-07-24 03:09:52', '2024-07-24 03:10:52', 'TETS', 'asdfghjk'),
(7, 'center 4', 'center4@gmail.com', '	\r\ncenter 4 tvm', '08129641262', 'tvm', '6:00 am to 8:00 pm', '<iframe                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31525.343838522484!2d76.74273660558772!3d9.002666940206117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b060ba986c7134f%3A0xf1f4ecd7f3cf5149!2sKottarakkara%2C%20Kerala!5e0!3m2!1sen!2sin!4v1717334876531!5m2!1sen!2sin\"                             width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                             referrerpolicy=\"no-referrer-when-downgrade\">                         </iframe>', 'https://maps.app.goo.gl/hnGX1ZbGVA54nXor9', '2024-07-24 03:09:52', '2024-07-24 03:10:52', 'TETS', 'asdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `ctscan`
--

DROP TABLE IF EXISTS `ctscan`;
CREATE TABLE IF NOT EXISTS `ctscan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_name` text,
  `phone` text,
  `email` text,
  `date` varchar(10) DEFAULT NULL,
  `additional` text,
  `status` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ctscan`
--

INSERT INTO `ctscan` (`id`, `patient_name`, `phone`, `email`, `date`, `additional`, `status`, `created_at`, `updated_at`) VALUES
(8, 'AmandaPeenemok3', '84755895659', 'amandaToofTrokb@gmail.com', NULL, 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?eneva', NULL, '2024-07-03 10:26:09', '2024-07-03 10:26:09'),
(9, '1234', '8129641262', 'admin@gmail.com', NULL, 'xdcfvghjk', NULL, '2024-07-31 03:18:10', '2024-07-31 03:18:10'),
(10, 'sumiya.s', '8129641262', 'sumizumix88@gmail.com', '2024-07-09', 'asdfghjk', NULL, '2024-07-31 03:19:42', '2024-07-31 03:19:42'),
(11, 'sumiya.s', '09605347997', 'sumizumix88@gmail.com', '2024-07-03', 'asdfgh', NULL, '2024-07-31 03:31:05', '2024-07-31 03:31:05'),
(12, 'sumiya.s', '09605347997', '.sumizumix88@gmail.com', '2024-07-05', 'sdfghjk', NULL, '2024-07-31 03:31:26', '2024-07-31 03:31:26'),
(13, 'sumiya.s', '09605347997', '123@gmail.com', '2024-07-02', 'ASDFGHJK', NULL, '2024-07-31 03:35:46', '2024-07-31 03:35:46'),
(14, 'sumiya.s', '8921186289', 'sumizumix88@gmail.com', NULL, 'sdfghj', NULL, '2024-07-31 03:37:44', '2024-07-31 03:37:44'),
(15, 'sumiya.s', '09605347997', 'sumizumix88@gmail.com', '2024-07-03', 'zdfgh', NULL, '2024-07-31 03:44:39', '2024-07-31 03:44:39'),
(16, 'sumiya', '09605347997', 'sumizumix88@gmail.com', '2024-07-04', 'asdfghjkl', NULL, '2024-07-31 04:22:56', '2024-07-31 04:22:56'),
(17, 'sumiya.s', '09605347997', 'sumizumix88@gmail.com', '2024-08-10', 'abc def ghi', NULL, '2024-08-08 23:13:30', '2024-08-08 23:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seotitle` text,
  `seodescription` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `seotitle`, `seodescription`) VALUES
(5, 'HAEMATOLOGY', 'A hematologist is a medical professional who specializes in the diagnosis and treatment of disorders of the blood, bone marrow, and lymphatic systems. These disorders may include anemia, leukemia, lymphoma, among others.', 'HAEMATOLOGY.jpg', '2024-05-28 06:33:10', '2024-05-29 01:11:35', NULL, NULL),
(3, 'BIOCHEMISTRY', 'The Department of Biochemistry, one of the most vibrant and premiere biochemistry departments in the country, was established in the year 1983. One ,.', 'bio.jpg', '2024-05-28 06:26:33', '2024-05-29 01:28:04', NULL, NULL),
(4, 'HORMONES', 'Hormones are chemicals that coordinate different functions in your body by carrying messages through your blood to your organs, skin, muscles and other tissues. These signals tell your body what to do and when to do it.', 'HORMONES.jpg', '2024-05-28 06:28:09', '2024-05-28 06:31:05', NULL, NULL),
(6, 'MICROBIOLOGY', 'Microbiology, study of microorganisms, or microbes, a diverse group of generally minute simple life-forms that include bacteria, archaea, algae, fungi, protozoa, and viruses..', 'MICROBIOLOGY.jpg', '2024-05-28 06:36:52', '2024-05-28 06:36:52', NULL, NULL),
(7, 'GENETICS', 'Genetics is a field of biology that studies how traits are passed from parents to their offspring. This introduction to genetics takes you through the basic components of genetics such as DNA, genes, chromosomes and genetic inheritance.', 'GENETICS.jpg', '2024-05-28 06:40:47', '2024-05-28 06:40:47', NULL, NULL),
(8, 'IMAGING &RADIOLOGY', 'Radiology is the field of medicine that uses imaging techniques such as X-rays to diagnose, characterize, or monitor disease. Medical doctors who specialize in radiology are called radiologists', 'IMAGING &RADIOLOGY.jpg', '2024-05-28 06:42:31', '2024-05-28 06:42:31', NULL, NULL),
(9, 'HISTOPATHOLOGY', 'A histopathology report describes the findings of a specialist known as a medical pathologist.it is a branch of pathology which deals with the\r\nstudy of disease in a tissue section', 'HISTOPATHOLOGY.jpg', '2024-05-28 06:46:06', '2024-05-28 06:46:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `designation` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seotitle` text,
  `seodescription` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`, `seotitle`, `seodescription`) VALUES
(2, 'test', 'Vice Chairman', 'doctor-1.jpg', '2024-05-20 00:25:32', '2024-05-20 00:25:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `comment` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(55, 'archa', 'archaas040@gmail.com', 'good service', '2024-07-23 00:56:55', '2024-07-23 00:56:55'),
(58, 'Search Engine Index', 'maygar.dyan56@msn.com', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregister.info/', '2024-07-24 07:59:16', '2024-07-24 07:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `address` text,
  `phone` text,
  `image` text,
  `website` text,
  `mapcode` text,
  `maplink` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` text,
  `updated_at` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `address`, `phone`, `image`, `website`, `mapcode`, `maplink`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(8, 'vdc hospital ', 'Near Vijaya Jubilee Hospital, Pulamon, Kottarakkara', '+91 7034031188', 'hospital-1721734406.jpg', 'info@vijayadiagnosticcentre.com', '<iframe                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31525.343838522484!2d76.74273660558772!3d9.002666940206117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b060ba986c7134f%3A0xf1f4ecd7f3cf5149!2sKottarakkara%2C%20Kerala!5e0!3m2!1sen!2sin!4v1717334876531!5m2!1sen!2sin\"                             width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                             referrerpolicy=\"no-referrer-when-downgrade\">                         </iframe>', 'https://maps.app.goo.gl/hnGX1ZbGVA54nXor9', 'fswdf', 'fsw', '2024-07-23 06:07:35', '2024-07-23 11:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `locationitem`
--

DROP TABLE IF EXISTS `locationitem`;
CREATE TABLE IF NOT EXISTS `locationitem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address` text,
  `phone` text,
  `email` text,
  `labname` text,
  `time` text,
  `place` text,
  `mapcode` text,
  `maplink` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `locationitem`
--

INSERT INTO `locationitem` (`id`, `address`, `phone`, `email`, `labname`, `time`, `place`, `mapcode`, `maplink`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(8, 'Near Vijaya Jubilee Hospital, Pulamon, Kottarakkara', '+91 7034031188 /  7034031199', 'info@vijayadiagnosticcentre.com', 'Vijaya Diagnostic Center', '8:00 AM to 6:00PM', 'Kottarakkara', '<iframe                    src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31525.343838522484!2d76.74273660558772!3d9.002666940206117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b060ba986c7134f%3A0xf1f4ecd7f3cf5149!2sKottarakkara%2C%20Kerala!5e0!3m2!1sen!2sin!4v1717334876531!5m2!1sen!2sin\"                             width=\"100%\" height=\"220\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"                             referrerpolicy=\"no-referrer-when-downgrade\">                         </iframe>', 'https://maps.app.goo.gl/hnGX1ZbGVA54nXor9', 'kotatrakk', 'ccf', '2024-06-02 23:28:22', '2024-06-03 11:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_27_113721_add_status_to_cart_table', 2),
(6, '2024_05_28_100116_create_department', 3),
(7, '2024_05_28_115015_modify_description_in_department_table', 4),
(8, '2024_05_31_102650_create_center', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pageaboutitem`
--

DROP TABLE IF EXISTS `pageaboutitem`;
CREATE TABLE IF NOT EXISTS `pageaboutitem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `vision` text,
  `mission` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pageaboutitem`
--

INSERT INTO `pageaboutitem` (`id`, `name`, `description`, `vision`, `mission`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Find peace of mind with our leading diagnostic labs, renowned for their reliability and expertise.', 'Our vision is to be the most trusted and preferred diagnostic center, recognized for our excellence and innovation in diagnostic services. We strive to continuously improve and expand our offerings, embracing new technologies and methodologies to meet the evolving needs of patients and healthcare professionals. Our goal is to contribute significantly to the healthcare industry by setting benchmarks in quality, reliability, and patient satisfaction.\n\n\n\n\n\n\n', 'Our mission at Vijay Diagnostic Centre is to provide accurate, timely, and reliable diagnostic services to enhance patient care. We are committed to leveraging advanced technology and employing skilled professionals to ensure the highest standards of quality and precision in our diagnostics. By maintaining a patient-centric approach, we aim to support healthcare providers in making informed decisions and improve overall health outcomes.', 'seo title', 'seo description', NULL, '2024-08-01 03:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_payment_id` text,
  `signature` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `currency` text,
  `user_email` text,
  `amount` text,
  `json_response` text,
  `userid` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `r_payment_id`, `signature`, `currency`, `user_email`, `amount`, `json_response`, `userid`, `created_at`, `updated_at`) VALUES
(1, '66b47cb3c2808', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 02:37:45', '2024-08-08 02:37:45'),
(2, '66b482464ab90', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 03:01:29', '2024-08-08 03:01:29'),
(3, '66b482b1da0c8', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 03:03:41', '2024-08-08 03:03:41'),
(4, '66b48406997aa', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 03:09:02', '2024-08-08 03:09:02'),
(5, '66b484d2b9edd', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 03:12:26', '2024-08-08 03:12:26'),
(6, '66b484d2b9edd', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 03:13:56', '2024-08-08 03:13:56'),
(7, '66b484d2b9edd', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 03:48:41', '2024-08-08 03:48:41'),
(8, '66b484d2b9edd', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:20:17', '2024-08-08 04:20:17'),
(9, '66b495049c61f', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:21:28', '2024-08-08 04:21:28'),
(10, '66b495049c61f', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:22:45', '2024-08-08 04:22:45'),
(11, '66b495cd5e305', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:24:48', '2024-08-08 04:24:48'),
(12, '66b49657f0f95', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:27:10', '2024-08-08 04:27:10'),
(13, '66b499c1a2033', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:42:18', '2024-08-08 04:42:18'),
(14, '66b49c740ffde', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 04:53:45', '2024-08-08 04:53:45'),
(15, '66b49e16998bd', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-08 05:00:42', '2024-08-08 05:00:42'),
(16, '66b5d7ce32550', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 03:22:32', '2024-08-09 03:22:32'),
(17, '66b5d946961ae', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 03:25:32', '2024-08-09 03:25:32'),
(18, '66b5da13ab6c5', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 03:28:44', '2024-08-09 03:28:44'),
(19, '66b5da9846ac8', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 03:30:56', '2024-08-09 03:30:56'),
(20, '66b5dd31b5086', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 03:42:03', '2024-08-09 03:42:03'),
(21, '66b5dd82c71f8', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 03:43:22', '2024-08-09 03:43:22'),
(22, '66b6ee00debcf', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 23:06:29', '2024-08-09 23:06:29'),
(23, '66b6eed054fe9', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 23:09:17', '2024-08-09 23:09:17'),
(24, '66b6efdc704d3', NULL, NULL, NULL, NULL, NULL, 17, '2024-08-09 23:13:49', '2024-08-09 23:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `prescription` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `name`, `phone`, `prescription`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(4, 'Dr.K K Manojan', '8921186289', 'prescription-1.jpg', NULL, NULL, '2024-05-21 04:10:19', '2024-05-21 04:10:19'),
(5, 'Govind R', '7894561230', 'prescription-2.jpg', NULL, NULL, '2024-05-31 02:02:49', '2024-05-31 02:02:49'),
(10, 'testdata', '963857412', 'prescription-7.jpg', NULL, NULL, '2024-05-31 02:23:10', '2024-05-31 02:23:10'),
(11, 'testdata', '963857412', 'prescription-8.jpg', NULL, NULL, '2024-05-31 02:24:46', '2024-05-31 02:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `image` text,
  `price` text,
  `parameter` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seotitle` text,
  `seodescription` text,
  `noparameter` text,
  `prerequisite` text,
  `reporttime` text,
  `slug` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image`, `price`, `parameter`, `created_at`, `updated_at`, `seotitle`, `seodescription`, `noparameter`, `prerequisite`, `reporttime`, `slug`) VALUES
(15, 'Package -1(Advanced Basic)', 'CBC,FBS,LIPID PROFILE,LIVER FUNCTION TEST,TSH,RFT,RHEUMATOID FACTORA(RF),URINE ANALYSIS,25-HYDROXY VITAMIN D,ELECTROLYTES,PHYSICAL EXAMINATION', 'package-2.jpg', '2500', 'CBC,FBS,LIPID PROFILE,LIVER FUNCTION TEST,TSH,RFT,RHEUMATOID FACTORA(RF),URINE ANALYSIS,25-HYDROXY VITAMIN D,ELECTROLYTES,PHYSICAL EXAMINATION', '2024-05-20 06:22:54', '2024-05-31 03:18:56', NULL, NULL, NULL, NULL, NULL, 'package-1-advanced-basic'),
(14, 'Package-2(Basic Package)', 'CBC,FBS,LIPID PROFILE,LIVER FUNCTION TEST,RFT OR TFT,PHYSICAL EXAMINATION', 'package-1.jpg', '1200', 'CBC,FBS,LIPID PROFILE,LIVER FUNCTION TEST,RFT OR TFT,PHYSICAL EXAMINATION', '2024-05-20 06:21:04', '2024-05-31 03:19:12', NULL, NULL, NULL, NULL, NULL, 'package-2-basic-package'),
(16, 'Package -3(Well Women)', 'CBC\nFBS\nHBA1C\nLIPID PROFILE\nLIVER FUNCTION TEST\nTHYROID FUNCTION TEST\nRFT\nURINE RE\nCALCIUM\nPHYSICAL EXAMINATION', 'women1.jpg', '1900', 'CBC,\nFBS,\nHBA1C,\nLIPID PROFILE,\nLIVER FUNCTION TEST,\nTHYROID FUNCTION TEST,\nRFT,\nURINE RE,\nCALCIUM,\nPHYSICAL EXAMINATION', '2024-05-20 06:25:45', '2024-05-20 06:25:45', NULL, NULL, NULL, NULL, NULL, 'package-3-well-woman'),
(17, 'Package-4(Well Women 2)', 'CBC\nFBS\nHBA1C\nLIPID PROFILE\nFT3,FT4,TSH\nRFT\nSODIUM,POTTASSIUM\nURINERE\nVITAMIN D\nIRON\nPACKAGE-1 (BASIC PACKAGE)\nPACKAGE -2(ADVANCED BASIC)\nPACKAGE -3(WELL WOMAN)\nPACKAGE-4( WELL WOMWN 2)\nCALCIUM\nPHOSPHORUS\nPHYSICAL EXAMINATION', 'women2.jpg', '3500', 'CBC,\nFBS,\nHBA1C,\nLIPID PROFILE,\nFT3,FT4,TSH\nRFT,\nSODIUM,POTTASSIUM\nURINERE,\nVITAMIN D,\nIRON,\nPACKAGE-1 (BASIC PACKAGE),\nPACKAGE -2(ADVANCED BASIC),\nPACKAGE -3(WELL WOMAN),\nPACKAGE-4( WELL WOMWN 2),\nCALCIUM,\nPHOSPHORUS,\nPHYSICAL EXAMINATION', '2024-05-20 06:27:24', '2024-05-20 06:27:24', NULL, NULL, NULL, NULL, NULL, 'package-4-well-women-2'),
(18, 'Package -5 (Healthyman)', 'CBC\nFBS\nHBA1C\nLIPID PROFILE\nLIVER FUNCTION TEST\nTSH\nPSA\nRFT\nURINE RE\nPHYSICAL EXAMINATION', 'package-5.jpg', '2100', 'CBC,FBS,\nHBA1C,\nLIPID PROFILE,\nLIVER FUNCTION TEST,\nTSH,\nPSA,\nRFT,\nURINE RE,\nPHYSICAL EXAMINATION', '2024-05-20 06:29:29', '2024-05-20 06:29:29', NULL, NULL, NULL, NULL, NULL, 'package-5-healthyman'),
(19, 'Package-6(Advanced Healthyman )', 'CBC\nFBS\nHBA1C\nLIPID PROFILE\nLIVER FUNCTION TEST\nTFT\nPSA\nRFT\nURINE RE\nVITAMIN D\nIRON\nCALCIUM\nPHOSPHORUS\nPHYSICAL EXAMINATION', 'healthy1.jpg', '3460', 'CBC,\nFBS,\nHBA1C,\nLIPID ,PROFILE\nLIVER FUNCTION ,TEST\nTFT,\nPSA,\nRFT,\nURINE RE,\nVITAMIN D,\nIRON,\nCALCIUM,\nPHOSPHORUS,\nPHYSICAL EXAMINATION', '2024-05-20 06:30:10', '2024-05-20 06:30:10', NULL, NULL, NULL, NULL, NULL, 'package-6-advanced-healthyman'),
(20, 'Package-7 (Diabetic Package )', 'FBS\nPPBS\nHBA1C\nLIPID PROFILE\nTSH\nUREA\nCREATININE\nMICROALBUMIN SPOT\nPHYSICAL EXAMINATION', 'diabetes.jpg', '1460', 'FBS,\nPPBS,\nHBA1C,\nLIPID PROFILE,\nTSH,\nUREA,\nCREATININE,\nMICROALBUMIN SPOT,\nPHYSICAL EXAMINATION', '2024-05-20 06:31:10', '2024-05-20 06:31:10', NULL, NULL, NULL, NULL, NULL, 'package-7-diabetic-package'),
(21, 'Package-8 (Advanced Diabetic Package )', 'CBC\nFBS\nPPBS\nHBA1C\nLIPID PROFILE\nSGPT\nSGOT\nTSH\nUREA\nURINE RE\nCREATININE\nMICROALBUMIN SPOT\nECG(ALL LEADS)\nCHEST(P.A View)\nUSG(ABDOMEN & PELVIS)\nPHYSICAL EXAMINATION', 'wholediabetes.jpg', '2750', 'CBC,\nFBS,\nPPBS,\nHBA1C,\nLIPID, PROFILE,\nSGPT,\nSGOT,\nTSH,\nUREA,\nURINE RE,\nCREATININE,\nMICROALBUMIN SPOT,\nECG(ALL LEADS),\nCHEST(P.A View),\nUSG(ABDOMEN & PELVIS),\nPHYSICAL EXAMINATION', '2024-05-20 06:32:25', '2024-05-20 06:32:25', NULL, NULL, NULL, NULL, NULL, 'package-8-advanced-diabetic-package'),
(22, 'Package -9(Cardiac Package)', 'FBS\nPPBS\nLIPID PROFILE\nURIC ACID\nSGOT\nURINE RE\nECG (ALL LEADS)\nTMT\nECHO CARDIOGRAM\nPHYSICAL EXAMINATION', 'cardiac.jpg', '2500', 'FBS,\nPPBS,\nLIPID ,PROFILE\nURIC ACID,\nSGOT,\nURINE RE,\nECG (ALL LEADS),\nTMT,\nECHO CARDIOGRAM,\nPHYSICAL EXAMINATION', '2024-05-20 06:33:06', '2024-05-20 06:33:06', NULL, NULL, NULL, NULL, NULL, 'package-9-cardiac-package'),
(23, 'Package-10(Whole Body Package)', 'CBC\nURINE RE\nFBS\nLIPID PROFILE\nRFT\nCALCIUM\nIRON\nPHOSPHORUS\nLIVER FUNCTION TEST\nVITAMIN D\nTFT\nCHEST XRAY (P.A VIEW)\nECG (ALL LEADS)\nTMT\nPACKAGE-8 (ADVANCED DIABETIC PACKAGE )\nPACKAGE -9(CARDIAC PACKAGE)\nPACKAGE-10(WHOLE BODY PACKAGE)\nECHO CARDIOGRAM\nUSG ABDOMEN & PELVIS\nPHYSICAL EXAMINATION', 'wholebosy.jpg', '5700', 'CBC,\nURINE RE,\nFBS,\nLIPID PROFILE,\nRFT,\nCALCIUM,\nIRON,\nPHOSPHORUS,\nLIVER FUNCTION TEST,\nVITAMIN D,\nTFT,\nCHEST XRAY (P.A VIEW),\nECG (ALL LEADS),\nTMT,\nPACKAGE-8 (ADVANCED DIABETIC PACKAGE ),\nPACKAGE -9(CARDIAC PACKAGE),\nPACKAGE-10(WHOLE BODY PACKAGE),\nECHO CARDIOGRAM,\nUSG ABDOMEN & PELVIS,\nPHYSICAL EXAMINATION', '2024-05-20 06:33:56', '2024-05-20 06:33:56', NULL, NULL, NULL, NULL, NULL, 'package-10-whole-body-package');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `testdate` text,
  `reportdate` text,
  `name` text,
  `report` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `testdate`, `reportdate`, `name`, `report`, `seotitle`, `seodescription`, `created_at`, `updated_at`, `phone`) VALUES
(8, '2024-05-03', '2024-05-04', 'Dr.K K Manojan', 'prescription-8.jpg', NULL, NULL, '2024-05-14 06:07:05', '2024-05-14 06:07:59', '9685741233'),
(9, '2024-05-28', '2024-05-31', 'SUMIYA.S', 'prescription-2.jpg', 'aaaaaaa', 'aaaaaaaa', '2024-05-27 03:54:08', '2024-07-30 01:44:46', '000000000'),
(12, '2024-06-04', '2024-06-21', 'BIOCHEMISTRY', 'prescription-3.jpg', 'a', 'a', '2024-06-02 23:39:45', '2024-07-30 01:44:56', '1234567892');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `description`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(3, 'CTSCAN', 'CTscan  provides a more detailed view of your tissues, blood vessels, and bones.', 'ctscantitle', 'ctscandescription', '2024-06-01 04:01:16', '2024-06-01 04:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text,
  `name` text,
  `designation` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seotitle` text,
  `seodescription` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `designation`, `created_at`, `updated_at`, `seotitle`, `seodescription`) VALUES
(1, 'team-1.jpg', 'test2', 'description', '2024-05-17 01:59:48', '2024-05-17 04:32:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `image` text,
  `price` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seotitle` text,
  `seodescription` text,
  `parameter` text,
  `testcode` text,
  `Schedule` text,
  `prerequisite` text,
  `reporttime` text,
  `slug` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=207 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`, `seotitle`, `seodescription`, `parameter`, `testcode`, `Schedule`, `prerequisite`, `reporttime`, `slug`) VALUES
(8, 'CBC ', 'CBC (HB,TC,DC,ESR,PLT\r\n,PCV,RBC,MCV,MCHC,MCH)', 'test-67c7db6e-f617-427f-a713-ecb217975bc9.jpg', '231', '2024-06-04 23:31:21', '2024-06-13 13:19:29', 'CBC (HB,TC,DC,ESR,PLT ,PCV,RBC,MCV,MCHC,MCH)', 'CBC (HB,TC,DC,ESR,PLT ,PCV,RBC,MCV,MCHC,MCH)', NULL, NULL, NULL, NULL, NULL, 'cbc'),
(11, 'TC/DC', 'TC/DC', 'test-19782a6f-c7e8-4460-b72a-30b36abcbddf.jpg', '100', '2024-06-04 23:47:33', '2024-06-10 04:38:10', 'TC/DC', 'TC/DC', NULL, NULL, NULL, NULL, NULL, 'tc-dc'),
(12, 'HB', 'HB', 'test-8.jpg', '80', '2024-06-04 23:58:41', '2024-06-04 23:58:41', 'HB', 'HB', NULL, NULL, NULL, NULL, NULL, 'hb'),
(13, 'PCV', 'PCV', 'pcv.jpg', '140', '2024-06-05 00:00:22', '2024-06-05 00:00:22', 'PCV', 'PCV', NULL, NULL, NULL, NULL, NULL, 'pcv'),
(15, 'ESR', 'ESR', 'package-15.png', '60', '2024-06-05 00:03:47', '2024-06-05 04:03:47', 'ESR', 'ESR', NULL, NULL, NULL, NULL, NULL, 'esr'),
(16, 'MP(Card Test)', 'MP(CARD TEST)', 'package-16.jpg', '210', '2024-06-05 00:04:50', '2024-06-05 04:05:29', 'MP(CARD TEST)', 'MP(CARD TEST)', NULL, NULL, NULL, NULL, NULL, 'mp-card-test'),
(14, 'Blood RE /Platelet', 'BLOOD RE /PLATELET(HB,TC,DC,PLT,ESR)', 'test-71552a35-c3ab-43a5-8d0f-32def22c68e8.jpg', '200', '2024-06-05 00:01:24', '2024-06-05 04:31:36', 'BLOOD RE /PLATELET(HB,TC,DC,PLT,ESR)', 'BLOOD RE /PLATELET(HB,TC,DC,PLT,ESR)', NULL, NULL, NULL, NULL, NULL, 'blood-re-platelet'),
(17, 'Group & RH Type', 'GROUP& RH TYPE', 'test-2f5d2aab-1de5-4ea6-a15b-c33b087b233c.jpg', '180', '2024-06-05 00:05:35', '2024-06-06 01:56:22', 'GROUP& RH TYPE', 'GROUP& RH TYPE', NULL, NULL, NULL, NULL, NULL, 'group-rh-type'),
(18, 'B.T /C.T', 'B.T /C.T', 'test-5c94a3f9-f8c2-42c8-b61c-a6362a92aa4d.jpg', '80', '2024-06-05 00:06:25', '2024-06-05 04:48:55', 'B.T /C.T 80', 'B.T /C.T 80', NULL, NULL, NULL, NULL, NULL, 'b-t-c-t'),
(19, 'Platelet Count', 'PLATELET COUNT', 'test-892c7ca2-f16b-4f2d-b340-4e1189033b98.jpg', '110', '2024-06-05 00:07:19', '2024-06-05 04:50:30', 'PLATELET COUNT', 'PLATELET COUNT', NULL, NULL, NULL, NULL, NULL, 'platelet-count'),
(20, 'ABS Eosinophil Count (aec)', 'Abs Eosinophil Count (AEC)', 'test-99811d72-0203-41d7-9b9d-c31f9484fbec.jpg', '60', '2024-06-05 00:08:01', '2024-06-05 04:57:58', 'Abs Eosinophil Count (AEC)', 'Abs Eosinophil Count (AEC)', NULL, NULL, NULL, NULL, NULL, 'abs-eosinophil-count-aec'),
(21, 'DCT', 'DCT', 'test-e2d16802-a36f-4de7-a9af-333819fb342d.jpg', '150', '2024-06-05 00:08:50', '2024-06-05 05:02:02', 'DCT', 'DCT', NULL, NULL, NULL, NULL, NULL, 'dct'),
(22, 'ICT', 'ICT', 'test-23609990-d16b-42ba-b71d-ce43677ba608.jpg', '200', '2024-06-05 00:09:27', '2024-06-05 05:06:59', 'ICT', 'ICT', NULL, NULL, NULL, NULL, NULL, 'ict'),
(23, 'Cross Matching', 'Cross Matching', 'test-5198d893-9f03-4642-b9f4-97364ed5d3a9.jpg', '350', '2024-06-05 00:10:11', '2024-06-05 05:10:29', 'Cross Matching', 'Cross Matching', NULL, NULL, NULL, NULL, NULL, 'cross-matching'),
(24, 'PT & INR', 'PT&INR', 'test-f3300d17-0f5f-47d0-aa0c-a7e48d2115cb.jpg', '210', '2024-06-05 00:11:16', '2024-06-05 05:12:24', 'PT&INR', 'PT&INR', NULL, NULL, NULL, NULL, NULL, 'pt-inr'),
(25, 'APTT', 'APTT', 'test-80b72068-4cff-4c28-9994-331dc9f81a09.jpg', '225', '2024-06-05 00:12:10', '2024-06-05 05:53:41', 'APTT', 'APTT', NULL, NULL, NULL, NULL, NULL, 'aptt'),
(26, 'IPF(Immature Platelet Fraction)', 'IPF(Immature Platelet Fraction)', 'test-cc4857b8-7916-44a3-bd2e-78f52b8eabd7.jpg', '500', '2024-06-05 00:12:52', '2024-06-05 06:00:09', 'IPF(Immature Platelet Fraction)', 'IPF(Immature Platelet Fraction)', NULL, NULL, NULL, NULL, NULL, 'ipf-immature-platelet-fraction'),
(27, 'RA Factor RF/RA', 'RA Factor RF/RA', 'test-c22dd01e-d022-4712-924c-a306f53c9445.jpg', '275', '2024-06-05 00:13:35', '2024-06-05 06:03:38', 'RA Factor RF/RA', 'RA Factor RF/RA', NULL, NULL, NULL, NULL, NULL, 'ra-factor-rf-ra'),
(28, 'CRP', 'CRP', 'test-8b1fec7d-0a11-4db7-9a70-807f0fae6cf7.jpg', '300', '2024-06-05 00:14:15', '2024-06-05 06:04:57', 'CRP', 'CRP', NULL, NULL, NULL, NULL, NULL, 'crp'),
(29, 'ASO', 'ASO', 'test-bc871d19-a940-49b5-9880-c5e8d69931bf.jpg', '270', '2024-06-05 00:14:54', '2024-06-05 06:07:01', 'ASO', 'ASO', NULL, NULL, NULL, NULL, NULL, 'aso'),
(30, 'HIV Card', 'HIV Card', 'test-ff5dae71-a224-4656-8678-bbc9c5955916.jpg', '300', '2024-06-05 00:15:35', '2024-06-05 06:08:53', 'HIV Card', 'HIV Card', NULL, NULL, NULL, NULL, NULL, 'hiv-card'),
(31, 'HBSAG Card', 'HBsAg Card', 'test-d714707d-dbd8-4dc8-8a6f-e0bf4d21495f.webp', '225', '2024-06-05 00:16:35', '2024-06-05 06:09:57', 'HBsAg Card', 'HBsAg Card', NULL, NULL, NULL, NULL, NULL, 'hbsag-card'),
(32, 'HCV Card', 'HCV Card', 'test-36120eac-8418-4830-81b9-d787bffd6cd1.png', '300', '2024-06-05 00:17:23', '2024-06-05 06:12:10', 'HCV Card', 'HCV Card', NULL, NULL, NULL, NULL, NULL, 'hcv-card'),
(33, 'VDRL Card', 'VDRL Card', 'test-b37ec632-760b-4dc4-8f6c-50467403d0e5.png', '200', '2024-06-05 00:18:13', '2024-06-05 06:13:13', 'VDRL Card', 'VDRL Card', NULL, NULL, NULL, NULL, NULL, 'vdrl-card'),
(34, 'Dengu NSI Card', 'DENGU NSI Card', 'test-a9ec7231-7cb0-483e-82d9-51c2170d6cd4.jpg', '500', '2024-06-05 00:18:49', '2024-06-05 06:14:39', 'DENGU NSI Card', 'DENGU NSI Card', NULL, NULL, NULL, NULL, NULL, 'dengu-nsi-card'),
(35, 'Lepto Card', 'LEPTO CARD', 'test-97fd2c89-db2e-4750-a1ec-87dde3a26789.png', '400', '2024-06-05 00:19:32', '2024-06-05 06:17:39', 'LEPTO CARD', 'LEPTO CARD', NULL, NULL, NULL, NULL, NULL, 'lepto-card'),
(37, 'Mantoux Test', 'MANTOUX TEST', 'test-e5fc3e34-9bd8-4a74-9c0d-07d591e06031.jpg', '100', '2024-06-05 00:20:10', '2024-06-05 06:19:55', 'MANTOUX TEST', 'MANTOUX TEST', NULL, NULL, NULL, NULL, NULL, 'mantoux-test'),
(38, 'Widal(Tube)', 'WIDAL(TUBE)', 'test-b8f1aa46-08a0-461d-8cbd-ec2fdde80217.jpg', '200', '2024-06-05 00:22:44', '2024-06-05 06:21:15', 'WIDAL(TUBE)', 'WIDAL(TUBE)', NULL, NULL, NULL, NULL, NULL, 'widal-tube'),
(39, 'Widal Slide Method', 'WIDAL SLIDE METHOD', 'test-bbea9d48-27a4-481e-9fcf-68548820342e.jpg', '110', '2024-06-05 00:23:15', '2024-06-05 06:23:07', 'WIDAL SLIDE METHOD', 'WIDAL SLIDE METHOD', NULL, NULL, NULL, NULL, NULL, 'widal-slide-method'),
(40, 'HEV Card', 'HEV Card', 'test-bcc1f23a-6c82-4734-bb15-9fedfb95af1a.jpg', '400', '2024-06-05 00:24:30', '2024-06-05 06:24:56', 'HEV Card', 'HEV Card', NULL, NULL, NULL, NULL, NULL, 'hev-card'),
(41, 'HAV Card', 'HAV Card', 'test-696e441b-746c-438b-b110-ab6567eeafac.png', '350', '2024-06-05 00:25:18', '2024-06-05 06:26:27', 'HAV Card', 'HAV Card', NULL, NULL, NULL, NULL, NULL, 'hav-card'),
(42, 'Scrub Typhus Card', 'SCRUB TYPHUS Card', 'test-138fa620-a932-4bc5-b3e3-34afc1359d1f.jpg', '510', '2024-06-05 00:26:11', '2024-06-05 06:28:51', 'SCRUB TYPHUS Card', 'SCRUB TYPHUS Card', NULL, NULL, NULL, NULL, NULL, 'scrub-typhus-card'),
(43, 'Blood Sugar', 'BLOOD SUGAR', 'test-0eb49af1-553e-4d1d-ac22-72b58e9bb6d5.jpg', '35', '2024-06-05 00:26:41', '2024-06-05 06:29:56', 'BLOOD SUGAR', 'BLOOD SUGAR', NULL, NULL, NULL, NULL, NULL, 'blood-sugar'),
(44, 'G.C.T', 'G.C.T', 'test-3e1690d8-f535-492e-8566-8550a414cfc0.jpg', '100', '2024-06-05 00:27:09', '2024-06-05 06:32:30', 'G.C.T', 'G.C.T', NULL, NULL, NULL, NULL, NULL, 'g-c-t'),
(45, 'G.T.T', 'G.T.T', 'test-ffa0e795-0132-4092-ab7b-5ee823af47ce.jpg', '180', '2024-06-05 00:27:39', '2024-06-05 06:33:37', 'G.T.T', 'G.T.T', NULL, NULL, NULL, NULL, NULL, 'g-t-t'),
(46, 'HBA1C 425', 'HBA1C 425', 'test-ac532f58-3184-4ac8-9388-05ba4e3361a4.png', '1425', '2024-06-05 00:28:04', '2024-06-05 06:36:56', 'HBA1C 425', 'HBA1C 425', NULL, NULL, NULL, NULL, NULL, 'hba1c-425'),
(47, 'Lipid Profile', 'LIPID PROFILE', 'test-1fbba2c6-53dd-4bff-9da1-8004db78d282.jpg', '425', '2024-06-05 00:28:32', '2024-06-05 06:38:02', 'LIPID PROFILE', 'LIPID PROFILE', NULL, NULL, NULL, NULL, NULL, 'lipid-profile'),
(48, 'Cholesterol', 'CHOLESTEROL', 'test-cdf05b05-38c1-480a-bb8b-c0f829852aa4.jpg', '100', '2024-06-05 00:29:07', '2024-06-05 06:39:01', 'CHOLESTEROL', 'CHOLESTEROL', NULL, NULL, NULL, NULL, NULL, 'cholesterol'),
(49, 'TGL', 'TGL', 'test-3332352d-8efa-4e26-a286-4a7cdfd7e0e5.jpg', '110', '2024-06-05 00:29:37', '2024-06-05 06:45:31', 'TGL', 'TGL', NULL, NULL, NULL, NULL, NULL, 'tgl'),
(50, 'LDL', 'LDL', 'test-999b2b6c-bc48-4693-9629-08534faf88e8.jpg', '160', '2024-06-05 00:30:12', '2024-06-05 06:47:40', 'LDL', 'LDL', NULL, NULL, NULL, NULL, NULL, 'ldl'),
(51, 'HDL', 'HDL', 'test-b809bff2-bfaf-4bb2-ab23-3a884593c4f4.jpg', '160', '2024-06-05 00:30:14', '2024-06-05 06:49:39', 'LDL', 'LDL', NULL, NULL, NULL, NULL, NULL, 'hdl'),
(52, 'RFT', 'RFT (UREA,CREATININE,URIC ACID)', 'test-53b1c93e-234e-45a6-a57e-141a112cde46.jpg', '400', '2024-06-05 00:32:40', '2024-06-05 06:51:12', 'RFT (UREA,CREATININE,URIC ACID)', 'RFT (UREA,CREATININE,URIC ACID)', NULL, NULL, NULL, NULL, NULL, 'rft'),
(53, 'RFT', 'RFT(UREA,CREATININE)', 'test-05ec7d09-58c9-47b7-a87c-ab5e895dc3b7.png', '240', '2024-06-05 00:33:14', '2024-06-05 06:53:01', 'RFT(UREA,CREATININE)', 'RFT(UREA,CREATININE)', NULL, NULL, NULL, NULL, NULL, 'rft'),
(54, 'Urea', 'UREA', 'test-6e405d7d-4713-4c93-9590-8650c389a50a.jpg', '110', '2024-06-05 00:33:40', '2024-06-05 06:54:42', 'UREA', 'UREA', NULL, NULL, NULL, NULL, NULL, 'urea'),
(55, 'Creatinine', 'CREATININE', 'test-4ff3a026-4a80-4526-8df8-4e1d6e67c343.jpg', '130', '2024-06-05 00:34:06', '2024-06-05 06:57:05', 'CREATININE', 'CREATININE', NULL, NULL, NULL, NULL, NULL, 'creatinine'),
(56, 'Uric Acid', 'URIC ACID', 'test-4b32bd2c-4205-4e53-b38f-a01e74ade6cc.jpg', '130', '2024-06-05 00:36:24', '2024-06-05 06:58:52', 'URIC ACID', 'URIC ACID', NULL, NULL, NULL, NULL, NULL, 'uric-acid'),
(57, 'Sodium & pottasium(electrolyte)', 'SODIUM & POTTASIUM(ELECTROLYTE)', 'test-5c268cca-21e2-4724-8594-13d86723c77b.png', '250', '2024-06-05 00:37:00', '2024-06-05 09:36:53', 'SODIUM & POTTASIUM(ELECTROLYTE)', 'SODIUM & POTTASIUM(ELECTROLYTE)', NULL, NULL, NULL, NULL, NULL, 'sodium-pottasium-electrolyte'),
(58, 'Sodium', 'SODIUM', 'test-d11bc7a7-87f2-4156-b85a-6cebe39f1fbe.jpg', '150', '2024-06-05 00:37:33', '2024-06-05 09:38:05', 'SODIUM', 'SODIUM', NULL, NULL, NULL, NULL, NULL, 'sodium'),
(59, 'Pottasium', 'POTTASIUM', 'test-8476a4d4-b6f4-455f-bf2a-92efccfdf6dc.jpg', '150', '2024-06-05 00:39:21', '2024-06-05 09:38:53', 'POTTASIUM', 'POTTASIUM', NULL, NULL, NULL, NULL, NULL, 'pottasium'),
(60, 'Calcium', 'CALCIUM', 'test-e001049d-1c2a-47c7-ba1d-a25adcca3260.jpg', '110', '2024-06-05 00:40:21', '2024-06-05 09:41:08', 'CALCIUM', 'CALCIUM', NULL, NULL, NULL, NULL, NULL, 'calcium'),
(61, 'Phosphorus', 'PHOSPHEROUS', 'test-656ac331-adf2-486c-b099-9022b8a97db2.jpg', '110', '2024-06-05 00:40:58', '2024-07-30 04:14:32', 'PHOSPHEROUS', 'PHOSPHEROUS', '[\"Phosphorus\"]', NULL, NULL, NULL, NULL, 'phosphorus'),
(62, 'LFT', 'LFT', 'test-c33e9553-2d69-4375-a46a-1d38a9ec231b.jpg', '450', '2024-06-05 00:41:55', '2024-06-05 09:44:35', 'LFT', 'LFT', NULL, NULL, NULL, NULL, NULL, 'lft'),
(63, 'Half LFT', 'HALF LFT', 'test-d69dc99e-8903-4979-85aa-fac8c44a644f.jpg', '350', '2024-06-05 00:44:07', '2024-06-05 09:45:57', 'HALF LFT', 'HALF LFT', NULL, NULL, NULL, NULL, NULL, 'half-lft'),
(64, 'Bilirubint & Direct ', 'BILIRUBINT&D (TOTAL&DIRECT)', 'test-8dad9e64-c348-4713-b15b-1ab99301aa6c.jpg', '130', '2024-06-05 00:45:19', '2024-06-05 09:47:45', 'BILIRUBINT&D (TOTAL&DIRECT)', 'BILIRUBINT&D (TOTAL&DIRECT)', NULL, NULL, NULL, NULL, NULL, 'bilirubint-d-total-direct'),
(65, 'Bilirubin Total', 'BILIRUBIN TOTAL', 'test-5e353fc5-1f27-49b6-82a9-38e0e441911f.png', '100', '2024-06-05 00:46:32', '2024-06-05 09:50:26', 'BILIRUBIN TOTAL', 'BILIRUBIN TOTAL', NULL, NULL, NULL, NULL, NULL, 'bilirubin-total'),
(66, 'Bilirubin Direct', 'BILIRUBIN DIRECT', 'test-91322e8d-3907-429a-b906-7e5fba7d90d6.jpg', '100', '2024-06-05 00:47:41', '2024-06-05 09:52:59', 'BILIRUBIN DIRECT', 'BILIRUBIN DIRECT', NULL, NULL, NULL, NULL, NULL, 'bilirubin-direct'),
(67, 'Alkaline Phosphate (ALP)', 'ALKALINE PHOSPHATE (ALP)', 'test-cea621a4-e5c4-4d1f-ae7d-c43af425e217.jpg', '110', '2024-06-05 00:53:47', '2024-06-05 09:55:49', 'ALKALINE PHOSPHATE (ALP)', 'ALKALINE PHOSPHATE (ALP)', NULL, NULL, NULL, NULL, NULL, 'alkaline-phosphate-alp'),
(68, 'SGOT', 'SGOT', 'test-3447c9bb-f63d-4eb0-ab06-e59291088c08.jpg', '110', '2024-06-05 00:55:37', '2024-06-05 09:57:01', 'SGOT', 'SGOT', NULL, NULL, NULL, NULL, NULL, 'sgot'),
(69, 'SGPT', 'SGPT', 'test-a5ffc0b9-3a80-4f5c-b04c-9078868d7086.jpg', '110', '2024-06-05 00:56:28', '2024-06-05 09:58:33', 'SGPT', 'SGPT', NULL, NULL, NULL, NULL, NULL, 'sgpt'),
(70, 'Total Protien', 'TOTAL PROTIEN', 'test-1d08a411-c2c7-47ee-a18d-cc56b7301964.jpg', '110', '2024-06-05 00:57:18', '2024-06-05 09:59:43', 'TOTAL PROTIEN', 'TOTAL PROTIEN', NULL, NULL, NULL, NULL, NULL, 'total-protien'),
(71, 'S Albumin', 'S ALBUMIN', 'test-a799cd65-1399-42fb-bfc1-67ff1c487992.jpg', '70', '2024-06-05 00:58:04', '2024-06-05 10:06:36', 'S ALBUMIN', 'S ALBUMIN', NULL, NULL, NULL, NULL, NULL, 's-albumin'),
(72, 'CPK', 'CPK', 'test-0248711d-0ca2-480c-b7b6-b4d29ea0bd66.jpg', '210', '2024-06-05 00:58:53', '2024-06-05 10:08:34', 'CPK', 'CPK', NULL, NULL, NULL, NULL, NULL, 'cpk'),
(73, 'CKMB', 'CKMB', 'test-cc95464f-e14f-4d46-8594-bb146d024ddf.jpg', '310', '2024-06-05 00:59:41', '2024-06-05 10:12:44', 'CKMB', 'CKMB', NULL, NULL, NULL, NULL, NULL, 'ckmb'),
(74, 'Amylase', 'AMYLASE', 'test-7935eb05-d533-42da-98c6-488474437f1e.jpg', '260', '2024-06-05 01:00:49', '2024-06-05 10:14:58', 'AMYLASE', 'AMYLASE', NULL, NULL, NULL, NULL, NULL, 'amylase'),
(75, 'Fluid Analysis', 'FLUID ANALYSIS', 'test-b025140a-33f5-4efd-a4a3-70d5e9458954.jpg', '250', '2024-06-05 01:01:49', '2024-06-05 10:17:27', 'FLUID ANALYSIS', 'FLUID ANALYSIS', NULL, NULL, NULL, NULL, NULL, 'fluid-analysis'),
(76, 'Hs Trop I', 'HS TROP I', 'test-218ea420-5dd9-4e5a-ae6d-accf4bb766b7.jpg', '900', '2024-06-05 01:02:55', '2024-06-05 10:19:05', 'HS TROP I', 'HS TROP I', NULL, NULL, NULL, NULL, NULL, 'hs-trop-i'),
(77, 'NT Pro BNP', 'NT PRO BNP', 'test-52b2bc96-c520-43af-bae0-1a0b5254654c.jpg', '2500', '2024-06-05 01:03:54', '2024-06-05 10:22:03', 'NT PRO BNP', 'NT PRO BNP', NULL, NULL, NULL, NULL, NULL, 'nt-pro-bnp'),
(78, 'D Dimer', 'D DIMER', 'test-08093da5-5089-4f1e-aa79-88e8f8fae04f.jpg', '900', '2024-06-05 01:04:43', '2024-06-05 10:23:49', 'D DIMER', 'D DIMER', NULL, NULL, NULL, NULL, NULL, 'd-dimer'),
(79, 'TSH', 'TSH', 'test-5c727944-d214-4f39-8db4-aaf44dca0bf0.jpg', '160', '2024-06-05 01:05:40', '2024-06-05 10:24:56', 'TSH', 'TSH', NULL, NULL, NULL, NULL, NULL, 'tsh'),
(80, 'TFT', 'TFT', 'test-980c7480-9de4-4524-b0e6-c0e4f076746d.jpg', '400', '2024-06-05 01:06:27', '2024-06-05 10:26:57', 'TFT', 'TFT', NULL, NULL, NULL, NULL, NULL, 'tft'),
(81, 'Prolactin', 'PROLACTIN', 'test-0625b55f-945f-4c74-a2ed-78f5b7d788a2.jpg', '460', '2024-06-05 01:06:59', '2024-06-05 10:28:06', 'PROLACTIN', 'PROLACTIN', NULL, NULL, NULL, NULL, NULL, 'prolactin'),
(82, 'FSH', 'FSH', 'test-39794c65-481f-4f3d-aaab-9a3f421aa622.jpg', '430', '2024-06-05 01:07:59', '2024-06-05 10:30:50', 'FSH', 'FSH', NULL, NULL, NULL, NULL, NULL, 'fsh'),
(83, 'Testosterone X', 'TESTOSTERONE X', 'test-a70f6499-4402-488e-b4ff-80ba1859fc26.jpg', '430', '2024-06-05 01:08:40', '2024-06-05 10:35:27', 'TESTOSTERONE X', 'TESTOSTERONE X', NULL, NULL, NULL, NULL, NULL, 'testosterone-x'),
(84, 'LH', 'LH', 'test-39dd1045-4d87-4440-98d6-91874d57b033.jpg', '430', '2024-06-05 01:09:18', '2024-06-05 10:37:45', 'LH', 'LH', NULL, NULL, NULL, NULL, NULL, 'lh'),
(85, 'Ferritin', 'FERRITIN', 'test-6f571f14-e77b-4392-b62a-774d0770bed6.jpg', '500', '2024-06-05 01:12:26', '2024-06-05 10:39:17', 'FERRITIN', 'FERRITIN', NULL, NULL, NULL, NULL, NULL, 'ferritin'),
(86, 'Vitamine D3', 'VITAMINE D3', 'test-8279f568-bc78-4108-90df-0d05f38a8488.jpg', '850', '2024-06-05 01:13:46', '2024-06-05 10:40:44', 'VITAMINE D3', 'VITAMINE D3', NULL, NULL, NULL, NULL, NULL, 'vitamine-d3'),
(87, 'Vitamine B12', 'VITAMINE B12', 'test-53b7de4e-01d4-4aec-bb14-14ecd785fc35.png', '900', '2024-06-05 01:14:24', '2024-06-05 10:41:58', 'VITAMINE B12', 'VITAMINE B12', NULL, NULL, NULL, NULL, NULL, 'vitamine-b12'),
(88, 'CEA', 'CEA', 'test-3c72f9f5-4e42-4779-8fb1-87eff2545a43.jpg', '600', '2024-06-05 01:15:06', '2024-06-05 10:44:29', 'CEA', 'CEA', NULL, NULL, NULL, NULL, NULL, 'cea'),
(89, 'Folic Acid', 'FOLIC ACID', 'test-e143a503-822b-4c26-9a4f-64af3978b89c.png', '1050', '2024-06-05 01:15:53', '2024-06-05 10:48:27', 'FOLIC ACID', 'FOLIC ACID', NULL, NULL, NULL, NULL, NULL, 'folic-acid'),
(90, 'Total PSA', 'TOTAL PSA', 'test-9c3c9d06-7593-4cc0-a5d6-9387c9a044f6.jpg', '410', '2024-06-05 01:16:33', '2024-06-05 10:49:26', 'TOTAL PSA', 'TOTAL PSA', NULL, NULL, NULL, NULL, NULL, 'total-psa'),
(91, 'Free PSA', 'FREE PSA', 'test-5330eb8a-bc76-4c4a-bd2a-47d03b9c3f7a.jpg', '1000', '2024-06-05 01:17:13', '2024-06-05 10:51:06', 'FREE PSA', 'FREE PSA', NULL, NULL, NULL, NULL, NULL, 'free-psa'),
(92, 'Total IGE', 'TOTAL IGE', 'test-8721b2af-33d0-4d22-abdc-5c9d0e69bf99.jpg', '600', '2024-06-05 01:18:10', '2024-06-05 10:53:58', 'TOTAL IGE', 'TOTAL IGE', NULL, NULL, NULL, NULL, NULL, 'total-ige'),
(93, 'Anti T.P.O', 'ANTI T.P.O', 'test-234a986f-0b4f-4e20-ba2c-88605a58f4f5.jpg', '650', '2024-06-05 01:19:04', '2024-06-05 10:55:37', 'ANTI T.P.O', 'ANTI T.P.O', NULL, NULL, NULL, NULL, NULL, 'anti-t-p-o'),
(94, 'Beta HCG', 'BETA HCG', 'test-04a4afd5-ff08-4448-a5bc-2a579a287e72.jpg', '400', '2024-06-05 01:19:50', '2024-06-05 10:57:03', 'BETA HCG', 'BETA HCG', NULL, NULL, NULL, NULL, NULL, 'beta-hcg'),
(95, 'FT3', 'FT3', 'test-6c6152dc-4b85-4f4d-95b6-e1ed6e686194.jpg', '220', '2024-06-05 01:20:31', '2024-06-05 11:00:51', 'FT3', 'FT3', NULL, NULL, NULL, NULL, NULL, 'ft3'),
(96, 'FT4', 'FT4', 'test-3c6c305d-42bc-4668-88d0-6df65e95273d.jpg', '220', '2024-06-05 01:21:04', '2024-06-05 11:05:51', 'FT4', 'FT4', NULL, NULL, NULL, NULL, NULL, 'ft4'),
(97, 'RUT', 'RUT', 'test-5b59c2e1-8ae3-4c45-9d0e-639e6c9f8bb2.jpg', '250', '2024-06-05 01:21:40', '2024-06-05 11:08:02', 'RUT', 'RUT', NULL, NULL, NULL, NULL, NULL, 'rut'),
(98, 'AFP', 'AFP', 'test-f392ffb6-51b8-41b7-9aed-42937ad9785c.jpg', '450', '2024-06-05 01:22:25', '2024-06-05 11:09:43', 'AFP', 'AFP', NULL, NULL, NULL, NULL, NULL, 'afp'),
(99, 'CA 125', 'CA 125', 'test-2a9555f4-9064-48fa-9219-03581f51b000.png', '975', '2024-06-05 01:23:10', '2024-06-05 11:11:49', 'CA 125', 'CA 125', NULL, NULL, NULL, NULL, NULL, 'ca-125'),
(100, 'Sputum AFB', 'SPUTUM AFB', 'test-65ec025e-69a9-471c-aa2c-42f47ba11670.jpg', '300', '2024-06-05 01:24:08', '2024-06-05 11:14:44', 'SPUTUM AFB', 'SPUTUM AFB', NULL, NULL, NULL, NULL, NULL, 'sputum-afb'),
(101, 'GM Stain', 'GM STAIN', 'test-d0dac9de-61e4-4ff9-83d7-62247b49b353.jpg', '275', '2024-06-05 01:24:41', '2024-06-05 11:17:34', 'GM STAIN', 'GM STAIN', NULL, NULL, NULL, NULL, NULL, 'gm-stain'),
(102, 'Urine C/S', 'URINE C/S', 'test-62d91464-2365-485b-b851-6269b61998b7.png', '300', '2024-06-05 01:25:18', '2024-06-05 11:18:59', 'URINE C/S', 'URINE C/S', NULL, NULL, NULL, NULL, NULL, 'urine-c-s'),
(103, 'Pus C/S', 'PUS C/S', 'test-72954a53-14e4-45a7-ba1e-2c935ff403fd.jpg', '300', '2024-06-05 01:26:12', '2024-06-06 01:58:58', 'PUS C/S', 'PUS C/S', NULL, NULL, NULL, NULL, NULL, 'pus-c-s'),
(104, 'Stool C/S', 'STOOL C/S', 'test-3cce9898-6575-4f2e-8bee-b4566f643916.jpg', '400', '2024-06-05 01:26:47', '2024-06-06 02:02:18', 'STOOL C/S', 'STOOL C/S', NULL, NULL, NULL, NULL, NULL, 'stool-c-s'),
(105, 'Bactec Blood Culture', 'BACTEC BLOOD CULTURE', 'test-dfda86af-0252-48ee-ad45-cf774e25d92b.jpg', '800', '2024-06-05 01:27:22', '2024-06-06 02:18:00', 'BACTEC BLOOD CULTURE', 'BACTEC BLOOD CULTURE', NULL, NULL, NULL, NULL, NULL, 'bactec-blood-culture'),
(106, 'Blood C/S', 'BLOOD C/S', 'test-d67b9aaf-066e-4d63-8d0c-f7755aa9dd28.png', '450', '2024-06-05 01:27:57', '2024-06-05 11:25:01', 'BLOOD C/S', 'BLOOD C/S', NULL, NULL, NULL, NULL, NULL, 'blood-c-s'),
(107, 'Sputum C/S', 'SPUTUM C/S', 'test-068939ba-fbf4-4606-99a2-380f99b76896.jpg', '300', '2024-06-05 01:28:50', '2024-06-05 11:26:46', 'SPUTUM C/S', 'SPUTUM C/S', NULL, NULL, NULL, NULL, NULL, 'sputum-c-s'),
(108, 'Fluid C/S', 'FLUID C/S', 'test-c2491ec8-9046-4a25-b5ff-45bc41ec1cdc.png', '300', '2024-06-05 01:29:22', '2024-06-05 11:28:15', 'FLUID C/S', 'FLUID C/S', NULL, NULL, NULL, NULL, NULL, 'fluid-c-s'),
(109, 'Vaginal swab c/s', 'VAGINAL SWAB C/S', 'test-3ecebb38-873e-4418-8a40-1005af27e8a9.jpg', '300', '2024-06-05 01:30:33', '2024-06-05 11:29:43', 'VAGINAL SWAB C/S', 'VAGINAL SWAB C/S', NULL, NULL, NULL, NULL, NULL, 'vaginal-swab-c-s'),
(110, 'Urine RE', 'URINE RE', 'test-7e05b947-c81d-4737-ad6e-aee4404274e8.jpg', '100', '2024-06-05 01:31:10', '2024-06-05 11:43:33', 'URINE RE', 'URINE RE', NULL, NULL, NULL, NULL, NULL, 'urine-re'),
(111, 'Urine Albumin', 'URINE ALBUMIN', 'test-eb666745-7826-4465-bf42-99a649cc317b.jpg', '10', '2024-06-05 01:31:48', '2024-06-05 11:41:20', 'URINE ALBUMIN', 'URINE ALBUMIN', NULL, NULL, NULL, NULL, NULL, 'urine-albumin'),
(112, 'Urine Sugar', 'URINE SUGAR', 'test-c185d9e3-7170-427c-8653-95aafe195b19.jpg', '10', '2024-06-05 01:32:22', '2024-06-05 11:43:11', 'URINE SUGAR', 'URINE SUGAR', NULL, NULL, NULL, NULL, NULL, 'urine-sugar'),
(113, 'Urine Micro or Deposite', 'URINE MICRO OR DEPOSITE', 'test-3c66fe3a-9b26-41d7-b055-cc1ba319dc17.jpg', '50', '2024-06-05 01:32:59', '2024-06-05 11:47:01', 'URINE MICRO OR DEPOSITE', 'URINE MICRO OR DEPOSITE', NULL, NULL, NULL, NULL, NULL, 'urine-micro-or-deposite'),
(114, 'Urine Acetone', 'URINE ACETONE', 'test-624753b5-1c90-4413-95b0-7490a43765e3.jpg', '30', '2024-06-05 01:33:50', '2024-06-05 11:56:34', 'URINE ACETONE', 'URINE ACETONE', NULL, NULL, NULL, NULL, NULL, 'urine-acetone'),
(115, 'Stool RE', 'STOOL RE', 'test-4fb873f7-2acb-41ea-9756-6b0ef448feed.jpg', '100', '2024-06-05 01:34:34', '2024-06-05 11:53:59', 'STOOL RE', 'STOOL RE', NULL, NULL, NULL, NULL, NULL, 'stool-re'),
(116, 'Occult Blood', 'OCCULT BLOOD', 'test-b40a1b20-6375-4648-a647-bbb70642c43a.jpg', '100', '2024-06-05 01:35:15', '2024-06-05 11:57:51', 'OCCULT BLOOD', 'OCCULT BLOOD', NULL, NULL, NULL, NULL, NULL, 'occult-blood'),
(117, 'Reducing Substance', 'REDUCING SUBSTANCE', 'test-a717952c-72fb-4271-bd08-c066d97397f6.jpg', '30', '2024-06-05 01:35:49', '2024-06-05 11:59:54', 'REDUCING SUBSTANCE', 'REDUCING SUBSTANCE', NULL, NULL, NULL, NULL, NULL, 'reducing-substance'),
(118, 'Semen Analysis', 'SEMEN ANALYSIS', 'test-65b29cfc-3363-4567-b032-46b87504dddb.jpg', '130', '2024-06-05 01:36:22', '2024-06-05 12:17:16', 'SEMEN ANALYSIS', 'SEMEN ANALYSIS', NULL, NULL, NULL, NULL, NULL, 'semen-analysis'),
(119, 'Urine Micro Albumin', 'URINE MICRO ALBUMIN', 'test-114.jpg', '260', '2024-06-05 01:37:24', '2024-06-05 01:37:24', 'URINE MICRO ALBUMIN', 'URINE MICRO ALBUMIN', NULL, NULL, NULL, NULL, NULL, 'urine-micro-albumin'),
(120, 'Bile Salt', 'BILE SALT', 'test-4c464b1b-42a5-4c56-9a46-a7d5c5c4f3a8.jpg', '30', '2024-06-05 01:37:52', '2024-06-05 12:18:12', 'BILE SALT', 'BILE SALT', NULL, NULL, NULL, NULL, NULL, 'bile-salt'),
(121, 'Bile Pigment', 'BILE PIGMENT', 'test-c7d921c8-ae91-4012-9ee4-db359f3788db.png', '30', '2024-06-05 01:38:24', '2024-06-05 12:22:13', 'BILE PIGMENT', 'BILE PIGMENT', NULL, NULL, NULL, NULL, NULL, 'bile-pigment'),
(122, 'Vaginal Smear', 'VAGINAL SMEAR', 'test-a3e56269-cbf5-43f2-b021-1ed32ddbbb6b.jpg', '70', '2024-06-05 01:38:56', '2024-06-05 12:25:40', 'VAGINAL SMEAR', 'VAGINAL SMEAR', NULL, NULL, NULL, NULL, NULL, 'vaginal-smear'),
(123, 'Antibodies to TSH Receptor Serum', 'Antibodies to TSH receptor Serum', 'test-22c46482-957a-40cf-8938-bbbd3a64d1ed.png', '3800', '2024-06-05 01:39:33', '2024-06-05 12:27:39', 'Antibodies to TSH receptor Serum', 'Antibodies to TSH receptor Serum', NULL, NULL, NULL, NULL, NULL, 'antibodies-to-tsh-receptor-serum'),
(124, 'Anti CCP', 'ANTI CCP', 'test-6d1e4a9a-49f2-4131-9627-f7ade60f77f6.png', '1700', '2024-06-05 01:40:06', '2024-06-05 12:34:55', 'ANTI CCP', 'ANTI CCP', NULL, NULL, NULL, NULL, NULL, 'anti-ccp'),
(125, 'Anti-HAV IgM Serum/Plasma', 'Anti-HAV IgM Serum/Plasma', 'test-571a50c9-a9b2-415b-971e-6d1ec1982d9c.jpg', '750', '2024-06-05 01:40:46', '2024-06-05 12:39:46', 'Anti-HAV IgM Serum/Plasma', 'Anti-HAV IgM Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'anti-hav-igm-serum-plasma'),
(126, 'Anti-HAV Serum/Plasma', 'Anti-HAV Serum/Plasma', 'test-7d4ac69d-bd66-4e7b-997d-140c1db0242e.png', '750', '2024-06-05 01:41:49', '2024-06-05 12:48:41', 'Anti-HAV Serum/Plasma', 'Anti-HAV Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'anti-hav-serum-plasma'),
(127, 'Anti-HBC IgM Serum/Plasma', 'Anti-HBc IgM Serum/Plasma', 'test-5c9f7385-dcd7-43da-9a25-2373a28d40d0.jpg', '750', '2024-06-05 01:42:33', '2024-06-05 12:50:35', 'Anti-HBc IgM Serum/Plasma', 'Anti-HBc IgM Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'anti-hbc-igm-serum-plasma'),
(128, 'Anti-HBC Serum/Plasma', 'Anti-HBc Serum/Plasma', 'test-b5a56dc5-bea4-4f70-889c-f00ba12221aa.jpg', '625', '2024-06-05 01:43:08', '2024-06-05 12:52:16', 'Anti-HBc Serum/Plasma', 'Anti-HBc Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'anti-hbc-serum-plasma'),
(129, 'Anti-HBe Serum/Plasma', 'Anti-HBe Serum/Plasma', 'test-c55a4ded-b79b-4af8-ad10-13b8098a3ae9.jpg', '650', '2024-06-05 01:43:48', '2024-06-05 12:56:56', 'Anti-HBe Serum/Plasma', 'Anti-HBe Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'anti-hbe-serum-plasma'),
(130, 'Anti-HCV Serum/Plasma', 'Anti-HCV Serum/Plasma', 'test-4b9b6596-73f9-498e-9f0e-fb0b9e230f91.jpg', '600', '2024-06-05 01:44:19', '2024-06-05 13:01:21', 'Anti-HCV Serum/Plasma', 'Anti-HCV Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'anti-hcv-serum-plasma'),
(131, 'Calcitonin Serum/Plasma', 'Calcitonin Serum/Plasma', 'test-afb73225-f2ad-4af2-ab69-fbd0c5dbab46.jpg', '2600', '2024-06-05 01:44:51', '2024-06-05 13:04:06', 'Calcitonin Serum/Plasma', 'Calcitonin Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'calcitonin-serum-plasma'),
(132, 'Cancer Antigen 15-3 Serum/Plasma', 'Cancer Antigen 15-3 Serum/Plasma', 'test-f93949ff-f0b3-4588-b988-9e35401ef4ce.jpg', '1350', '2024-06-05 01:45:27', '2024-06-05 13:07:15', 'Cancer Antigen 15-3 Serum/Plasma', 'Cancer Antigen 15-3 Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'cancer-antigen-15-3-serum-plasma'),
(133, 'Cortisol Serum/Plasma', 'Cortisol Serum/Plasma', 'test-f4cd8ca7-6ede-4c89-acaf-d4909506eaef.jpg', '600', '2024-06-05 01:45:59', '2024-06-05 22:55:59', 'Cortisol Serum/Plasma', 'Cortisol Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'cortisol-serum-plasma'),
(134, 'Cortisol Saliva', 'Cortisol Saliva', 'test-25b6f18c-562b-4c58-aac8-62f373ec1415.jpg', '600', '2024-06-05 01:46:32', '2024-06-05 22:58:06', 'Cortisol Saliva', 'Cortisol Saliva', NULL, NULL, NULL, NULL, NULL, 'cortisol-saliva'),
(135, 'C-Peptide Perum/Plasma', 'C-Peptide Serum/Plasma', 'test-d4aa24db-5cc8-4c3f-9eaf-a56b35d5214f.jpg', '700', '2024-06-05 01:47:08', '2024-06-05 23:00:49', 'C-Peptide Serum/Plasma', 'C-Peptide Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'c-peptide-serum-plasma'),
(136, 'Dhea-s Serum/Plasma', 'DHEA-S Serum/Plasma', 'test-1364b71a-74c4-4b7b-8ac8-3712053e14d0.jpg', '550', '2024-06-05 01:47:41', '2024-06-05 23:02:15', 'DHEA-S Serum/Plasma', 'DHEA-S Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'dhea-s-serum-plasma'),
(137, 'Estradiol Serum/Plasma', 'Estradiol Serum/Plasma', 'test-09f2353b-b2bc-4eed-ae5b-412dcf89bcc3.png', '550', '2024-06-05 01:48:13', '2024-06-05 23:07:34', 'Estradiol Serum/Plasma', 'Estradiol Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'estradiol-serum-plasma'),
(138, 'Free βhcg Serum', 'free βhCG Serum', 'test-920afebe-504c-4c95-b6df-8687f5fb969a.jpg', '800', '2024-06-05 01:48:54', '2024-06-05 23:05:46', 'free βhCG Serum', 'free βhCG Serum', NULL, NULL, NULL, NULL, NULL, 'free-hcg-serum'),
(139, 'Human Growth Hormone Serum/Plasma', 'Human growth hormone Serum/Plasma', 'test-ddc1fe58-9f6e-428a-b1bb-d14182553f50.jpg', '600', '2024-06-05 01:49:29', '2024-06-05 23:06:40', 'Human growth hormone Serum/Plasma', 'Human growth hormone Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'human-growth-hormone-serum-plasma'),
(140, 'CMV IgG', 'CMV IgG', 'test-2149f767-2b63-4009-8313-c7f7b746a76f.jpg', '460', '2024-06-05 01:49:58', '2024-06-05 23:09:25', 'CMV IgG', 'CMV IgG', NULL, NULL, NULL, NULL, NULL, 'cmv-igg'),
(141, 'HSV Type 1 IgG', 'HSV TYPE 1 IgG', 'test-6e0aa9ad-f007-44ba-aac0-7a270637c519.jpg', '500', '2024-06-05 01:50:28', '2024-06-05 23:11:49', 'HSV TYPE 1 IgG', 'HSV TYPE 1 IgG', NULL, NULL, NULL, NULL, NULL, 'hsv-type-1-igg'),
(142, 'Hsv Type 2 IgG', 'HSV TYPE 2 IgG', 'test-0db35e98-993e-48d8-b4cf-8ca5d0418ef0.jpg', '500', '2024-06-05 01:50:58', '2024-06-05 23:13:30', 'HSV TYPE 2 IgG', 'HSV TYPE 2 IgG', NULL, NULL, NULL, NULL, NULL, 'hsv-type-2-igg'),
(143, 'Rubella IgG', 'RUBELLA IgG', 'test-b551cbb5-f7f8-482b-809a-7c0fd56c021d.jpg', '500', '2024-06-05 01:51:25', '2024-06-05 23:31:09', 'RUBELLA IgG', 'RUBELLA IgG', NULL, NULL, NULL, NULL, NULL, 'rubella-igg'),
(144, 'Toxoplasma IgG', 'TOXOPLASMA IgG', 'test-f673ce28-d64b-40ca-b1b0-12757d97dbd2.jpg', '400', '2024-06-05 01:52:08', '2024-06-05 23:18:03', 'TOXOPLASMA IgG', 'TOXOPLASMA IgG', NULL, NULL, NULL, NULL, NULL, 'toxoplasma-igg'),
(145, 'CMV IgM', 'CMV IgM', 'test-ef290ee2-3bf0-4378-83e4-56da1f7fc226.png', '500', '2024-06-05 01:52:38', '2024-06-05 23:28:36', 'CMV IgM', 'CMV IgM', NULL, NULL, NULL, NULL, NULL, 'cmv-igm'),
(146, 'Rubella IgM', 'RUBELLA IgM', 'test-450fb30d-afaf-4771-a4f9-74275183b3f7.png', '500', '2024-06-05 01:53:05', '2024-06-05 23:30:34', 'RUBELLA IgM', 'RUBELLA IgM', NULL, NULL, NULL, NULL, NULL, 'rubella-igm'),
(147, 'Toxoplasma IgM', 'TOXOPLASMA IgM', 'test-41974f83-6b01-415d-9769-7a814cabfb59.jpg', '500', '2024-06-05 01:59:02', '2024-06-05 23:32:11', 'TOXOPLASMA IgM', 'TOXOPLASMA IgM', NULL, NULL, NULL, NULL, NULL, 'toxoplasma-igm'),
(148, 'Insulin Serum/Plasma', 'Insulin Serum/Plasma', 'test-6d6bc999-dbca-4011-8ce4-6d64569d985d.jpg', '425', '2024-06-05 01:59:33', '2024-06-05 23:34:18', 'Insulin Serum/Plasma', 'Insulin Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'insulin-serum-plasma'),
(149, 'Pregnancy-Associated Plasma Protein a Serum', 'Pregnancy-associated plasma protein A Serum', 'test-a6ba7d6e-9600-4716-834c-5a7853823ae4.jpg', '975', '2024-06-05 01:59:59', '2024-06-05 23:36:15', 'Pregnancy-associated plasma protein A Serum', 'Pregnancy-associated plasma protein A Serum', NULL, NULL, NULL, NULL, NULL, 'pregnancy-associated-plasma-protein-a-serum'),
(150, 'Procalcitonin Serum/Plasma', 'Procalcitonin Serum/Plasma', 'test-150ca462-84bb-4bf2-b728-dc533e4e3a4e.jpg', '2300', '2024-06-05 02:01:26', '2024-06-05 23:38:34', 'Procalcitonin Serum/Plasma', 'Procalcitonin Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'procalcitonin-serum-plasma'),
(151, 'Progesterone Serum/Plasma', 'Progesterone Serum/Plasma', 'test-74ca37d9-cba5-4542-86ae-f776be8b95ed.jpg', '550', '2024-06-05 02:02:16', '2024-06-05 23:44:55', 'Progesterone Serum/Plasma', 'Progesterone Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'progesterone-serum-plasma'),
(152, 'PTH Serum/Plasma', 'PTH Serum/Plasma', 'test-5453b118-8536-4b52-bc15-28bd8c13c49a.jpg', '975', '2024-06-05 02:02:48', '2024-06-05 23:46:32', 'PTH Serum/Plasma', 'PTH Serum/Plasma', NULL, NULL, NULL, NULL, NULL, 'pth-serum-plasma'),
(153, 'AMH', 'AMH', 'test-f4625271-a64d-4039-96ae-13d8c028b56d.jpg', '2000', '2024-06-05 02:03:25', '2024-06-05 23:48:23', 'AMH', 'AMH', NULL, NULL, NULL, NULL, NULL, 'amh'),
(154, 'ACTH', 'ACTH', 'test-b92275e7-76ca-4f3e-80ad-b8fbb7da3766.jpg', '1780', '2024-06-05 02:04:10', '2024-06-05 23:49:25', 'ACTH', 'acth', NULL, NULL, NULL, NULL, NULL, 'acth'),
(155, 'Folate', 'FOLATE', 'test-4fb8b32c-ee1f-4e16-97fd-811f9d442f99.jpg', '2600', '2024-06-05 02:05:19', '2024-06-05 23:51:18', 'FOLATE', 'FOLATE', NULL, NULL, NULL, NULL, NULL, 'folate'),
(156, 'Anti-TG', 'Anti-TG', 'test-c7659b78-9d05-46ac-8f54-3662389fc893.jpg', '550', '2024-06-05 02:05:50', '2024-06-05 23:52:44', 'Anti-TG', 'Anti-TG', NULL, NULL, NULL, NULL, NULL, 'anti-tg'),
(157, 'Double Marker', 'DOUBLE MARKER', 'test-e013c603-750e-465a-9c96-0d2d1c0015f9.jpg', '1800', '2024-06-05 02:09:07', '2024-06-05 23:55:28', 'DOUBLE MARKER', 'DOUBLE MARKER', NULL, NULL, NULL, NULL, NULL, 'double-marker'),
(158, 'Triple Marker', 'TRIPLE MARKER', 'test-e0bb6fbc-6484-4ed4-a0b9-5de89839c139.jpg', '2000', '2024-06-05 02:22:27', '2024-06-05 23:56:38', 'TRIPLE MARKER', 'TRIPLE MARKER', NULL, NULL, NULL, NULL, NULL, 'triple-marker'),
(159, 'Biopsy Small', 'BIOPSY SMALL', 'test-a93ab6d6-b13d-44ce-803e-e4ab0c3c75df.jpg', '700', '2024-06-05 02:23:09', '2024-06-06 00:00:14', 'BIOPSY SMALL', 'BIOPSY SMALL', NULL, NULL, NULL, NULL, NULL, 'biopsy-small'),
(160, 'Biopsy Medium', 'BIOPSY MEDIUM', 'test-91fdbb54-6835-4537-b282-dfdbe8530720.jpg', '900', '2024-06-05 02:24:08', '2024-06-06 00:03:14', 'BIOPSY MEDIUM', 'BIOPSY MEDIUM', NULL, NULL, NULL, NULL, NULL, 'biopsy-medium'),
(161, 'Biopsy Large', 'BIOPSY LARGE', 'test-3f65068e-eb5f-41b0-82b0-6588f58dd54c.jpg', '1300', '2024-06-05 02:24:38', '2024-06-06 00:05:18', 'BIOPSY LARGE', 'BIOPSY LARGE', NULL, NULL, NULL, NULL, NULL, 'biopsy-large'),
(162, 'Per Extra', 'PER EXTRA', 'test-217c21e5-ec52-4667-ade2-0dca5552bbb5.jpg', '250', '2024-06-05 02:25:22', '2024-06-06 02:10:57', 'PER EXTRA', 'PER EXTRA', NULL, NULL, NULL, NULL, NULL, 'per-extra'),
(163, 'FNAC', 'FNAC', 'test-2de2aa03-5322-4f87-81e9-ccbf4f5ee02c.jpg', '500', '2024-06-05 02:26:06', '2024-06-06 00:12:45', 'FNAC', 'FNAC', NULL, NULL, NULL, NULL, NULL, 'fnac'),
(164, 'USG Guided FNAC', 'USG GUIDED FNAC', 'test-a593c1d7-dc7b-441f-8eb7-a530e9e4544d.png', '1000', '2024-06-05 02:26:44', '2024-06-06 00:14:15', 'USG GUIDED FNAC', 'USG GUIDED FNAC', NULL, NULL, NULL, NULL, NULL, 'usg-guided-fnac'),
(165, 'PAP Smear', 'PAP SMEAR', 'test-ee8968ca-db3e-41fe-8528-211a87831d20.jpg', '400', '2024-06-05 02:27:13', '2024-06-06 00:15:50', 'PAP SMEAR', 'PAP SMEAR', NULL, NULL, NULL, NULL, NULL, 'pap-smear'),
(166, 'Cytology', 'CYTOLOGY', 'test-00ae4966-efd0-447a-adb0-b46241cfedc2.jpg', '400', '2024-06-05 02:27:53', '2024-06-06 00:19:02', 'CYTOLOGY', 'CYTOLOGY', NULL, NULL, NULL, NULL, NULL, 'cytology'),
(167, 'CT Orbit', 'CT ORBIT', 'test-dedcc7ce-f28b-449b-80c6-2479e3b1611c.jpg', '2500', '2024-06-05 02:28:25', '2024-06-06 00:22:47', 'CT ORBIT', 'CT ORBIT', NULL, NULL, NULL, NULL, NULL, 'ct-orbit'),
(168, 'CT Brain', 'CT BRAIN', 'test-42aa3965-26b4-4b48-bdac-32c013431411.jpg', '2500', '2024-06-05 02:29:04', '2024-06-06 00:27:49', 'CT BRAIN', 'CT BRAIN', NULL, NULL, NULL, NULL, NULL, 'ct-brain'),
(169, 'CT PNS', 'CT PNS', 'test-2f1ee11e-d8fa-4467-9c90-f1a72f809fc9.jpg', '2500', '2024-06-05 02:29:40', '2024-06-06 00:30:34', 'CT PNS', 'CT PNS', NULL, NULL, NULL, NULL, NULL, 'ct-pns'),
(170, 'CT Brain Night', 'CT BRAIN NIGHT', 'test-06f20bfc-7edc-41bb-9686-ca5f70995178.jpg', '2600', '2024-06-05 02:30:12', '2024-06-06 00:32:23', 'CT BRAIN NIGHT', 'CT BRAIN NIGHT', NULL, NULL, NULL, NULL, NULL, 'ct-brain-night'),
(171, 'CT Ankle', 'CT ANKLE', 'test-0fd976ae-f9cd-4d47-a1f2-e97342adf132.jpg', '3600', '2024-06-05 02:31:19', '2024-06-06 00:28:11', 'CT ANKLE', 'CT ANKLE', NULL, NULL, NULL, NULL, NULL, 'ct-ankle'),
(172, 'CT C Spine', 'CT C SPINE', 'test-b17d0992-9d94-4058-9700-123bfee23226.jpg', '4000', '2024-06-05 02:31:52', '2024-06-06 00:33:47', 'CT C SPINE', 'CT C SPINE', NULL, NULL, NULL, NULL, NULL, 'ct-c-spine'),
(173, 'CT Brain & PNS', 'CT BRAIN & PNS', 'test-92689639-e140-49c7-a27e-feaf235cd78e.jpg', '4000', '2024-06-05 02:32:28', '2024-06-06 00:36:23', 'CT BRAIN & PNS', 'CT BRAIN & PNS', NULL, NULL, NULL, NULL, NULL, 'ct-brain-pns'),
(174, 'CT Clavicle', 'CT CLAVICLE', 'test-fe02aa2f-376c-479f-8f23-c6cd9079fa4b.jpg', '4000', '2024-06-05 02:33:12', '2024-06-06 00:38:21', 'CT CLAVICLE', 'CT CLAVICLE', NULL, NULL, NULL, NULL, NULL, 'ct-clavicle'),
(175, 'CT Elbow Joint', 'CT ELBOW JOINT', 'test-f3f574ef-0de5-4825-952c-b44a64f26a4a.jpg', '4000', '2024-06-05 02:33:48', '2024-06-06 02:15:16', 'CT ELBOW JOINT', 'CT ELBOW JOINT', NULL, NULL, NULL, NULL, NULL, 'ct-elbow-joint'),
(176, 'CT Hand', 'CT HAND', 'test-06546581-4018-4516-9f3d-083da0a620e2.jpg', '4000', '2024-06-05 02:34:24', '2024-06-06 00:40:42', 'CT HAND', 'CT HAND', NULL, NULL, NULL, NULL, NULL, 'ct-hand'),
(177, 'CT Knee Single', 'CT KNEE SINGLE', 'test-83ae762a-6b15-4ca1-940f-dee3098cf606.jpg', '4000', '2024-06-05 02:34:57', '2024-06-06 00:45:49', 'CT KNEE SINGLE', 'CT KNEE SINGLE', NULL, NULL, NULL, NULL, NULL, 'ct-knee-single'),
(178, 'CT Neck', 'CT NECK', 'test-ccdbce48-b6a2-405e-ac9c-17b3d4373fdc.jpg', '4000', '2024-06-05 02:35:29', '2024-06-06 00:47:18', 'CT NECK', 'CT NECK', NULL, NULL, NULL, NULL, NULL, 'ct-neck'),
(179, 'CT Shoulder Joint', 'CT SHOULDER JOINT', 'test-336d0f63-f1e8-4f2e-8de7-7b28b48bc372.jpg', '4000', '2024-06-05 02:36:01', '2024-06-06 00:51:02', 'CT SHOULDER JOINT', 'CT SHOULDER JOINT', NULL, NULL, NULL, NULL, NULL, 'ct-shoulder-joint'),
(180, 'CT Scapula', 'CT SCAPULA', 'test-3cf0176c-bec9-4e08-b54f-93c3a0ffa53a.jpg', '4000', '2024-06-05 02:36:35', '2024-06-06 00:53:01', 'CT SCAPULA', 'CT SCAPULA', NULL, NULL, NULL, NULL, NULL, 'ct-scapula'),
(181, 'CT Wrist Joint', 'CT WRIST JOINT', 'test-d5f79444-a22c-4ce9-954d-fb1e94a5e0bb.jpg', '4000', '2024-06-05 02:37:09', '2024-06-06 00:56:35', 'CT WRIST JOINT', 'CT WRIST JOINT', NULL, NULL, NULL, NULL, NULL, 'ct-wrist-joint'),
(182, 'CT Charge', 'CT CHARGE(ABDOMEN)', 'test-44dd065a-c3f5-4a91-9c75-60895342837d.jpg', '4500', '2024-06-05 02:37:42', '2024-06-06 01:04:11', 'CT CHARGE(ABDOMEN)', 'CT CHARGE(ABDOMEN)', NULL, NULL, NULL, NULL, NULL, 'ct-charge'),
(183, 'CT Chest', 'CT CHEST', 'test-1e975567-8369-417d-8b89-d567ea08d16e.jpg', '4500', '2024-06-05 02:38:12', '2024-06-06 01:06:15', 'CT CHEST', 'CT CHEST', NULL, NULL, NULL, NULL, NULL, 'ct-chest'),
(184, 'CT Fore Arm', 'CT FORE ARM', 'test-bb2c011e-03e7-4af0-9f1e-b87475d87607.jpg', '4500', '2024-06-05 02:38:37', '2024-06-06 01:08:07', 'CT FORE ARM', 'CT FORE ARM', NULL, NULL, NULL, NULL, NULL, 'ct-fore-arm'),
(185, 'CT Facial Bone Axial & Coronal', 'CT FACIAL BONE AXIAL & CORONAL', 'test-55c6ffe7-b653-4bef-901d-3dceebb8f3bd.jpg', '4500', '2024-06-05 02:39:10', '2024-06-06 01:09:35', 'CT FACIAL BONE AXIAL & CORONAL', 'CT FACIAL BONE AXIAL & CORONAL', NULL, NULL, NULL, NULL, NULL, 'ct-facial-bone-axial-coronal'),
(186, 'CT Feamour', 'CT FEAMOUR', 'test-38b52231-dbf8-4a28-9b11-42aad6934268.jpg', '4500', '2024-06-05 02:39:41', '2024-06-06 01:15:37', 'CT FEAMOUR', 'CT FEAMOUR', NULL, NULL, NULL, NULL, NULL, 'ct-feamour'),
(187, 'CT Hip Joint', 'CT HIP JOINT', 'test-922f1ffa-67ee-45f4-b649-53f7e08be59d.jpg', '4500', '2024-06-05 02:40:13', '2024-06-06 01:17:06', 'CT HIP JOINT', 'CT HIP JOINT', NULL, NULL, NULL, NULL, NULL, 'ct-hip-joint'),
(188, 'CT Joints', 'CT JOINTS', 'test-7a2e0450-c9d3-4508-8336-db2bd25f68be.jpg', '4500', '2024-06-05 02:40:46', '2024-06-06 01:18:12', 'CT JOINTS', 'CT JOINTS', NULL, NULL, NULL, NULL, NULL, 'ct-joints'),
(189, 'CT Leg Single', 'CT LEG SINGLE', 'test-4cd4f1a1-315c-4fc5-a8dd-748b9bb478fb.jpg', '4500', '2024-06-05 02:41:22', '2024-06-06 01:22:52', 'CT LEG SINGLE', 'CT LEG SINGLE', NULL, NULL, NULL, NULL, NULL, 'ct-leg-single'),
(190, 'CT Pelvis', 'CT PELVIS', 'test-3add63f1-7323-4f3c-b766-8cf1a98d2773.jpg', '4500', '2024-06-05 02:41:52', '2024-06-06 01:24:34', 'CT PELVIS', 'CT PELVIS', NULL, NULL, NULL, NULL, NULL, 'ct-pelvis'),
(191, 'CT Sacrum', 'CT SACRUM', 'test-b4d2e2ca-f00d-4c1b-b16d-05d449e4f300.jpg', '4500', '2024-06-05 02:42:21', '2024-06-06 01:52:52', 'CT SACRUM', 'CT SACRUM', NULL, NULL, NULL, NULL, NULL, 'ct-sacrum'),
(192, 'CT Thyroid Plain', 'CT THYROID PLAIN', 'test-e6f9e7de-38c2-472f-941b-214b7bf7f176.jpg', '4500', '2024-06-05 02:43:01', '2024-06-06 01:29:33', 'CT THYROID PLAIN', 'CT THYROID PLAIN', NULL, NULL, NULL, NULL, NULL, 'ct-thyroid-plain'),
(193, 'HRCT Chest', 'HRCT CHEST', 'test-a26b117f-1980-4c17-ac12-7b09a66b662d.jpg', '4500', '2024-06-05 02:43:34', '2024-06-06 01:33:21', 'HRCT CHEST', 'HRCT CHEST', NULL, NULL, NULL, NULL, NULL, 'hrct-chest'),
(194, 'NCCT Abdomen', 'NCCT ABDOMEN', 'test-df791fca-441d-47af-81a9-abf27480b36c.jpg', '5000', '2024-06-05 02:44:06', '2024-06-06 01:35:00', 'NCCT ABDOMEN', 'NCCT ABDOMEN', NULL, NULL, NULL, NULL, NULL, 'ncct-abdomen'),
(195, 'CECT Abdomen', 'CECT ABDOMEN', 'test-63d2b305-d9ce-48dd-a3ab-4400794db0df.jpg', '5000', '2024-06-05 02:44:41', '2024-06-06 01:38:05', 'CECT ABDOMEN', 'CECT ABDOMEN', NULL, NULL, NULL, NULL, NULL, 'cect-abdomen'),
(196, 'CT Thorax Special', 'CT THORAX SPECIAL', 'test-a2bd814d-d8d7-40fc-9b50-16c1d324d69d.jpg', '6000', '2024-06-05 02:45:16', '2024-06-06 01:42:43', 'CT THORAX SPECIAL', 'CT THORAX SPECIAL', NULL, NULL, NULL, NULL, NULL, 'ct-thorax-special'),
(197, 'CT Angiogram', 'CT ANGIOGRAM', 'test-e4d1ae7c-3809-4834-8aca-1de74d5166f2.jpg', '7500', '2024-06-05 02:45:45', '2024-06-06 01:44:40', 'CT ANGIOGRAM', 'CT ANGIOGRAM', NULL, NULL, NULL, NULL, NULL, 'ct-angiogram'),
(198, 'CT Angiogram Charge', 'CT ANGIOGRAM CHARGE', 'test-88edc5e9-fb8b-4d9d-a41b-030eee0cde15.jpg', '7500', '2024-06-05 02:46:15', '2024-06-06 01:46:17', 'CT ANGIOGRAM CHARGE', 'CT ANGIOGRAM CHARGE', NULL, NULL, NULL, NULL, NULL, 'ct-angiogram-charge'),
(199, 'CT Pelvic & LS Spine', 'CT PELVIC & LS SPINE', 'test-0ee07da5-29e4-427d-b606-4604b6c7b206.jpg', '8000', '2024-06-05 02:46:53', '2024-06-06 01:50:20', 'CT PELVIC & LS SPINE', 'CT PELVIC & LS SPINE', NULL, NULL, NULL, NULL, NULL, 'ct-pelvic-ls-spine');

-- --------------------------------------------------------

--
-- Table structure for table `testbooking`
--

DROP TABLE IF EXISTS `testbooking`;
CREATE TABLE IF NOT EXISTS `testbooking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `email` text,
  `status` text,
  `test_name` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='3';

--
-- Dumping data for table `testbooking`
--

INSERT INTO `testbooking` (`id`, `name`, `phone`, `email`, `status`, `test_name`, `created_at`, `updated_at`) VALUES
(1, 'test', '8921186289', 'admin@gmail.com', 'rejected', 'Glycosylated Hemoglobin(HBA1C), Edta Whole Blood', '2024-05-22 02:21:44', '2024-05-22 03:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` text,
  `name` text,
  `description` text,
  `seotitle` text,
  `seodescription` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `name`, `description`, `seotitle`, `seodescription`, `created_at`, `updated_at`) VALUES
(4, 'testimonial-4.png', 'Manu Varghese', 'I had to get a series of tests done and was quite anxious about the whole process. The staff at the laboratory diagnostic center were incredibly supportive and made the process seamless. They explained each step clearly and ensured I was comfortable throughout. The reports were delivered promptly and were easy to understand. I highly recommend their services.', 'Manu Varghese', 'I had to get a series of tests done and was quite anxious about the whole process. The staff at the laboratory diagnostic center were incredibly supportive and made the process seamless. They explained each step clearly and ensured I was comfortable throughout. The reports were delivered promptly and were easy to understand. I highly recommend their services.', '2024-05-20 06:57:14', '2024-06-07 00:27:01'),
(9, 'testimonial-9.png', 'Roshan', 'The laboratory diagnostic center has been our go-to for all our family’s diagnostic needs. Their state-of-the-art facilities, combined with their highly skilled staff, ensure we receive accurate results every time. Their commitment to maintaining high standards of quality is commendable. We trust them implicitly with our healthcare needs.', 'good center', 'good center', '2024-06-06 23:52:08', '2024-06-07 00:27:59'),
(11, 'testimonial-11.jpg', 'Anil', 'As a healthcare professional, I rely on accurate and timely diagnostic results for my patients. The team at the laboratory diagnostic center has consistently provided top-notch service, delivering precise results in a timely manner. Their professionalism and dedication to patient care truly set them apart in the field of medical diagnostics.', 'Anil', 'As a healthcare professional, I rely on accurate and timely diagnostic results for my patients. The team at the laboratory diagnostic center has consistently provided top-notch service, delivering precise results in a timely manner. Their professionalism and dedication to patient care truly set them apart in the field of medical diagnostics.', '2024-06-07 00:35:56', '2024-06-10 04:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

DROP TABLE IF EXISTS `usercontact`;
CREATE TABLE IF NOT EXISTS `usercontact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `phone` text,
  `message` text,
  `created_at` text,
  `updated_at` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'sumizumix88@gmail.com', '09605347997', 'test1', '2024-08-09 05:34:26', '2024-08-09 05:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `re_entered_password` text,
  `role_id` int DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `re_entered_password`, `role_id`, `remember_token`, `created_at`, `updated_at`, `otp`) VALUES
(8, 'admin123', NULL, 'admin@gmail.com', NULL, '$2y$10$8ES6KbIXN66qRDDP4F838Ov44wyRLzWiIwigyOzyHxL11/dJPvNku', NULL, 0, NULL, '2024-05-13 06:43:26', '2024-07-29 04:18:26', NULL),
(9, 'test', NULL, 'test@gmail.com', NULL, '$2y$10$npkai0N7zTTQ8werTSRJTeCS.t1vN3mxwnLwu1roQLzuS9G1zEQ7.', NULL, 1, NULL, '2024-05-13 06:43:42', '2024-05-13 06:43:42', NULL),
(13, 'archa', '857466222', 'archaaslogiprompt@gmail.com', NULL, '$2y$10$z9sZ2LxOnQbjWZtiGVhJJOqzd.YM/Hx7Yb.oibtjzVqZDfzgjMPci', NULL, 1, NULL, '2024-05-14 01:43:17', '2024-05-14 01:43:17', NULL),
(14, 'govind', '8529637414', 'govindr.logiprompt@gmail.com', NULL, '$2y$10$MpNlQhug64qrc0JnTWUi2.rTZoqkV5Y4PDqR4GIV7YL2qGVLJv3V2', NULL, 1, NULL, '2024-05-14 01:44:50', '2024-05-14 01:44:50', NULL),
(16, 'archa', '6282460442', 'archaas040@gmail.com', NULL, '$2y$10$5KO9OuWRkLNTW5l4NOq2rucAp.wk6qoowx9pSHZlp7vsjConqJOcC', NULL, 2, NULL, '2024-05-26 04:18:26', '2024-05-26 04:18:26', NULL),
(17, 'sumi', '09605347997', 'sumi@gmail.com', NULL, '$2y$10$VZdhbVYRONKkXcjVq2gp2eP6r/cHIOltVt2HNR3WHE8E68AucCWnK', NULL, 2, NULL, '2024-05-26 23:35:53', '2024-08-08 23:03:54', NULL),
(18, 'aman', '123456789', '123456789@example.com', NULL, '$2y$10$w4W28TttaGoJYBWjA.m/yu7p.G/cXH85ZkBBoKgjjO1Q0hIwukE9W', NULL, 1, NULL, '2024-05-31 02:11:51', '2024-05-31 02:11:51', NULL),
(19, 'tom', '7896541230', '7896541230@gamil.com', NULL, '$2y$10$rtvgvyJY3RJ1EUBpDX1X7uyOh0kUyDCWunqm9fnhYC5y3UNytOMDK', NULL, 1, NULL, '2024-05-31 02:16:13', '2024-05-31 02:16:13', NULL),
(20, 'testdata', '963857412', '963857412@example.com', NULL, '$2y$10$SPclo/px2rCQ77tlZBOEZ.nSyTbc8FC.UGSS0czFi9bTwyJDUUeGq', NULL, 1, NULL, '2024-05-31 02:23:10', '2024-05-31 02:23:10', NULL),
(21, 'sumiya', '8129641262', '8129641262@example.com', NULL, '$2y$10$DXbsp65Ot.WqxM4DHqPnOu398zVwkAuWMgrQUOrdsXaIXomU2TK6W', NULL, 1, NULL, '2024-06-05 02:16:15', '2024-06-05 02:16:15', NULL),
(22, 'test', '9645438496', 'jeejagopinath22@gmail.com', NULL, '$2y$10$DJTOqC/h0DAYp/fW3o5ENO/Vd1ZVeRo8w9HhWK5V/oVVhBKJ8n352', NULL, 2, NULL, '2024-06-07 00:02:45', '2024-06-07 00:02:45', NULL),
(23, 'logiprompt test', '9847912044', 'vishnu@gmail.com', NULL, '$2y$10$/gkKjszlpYQ3L7zCJ1IAiucHGVZAyw2VptSiZ319E4iq4qA3wSxCu', NULL, 2, NULL, '2024-06-07 06:52:01', '2024-06-07 06:52:01', NULL),
(24, 'sumiyya test', '9847912044', 'sumiyya@gmail.com', NULL, '$2y$10$8ACpr6vE4nQwd9pG/G92F./zSaSKJwJKuDora5.tfSp3oBSN0e0rm', NULL, 2, NULL, '2024-06-07 06:53:09', '2024-06-07 06:53:09', NULL),
(25, 'Sindhya', '9496546639', 'sindhya@gmail.com', NULL, '$2y$10$/SZsnEIdpmptJneRuLYTsuODd8Bn7dUAH9VrXGhsE2R5S7tCYL6zm', NULL, 2, NULL, '2024-06-07 09:49:28', '2024-06-07 09:49:28', NULL),
(26, 'Sojan Jose', '08592981172', 'sojanjose0020@gmail.com', NULL, '$2y$10$dFdMBaFYBXZ/vVbfk4C65uTw/yk7dPCOwU4tu7HiSTnKeD0q1hBda', NULL, 2, NULL, '2024-06-12 03:44:04', '2024-06-12 03:44:04', NULL),
(27, 'Aneesh Ramachandran', '08943043767', 'aneeshpournami92@gmail.com', NULL, '$2y$10$qBcbVCft4wMVDIWcz5EXyejk3Zsh9NwzF8zBqVYMQ8h62mgodykPO', NULL, 2, NULL, '2024-06-19 02:16:04', '2024-06-19 02:16:04', NULL),
(28, 'archa', '8921186289', NULL, NULL, NULL, NULL, 2, NULL, '2024-06-20 00:27:59', '2024-06-20 00:27:59', NULL),
(29, 'soniya', '9495205073', NULL, NULL, NULL, NULL, 2, NULL, '2024-06-20 00:59:32', '2024-06-20 00:59:32', NULL),
(30, 'Mir', '9849286546', NULL, NULL, NULL, NULL, 2, NULL, '2024-06-27 07:37:03', '2024-06-27 07:37:03', NULL),
(31, 'AJITH', '9995482171', NULL, NULL, NULL, NULL, 2, NULL, '2024-06-28 00:07:56', '2024-06-28 00:07:56', NULL),
(32, 'raj', '9995555473', NULL, NULL, NULL, NULL, 2, NULL, '2024-07-12 01:14:58', '2024-07-12 01:14:58', NULL),
(33, 'GOVIND', '9447421339', NULL, NULL, NULL, NULL, 2, NULL, '2024-07-20 03:56:13', '2024-07-20 03:56:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE IF NOT EXISTS `user_reg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` text,
  `uphone` text,
  `umail` text,
  `upassword` text,
  `role_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `uname`, `uphone`, `umail`, `upassword`, `role_id`, `created_at`, `updated_at`) VALUES
(5, 'test', '3254136688', 'govindr.logiprompt@gmail.com', '$2y$10$S4qW1w//Zd7e2lR3QhCiKuIlCi.dwJQgnE6RnO8UTvr1fOjNbF1rC', 2, '2024-05-23 00:52:26', '2024-05-23 00:52:26'),
(6, 'Archa A S', '8921186289', 'archaas040@gmail.com', '$2y$10$oOCzGz71bapiX5eYlWJx8.4KmHs775XenTPD.zxUye6ANunL6RFrK', 2, '2024-05-25 01:55:36', '2024-05-25 01:55:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
