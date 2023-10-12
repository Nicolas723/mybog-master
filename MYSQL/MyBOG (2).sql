-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2023 a las 16:59:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mybog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Id_servicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`Id_Usuario`, `Nombres`, `Apellidos`, `Email`, `Password`, `Id_servicios`) VALUES
(1, '', '', '', '', 1),
(11, 'Jose Antonio', 'Montealegre', 'santi01031@outlook.com', '$2y$10$U38myVk905pPM82E5FjttePPLFV45KMHY9V62qctkfF7DW2j1ya3.', 1),
(12, 'Jose Antonio', 'Montealegre', 'santi01032@outlook.com', '$2y$10$9LNqlmWGc3IY4k0ALbFST.NtvsDHbN0lY7jaZ5cLSf9QWdPoNaFgm', 1),
(13, 'Jose Antonio', 'Montealegre', 'sa@outlook.com', '$2y$10$BixBpA9e14TMR/2.pTvGyud0MvzYTcyzLZ1bS7ytr0hdOQDjun6I.', 1),
(14, 'Jose Antonio', 'Montealegre', 'sarm@outlook.com', '$2y$10$80MQS09Vs8JUykXGvgO4OeDa1NJW6M8p9cBrw/aHzmAee8d8pytzC', 1),
(15, 'Jose Antonio', 'Montealegre', 'j.polanco1975@hotmail.com', '$2y$10$yUkAet1JKI52zvX45BybueX89j2G9EXhb1hU8DVUWM4MF9cMMKip.', 1),
(16, 'Nicolas', 'Baron', 'nbaronortiz4@gmail.com', '$2y$10$kLRDYw0WEZ0SLpV30089E.FwbmlIA2sPqm83k9oOV462H6YYknfsC', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `Id_servicios` (`Id_servicios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_ibfk_1` FOREIGN KEY (`Id_servicios`) REFERENCES `servicios` (`Id_Servicios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
