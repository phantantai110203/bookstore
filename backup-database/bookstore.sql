-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 10:44 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `InfoAuthor` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `DateOfBirth`, `InfoAuthor`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shiv Khera', '1961-08-23', 'Shiv Khera là một tác giả, nhà hoạt động và diễn giả truyền động lực người Ấn Độ, nổi tiếng với cuốn sách You Can Win. Ông đã phát động phong trào chống lại sự bảo lưu dựa trên đẳng cấp ở Ấn Độ, thành lập một tổ chức mang tên Country First Foundation', '2017-05-27 07:40:25', '2017-05-27 07:40:25', NULL),
(2, 'Aoyama Gosho', '1963-06-21', 'Aoyama Gosho từ lúc còn trẻ đã là một người vẽ rất giỏi. Khi còn học ở trường cấp 2, Aoyama đã từng đoạt giải nhất một cuộc thi vẽ tranh với bức vẽ mang tên \"Cuộc chiến Yukiai\", và bức tranh này đã được trưng bày tại cửa hàng Daimaru ở Tottori, quê hương của ông. Ông tốt nghiệp trường cấp ba Ikuei. Sau đó, ông theo học ngành Mỹ thuật tại trường Đại học Nhật Bản', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL),
(3, 'Matt Crossick', '0000-00-00', 'Đang cập nhật', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL),
(4, 'Trần Văn Hạo', '0000-00-00', 'Đang cập nhật', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL),
(5, 'Vũ Công Tấn Tài', '0000-00-00', 'Vũ Công Tấn Tài, hiện tại mình đang làm việc như là một lập trình viên full-stack toàn thời gian trong lĩnh vực phát triển ứng dụng Web và tham gia vào các dự án triển khai hệ thống CI/CD phục vụ cho các yêu cầu nâng cao chất lượng sản phẩm.Bên cạnh công việc chính, mình cũng thường tham gia hướng dẫn các lớp học lập trình cũng như tổ chức các buổi chia sẻ kinh nghiệm làm việc cho các bạn sinh viên. Với mong muốn chia sẻ thật nhiều kiến thức, trong cuốn sách này, mình sẽ đem đến và chia sẻ với các bạn nhiều điều về nghề lập trình cũng như công việc của những nhà phát triển phần mềm – hay chúng ta vẫn quen gọi là “lập trình viên”.', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `quality` int(11) DEFAULT 0,
  `img` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `publish_date`, `price`, `quality`, `img`, `created_at`, `updated_at`, `deleted_at`, `author_id`, `categories_id`) VALUES
