-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 17:22:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_de_administracion_escolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomAdmin` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeAdmin` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` char(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telAdmin` char(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nomAdmin`, `apeAdmin`, `cedula`, `direccion`, `telAdmin`, `id_User`) VALUES
(1, 'Rodolkys', 'Soto', '145-9658321-3', 'Santiago', '829-698-6547', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumno` int(11) NOT NULL,
  `nomAlumno` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeAlumno` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edad` char(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telAlumno` char(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoAlumno` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nacFecha` date NOT NULL,
  `id_Tutores` int(11) NOT NULL,
  `id_Curso` int(11) NOT NULL,
  `id_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `nomAlumno`, `apeAlumno`, `edad`, `direccion`, `telAlumno`, `correoAlumno`, `nacFecha`, `id_Tutores`, `id_Curso`, `id_User`) VALUES
(3, 'Darlyn', 'Hilario', '21', 'Santiago', '829-360-2201', 'Hilariodrlyn22@gmail.com', '2001-10-22', 1, 18, 3),
(5, 'miguel', 'nehemias', '64', 'mao', '666666', 'elmias@gmail.com', '2000-05-16', 2, 12, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciaa`
--

CREATE TABLE `asistenciaa` (
  `idAsistenciaA` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `accion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `idCalificaciones` int(11) NOT NULL,
  `calificacionP` char(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `calificacionS` char(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `calificacionT` char(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `calificacionC` char(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_Alumno` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`idCalificaciones`, `calificacionP`, `calificacionS`, `calificacionT`, `calificacionC`, `id_Alumno`, `idMateria`) VALUES
(1, '90', '91', '92', '89', 3, 2),
(2, '89', '91', '90', '88', 3, 3),
(3, '80', '89', '88', '87', 3, 4),
(4, '70', '69', '68', '70', 3, 4),
(5, '70', '68', '68', '66', 3, 5),
(6, '90', '91', '89', '90', 5, 6),
(7, '88', '89', '87', '90', 5, 7),
(8, '90', '97', '91', '92', 5, 8),
(9, '99', '98', '99', '94', 5, 9),
(10, '90', '91', '91', '90', 5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idCurso` int(11) NOT NULL,
  `nomCurso` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCurso`, `nomCurso`) VALUES
(3, 'Primero A'),
(4, 'Primero B'),
(5, 'Primero C'),
(6, 'Segundo A'),
(7, 'Segundo B'),
(8, 'Segundo C'),
(9, 'Tercero A'),
(10, 'Tercero B'),
(11, 'Tercero C'),
(12, 'Cuarto A'),
(13, 'Cuarto B'),
(14, 'Cuarto C'),
(15, 'Quinto A'),
(16, 'Quinto B'),
(17, 'Quinto C'),
(18, 'Sexto A'),
(19, 'Sexto B'),
(20, 'Sexto C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `idMateria` int(11) NOT NULL,
  `nomMateria` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMateria`, `nomMateria`) VALUES
(2, 'Lengua Espanola'),
(3, 'Ingles'),
(4, 'Frances'),
(5, 'Matematica'),
(6, 'Ciancias Sociales'),
(7, 'Ciencias de la Naturaleza'),
(8, 'FHIR'),
(9, 'Educacion Artistica'),
(10, 'Educacion Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idProfesor` int(11) NOT NULL,
  `nomProfesor` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeProfesor` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` char(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telProfesor` char(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoProfesor` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_Curso` int(11) NOT NULL,
  `id_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `nomProfesor`, `apeProfesor`, `cedula`, `direccion`, `telProfesor`, `correoProfesor`, `estado`, `id_Curso`, `id_User`) VALUES
(1, 'Robison', 'Sosa', '142-6589321-4', 'Santiago', '829-789-5654', 'Robin@gmail.com', 'Casado', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nomRol`) VALUES
(1, 'Administrador'),
(2, 'Profesor'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `idTutor` int(11) NOT NULL,
  `nomTutor` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apeTutor` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` char(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telTutor` char(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`idTutor`, `nomTutor`, `apeTutor`, `cedula`, `direccion`, `telTutor`) VALUES
(1, 'Cruz', 'Hilario', '478-9654123-7', 'Santiago', '829-498-7766'),
(2, 'Sarah', 'Rosa', '469-8523697-9', 'Moca', '809-658-9856');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `usuario` varchar(22) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(22) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUser`, `usuario`, `clave`, `id_Rol`) VALUES
(1, 'rodo', '123', 1),
(2, 'edison', '123', 2),
(3, 'darlin', '123', 3),
(4, 'miguel', '123', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD KEY `idUser` (`id_User`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `idTutores` (`id_Tutores`),
  ADD KEY `idCurso` (`id_Curso`),
  ADD KEY `idUser` (`id_User`);

--
-- Indices de la tabla `asistenciaa`
--
ALTER TABLE `asistenciaa`
  ADD PRIMARY KEY (`idAsistenciaA`),
  ADD KEY `idAlumno` (`idAlumno`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`idCalificaciones`),
  ADD KEY `idAlumno` (`id_Alumno`,`idMateria`),
  ADD KEY `idMateria` (`idMateria`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idProfesor`),
  ADD KEY `idCurso` (`id_Curso`),
  ADD KEY `idUser` (`id_User`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`idTutor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRol` (`id_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asistenciaa`
--
ALTER TABLE `asistenciaa`
  MODIFY `idAsistenciaA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `idCalificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `idTutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_User`) REFERENCES `usuario` (`idUser`);

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_Tutores`) REFERENCES `tutores` (`idTutor`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`id_Curso`) REFERENCES `cursos` (`idCurso`),
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`id_User`) REFERENCES `usuario` (`idUser`);

--
-- Filtros para la tabla `asistenciaa`
--
ALTER TABLE `asistenciaa`
  ADD CONSTRAINT `asistenciaa_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumnos` (`idAlumno`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`idMateria`) REFERENCES `materias` (`idMateria`),
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`id_Alumno`) REFERENCES `alumnos` (`idAlumno`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`id_Curso`) REFERENCES `cursos` (`idCurso`),
  ADD CONSTRAINT `profesor_ibfk_2` FOREIGN KEY (`id_User`) REFERENCES `usuario` (`idUser`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_Rol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
