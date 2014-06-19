-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2014 a las 22:02:46
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
  PRIMARY KEY (`id`),
  KEY `clinicas_iduser_foreign` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clinicas`
--

INSERT INTO `clinicas` (`id`, `iduser`, `descripcion`, `direccion`, `latitud`, `longitud`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'clinica 1', 'av. america', '6565666', '56656', '2014-06-01 20:35:39', '2014-06-04 16:03:53', '2014-06-04 16:03:53'),
(7, 25, 'Clinica del oriente numero 2', 'av. america #345', '-6.478203804706209', '-76.3920789398253', '2014-06-16 02:52:50', '2014-06-16 02:52:50', NULL);

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
('2014_06_04_115809_create_servicios_table', 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `descripcion`, `url`, `icono`, `idpadre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PADRE', '#', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Operaciones', '#', 'fa-medkit', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'Clinicas', 'clinicas', 'fa-ambulance', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 'Servicios', 'servicios', 'fa-stethoscope', 2, '2014-06-01 17:52:53', '2014-06-02 04:40:15', NULL),
(5, 'Tipo', 'tipos', '', 2, '2014-06-01 17:53:53', '2014-06-01 17:53:53', NULL),
(20, 'Seguridad', '#', 'fa-bomb', 1, '2014-06-01 18:52:52', '2014-06-01 18:52:52', NULL),
(21, 'Usuarios', 'users', 'fa-user-md', 20, '2014-06-01 18:53:47', '2014-06-01 18:53:47', NULL),
(22, 'Modulos', 'modulos', 'fa-suitcase', 20, '2014-06-01 18:55:50', '2014-06-01 18:55:50', NULL),
(23, 'Perfiles', 'perfils', 'fa-users', 20, '2014-06-01 18:56:57', '2014-06-04 16:55:39', NULL),
(24, 'consumir', 'consumir', '', 20, '2014-06-01 20:06:00', '2014-06-01 20:08:10', '2014-06-01 20:08:10'),
(25, 'dfdfs', 'gdfgdtt', '', 2, '2014-06-03 00:03:13', '2014-06-03 00:03:25', '2014-06-03 00:03:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

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
(8, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `urlimagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idperfil` int(10) unsigned NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_idperfil_foreign` (`idperfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `nombres`, `apellidos`, `urlimagen`, `idperfil`) VALUES
(1, 'admin', 'pever@unsm.edu.pe', '$2y$10$joOFDIFLPDbbp7ZtzilPWOr8k3v78ZIiTBLYoqiSIyePGFw8UDjuS', 'yJcjaD2GiIy9t0mksf8auUKHztP4YZxSR6zF5c1OkeirZ5C9VAbZhXHfa3tr', '0000-00-00 00:00:00', '2014-06-16 02:30:29', NULL, 'ever', 'vásquez', 'assets/img/profile-ever.jpg', 2),
(25, 'avid', 'avid@gmail.com', '$2y$10$ksz8/QFzROIwu9srIQMvX.9/VtwsIvwaFyRo1JRGEXBEJhQD.1pQi', 'UAErqeDSvkdloo95eQlj0TcxNceCBq4JpRNXhB51xKeTRZL7ZgleN3Dsaiv8', '2014-06-16 02:51:48', '2014-06-16 02:53:52', NULL, '', '', '', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clinicas`
--
ALTER TABLE `clinicas`
  ADD CONSTRAINT `clinicas_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

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
