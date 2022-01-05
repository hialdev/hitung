-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 05:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_hitung`
--

-- --------------------------------------------------------

--
-- Table structure for table `belajar`
--

CREATE TABLE `belajar` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `thumbnail` varchar(225) NOT NULL,
  `excerpt` varchar(225) NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `belajar`
--

INSERT INTO `belajar` (`id`, `title`, `thumbnail`, `excerpt`, `body`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Title Belajar', 'img/math-card2.jpg', 'Lorem Ipsum Exerpt', '<h4>Hi, Ini Heading 4</h4>\r\n<p>Hallow wkwkwkw</p>', 'title-belajar', '2022-01-04 17:08:09', '2022-01-04 17:08:09'),
(2, 'Wkwkwkwkwkwkwaerasd', 'img/learn/coca.jpg', 'asdasdasd asdasd weasdasd', '<h2>asdasdasd</h2>\r\n\r\n<ul>\r\n	<li>asdasds</li>\r\n	<li><strong>asdasd</strong></li>\r\n	<li>asdasd</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/kuliah/webapp/hitung/public/upload/1161676163.jpg\" style=\"height:189px; width:266px\" /></p>\r\n', 'wkwkwkwkwkwkwaerasd', '2022-01-04 12:36:48', '2022-01-04 13:27:41'),
(3, 'Hallo ini tester doanganv', 'img/learn/bgblue.jpg', 'wiwiwiwiwwiwiwiwiwiwiw', '<p>asdasdasdasdasdasd</p>\r\n\r\n<p>asdasdasdasasd</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/kuliah/webapp/hitung/public/upload/617088313.jpg\" style=\"height:310px; width:626px\" /></p>\r\n', 'hallo-ini-tester-doanganv', '2022-01-04 12:38:51', '2022-01-04 13:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `whatsapp` varchar(16) NOT NULL,
  `specialist` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `username`, `whatsapp`, `specialist`) VALUES
(1, 'hiamalif', '6289671052050', 'aljabar');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`) VALUES
(1, 2010120024, 'Muhammad Nur Alif', 'Sistem Informasi'),
(2, 2010120023, 'Muhammad Didin Saadduddin', 'Sistem Informasi'),
(5, 2010120012, 'Alwi Ibnul Daratista', 'Sistem Information');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `jawaban` varchar(500) NOT NULL,
  `topik_id` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `topik` varchar(225) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `jenis`, `topik`, `soal`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'pg', 'perkalian', '2 x 4 adalah', '8', '2022-01-05 06:51:52', '2022-01-05 06:58:33'),
(2, 'essay', 'perkalian', '12732 x 0 + 7123 x 0 +12 x 1 x 3 =', '15', '2022-01-05 06:59:17', '2022-01-05 06:59:17'),
(4, 'pg', 'pembagian', '8 / 2 =', '4', '2022-01-05 07:01:05', '2022-01-05 07:01:05'),
(5, 'pg', 'pembagian', '6123 x 0 + 25 / 2 =', '17,5', '2022-01-05 07:01:44', '2022-01-05 07:01:44'),
(6, 'essay', 'pembagian', '20 x 100 : 20 + 20 + 100 : 100 =', '122', '2022-01-05 07:02:58', '2022-01-05 07:02:58'),
(7, 'pg', 'perkalian', '72 x 10 : 72 : 2 x 20 =', '100', '2022-01-05 07:04:04', '2022-01-05 07:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `image`, `role`, `created_at`, `updated_at`) VALUES
(1, 'aldev', 'aldev', 'aldev@mail.com', '$2y$10$0kAzJ.vbGuXFHPFohnn8n.uqmDRrZon8qyhbCABSZY79GZpPPOF9y', 'img/userimage.jpg', 'user', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Admin Aldev', 'adminganteng', 'admin@hitung.com', '$2y$10$0A9d7yvqpJJe9YR4kR/9C.jP/3lEy4gAhC.WRg7l/S5ziIEJKZS4e', 'img/userimage.jpg', 'admin', '2022-01-03 23:17:20', '2022-01-03 23:17:20'),
(5, 'alip123', 'alipeuy', 'al@alip.com', '$2y$10$osUoXFCG9lJUi7Vii5.IrekviD7NwNnL.oSN4xHwrQRyA10ca5jP2', 'img/alipeuy/bgblue.jpg', 'user', '2022-01-04 06:19:54', '2022-01-04 07:59:20'),
(6, 'Coba Aja', 'coba123', 'coba@gmail.com', '$2y$10$t3fsIwLDZgnRgPUs9BVqweg6pVo7PVPxLYXm1Vp3KwqJ/NWUw21o6', 'img/userimage.jpg', 'user', '2022-01-04 08:00:40', '2022-01-04 08:00:40'),
(7, 'Alip MTKWANE', 'hiamalif', 'alip@alip.com', '$2y$10$6jUc3gPZ.tw2JYR1sgxyM.4TGFcpeiE/sQ3xbN8RJ7zBeE3CAivG6', 'img/hiamalif/bgblue.jpg', 'expert', '2022-01-04 22:48:37', '2022-01-04 23:25:50'),
(8, 'Alip MTKWAN', 'hiamalif', 'alip@alip.com', '$2y$10$z/ruFGrGqsvH4oHsq.gmD.ly6ALcUu2/ioOtrehmc1P/HIgLgEXlG', 'img/userimage.jpg', 'expert', '2022-01-04 22:50:31', '2022-01-04 22:50:31'),
(9, 'Alip MTKWAN', 'hiamalif', 'alip@alip.com', '$2y$10$rtugRNYbPEG/hxhqsruy2u3kMgWLSSleHj93vWZSa.grg2A54N1NC', 'img/userimage.jpg', 'expert', '2022-01-04 22:51:25', '2022-01-04 22:51:25'),
(10, 'Alip MTKWAN', 'hiamalif', 'alip@alip.com', '$2y$10$cLYX6f32kIW8DM2zc30fsurpgDNVRdTc/WWzFbBo21q.07r898Lc2', 'img/userimage.jpg', 'expert', '2022-01-04 22:52:21', '2022-01-04 22:52:21'),
(11, 'Alip MTKWAN', 'hiamalif', 'alip@alip.com', '$2y$10$Zg0j5xsxRVlHow0mVE9ZQuGuu6iUImwSfCQcolcHbeIEu0m5ZCEDG', 'img/userimage.jpg', 'expert', '2022-01-04 22:53:24', '2022-01-04 22:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `title`, `icon`, `action`, `url`, `role`) VALUES
(1, 'Profil Saudara', 'carbon:user-avatar-filled', 'Manage', '/user/profile', 'user'),
(2, 'Profil Anda', 'carbon:user-avatar-filled', 'manage', '/user/profile', 'admin'),
(3, 'Belajar Sekarang', 'emojione-monotone:closed-book', 'go!', '/belajar', 'user'),
(4, 'Ikuti Quiz', 'fluent:clipboard-task-list-ltr-24-filled', 'go!', '/quiz', 'user'),
(6, 'Widget Manager', 'bx:bxs-widget', 'Manage', '/widget', 'admin'),
(7, 'Blog Belajar', 'gridicons:posts', 'Manage', '/learn', 'admin'),
(8, 'Hitung Manager', 'ic:round-calculate', 'Manage', '/calc', 'admin'),
(10, 'Quiz Manager', 'fluent:clipboard-task-add-20-filled', 'Manage', '/soal', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `belajar`
--
ALTER TABLE `belajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `belajar`
--
ALTER TABLE `belajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
