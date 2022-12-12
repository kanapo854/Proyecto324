--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `ProcesoSiguiente` varchar(3) DEFAULT NULL,
  `Tipo` varchar(1) DEFAULT NULL,
  `Pantalla` varchar(20) DEFAULT NULL,
  `Rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`Flujo`, `Proceso`, `ProcesoSiguiente`, `Tipo`, `Pantalla`, `Rol`) VALUES
('F1', 'P1', 'P2', 'I', 'InformacionRequisitos', 'estudiante'),
('F1', 'P2', 'P3', 'I', 'Formulario', 'estudiante'),
('F1', 'P3', '-', 'P', 'Enviado', 'estudiante'),
('F1', 'P4', '-', 'C', 'Verifica', 'Kardex'),
('F1', 'P5', '-', 'F', 'DatosGuardados', 'Kardex'),
('F1', 'P6', '-', 'F', 'DatosRechazados', 'Kardex'),
('F1', 'P7', 'P8', 'P', 'InscripcionMaterias', 'estudiante'),
('F1', 'P8', '-', 'F', 'Confirmar', 'estudiante'),

('F2', 'P1', '-', 'I', 'SolicitaHabilitacion', 'estudiante'),
('F2', 'P2', '-', 'C', 'Habilita', 'Kardex'),
('F2', 'P3', '-', 'F', 'AceptaHabilitación', 'Kardex'),
('F2', 'P4', '-', 'F', 'RechazaHabilitacion', 'Kardex'),
('F2', 'P5', 'P6', 'P', 'Materias', 'estudiante'),
('F2', 'P6', '-', 'F', 'ConfirmarMaterias', 'estudiante'),

('F3', 'P1', 'P2', 'I', 'SeleccionarMateriaEstudiante', 'docente'),
('F3', 'P2', 'P3', 'P', 'PonerNota', 'docente'),
('F3', 'P3', '-', 'F', 'EnviarNota', 'docente'),
('F3', 'P4', '-', 'F', 'MostrarNotas', 'estudiante'),

('F4', 'P1', 'P2', 'I', 'VerBecas', 'estudiante'),
('F4', 'P2', 'P3', 'P', 'EntregaDocumentos', 'estudiante'),
('F4', 'P3', '-', 'F', 'EnviarDoc', 'estudiante'),
('F4', 'P4', '-', 'C', 'VerificaBeca', 'DTS'),
('F4', 'P5', '-', 'F', 'Rechazo', 'DTS'),
('F4', 'P6', '-', 'F', 'Aceptado', 'DTS');

--
-- Estructura de tabla para la tabla `flujoprocesocondicionante`
--

CREATE TABLE `flujoprocesocondicionante` (
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `ProcesoSI` varchar(3) DEFAULT NULL,
  `ProcesoNO` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoprocesocondicionante`
--

INSERT INTO `flujoprocesocondicionante` (`Flujo`, `Proceso`, `ProcesoSI`, `ProcesoNO`) VALUES
('F1', 'P4', 'P5', 'P6'),
('F2', 'P2', 'P3', 'P4'),
('F4', 'P4', 'P6', 'P5');

--
-- Estructura de tabla para la tabla `flujoprocesoseguimiento`
--

CREATE TABLE `flujoprocesoseguimiento` (
  `id` int(11) NOT NULL,
  `Flujo` varchar(3) DEFAULT NULL,
  `Proceso` varchar(3) DEFAULT NULL,
  `Usuario` varchar(10) DEFAULT NULL,
  `contra` varchar(50) NOT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL,
  `estado` varchar(35) DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flujoprocesoseguimiento`
--

INSERT INTO `flujoprocesoseguimiento` (`id`, `Flujo`, `Proceso`, `Usuario`, `contra`, `FechaInicio`, `FechaFin`, `estado`) VALUES
(1, 'F1', 'P1', 'maribel', '12345678', '2022-12-04', NULL, 'InformacionRequisitos'),
(2, 'F2', 'P1', 'maribel', '12345678', '2022-12-05', NULL, 'SolicitaHabilitacion'),
(3, 'F3', 'P4', 'maribel', '12345678', '2022-12-04', NULL, 'Ver Notas'),
(4, 'F4', 'P1', 'maribel', '12345678', '2022-11-01', NULL, 'VerBecas'),
(5, 'F1', 'P1', 'sayli', '12345678', '0000-00-00', NULL, 'InformacionRequisitos'),
(6, 'F2', 'P1', 'sayli', '12345678', '2022-12-04', NULL, 'SolicitaHabilitacion'),
(7, 'F3', 'P4', 'sayli', '12345678', '2022-12-05', NULL, 'Ver Notas'),
(8, 'F4', 'P1', 'sayli', '12345678', '2022-12-04', NULL, 'VerBecas'),
(9, 'F1', 'P1', 'marco', '12345678', '2022-11-01', NULL, 'InformacionRequisitos'),
(10,'F2', 'P1', 'marco', '12345678', '0000-00-00', NULL, 'SolicitaHabilitacion'),
(11,'F3', 'P4', 'marco', '12345678', '2022-12-04', NULL, 'Ver Notas'),
(12,'F4', 'P1', 'marco', '12345678', '2022-12-04', NULL, 'VerBecas'),

(13,'F1', 'P4', 'kardista1', '12345678', '2022-12-04', NULL, 'Kardex'),
(14,'F2', 'P2', 'kardista2', '12345678', '2022-12-04', NULL, 'Kardex'),
(15,'F3', 'P1', 'docente', '12345678', '2022-12-04', NULL, 'docente'),
(16,'F4', 'P5', 'dts', '12345678', '2022-12-04', NULL, 'DTS');



CREATE TABLE IF NOT EXISTS `materia` (
`idmateria` int(11) NOT NULL,
  `idsemestre` int(11) DEFAULT NULL,
  `sigla` varchar(7) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre_materia` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `idsemestre`, `sigla`, `nombre_materia`) VALUES
