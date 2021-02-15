-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-02-2021 a las 05:38:32
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `updated_at`, `created_at`) VALUES
(1, 'Drama', 'La historia se muestra en un contexto serio.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(2, 'Tragicomedia', 'Existen secuencias trágicas y luego cómicas.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(3, 'Melodrama', 'Se exageran las partes dramáticas de la obra.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(4, 'Epopeya', 'Explica acciones que deberían ser recordadas por los actos heroicos y las hazañas legendarias de un personaje o pueblo.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(5, 'Tragedia', 'Destaca el carácter pasional de los problemas o conflictos terroríficos.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(6, 'Comedia', 'El conflicto es visto con con humor.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(7, 'Poema épico', 'Da cuenta de aventuras legendarias o ficticias de uno o más personajes heroicos.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(8, 'Romance', 'Narra historias valientes, afectivas y sentimentales.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(9, 'Cuento', 'Narra un acontecimiento ficticio que suele ser breve y con pocos personajes.', '2021-02-14 22:56:04', '2021-02-14 22:56:04'),
(10, 'Leyenda', 'Narra un acontecimiento real o fabuloso, envuelto de misterio.', '2021-02-14 22:56:04', '2021-02-14 22:56:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `is_active`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$v5OkO1QkgcnW33Ed8jW6ROpsIxBJMvC1dvtMTZqf5gyRp3kQCgpzi', 'yTEQcSQCSw9SpnxxmbVAXCVwD9biACUKWbYkwWRDj5w7iHLPV6NXrguZd3vN', '2021-02-12 06:01:42', '2021-02-15 00:57:21', 1, 1),
(2, 'test1', 'test1@test1.cl', NULL, '$2y$10$otOvD45nOJkcBHU.bgBZZu5cyjL1eX983VQv.LpFBl7j80ZyOks2W', NULL, '2021-02-15 01:07:54', '2021-02-15 01:07:54', 0, 1),
(4, 'Matias', 'Pastorelli.matias@gmail.com', NULL, '$2y$10$kcwU5wssxwKGTdDrWDqXKOsTQt852DqBj1es3vEM9TRiYbQhvMA7i', NULL, '2021-02-15 08:10:31', '2021-02-15 08:10:31', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_categorias`
--

CREATE TABLE `user_categorias` (
  `id_user` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_categorias`
--

INSERT INTO `user_categorias` (`id_user`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 6, '2021-02-15 04:51:55', '2021-02-15 04:51:55'),
(1, 9, '2021-02-15 04:51:55', '2021-02-15 04:51:55'),
(1, 1, '2021-02-15 04:51:55', '2021-02-15 04:51:55'),
(1, 4, '2021-02-15 04:51:55', '2021-02-15 04:51:55'),
(1, 10, '2021-02-15 04:51:55', '2021-02-15 04:51:55'),
(4, 6, '2021-02-15 05:37:38', '2021-02-15 05:37:38'),
(4, 9, '2021-02-15 05:37:38', '2021-02-15 05:37:38'),
(4, 1, '2021-02-15 05:37:38', '2021-02-15 05:37:38'),
(4, 4, '2021-02-15 05:37:38', '2021-02-15 05:37:38'),
(4, 10, '2021-02-15 05:37:38', '2021-02-15 05:37:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_categorias`
--
ALTER TABLE `user_categorias`
  ADD KEY `FK_id_user` (`id_user`),
  ADD KEY `FK_id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user_categorias`
--
ALTER TABLE `user_categorias`
  ADD CONSTRAINT `user_categorias_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_categorias_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
