-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2023 a las 01:09:59
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
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosgenerales`
--

CREATE TABLE `usuariosgenerales` (
  `nombre_de_usuario_admin_principal` varchar(255) NOT NULL,
  `contrasena_de_usuario_admin_principal` varchar(255) NOT NULL,
  `contrasena2_de_usuario_admin_principal` varchar(255) NOT NULL,
  `nombre_de_la_empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariosgenerales`
--

INSERT INTO `usuariosgenerales` (`nombre_de_usuario_admin_principal`, `contrasena_de_usuario_admin_principal`, `contrasena2_de_usuario_admin_principal`, `nombre_de_la_empresa`) VALUES
('XandA', '123', '123', ''),
('Asieladmin', '135779halo', '135779halo', ''),
('JulietaAdmin', '12345', '12345', '12345'),
('Karli', '1111', '1111', 'Walmart');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
