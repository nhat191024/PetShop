-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 24, 2024 lúc 12:48 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`, `category_id`, `quantity`, `description`, `img_path`, `create_at`, `update_at`) VALUES
(3, 'Pedigree Petfood', 142141, 2, 1, 120, 'sIDUGfiaklsUg9owafhgowpifhwfhkSLJH', 'upload/PRODUCT-6617577c3aa669.45068794.png', '2024-04-11 03:09:41', '2024-04-24 12:47:15'),
(4, 'Roast Beed Flavor', 213143, 5, 1, 132, 'lsk;dhfjklszjAhfbklsaejfhkla', 'upload/PRODUCT-66204e46ee7215.83916857.png', '2024-04-17 22:33:42', '2024-04-18 17:16:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
