-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2019 a las 05:38:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `odontologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `Nombre_C` varchar(50) NOT NULL,
  `Apellido_C` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `ID_Personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `Nombre_C`, `Apellido_C`, `Direccion`, `Telefono`, `ID_Personal`) VALUES
(1, 'Alexander Daniel ', 'Bonilla Menjivar', 'San Julian', '7121-0923', 1),
(2, 'Mario Jose', 'Lopez Chavez', 'Santa Tecla', '7122-0932', 5),
(3, 'Gloria Maricela', 'Castaneda Carranza', 'Soyapango', '7429-0932', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ID_P` int(11) NOT NULL,
  `Nombre_P` varchar(50) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ID_P`, `Nombre_P`, `Cargo`, `Telefono`, `Departamento`) VALUES
(1, 'Juan Carlos', 'Supervisor', '7834-3432', 'San Salvador'),
(2, 'Maria Elizabeth', 'Vendedor', '7834-3432', 'Sonsonate'),
(3, 'Alirio Diaz', 'Vendedor', '7154-5654', 'Sonsonate'),
(4, 'Pablo Escobar', 'Supervisor', '7859-0943', 'Ahuachapan'),
(5, 'Damaris Lizbeth', 'Vendedor', '7340-0034', 'La libertad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Personal` (`ID_Personal`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ID_P`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`ID_Personal`) REFERENCES `personal` (`ID_P`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
