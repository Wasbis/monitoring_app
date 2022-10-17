-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2022 pada 05.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoringapps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin1@admin.com', 1, '2022-07-01 05:25:49', 1),
(2, '::1', 'dsa', NULL, '2022-07-01 06:03:47', 0),
(3, '::1', 'admin1@admin.com', 1, '2022-07-01 06:03:55', 1),
(4, '::1', 'admin1@admin.com', 1, '2022-07-01 06:27:39', 1),
(5, '::1', 'admin1@admin.com', 1, '2022-07-01 06:28:39', 1),
(6, '::1', 'admin1@admin.com', 1, '2022-07-01 19:04:14', 1),
(7, '::1', 'admin1@admin.com', 1, '2022-07-01 19:33:57', 1),
(8, '::1', 'admin2@admin.com', 2, '2022-07-02 06:41:50', 1),
(9, '::1', 'admin2@admin.com', 2, '2022-07-02 06:42:03', 1),
(10, '::1', 'admin1@admin.com', 1, '2022-07-02 06:42:15', 1),
(11, '::1', 'admin1@admin.com', 1, '2022-07-02 06:45:34', 1),
(12, '::1', 'admin1@admin.com', 1, '2022-07-02 06:45:47', 1),
(13, '::1', 'admin1@admin.com', 1, '2022-07-02 06:54:19', 1),
(14, '::1', 'admin1@admin.com', 1, '2022-07-02 11:01:18', 1),
(15, '::1', 'admin1@admin.com', 1, '2022-07-02 11:03:41', 1),
(16, '::1', 'admin1@admin.com', 1, '2022-07-02 11:05:13', 1),
(17, '::1', 'admin1@admin.com', 1, '2022-07-02 11:09:40', 1),
(18, '::1', 'admin1@admin.com', 1, '2022-07-02 11:10:43', 1),
(19, '::1', 'admin1@admin.com', 1, '2022-07-02 11:12:29', 1),
(20, '::1', 'admin1@admin.com', 1, '2022-07-02 11:12:42', 1),
(21, '::1', 'admin1', NULL, '2022-07-02 11:14:45', 0),
(22, '::1', 'admin1@admin.com', 1, '2022-07-02 11:14:53', 1),
(23, '::1', 'admin1@admin.com', 1, '2022-07-02 11:18:47', 1),
(24, '::1', 'admin1@admin.com', 1, '2022-07-02 11:20:33', 1),
(25, '::1', 'admin1@admin.com', 1, '2022-07-02 11:33:49', 1),
(26, '::1', 'admin1@admin.com', 1, '2022-07-02 11:41:27', 1),
(27, '::1', 'admin1@admin.com', 1, '2022-07-02 11:56:51', 1),
(28, '::1', 'admin1@admin.com', 1, '2022-07-02 11:57:16', 1),
(29, '::1', 'admin1@admin.com', 1, '2022-07-02 12:01:20', 1),
(30, '::1', 'admin1@admin.com', 1, '2022-07-02 12:09:37', 1),
(31, '::1', 'admin1@admin.com', 1, '2022-07-02 12:16:38', 1),
(32, '::1', 'admin1@admin.com', 1, '2022-07-02 12:17:47', 1),
(33, '::1', 'admin1@admin.com', 1, '2022-07-02 12:25:27', 1),
(34, '::1', 'admin1@admin.com', 1, '2022-07-02 12:44:35', 1),
(35, '::1', 'admin1@admin.com', 1, '2022-07-02 18:08:12', 1),
(36, '::1', 'admin1@admin.com', 1, '2022-07-03 04:02:58', 1),
(37, '::1', 'admin1@admin.com', 1, '2022-07-03 07:35:45', 1),
(38, '::1', 'admin1@admin.com', 1, '2022-07-03 17:43:11', 1),
(39, '::1', 'admin1@admin.com', 1, '2022-07-03 18:46:44', 1),
(40, '::1', 'admin1@admin.com', 1, '2022-07-03 18:46:57', 1),
(41, '::1', 'admin1@admin.com', 1, '2022-07-03 19:15:39', 1),
(42, '::1', 'admin1@admin.com', 1, '2022-07-03 21:06:07', 1),
(43, '::1', 'admin1@admin.com', 1, '2022-07-03 21:12:43', 1),
(44, '::1', 'admin1@admin.com', 1, '2022-07-03 21:23:20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `details`
--

CREATE TABLE `details` (
  `id_detail` int(11) NOT NULL,
  `nama_link` varchar(50) NOT NULL,
  `hardware` text NOT NULL,
  `software` text NOT NULL,
  `network` text NOT NULL,
  `confidential` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `details`
--

INSERT INTO `details` (`id_detail`, `nama_link`, `hardware`, `software`, `network`, `confidential`) VALUES
(20, 'Pusdiklat', 'Operating System (OS) : Windows Server 2019 Standard', 'Hyper-V manager', 'LAN Card  : 192.168.1.255 \nSubnet      : 255.255.255.0   \nGateway   : 192.168.1.1 	\n\nNetwork Switch : Server Room Switch Panel Port D-015 	\n\nNetwork Switch : Network Room Juniper Switch VLAN 21 DMZ 2 Port 3 \n\nLemari/Rack : DC RACK 4', 'Windows Login : \nUsername : Admin \nPassword  : test sample'),
(23, 'Schedule', 'Linux', 'hyper v', 'Lan ', 'Username : galih\nPassword  : pwd'),
(24, 'Absensi TVRI', 'linux OS', 'Sayangnya tidak bisa enter jadi, \nsilahkan mengunakan spasi dua kali  ', 'local', 'seperti: ini  seperti: ini  Sperti ini:  selesai'),
(25, 'TVRI MAGAZINE', 'Windows Enterprise 2019', 'Hyper v', 'lan', 'Windows Login  \nUsername: Admin   \nPasword: galih'),
(26, 'Rundown TVRI', 'Server Computer : Fujitsu PRIMERGY RX2540 M1.    \n HDD Hard Disk SATA 7,2K : 1TB', 'Operating System (OS) : \nMicrosoft Windows Server 2012 R2 64 Bit', 'LAN Card : \n192.168.222.104/255.255.255.0\n/192.168.222.1', 'username : admin \npassword : admin'),
(27, 'VOD TVRI', 'HDD Hard Disk SAS 10K : 300GB\nServer Computer : HP (Hewlett Packard) Proliant DL380P Gen8\nProcessor Xeon : Intel E5-2609 0 @ 2.40GHz\nRAM DDR 3 : 12 GB', 'Operating System (OS) : \nMicrosoft Windows Server 2012 R2 64 Bit\nAntivirus : Kaspersky KES 10 (Expired)', 'LAN Card : \n192.168.221.163/255.255.255.0\n/192.168.221.1\nWeb URL : http://vod.tvri.go.id\n', 'admin'),
(28, 'E-KINERJA 2021', 'processor : 1 Core\nRAM : 4GB\nOS : CENTOS 7 MINIMAL', 'Operating System (OS) : \nMicrosoft Windows Server 2012 R2 64 Bit', 'LAN', 'root\nTvri2021!\n\nargo\ntvri2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `kode_link` int(11) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`kode_link`, `domain`, `ip`, `nama`, `status`, `tanggal`) VALUES
(5, 'pusdiklat.tvri.go.id', '36.91.221.168', 'Pusdiklat', 'Active', '2022-06-29'),
(10, 'magazine.tvri.go.id', '118.97.97.165', 'TVRI MAGAZINE', 'Active', '2022-06-29'),
(13, 'schedule.tvri.go.id', '118.97.97.165', 'Schedule', 'Active', '2022-06-29'),
(14, 'puslitbang.tvri.go.id', '118.97.50.107', 'Puslitbang', 'Terverifikasi', '2022-06-29'),
(16, 'lpse.tvri.co.id', '118.97.50.109', 'LPSE', 'Active', '2022-06-29'),
(17, 'epay.tvri.go.id:9999', '118.97.97.166', 'Epay', 'Active', '2022-06-29'),
(18, 'asitpusdiklat.tvri.go.id', '118.97.97.166', 'Asit Pusdiklat', 'Active', '2022-06-29'),
(19, 'egov.tvri.go.id:9393', '118.97.97.166', 'Egov', 'Active', '2022-06-29'),
(20, 'promo.tvri.go.id:2020', '118.97.97.166', 'Promo', 'Active', '2022-06-29'),
(21, 'espip.tvri.go.id:778', '118.97.97.166', 'Espip', 'Not Active', '2021-05-21'),
(22, 'ticketing.tvri.go.id', '118.97.97.165', 'Ticketing', 'Not Active', '2022-06-29'),
(23, 'wbs.tvri.go.id', '118.97.97.169', 'WBS TVRI', 'Active', '2022-06-29'),
(24, 'vod.tvri.go.id', '118.97.97.163', 'VOD TVRI', 'Active', '2022-06-29'),
(25, 'asik.tvri.go.id:7777', '118.97.97.166', 'Asik TVRI', 'Active', '2022-06-29'),
(26, 'cloud.tvri.go.id:5001', '118.97.97.166', 'Cloud TVRI', 'Not Active', '2022-06-29'),
(27, 'rundown.tvri.go.id', '118.97.97.163', 'Rundown TVRI', 'Active', '2022-06-29'),
(28, 'intra.tvri.go.id', '118.97.50.104', 'Intra TVRI', 'Not Active', '2022-06-29'),
(29, 'isrweb.tvri.go.id', '118.97.97.169', 'ISR Web', 'Active', '2022-06-29'),
(30, 'cdn.tvri.go.id', '118.97.97.169', 'CDN TVRI', 'Active', '2022-06-29'),
(32, 'regulasi.tvri.go.id', '118.97.97.165', 'Regulasi TVRI', 'Not Active', '2022-06-29'),
(33, 'simkeu.tvri.go.id:7777', '118.97.97.166', 'Keuangan TVRI', 'Active', '2022-06-29'),
(34, 'bmkg.tvri.go.id', '118.97.50.98', 'BMKG', 'Active', '2022-06-29'),
(35, '118.97.50.103:8088', '118.97.50.103', 'WOWZA STREAM', 'Active', '2022-06-29'),
(36, '36.91.221.164:8088', '36.91.221.168', 'WOWZA STREAM BACKUP', 'Active', '2022-06-29'),
(37, 'elearning.tvri.go.id', '36.91.221.168', 'E-learning TVRI', 'Not Active', '2022-06-29'),
(38, 'arsip.tvri.go.id', '118.97.97.166', 'Arsip TVRI', 'Not Active', '2022-06-29'),
(39, 'inventaris.tvri.go.id', '36.91.221.163', 'INVENTARIS TVRI 2020', 'Not Active', '2022-06-29'),
(40, 'humas.tvri.go.id', '118.97.50.110', 'Humas', 'Active', '2022-06-29'),
(41, 'absensi.tvri.go.id', '18.97.97.165:8080', 'Absensi TVRI', 'Active', '2022-06-29'),
(42, 'simkeu.tvri.go.id:7777/simkeu20', '118.97.97.166', 'SIMKEU TVRI', 'Active', '2022-06-29'),
(43, 'mail.tvri.go.id', '36.91.221.167', 'MAIL TVRI', 'Active', '2022-06-29'),
(47, 'simpeg.tvri.go.id', '', 'Simpeg TVRI', 'Active', '0000-00-00'),
(48, 'surat.tvri.go.id', '', 'Surat', 'Active', '2022-06-29'),
(49, 'ekinerja.tvri.go.id:6776', '', 'E-Kinerja TVRI', 'Active', '2022-06-29'),
(51, 'tvri.go.id', '', 'TVRI', 'Active', '2022-06-29'),
(52, 'jdih.tvri.go.id', '', 'JDIH', 'Active', '2022-06-29'),
(53, 'ppid.tvri.go.id', '', 'PPID', 'Active', '2022-06-29'),
(54, 'http://192.168.221.168:8001', '', 'SDM APK', 'Not Active', '2022-06-29'),
(98, '192.168.221.168:8001', 'http://192.168.221.168:8001', 'Anti Virus Bitdefender Pusat', 'Not Active', '2022-06-29'),
(99, '', '', 'DELL EMC 2019 - SM 2', 'Not Active', '2022-06-29'),
(100, '', '', 'DELL EMC 2019 - SM 3', 'Terverifikasi', '2022-06-29'),
(101, '', '', 'Efaktur New Server 2019', 'Terverifikasi', '2022-06-29'),
(102, '', '', 'FTP Internet 2019 NEW', 'Terverifikasi', '2022-06-29'),
(103, '', '', 'Video Streamer 2021', 'Terverifikasi', '2022-06-29'),
(104, '', '', 'FTP VPN', 'Terverifikasi', '2022-06-29'),
(105, '', '', 'Hitachi Storage', 'Terverifikasi', '2022-06-29'),
(106, '', '', 'Kepustakaan Storage SAN', 'Terverifikasi', '2022-06-29'),
(107, 'klik.tvri.go.id', '118.97.97.165', 'KLIK TVRI', 'Terverifikasi', '2022-06-29'),
(108, '', '', 'Storage Digital 2019', 'Terverifikasi', '2022-06-29'),
(109, '', '', 'Soliton 166', 'Terverifikasi', '2022-06-29'),
(110, '', '', 'Soliton 162', 'Terverifikasi', '2022-06-29'),
(111, '', '', 'QNAP Storage Server NAS', 'Terverifikasi', '2022-06-29'),
(112, 'https://192.168.222.111:8006', '192.168.222', 'Proxmox Cloud 1', 'Terverifikasi', '2022-06-29'),
(113, '', '', 'OTT', 'Terverifikasi', '2022-06-29'),
(114, '', '', 'NAS Studio 6', 'Terverifikasi', '2022-06-29'),
(115, '', '', 'Storage Dell 2020', 'Terverifikasi', '2022-06-29'),
(116, 'https://adminconsole.adobe.com/', 'adminconsole', 'ADOBE ADMIN CONSOLE', 'Terverifikasi', '2022-06-29'),
(117, '', '', 'ADOBE TIM KOMUNIKASI 1', 'Terverifikasi', '2022-06-29'),
(118, '', '', 'ADOBE TIM KOMUNIKASI 2', 'Terverifikasi', '2022-06-29'),
(119, '', '', 'ADOBE PEMBERITAAN', 'Terverifikasi', '2022-06-29'),
(120, '', '', 'ADOBE TVRI RIAU', 'Terverifikasi', '2022-06-29'),
(121, '', '', 'Storage Pemberitaan', 'Terverifikasi', '2022-06-29'),
(122, 'surat.tvri.go.id', '192.168.221.239', 'E-Office', 'Terverifikasi', '2022-06-29'),
(123, '', '', 'E-KINERJA 2021', 'Terverifikasi', '2022-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1656670740, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `kd_petugas` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `name`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(19, 'admin1', 'admin1', 'admin1', 'Admin'),
(26, 'admin2', 'admin2', 'admin2', 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin1@admin.com', 'admin1', '$2y$10$p4tWl/iUYEqio.M92bVPc./OMvIuoIpzcWgXfLytAOZbJxggcFF1.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-01 05:25:41', '2022-07-01 05:25:41', NULL),
(9, 'admin22@gmail.com', 'admin22', '$2y$10$k5LlCBmp3PEBLOdHfgV1V.AOFLYTMF2XVKKW6zIgk6b.RG1l7cCuq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-03 21:20:48', '2022-07-03 21:20:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`kode_link`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kd_petugas`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `details`
--
ALTER TABLE `details`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `kode_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `kd_petugas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
