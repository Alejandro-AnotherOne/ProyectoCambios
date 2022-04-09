-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2022 a las 18:55:50
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudiente`
--

CREATE TABLE `acudiente` (
  `Id_Acudiente` int(18) NOT NULL,
  `Acu_nombreacudiente` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Acu_apellidoacudiente` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Acu_tipodocumento` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Acu_documento` int(18) NOT NULL,
  `Acu_edad` int(3) NOT NULL,
  `Acu_telefono` int(10) NOT NULL,
  `Acu_direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Acu_barrio` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Acu_correoelectronico` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Id_Socioeconomico` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `acudiente`
--

INSERT INTO `acudiente` (`Id_Acudiente`, `Acu_nombreacudiente`, `Acu_apellidoacudiente`, `Acu_tipodocumento`, `Acu_documento`, `Acu_edad`, `Acu_telefono`, `Acu_direccion`, `Acu_barrio`, `Acu_correoelectronico`, `Id_Socioeconomico`) VALUES
(0, '', '', '', 0, 0, 0, '', '', '', 0),
(1, 'ALBEIRO', 'PALENCIA', 'CC', 1024549, 29, 256454555, 'CRA 5555', 'BOGOTA', 'FJFGHFHJDHGD', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id_Administrador` int(18) NOT NULL,
  `Adm_Usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Adm_password` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `Id_Beneficiario` int(18) NOT NULL,
  `Ben_Nombres` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Apellidos` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_FechaNacimiento` date NOT NULL,
  `Ben_Edad` int(2) NOT NULL,
  `Ben_Genero` enum('MASCULINO','FEMENINO','COMUNIDAD LGTB','') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Telefono` int(10) NOT NULL,
  `Bene_direccion` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Barrio` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Discapacidad` enum('Si','No','','') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Alergias` enum('Si','No','','') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Desplazado` enum('Si','No','','') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ben_Nacionalidad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Id_Departamento` int(18) NOT NULL,
  `Id_Acudiente` int(18) NOT NULL,
  `Id_InformacionAcademica` int(18) NOT NULL,
  `Id_Eps` int(18) NOT NULL,
  `Id_Colegio` int(18) NOT NULL,
  `Id_Ayuda` int(18) NOT NULL,
  `Id_Rh` int(18) NOT NULL,
  `Id_Zapatos` int(18) NOT NULL,
  `Id_camisa` int(18) NOT NULL,
  `Id_Pantalon` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci COMMENT='Estos   son los datos de formulario de  inscripción';

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`Id_Beneficiario`, `Ben_Nombres`, `Ben_Apellidos`, `Ben_FechaNacimiento`, `Ben_Edad`, `Ben_Genero`, `Ben_Telefono`, `Bene_direccion`, `Ben_Barrio`, `Ben_Discapacidad`, `Ben_Alergias`, `Ben_Desplazado`, `Ben_Nacionalidad`, `Id_Departamento`, `Id_Acudiente`, `Id_InformacionAcademica`, `Id_Eps`, `Id_Colegio`, `Id_Ayuda`, `Id_Rh`, `Id_Zapatos`, `Id_camisa`, `Id_Pantalon`) VALUES
(1, 'Elena', 'perez', '2022-04-07', 12, 'MASCULINO', 2147483647, 'Cra 73 h Bis # 75 D 35 Sur', 'caracoli', 'No', 'Si', 'Si', '', 63, 0, 1, 4, 5, 0, 5, 19, 15, 13),
(3, 'Elena', 'perez', '2022-04-07', 12, 'MASCULINO', 2147483647, 'Cra 73 h Bis # 75 D 35 Sur', 'caracoli', 'No', 'Si', 'Si', '', 63, 1, 2, 4, 5, 0, 5, 19, 15, 13),
(4, 'Elena', 'perez', '2022-04-07', 12, 'MASCULINO', 2147483647, 'Cra 73 h Bis # 75 D 35 Sur', 'caracoli', 'No', 'Si', 'Si', '', 63, 0, 1, 4, 5, 0, 5, 19, 15, 13),
(100, 'Albeiro', 'Riveros', '2022-04-07', 15, '', 25455744, 'Cra 73 h Bis # 75 D 35 Sur', 'Santa Viviana', 'No', 'No', '', '', 11, 1, 2, 2, 2, 0, 5, 5, 0, 8),
(1555555, 'Elena', 'perez', '2022-04-07', 12, 'MASCULINO', 2147483647, 'Cra 73 h Bis # 75 D 35 Sur', 'caracoli', 'No', 'Si', 'Si', '', 63, 0, 1, 4, 5, 0, 5, 19, 15, 13),
(318519155, 'Guebardina', 'perez', '2010-01-02', 12, 'MASCULINO', 2147483647, 'Cra 73 h Bis # 75 D 35 Sur', 'caracoli', 'Si', 'Si', '', '', 11, 0, 100, 4, 5, 0, 4, 7, 0, 6),
(1024549811, 'RUBEN ALBEIRO', 'PALENCIA RIVEROS', '2022-02-08', 27, '', 2147483647, 'CRA73 H BIS# 75 D 39 SUR', 'SANTA VIVIAMA', 'No', 'No', '', '', 5, 1, 2, 3, 1, 0, 1, 16, 0, 10),
(1028781308, 'Evelin Ximena', 'Palencia Bustamante', '2004-12-29', 17, '', 2147483647, 'cra 73 h bis #75 d 35 sur', 'Santa Viviana', 'No', 'No', '', '', 11, 1, 1, 1, 1, 0, 3, 19, 0, 9),
(1472583269, 'PABLO CLAVO', 'UN CLAVITO', '2022-04-02', 12, 'MASCULINO', 6836547, 'Cra 73 h Bis # 75 D 35 Sur', 'Santa Viviana', 'No', 'Si', '', '', 52, 1, 2, 10, 8, 0, 3, 17, 0, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisa`
--

CREATE TABLE `camisa` (
  `Id_camisa` int(18) NOT NULL,
  `Talla_camisa` varchar(5) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `camisa`
--

INSERT INTO `camisa` (`Id_camisa`, `Talla_camisa`) VALUES
(1, '0'),
(2, '2'),
(3, '4'),
(4, '6'),
(5, '8'),
(6, '10'),
(7, '12'),
(8, '14'),
(9, '16'),
(10, 'S'),
(11, 'M'),
(12, 'L'),
(13, 'XL'),
(14, 'XXL'),
(15, 'XXXL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegio`
--

CREATE TABLE `colegio` (
  `Id_Colegio` int(18) NOT NULL,
  `Col_Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Col_Sede` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Col_Telefono` int(10) NOT NULL,
  `Col_Localidad` int(3) NOT NULL,
  `Col_Direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `colegio`
--

INSERT INTO `colegio` (`Id_Colegio`, `Col_Nombre`, `Col_Sede`, `Col_Telefono`, `Col_Localidad`, `Col_Direccion`) VALUES
(1, 'Colegio Sierra Morena', 'A', 7171391, 19, ' Cl. 77a sur'),
(2, 'Colegio Sierra Morena Sede B -', 'B', 7171391, 19, 'Cl. 68b Sur'),
(3, 'Colegio Sierra Morena Sede C -', 'C', 7171391, 0, 'A, Cl. 46, Soacha'),
(4, 'Cedid Ciudad Bolivar', 'A', 317261509, 19, 'Dg. 70 Sur #5611'),
(5, 'Colegio Distrital Ciudad Bolív', 'A', 7152774, 19, 'Comuna Cdad. Bolívar'),
(6, ' Colegio El Ensueño (IED)', 'A', 321475896, 19, 'Transversal 70 D No. 60-90 Sur'),
(7, 'Colegio Sierra Morena Curva IE', 'A', 300707024, 19, 'CL 69 SUR # 71 G - 12'),
(8, 'Colegio Dios es Amor Cazuca', 'A', 5766467, 0, 'Calle 53 # 26c 11 Este, Cl. 53'),
(9, 'Gimnasio Moderno Colombiano E ', 'Soacha', 5975041, 0, 'DIAGONAL 43 J 37 35 E'),
(10, 'Colegio SIERRA MORENA PARQUE', 'A', 30070748, 19, '54 No.71-09 Sur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id_Departamento` int(18) NOT NULL,
  `Dep_NomDepartamento` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Id_Departamento`, `Dep_NomDepartamento`) VALUES
(5, 'ANTIOQUIA'),
(8, 'ATLANTICO'),
(11, 'BOGOTA, D.C.'),
(13, 'BOLIVAR'),
(15, 'BOYACA'),
(17, 'CALDAS'),
(18, 'CAQUETA '),
(19, 'CAUCA'),
(20, 'CESAR'),
(23, 'CORDOBA'),
(25, 'CUNDINAMARCA'),
(27, 'CHOCO'),
(41, 'HUILA'),
(44, 'LA GUAJIRA'),
(47, 'MAGDALENA'),
(50, 'META'),
(52, 'NARIÑO '),
(54, 'N. DE SANTANDER'),
(63, 'QUINDIO '),
(66, 'RISARALDA'),
(68, 'SANTANDER'),
(70, 'SUCRE'),
(73, 'TOLIMA'),
(76, 'VALLE DEL CAUCA'),
(81, 'ARAUCA'),
(85, 'CASANARE'),
(86, 'PUTUMAYO'),
(88, 'SAN ANDRES '),
(94, 'GUAINIA'),
(95, 'GUAVIARE'),
(97, 'VAUPES'),
(99, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega_ayuda`
--

CREATE TABLE `entrega_ayuda` (
  `Id_Entrega` int(18) NOT NULL,
  `Id_Beneficiario` int(18) NOT NULL,
  `Ayuda_Nombre` enum('1. Ecomonica','2. Alimentaria','3. Vestuario','') NOT NULL,
  `Fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrega_ayuda`
--

INSERT INTO `entrega_ayuda` (`Id_Entrega`, `Id_Beneficiario`, `Ayuda_Nombre`, `Fecha_entrega`) VALUES
(3, 1024548822, '3. Vestuario', '2022-03-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `Id_Eps` int(18) NOT NULL,
  `Eps_nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Eps_numero` int(10) NOT NULL,
  `Eps_Departamento` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`Id_Eps`, `Eps_nombre`, `Eps_numero`, `Eps_Departamento`) VALUES
(1, 'Salud Total', 14524, 'Bogota'),
(2, 'EPS   Sanitas', 919100, 'Bogota'),
(3, 'Nueva Eps', 3077022, 'Bogota'),
(4, 'Compensar', 3077001, 'Bogota'),
(5, 'Famisanar', 3078069, 'Bogota'),
(6, 'Capital Salud ', 22219, 'Bogota'),
(7, 'Cafesalud', 120777, 'Bogota'),
(8, 'Cruz Blanca', 315181502, 'Bogota'),
(9, 'Saludcoop', 6514000, 'Bogota'),
(10, 'salud vida ', 2088330, 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosocioeconomico`
--

CREATE TABLE `estadosocioeconomico` (
  `Id_Socioeconomico` int(18) NOT NULL,
  `Soc_Beneficiario` enum('A1 aL A5','B1 al B7','C1 al C18','D1 al D20') COLLATE utf8_spanish2_ci NOT NULL,
  `Id_Ayuda` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estadosocioeconomico`
--

INSERT INTO `estadosocioeconomico` (`Id_Socioeconomico`, `Soc_Beneficiario`, `Id_Ayuda`) VALUES
(1, 'A1 aL A5', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_academica`
--

CREATE TABLE `informacion_academica` (
  `Id_InformacionAcademica` int(18) NOT NULL,
  `Inf_Enfasisacademico` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Inf_grado` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `Inf_colegio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `inf_sede` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Inf_nombresede` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Id_Desc_Info_Taller` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `informacion_academica`
--

INSERT INTO `informacion_academica` (`Id_InformacionAcademica`, `Inf_Enfasisacademico`, `Inf_grado`, `Inf_colegio`, `inf_sede`, `Inf_nombresede`, `Id_Desc_Info_Taller`) VALUES
(1, 'malo para mate', 'quinto', 'pepito', 'A', 'perezA', 1),
(2, 'malo en español', '502', 'neil armstrong', 'no', 'no', 2),
(100, 'humanidades', 'quinto', 'colegio pepito perez', 'a', 'a jr', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_taller`
--

CREATE TABLE `inicio_taller` (
  `Id_Ini_Taller` int(18) NOT NULL COMMENT 'Código inicio del taller ',
  `Ini_des_taller` varchar(300) NOT NULL,
  `Ini_fecha_inicio` date NOT NULL COMMENT 'Fecha inicio del taller',
  `Ini_Fecha_fin` date NOT NULL COMMENT 'Fecha finalizacion del taller',
  `Ini_Intensidad` varchar(15) NOT NULL,
  `Ini_Dias_taller` enum('Lunes-Miercoles','Martes-Jueves','Miércoles-Viernes','Sabados') NOT NULL COMMENT 'Días de dar clase o taller',
  `Ini_jornada` enum('JORNADA MAÑANA','JORNADA TARDE','','') NOT NULL COMMENT 'Jornada, Mañana o tarde',
  `Id_Tutor` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio_taller`
--

INSERT INTO `inicio_taller` (`Id_Ini_Taller`, `Ini_des_taller`, `Ini_fecha_inicio`, `Ini_Fecha_fin`, `Ini_Intensidad`, `Ini_Dias_taller`, `Ini_jornada`, `Id_Tutor`) VALUES
(12, '0', '2021-12-07', '2022-02-25', '', 'Martes-Jueves', 'JORNADA MAÑANA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones_taller`
--

CREATE TABLE `inscripciones_taller` (
  `Id_Ins_taller` int(18) NOT NULL COMMENT 'Codigo  de Inscripcion del talller',
  `Id_Ini_Taller` int(18) NOT NULL COMMENT 'Id_ Inicio tabla talller',
  `Id_Beneficiario` int(18) NOT NULL COMMENT 'ID CODIGO DE TABLA BENEFICIARIO',
  `Estado` enum('Cancelado','Aprobado','Retirado','') NOT NULL COMMENT 'Termina taller. si o no '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripciones_taller`
--

INSERT INTO `inscripciones_taller` (`Id_Ins_taller`, `Id_Ini_Taller`, `Id_Beneficiario`, `Estado`) VALUES
(21, 12, 1028781308, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantalon`
--

CREATE TABLE `pantalon` (
  `Id_Pantalon` int(18) NOT NULL,
  `talla_pantalon` varchar(5) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pantalon`
--

INSERT INTO `pantalon` (`Id_Pantalon`, `talla_pantalon`) VALUES
(1, '0'),
(2, '2'),
(3, '4'),
(4, '6'),
(5, '8'),
(6, '10'),
(7, '12'),
(8, '14'),
(9, '16'),
(10, '28'),
(11, '30'),
(12, '32'),
(13, '34'),
(14, '36'),
(15, '38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rh`
--

CREATE TABLE `rh` (
  `Id_Rh` int(18) NOT NULL,
  `rh_Descripcion` varchar(5) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rh`
--

INSERT INTO `rh` (`Id_Rh`, `rh_Descripcion`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'O+'),
(4, 'O-'),
(5, 'AB+'),
(6, 'AB-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `Id_Tutor` int(18) NOT NULL,
  `Tut_Nombretutor` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Tut_Apellidotutor` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Tut_tipodedocumento` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Tut_Direccion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Tut_Telefono` int(10) NOT NULL,
  `Tut_nivelescolar_prof` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`Id_Tutor`, `Tut_Nombretutor`, `Tut_Apellidotutor`, `Tut_tipodedocumento`, `Tut_Direccion`, `Tut_Telefono`, `Tut_nivelescolar_prof`) VALUES
(1, 'pepito', 'perez', 'CC', 'KRA siempre buena 123', 33548108, 'profesiona'),
(10, 'Ruben', 'Palencia', 'CC', 'abc', 31565, 'abc'),
(23, 'Carlos', 'Peña', 'C.', 'cra 56', 845484752, 'Profesiona'),
(66666, 'dAVID', 'LOPEZ', '66', ' CR JHD', 32135545, 'PROFESIONA'),
(1854592, 'Juan', 'Osorio', 'C.', '1854592', 0, '9751854525'),
(2147483647, 'ALBEIRO', 'RIVEROS', 'CC', 'CRA 75 H BIS # 75 D 35 SUR ', 225245545, 'PROFESIONA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatos`
--

CREATE TABLE `zapatos` (
  `Id_Zapatos` int(18) NOT NULL,
  `Descripcion` varchar(5) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `zapatos`
--

INSERT INTO `zapatos` (`Id_Zapatos`, `Descripcion`) VALUES
(1, '16'),
(2, '17'),
(3, '18'),
(4, '19'),
(5, '20'),
(6, '21'),
(7, '22'),
(8, '23'),
(9, '24'),
(10, '25'),
(11, '26'),
(12, '27'),
(13, '28'),
(14, '29'),
(15, '30'),
(16, '31'),
(17, '32'),
(18, '33'),
(19, '34'),
(20, '35'),
(21, '36'),
(22, '37'),
(23, '38'),
(24, '39'),
(25, '40'),
(26, '41'),
(27, '42'),
(28, '43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acudiente`
--
ALTER TABLE `acudiente`
  ADD PRIMARY KEY (`Id_Acudiente`),
  ADD KEY `Id_Estadosocioeconomico` (`Id_Socioeconomico`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id_Administrador`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`Id_Beneficiario`),
  ADD KEY `Id_Departamento` (`Id_Departamento`),
  ADD KEY `Id_Acudiente` (`Id_Acudiente`),
  ADD KEY `Id_InformacionAcademica` (`Id_InformacionAcademica`),
  ADD KEY `Id_Eps` (`Id_Eps`),
  ADD KEY `Id_Colegio` (`Id_Colegio`),
  ADD KEY `Id_Ayuda` (`Id_Ayuda`),
  ADD KEY `Id_Rh` (`Id_Rh`),
  ADD KEY `Id_Zapatos` (`Id_Zapatos`),
  ADD KEY `Id_camisa` (`Id_camisa`),
  ADD KEY `Id_Pantalon` (`Id_Pantalon`);

--
-- Indices de la tabla `colegio`
--
ALTER TABLE `colegio`
  ADD PRIMARY KEY (`Id_Colegio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id_Departamento`);

--
-- Indices de la tabla `entrega_ayuda`
--
ALTER TABLE `entrega_ayuda`
  ADD PRIMARY KEY (`Id_Entrega`),
  ADD KEY `Id_Beneficiario` (`Id_Beneficiario`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`Id_Eps`);

--
-- Indices de la tabla `estadosocioeconomico`
--
ALTER TABLE `estadosocioeconomico`
  ADD PRIMARY KEY (`Id_Socioeconomico`),
  ADD KEY `Id_Ayuda` (`Id_Ayuda`);

--
-- Indices de la tabla `informacion_academica`
--
ALTER TABLE `informacion_academica`
  ADD PRIMARY KEY (`Id_InformacionAcademica`),
  ADD KEY `Id_Taller` (`Id_Desc_Info_Taller`);

--
-- Indices de la tabla `inicio_taller`
--
ALTER TABLE `inicio_taller`
  ADD PRIMARY KEY (`Id_Ini_Taller`),
  ADD KEY `Id_Tutor` (`Id_Tutor`);

--
-- Indices de la tabla `inscripciones_taller`
--
ALTER TABLE `inscripciones_taller`
  ADD PRIMARY KEY (`Id_Ins_taller`),
  ADD KEY `Id_Ini_Taller` (`Id_Ini_Taller`,`Id_Beneficiario`);

--
-- Indices de la tabla `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`Id_Rh`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`Id_Tutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
