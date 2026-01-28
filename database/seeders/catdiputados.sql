SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

DROP TABLE IF EXISTS `catdiputados_ant`;
CREATE TABLE IF NOT EXISTS `catdiputados_ant` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `clave` varchar(15) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COMMENT='Catálogo de Diputados';

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


INSERT INTO catdiputados_ant (nombre) VALUES('Adrián Sigfrido Ávila  Estrada');
INSERT INTO catdiputados_ant (nombre) VALUES('Alejandro Porras Marín');
INSERT INTO catdiputados_ant (nombre) VALUES('Ana Rosa Valdés  Salazar');
INSERT INTO catdiputados_ant (nombre) VALUES('Antonio Ballesteros Grayeb');
INSERT INTO catdiputados_ant (nombre) VALUES('Astrid Sánchez Moguel');
INSERT INTO catdiputados_ant (nombre) VALUES('Bertha Rosalía Ahued Malpica');
INSERT INTO catdiputados_ant (nombre) VALUES('Carlos Marcelo  Ruiz Sánchez ');
INSERT INTO catdiputados_ant (nombre) VALUES('Citlali Medellín Careaga');
INSERT INTO catdiputados_ant (nombre) VALUES('Daniela  Flores Barnils');
INSERT INTO catdiputados_ant (nombre) VALUES('Diego Castañeda Aburto');
INSERT INTO catdiputados_ant (nombre) VALUES('Dorheny García  Cayetano');
INSERT INTO catdiputados_ant (nombre) VALUES('Dulce María Hernández Tepole');
INSERT INTO catdiputados_ant (nombre) VALUES('Elena Córdova  Molina');
INSERT INTO catdiputados_ant (nombre) VALUES('Elizabeth  Morales García');
INSERT INTO catdiputados_ant (nombre) VALUES('Enrique Cambranis  Torres');
INSERT INTO catdiputados_ant (nombre) VALUES('Erika del Carmen Rosario  Morales');
INSERT INTO catdiputados_ant (nombre) VALUES('Esteban Bautista  Hernández');
INSERT INTO catdiputados_ant (nombre) VALUES('Estefanía Bastida  Cuevas');
INSERT INTO catdiputados_ant (nombre) VALUES('Facundo  Fernández  de la Cruz');
INSERT INTO catdiputados_ant (nombre) VALUES('Felipe Pineda  Barradas');
INSERT INTO catdiputados_ant (nombre) VALUES('Fernando Yunes  Márquez');
INSERT INTO catdiputados_ant (nombre) VALUES('Guadalupe Vázquez González');
INSERT INTO catdiputados_ant (nombre) VALUES('Héctor Yunes  Landa');
INSERT INTO catdiputados_ant (nombre) VALUES('Imelda Garrido Alvarado');
INSERT INTO catdiputados_ant (nombre) VALUES('Indira de Jesús Rosales San Román');
INSERT INTO catdiputados_ant (nombre) VALUES('Ingrid Jeny Calderón  Domínguez');
INSERT INTO catdiputados_ant (nombre) VALUES('Ivonne Selene Durán  López');
INSERT INTO catdiputados_ant (nombre) VALUES('Janix Liliana Castro  Muñoz');
INSERT INTO catdiputados_ant (nombre) VALUES('José Reveriano  Marín Hernández');
INSERT INTO catdiputados_ant (nombre) VALUES('José Ricardo Ruiz Carmona');
INSERT INTO catdiputados_ant (nombre) VALUES('Juan Tress Zilli');
INSERT INTO catdiputados_ant (nombre) VALUES('Laura Nayeli Mejía  Larios');
INSERT INTO catdiputados_ant (nombre) VALUES('Liud Herrera  Félix');
INSERT INTO catdiputados_ant (nombre) VALUES('Lucía Begoña Canales Barturen ');
INSERT INTO catdiputados_ant (nombre) VALUES('Luis Vicente  Aguilar  Castillo');
INSERT INTO catdiputados_ant (nombre) VALUES('Luz Alicia  Delfín  Rodríguez');
INSERT INTO catdiputados_ant (nombre) VALUES('Miguel Guillermo Pintos  Guillén ');
INSERT INTO catdiputados_ant (nombre) VALUES('Miriam  García  Guzmán ');
INSERT INTO catdiputados_ant (nombre) VALUES('Montserrat Ortega Ruiz');
INSERT INTO catdiputados_ant (nombre) VALUES('Nallely  Mendoza  Camarillo');
INSERT INTO catdiputados_ant (nombre) VALUES('Naomi Edith Gómez Santos');
INSERT INTO catdiputados_ant (nombre) VALUES('Omar Edmundo Blanco Martínez');
INSERT INTO catdiputados_ant (nombre) VALUES('Paul Martínez  Marie');
INSERT INTO catdiputados_ant (nombre) VALUES('Ramón Díaz Ávila');
INSERT INTO catdiputados_ant (nombre) VALUES('Roxana  Barragán  Hernández');
INSERT INTO catdiputados_ant (nombre) VALUES('Tania María Cruz Mejía');
INSERT INTO catdiputados_ant (nombre) VALUES('Tanya Carola Viveros Cházaro');
INSERT INTO catdiputados_ant (nombre) VALUES('Urbano Bautista  Martínez');
INSERT INTO catdiputados_ant (nombre) VALUES('Valeria Méndez Moctezuma');
INSERT INTO catdiputados_ant (nombre) VALUES('Victoria  Gutiérrez  Pérez');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
