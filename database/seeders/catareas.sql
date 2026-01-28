-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-01-2026 a las 19:31:39
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admareas`
--

DROP TABLE IF EXISTS `catareas_ant`;
CREATE TABLE IF NOT EXISTS `catareas_ant` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `clave` varchar(15) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COMMENT='Catálogo de las Areas del Congreso';

--
-- Volcado de datos para la tabla `catareas_ant`
--

INSERT INTO `catareas_ant` (`id`, `nombre`) VALUES
(1, 'Comisiones'),
(2, 'Contraloría Interna del Congreso'),
(3, 'Coordinación de archivo, biblioteca y hemeroteca'),
(4, 'Coordinación de Comunicación Social'),
(5, 'Coordinación de Informática'),
(6, 'Coordinación de Investigaciones Legislativas'),
(7, 'Departamento de Asistencia a Comisiones'),
(8, 'Departamento de Asistencia a Sesiones'),
(9, 'Departamento de Contabilidad'),
(10, 'Departamento de Diario de Debates'),
(11, 'Departamento de Finanzas'),
(12, 'Departamento de Programación y Presupuesto'),
(13, 'Departamento de Recursos Materiales'),
(14, 'Departamento de Registro Documental Legislativo'),
(15, 'Deportamento de Control de Personal '),
(16, 'Dirección Centro de Estudios para la Igualdad de Género y los Derechos Humanos'),
(17, 'Dirección de Asistencia Técnica Legislativa'),
(18, 'Dirección de Auditoría y Revisión Financiera'),
(19, 'Dirección de Normatividad, Control y Seguimiento'),
(20, 'Dirección de Recursos Humanos'),
(21, 'Dirección de Recursos Materiales y Servicios Generales'),
(22, 'Dirección de Registro Legislativo y Publicaciones Oficiales'),
(23, 'Dirección de Servicios Jurídicos'),
(24, 'Dirección de Tesorería'),
(25, 'Grupo Legislativo de Morena'),
(26, 'Junta de Trabajos Legislativos'),
(27, 'Oficina de Seguridad'),
(28, 'Secretaría de Fiscalización'),
(29, 'Secretaría de Servicios Administrativos y Financieros'),
(30, 'Secretaría de Servicios Legislativos'),
(31, 'Secretaría General del Congreso'),
(32, 'Unidad de Transparencia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
