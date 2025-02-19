-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2025 a las 23:30:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria_registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(150) NOT NULL,
  `editorial` varchar(150) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editorial`, `fecha_publicacion`, `categoria`, `descripcion`) VALUES
(6, '', '', '', '0000-00-00', '', ''),
(7, '', '', '', '0000-00-00', '', ''),
(8, 'erdgd', 'dfg', 'dfg', '2025-02-26', 'df', 'sdf'),
(10, 'erdgd', 'dfg', 'dfg', '2025-02-18', 'df', 'sdf'),
(13, 'erdgd', 'dfg', 'dfg', '2025-02-17', 'df', 'sdf'),
(14, 'erdgd', 'dfg', 'dfg', '0000-00-00', 'df', 'sdf'),
(16, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(17, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(18, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(19, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(20, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(21, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(22, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(23, 'El principito', 'Yo', 'Yo', '2025-02-24', 'Divertido', 'UWUWUUW'),
(24, 'erdgd', 'dfg', 'dfg', '2025-01-28', 'tert', 'fgh'),
(25, 'zaliz', 'zaliz', 'dfg', '2025-02-19', 'caliz', 'Caliz'),
(26, 'zaliz', 'zaliz', 'dfg', '2025-02-19', 'caliz', 'Caliz'),
(27, '', '', '', '0000-00-00', '', ''),
(28, 'Caliz', 'Miercoles', 'Segunda bse', '2025-02-19', 'Estresadaaaa', 'Yaaaaaaaaaaaaaaaaaaaaaaaaa'),
(29, 'Cien años de soledad', 'Gabriel Garcia ', 'nose', '0000-00-00', 'Ficcion', 'Cien años de soledad trata un siglo en la vida de la familia Buendía, cuyo patriarca, José Arcadio Buendía, fundó el pueblo ficticio de Macondo, en Colombia. La novela es considerada una obra maestra de la literatura latinoamericana y uno de los ejemplos clásicos del rea'),
(30, '', '', '', '0000-00-00', '', ''),
(31, '', '', '', '0000-00-00', '', ''),
(32, '', '', '', '0000-00-00', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
