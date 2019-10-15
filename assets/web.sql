-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2016 at 09:49 AM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(500) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `date`, `content`, `post_id`) VALUES
(28, 'Yulia Oktaviani', 'yuliaay@gmail.com', '2016-10-04 09:10:16', 'Infonya baguss, ditunggu next infonya.. wkwk', 1),
(29, 'khatami', 'khatamih15@gmail.com', '2016-10-04 10:10:02', 'nice info senpai , di tambah lagi post yang bermanfaat ;)', 3),
(32, 'Mark Zuckerberg', 'Mark@Zuckerberg.com', '2016-10-04 08:10:01', 'What a great blog! i need an employee like you in my company.', 3),
(38, 'M. Wiguna Saputra', 'mwiguna33@gmail.com', '2016-10-05 11:47:09', 'HBD Yulia Oktaviani! Wish You All The BEST! Semoga dapat menjadi lebih baik, semua urusan nya di permudah, Amiinn.. \r\n\r\n***** Dari Sistem Informasi 15 *****', 1),
(46, 'Yuliaaa', 'yuliaay@gmail.com', '2016-10-05 13:19:10', 'Makasihh banyaaak wigunaaa dan semuaa sistem informasi 15. Skalian promo blog norman nii wkwk ', 1),
(47, 'Nurfitriani', 'nurfitriani95@gmail.com', '2016-10-12 19:35:55', 'that&#039;s great information, and it really help me, thanks', 3);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tags` varchar(200) NOT NULL,
  `comment_id` varchar(10) NOT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `category`, `date`, `tags`, `comment_id`, `path`) VALUES
(1, 'Cara Menampilkan Kode Program di Halaman HTML', 'Ada banyak cara untuk menampilkan kode program di halaman html, salah satunya adalah dengan menggunakan library Javascript yang bernama CodeMirror. CodeMirror ini selain berfungsi untuk menampilkan kode program, juga bisa berfungsi sebagai text editor pada browser.', 'Pemrograman', '2016-10-01', 'cara, menampilkan, kode, program, html, halaman, codemirror, tryit, editor, sublime, notepad++', 'comm_1', 'cara-menampilkan-kode-program-di-halaman-html'),
(2, 'Unity 8 Preview Keluar, Begini Cara Menginstalnya di Ubuntu 16.04', 'Kabar gembira buat pengguna Ubuntu, akhirnya Unity 8 keluar juga!. Yah, walaupun masih versi preview sih, tapi bagi yang udah kebelet pengen nyobain unity 8, bisa langsung diinstal di komputernya.', 'Sistem Operasi', '2016-09-23', 'unity, 8, keluar, begini, cara install, ubuntu, 17.04, 16.04', 'comm_2', 'unity-8-keluar-begini-cara-instalnya'),
(3, 'Cara Menampilkan Notifikasi Android di Komputer', 'PushBullet adalah aplikasi yang akan memberikan notifikasi Android langsung dari komputer, jadi kita gak perlu repot-repot lagi mencari-cari ponsel saat berbunyi.\r\nPushBullet selain untuk mengecek notifikasi, juga bisa digunakan untuk membalas email, transfer gambar dan file, kontak, dan masih banyak lagi.', 'Aplikasi', '2016-09-20', 'cara, menampilkan, notifikasi, android, komputer, pushbullet, aplikasi', 'comm_3', 'cara-menampilkan-notifikasi-android-di-komputer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Yulia', '65a73f29730d3519bd7dd98ab954ed56'),
('Norman', 'b858475979677428762a5ff7400b993e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
