-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2018 a las 20:21:42
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attentions`
--

CREATE TABLE `attentions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tooth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `treatment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `attentions`
--

INSERT INTO `attentions` (`id`, `tooth`, `description`, `patient_id`, `treatment_id`, `created_at`, `updated_at`) VALUES
(1, 'Canino Superior Derecho', 'Se reconstruyo el diente con una placa de protesis', 1, 4, '2018-07-26 20:01:53', '2018-07-26 20:01:53'),
(2, 'Molar Inferior Derecho', 'Tapadura de Caries', 2, 6, '2018-07-17 21:16:22', '2018-07-17 21:16:22'),
(3, 'Todos los Dientes', 'Limpieza General', 3, 7, '2018-07-17 21:16:52', '2018-07-17 21:16:52'),
(4, 'Canino Derecho Superior', 'Extraccion debido a que el diente ya no sirve', 4, 6, '2018-07-17 21:18:08', '2018-07-17 21:18:08'),
(5, 'Todos', 'Revision general', 5, 6, '2018-07-17 21:19:15', '2018-07-17 21:19:15'),
(6, 'Insicivo 3 inferior', 'Curacion de Caries', 6, 6, '2018-07-17 21:21:20', '2018-07-17 21:21:20'),
(7, 'Canino Superior Izquierdo', 'Curacion de caries', 7, 6, '2018-07-17 21:22:07', '2018-07-17 21:22:07'),
(8, 'Todos', 'Blanqueamiento Dental', 8, 7, '2018-07-17 21:22:47', '2018-07-17 21:22:47'),
(9, 'Todos', 'Revision General', 9, 6, '2018-07-17 21:23:22', '2018-07-17 21:23:22'),
(10, 'Premolar superior 1', 'Curacion de caries', 10, 6, '2018-07-17 21:23:59', '2018-07-17 21:23:59'),
(11, '3er Molar derecho', 'Extraccion', 11, 9, '2018-07-17 21:24:50', '2018-07-17 21:24:50'),
(12, 'Todos', 'Limpieza General', 12, 6, '2018-07-17 21:25:12', '2018-07-17 21:25:12'),
(13, 'Insicivo Superior #3', 'Curacion de Caries', 13, 6, '2018-07-17 21:27:14', '2018-07-17 21:27:14'),
(14, 'Premolar inferior derecho', 'Curacion de caries', 14, 6, '2018-07-17 21:27:45', '2018-07-17 21:27:45'),
(15, 'Molar superior Derecho', 'remplazo del diente por placa dental', 15, 4, '2018-07-17 21:29:02', '2018-07-17 21:29:02'),
(16, 'pre molar derecho', 'curacion de caries', 16, 6, '2018-07-17 21:29:46', '2018-07-17 21:29:46'),
(17, 'Todos', 'Limpieza General', 18, 6, '2018-07-17 21:30:12', '2018-07-17 21:30:12'),
(18, 'Molar Derecho Inferior', 'Tapadura de la muela', 19, 6, '2018-07-17 21:30:53', '2018-07-17 21:30:53'),
(19, 'Todos', 'Blanqueamiento Dental', 20, 7, '2018-07-17 21:31:21', '2018-07-17 21:31:21'),
(20, 'todos', 'Limpieza General', 21, 7, '2018-07-17 21:31:46', '2018-07-17 21:31:46'),
(21, 'Molar Derecho Inferior', 'Tapadura', 7, 6, '2018-07-17 21:50:37', '2018-07-17 21:50:37'),
(22, '23', 'Restauracion con Recina', 22, 10, '2018-07-18 16:02:50', '2018-07-18 16:02:50'),
(23, '45', 'Corona', 22, 4, '2018-07-18 16:21:15', '2018-07-18 16:21:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultations`
--

