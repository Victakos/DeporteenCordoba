-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2023 a las 02:52:28
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deporte_en_cordoba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL,
  `usertype` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `aemail`, `apassword`, `usertype`) VALUES
(1, 'victakos11@gmail.com', '1234', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointment`
--

CREATE TABLE `appointment` (
  `codcit` int(11) NOT NULL,
  `asunto` varchar(150) NOT NULL,
  `color` char(8) NOT NULL,
  `codpaci` int(11) NOT NULL,
  `coddoc` int(11) NOT NULL,
  `idhora` int(11) NOT NULL,
  `codespe` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `estado` char(1) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `appointment`
--

INSERT INTO `appointment` (`codcit`, `asunto`, `color`, `codpaci`, `coddoc`, `idhora`, `codespe`, `start`, `end`, `estado`, `fecha_create`) VALUES
(1, 'evento', '#40E0D0', 1, 1, 1, 1, '2021-11-29 19:30:00', '2021-11-29 19:30:00', '1', '2021-11-26 23:14:18'),
(2, 'esto es un ejemplo de asunto', '#40E0D0', 1, 1, 1, 1, '2021-12-20 19:30:00', '2021-12-20 19:30:00', '1', '2021-11-27 00:40:54'),
(3, 'asunto de emergencias', '#40E0D0', 3, 3, 3, 5, '2021-12-01 19:30:00', '2021-12-01 19:30:00', '1', '2021-11-27 00:54:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubes`
--

CREATE TABLE `clubes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clubes`
--

INSERT INTO `clubes` (`id`, `nombre`, `email`, `pass`) VALUES
(4, 'Pepe Aguilera FS', 'pepe.aguilera@fs.com', '1234'),
(6, 'prueba', 'victakos1993@gmail.com', '1234'),
(7, 'asdasdasd', 'sad@gmail.com', 'asdasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descripcion`, `inicio`, `fin`, `colortexto`, `colorfondo`) VALUES
(1, 'Fútbol', 'Pista 1', '2023-01-23 20:00:00', '2023-01-23 21:00:00', '#ffffff', '#ff0000'),
(2, 'Padel', '', '2023-01-17 20:00:00', '2023-01-17 21:30:00', '#ffffff', '#fa0000'),
(5, 'Fútbol', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '#000000', '#f5f5f5'),
(6, 'Fútbol', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '#000000', '#f5f5f5'),
(7, 'Padel', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '#ffffff', '#6495ed'),
(8, 'Padel', 'Víctor Aguilera', '2023-01-15 09:00:00', '2023-01-15 10:00:00', '#ffffff', '#6495ed'),
(9, 'Fútbol', '', '2023-01-30 15:00:00', '2023-01-30 16:00:00', '#000000', '#f5f5f5'),
(11, 'Padel', '', '2023-01-15 11:00:00', '2023-01-15 12:00:00', '#ffffff', '#6495ed'),
(12, 'CERRADO', '', '2023-01-16 00:00:00', '2023-01-16 09:00:00', '#ffffff', '#000000'),
(14, 'CERRADO', '', '2023-01-17 00:00:00', '2023-01-17 09:00:00', '#ffffff', '#000000'),
(15, 'CERRADO', '', '2023-01-18 00:00:00', '2023-01-18 09:00:00', '#ffffff', '#000000'),
(16, 'CERRADO', '', '2023-01-19 00:00:00', '2023-01-19 09:00:00', '#ffffff', '#000000'),
(17, 'CERRADO', '', '2023-01-20 00:00:00', '2023-01-20 09:00:00', '#ffffff', '#000000'),
(18, 'CERRADO', '', '2023-01-21 00:00:00', '2023-01-21 09:00:00', '#ffffff', '#000000'),
(19, 'CERRADO', '', '2023-01-22 00:00:00', '2023-01-22 09:00:00', '#ffffff', '#000000'),
(20, 'CERRADO', '', '2023-01-23 00:00:00', '2023-01-23 09:00:00', '#ffffff', '#000000'),
(21, 'CERRADO', '', '2023-01-24 00:00:00', '2023-01-24 09:00:00', '#ffffff', '#000000'),
(22, 'CERRADO', '', '2023-01-25 00:00:00', '2023-01-25 09:00:00', '#ffffff', '#000000'),
(23, 'CERRADO', '', '2023-01-26 00:00:00', '2023-01-26 09:00:00', '#ffffff', '#000000'),
(24, 'CERRADO', '', '2023-01-27 00:00:00', '2023-01-27 09:00:00', '#ffffff', '#000000'),
(25, 'CERRADO', '', '2023-01-28 00:00:00', '2023-01-28 09:00:00', '#ffffff', '#000000'),
(26, 'CERRADO', '', '2023-01-29 00:00:00', '2023-01-29 09:00:00', '#ffffff', '#000000'),
(27, 'CERRADO', '', '2023-01-30 00:00:00', '2023-01-30 09:00:00', '#ffffff', '#000000'),
(28, 'CERRADO', '', '2023-01-31 00:00:00', '2023-01-31 09:00:00', '#ffffff', '#000000'),
(29, 'CERRADO', '', '2023-02-01 00:00:00', '2023-06-01 00:00:00', '#ffffff', '#000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventospredefinidos`
--

CREATE TABLE `eventospredefinidos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `colortexto` varchar(7) DEFAULT NULL,
  `colorfondo` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventospredefinidos`
--

INSERT INTO `eventospredefinidos` (`id`, `titulo`, `horainicio`, `horafin`, `colortexto`, `colorfondo`) VALUES
(6, 'CERRADO', '00:00:00', '09:00:00', '#ffffff', '#000000'),
(7, 'Padel', '18:30:00', '20:30:00', '#ffffff', '#3788d8'),
(8, 'Padel', '20:30:00', '22:00:00', '#ffffff', '#3788d8'),
(9, 'Padel', '22:00:00', '23:30:00', '#ffffff', '#3788d8'),
(11, 'Fútbol', '16:00:00', '17:00:00', '#ffffff', '#ff4d4d'),
(12, 'Fútbol', '17:00:00', '18:00:00', '#ffffff', '#ff4d4d'),
(13, 'Fútbol', '18:00:00', '19:00:00', '#ffffff', '#ff4d4d'),
(14, 'Fútbol', '19:00:00', '20:00:00', '#ffffff', '#ff4d4d'),
(15, 'Fútbol', '20:00:00', '21:00:00', '#ffffff', '#ff4d4d'),
(16, 'Fútbol', '21:00:00', '22:00:00', '#ffffff', '#ff4d4d'),
(17, 'Fútbol', '22:00:00', '23:00:00', '#ffffff', '#ff4d4d'),
(18, 'Fútbol Sala', '17:00:00', '18:00:00', '#ffffff', '#4fd345'),
(19, 'Fútbol Sala', '18:00:00', '19:00:00', '#ffffff', '#4fd345'),
(20, 'Fútbol Sala', '21:30:00', '22:30:00', '#ffffff', '#4fd345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre`, `pass`) VALUES
(15, 'prueba', 'prueba@1.com', '1234'),
(17, 'Pepe Aguilera', '1123@pepe.com', '1234'),
(25, '1@1.es', 'Prueba ahora', '1234'),
(35, 'prueba@prueba.com', 'Prueba', '1234'),
(36, 'victakos11@gmail.com', 'Víctor', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventospredefinidos`
--
ALTER TABLE `eventospredefinidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clubes`
--
ALTER TABLE `clubes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `eventospredefinidos`
--
ALTER TABLE `eventospredefinidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
