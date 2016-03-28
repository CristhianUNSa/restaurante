-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2016 a las 20:36:22
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
USE cakephp;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cakephp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

DROP TABLE IF EXISTS `mesas`;
CREATE TABLE IF NOT EXISTS `mesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `puestos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `posicion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `mesero_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `serie`, `puestos`, `posicion`, `created`, `modified`, `mesero_id`) VALUES
(6, '005', '20', 'Centro Derecha', '2016-03-26 01:37:11', '2016-03-26 02:05:53', 2),
(2, '001', '14', 'Lado superior derecho', '2016-03-25 18:15:47', NULL, 3),
(3, '002', '3', 'Lado superior derecho', '2016-03-25 18:17:07', NULL, 3),
(4, '003', '6', 'Lado inferior izquierdo', '2016-03-25 18:17:07', NULL, 1),
(5, '004', '10', 'Lado inferior izquierdo', '2016-03-25 18:17:43', NULL, 1),
(8, '008', '15', 'Arriba Derecha', '2016-03-26 03:31:45', '2016-03-26 03:31:45', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meseros`
--

DROP TABLE IF EXISTS `meseros`;
CREATE TABLE IF NOT EXISTS `meseros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `meseros`
--

INSERT INTO `meseros` (`id`, `dni`, `nombre`, `apellido`, `telefono`, `created`, `modified`) VALUES
(1, '34501974', 'Cristhian', 'Valencia', '3875869721', '2016-03-25 13:15:56', '2016-03-25 19:47:56'),
(2, '342342', 'Daniel', 'Contreras', '3244234234', '2016-03-25 13:16:24', '2016-03-25 19:32:10'),
(3, '32423423', 'Javier', 'Zavaleta', '65342344', '2016-03-25 13:16:59', NULL),
(7, '33333333', 'Rosita', 'Gonzalez', '2233443', '2016-03-26 03:30:58', '2016-03-26 03:30:58'),
(8, '34502974', 'Cristhian', 'Valenciaa', '234623255', '2016-03-26 15:50:33', '2016-03-26 15:50:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
