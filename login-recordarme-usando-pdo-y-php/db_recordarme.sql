-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2021 a las 23:45:22
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_recordarme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

/*CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;*/

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `Ciudadanos` (`id`, 'telefono', `nombre`, `apellido_pat`,'apellido_mat','contraseña') VALUES
(1, '1122334455', 'Jhon', 'Maiden','Perez' '12345'),
(2, '5566778899', 'karla','Soria','Mendez' '12345'),
(3, '0123456789', 'Valeria', 'Soto','Rodriguez' '12345'),
(4, '1122334455', 'Mario', 'Tom','Fernandez' '12345'),
(5, '5566778899', 'German','Trevin','Hernandez' '12345'),
(6, '1234567890', 'pablo', 'Jolero','Vega' '12345'),
(7, '0123456789', 'Juan', 'Iren','Romero' '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `Ciudadanos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `Ciudadanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
