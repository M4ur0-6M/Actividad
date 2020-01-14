-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2020 a las 02:48:23
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CedulaID` int(10) UNSIGNED NOT NULL,
  `Nombres` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Barrio` varchar(255) NOT NULL,
  `Estrato` int(1) UNSIGNED NOT NULL,
  `Departamento` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Fijo` int(7) UNSIGNED DEFAULT NULL,
  `Celular` int(10) UNSIGNED NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Observacion` varchar(255) DEFAULT NULL,
  `fecharegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CedulaID`, `Nombres`, `Apellidos`, `Direccion`, `Barrio`, `Estrato`, `Departamento`, `Ciudad`, `Estado`, `Fijo`, `Celular`, `Email`, `Observacion`, `fecharegistro`) VALUES
(123456798, 'Carlos', 'Morales', 'km12 via condina', 'condina', 2, 'Risaralda', 'Pereira', 'propietario', 0, 123456789, 'df@gmi.vom', 'oki', '2020-01-13 20:46:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CedulaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
