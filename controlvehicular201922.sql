-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 17:10:54
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlvehicular201922`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `IdConductor` int(8) NOT NULL,
  `Nombre` varchar(32) NOT NULL,
  `Direccion` varchar(90) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Firma` varchar(45) DEFAULT NULL,
  `TipoDeSangre` varchar(4) NOT NULL,
  `Foto` varchar(45) NOT NULL,
  `FechaDeNac` date NOT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `CURP` varchar(18) NOT NULL,
  `Donador` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`IdConductor`, `Nombre`, `Direccion`, `Edad`, `Genero`, `Firma`, `TipoDeSangre`, `Foto`, `FechaDeNac`, `RFC`, `CURP`, `Donador`) VALUES
(1, 'Francisco', 'Queretaro', 42, 'Masculino', 'zsdasd4', 'a+', 'khgfhkgvk', '2019-11-03', '3', '3', 'No'),
(2, 'Jorge', 'Queretaro', 12, 'Masculino', '1qwef4', 'a+', 'gjuf', '2019-12-03', '1', '1', 'No'),
(3, 'pepe', 'Queretaro', 3, 'Femenino', 'zsdasd', 'a+', 'gjuf', '2019-12-12', '5', '2', 'Si'),
(7, 'juan', '3', 3, 'Masculino', 'sdfkjvbsdk', 'a+', 'khgfhkgvk', '2019-12-04', '284', '123', 'No'),
(15, 'Francisco', 'jhb', 0, 'Femenino', 'k', 'bkn', 'b.', '2019-12-11', ', ', ',mn ', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE `licencias` (
  `IdLicencia` int(8) NOT NULL,
  `Restriccion` varchar(60) NOT NULL,
  `FechaDeExp` date NOT NULL,
  `Antiguedad` int(3) NOT NULL,
  `Vigencia` date NOT NULL,
  `Conductor` int(8) DEFAULT NULL,
  `LugarDeExp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `licencias`
--

INSERT INTO `licencias` (`IdLicencia`, `Restriccion`, `FechaDeExp`, `Antiguedad`, `Vigencia`, `Conductor`, `LugarDeExp`) VALUES
(1, 'No', '2019-11-15', 1, '2019-11-30', 1, 'queretaro'),
(4, 'No', '2019-12-04', 1, '2019-12-06', 2, 'queretaro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `IdMulta` int(10) NOT NULL,
  `Motivo` varchar(250) NOT NULL,
  `Agente` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Lugar` varchar(100) NOT NULL,
  `Descuento` varchar(2) DEFAULT NULL,
  `Vehiculo` int(8) DEFAULT NULL,
  `Licencia` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `multas`
--

INSERT INTO `multas` (`IdMulta`, `Motivo`, `Agente`, `Fecha`, `Lugar`, `Descuento`, `Vehiculo`, `Licencia`) VALUES
(2, 'jkagdh', 'jose', '2019-12-12', 'corregidora', 'No', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `IdPropietario` int(8) NOT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `CURP` varchar(18) DEFAULT NULL,
  `Nombre` varchar(18) NOT NULL,
  `Direccion` varchar(90) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `FechaDeNac` date NOT NULL,
  `Edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`IdPropietario`, `RFC`, `CURP`, `Nombre`, `Direccion`, `Genero`, `FechaDeNac`, `Edad`) VALUES
(1, '1', '1', 'jose', '1', 'Femenino', '2018-03-07', 3),
(2, '3', '2', 'pepe', 'Queretaro', 'Masculino', '2019-10-11', 42),
(3, '5', '234', 'juan', 'peña', 'Masculino', '2019-10-18', 16),
(4, '123465', '321654', 'Luis', 'Corregidora', 'Masculino', '2019-10-29', 23),
(5, '1597186', '154738', 'Paola', 'Candiles', 'Femenino', '2019-10-16', 46),
(6, '1654651', '6549843', 'Beto', 'Zapata', 'Masculino', '2000-02-13', 19),
(7, '9849', '51684', 'Alex', 'Jardines', 'Masculino', '1999-05-09', 20),
(8, '954621', '316513', 'Fernanda', 'Tejeda', 'Femenino', '1998-05-06', 21),
(9, '254323', '164684', 'Emilio', 'Centro', 'Masculino', '1980-10-24', 39),
(10, '232165', '135438', 'Maria', 'El Pueblito', 'Femenino', '1989-06-20', 30),
(11, '9115646', '265185', 'vanesa', 'juriquilla', 'Femenino', '1990-10-15', 29),
(12, '13841', '73168', 'Ian', 'Refugio', 'Masculino', '1355-05-01', 235),
(13, '06654', '608684', 'Luisa', 'Simon', 'Femenino', '5453-03-04', 354),
(14, '60064', '06150', 'Paulina', 'Lomas', 'Femenino', '2001-05-01', 18),
(15, '32516', '06168', 'Fernando', 'El Pocito', 'Masculino', '2003-05-10', 16),
(16, '1654', '3652', 'Francisco', 'Galindas', 'Masculino', '2000-12-16', 19),
(17, '135', '6165', 'Sandra', 'La Joya', 'Femenino', '1994-11-03', 25),
(18, '3469', '3169', 'Ana', 'qro', 'Femenino', '1996-08-13', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenencias`
--

CREATE TABLE `tenencias` (
  `IdTenencia` int(8) NOT NULL,
  `Monto` decimal(7,2) NOT NULL,
  `Anio` varchar(4) NOT NULL,
  `Descuento` varchar(2) DEFAULT NULL,
  `Vehiculo` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Usuario` varchar(50) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Estado` tinyint(1) DEFAULT NULL,
  `Intento` tinyint(1) DEFAULT NULL,
  `Bloqueado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usuario`, `Contrasenia`, `Tipo`, `Estado`, `Intento`, `Bloqueado`) VALUES
('Cesar', '111111', 'Usuario', 1, 0, 0),
('Juan', '123456', 'Admin', 1, 4, 1),
('Luis', '456789', 'Admin', 1, 0, 0),
('Sara', '222222', 'Usuario', 1, 0, 1),
('Saul', '654321', 'Admin', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `IdVehiculo` int(8) NOT NULL,
  `NumSerie` char(19) DEFAULT NULL,
  `Placa` varchar(8) DEFAULT NULL,
  `Motor` char(19) DEFAULT NULL,
  `Factura` decimal(7,2) DEFAULT NULL,
  `Version` varchar(20) NOT NULL,
  `Anio` year(4) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Origen` varchar(20) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Puerta` int(8) DEFAULT NULL,
  `Transmision` varchar(45) DEFAULT NULL,
  `Cilindraje` varchar(45) DEFAULT NULL,
  `TipoDeCombustible` varchar(16) DEFAULT NULL,
  `Propietario` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`IdVehiculo`, `NumSerie`, `Placa`, `Motor`, `Factura`, `Version`, `Anio`, `Color`, `Modelo`, `Origen`, `Tipo`, `Puerta`, `Transmision`, `Cilindraje`, `TipoDeCombustible`, `Propietario`) VALUES
(2, '34', 'gf', 'khgv', '17.00', 'hbj', 0000, 'bjkb', 'kb', 'kb', 'kjb', 4, 'kbkj.', 'bk.', 'jskjdkajsdlkas', 1),
(3, '321', 'khbj', 'kv', '54684.00', '51', 0000, 'hgv', 'hvggv', 'jhvbkjhv', 'jhvkjhv', 4, 'hjbkj', 'jhj', 'jhb', 15),
(4, '9841', 'asfasf', 'rtdhgdg', '0.00', 'kjhb', 0000, 'hbk', 'jhb', 'jhbkuy', 'liuhl', 0, 'kghvv', 'hgv', 'kuy', 16),
(5, '21', '68', '546', '51.00', '51', 0000, '21', '32', '32', '32', 3, 'kghvv165165', '6516', '16', 14),
(13, '12', '12', '12', '12.00', '12', 0000, '12', '12', '12', '12', 1, '12', '12', '12', 16),
(133, '123', '123', '123', '1233.00', '12', 0000, '12', '12', '12', '12', 1, '12', '12', '12', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificaciones`
--

CREATE TABLE `verificaciones` (
  `Folio` int(10) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Vigencia` date NOT NULL,
  `Dictamen` varchar(100) DEFAULT NULL,
  `Vehiculo` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`IdConductor`),
  ADD UNIQUE KEY `Firma` (`Firma`),
  ADD UNIQUE KEY `RFC` (`RFC`);

--
-- Indices de la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD PRIMARY KEY (`IdLicencia`),
  ADD UNIQUE KEY `Conductor` (`Conductor`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`IdMulta`),
  ADD KEY `Vehiculo` (`Vehiculo`),
  ADD KEY `Licencia` (`Licencia`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`IdPropietario`),
  ADD UNIQUE KEY `RFC` (`RFC`),
  ADD UNIQUE KEY `CURP` (`CURP`);

--
-- Indices de la tabla `tenencias`
--
ALTER TABLE `tenencias`
  ADD PRIMARY KEY (`IdTenencia`),
  ADD KEY `Vehiculo` (`Vehiculo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usuario`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`IdVehiculo`),
  ADD UNIQUE KEY `NumSerie` (`NumSerie`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD UNIQUE KEY `Motor` (`Motor`),
  ADD UNIQUE KEY `Factura` (`Factura`),
  ADD KEY `Propietario` (`Propietario`);

--
-- Indices de la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Vehiculo` (`Vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `IdConductor` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `licencias`
--
ALTER TABLE `licencias`
  MODIFY `IdLicencia` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `multas`
--
ALTER TABLE `multas`
  MODIFY `IdMulta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `IdPropietario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tenencias`
--
ALTER TABLE `tenencias`
  MODIFY `IdTenencia` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `IdVehiculo` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5562;

--
-- AUTO_INCREMENT de la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  MODIFY `Folio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD CONSTRAINT `licencias_ibfk_1` FOREIGN KEY (`Conductor`) REFERENCES `conductores` (`IdConductor`);

--
-- Filtros para la tabla `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`Vehiculo`) REFERENCES `vehiculos` (`IdVehiculo`),
  ADD CONSTRAINT `multas_ibfk_2` FOREIGN KEY (`Licencia`) REFERENCES `licencias` (`IdLicencia`);

--
-- Filtros para la tabla `tenencias`
--
ALTER TABLE `tenencias`
  ADD CONSTRAINT `tenencias_ibfk_1` FOREIGN KEY (`Vehiculo`) REFERENCES `vehiculos` (`IdVehiculo`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`Propietario`) REFERENCES `propietarios` (`IdPropietario`);

--
-- Filtros para la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD CONSTRAINT `verificaciones_ibfk_1` FOREIGN KEY (`Vehiculo`) REFERENCES `vehiculos` (`IdVehiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
