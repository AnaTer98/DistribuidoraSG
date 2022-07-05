-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-07-2022 a las 05:13:52
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

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
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `puesto` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `rutaCv` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `puesto`, `nombre`, `correo`, `telefono`, `rutaCv`) VALUES
(1, 'Patron', 'Sevas', '7984651320', 'sevas@gmail.com', 'PDF//colab04-52-18.pdf'),
(2, 'Patron', 'Daneil', 's3v4s61@gmail.com', '7894651320', 'PDF/colab04-56-06.pdf');

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
(46, 'images/06-26-22-19-48-16.jpeg', 'Primera imagen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id` int(11) NOT NULL,
  `rutaImg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id`, `rutaImg`) VALUES
(18, 'images//cot30-06-2620-25-37.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricantes`
--

CREATE TABLE `fabricantes` (
  `id` int(11) NOT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `rol` varchar(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `rutaPdf` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `rutaPdf` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `comentario` varchar(600) NOT NULL,
  `rutaImg` varchar(50) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `comentario`, `rutaImg`, `fecha`) VALUES
(29, 'Primera publicación ', 'images/publicaciones/pub30-06-2620-21-19.jpeg', '30-06-26'),
(32, 'Otra mas ', 'images/publicaciones/pub28-06-2205-36-20.jpeg', '28-06-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicio` varchar(30) NOT NULL,
  `rutaPdf` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`, `rutaPdf`) VALUES
(2, 'Telefonia', ''),
(3, 'Computo', ''),
(4, 'Servicios', 'PDF/proSer06-26-22-20-22-12.pdf'),
(5, 'Novedades', 'PDF/proSer06-26-22-20-22-31.pdf'),
(6, 'Plataforma de recargas', 'PDF/proSer06-26-22-20-22-42.pdf'),
(7, 'Accesorios', 'PDF/proSer06-26-22-20-22-53.pdf');

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
(8, 'Sevas', 'sevas@gmail.com', '9fab6755cd2e8817d3e73b0978ca54a6', '7894561230', 'admin', '084b6fbb10729ed4da8c3d3f5a3ae7c9', 1),
(18, 'Karla', 'sevass@gmail.comº', '9fab6755cd2e8817d3e73b0978ca54a6', '7894561230', 'menudeo', 'cb16b8498f74ba6b6a6873518624168c', 0),
(20, 'sevasss', 'sevas5@gmail.com', '9fab6755cd2e8817d3e73b0978ca54a6', '7894561230', 'mayoreo', 'ce89f6b11bdc5b365085a84036e9365b', 0),
(21, 'Sevas', 'sevas@gamail.com', '9fab6755cd2e8817d3e73b0978ca54a6', '7894561320', 'menudeo', 'f8bf09f5fceaea80e1f864a1b48938bf', 0),
(22, 'candi', 'candi@gmail.com', '9fab6755cd2e8817d3e73b0978ca54a6', '7894566123', 'mayoreo', 'db6ebd0566994d14a1767f14eb6fba81', 1),
(23, 'Sebastian Posasadas', 's3v4s61@outlook.com', 'e3157422a54d04867ab535e7f8272973', '7711237894', 'menudeo', 'd360a502598a4b64b936683b44a5523a', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantess`
--

CREATE TABLE `vacantess` (
  `id` int(11) NOT NULL,
  `vacante` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `rutaImg` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacantess`
--

INSERT INTO `vacantess` (`id`, `vacante`, `descripcion`, `rutaImg`) VALUES
(29, 'Patron', 'Una descripcion bien chingona ', 'images/vac-00-29-38.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacantess`
--
ALTER TABLE `vacantess`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `vacantess`
--
ALTER TABLE `vacantess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
