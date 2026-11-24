-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-10-2026 a las 08:32:02
-- Versión del servidor: 5.7.24
-- Versión de PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `neighborhood_connect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf32_spanish_ci NOT NULL,
  `activity_date` date NOT NULL,
  `capacity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf32_spanish_ci DEFAULT NULL,
  `association_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `title`, `activity_date`, `capacity`, `image`, `association_id`) VALUES
(1, 'Auzoko elkartasun topaketa', '2026-11-05', 30, 'bizitegi_1.jpg', 1),
(2, 'Boluntariotza tailerra', '2026-11-09', 20, 'caritas_1.jpg', 2),
(3, 'Euskal kulturaren tailerra', '2026-11-12', 25, 'txirula_1.jpg', 3),
(4, 'Abesbatza saio irekia', '2026-11-18', 40, 'coral_1.jpg', 4),
(5, 'Mendiko bizikleta irteera', '2026-11-21', 20, 'otxoak_1.jpg', 5),
(6, 'Saskibaloi txapelketa', '2026-11-24', 32, 'basket_1.jpg', 6),
(7, 'Gazteentzako natura irteera', '2026-11-27', 25, 'goizalde_1.jpg', 7),
(8, 'Auzoko proposamenen topaketa', '2026-12-03', 35, '', 8),
(10, 'Gimnastika erakustaldia', '2026-12-10', 45, 'gimnasia_1.jpg', 10),
(11, 'Surfaren hastapeneko hitzaldia', '2026-12-12', 30, 'surf_1.jpeg', 11),
(12, 'Gabonetako abesbatza emanaldia', '2026-12-16', 70, 'coral_2.jpg', 4),
(13, 'Bizikleta ibilaldi herrikoia', '2026-12-18', 25, 'otxoak_2.jpg', 5),
(14, 'Auzoko elkarteen topaketa', '2026-12-20', 50, 'bihotz_1.jpg', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `associations`
--

CREATE TABLE `associations` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf32_spanish_ci NOT NULL,
  `neighborhood` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `associations`
--

INSERT INTO `associations` (`id`, `name`, `neighborhood`, `category_id`) VALUES
(1, 'Bizitegi', 'Otxarkoaga', 1),
(2, 'Cáritas', 'Otxarkoaga', 1),
(3, 'Txirula Kultur Elkartea', 'Otxarkoaga', 2),
(4, 'Agrupación Coral Otxarkoaga', 'Otxarkoaga', 2),
(5, 'Otxoak Mountain Bike', 'Otxarkoaga', 3),
(6, 'C.D. Baloncesto de Otxarkoaga', 'Otxarkoaga', 3),
(7, 'Goizalde Eskaut Taldea', 'Otxarkoaga', 4),
(8, 'Asociación de Vecinos de Txurdinaga Bihotz Berria', 'Txurdinaga', 5),
(10, 'Federación Vasca de Gimnasia - Euskal Gimnastika Federazioa', 'Txurdinaga', 3),
(11, 'Euskal Herriko Surf Federazioa', 'Txurdinaga', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Gizarte-ekintza'),
(2, 'Kultura eta musika'),
(3, 'Kirola eta aisialdia'),
(4, 'Hezkuntza eta gazteria'),
(5, 'Auzo-elkarteak');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `association_id` (`association_id`);

--
-- Indices de la tabla `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `associations`
--
ALTER TABLE `associations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`);

--
-- Filtros para la tabla `associations`
--
ALTER TABLE `associations`
  ADD CONSTRAINT `associations_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
