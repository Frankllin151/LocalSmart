-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 20, 2024 at 06:33 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1726764045),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1726764045;', 1726764045),
('frankllinsilva300@gmail.com|172.19.0.1', 'i:1;', 1726750885),
('frankllinsilva300@gmail.com|172.19.0.1:timer', 'i:1726750885;', 1726750885);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imoveis`
--

CREATE TABLE `imoveis` (
  `id` bigint UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proximidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transporte_publico` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banheiros` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_ap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imoveis`
--

INSERT INTO `imoveis` (`id`, `titulo`, `foto1`, `foto2`, `foto3`, `descricao`, `localizacao`, `proximidade`, `transporte_publico`, `quartos`, `banheiros`, `price`, `created_at`, `updated_at`, `status`, `numero_ap`) VALUES
(4, 'Apartamento', 'images/1726599724_images.png', 'images/1726599724_images.png', 'images/1726599724_images.png', 'Este apartamento é espaçoso e bem iluminado, com três quartos e dois banheiros. A cozinha está equipada com todos os eletrodomésticos necessários. O apartamento está localizado em um bairro tranquilo, perto de escolas, supermercados e transportes públicos. As regras incluem não permitir animais de estimação e não fumar dentro do apartamento.', 'Rua Exemplo, 123, Bairro, Cidade', 'Próximo a parque, escolas e shopping.', 'Linha de ônibus e metrô a 5 minutos a pé.', '1', '1', 2000.00, '2024-09-17 19:02:04', '2024-09-19 14:32:33', 'disponivel', '305'),
(11, 'Apartamento', 'images/1726764851_images.png', 'images/1726764851_images.png', 'images/1726764851_images.png', 'Este apartamento é espaçoso e bem iluminado, com três quartos e dois banheiros. A cozinha está equipada com todos os eletrodomésticos necessários. O apartamento está localizado em um bairro tranquilo, perto de escolas, supermercados e transportes públicos. As regras incluem não permitir animais de estimação e não fumar dentro do apartamento.', 'Rua Exemplo, 123, Bairro, Cidade', 'Próximo a parque, escolas e shopping.', 'Linha de ônibus e metrô a 5 minutos a pé.', '3', '4', 3800.00, '2024-09-19 16:54:11', '2024-09-19 16:54:11', 'disponivel', '356');

-- --------------------------------------------------------

--
-- Table structure for table `inquilinos`
--

CREATE TABLE `inquilinos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `imovel_id` bigint UNSIGNED NOT NULL,
  `data_inicio_contrato` date DEFAULT NULL,
  `data_fim_contrato` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagamento_recente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contrato_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquilinos`
--

INSERT INTO `inquilinos` (`id`, `user_id`, `imovel_id`, `data_inicio_contrato`, `data_fim_contrato`, `status`, `pagamento_recente`, `contrato_pdf`) VALUES
(1, 1, 4, '2024-09-19', '2025-09-18', 'atrasado', '12/12/2024', ''),
(3, 3, 11, '2024-09-28', '2024-11-30', 'pendente', NULL, '2024-09-28_to_2024-11-30_1726856721.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2024_09_16_165829_create_imoveis_table', 3),
(7, '0001_01_01_000000_create_users_table', 4),
(8, '0001_01_01_000001_create_cache_table', 4),
(9, '0001_01_01_000002_create_jobs_table', 4),
(10, '2024_09_15_202511_add_is_admin_to_users_table', 4),
(11, '2024_09_16_170623_create_imoveis_table', 5),
(12, '2024_09_18_133437_alter_imoveis', 6),
(13, '2024_09_19_135326_create_inquilinos_table', 7),
(14, '2024_09_20_175118_alter_inquilinos_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ct5eIeAx5g7gwiuD3KXTje2nTiEQ2OypPrbqHV9H', 2, '172.19.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOFRhbjNrek4wYUZOZ0l4VVdOWUswOUJYeFd6ZkpMOVp4M1R5ZFdTNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3QvYWRtaW4vYWRkY29udHJhbHRvIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1726856721);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Teste', 'teste3@gmail.com', '2024-09-16 17:15:20', '$2y$12$Rk9bEXhW6FyL/cjV8z5Xj.CsXF7vrT31XeB3Ff0G7PWjZb3eq9osO', NULL, '2024-09-16 17:15:06', '2024-09-16 17:15:20', 0),
(2, 'Roberto', 'roberto5@gmai.com', '2024-09-16 17:15:51', '$2y$12$2Ed/s2hmglqZJ7BK3sVk6OGrRIKTaCMfiVW.fd3jXwb8gtuWma9mm', NULL, '2024-09-16 17:15:38', '2024-09-16 17:15:51', 1),
(3, 'Vanessa Silva', 'va4@gamil.com', '2024-09-19 16:39:45', '$2y$12$7VTQvpo.PF/J/tdy9PwWuuVNYtMe3QY.AbbkVhVbiR0v6SoWBnobi', NULL, '2024-09-19 16:38:33', '2024-09-19 16:39:45', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquilinos_user_id_foreign` (`user_id`),
  ADD KEY `inquilinos_imovel_id_foreign` (`imovel_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inquilinos`
--
ALTER TABLE `inquilinos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD CONSTRAINT `inquilinos_imovel_id_foreign` FOREIGN KEY (`imovel_id`) REFERENCES `imoveis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inquilinos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
