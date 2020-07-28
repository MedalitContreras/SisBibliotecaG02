-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2020 a las 01:38:19
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisbibliotecag2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `auto_id` int(11) NOT NULL,
  `auto_nombres` varchar(45) DEFAULT NULL,
  `auto_apellidos` varchar(45) DEFAULT NULL,
  `auto_biografia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`auto_id`, `auto_nombres`, `auto_apellidos`, `auto_biografia`) VALUES
(1, 'Manuela', 'Macia', 'Escritora de vocación ha sido galardonada en diferentes concursos entre ellos: Cuentos Navideños de la Mutua Ilicitana y Radio Elche en (1976,1978 y 1979). Así como en Epifanía en las Ondas de Alicante. Es autora de numerosos relatos y poemas publicados en libros colectivos, entre otros: \"Un asunto delicado\", \"89 Poemas y Dibujos para los 90\", \"Frutos del tiempo\", \"Navidad en la Radio\", \"Calidoscopio\", \"Mi querido amigo\", \"Nada más que la verdad\", \"Suave Soplo\", \"Todo por una caña\", \"Para Valeria\", \"Un buen sueldo y a vivir\" y \"Soy una Corbata muy especial\". \"Nostalgia de París\" fue su primer libro de relatos en solitario (2000). Es autora de la novela \"Eternamente Helena\".'),
(2, 'Fernando', ' Gil González', 'La presente obra compila los estudios históricos e historiográficos de la figura de Viriato desde la antigüedad hasta el periodo actual a través de una perspectiva arqueológica y la interpretación histórica. Con las fuentes en la mano, se explica este fenómeno de la figura lusitana a través de un estudio detallado.'),
(3, 'Enrique', 'Javier de Lara', 'Enrique Javier de Lara, fue el ganador del prestigioso Premio Felipe Trigo de Novela en 2010 por la novela \"Cerezas\". Es autor, además, de las novelas: \"El impostor\" (alrededor de la figura de Miguel de Cervantes) y \"La deriva de los Icebergs\".'),
(4, 'Ricard', 'Vidal Franch', 'Al mismo tiempo, el subinspector Matías Levijuelo se halla inmerso en la investigación más importante de su vida, unas extrañas e inexplicables desapariciones cuyo esclarecimiento le supondría un éxito que pondría fin a su anodina y gris trayectoria en el cuerpo de policía.'),
(5, 'José Ramón', 'Chaves', 'Última obra del prestigioso jurista José Ramón Chaves (Magistrado especialista de lo contencioso-administrativo. Doctor en Derecho)'),
(6, 'Jorge', 'García García', 'Jorge García García, \"CROATA\", Finalista del Premio Azorín de Novela 2019 (Diputación de Alicante y Editorial Planeta)'),
(7, 'Javier', 'Navarro', '\"El origen de la música Pop en Madrid\", que es casi como decir en España, a través del libro \"Así empezó todo\" del músico Javier Navarro.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cate_id` int(11) NOT NULL,
  `cate_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cate_id`, `cate_nombre`) VALUES
