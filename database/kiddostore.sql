-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 05, 2020 lúc 09:29 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kiddostore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Đồ chơi an toàn', 'do-choi-an-toan', 1, '2020-06-09 07:24:01', '2020-06-09 07:24:01'),
(2, 'Quần áo', 'quan-ao', 1, '2020-06-09 07:24:20', '2020-06-09 07:43:13'),
(3, 'Quà tặng khuyến mãi', 'qua-tang-khuyen-mai', 0, '2020-06-15 08:57:37', '2020-06-15 08:57:37'),
(4, 'Giày dép', 'giay-dep', 1, '2020-06-09 07:38:28', '2020-06-09 07:42:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `idUser`, `email`, `address`, `phone`, `active`, `created_at`, `updated_at`) VALUES
(1, 4, 'godzofwar96@gmail.com', 'Nam Từ Liêm', '0333869613', 0, '2020-06-10 10:24:59', '2020-06-10 10:26:02'),
(2, 4, 'godzofwar96@gmail.com', 'Đại Mỗ - Nam Từ Liêm - Hà Nội', '0333869613', 0, '2020-06-10 10:26:02', '2020-06-10 10:27:53'),
(3, 4, 'godzofwar96@gmail.com', 'CĐN CNC Hà Nội', '0333869613', 1, '2020-06-10 10:27:53', '2020-06-10 10:27:53'),
(4, 7, 'nvana@gmail.com', 'Nam Từ Liêm', '0333869613', 0, '2020-06-14 19:45:43', '2020-06-14 19:45:54'),
(5, 7, 'nvana@gmail.com', 'Hà Nội', '0333869613', 1, '2020-06-14 19:45:54', '2020-06-14 19:45:54'),
(6, 6, 'dungngao@gmail.com', 'Tộc Dung - Sông Lô - Vĩnh Phúc', '0521512351', 1, '2020-06-22 18:01:33', '2020-06-22 18:01:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2020_06_02_011908_create_categories_table', 1),
(46, '2020_06_02_012057_create_product_types_table', 1),
(47, '2020_06_02_012118_create_products_table', 1),
(48, '2020_06_02_012149_create_orders_table', 1),
(49, '2020_06_02_012208_create_order_details_table', 1),
(50, '2020_06_02_012227_create_contacts_table', 1),
(51, '2020_06_02_012452_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monney` double NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `code_order`, `idUser`, `name`, `address`, `email`, `phone`, `monney`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Order889822820', 4, 'Nguyễn Hồng Phi', 'Đại Mỗ - Nam Từ Liêm - Hà Nội', 'godzofwar96@gmail.com', '0333869613', 320000, 'tks shop', 0, '2020-06-15 08:44:37', '2020-06-15 08:44:37'),
(2, 'Order1489299724', 6, 'Nguyễn Thị Dung', 'Tộc Dung - Sông Lô - Vĩnh Phúc', 'dungngao@gmail.com', '0521512351', 1619999, 'chuyển luôn =))', 0, '2020-06-22 18:01:45', '2020-06-22 18:01:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(10) UNSIGNED NOT NULL,
  `idOrder` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `idOrder`, `idProduct`, `name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Bộ quần áo Heo thần tài', 1, 300000, '2020-06-15 08:44:37', '2020-06-15 08:44:37'),
(2, 2, 10, '7 búp bê', 3, 500000, '2020-06-22 18:01:45', '2020-06-22 18:01:45'),
(3, 2, 8, 'Dép Spider-Man', 1, 99999, '2020-06-22 18:01:45', '2020-06-22 18:01:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `promotional` float NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idProducType` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `desciption`, `quantity`, `price`, `promotional`, `idCategory`, `idProducType`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bé tập ghép chữ', 'be-tap-ghep-chu', '<p>B&eacute; tập gh&eacute;p chữ&nbsp;</p>', 101, 250000, 200000, 1, 3, 'Tue-06-20-628610583-bochucai.jpeg', 1, '2020-06-09 07:57:25', '2020-06-15 07:25:06'),
(2, 'Bộ quần áo Heo thần tài', 'bo-quan-ao-heo-than-tai', '<p>Chất liệu cotton tho&aacute;ng m&aacute;t nhưng kh&ocirc;ng hề th&ocirc; cứng, thuận tiện cho hoạt động vui chơi của c&aacute;c b&eacute; nam năng động!</p>', 51, 300000, 0, 2, 1, 'Mon-06-20-2059886389-setconheobenam.jpg', 1, '2020-06-09 08:38:45', '2020-06-15 08:19:17'),
(3, 'Giày IronMan - Nâu đỏ', 'giay-ironman-nau-do', '<p>Phong c&aacute;ch, mềm mại, n&acirc;ng niu đ&ocirc;i ch&acirc;n b&eacute; nhỏ của b&eacute;!</p>', 68, 349999, 249999, 4, 7, 'Tue-06-20-379029010-giaybetrai.jpg', 1, '2020-06-09 08:40:08', '2020-06-09 08:40:08'),
(4, 'Ngôi nhà búp bê', 'ngoi-nha-bup-be', '<p>Nh&agrave; b&uacute;p b&ecirc;</p>', 100, 350000, 250000, 1, 5, 'Wed-06-20-1197715598-ngoi-nha-bup-be.jpg', 1, '2020-06-09 21:29:10', '2020-06-09 21:29:10'),
(5, 'Set sơ mi quần kẻ', 'set-so-mi-quan-ke', '<p>Sang trọng - Lịch l&atilde;m</p>', 50, 499999, 0, 2, 1, 'Mon-06-20-84817970-set-so-mi-quan-ke.jpg', 1, '2020-06-14 18:39:45', '2020-06-14 18:39:45'),
(6, 'Bộ chân váy cho bé gái', 'bo-chan-vay-cho-be-gai', '<p>Đ&aacute;ng y&ecirc;u - Phong c&aacute;ch - B&aacute;nh b&egrave;o - V&ocirc; dụng</p>', 30, 799999, 0, 2, 2, 'Mon-06-20-653119260-bo-chan-vay.jpg', 1, '2020-06-14 18:41:11', '2020-06-14 18:41:11'),
(7, 'Búp bê biết nói!', 'bup-be-biet-noi!', '<p>Đ&acirc;y l&agrave; 1 con b&uacute;p b&ecirc; nhưng tuyệt đối kh&ocirc;ng biết n&oacute;i hay di chuyển!</p>', 45, 299999, 0, 1, 6, 'Mon-06-20-291072301-bup-be-ngoi.jpg', 1, '2020-06-14 18:43:19', '2020-06-14 18:43:19'),
(8, 'Dép Spider-Man', 'dep-spider-man', '<p>D&eacute;p si&ecirc;u bền phi&ecirc;n bản Người nhện =)) d&iacute;nh hơn shit!</p>', 70, 99999, 0, 4, 7, 'Mon-06-20-1032577229-depspiderman.jpg', 1, '2020-06-14 18:45:54', '2020-06-14 18:45:54'),
(9, 'Dày nơ - hồng - siêu đẹp', 'day-no-hong-sieu-dep', '<p>D&agrave;y d&eacute;p cho b&eacute; g&aacute;i - si&ecirc;u dễ thương</p>', 80, 184999, 149999, 4, 8, 'Mon-06-20-268644863-day-no-hong.jpg', 1, '2020-06-14 18:46:48', '2020-06-14 18:46:48'),
(10, '7 búp bê', '7-bup-be', '<p>&aacute;adasd</p>', 20, 500000, 0, 1, 6, 'Mon-06-20-846850080-7-bup-be.jpg', 1, '2020-06-14 19:58:33', '2020-06-14 19:58:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`id`, `idCategory`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Quần áo bé trai', 'quan-ao-be-trai', 1, '2020-06-09 07:25:12', '2020-06-09 07:25:12'),
(2, 2, 'Quần áo bé gái', 'quan-ao-be-gai', 1, '2020-06-09 07:25:24', '2020-06-09 07:25:24'),
(3, 1, 'Đồ chơi giáo dục', 'do-choi-giao-duc', 1, '2020-06-09 07:26:54', '2020-06-09 07:26:54'),
(4, 1, 'Đồ chơi vận động', 'do-choi-van-dong', 1, '2020-06-09 07:27:15', '2020-06-09 07:27:15'),
(5, 1, 'Xếp hình - Sáng tạo', 'xep-hinh-sang-tao', 1, '2020-06-09 07:27:37', '2020-06-09 07:27:37'),
(6, 1, 'Đồ chơi trẻ sơ sinh', 'do-choi-tre-so-sinh', 1, '2020-06-09 07:35:20', '2020-06-09 07:41:53'),
(7, 4, 'Giày dép bé trai', 'giay-dep-be-trai', 1, '2020-06-09 08:02:52', '2020-06-09 08:02:52'),
(8, 4, 'Giày dép bé gái', 'giay-dep-be-gai', 1, '2020-06-09 08:03:04', '2020-06-09 08:03:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `social_id`, `avatar`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Thị Hiền', 'nguyenthihien@gmail.com', '$2y$10$gwClD8BkPPzpKqcuekJ2mOFCLfgEX9ZBknxdmZU173oT.LP5VNq9m', NULL, NULL, 2, 0, NULL, 'hScqqBiO3XGwvQLf3KCYLFMBQgxu1nSca8bzj2ySnadAIQgrGDT4faVDjnVK', '2020-06-09 07:01:46', '2020-06-09 07:01:46'),
(4, 'Nguyễn Hồng Phi', 'godzofwar96@gmail.com', '$2y$10$gZlWoBka8ZrfgDyONiSqSOxnTEXzOMjJHQHA0Zfl6XuP8dsXFX/4u', '3026810894101731', 'https://graph.facebook.com/v3.3/3026810894101731/picture?type=normal', 0, 0, NULL, 'SpxBfil6en8qSWxV92yamPrbyAbXc5BA3ysV6oz652WjWnQ82RxdC0JZQNtQ', '2020-06-09 21:27:02', '2020-06-09 21:27:21'),
(5, 'Nguyễn Hồng Phi', 'kiddostore@gmail.com', '$2y$10$xB22UiL9Rb5h2b7aSf3yseprLCtK2L9Srd9wthCn/CKODU5KgW1AK', NULL, NULL, 1, 0, NULL, 'vhyra0NjlwTgtJGI2e2TM8PKv14etJfI6QdeXxmnKIsz7qCS7MqT7hhTGKhB', NULL, NULL),
(6, 'Nguyễn Thị Dung', 'dungngao@gmail.com', '$2y$10$Co0McUb6WIeWQbqnDGUgKe5BK07UDvrr1NKzor64RVWGm4LQyVq9S', NULL, NULL, 3, 0, NULL, 'XGX1MOJHsizi0ntluL0l4XJazlm8jrOD00aS84ph89BxweFGrT1Hk1ygZraL', '2020-06-14 18:30:03', '2020-06-14 18:30:03'),
(7, 'Nguyễn Văn A', 'nvana@gmail.com', '$2y$10$5Sn6skAQgD1CyVjf9TGk5.JBqrV9iwcL0HECgAB1R/38gWEhlLVp.', NULL, NULL, 0, 0, NULL, 'VCCCoFFWHLUc5L2Owy3WIR1kb1CvWpqAvlhQQPJfOPVI6gqBPtNIXYlZjKw0', '2020-06-14 19:35:01', '2020-06-14 19:35:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
