-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2014 a las 00:43:03
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.5.12-2+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sysclinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinicas`
--

CREATE TABLE IF NOT EXISTS `clinicas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` int(10) unsigned NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitud` text COLLATE utf8_unicode_ci NOT NULL,
  `longitud` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `razon_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resumen` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idtipo` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clinicas_iduser_foreign` (`iduser`),
  KEY `clinicas_idtipo_foreign` (`idtipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `clinicas`
--

INSERT INTO `clinicas` (`id`, `iduser`, `descripcion`, `direccion`, `latitud`, `longitud`, `created_at`, `updated_at`, `deleted_at`, `razon_social`, `telefono`, `ciudad`, `email`, `resumen`, `facebook`, `twitter`, `distrito`, `web`, `idtipo`) VALUES
(1, 1, 'clinica 1', 'av. america', '-6.478203804706789', '-76.36891727332456', '2014-06-01 20:35:39', '2014-06-04 16:03:53', '2014-06-04 16:03:53', '', '', '', '', '', '', '', '', '', 1),
(7, 25, 'Clinica del oriente numero 2', 'av. america #345', '-6.478203804706209', '-76.3920789398253', '2014-06-16 02:52:50', '2014-06-16 02:52:50', NULL, '', '', '', '', '', '', '', '', '', 1),
(8, 26, 'Clinica  del Oriente', 'av. america numero 2', '-6.485959167438448', '-76.36891727332456', '2014-06-16 22:37:46', '2014-06-21 20:46:36', NULL, 'Clinica del Oriente', '9452841451', 'Tarapoto', 'pever@unsm.edu.pe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Etiam placerat nunc ut tellus tristique, non posuere neque iaculis.', 'http://facebook.com/clinica1', '', 'Morales', 'http://sonico999.com.pe', 1),
(9, 26, '88', '//', '85', '55', '2014-06-21 18:56:53', '2014-06-21 18:57:03', '2014-06-21 18:57:03', '', '', '', '', '', '', '', '', '', 1),
(10, 27, 'clinica2', 'av. america numero 2', '-6.491356349194494', '-76.35330498196709', '2014-06-21 22:15:54', '2014-06-21 22:25:46', NULL, '', '', 'Tarapoto', '', 'szddddddddddddddddddddzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz\r\nzzzzzzzzz<bc<vndbvcm,zxbcm,zxc<bm,bz<mcbz<mcbz<mcbmz<dbcm<bzdmc<bzmcbz<zx,c<b ,zxmbc,zxbnc,zc<n,zxmcnzxcxzc', 'http://facebook.com/clinica1', '', 'Cacatachi', '', 1),
(11, 28, 'Rinconcito de Manuel', 'av. morales', '-6.493974451710459', '-76.3660383207025', '2014-06-24 05:06:18', '2014-06-24 05:18:14', NULL, '', '', '', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicios`
--

CREATE TABLE IF NOT EXISTS `detalle_servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idservicio` int(10) unsigned NOT NULL,
  `idclinica` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_idservicio_foreign` (`idservicio`),
  KEY `detalle_idclinica_foreign` (`idclinica`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `detalle_servicios`
--

INSERT INTO `detalle_servicios` (`id`, `idservicio`, `idclinica`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 1, 8, '2014-06-21 18:43:09', '2014-06-21 19:22:16', '2014-06-21 19:22:16'),
(11, 2, 8, '2014-06-21 18:43:10', '2014-06-21 19:22:09', '2014-06-21 19:22:09'),
(12, 3, 8, '2014-06-21 19:22:49', '2014-06-21 20:59:52', '2014-06-21 20:59:52'),
(13, 4, 8, '2014-06-21 19:22:49', '2014-06-21 19:59:52', '2014-06-21 19:59:52'),
(14, 5, 8, '2014-06-21 19:22:49', '2014-06-21 19:59:43', '2014-06-21 19:59:43'),
(15, 6, 8, '2014-06-21 19:22:49', '2014-06-21 19:23:10', '2014-06-21 19:23:10'),
(16, 7, 8, '2014-06-21 19:22:49', '2014-06-21 19:23:00', '2014-06-21 19:23:00'),
(17, 8, 8, '2014-06-21 19:22:49', '2014-06-21 19:22:56', '2014-06-21 19:22:56'),
(18, 6, 8, '2014-06-21 19:59:57', '2014-06-21 20:06:02', '2014-06-21 20:06:02'),
(19, 7, 8, '2014-06-21 19:59:57', '2014-06-21 20:00:07', '2014-06-21 20:00:07'),
(20, 8, 8, '2014-06-21 19:59:57', '2014-06-21 20:00:05', '2014-06-21 20:00:05'),
(21, 9, 8, '2014-06-21 20:00:16', '2014-06-21 20:01:03', '2014-06-21 20:01:03'),
(22, 10, 8, '2014-06-21 20:00:16', '2014-06-21 20:00:16', NULL),
(23, 4, 8, '2014-06-21 20:06:07', '2014-06-21 20:59:51', '2014-06-21 20:59:51'),
(24, 5, 8, '2014-06-21 20:06:07', '2014-06-21 20:59:50', '2014-06-21 20:59:50'),
(25, 6, 8, '2014-06-21 20:06:07', '2014-06-21 20:59:49', '2014-06-21 20:59:49'),
(26, 1, 8, '2014-06-21 20:06:15', '2014-06-21 20:06:15', NULL),
(27, 2, 8, '2014-06-21 20:06:15', '2014-06-21 20:06:15', NULL),
(28, 7, 8, '2014-06-21 20:59:42', '2014-06-21 20:59:48', '2014-06-21 20:59:48'),
(29, 7, 8, '2014-06-21 20:59:55', '2014-06-21 20:59:55', NULL),
(30, 8, 8, '2014-06-21 20:59:56', '2014-06-21 20:59:56', NULL),
(31, 9, 8, '2014-06-21 20:59:56', '2014-06-21 20:59:56', NULL),
(32, 6, 8, '2014-06-21 22:01:36', '2014-06-21 22:01:36', NULL),
(33, 1, 10, '2014-06-21 22:26:04', '2014-06-21 22:26:04', NULL),
(34, 3, 10, '2014-06-21 22:26:04', '2014-06-21 22:26:04', NULL),
(35, 4, 10, '2014-06-21 22:26:05', '2014-06-21 22:26:05', NULL),
(36, 5, 10, '2014-06-21 22:26:05', '2014-06-21 22:26:05', NULL),
(37, 6, 10, '2014-06-21 22:26:05', '2014-06-21 22:26:05', NULL),
(38, 7, 10, '2014-06-21 22:26:05', '2014-06-21 22:26:05', NULL),
(39, 8, 10, '2014-06-21 22:26:05', '2014-06-21 22:26:05', NULL),
(40, 11, 11, '2014-06-24 05:29:12', '2014-06-24 05:29:12', NULL),
(41, 12, 11, '2014-06-24 05:29:12', '2014-06-24 05:29:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_31_234247_create_users_table', 1),
('2014_06_01_015523_create_modulos_table', 1),
('2014_06_01_065517_arreglar_descripcion_modulos', 2),
('2014_06_01_070806_create_perfils_table', 3),
('2014_06_01_071017_create_permisos_table', 3),
('2014_06_01_071542_add_foreign_permisos', 4),
('2014_06_01_072630_add_campos_users', 5),
('2014_06_01_080009_add_campo_imagen_user', 6),
('2014_06_01_110115_create_clinicas_table', 7),
('2014_06_04_115809_create_servicios_table', 8),
('2014_06_15_225318_puliendo_users', 9),
('2014_06_16_210448_arreglando_clinicas', 10),
('2014_06_16_212602_arreglando_clinicas2', 11),
('2014_06_17_001242_arreglando_clinicas3', 12),
('2014_06_23_232303_create_tipos_table', 13),
('2014_06_23_232543_add_foreign_tipo', 14),
('2014_06_23_232734_add_foreign_tipo2', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idpadre` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modulos_idpadre_foreign` (`idpadre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `descripcion`, `url`, `icono`, `idpadre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PADRE', '#', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Operaciones', '#', 'fa-medkit', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'clinicas', 'clinicas', 'fa-ambulance', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 'Servicios', 'servicios', 'fa-stethoscope', 2, '2014-06-01 17:52:53', '2014-06-02 04:40:15', NULL),
(5, 'Tipo', 'tipos', '', 2, '2014-06-01 17:53:53', '2014-06-01 17:53:53', NULL),
(20, 'Seguridad', '#', 'fa-bomb', 1, '2014-06-01 18:52:52', '2014-06-01 18:52:52', NULL),
(21, 'Usuarios', 'users', 'fa-user-md', 20, '2014-06-01 18:53:47', '2014-06-01 18:53:47', NULL),
(22, 'Modulos', 'modulos', 'fa-suitcase', 20, '2014-06-01 18:55:50', '2014-06-01 18:55:50', NULL),
(23, 'Perfiles', 'perfils', 'fa-users', 20, '2014-06-01 18:56:57', '2014-06-04 16:55:39', NULL),
(24, 'consumir', 'consumir', '', 20, '2014-06-01 20:06:00', '2014-06-01 20:08:10', '2014-06-01 20:08:10'),
(25, 'dfdfs', 'gdfgdtt', '', 2, '2014-06-03 00:03:13', '2014-06-03 00:03:25', '2014-06-03 00:03:25'),
(26, 'perfil', 'profile', 'fa-user-md', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(28, 'Negocio', 'clinica', 'fa-ambulance', 2, '0000-00-00 00:00:00', '2014-06-17 01:42:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfils`
--

CREATE TABLE IF NOT EXISTS `perfils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descipcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfils`
--

INSERT INTO `perfils` (`id`, `descipcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Usuario', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idperfil` int(10) unsigned NOT NULL,
  `idmodulo` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permisos_idperfil_foreign` (`idperfil`),
  KEY `permisos_idmodulo_foreign` (`idmodulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `idperfil`, `idmodulo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 1, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 1, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 1, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 1, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, 2, 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, 1, 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(11, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, 2, 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(13, 1, 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `descripcion`, `detalle`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Centro quirúrgico', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Hospitalización', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'Unidad de cuidados intensivos', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 'Rehabilitación', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 'Imagenología', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 'Laboratorio de la Marcha', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 'Laboratorio y Patología Clínica', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 'Servicio Materno – Perinatal', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, 'Emergencias', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, 'Gimnasio', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(11, 'Restaurante', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, 'Hospedaje', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `descripcion`, `icono`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clinica', 'hospital.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Restaurante', 'restaurant.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'Grifo', 'bus.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urlimagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'profile-pic.jpg',
  `idperfil` int(10) unsigned NOT NULL DEFAULT '2',
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_idperfil_foreign` (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `nombres`, `apellidos`, `urlimagen`, `idperfil`, `telefono`, `direccion`, `ciudad`, `distrito`, `web`, `facebook`, `linkedin`, `google`, `twitter`) VALUES
(1, 'admin', 'pever@unsm.edu.pe', '$2y$10$UsIiHDIy3kuP7aCfRrOdHOBQcr/YPRW1SIdKMy4Lq1OG.AijFQo92', 'ptZXiTxJnnWJFGcFdKvbnOWRWhXFohJnnRv1IZUNK5zCpNRnUaucQqyY1sLA', '0000-00-00 00:00:00', '2014-06-24 05:05:36', NULL, 'eveR', 'vásquez', 'ever.gif', 1, '976143808', 'jr. 16 de mayo #741', 'Tarapoto', 'Morales', 'http://sonico.com.pe', 'http://facebook.com/sonico999', 'http://linkedin.com/sonico999', '', '@sonico999'),
(25, 'avid', 'avid@gmail.com', '$2y$10$ksz8/QFzROIwu9srIQMvX.9/VtwsIvwaFyRo1JRGEXBEJhQD.1pQi', 'UAErqeDSvkdloo95eQlj0TcxNceCBq4JpRNXhB51xKeTRZL7ZgleN3Dsaiv8', '2014-06-16 02:51:48', '2014-06-16 02:53:52', NULL, '', '', '', 2, '', '', '', '', '', '', '', '', ''),
(26, 'sonico999', 'sonico999@gmail.com', '$2y$10$oX4bRPy0qTKoTta.k8h2CuiFx1NVufEIcim4crOY5XKy2XEyt0F8u', 'szfeGjxaeY938tOLcEqTQ9DyFqSNCI79wkVBA4NZ9SRLWJ2F8ILGcVA0Ngz0', '2014-06-16 22:37:28', '2014-06-24 05:41:07', NULL, 'avid', 'Santos', 'usv8pn.jpg', 2, '976143808', 'av. america', '', '', '', '', '', '', ''),
(27, 'administrador', 'avid@hotmail.com', '$2y$10$iO.TyJKhKnegpYZwZkW4y.taGa9KKjtoIDl2/IQq5l7RqxAOVfxZ6', 'Q888p2TxMYrezNU6oGnfi8CjOGBoYtb8qhUdjRIQ1xPB6e7VeGSyQSpX6gr0', '2014-06-21 22:15:09', '2014-06-21 22:26:46', NULL, 'Manuel Nieves', 'Avid', 'ever.gif', 2, '', '', '', '', '', '', '', '', ''),
(28, 'manuel', 'manuel@hotmail.com', '$2y$10$KgPbaczi7xqo542itenCtOfAL/fufAEklkGjTsOpAWLw6Jpu/Z7eW', '', '2014-06-24 05:05:56', '2014-06-24 05:06:19', NULL, 'manuel', 'manuel', 'profile-pic.jpg', 2, '', '', '', '', '', '', '', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clinicas`
--
ALTER TABLE `clinicas`
  ADD CONSTRAINT `clinicas_idtipo_foreign` FOREIGN KEY (`idtipo`) REFERENCES `tipos` (`id`),
  ADD CONSTRAINT `clinicas_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `detalle_servicios`
--
ALTER TABLE `detalle_servicios`
  ADD CONSTRAINT `detalle_idclinica_foreign` FOREIGN KEY (`idclinica`) REFERENCES `clinicas` (`id`),
  ADD CONSTRAINT `detalle_idservicio_foreign` FOREIGN KEY (`idservicio`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_idpadre_foreign` FOREIGN KEY (`idpadre`) REFERENCES `modulos` (`id`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_idmodulo_foreign` FOREIGN KEY (`idmodulo`) REFERENCES `modulos` (`id`),
  ADD CONSTRAINT `permisos_idperfil_foreign` FOREIGN KEY (`idperfil`) REFERENCES `perfils` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_idperfil_foreign` FOREIGN KEY (`idperfil`) REFERENCES `perfils` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
