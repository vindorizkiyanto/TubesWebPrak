-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(100) UNSIGNED NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kode_buku` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `penulis`, `sampul`, `judul`, `kode_buku`, `deskripsi`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Helmy Yahya & Baban S', 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/12/12/1b8b1c94-42e3-44af-8654-ef668d526c87.jpg', 'Who The Hell Are You?', 'WTHAY', ' Personal Branding for All\r\n                Jangan pernah bermimpi meraih sukses jika Anda tidak mem', 2, '2021-01-15 09:33:13', '2021-01-15 09:33:13'),
(2, 'Ahmad Harjani', 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/12/24/82c75fa3-2397-43b9-9e51-2976c6fe2bc5.jpg', 'Kesalahan Umum Dalam Salat , Wudhu & Berhadas', 'KUDSWDB', 'Serial kali ini membahas tentang kesalahan umum dalam Salat, Wudhu, dan Berhadas', 3, '2021-01-15 09:33:13', '2021-01-15 09:33:13'),
(3, 'Ibnu Teguh Wibowo', 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/12/24/5677655b-db24-45fc-a2e8-45443edbebe4.jpg', 'MICROSOFT EXCEL ITU MUDAH', 'MEIM', 'Kamu bingung gimana cara mengoperasikan\r\n                rumus-rumus dan formulanya? Tenang, kamu pe', 1, '2021-01-15 09:33:13', '2021-01-15 09:33:13'),
(4, 'Mark Manson', 'https://ecs7.tokopedia.net/img/cache/900/product-1/2020/10/15/24721293/24721293_376dec6b-2b77-4d72-9d88-b80c5973ccf8_775_775', 'SEBUAH SENI UNTUK BERSIKAP BODO AMAT', 'SSUBBM', 'Dalam hidup ini, kita hanya punya\r\n                kepedulian dalam jumlah yang terbatas.\r\n         ', 5, '2021-01-15 09:33:13', '2021-01-15 09:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-01-02-074106', 'App\\Database\\Migrations\\User', 'default', 'App', 1610724783, 1),
(2, '2021-01-02-074233', 'App\\Database\\Migrations\\Buku', 'default', 'App', 1610724783, 1),
(3, '2021-01-02-074343', 'App\\Database\\Migrations\\PeminjamanBuku', 'default', 'App', 1610724783, 1),
(4, '2021-01-15-092724', 'App\\Database\\Migrations\\Peminjaman', 'default', 'App', 1610724783, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(100) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_buku` int(10) UNSIGNED NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(100) NOT NULL,
  `tgl_kembali` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `id` int(100) UNSIGNED NOT NULL,
  `kode_buku` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notelepon` varchar(100) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notelepon` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `nama`, `notelepon`, `level`, `created_at`, `updated_at`) VALUES
(1, 'novaladitya', 'noval@bukuku.com', 'admin', 'Noval Aditya Marlon', '123', 'admin', '2021-01-15 09:33:20', '2021-01-15 09:33:20'),
(2, 'fajruramadhan', 'fajru@bukuku.com', 'admin', 'Muhammad Fajru Ramadhan', '132', 'admin', '2021-01-15 09:33:20', '2021-01-15 09:33:20'),
(3, 'vindorizkiyanto', 'vindo@bukuku.com', 'admin', 'Vindo Rizkiyanto', '213', 'admin', '2021-01-15 09:33:20', '2021-01-15 09:33:20'),
(4, 'azrielbintang', 'azriel@bukuku.com', 'admin', 'Muhammad Azriel Bintang Saputra', '231', 'admin', '2021-01-15 09:33:20', '2021-01-15 09:33:20'),
(5, 'orang', 'orang@bukuku.com', 'bukanadmin', 'Orang', '3333', 'user', '2021-01-15 09:33:20', '2021-01-15 09:33:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_id_user_foreign` (`id_user`),
  ADD KEY `peminjaman_id_buku_foreign` (`id_buku`);

--
-- Indexes for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
