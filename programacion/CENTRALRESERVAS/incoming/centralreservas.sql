-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2018 a las 15:17:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centralreservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casasrurales`
--

CREATE TABLE `casasrurales` (
  `id` int(11) NOT NULL,
  `REF` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `NOMBRERECINTO` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `DIRECCION` varchar(128) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CIUDAD` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CORREORECINTO` varchar(45) NOT NULL,
  `DESCRIPCION` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `BORRADO` tinyint(4) NOT NULL,
  `PRECIOHABITUAL` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casasrurales`
--

INSERT INTO `casasrurales` (`id`, `REF`, `NOMBRERECINTO`, `DIRECCION`, `CIUDAD`, `CORREORECINTO`, `DESCRIPCION`, `BORRADO`, `PRECIOHABITUAL`) VALUES
(1, '1', 'Casa Rural Las Escuelas', 'Calle la piedra s/n', 'Vadocones', 'recepcion@casarurallasecuelas.com', 'Casa rural en plena plaza mayor de vadocondes y al lado de la bodega del siglo XIX.', 0, 30),
(2, '2', 'El Molino', 'Calle Molino 3', 'Fresnillo de las Dueñas', 'elmolino@elmolino.es', 'Casa rural construida en un antiguo molino de piedra.', 0, 30),
(3, '3', 'Casa Rural Las Lavanderas', 'Calle Valladolid nº 4', 'Vadocondes', 'recepcion@laslavanderas.es', 'Casa rural acogedora, con un gran patio y balneario anexo.', 0, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `NOMBRE` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CORREOELECTRONICO` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CONTRASENA` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDOS` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `TELEFONO` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diasreserva`
--

CREATE TABLE `diasreserva` (
  `id` int(11) NOT NULL,
  `DIA` date NOT NULL,
  `PRECIO` float NOT NULL,
  `IDRESERVA` int(11) NOT NULL,
  `IDCASARURAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diasreservacanceladas`
--

CREATE TABLE `diasreservacanceladas` (
  `id` int(11) NOT NULL,
  `DIA` date NOT NULL,
  `PRECIO` float NOT NULL,
  `IDRESERVA` int(11) NOT NULL,
  `IDCASARURAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `RUTA` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `IDCASA` int(11) NOT NULL,
  `EXTENSION` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `RUTA`, `DESCRIPCION`, `IDCASA`, `EXTENSION`) VALUES
(1, 'casa11', 'Exterior de la puerta principal.\r\n', 1, 'jpg'),
(2, 'casa12', 'Interior de la casa rural', 1, 'jpg'),
(3, 'casa13', 'Patio de la casa rural', 1, 'jpg'),
(4, 'casa21', 'Exterior de la casa rural', 2, 'jpg'),
(5, 'casa22', 'Interior casa rural', 2, 'jpg'),
(6, 'casa23', 'Patio casa rural', 2, 'jpg'),
(7, 'casa31', 'Exterior casa rural', 3, 'jpg'),
(8, 'casa32', 'Interior casa rural', 3, 'jpg'),
(9, 'casa33', 'Patio casa rural', 3, 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `PRECIO` float NOT NULL,
  `DIA` date NOT NULL,
  `OFERTA` tinyint(4) NOT NULL,
  `MOTIVOOFERTA` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `IDCASA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `PRECIO`, `DIA`, `OFERTA`, `MOTIVOOFERTA`, `IDCASA`) VALUES
(1, 25, '2018-05-05', 0, NULL, 1),
(2, 15, '2018-05-24', 1, 'Puente de mayo', 1),
(3, 15, '2018-05-26', 1, 'Puente de mayo', 1),
(4, 15, '2018-05-25', 1, 'Puente de mayo', 1),
(5, 10, '2018-05-24', 0, NULL, 2),
(6, 5, '2018-05-26', 1, 'Fiestas del pueblo', 2),
(7, 5, '2018-03-09', 9, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservascliente`
--

CREATE TABLE `reservascliente` (
  `id` int(11) NOT NULL,
  `PRECIO` float NOT NULL,
  `CODIGOTRANSACCION` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ESTADOTRANSACCION` int(11) NOT NULL,
  `ESTADORESERVA` int(11) NOT NULL,
  `IDCLIENTE` int(11) NOT NULL,
  `IDCASARURAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservasclientecanceladas`
--

CREATE TABLE `reservasclientecanceladas` (
  `id` int(11) NOT NULL,
  `PRECIO` float NOT NULL,
  `CODIGOTRANSACCION` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ESTADOTRANSACCION` int(11) NOT NULL,
  `ESTADORESERVA` int(11) NOT NULL,
  `IDCLIENTE` int(11) NOT NULL,
  `IDCASARURAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casasrurales`
--
ALTER TABLE `casasrurales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idxcorreo` (`CORREOELECTRONICO`);

--
-- Indices de la tabla `diasreserva`
--
ALTER TABLE `diasreserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservascliente`
--
ALTER TABLE `reservascliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casasrurales`
--
ALTER TABLE `casasrurales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diasreserva`
--
ALTER TABLE `diasreserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reservascliente`
--
ALTER TABLE `reservascliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
