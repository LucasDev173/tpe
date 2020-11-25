-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2020 a las 05:38:08
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ide` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ide`, `nombre`) VALUES
(1, 'aventura'),
(6, 'fabula'),
(14, 'policial'),
(17, 'novela'),
(19, 'accion'),
(20, 'tragedia'),
(22, 'horror'),
(23, 'comedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idc` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `texto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `puntos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idc`, `id_libro`, `texto`, `puntos`) VALUES
(11, 60, 'lol', 3),
(12, 60, 'asombroso', 3),
(13, 60, 'tremendo', 5),
(14, 49, 'Test', 1),
(15, 49, 'asdf', 3),
(16, 49, 'Asombroso', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `autor`, `precio`, `id_categoria`) VALUES
(49, 'El Cuervo', 'Edgar Allan Poe', 120, 1),
(60, 'Bestias', 'Lego S. Ruis', 100, 1),
(63, 'Blood ', 'John Monolith', 80, 19),
(64, 'Relatos de Berser', 'Bandi Velvet', 130, 20),
(65, 'Patologia', 'Ace Pickle Lodge', 50, 22),
(66, 'La Marca de los Lobos ', 'Terry Satchell N. Kruger', 230, 19),
(67, 'Celulas Muertas', 'Mark Teresa', 170, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `isadmin`) VALUES
(1, 'matias', '$2y$12$xt0XjCZ24fbaJVaLheMoE.XzLI4o.QpviURM4k1.l8kU7ZmrnTIjy', 1),
(22, 'lucas', '$2y$10$pww2jCRCqR2q2SAPwRs3o.aS/UByy7X.YetC61VM.XrN23wbwcvfC', 1),
(23, 'juan', '$2y$10$9lpaFoNkVy8n2iDoCpPXNOI9Hddp0ULYrS3PVyWaka9.1j6vD5IJ.', 0),
(30, 'reytw46', '$2y$10$aq5S8t8ujnGgA/.gV//9MOb96cKHrRmKf7J5xHsF.9VF0D.bHILA6', 0),
(31, 'damian', '$2y$10$4UvpqKYVBbOTiwW8moeiruqByo/qcgLEmegjcHXOLrBMPGHy3J2qG', 0),
(32, 'snipetf2000', '$2y$10$gw8ppfxm2s.G8DfqnKgz6.XEn6JbC8Sm6Yqw7E8Qh/JRfHRr5Lyia', 0),
(33, 'maria', '$2y$10$f7.dGmeyEOAj8H8wXCXr7OZCTKaDiakhePbtU.cRMpc75Oat.x6XG', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ide`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`ide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
