-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2022 a las 22:01:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Barranquilla', '2022-09-17 00:54:15', '2022-10-21 21:36:02'),
(2, 'Pereira', '2022-09-17 00:54:15', '2022-09-17 00:54:15'),
(3, 'Armenia', '2022-09-17 00:54:15', '2022-09-17 00:54:15'),
(4, 'Cali', '2022-09-17 00:54:15', '2022-09-17 00:54:15'),
(5, 'Boyaca', '2022-09-17 00:54:15', '2022-09-17 00:54:15'),
(7, 'Amazonas', '2022-09-26 19:21:01', '2022-09-26 19:21:01'),
(8, 'Santa Marta', '2022-10-21 21:40:46', '2022-10-21 21:40:46'),
(9, 'Cartagena', '2022-10-21 21:41:01', '2022-10-21 21:41:01'),
(10, 'Cúcuta', '2022-10-21 21:51:13', '2022-10-21 21:51:13'),
(12, 'Guajira', '2022-11-11 01:55:35', '2022-11-11 01:55:35'),
(13, 'Santander', '2022-12-12 18:40:27', '2022-12-12 18:40:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Compensar', 2, '2022-09-17 00:54:15', '2022-09-23 03:42:47'),
(2, 'Cafam', 3, '2022-09-17 00:54:15', '2022-09-23 01:19:33'),
(7, 'Salud Total', 2, '2022-09-22 00:55:08', '2022-09-23 01:20:01'),
(9, 'Aliansalud', 4, '2022-09-22 01:00:34', '2022-09-23 01:20:14'),
(10, 'Capital Salud', 1, '2022-09-22 01:59:09', '2022-09-23 01:20:20'),
(11, 'Fonoaliansa', 3, '2022-09-22 02:26:22', '2022-09-22 02:26:22'),
(12, 'Famisanar', 5, '2022-09-22 18:17:44', '2022-09-22 18:17:44'),
(13, 'Santa Rosita del Lago', 5, '2022-09-22 19:25:41', '2022-09-23 01:01:12'),
(14, 'Maximes', 1, '2022-09-23 01:24:10', '2022-09-23 01:45:12'),
(15, 'Cajitas', 4, '2022-09-23 03:43:05', '2022-09-23 03:43:05'),
(16, 'Famisanar', 3, '2022-09-23 03:43:24', '2022-09-23 04:09:28'),
(17, 'error', 1, '2022-09-23 03:44:37', '2022-09-23 04:09:33'),
(18, 'Colsanitas', 3, '2022-09-23 18:19:44', '2022-09-23 18:47:26'),
(19, 'Ejemplo', 1, '2022-09-23 18:55:00', '2022-09-23 18:57:46'),
(20, 'Nueva EPS', 4, '2022-09-23 18:58:19', '2022-09-23 18:58:30'),
(21, 'Famiaccion', 5, '2022-09-24 02:05:38', '2022-09-24 02:05:56'),
(22, 'Sanitas', 1, '2022-09-24 03:15:11', '2022-09-24 03:15:11'),
(23, 'Sonrrisas', 4, '2022-09-29 21:24:26', '2022-09-29 21:24:26'),
(24, 'Adulto Mayor', 5, '2022-09-29 21:24:36', '2022-09-29 21:24:36'),
(25, 'Atenas', 2, '2022-09-29 21:24:45', '2022-09-29 21:24:45'),
(27, 'Prevencion', 2, '2022-09-29 21:25:17', '2022-09-29 21:25:17'),
(28, 'Compensar', 3, '2022-10-04 19:31:05', '2022-10-04 19:31:05'),
(29, 'Colsanitas', 4, '2022-10-21 00:58:54', '2022-10-21 00:58:54'),
(30, 'Materas Santadereanas', 13, '2022-12-12 18:41:08', '2022-12-12 18:41:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(6, 'default', '{\"uuid\":\"9b61efe0-26e2-4c7a-b4bd-2c01e8f79b71\",\"displayName\":\"App\\\\Mail\\\\ContactanosMailable\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:28:\\\"App\\\\Mail\\\\ContactanosMailable\\\":3:{s:8:\\\"contacto\\\";a:4:{s:6:\\\"_token\\\";s:40:\\\"dhzRtSIsMcN3hKQ5Qgp2zufCLuc9OD5j4fHIyXCj\\\";s:4:\\\"name\\\";s:14:\\\"Lucia mantilla\\\";s:5:\\\"email\\\";s:14:\\\"luci@gmail.com\\\";s:7:\\\"mensaje\\\";s:18:\\\"jhgdfjkghdfghdfhjg\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:19:\\\"catherine@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1671471868, 1671471868);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_09_13_144045_create_clients_table', 1),
(18, '2022_09_13_144246_create_cities_table', 1),
(19, '2022_09_16_200021_add_foreign_clients_table', 2),
(20, '2022_09_16_200237_add_foreign_users_table', 3),
(21, '2022_10_27_225056_add_verification_to_users', 4),
(22, '2022_11_09_202909_create_jobs_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('catherinegiraldo7426@gmail.com', 'fHBwgThrM6lysDXMLgaFeZZvs5dsFmFSEzUsOdnoCsjdILCiTwnkkbbUoQD2zAJ4', '2022-10-28 02:55:12'),
('luis@gmail.com', 'MQkkiOJrh783pKJTypZR9Oy3GRdEWdxgzGEmUKBWRrbre3vRV643qeQUfPAAMjp0', '2022-11-01 01:56:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `client_id`, `email`, `confirmed`, `confirmation_code`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(79, 'luz s', NULL, 'luz@prueba.com', 0, NULL, '2022-11-29 22:06:06', '$2y$10$L9oi3M3HAzzSh.ZVEcOpbO9cVdUKnOqIE7yyU/1vzU6K6LlKVV4Mm', NULL, '2022-11-29 22:05:54', '2022-11-29 22:06:06'),
(80, 'Saul Sa', NULL, 'saul@gmail.com', 0, NULL, NULL, '$2y$10$1Xj3gEDh5Xn11ECT72aGxevipGg0omMDNXXkKZe4AeNjkgcL5WmCa', NULL, '2022-11-29 23:07:32', '2022-11-29 23:07:32'),
(81, 'Laura Laso', NULL, 'lau@gmail.com', 0, NULL, '2022-11-29 23:09:14', '$2y$10$T61lPbmw6I0Pv/jq9EPwsOVGRAa2AFgHh2u79j9s5i4a1cy1oCn3K', NULL, '2022-11-29 23:09:04', '2022-11-29 23:09:14'),
(82, 'Fernanda', NULL, 'fern@gmail.com', 0, NULL, '2022-11-29 23:19:08', '$2y$10$ChuPTtl4unh2JM3/v5P8bufwwrV1H7NHPA7mPSd3aNYD.kHQd2h8G', NULL, '2022-11-29 23:19:00', '2022-11-29 23:19:08'),
(83, 'Andrey Escobar', NULL, 'andrey@gmail.com', 0, NULL, '2022-11-30 01:32:30', '$2y$10$XSHfq/yfLaXFvfJZsYFEZeNl56HkOpna4Zn09/vqL0WImH5N2CW66', NULL, '2022-11-30 01:32:17', '2022-11-30 01:32:30'),
(84, 'Baldwin Escobar', NULL, 'baldwin@gmail.com', 0, NULL, '2022-11-30 01:39:28', '$2y$10$o3QyPnxGO86DbOecaHQEcOm/Wdfm3XRxKkxY2kmsSRW140WA1EjgW', NULL, '2022-11-30 01:39:11', '2022-11-30 01:39:28'),
(85, 'Sandra', NULL, 'sandra@gmail.com', 0, NULL, '2022-11-30 01:40:32', '$2y$10$Jgzk30VXP1SfBzl767HSmu16LO96Q2EfV9IG4eWaVesWYbf2r8kva', NULL, '2022-11-30 01:40:22', '2022-11-30 01:40:32'),
(86, 'Laura', NULL, 'laura@gmail.com', 0, NULL, '2022-11-30 01:47:04', '$2y$10$.C1BiOBo6zl7T3HZmCMIYumpcDtL34em.Jz43ZZFwjRerMZSywEti', NULL, '2022-11-30 01:46:51', '2022-11-30 01:47:04'),
(87, 'Samara', NULL, 'samara@gmail.com', 0, NULL, '2022-11-30 01:51:25', '$2y$10$pi6SPmox.4YBLlXEM7W5t.Eb1DvB947JaNIg7VR8vDVysAtovz7cO', NULL, '2022-11-30 01:51:15', '2022-11-30 01:51:25'),
(88, 'Gina', NULL, 'gina@gmail.com', 0, NULL, '2022-11-30 01:52:11', '$2y$10$Wej66C2NN/ZMVkeqYQ8KZORiGxwQ53EwlH0L57mfJE2ChQm2mt0ry', NULL, '2022-11-30 01:52:04', '2022-11-30 01:52:11'),
(90, 'Angela', NULL, 'angela@gmail.com', 0, NULL, '2022-11-30 01:54:51', '$2y$10$RIaky8/9dLHYspOyltluiuWoLFAT/m3Wco3CMBo3t5z7dOtk7iM7C', NULL, '2022-11-30 01:54:42', '2022-11-30 01:54:51'),
(91, 'rosa', NULL, 'rosa@gmail.com', 0, NULL, '2022-11-30 02:02:53', '$2y$10$hDYYNhmjMpqCjlcBGHbmuOOEnlnLZSZLC8pfxmKq0t0s3iUbNUq.K', NULL, '2022-11-30 02:02:31', '2022-11-30 02:02:53'),
(92, 'Luisa', NULL, 'luisa@prueba.com', 0, NULL, '2022-11-30 02:06:38', '$2y$10$ffDxiimhk/cyFMemlxt2N.MDFFaTV7DR4eRvRIYmdrv.ArRpfulzy', NULL, '2022-11-30 02:05:49', '2022-11-30 02:06:38'),
(93, 'Suri', NULL, 'suri@prueba.com', 0, NULL, '2022-11-30 02:07:35', '$2y$10$YmHdD5em/K5eyF3b7s0Rz.BXp4w25cCPzBgLsYqsZcf5kygJMkuSa', NULL, '2022-11-30 02:07:21', '2022-11-30 02:07:35'),
(94, 'carmen', NULL, 'carmen@gmail.com', 0, NULL, '2022-11-30 02:09:00', '$2y$10$qgzjxQkfv4OR3whsLLe.rOs7E9ofWGHFHcCZd6gVZdMqTSENwXUbe', NULL, '2022-11-30 02:08:21', '2022-11-30 02:09:00'),
(95, 'Alejandra', NULL, 'aleja@gmail.com', 0, NULL, '2022-12-01 01:55:26', '$2y$10$VMFVbSEx48ym11cbVYq5wuUV6HV3m6RBgUsrOE6PlEfpLJpk08dvu', NULL, '2022-12-01 01:54:57', '2022-12-01 01:55:26'),
(96, 'Evelyn Sarai Escobar Giraldo', NULL, 'evelynsarai@gmail.com', 0, NULL, '2022-12-08 01:09:51', '$2y$10$ClVFOVmI9yt4.EvEzMLSJO3.YPIP62ms/ba2CwJY843Yw0DZxuitu', NULL, '2022-12-08 00:53:18', '2022-12-08 01:09:51'),
(97, 'Fabian Lopez', NULL, 'fabian@gmail.com', 0, NULL, '2022-12-09 19:58:09', '$2y$10$Hy/BvDTDLbU.tbpADpXqQuXt7Vxkjlrzv1Z7TfkCKy728.v6nnYme', NULL, '2022-12-09 19:57:50', '2022-12-09 19:58:09'),
(98, 'Yudy Lopez', NULL, 'yudy@gmail.com', 0, NULL, '2022-12-12 18:38:39', '$2y$10$8llsCtvLoTIU8wpql7m3SeV1BwaFlXTrHZ5//Dam9Qg5vJld1Kx32', NULL, '2022-12-12 18:38:23', '2022-12-12 18:38:39'),
(99, 'Humberto Martinez', NULL, 'humberto@gmail.com', 0, NULL, '2022-12-19 22:43:36', '$2y$10$brne61Myv.7sjXzcoXK4VO9er1Y8D7T1qwE89OAJjIH0MoocD0GdW', NULL, '2022-12-19 22:43:09', '2022-12-19 22:43:36'),
(100, 'Luis Diaz', NULL, 'luis@prueba.com', 0, NULL, '2022-12-19 23:30:45', '$2y$10$nU.HPWRco5inspyl1p4PW.VQFogft9b/WxEvVKkn9VIeHGHQB.b6S', NULL, '2022-12-19 23:30:24', '2022-12-19 23:30:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_city_id_foreign` (`city_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_client_id_foreign` (`client_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
