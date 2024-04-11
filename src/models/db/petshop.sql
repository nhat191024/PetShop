-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 11, 2024 lúc 04:26 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `petshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `role` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Fumino', 'richberchannel01@gmail.com', 'fumino', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `breed`
--

DROP TABLE IF EXISTS `breed`;
CREATE TABLE IF NOT EXISTS `breed` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `breed`
--

INSERT INTO `breed` (`id`, `name`, `create_at`, `update_at`) VALUES
(2, 'Shiba', '2024-04-03 02:10:53', '2024-04-11 04:01:19'),
(3, 'Samoyed', '2024-04-03 05:34:47', '2024-04-03 05:34:47'),
(4, 'Pit bull', '2024-04-03 05:35:04', '2024-04-03 05:35:04'),
(5, 'Boerboel', '2024-04-03 05:42:42', '2024-04-03 05:42:42'),
(6, 'Shepherd', '2024-04-03 05:43:37', '2024-04-03 05:43:37'),
(7, 'Dobermann', '2024-04-03 05:45:24', '2024-04-03 05:45:24'),
(8, 'Pomeranian', '2024-04-03 05:59:46', '2024-04-03 05:59:46'),
(9, 'Pembroke Welsh Corgi', '2024-04-03 06:00:15', '2024-04-03 06:00:15'),
(10, 'PhuQuoc', '2024-04-03 06:02:51', '2024-04-03 06:02:51'),
(14, 'Japanese Chin', '2024-04-03 06:21:37', '2024-04-03 06:21:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `quantity` int NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'red'),
(2, 'white'),
(5, 'yellow'),
(6, 'Brown'),
(7, 'Orange');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Mars Petcare Inc.', '2024-04-06 03:05:39', '2024-04-11 03:35:45'),
(2, 'Pedigree Petfoods', '2024-04-10 13:46:38', '2024-04-10 13:46:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet`
--

DROP TABLE IF EXISTS `pet`;
CREATE TABLE IF NOT EXISTS `pet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `age` int NOT NULL,
  `gender` tinyint NOT NULL,
  `source_id` int NOT NULL,
  `breed_id` int NOT NULL,
  `color_id` int NOT NULL,
  `category_id` int NOT NULL,
  `vaccination` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `img_path` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pet`
--

INSERT INTO `pet` (`id`, `name`, `price`, `age`, `gender`, `source_id`, `breed_id`, `color_id`, `category_id`, `vaccination`, `note`, `img_path`, `create_date`, `update_at`) VALUES
(10, 'Max', 132000, 1, 1, 3, 6, 6, 1, 'vaccinated', '', 'upload/PET-6617468f88f5c4.28176837.png', '2024-04-06 08:00:01', '2024-04-11 02:15:24'),
(11, 'Bella', 244112, 2, 1, 5, 4, 6, 1, 'vaccinated', '', 'upload/PET-6610a0466be509.59039720.png', '2024-04-06 08:07:18', '2024-04-06 01:07:18'),
(12, 'Charlie', 3125142, 2, 2, 6, 3, 2, 1, 'vaccinated', '', 'upload/PET-6610a114ee4090.88944155.png', '2024-04-06 08:10:45', '2024-04-06 01:10:45'),
(13, 'Lucy', 1341353, 1, 1, 7, 5, 6, 1, 'vaccinated', '', 'upload/PET-6610a1976923c9.82171300.png', '2024-04-06 08:12:55', '2024-04-06 01:12:55'),
(14, 'Cooper', 213531, 2, 2, 3, 7, 6, 1, 'vaccinated', '', 'upload/PET-6610a1e191fab8.70701279.png', '2024-04-06 08:14:09', '2024-04-06 01:14:09'),
(15, 'Daisy', 131353, 2, 1, 3, 8, 7, 1, 'vaccinated', '', 'upload/PET-6610a2c19eb094.10449141.png', '2024-04-06 08:17:53', '2024-04-06 01:17:53'),
(16, 'Rocky', 323455, 1, 2, 8, 9, 7, 1, 'vaccinated', '', 'upload/PET-6610a34fa586d6.57699885.png', '2024-04-06 08:20:15', '2024-04-06 01:20:15'),
(17, 'Thịnh', 2242123, 3, 2, 1, 10, 6, 1, 'vaccinated', '', 'upload/PET-6610a3f4e46554.80245642.png', '2024-04-06 08:23:00', '2024-04-06 01:23:00'),
(18, 'Doge', 224244, 1, 1, 4, 2, 7, 1, 'vaccinated', '', 'upload/PET-6610a46ca31893.57043014.png', '2024-04-06 08:25:00', '2024-04-06 01:25:00'),
(19, 'Buddy', 2414323, 1, 2, 4, 14, 2, 1, 'vaccinated', '', 'upload/PET-6610a4e3e0a470.09532421.png', '2024-04-06 08:26:59', '2024-04-06 01:26:59'),
(20, 'Sadie', 2423433, 2, 1, 4, 14, 2, 1, 'vaccinated', '', 'upload/PET-6610a512d30549.00548763.png', '2024-04-06 08:27:46', '2024-04-06 01:27:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet_category`
--

DROP TABLE IF EXISTS `pet_category`;
CREATE TABLE IF NOT EXISTS `pet_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pet_category`
--

INSERT INTO `pet_category` (`id`, `name`) VALUES
(1, 'dog'),
(2, 'Cat'),
(3, 'Lion');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet_schedule`
--

DROP TABLE IF EXISTS `pet_schedule`;
CREATE TABLE IF NOT EXISTS `pet_schedule` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `pet_id` int NOT NULL,
  `user_id` int NOT NULL,
  `date` datetime NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet_source`
--

DROP TABLE IF EXISTS `pet_source`;
CREATE TABLE IF NOT EXISTS `pet_source` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pet_source`
--

INSERT INTO `pet_source` (`id`, `name`) VALUES
(1, 'Vietnam'),
(3, 'German'),
(4, 'Japan'),
(5, 'America'),
(6, 'Russia'),
(7, 'South Africa'),
(8, 'Pembrokeshire');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `manufacturer_id` int NOT NULL,
  `category_id` int NOT NULL,
  `quantity` int NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `img_path` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`, `category_id`, `quantity`, `description`, `img_path`, `create_at`, `update_at`) VALUES
(3, 'Pedigree Petfood', 142141, 2, 1, 124, 'sIDUGfiaklsUg9owafhgowpifhwfhkSLJH', 'upload/PRODUCT-6617577c3aa669.45068794.png', '2024-04-11 03:09:41', '2024-04-11 03:22:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Toy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