CREATE TABLE `consultations` (
  `id` int(10) UNSIGNED NOT NULL,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `consultations`
--

INSERT INTO `consultations` (`id`, `diagnosis`, `start_date`, `end_date`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, 'Revision General', '07/17/2018 8:00 AM', '07/17/2018 9:00 AM', 1, '2018-07-26 19:54:42', '2018-07-26 19:54:42'),
(2, 'Curacion de Caries', '07/17/2018 9:00 AM', '07/17/2018 9:30 AM', 2, '2018-07-17 20:37:01', '2018-07-17 20:37:01'),
(3, 'Limpieza Dental', '07/17/2018 9:30 AM', '07/17/2018 10:00 AM', 3, '2018-07-17 20:38:16', '2018-07-17 20:38:16'),
(4, 'Extraccion de Diente', '07/17/2018 10:00 AM', '07/17/2018 11:00 AM', 4, '2018-07-17 20:39:39', '2018-07-17 20:39:39'),
(5, 'Revision General', '07/17/2018 2:00 PM', '07/17/2018 2:30 PM', 5, '2018-07-17 20:41:02', '2018-07-17 20:41:02'),
(6, 'Curacion Caries', '07/17/2018 2:30 PM', '07/17/2018 3:00 PM', 6, '2018-07-17 20:43:42', '2018-07-17 20:43:42'),
(7, 'Curacion de Caries', '07/17/2018 3:00 PM', '07/17/2018 3:30 PM', 7, '2018-07-17 20:44:24', '2018-07-17 20:44:24'),
(8, 'Blanqueamiento Dental', '07/17/2018 4:00 PM', '07/17/2018 4:30 PM', 8, '2018-07-17 20:57:15', '2018-07-17 20:57:15'),
(9, 'Revision General', '07/17/2018 4:30 PM', '07/17/2018 5:00 PM', 9, '2018-07-17 20:58:00', '2018-07-17 20:58:00'),
(10, 'Curacion de Caries', '07/17/2018 5:00 PM', '07/17/2018 5:30 PM', 10, '2018-07-17 20:58:42', '2018-07-17 20:58:42'),
(11, 'Extraccion 3er molar', '07/17/2018 5:30 PM', '07/17/2018 6:30 PM', 11, '2018-07-17 21:00:09', '2018-07-17 21:00:09'),
(12, 'Limpieza General', '07/17/2018 6:30 PM', '07/17/2018 7:00 PM', 12, '2018-07-17 21:00:43', '2018-07-17 21:00:43'),
(13, 'Curacion de Caries', '07/17/2018 7:00 PM', '07/17/2018 7:30 PM', 13, '2018-07-17 21:01:25', '2018-07-17 21:01:25'),
(14, 'Curacion de Caries', '07/17/2018 7:30 PM', '07/17/2018 8:00 PM', 14, '2018-07-17 21:02:14', '2018-07-17 21:02:14'),
(15, 'Implante', '07/18/2018 8:00 AM', '07/18/2018 9:00 AM', 15, '2018-07-17 21:07:35', '2018-07-17 21:07:35'),
(16, 'Caries', '07/18/2018 9:00 AM', '07/18/2018 9:30 AM', 16, '2018-07-17 21:09:15', '2018-07-17 21:09:15'),
(17, 'Limpieza General', '07/18/2018 9:30 PM', '07/18/2018 10:00 PM', 18, '2018-07-17 21:10:18', '2018-07-17 21:10:18'),
(18, 'Tapadura de muela', '07/18/2018 10:30 AM', '07/18/2018 11:00 AM', 19, '2018-07-17 21:11:08', '2018-07-17 21:11:08'),
(19, 'Blanqueamiento Dental', '07/18/2018 11:00 AM', '07/18/2018 11:30 AM', 20, '2018-07-17 21:13:13', '2018-07-17 21:13:13'),
(20, 'Limpieza General', '07/18/2018 11:30 AM', '07/18/2018 12:00 PM', 21, '2018-07-17 21:14:16', '2018-07-17 21:14:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(73, '2014_10_12_000000_create_users_table', 1),
(74, '2014_10_12_100000_create_password_resets_table', 1),
(75, '2018_06_05_122705_create_patients_table', 1),
(76, '2018_06_05_122752_create_treatments_table', 1),
(77, '2018_06_05_122915_create_attentions_table', 1),
(78, '2018_06_05_123158_create_prescriptions_table', 1),
(79, '2018_06_05_123217_create_consultations_table', 1),
(80, '2018_06_05_123240_create_suggestions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_i` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `patients`
--

INSERT INTO `patients` (`id`, `c_i`, `name`, `last_name`, `age`, `gender`, `email`, `phone`, `city`, `created_at`, `updated_at`) VALUES
(1, '7933336', 'Ismael Ramiro', 'Valdivia Aranibar', 24, 'Masculino', 'ismael@mail.com', '72217540', 'Cochabamba', '2018-07-26 19:54:09', '2018-07-26 19:54:09'),
(2, '7854632', 'Michelle Veronica', 'Gutierrez Panoso', 21, 'Femenino', 'mika@gmail.com', '72563659', 'Cochabamba', '2018-07-26 20:06:30', '2018-07-26 20:06:30'),
(3, '6332589', 'Mario', 'Rojas Lima', 45, 'Masculino', 'mario@hotmail.com', '76425666', 'Cochabamba', '2018-07-17 20:08:25', '2018-07-17 20:08:25'),
(4, '9664536', 'Julio Jaime', 'Arce Paz', 30, 'Masculino', 'jaimeArcePaz@gmail.com', '4295789', 'Santa Cruz', '2018-07-17 20:10:54', '2018-07-17 20:10:54'),
(5, '9863524', 'Jose Luis', 'Vargas Quinteros', 18, 'Masculino', 'jose2105@gmail.com', '72714577', 'Cochabamba', '2018-07-17 20:12:24', '2018-07-17 20:12:24'),
(6, '7621547', 'Jose Andres', 'Aguilar Aguilar', 24, 'Masculino', 'joseAgui@gmail.com', '7639854', 'Cochabamba', '2018-07-17 20:13:24', '2018-07-17 20:13:24'),
(7, '7854625', 'Maria Teresa', 'Lopez Reyes', 21, 'Femenino', 'MariTere72@gmail.com', '7223654', 'Cochabamba', '2018-07-17 20:15:09', '2018-07-17 20:15:09'),
(8, '7854236', 'Neydali', 'Torrico Revollo', 17, 'Femenino', 'neyrevollo@gmail.com', '4457256', 'Cochabamba', '2018-07-17 20:16:31', '2018-07-17 20:16:31'),
(9, '9654824', 'Ana Lucia', 'Teran Mercado', 18, 'Femenino', 'luciana@gmail.com', '76425963', 'Cochabamba', '2018-07-17 20:17:46', '2018-07-17 20:17:46'),
(10, '7863542', 'Carla', 'Perez Gutierrez', 27, 'Femenino', 'carla2015@mail.com', '79632012', 'Cochabamba', '2018-07-17 20:19:34', '2018-07-17 20:19:34'),
(11, '7932654', 'Brian Isaias', 'Fuentes Aranibar', 27, 'Masculino', 'bifa@gmail.com', '72745632', 'Cochabamba', '2018-07-17 20:20:54', '2018-07-17 20:20:54'),
(12, '7523654', 'Jesus', 'Villa', 17, 'Masculino', 'jesus6523@gmail.com', '71756325', 'Cochabamba', '2018-07-17 20:22:41', '2018-07-17 20:22:41'),
(13, '5863952', 'Luis Hernando', 'Siles Pacheco', 16, 'Masculino', 'siles666@gmail.com', '76427275', 'Cochabamba', '2018-07-17 20:24:09', '2018-07-17 20:24:09'),
(14, '3026454', 'Miguel Angel', 'Andrade', 29, 'Masculino', 'mikiandrade@gmail.com', '71012850', 'Cochabamba', '2018-07-17 20:25:31', '2018-07-17 20:25:31'),
(15, '963251', 'Sergio', 'Avila Perez', 26, 'Masculino', 'sergi@gmail.com', '75946287', 'Santa Cruz', '2018-07-17 20:28:29', '2018-07-17 20:28:29'),
(16, '3564289', 'Cinthia', 'Heredia', 27, 'Femenino', 'cinthi2606@gmail.com', '74526354', 'Cochabamba', '2018-07-17 20:29:50', '2018-07-17 20:29:50'),
(18, '8659936', 'Israel', 'Muruchi Galindo', 35, 'Masculino', 'isramur_@hotmail.com', '72212866', 'Cochabamba', '2018-07-17 20:32:06', '2018-07-17 20:32:06'),
(19, '6912456', 'Kenny', 'Aranibar Maldonado', 17, 'Masculino', 'kenarmal@gmail.com', '4302715', 'Cochabamba', '2018-07-17 20:33:18', '2018-07-17 20:33:18'),
(20, '7854624', 'Darko', 'Fernandez Rojas', 30, 'Masculino', 'darkfergym@gmail.com', '73411499', 'Cochabamba', '2018-07-17 20:34:57', '2018-07-17 20:34:57'),
(21, '326154', 'Julio', 'Canelas Rojas', 54, 'Masculino', 'julio@gmail.com', '63957726', 'Cochabamba', '2018-07-17 20:35:52', '2018-07-17 20:35:52'),
(22, '78456246', 'Daniel', 'Valdivia Diaz', 35, 'Masculino', 'daniel@mail.com', '72545632', 'Cochabamba', '2018-07-18 16:01:43', '2018-07-18 16:01:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `tittle`, `detail`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, 'Calmante', 'Tomar cada 8 horas \r\na las 9am-1pm-9pm\r\nDurante 3 dias', 1, '2018-07-26 19:57:53', '2018-07-26 19:57:53'),
(2, '6 Calmantes', 'Tomar Cada 8 Hrs Durante 2 Dias', 7, '2018-07-17 21:53:18', '2018-07-17 21:53:18'),
(3, 'Queterol 20ml', 'Tomar un comprimido cada 12 horas 8-4-6', 22, '2018-07-18 16:11:24', '2018-07-18 16:11:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cel` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treatments`
--

CREATE TABLE `treatments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `treatments`
--

INSERT INTO `treatments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ortodoncia', '2018-07-26 19:53:32', '2018-07-26 19:53:32'),
(2, 'Endodoncia', '2018-07-26 19:53:32', '2018-07-26 19:53:32'),
(3, 'Periodoncia', '2018-07-26 19:53:32', '2018-07-26 19:53:32'),
(4, 'Protesis', '2018-07-26 19:53:33', '2018-07-26 19:53:33'),
(5, 'Implantologia', '2018-07-26 19:53:33', '2018-07-26 19:53:33'),
(6, 'Estetica Dental', '2018-07-26 19:53:33', '2018-07-26 19:53:33'),
(7, 'Balnqueamiento Dental', '2018-07-26 19:53:33', '2018-07-26 19:53:33'),
(8, 'Rehabilitacion Oral', '2018-07-26 19:53:33', '2018-07-26 19:53:33'),
(9, 'Cirugia Bucal', '2018-07-26 19:53:33', '2018-07-26 19:53:33'),
(10, 'Caries', '2018-07-18 16:00:37', '2018-07-18 16:00:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', '$2y$10$AQ.vegHo0Mqa6q0VknwB5.CH0AdS93EjNhdXki18k4ZYKHZKLVtHS', 'admin', 'amfLkM5Bs8ccePXxNiUjM1quA2957n0bn3P69hov23aSs3sw0Ntc8EgXHK5s', '2018-07-26 19:53:32', '2018-07-26 19:53:32'),
(2, 'Ismael', 'ismael@mail.com', '$2y$10$6f7H9zJ0UckriaGAKpDeWeW6GjDd.D9XyZ9Sit1yXkDvD6sU9ChK6', 'dentista', 'IdGUURYF9d98zHL9OmaEe4r9xtiOTRjHv8qXHmP0ujXwf2HEcOddnyXnZj0Z', '2018-07-26 19:53:32', '2018-07-26 19:53:32'),
(3, 'Daniel', 'dani@mail.com', '$2y$10$shlujJGVbGGEoWYd6t0mceiKNbGAL3bNgzd9SbUOmkJYYHxmQxLIS', 'dentista', 'dAnkypnYlkSkdnvyqupTVyJOlaLOCGd0ATCFufFXmAqgkPstfZ3Vzdd0EXYL', '2018-07-18 16:19:03', '2018-07-18 16:19:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attentions`
--
ALTER TABLE `attentions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attentions_patient_id_foreign` (`patient_id`),
  ADD KEY `attentions_treatment_id_foreign` (`treatment_id`);

--
-- Indices de la tabla `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultations_patient_id_foreign` (`patient_id`);

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
-- Indices de la tabla `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_c_i_unique` (`c_i`);

--
-- Indices de la tabla `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_patient_id_foreign` (`patient_id`);

--
-- Indices de la tabla `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attentions`
--
ALTER TABLE `attentions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `attentions`
--
ALTER TABLE `attentions`
  ADD CONSTRAINT `attentions_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `attentions_treatment_id_foreign` FOREIGN KEY (`treatment_id`) REFERENCES `treatments` (`id`);

--
-- Filtros para la tabla `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `consultations_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Filtros para la tabla `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