(1, 'You Can Win - Bí Quyết Của Người Chiến Thắng (Tái Bản)', 'You Can Win - Bí Quyết Của Người Chiến Thắng .Với cách đặt vấn đề dễ hiểu, thiết thực và sâu sắc, <strong>Bí quyết của người chiến thắng sẽ giúp bạn tránh rơi vào cảm giác mất phương hướng, biết xác định mục tiêu và những giá trị cần ưu tiên trong cuộc sống. Có  thể xem cuốn sách này như một quyển sổ tay liệt kê những công cụ cần  thiết để kiến tao thành công và giúp bạn tạo lập một cuộc sống tốt đẹp.  Cũng có thể xem nó như một cuốn cảm nang dạy nấu ăn, bao gồm những chỉ  dần về nguyên liệu, công thức và cách pha trộn theo tỉ lệ thích hợp để  có được thành công. Nhưng  trên hết, đây là cuốn sách từng bước dẫn dặt bạn đi từ mơ ước, khát vọng  thành công đến khám phá năng lực của bản thân và biến ước mơ thành hiện  thực .Bí  quyết sẽ giúp bạn xây dựng mục tiêu mới, hình thành ý niệm mới về mục  đích sống, phát triển tư tưởng mới về bản thân và tương lai. Một  trong những mục đích của cuốn sách là giúp bạn đề ra kế hoạch hành động  cho tương lai. Nếu chưa bao giờ làm vậy, bạn hãy xác định xem- Bạn muốn đạt được điều gì? - Bạn muốn đạt được mục tiêu bằng cách nào?- Thời điểm bạn muốn đạt được mục tiêu là khi nào? Những  nguyên tắc trình bày trong cuốn sách đều mang tính phổ quát, áp dụng cho  mọi tình huống, tổ chức hoặc quốc gia. Hy vọng cuốn sách sẽ mang lại  cho bạn nhiều điều mới mẻ v&agragrave; những khám phá thú vị.', '2015-12-14', 120000, 86, 'hinh1.jpg', '2017-05-27 07:40:25', '2017-05-27 07:40:25', NULL, 1, 1),
(2, 'Thám tử lừng danh conan - Tập 89', 'Thám tử lừng danh Conan là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 104 tập tankōbon tính đến tháng 10 năm 2023', '1994-01-19', 58000, 26, 'conan89.u2469.d20160901.t170642.630976.jpg', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL, 2, 2),
(3, 'Thám tử lừng danh conan - Tập 87', 'Thám tử lừng danh Conan là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 104 tập tankōbon tính đến tháng 10 năm 2023', '1994-01-19', 56000, 30, 'conan-87-u335-d20160516-t151643.u2487.d20161019.t142926.381590.jpg', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL, 2, 2),
(4, 'Thám tử lừng danh conan - Tập 90', 'Thám tử lừng danh Conan là một series manga trinh thám được sáng tác bởi Aoyama Gōshō. Tác phẩm được đăng tải trên tạp chí Weekly Shōnen Sunday của nhà xuất bản Shogakukan vào năm 1994 và được đóng gói thành 104 tập tankōbon tính đến tháng 10 năm 2023', '1994-01-19', 76000, 23, 'conan90.u2751.d20170221.t111539.890106.png', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL, 2, 2),
(5, 'Hành Trang Lập Trình', 'trong cuốn sách này, tác giả sẽ đem đến cho các bạn nhiều điều về nghề lập trình cũng như công việc của những nhà phát triển phần mềm – hay chúng ta vẫn hay gọi là nghề “lập trình viên”.', '2020-01-02', 76000, 23, 'conan90.u2751.d20170221.t111539.890106.png', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL, 5, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kỹ năng sống', 'Sách Kỹ năng sống là tập hợp các hành vi tích cực và khả năng thích nghi cho phép mỗi cá nhân đối phó hiệu quả với các nhu cầu và thách thức của cuộc sống hàng ngày', '2017-05-27 07:40:25', '2017-05-27 07:40:25', NULL),
(2, 'Truyện Tranh', 'Truyện tranh hay mạn họa là một phương tiện được sử dụng để diễn đạt ý tưởng bằng hình ảnh, thường kết hợp với văn bản hoặc thông tin hình ảnh khác. Thông thường, nó có dạng một chuỗi các khung hình liên tiếp. Các yếu tố văn bản như ô bóng chữ, chú thích, và Từ tượng thanh có thể chỉ ra đối thoại, diễn đạt, hiệu ứng âm thanh hoặc thông tin khác', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL),
(3, 'Sách Giáo Khoa', 'SGK là loại sách cung cấp kiến thức, được biên soạn với mục đích dạy và học tại trường học[1][2]. Thuật ngữ sách giáo khoa còn có nghĩa mở rộng là một loại sách chuẩn cho một ngành học. Sách giáo khoa được phân loại dựa theo đối tượng sử dụng hoặc chủ đề của sách. Việc xuất bản sách giáo khoa thường dành cho các nhà xuất bản chuyên ngành.', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL),
(4, 'Sách Công Nghệ Thông Tin', 'Cung cấp cho người đọc những kiến thức về công nghệ thông tin ', '2023-12-12 07:40:25', '2023-12-12 07:40:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `URL_Image` varchar(50) NOT NULL,
  `Content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favoritebooks`
--

CREATE TABLE `favoritebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Total` bigint(20) DEFAULT NULL,
  `ShippingAddress` varchar(50) DEFAULT NULL,
  `ShippingPhone` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unitprice` bigint(20) DEFAULT NULL,
  `PaymentMethods` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_23_133156_create_books_table', 1),
(6, '2023_11_23_155402_create_authors_table', 1),
(7, '2023_11_24_012653_create_categories_table', 1),
(8, '2023_11_24_013820_create_images_table', 1),
(9, '2023_11_24_014028_create_slide_shows_table', 1),
(10, '2023_11_25_151510_create_invoice_details_table', 1),
(11, '2023_11_25_152240_create_invoices_table', 1),
(12, '2023_11_25_153637_create_carts_table', 1),
(13, '2023_11_25_154650_create_comments_table', 1),
(14, '2023_11_25_154900_create_reviews_table', 1),
(15, '2023_11_25_161935_create_payments_table', 1),
(16, '2023_11_27_005210_create_favoritebooks_table', 1),
(17, '2023_11_27_005411_foreign_keys', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `OrderStatus` varchar(50) NOT NULL,
  `NameRecipient` varchar(50) NOT NULL,
  `RecipientPhone` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `invoices_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_shows`
--

CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `password`, `phone`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tài Phan', 'ptai0866@gmail.com', 'Bến Tre', '$2y$10$oXtcssbMwbelHhzyHlGJduj3QZ5LxD3Gd/bZhzvgEkk5K7/h26wxq', '0344312253', 1, NULL, '2023-12-11 07:49:16', '2023-12-11 07:49:16', NULL),
(2, 'Quang Nam', 'quangnam@gmail.com', 'Tiền Giang', '$2y$10$ubUolbCe3fzrKAHAzt9PX.254CYXk.CNK.gS0si6kfv1Er2kauMRu', '0344312254', 1, NULL, '2023-12-11 07:49:16', '2023-12-11 07:49:16', NULL),
(3, 'Quốc Việt', 'quocviet@gmail.com', 'TP HCM', '$2y$10$e1b8dGWO9eEMGOpR4JI8eO2S5EXf2ZnwxzmefF6ZT45Uz/72pLEGK', '0344312255', 1, NULL, '2023-12-11 07:49:16', '2023-12-11 07:49:16', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_book_id_foreign` (`book_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_book_id_foreign` (`book_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `favoritebooks`
--
ALTER TABLE `favoritebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favoritebooks_book_id_foreign` (`book_id`),
  ADD KEY `favoritebooks_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_book_id_foreign` (`book_id`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoice_details_book_id_foreign` (`book_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_invoices_id_foreign` (`invoices_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_book_id_foreign` (`book_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `slide_shows`
--
ALTER TABLE `slide_shows`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `favoritebooks`
--
ALTER TABLE `favoritebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `favoritebooks`
--
ALTER TABLE `favoritebooks`
  ADD CONSTRAINT `favoritebooks_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `favoritebooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Các ràng buộc cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_invoices_id_foreign` FOREIGN KEY (`invoices_id`) REFERENCES `invoices` (`id`);

--
-- Các ràng buộc cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
