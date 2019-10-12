-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 15:25:10
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_minimalismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `nombreCat` varchar(20) NOT NULL,
  `id_categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`nombreCat`, `id_categorias`) VALUES
('Familia', 2),
('Estetica', 3),
('Relaciones', 4),
('Moda', 5),
('Hogar', 6),
('Educacion', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `id_revistas` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `fecha` year(4) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revistas`
--

INSERT INTO `revistas` (`id_revistas`, `id_categorias`, `titulo`, `fecha`, `descripcion`) VALUES
(24, 2, 'Edicion 1', 1990, 'Descripcion para revista \"Edicion 1\"'),
(26, 3, 'Edicion 2', 1991, 'Descripcion para revista \"Edicion 2\"'),
(27, 4, 'Edicion 3', 1992, 'Descripcion para revista \"Edicion 3\"'),
(28, 5, 'Edicion 4', 1993, 'Descripcion para revista \"Edicion 4\"'),
(29, 6, 'Edicion 5', 1994, 'Descripcion para revista \"Edicion 5\"'),
(30, 2, 'Edicion 6', 1995, 'Descripcion para revista \"Edicion 6\"'),
(31, 3, 'Edicion 7', 1996, 'Descripcion para revista \"Edicion 7\"'),
(32, 4, 'Edicion 8', 1997, 'Descripcion para revista \"Edicion 8\"'),
(33, 5, 'Edicion 9', 1998, 'Descripcion para revista \"Edicion 9\"'),
(34, 6, 'Edicion 10', 1999, 'Descripcion para revista \"Edicion 10\"');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`id_revistas`),
  ADD KEY `id_categorias` (`id_categorias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `revistas`
--
ALTER TABLE `revistas`
  MODIFY `id_revistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD CONSTRAINT `revistas_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
