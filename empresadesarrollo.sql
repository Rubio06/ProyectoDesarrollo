-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 23:29:55
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
-- Base de datos: `empresadesarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `paterno` varchar(100) NOT NULL,
  `materno` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dni` int(9) NOT NULL,
  `celular` int(10) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `nombres`, `paterno`, `materno`, `email`, `dni`, `celular`, `comentario`) VALUES
(1, 'ENOC MARIO', 'RUBIO', 'PAUCAR', 'Enoc.Rubio06@hotmail.com', 48083811, 947204863, 'Buenas noches deseo información acerca de una pagina web que deseo implementar'),
(2, 'CAMILA RUTH', 'QUISPE ', 'PALOMINO', 'Cami.love@hotmail.com', 47785779, 948554896, 'Buenas noches deseo información de una pagina web que deseo actualizar.'),
(3, 'GABRIEL', 'HERNANDEZ', 'ALARCON', 'Gabriel.144@gmila.com', 4478968, 993654871, 'Buenas noches deseo un presupuesto sobre una pagina web que deseo implementar\nAttentamente\nGabriel'),
(4, 'RODRIGO ARMANDA', 'ROBLES', 'SANGAMA', 'Rodri.14@outload.com', 8696354, 996322148, 'Buenas tardes deseo cotizar la pagina web de mi empresa, quiero actualizarlo'),
(5, 'ENOC', 'RUBIO', 'PAUCAR', 'Enoc.Rubio06@hotmail.com', 48083811, 48083811, '4865265'),
(7, 'ERNESTO CAMILO', 'ROSWELT', 'SANTILLAN', 'Ernest.145@hotmail.com', 45612347, 990976531, 'Buenas noches necesito asesoria para el seguimiento de la pagina web de mi empresa.'),
(8, 'KAREM', 'SOLIS', 'URBANO', 'Karem12@hotmail.com', 45678980, 997654789, 'Buenas noches deseo informacion sobre el costo de el sistema de mi empresa que deseo mejorar'),
(9, 'GABRIEL ', 'RUBIO', 'PAUCAR', 'Gaby.34@hotmail.com', 48334554, 900876654, 'Buenos tardes, comentarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infoempresa`
--

CREATE TABLE `infoempresa` (
  `id_empresa` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `infoempresa`
--

INSERT INTO `infoempresa` (`id_empresa`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Av. Tres de Octubre con Separadora industrial - cuadra 12', '(+51) 947-204863', 'masterweb.2005@sistemweb.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios`
--

CREATE TABLE `sitios` (
  `id_sitio` int(11) NOT NULL,
  `sitioWeb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sitios`
--

INSERT INTO `sitios` (`id_sitio`, `sitioWeb`) VALUES
(1, 'Enoc.Rubio06@hotmail.com'),
(2, 'wwww.miempresa.edu.com.pe'),
(3, 'https://intranet.uwiener.edu.pe/'),
(4, 'www.tuempresa.smath.com.pe'),
(6, ''),
(7, ''),
(8, 'wwww.hostinger.com.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `id_sugerencia` int(11) NOT NULL,
  `sugerencia` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`id_sugerencia`, `sugerencia`) VALUES
(1, 'Buenas tardes tienen que mejorar la recarga de la pagina web'),
(3, ''),
(4, 'HGJHGJ'),
(5, ''),
(6, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `infoempresa`
--
ALTER TABLE `infoempresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `sitios`
--
ALTER TABLE `sitios`
  ADD PRIMARY KEY (`id_sitio`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`id_sugerencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `infoempresa`
--
ALTER TABLE `infoempresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sitios`
--
ALTER TABLE `sitios`
  MODIFY `id_sitio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `id_sugerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
