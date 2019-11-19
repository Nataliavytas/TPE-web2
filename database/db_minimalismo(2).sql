-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2019 a las 01:56:29
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
('Educacionhh', 7),
('Salud', 9),
('Hogar', 10),
('Familia', 11),
('Amor', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_revistas` int(11) NOT NULL,
  `comentario` tinytext NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `fechaComentario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_revistas`, `comentario`, `puntuacion`, `nombreUsuario`, `fechaComentario`) VALUES
(6, 8, 'COMENTARIO EJEMPLO 1', 3, 'Usuario1|', '2019-11-04'),
(7, 14, 'COMENTARIO EJEMPLO 1', 1, 'Usuario2', '2019-08-13'),
(8, 13, 'COMENTARIO EJEPLO 3', 5, 'Usuario3', '2019-07-16'),
(9, 10, 'EJEMPLO COMENTAIRO 4', 5, 'Usuario 4', '2019-09-11'),
(10, 11, 'COMENTARIO EJEMPLO 5', 2, 'Usuario 5', '2019-08-11'),
(11, 12, 'COMENTARIO EJEMPLO 6', 5, 'Usuario 6', '2019-08-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `id_revistas` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fecha` year(4) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revistas`
--

INSERT INTO `revistas` (`id_revistas`, `id_categorias`, `titulo`, `fecha`, `descripcion`, `imagen`) VALUES
(6, 9, 'Un paso a la vez ', 2017, 'Descripcion 2', ''),
(8, 9, 'Antes de empezar, vi', 1995, 'descripcion 3', ''),
(9, 10, 'Sigue tu intuición ', 2019, 'descripcion 4', ''),
(10, 7, 'Empieza bien', 2019, 'Descripcion para revista ', ''),
(11, 9, 'Empieza por desechar', 2018, 'Descripcion para revista ', ''),
(12, 10, 'Fotos: ama quien ere', 2018, 'Descripcion para revista ', ''),
(13, 11, 'Chucherias de regalo', 2017, 'Descripcion para revista ', ''),
(14, 12, 'Asigna un lugar a cada cosa', 2019, 'Descripcion para revista ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `tipo_usuario`) VALUES
(2, 'nati@a', '$2y$10$FN46.OfQQ2/lhydgJO7sbOmukbDxQJ/eon2UzCAE9ACz2URzNIL.a', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_revistas` (`id_revistas`);

--
-- Indices de la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`id_revistas`),
  ADD KEY `id_categorias` (`id_categorias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
-- AUTO_INCREMENT de la tabla `revistas`
ALTER TABLE `revistas`
  MODIFY `id_revistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_revistas`) REFERENCES `revistas` (`id_revistas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD CONSTRAINT `revistas_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
