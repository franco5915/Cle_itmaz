-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 28-11-2019 a las 21:33:25
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cle_itmaz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `noControl` int(11) NOT NULL,
  `alumnoNombre` varchar(45) DEFAULT NULL,
  `alumnoApellido` varchar(45) DEFAULT NULL,
  `alumnoCorreo` varchar(45) DEFAULT NULL,
  `alumnoContraseña` varchar(45) DEFAULT NULL,
  `idExAl` int(11) DEFAULT NULL,
  `Carrera` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`noControl`),
  KEY `fk_Alumno_ExamenAlumno` (`idExAl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`noControl`, `alumnoNombre`, `alumnoApellido`, `alumnoCorreo`, `alumnoContraseña`, `idExAl`, `Carrera`) VALUES
(14600555, 'Fierrín', 'Fierro', 'Fierrito@hotmail.com', 'b7d35509ab19d0cd2256a219de0fe0ff', NULL, 'ISC'),
(16100230, 'luis', 'brito', 'luis@gmail.com', '14938d813422bc0bda73db705649ab7f', NULL, 'ISC'),
(16400954, 'Jesus Francisco', 'Melgarejo Saldaña', 'franco23151123@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'ISC'),
(16400955, 'jesus', 'melga', 'franco23151123@gmail.com', 'f5eb3cb25b2faad267719174fb5f8f06', NULL, 'ISC'),
(154005050, 'Chuy', 'Jirafalez', 'chuy@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'IPE'),
(161000437, 'enrique', 'espinoza', 'elpan@itmaz.com', '202cb962ac59075b964b07152d234b70', NULL, 'ISC'),
(164000000, 'aasdasdasd', 'asdasd', 'fadasd@mail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 'ISC'),
(164009999, 'Manuel', 'Jimenez', 'manuel@manuel.com', 'c33367701511b4f6020ec61ded352059', NULL, 'ISC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `idexamen` int(11) NOT NULL,
  `ExamenArchivo` blob,
  `idteacher` int(11) DEFAULT NULL,
  PRIMARY KEY (`idexamen`),
  KEY `fk_examenTeacher` (`idteacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenalumno`
--

DROP TABLE IF EXISTS `examenalumno`;
CREATE TABLE IF NOT EXISTS `examenalumno` (
  `idExAl` int(11) NOT NULL,
  `idExamen` int(11) DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `noControl` int(11) DEFAULT NULL,
  PRIMARY KEY (`idExAl`),
  KEY `fk_idExamen` (`idExamen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_preguntas`
--

DROP TABLE IF EXISTS `examen_preguntas`;
CREATE TABLE IF NOT EXISTS `examen_preguntas` (
  `idpregunta` int(11) NOT NULL,
  `pregunta` varchar(100) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  `idexamen` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpregunta`),
  KEY `fk_examen_preguntas` (`idexamen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

DROP TABLE IF EXISTS `inscripcion`;
CREATE TABLE IF NOT EXISTS `inscripcion` (
  `idInscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `InscripcionArchivo` blob,
  `idteacher` int(11) DEFAULT NULL,
  PRIMARY KEY (`idInscripcion`),
  KEY `fk_teacherInscripciones` (`idteacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `idNoticias` int(11) NOT NULL,
  `NoticiasArchivo` blob,
  `idteacher` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNoticias`),
  KEY `fk_TeacherNoticias` (`idteacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

DROP TABLE IF EXISTS `pago`;
CREATE TABLE IF NOT EXISTS `pago` (
  `idPago` int(11) NOT NULL AUTO_INCREMENT,
  `noControl` int(11) DEFAULT NULL,
  `ruta` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`idPago`),
  KEY `fk_alumnoPago` (`noControl`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idPago`, `noControl`, `ruta`, `tipo`) VALUES
(20, 164009999, 'TBD2018_U5.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `idteacher` int(11) NOT NULL,
  `nicknameTeacher` varchar(45) DEFAULT NULL,
  `contraseñaTeacher` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idteacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `teacher`
--

INSERT INTO `teacher` (`idteacher`, `nicknameTeacher`, `contraseñaTeacher`) VALUES
(1, 'TeacherVero2019', 'CleSystem2019');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_Alumno_ExamenAlumno` FOREIGN KEY (`idExAl`) REFERENCES `examenalumno` (`idExAl`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `fk_examenTeacher` FOREIGN KEY (`idteacher`) REFERENCES `teacher` (`idteacher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `examenalumno`
--
ALTER TABLE `examenalumno`
  ADD CONSTRAINT `fk_idExamen` FOREIGN KEY (`idExamen`) REFERENCES `examen` (`idexamen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `examen_preguntas`
--
ALTER TABLE `examen_preguntas`
  ADD CONSTRAINT `fk_examen_preguntas` FOREIGN KEY (`idexamen`) REFERENCES `examen` (`idexamen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_teacherInscripciones` FOREIGN KEY (`idteacher`) REFERENCES `teacher` (`idteacher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_TeacherNoticias` FOREIGN KEY (`idteacher`) REFERENCES `teacher` (`idteacher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `fk_alumnoPago` FOREIGN KEY (`noControl`) REFERENCES `alumnos` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
