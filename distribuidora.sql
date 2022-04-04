-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2022 a las 06:03:21
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `distribuidora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id` int(11) NOT NULL,
  `rutaImg` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`id`, `rutaImg`, `descripcion`) VALUES
(16, 'images/03-07-22-04-22-18.jpeg', 'dsadsadsasdasd'),
(17, 'images/03-18-22-02-05-22.jpeg', 'sasdasda'),
(18, 'images/03-18-22-02-05-56.jpeg', 'ajajja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `hash` varchar(33) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `telefono`, `rol`, `hash`, `activo`) VALUES
(3, 'Daniel', 'sebastian@gmail.com', '789456123', '7894561230', 'menudeo', 'd840cc5d906c3e9c84374c8919d2074e', 1),
(8, 'Sevas', 'sevas@gmail.com', '789456123', '7894561230', 'admin', '084b6fbb10729ed4da8c3d3f5a3ae7c9', 1),
(11, 'Candida', 'candida@gmail.com', '789456123', '7894561230', 'menudeo', '04025959b191f8f9de3f924f0940515f', 0),
(12, 'benitos', 'beni@gamil.com', '789456123', '7894561237', 'menudeo', '07563a3fe3bbe7e3ba84431ad9d055af', 0),
(13, 'Quique', 'luis@gmail.com', '789456123', '7894651230', 'menudeo', '8613985ec49eb8f757ae6439e879bb2a', 0),
(15, 'JOse', 'jjose@gmail.com', '789456123', '7894561230', 'menudeo', 'cf05968255451bdefe3c5bc64d550517', 0),
(16, 'terea', 'Tere@gmail.com', '789456123', '7894561230', 'menudeo', 'faa98789cfb692431ffb52e13497443a', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `id` int(11) NOT NULL,
  `vacante` varchar(30) NOT NULL,
  `descripcion` longtext NOT NULL,
  `requisitos` longtext NOT NULL,
  `observaciones` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
