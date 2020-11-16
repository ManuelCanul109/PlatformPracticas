-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2020 a las 06:02:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataforma_practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'Automotriz'),
(2, 'Biomédica'),
(3, 'Desarrollo de Tecnología y Software'),
(4, 'Energía y Petróleo'),
(5, 'Industrial Logística'),
(6, 'Mecatrónica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `nombre_documento` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_documento` int(11) DEFAULT NULL,
  `fecha_documento` date NOT NULL,
  `solicitud_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestres`
--

CREATE TABLE `semestres` (
  `id_semestre` int(11) NOT NULL,
  `nombre_semestre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `semestres`
--

INSERT INTO `semestres` (`id_semestre`, `nombre_semestre`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id_solicitud` int(11) NOT NULL,
  `nombres_alumno_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos_alumno_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `matricula_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carrera_id` int(11) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `nombre_empresa_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_dirigido_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `puesto_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horario_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `conocimiento_solicitud` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_proyecto_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion_solicitud` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_jefe_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo_jefe_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular_alumno_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_alumno_solicitud` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio_soliciud` date DEFAULT NULL,
  `fecha_final_solicitud` date DEFAULT NULL,
  `fecha_alta_solicitud` date DEFAULT NULL,
  `estado_solicitud` int(11) DEFAULT NULL,
  `status_solicitud` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo_usuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password_usuario` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `solicitud_id` (`solicitud_id`);

--
-- Indices de la tabla `semestres`
--
ALTER TABLE `semestres`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `fk_solicitudes_carreras_idx` (`carrera_id`),
  ADD KEY `fk_solicitudes_semestres1_idx` (`semestre_id`),
  ADD KEY `fk_solicitudes_usuarios1_idx` (`id_solicitud`),
  ADD KEY `fk_solicitudes_usuarios1` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semestres`
--
ALTER TABLE `semestres`
  MODIFY `id_semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`solicitud_id`) REFERENCES `solicitudes` (`id_solicitud`);

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `fk_solicitudes_carreras` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitudes_semestres1` FOREIGN KEY (`semestre_id`) REFERENCES `semestres` (`id_semestre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitudes_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
