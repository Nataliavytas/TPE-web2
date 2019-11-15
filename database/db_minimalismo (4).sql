-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 14:55:51
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

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
<<<<<<< HEAD:database/db_minimalismo (4).sql
('Educacionhh', 7),
('Salud', 9),
('Hogar', 10),
('Familia', 11),
('Amor', 12);
=======
('Hogar', 6),
('Educacion', 7);
>>>>>>> 237057186790c4790c75914d2942cff8cc4df29e:database/db_minimalismo.sql

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `id_revistas` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fecha` year(4) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revistas`
--

INSERT INTO `revistas` (`id_revistas`, `id_categorias`, `titulo`, `fecha`, `descripcion`) VALUES
<<<<<<< HEAD:database/db_minimalismo (4).sql
(6, 9, 'Un paso a la vez ', 2017, 'Descripcion 2'),
(8, 9, 'Antes de empezar, vi', 1995, 'descripcion 3'),
(9, 10, 'Sigue tu intuición ', 2019, 'descripcion 4'),
(10, 7, 'Empieza bien', 2019, 'Descripcion para revista '),
(11, 9, 'Empieza por desechar', 2018, 'Descripcion para revista '),
(12, 10, 'Fotos: ama quien ere', 2018, 'Descripcion para revista '),
(13, 11, 'Chucherias de regalo', 2017, 'Descripcion para revista '),
(14, 12, 'Asigna un lugar a cada cosa', 2019, 'Descripcion para revista ');
=======
(0, 7, 'opcion1', 0000, '2000');
>>>>>>> 237057186790c4790c75914d2942cff8cc4df29e:database/db_minimalismo.sql

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
<<<<<<< HEAD:database/db_minimalismo (4).sql
  `password` varchar(255) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
=======
  `password` varchar(255) NOT NULL
>>>>>>> 237057186790c4790c75914d2942cff8cc4df29e:database/db_minimalismo.sql
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

<<<<<<< HEAD:database/db_minimalismo (4).sql
INSERT INTO `usuarios` (`id`, `email`, `password`, `tipo_usuario`) VALUES
(2, 'nati@a', '$2y$10$FN46.OfQQ2/lhydgJO7sbOmukbDxQJ/eon2UzCAE9ACz2URzNIL.a', 0);
=======
INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(2, 'nati@a', '$2y$10$FN46.OfQQ2/lhydgJO7sbOmukbDxQJ/eon2UzCAE9ACz2URzNIL.a');
>>>>>>> 237057186790c4790c75914d2942cff8cc4df29e:database/db_minimalismo.sql

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
<<<<<<< HEAD:database/db_minimalismo (4).sql
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 237057186790c4790c75914d2942cff8cc4df29e:database/db_minimalismo.sql

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
<<<<<<< HEAD:database/db_minimalismo (4).sql
ALTER TABLE `revistas`
  MODIFY `id_revistas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
=======
>>>>>>> 237057186790c4790c75914d2942cff8cc4df29e:database/db_minimalismo.sql
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD CONSTRAINT `revistas_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