(1, 1, 'INF-111', 'Introduccion a la Programacion'),
(2, 1, 'LAB-111', 'Laboratorio de INF-111'),
(3, 1, 'INF-112', 'Organizacion de Computadoras'),
(4, 1, 'INF-113', 'Laboratorio de Computacion'),
(5, 1, 'MAT-114', 'Matematica Discreta I'),
(6, 1, 'MAT-115', 'Analisis Matematico I'),
(7, 1, 'LIN-116', 'Gramatica Espanola'),
(8, 2, 'INF-121', 'Algoritmos y Programación'),
(9, 2, 'LAB-121', 'Laboratorio de INF-121'),
(10, 2, 'FIS-122', 'Física I'),
(11, 2, 'LAB-122', 'Laboratorio de Física I'),
(12, 2, 'MAT-123', 'Matemática Discreta II'),
(13, 2, 'MAT-124', 'Álgebra Lineal'),
(14, 2, 'MAT-125', 'Análisis Matemático II'),
(15, 3, 'INF-131', 'Estructura de Datos y Algoritmos'),
(16, 3, 'LAB-131', 'Laboratorio de INF-131'),
(17, 3, 'FIS-132', 'Física II'),
(18, 3, 'LAB-132', 'Laboratorio de Física II'),
(19, 3, 'EST-133', 'Estadística I'),
(20, 3, 'MAT-134', 'Análisis Matemático III'),
(21, 3, 'LIN-135', 'Idioma I'),
(22, 4, 'INF-141', 'Sistemas de Gestión'),
(23, 4, 'INF-142', 'Fundamentos Digitales'),
(24, 4, 'INF-143', 'Taller de Programación'),
(25, 4, 'INF-144', 'Lógica para la Ciencia de la Computación'),
(26, 4, 'EST-145', 'Estadística II'),
(27, 5, 'INF-151', 'Sistemas Operativos'),
(28, 5, 'INF-152', 'Sistemas de Información Gerencial'),
(29, 5, 'INF-153', 'Assembler'),
(30, 5, 'INF-154', 'Lenguajes Formales y Autómatas'),
(31, 5, 'EST-155', 'Investigación de Operaciones I'),
(32, 5, 'MAT-156', 'Análisis Numérico'),
(33, 6, 'INF-161', 'Diseño y Administración de Base de Datos'),
(34, 6, 'INF-162', 'Análisis y Diseño de Sistemas de Información'),
(35, 6, 'INF-163', 'Ingeniería de Software'),
(36, 6, 'INF-164', 'Teoría de la Información y Codificación'),
(37, 6, 'EST-165', 'Investigación de Operaciones II'),
(38, 6, 'INF-166', 'Informática y Sociedad');


CREATE TABLE `persona` (
  `ci` int(11) NOT NULL PRIMARY KEY,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `ruta` varchar(50) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `persona` (`ci`, `nombre`, `apellido`, `celular`, `ruta`, `usuario`) VALUES
(9070934, 'carlos', 'mamani', 651651, 'imagenes/288.png', 'carlos');

CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id_inscripcion` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `beca` (
  `id` int(11) NOT NULL,
  `nombre_beca` varchar(50) DEFAULT NULL,
  `monto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `beca` (`id`, `nombre_beca`, `monto`) VALUES
(1, 'beca comedor', 540.50),
(2, 'beca por excelencia', 599.99);
--
-- Indices de la tabla `flujoprocesoseguimiento`
--
ALTER TABLE `flujoprocesoseguimiento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flujoprocesoseguimiento`
--
ALTER TABLE `flujoprocesoseguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


CREATE TABLE IF NOT EXISTS `postula` (
  `id_persona` int(11) DEFAULT NULL,
  `id_beca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `postulante` (
  `ci` int(11) NOT NULL PRIMARY KEY,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


