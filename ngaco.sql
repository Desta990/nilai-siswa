-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2025 pada 05.44
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
-- Database: `ngaco`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'HAHA HIHI', 'HAHAHAHIHIHIHAHAHAHIHIHIHAHAHAHIHIHAHAHAIHIHAHAHIHIHIAHAHAHAHIHIHIHAHAHAHIHIHIHAHAHAIIH', 'images/1739759604.jpg', '2025-02-28', NULL, '2025-02-16 05:47:36', '2025-02-16 19:33:24'),
(2, 'Akses Global', 'Pengguna dapat mengakses galeri dari mana saja dengan koneksi internet, memberikan pengalaman yang lebih luas.', 'images/1739759700.jpg', '2025-02-28', NULL, '2025-02-16 19:35:00', '2025-02-16 19:35:00'),
(3, 'Interaktivitas', 'Fitur komentar atau diskusi memungkinkan pengguna untuk berinteraksi, berbagi pemikiran, dan memberi masukan pada karya yang dipamerkan.', 'images/1739759754.jpg', '2025-02-03', NULL, '2025-02-16 19:35:54', '2025-02-16 19:35:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade`
--

CREATE TABLE `grade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `grade`
--

INSERT INTO `grade` (`id`, `nama_grade`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL),
(4, 'D', NULL, NULL),
(5, 'E', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `mapel_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '000001', 'Budi Sudarsono', 1, NULL, '2025-02-16 05:46:16', '2025-02-16 05:46:16'),
(2, '000002', 'Nana Suryana', 2, NULL, '2025-02-16 05:46:32', '2025-02-16 05:46:32'),
(3, '000003', 'Siti Aminah', 3, NULL, '2025-02-16 18:25:09', '2025-02-16 18:25:09'),
(4, '000004', 'Baban Anugraha', 4, NULL, '2025-02-16 18:25:24', '2025-02-16 18:25:33'),
(5, '000005', 'Jaja Miharja', 11, NULL, '2025-02-16 19:39:58', '2025-02-16 19:39:58'),
(6, '000006', 'Arufah Sidik', 8, NULL, '2025-02-16 19:40:29', '2025-02-16 19:40:29'),
(7, '000007', 'Icis Buncis', 9, NULL, '2025-02-16 19:41:13', '2025-02-16 19:41:13'),
(8, '000008', 'Cucu Markucu', 12, NULL, '2025-02-16 19:41:39', '2025-02-16 19:41:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'PPLG', NULL, NULL),
(3, 'Teknik Industri', NULL, NULL),
(4, 'Kimia', NULL, NULL),
(6, 'TJKT', NULL, NULL),
(7, 'Pemasaran', NULL, NULL),
(8, 'Pertanian', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'XII PPLG 1', NULL, NULL),
(2, 'XII PPLG 2', NULL, NULL),
(3, 'XII Oracle 1', NULL, NULL),
(4, 'XII Teknik Industri 1', NULL, NULL),
(5, 'XII Kimia 1', NULL, NULL),
(6, 'XII TJKT 1', NULL, NULL),
(7, 'XII Axio 1', NULL, NULL),
(8, 'XII Pemasaran 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', '2025-02-16 05:45:04', '2025-02-16 05:45:04'),
(2, 'Bahasa Inggris', '2025-02-16 05:45:04', '2025-02-16 05:45:04'),
(3, 'Fisika', '2025-02-16 05:45:04', '2025-02-16 05:45:04'),
(4, 'Kimia', '2025-02-16 05:45:04', '2025-02-16 05:45:04'),
(5, 'Bahasa Indonesia', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(6, 'Biologi', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(7, 'Geografi', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(8, 'Sosiologi', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(9, 'Ekonomi', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(10, 'Sejarah', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(11, 'Pendidikan Agama', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(12, 'Pendidikan Jasmani', '2025-02-16 19:39:22', '2025-02-16 19:39:22'),
(13, 'TIK', '2025-02-16 19:39:22', '2025-02-16 19:39:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_05_103114_add_role_to_users_table', 1),
(6, '2025_02_06_122620_create_jurusan_table', 1),
(7, '2025_02_06_122630_create_kelas_table', 1),
(8, '2025_02_06_122734_create_siswa_table', 1),
(9, '2025_02_06_122930_create_grade_table', 1),
(10, '2025_02_08_033944_create_mapel_table', 1),
(11, '2025_02_08_034055_create_guru_table', 1),
(12, '2025_02_08_035020_create_nilai_table', 1),
(13, '2025_02_08_042334_create_galeri_table', 1),
(14, '2025_02_09_082943_add_created_by_to_guru_table', 1),
(15, '2025_02_09_083156_add_created_by_to_siswa_table', 1),
(16, '2025_02_09_083408_add_created_by_to_galeri_table', 1),
(17, '2025_02_09_083543_add_created_by_to_nilai_table', 1),
(18, '2025_02_13_120010_add_tanggal_to_galeri_table', 1),
(19, '2025_02_16_022226_add_nisn_to_users_table', 1),
(20, '2025_02_16_031800_remove_role_from_users_table', 1),
(21, '2025_02_16_032150_add_role_and_nisn_to_users_table', 1),
(22, '2025_02_16_125407_add_foto_to_siswa_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `nilai_akhir` double(8,2) DEFAULT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `siswa_id`, `mapel_id`, `guru_id`, `uts`, `uas`, `tugas`, `nilai_akhir`, `grade_id`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 5, 4, 4, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 19:48:12', '2025-02-16 19:48:12'),
(6, 5, 8, 6, 80, 78, 98, 85.33, 1, NULL, '2025-02-16 19:50:15', '2025-02-16 19:50:15'),
(7, 5, 12, 8, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 19:52:45', '2025-02-16 19:52:45'),
(8, 5, 11, 5, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 19:53:03', '2025-02-16 19:53:03'),
(9, 6, 3, 3, 88, 78, 89, 85.00, 1, NULL, '2025-02-16 19:56:48', '2025-02-16 19:56:48'),
(10, 7, 4, 4, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 19:57:06', '2025-02-16 19:57:06'),
(11, 8, 11, 5, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 19:57:25', '2025-02-16 19:57:25'),
(12, 8, 2, 2, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 19:57:52', '2025-02-16 19:57:52'),
(13, 8, 9, 7, 90, 77, 87, 84.67, 2, NULL, '2025-02-16 19:58:31', '2025-02-16 19:58:31'),
(14, 5, 2, 2, 90, 90, 90, 90.00, 1, NULL, '2025-02-16 20:16:13', '2025-02-16 20:16:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama`, `kelas_id`, `jurusan_id`, `foto`, `created_by`, `created_at`, `updated_at`) VALUES
(5, '0001', 'Desta Julpaesal', 3, 1, 'images/1739760205.png', NULL, '2025-02-16 19:43:25', '2025-02-16 19:43:25'),
(6, '0002', 'Herlan Ardiansyah', 1, 1, 'images/1739760240.jpg', NULL, '2025-02-16 19:44:00', '2025-02-16 19:44:00'),
(7, '0003', 'Syifa Salsabila', 4, 3, 'images/1739760267.png', NULL, '2025-02-16 19:44:27', '2025-02-16 19:44:27'),
(8, '0004', 'Faridz', 2, 1, 'images/1739760444.png', NULL, '2025-02-16 19:47:24', '2025-02-16 19:47:24'),
(9, '0005', 'Kefri', 7, 6, 'images/1739766082.jpg', NULL, '2025-02-16 21:21:22', '2025-02-16 21:21:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nisn`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Desta', 'admin@email.com', NULL, NULL, '$2y$12$TYgHOOOFGvW4Uh6ihHNiaOZbHcjCIZyJweVLJh6xO/kIdYbWewmu6', 'siswa', NULL, '2025-02-16 05:39:45', '2025-02-16 05:39:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_created_by_foreign` (`created_by`);

--
-- Indeks untuk tabel `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_nip_unique` (`nip`),
  ADD KEY `guru_mapel_id_foreign` (`mapel_id`),
  ADD KEY `guru_created_by_foreign` (`created_by`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_siswa_id_foreign` (`siswa_id`),
  ADD KEY `nilai_mapel_id_foreign` (`mapel_id`),
  ADD KEY `nilai_guru_id_foreign` (`guru_id`),
  ADD KEY `nilai_grade_id_foreign` (`grade_id`),
  ADD KEY `nilai_created_by_foreign` (`created_by`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nisn_unique` (`nisn`),
  ADD KEY `siswa_kelas_id_foreign` (`kelas_id`),
  ADD KEY `siswa_jurusan_id_foreign` (`jurusan_id`),
  ADD KEY `siswa_created_by_foreign` (`created_by`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nisn_unique` (`nisn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `guru_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `nilai_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