(1, 'Narrativa'),
(2, 'Historia. Biografias'),
(3, 'Novela Actual'),
(4, 'Novela negra'),
(5, 'Manual Jurídico. Tratado de Derecho'),
(6, 'Novela negra. '),
(7, 'Historia de la música. Entrevistas'),
(8, 'Divulgación cultural'),
(9, 'Novela histórica'),
(10, 'Poética actual'),
(11, 'Historia contemporánea.'),
(12, 'Relatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar`
--

CREATE TABLE `ejemplar` (
  `ejem_id` int(11) NOT NULL,
  `ejem_titulo` varchar(150) DEFAULT NULL,
  `ejem_editorial` varchar(45) DEFAULT NULL,
  `ejem_paginas` int(11) DEFAULT NULL,
  `ejem_isbn` varchar(20) DEFAULT NULL,
  `ejem_idioma` varchar(45) DEFAULT NULL,
  `ejem_portada` varchar(45) DEFAULT NULL,
  `ejem_digital` varchar(45) DEFAULT NULL,
  `ejem_audio` varchar(45) DEFAULT NULL,
  `ejem_resumen` varchar(255) DEFAULT NULL,
  `ejem_tipo_id` int(11) DEFAULT NULL,
  `ejem_cate_id` int(11) DEFAULT NULL,
  `ejem_valoracion` tinyint(1) DEFAULT NULL,
  `ejem_anio` int(11) DEFAULT NULL,
  `ejem_nprestamos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar`
--

INSERT INTO `ejemplar` (`ejem_id`, `ejem_titulo`, `ejem_editorial`, `ejem_paginas`, `ejem_isbn`, `ejem_idioma`, `ejem_portada`, `ejem_digital`, `ejem_audio`, `ejem_resumen`, `ejem_tipo_id`, `ejem_cate_id`, `ejem_valoracion`, `ejem_anio`, `ejem_nprestamos`) VALUES
(1, 'En el séptimo cielo', 'LC ediciones', 188, '978-84-121577-9-6', 'Español', 'Tapa blanda con solapas', 'Disponible', 'No disponible', 'Elisa es una mujer que ha pasado la barrera de los cuarenta. Vive una vida anodina y solitaria que ella misma ha elegido. Ya no espera demasiado del mundo, aunque a veces, tras una larga conversación interior, se concede la posibilidad de recuperar ilusio', 1, 1, 4, 2020, 5),
(2, 'En el séptimo cielo', 'LC ediciones', 188, '978-84-121577-9-6', 'Español', 'Tapa blanda con solapas', 'Disponible', 'No disponible', 'Elisa es una mujer que ha pasado la barrera de los cuarenta. Vive una vida anodina y solitaria que ella misma ha elegido. Ya no espera demasiado del mundo, aunque a veces, tras una larga conversación interior, se concede la posibilidad de recuperar ilusio', 1, 1, 4, 2020, 5),
(3, 'VIRIATO. Historia, historiografía y leyenda de un jefe lusitano', 'Editorial Amarante', 120, '978-84-121754-2-4', 'Español', 'Tapa dura', 'Disponible', 'Disponible', 'La presente obra compila los estudios históricos e historiográficos de la figura de Viriato desde la antigüedad hasta el periodo actual a través de una perspectiva arqueológica y la interpretación histórica.', 2, 2, 5, 2020, 12),
(4, 'La niebla verde', 'Editorial Amarante', 192, '978-84-122191-4-2', 'Español, Ingles', 'Tapa dura', 'Disponible', 'Disponible', 'Rodrigo de Barragán, fracasado repetidamente en la relación de pareja por un comportamiento violento, que deriva, entre otras cuestiones, de una vieja frustración sentimental, es captado por un empresario que lo contrata como delegado comercial.', 3, 3, 5, 2020, 10),
(5, 'Ángel de cristal (2ª edición)', 'Salamanca Books', 246, '978-84-122191-3-5', 'Español, Ingles', 'Tapa blanda con solapas', 'No disponible', 'Disponible', 'Carlos Salinés, heredero único de un imperio empresarial, a sus 28 años es considerado un play-boy empedernido que dedica su frívola existencia a la diversión y el placer.', 4, 4, 5, 2020, 34),
(6, 'Derecho administrativo mínimo', 'Editorial Amarante', 788, '978-84-121754-7-9', 'Español, Portugues', 'Tapa blanda con solapas', 'Disponible', 'Disponible', 'El autor aporta su experiencia como letrado público, profesor universitario y magistrado para exponer los pilares del Derecho Administrativo, disciplina que afronta constantes mutaciones y retos, al precio de una inquietante incertidumbre.', 5, 5, 4, 2020, 56),
(7, 'Croata', 'Editorial Amarante', 374, '978-84-121577-9-6', 'Español', 'Tapa blanda con solapas', 'Disponible', 'No disponible', 'Croata, utilizando la arrolladora fuerza de sus personajes, sube a las más altas esferas de la sociedad para mostrarnos las mayores bajezas del ser humano.', 6, 6, 5, 2020, 10),
(8, 'Así empezó todo (El origen de la música Pop en Madrid)', 'Editorial Amarante', 246, '978-84-121577-6-5', ' Español', 'Tapa blanda con solapas', 'Disponible', 'Disponible', 'Desgraciadamente, y con mucha frecuencia, se produce el olvido de hechos y personas pioneras de algo que, al desarrollarse en el tiempo, marcan un jalón cultural.', 7, 7, 4, 2020, 29),
(9, 'El libro del azafrán (historias y leyendas del oro rojo)', 'Editorial Amarante', 184, '978-84-122191-4-2', 'Español', 'Tapa blanda con solapas', 'Disponible', 'Disponible', 'El azafrán es, sin duda, la especia más antigua y legendaria de la historia de la humanidad. Sus orígenes hay que buscarlos en Oriente Medio, concretamente en la península de Anatolia, allá por el III milenio a.C', 8, 8, 5, 2019, 34),
(10, 'El legado de los malditos', 'LC ediciones', 626, '978-84-121754-8-9', 'Español', 'Tapa blanda', 'Disponible', 'No disponible', 'Estamos en 1840. Años atrás, el prestigioso médico y profesor Don Alfonso Valbuena, se vio obligado a fingir su propia muerte y desaparecer durante años viviendo como un mendigo en las peligrosas calles de Madrid. ', 9, 9, 5, 2018, 31),
(11, 'El silencio de la lengua', 'Editorial Amarante', 108, '978-84-121577-7-2', 'Español', 'Tapa blanda', 'Disponible', 'Disponible', 'Transitar por los angostos espacios de la poesía, es como mirar al abismo donde el caminante puede despeñar su realidad, urgir el abandono y hundirse, siempre con dolor, en lo más profundo del ser. ', 10, 10, 4, 2015, 102),
(12, 'Una historia del Barrio de los Pizarrales', 'Editorial Amarante', 220, '978-84-121577-2-7', 'español', 'Tapa blanda', 'Disponible', 'Disponible', 'El presente ensayo histórico es una aproximación a la historia de un barrio de clase trabajadora, ubicado en Salamanca: “Los Pizarrales”,', 11, 11, 4, 2020, 4),
(13, 'La loca y los gatos', 'LC ediciones', 184, '978-84-121577-9-6', 'español', 'Tapa blanda', 'Disponible', 'Disponible', 'Palma Govaert nació en Gante, Bélgica, en 1973. A sus 22 años se dio cuenta de que este minúsculo país era demasiado limitado para ella, así que se mudó varias veces, alternando España con América hispanohablante. ', 1, 1, 5, 2013, 29),
(14, 'Lo inesperado esperamos', 'Editorial Amarante', 184, '978-84-121754-7-9', 'español', 'Tapa blanda con solapas', 'Disponible', 'No disponible', 'Lo inesperado esperamos es su primera incursión en la narrativa. En los relatos que lo conforman, tejidos con temáticas y formatos diversos, se despliega una mirada poliédrica por donde circulan personajes que tienen como denominador común una vida', 12, 12, 4, 2013, 29),
(15, 'Make me feel', 'LC ediciones', 234, '978-84-121754-2-4', 'español', 'Tapa dura', 'Disponible', 'No disponible', 'Thais Díaz Blanco es una joven autora que ha vivido casi toda su vida en Monforte de Lemos. Siempre fue una persona muy tímida a la que le cuesta expresar sus sentimientos', 1, 1, 4, 2017, 56),
(16, 'Visceral', 'LC ediciones', 234, '978-84-121754-7-9', 'español', 'Tapa blanda con solapas', 'Disponible', 'Disponible', 'Visceral\" nace de la felicidad y, al mismo tiempo, del miedo. Se trata de años de pensamientos, emociones, situaciones y personas; de lugares, palabras, sueños… de todo aquello a lo que la mente llega, y de lo que tan solo imaginamos.', 10, 10, 5, 2017, 34),
(17, 'Las lágrimas de Julieta', 'LC ediciones', 46, '978-84-121754-7-9', 'español', 'Tapa blanda', 'Disponible', 'No disponible', '\"Las Lágrimas de Julieta\" propone una versión liberadora de Romeo y Julieta que, apoyada en el emblemático libro humanista \"El Sueño de Polifilo\"', 1, 1, 2, 2019, 29),
(18, 'El Círculo Moldenhauer', 'LC ediciones', 166, '978-84-121754-2-4', 'español', 'Tapa blanda', 'Disponible', 'No disponible', 'Cinco cadáveres con extraños símbolos grabados en la piel aparecen una mañana en una plaza del centro de Madrid. A primera vista, se diría que los crímenes han sido cometidos por algún grupo xenófobo: cuatro de las cinco víctimas eran inmigrantes. ', 1, 1, 3, 2019, 34),
(19, '3d23', 'LC ediciones', 166, '978-84-122191-4-2', 'español', 'Tapa blanda', 'Disponible', 'No disponible', 'Retratos de la vida gay en el S.XXI\" es su primera obra de ficción. En esta colección de relatos poco convencionales e interconectados a través de elementos que son bien “reales', 1, 1, 5, 2020, 56),
(20, 'El gitano. Solo por hoy', 'LC ediciones', 184, '978-84-121754-2-4', 'español', 'Tapa blanda con solapas', 'Disponible', 'No disponible', 'Oriol Alquézar Villellas, nacido en Barcelona en 1966 es Técnico Logístico de profesión, toda su carrera profesional se ha desarrollado en el sector del transporte y la logística.', 3, 3, 3, 2020, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_autor`
--

CREATE TABLE `ejemplar_autor` (
  `rela_auto_id` int(11) NOT NULL,
  `rela_ejem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_tipo`
--

CREATE TABLE `ejemplar_tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar_tipo`
--

INSERT INTO `ejemplar_tipo` (`tipo_id`, `tipo_nombre`) VALUES
(1, 'Narrativa'),
(2, 'Historia. Biografías'),
(3, 'Novela actual'),
(4, 'Novela negra'),
(5, 'Manual Jurídico. Tratado de Derecho'),
(6, 'Novela negra'),
(7, 'Historia de la música. Entrevistas'),
(8, 'Divulgación cultural'),
(9, 'Novela histórica'),
(10, 'Poética actual.'),
(11, 'Historia contemporánea'),
(12, 'Relatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE `favorito` (
  `favo_usua_id` int(11) NOT NULL,
  `favo_ejem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `histo_id` int(11) NOT NULL,
  `histo_usua_id` int(11) DEFAULT NULL,
  `histo_termino` varchar(45) DEFAULT NULL,
  `histo_fechareg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticion`
--

CREATE TABLE `peticion` (
  `peti_id` int(11) NOT NULL,
  `peti_ejem_id` int(11) DEFAULT NULL,
  `peti_dias` int(11) DEFAULT NULL,
  `peti_usua_id` int(11) DEFAULT NULL,
  `peti_fechareg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `pres_id` int(11) NOT NULL,
  `pres_usua_id` int(11) DEFAULT NULL,
  `pres_ejem_id` int(11) DEFAULT NULL,
  `pres_fechareg` datetime DEFAULT NULL,
  `pres_dias` int(11) DEFAULT NULL,
  `pres_fechaprestamo` date DEFAULT NULL,
  `pres_fechadevolucion` date DEFAULT NULL,
  `pres_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usua_id` int(11) NOT NULL,
  `usua_login` varchar(45) DEFAULT NULL,
  `usua_password` varchar(45) DEFAULT NULL,
  `usua_codigo` int(11) DEFAULT NULL,
  `usua_nombres` varchar(45) DEFAULT NULL,
  `usua_apellidos` varchar(45) DEFAULT NULL,
  `usua_direccion` varchar(150) DEFAULT NULL,
  `usua_email` varchar(70) DEFAULT NULL,
  `usua_telefono` varchar(20) DEFAULT NULL,
  `usua_esadmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indices de la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD PRIMARY KEY (`ejem_id`),
  ADD KEY `fk_ejemplar_ejemplar_tipo_idx` (`ejem_tipo_id`),
  ADD KEY `fk_ejemplar_categoria1_idx` (`ejem_cate_id`);

--
-- Indices de la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD PRIMARY KEY (`rela_auto_id`,`rela_ejem_id`),
  ADD KEY `fk_ejemplar_autor_ejemplar1_idx` (`rela_ejem_id`);

--
-- Indices de la tabla `ejemplar_tipo`
--
ALTER TABLE `ejemplar_tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`favo_usua_id`,`favo_ejem_id`),
  ADD KEY `fk_favorito_ejemplar1_idx` (`favo_ejem_id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`histo_id`),
  ADD KEY `fk_historial_usuario1_idx` (`histo_usua_id`);

--
-- Indices de la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD PRIMARY KEY (`peti_id`),
  ADD KEY `fk_peticion_ejemplar1_idx` (`peti_ejem_id`),
  ADD KEY `fk_peticion_usuario1_idx` (`peti_usua_id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`pres_id`),
  ADD KEY `fk_prestamo_usuario1_idx` (`pres_usua_id`),
  ADD KEY `fk_prestamo_ejemplar1_idx` (`pres_ejem_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  MODIFY `ejem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ejemplar_tipo`
--
ALTER TABLE `ejemplar_tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `peticion`
--
ALTER TABLE `peticion`
  MODIFY `peti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usua_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD CONSTRAINT `fk_ejemplar_categoria1` FOREIGN KEY (`ejem_cate_id`) REFERENCES `categoria` (`cate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_ejemplar_tipo` FOREIGN KEY (`ejem_tipo_id`) REFERENCES `ejemplar_tipo` (`tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD CONSTRAINT `fk_ejemplar_autor_autor1` FOREIGN KEY (`rela_auto_id`) REFERENCES `autor` (`auto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_autor_ejemplar1` FOREIGN KEY (`rela_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `fk_favorito_ejemplar1` FOREIGN KEY (`favo_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favorito_usuario1` FOREIGN KEY (`favo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_historial_usuario1` FOREIGN KEY (`histo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD CONSTRAINT `fk_peticion_ejemplar1` FOREIGN KEY (`peti_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_usuario1` FOREIGN KEY (`peti_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_ejemplar1` FOREIGN KEY (`pres_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestamo_usuario1` FOREIGN KEY (`pres_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
