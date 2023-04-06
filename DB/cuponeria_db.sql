-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-04-2023 a las 22:12:06
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuponeria_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fechanacimiento_cliente` datetime NOT NULL,
  `identificacion_cliente` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_cliente` tinyint(1) NOT NULL,
  `fechacreacion_cliente` datetime NOT NULL,
  KEY `Cliente_fk0` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_usuario`, `nombre`, `fechanacimiento_cliente`, `identificacion_cliente`, `estado_cliente`, `fechacreacion_cliente`) VALUES
('CT001', 'USU02', 'JUAN JOSE ', '2023-04-06 22:09:33', '067846348', 1, '2023-04-06 22:09:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupon`
--

DROP TABLE IF EXISTS `cupon`;
CREATE TABLE IF NOT EXISTS `cupon` (
  `id_cupon` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo_cupon` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `precio_regular_cupon` float NOT NULL,
  `precio_oferta_cupon` float NOT NULL,
  `fecha_inicio_of_cupon` datetime NOT NULL,
  `fecha_final_of_cupon` datetime NOT NULL,
  `fecha_limite_cupon` datetime NOT NULL,
  `descripcion_cupon` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad_cupon` int(255) NOT NULL,
  `estado_cupon` tinyint(1) NOT NULL,
  `id_empresa` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cupon`),
  KEY `Cupon_fk0` (`id_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cupon`
--

INSERT INTO `cupon` (`id_cupon`, `titulo_cupon`, `precio_regular_cupon`, `precio_oferta_cupon`, `fecha_inicio_of_cupon`, `fecha_final_of_cupon`, `fecha_limite_cupon`, `descripcion_cupon`, `cantidad_cupon`, `estado_cupon`, `id_empresa`) VALUES
('CP001', 'CUPON MAXISOL', 5, 3, '2023-04-06 21:54:14', '2023-04-30 15:54:14', '2023-04-30 15:54:14', 'RECIPIENTE DE LEGIA MAXISOL EN DESCUENTO PARA LOS VIP', 100, 1, 'EMP02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `comision_empresa` float NOT NULL,
  `estado_empresa` tinyint(1) NOT NULL,
  `fechacreacion_empresa` datetime NOT NULL,
  `rubro_empresa` binary(50) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `comision_empresa`, `estado_empresa`, `fechacreacion_empresa`, `rubro_empresa`) VALUES
('EMP01', 0, 1, '2023-04-06 21:51:17', 0x0100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
('EMP02', 500, 1, '2023-04-06 21:53:11', 0x0200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
('EMP03', 0, 1, '2023-04-06 22:05:23', 0x0300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `rol_roles` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_roles` tinyint(1) NOT NULL,
  `id_rol` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_roles`, `estado_roles`, `id_rol`) VALUES
('administrador', 1, 'ROL01'),
('cliente', 1, 'ROL02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_usuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña_usuario` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_usuario` tinyint(1) NOT NULL,
  `fechacreacion_usuario` datetime NOT NULL,
  `id_empresa` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `Usuario_fk0` (`id_empresa`),
  KEY `Usuario_fk1` (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo_usuario`, `contraseña_usuario`, `estado_usuario`, `fechacreacion_usuario`, `id_empresa`, `id_rol`) VALUES
('USU01', 'admin@admin.com', 'admin', 1, '2023-04-06 21:48:26', 'EMP01', 'ROL01'),
('USU02', 'juan@cliente.com', 'cliente', 1, '2023-04-06 22:08:30', 'EMP03', 'ROL02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `id_cupon` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `id_cliente` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_compra_ventas` datetime NOT NULL,
  `estado_pago_ventas` tinyint(1) NOT NULL,
  `estado_canje_ventas` binary(10) NOT NULL,
  `fecha_canje_ventas` datetime NOT NULL,
  KEY `Ventas_fk0` (`id_cupon`),
  KEY `Ventas_fk1` (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
