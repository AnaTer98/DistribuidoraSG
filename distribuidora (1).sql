-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2022 a las 01:05:52
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
(27, 'images/04-17-22-21-44-09.jpeg', 'ajajja'),
(28, 'images/04-17-22-21-45-40.jpeg', 'Segunda foto'),
(29, 'images/04-18-22-02-59-47.jpeg', 'https://meet.google.com/uak-bvvp-zjb');

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
-- Error leyendo la estructura de la tabla distribuidora.vacantes: #1932 - Table 'distribuidora.vacantes' doesn't exist in engine
-- Error leyendo datos de la tabla distribuidora.vacantes: #1064 - Algo está equivocado en su sintax cerca 'FROM `distribuidora`.`vacantes`' en la linea 1

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
(8, 'Otra prueba mas ', 'asdaiusdaiushdaiushdoiaushdoiaushdoiaushdoiaushdoaiushdoaiusdhoaiusdhoaiusdhaosuidh', 'images/vac-06-19-35.png'),
(9, 'Vendedor', 'Unos mas para saber que pedo', 'images/vac-06-48-13.jpeg'),
(10, 'Uno mas de ejemplo', 'okasdjaspdjapsdja', 'images/vac-21-02-19.jpeg'),
(11, 'sasa', 'askakdsnkdsnakndasnkadsadsmamsdmasmdamsdamsdmamsdmasdmamsdmamdmadmasmdmasmdmasdmasmdmamsdmamdasmda', 'images/vac-21-02-35.'),
(12, 'Ya que ', 'dasjdñlkajñasdajsdoaijsdoijasopidjpoaisjdpoaijsdpoijaspdoijaspoidjapoisdjapoisdjaoisd', 'images/vac-21-02-55.jpeg');

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
-- Indices de la tabla `vacantess`
--
ALTER TABLE `vacantess`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `vacantess`
--
ALTER TABLE `vacantess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
