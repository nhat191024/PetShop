-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 21, 2024 lúc 02:17 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.2.0

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
  `username` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb3_unicode_ci NOT NULL,
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
-- Cấu trúc bảng cho bảng `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'red'),
(2, 'white'),
(5, 'yellow');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet`
--

DROP TABLE IF EXISTS `pet`;
CREATE TABLE IF NOT EXISTS `pet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `age` int NOT NULL,
  `gender` tinyint NOT NULL,
  `source` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `color_id` int NOT NULL,
  `category_id` int NOT NULL,
  `vaccination` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `note` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pet`
--

INSERT INTO `pet` (`id`, `name`, `price`, `age`, `gender`, `source`, `color_id`, `category_id`, `vaccination`, `quantity`, `note`, `create_date`) VALUES
(2, 'Dog nam', 120000, 2, 2, '1', 5, 1, 'vaccinated', 0, '', '2024-03-16 11:49:33'),
(3, 'Dog nam', 120000, 2, 2, '1', 5, 2, 'vaccinated', 0, '', '2024-03-16 15:09:57'),
(4, 'Dog nam', 143535, 3, 2, '1', 2, 3, 'not vaccinated', 0, '', '2024-03-16 15:10:15'),
(5, 'Dog nam', 1351313, 1, 1, '1', 1, 1, 'vaccinated', 0, '', '2024-03-16 15:10:36'),
(6, 'Dog nam', 213244, 2, 1, '1', 2, 1, 'vaccinated', 0, '', '2024-03-16 15:36:52'),
(7, 'Dog nam', 214124, 2, 1, '1', 2, 2, 'vaccinated', 0, '', '2024-03-16 15:37:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet_category`
--

DROP TABLE IF EXISTS `pet_category`;
CREATE TABLE IF NOT EXISTS `pet_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pet_category`
--

INSERT INTO `pet_category` (`id`, `name`) VALUES
(1, 'dog'),
(2, 'Cat'),
(3, 'Lion');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet_source`
--

DROP TABLE IF EXISTS `pet_source`;
CREATE TABLE IF NOT EXISTS `pet_source` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pet_source`
--

INSERT INTO `pet_source` (`id`, `name`) VALUES
(1, 'VietNam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

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
