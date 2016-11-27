-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2016 a las 15:30:34
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cooperativaxyz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE `afiliado` (
  `id` int(11) NOT NULL,
  `nro_documento` varchar(30) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `tipo_identificacion_id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `estado_civil_id` int(11) NOT NULL,
  `ocupacion_id` int(11) NOT NULL,
  `estudios_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`id`, `nro_documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `sexo`, `tipo_identificacion_id`, `departamento_id`, `municipio_id`, `estado_civil_id`, `ocupacion_id`, `estudios_id`, `estado`) VALUES
(1, '45435', 'regre', 'fdvfd', 'fvfdv', 0, '4', 0, 1, 5, 434, 5, 4, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amortizacion`
--

CREATE TABLE `amortizacion` (
  `id` int(11) NOT NULL,
  `nro_cuota` varchar(10) NOT NULL,
  `fecha_cuota` date NOT NULL,
  `capital` varchar(20) NOT NULL,
  `cuota_capital` int(11) NOT NULL,
  `cuota_interes` int(11) NOT NULL,
  `valor_cuota` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `amortizacion`
--

INSERT INTO `amortizacion` (`id`, `nro_cuota`, `fecha_cuota`, `capital`, `cuota_capital`, `cuota_interes`, `valor_cuota`, `estado`) VALUES
(1, '32454', '2016-11-27', '454', 45454, 454, 445, 1),
(2, '45454', '2016-11-27', '4545', 43545, 5443, 4545, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `id` int(11) NOT NULL,
  `fecha_tramite` date NOT NULL,
  `nro_credito` varchar(20) NOT NULL,
  `tipo_credito_id` int(11) NOT NULL,
  `plazo` varchar(20) NOT NULL,
  `tasa` varchar(30) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `valor_credito` varchar(20) NOT NULL,
  `valor_interes` varchar(30) NOT NULL,
  `saldo_credito` varchar(20) NOT NULL,
  `saldo_interes` varchar(30) NOT NULL,
  `afiliado_id` int(11) NOT NULL,
  `amortizacion_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlantico'),
(5, 'Bolivar'),
(6, 'Boyaca'),
(7, 'Caldas'),
(8, 'Caqueta'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Choco'),
(13, 'Cordoba'),
(14, 'Cundinamarca'),
(15, 'Guainia'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Narino'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindio'),
(25, 'Risaralda'),
(26, 'San Andres y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupes'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`id`, `nombre`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Unión Libre'),
(4, ' Divorciado o Separado'),
(5, 'Viudo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `nombre`) VALUES
(1, ' Bachillerato'),
(2, 'Técnico'),
(3, 'Tecnológico'),
(4, 'Universitario'),
(5, ' Posgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `departamento_id`) VALUES
(1, 'Abejorral', 2),
(2, 'Abrego', 22),
(3, 'Abriaqui', 2),
(4, 'Accias', 20),
(5, 'Acandi', 12),
(6, 'Acevedo', 17),
(7, 'Achi', 4),
(8, 'Agrado', 17),
(9, 'Agua de Dios', 14),
(10, 'Aguachica', 11),
(11, 'Aguada', 27),
(12, 'Aguadas', 7),
(13, 'Aguazul', 9),
(14, 'Agust?n Codazzi', 11),
(15, 'Aipe', 17),
(16, 'Alban (San Jose)', 21),
(17, 'Alban', 14),
(18, 'Albania', 8),
(19, 'Albania', 27),
(20, 'Alcala', 30),
(21, 'Aldana', 21),
(22, 'Alejandria', 2),
(23, 'Algeciras', 17),
(24, 'Almaguer', 10),
(25, 'Almeida', 6),
(26, 'Alpujarra', 29),
(27, 'Altamira', 17),
(28, 'Alto Baudo', 12),
(29, 'Altos del Rosario', 4),
(30, 'Alvarado', 29),
(31, 'Amaga', 2),
(32, 'Amalfi', 2),
(33, 'Ambalema', 29),
(34, 'Anapoima', 14),
(35, 'Ancuya', 21),
(36, 'Andaluca', 30),
(37, 'Andes', 2),
(38, 'Angelopolis', 2),
(39, 'Angostura', 2),
(40, 'Anolaima', 14),
(41, 'Anori', 2),
(42, 'Anserma', 7),
(43, 'Ansermanuevo', 30),
(44, 'Antioquia', 2),
(45, 'Anza', 2),
(46, 'Anzoategui', 29),
(47, 'Apartado', 2),
(48, 'Apia', 25),
(49, 'Aquitania', 6),
(50, 'Aracataca', 19),
(51, 'Aranzazu', 7),
(52, 'Aratoca', 27),
(53, 'Arauca', 3),
(54, 'Arauquita', 3),
(55, 'Arbelaez', 14),
(56, 'Arboleda (Berruecos)', 21),
(57, 'Arboledas', 22),
(58, 'Arboletes', 2),
(59, 'Arcabuco', 6),
(60, 'Arenal', 4),
(61, 'Argelia', 2),
(62, 'Argelia', 10),
(63, 'Argelia', 30),
(64, 'Ariguani (El Dificil)', 19),
(65, 'Arjona', 4),
(66, 'Armenia', 2),
(67, 'Armenia', 24),
(68, 'Armero (Guayabal)', 29),
(69, 'Arroyohondo', 4),
(70, 'Astrea', 11),
(71, 'Ataco', 29),
(72, 'Atrato (Yuto)', 12),
(73, 'Ayapel', 13),
(74, 'Bagado', 2),
(75, 'Bahia Solano (Mutis)', 12),
(76, 'Bajo Baudo (Pizarro)', 12),
(77, 'Balboa', 10),
(78, 'Balboa', 25),
(79, 'Baranoa', 4),
(80, 'Baraya', 17),
(81, 'Barbacoas', 21),
(82, 'Barbosa', 2),
(83, 'Barbosa', 27),
(84, 'Barichara', 27),
(85, 'Barranca de Upia', 20),
(86, 'Barrancabermeja', 27),
(87, 'Barrancas', 18),
(88, 'Barranco de Loba', 4),
(89, 'Barranquilla', 4),
(90, 'Becerril', 11),
(91, 'Belalcazar', 7),
(92, 'Belen de los Andaquies', 8),
(93, 'Belen de Umbria', 25),
(94, 'Belen', 6),
(95, 'Belen', 21),
(96, 'Bello', 2),
(97, 'Belmira', 2),
(98, 'Beltran', 14),
(99, 'Berbeo', 6),
(100, 'Betania', 2),
(101, 'Beteitiva', 6),
(102, 'Betulia', 2),
(103, 'Betulia', 27),
(104, 'Bituima', 14),
(105, 'Boavita', 6),
(106, 'Bochalema', 22),
(107, 'Bojaca', 14),
(108, 'Bojaya (Bellavista)', 12),
(109, 'Bolivar', 2),
(110, 'Bolivar', 10),
(111, 'Bolivar', 27),
(112, 'Bolivar', 30),
(113, 'Bosconia', 11),
(114, 'Boyaca', 6),
(115, 'Briseno', 2),
(116, 'Briseno', 6),
(117, 'Bucaramanga', 27),
(118, 'Bucarasica', 22),
(119, 'Buenaventura', 30),
(120, 'Buenavista', 6),
(121, 'Buenavista', 13),
(122, 'Buenavista', 24),
(123, 'Buenavista', 28),
(124, 'Buenos Aires', 10),
(125, 'Buesaco', 21),
(126, 'Buga', 30),
(127, 'Bugalagrande', 30),
(128, 'Buritica', 2),
(129, 'Busbanza', 6),
(130, 'Cabrera', 14),
(131, 'Cabrera', 27),
(132, 'Cabuyaro', 20),
(133, 'Caceres', 2),
(134, 'Cachipay', 14),
(135, 'Cachira', 22),
(136, 'Cacota', 22),
(137, 'Caicedo', 2),
(138, 'Caicedonia', 30),
(139, 'Caimito', 2),
(140, 'Cajamarca', 29),
(141, 'Cajibio', 10),
(142, 'Cajica', 14),
(143, 'Calamar', 4),
(144, 'Calamar', 16),
(145, 'Calarca', 24),
(146, 'Caldas', 2),
(147, 'Caldas', 6),
(148, 'Caldono', 10),
(149, 'Cali', 30),
(150, 'California', 27),
(151, 'Calima (Darien)', 30),
(152, 'Caloto', 10),
(153, 'Campamento', 2),
(154, 'Campo de la Cruz', 4),
(155, 'Campoalegre', 17),
(156, 'Campohermoso', 6),
(157, 'Canalete', 13),
(158, 'Candelaria', 4),
(159, 'Candelaria', 30),
(160, 'Cantagallo', 4),
(161, 'Canton de San Pablo', 12),
(162, 'Canasgordas', 2),
(163, 'Caparrapi', 14),
(164, 'Capitanejo', 27),
(165, 'Caqueza', 14),
(166, 'Caracoli', 2),
(167, 'Caramanta', 2),
(168, 'Carcasi', 27),
(169, 'Carepa', 2),
(170, 'Carmen de Apicala', 29),
(171, 'Carmen de Carupa', 14),
(172, 'Carmen de Viboral', 2),
(173, 'Carolina', 2),
(174, 'Cartagena del Chaira', 8),
(175, 'Cartagena', 4),
(176, 'Cartago', 30),
(177, 'Caruru', 31),
(178, 'Casabianca', 29),
(179, 'Castilla la Nueva', 20),
(180, 'Caucasia', 2),
(181, 'Cepita', 27),
(182, 'Cerete', 13),
(183, 'Cerinza', 6),
(184, 'Cerrito', 27),
(185, 'Cerro San Antonio', 19),
(186, 'Chachagui', 21),
(187, 'Chaguani', 14),
(188, 'Chalan', 28),
(189, 'Chameza', 9),
(190, 'Chaparral', 29),
(191, 'Charala', 27),
(192, 'Charta', 27),
(193, 'Chia', 14),
(194, 'Chigorodo', 2),
(195, 'Chima', 13),
(196, 'Chima', 27),
(197, 'Chimichagua', 11),
(198, 'Chinacota', 22),
(199, 'Chinavita', 6),
(200, 'Chinchina', 7),
(201, 'Chinu', 13),
(202, 'Chipaque', 14),
(203, 'Chipata', 27),
(204, 'Chiquinquira', 6),
(205, 'Chiquiza', 6),
(206, 'Chiriguana', 11),
(207, 'Chiscas', 6),
(208, 'Chita', 6),
(209, 'Chitaga', 22),
(210, 'Chitaranque', 6),
(211, 'Chivata', 6),
(212, 'Chivolo', 19),
(213, 'Chivor', 6),
(214, 'Choachi', 14),
(215, 'Choconta', 14),
(216, 'Cicuto', 4),
(217, 'Cienaga de Oro', 13),
(218, 'Cienaga', 6),
(219, 'Cienaga', 19),
(220, 'Cimitarra', 27),
(221, 'Circasia', 24),
(222, 'Cisneros', 6),
(223, 'Clemencia', 4),
(224, 'Cocorna', 2),
(225, 'Coello', 29),
(226, 'Cogua', 14),
(227, 'Colombia', 17),
(228, 'Colon (Genova)', 21),
(229, 'Colon', 23),
(230, 'Coloso (Ricaurte)', 28),
(232, 'Concepcion', 2),
(233, 'Concepcion', 27),
(234, 'Concordia', 2),
(235, 'Condoto', 12),
(236, 'Confines', 27),
(237, 'Consaca', 21),
(238, 'Contadero', 21),
(239, 'Contratacion', 27),
(240, 'Convencion', 22),
(241, 'Copacabana', 2),
(242, 'Coper', 6),
(243, 'Cordoba', 4),
(244, 'Cordoba', 13),
(245, 'Cordoba', 13),
(246, 'Corinto', 10),
(247, 'Coromoro', 27),
(248, 'Corozal', 28),
(249, 'Corrales', 6),
(250, 'Cota', 14),
(251, 'Cotorra', 13),
(252, 'Covarachia', 6),
(253, 'Coyaima', 29),
(254, 'Cravo Norte', 3),
(255, 'Cuaspud (Carlosama)', 21),
(256, 'Cubar', 6),
(257, 'Cubarral', 20),
(258, 'Cucaita', 6),
(259, 'Cucunuba', 14),
(260, 'Cucuta', 14),
(261, 'Cucutilla', 14),
(262, 'Cuitiva', 6),
(263, 'Cumaral', 20),
(264, 'Cumaribo', 32),
(265, 'Cumbal', 21),
(266, 'Cumbitara', 21),
(267, 'Cunday', 29),
(268, 'Curillo', 8),
(269, 'Curiti', 27),
(270, 'Curumani', 11),
(271, 'Dabeiba', 2),
(272, 'Dagua', 30),
(273, 'Dibulla', 18),
(274, 'Distraccion', 18),
(275, 'Dolores', 29),
(276, 'Don Matias', 2),
(277, 'Dos Quebradas', 25),
(278, 'Duitama', 6),
(279, 'Durania', 22),
(280, 'Ebejico', 2),
(281, 'El aguila', 30),
(282, 'El Bagre', 2),
(283, 'El Banco', 19),
(284, 'El Cairo', 30),
(285, 'El Calvario', 20),
(286, 'El Carmen de Bolivar', 4),
(287, 'El Carmen', 12),
(288, 'El Carmen', 22),
(289, 'El Carmen', 27),
(290, 'El Castillo', 20),
(291, 'El Cerrito', 30),
(292, 'El Charco', 21),
(293, 'El Cocuy', 6),
(294, 'El Colegio', 14),
(295, 'El Copey', 11),
(296, 'El Doncello', 8),
(297, 'El Dorado', 20),
(298, 'El Dovio', 30),
(299, 'El Espino', 6),
(300, 'El Guacamayo', 27),
(301, 'El Guamo', 4),
(302, 'El Litoral de San Juan', 12),
(303, 'El Molino', 18),
(304, 'El Paso', 11),
(305, 'El Paujil', 8),
(306, 'El Penon', 4),
(307, 'El Penon', 14),
(308, 'El Penon', 27),
(309, 'El Pinon', 19),
(310, 'El Playon', 27),
(311, 'El Reten', 19),
(312, 'El Retorno', 16),
(313, 'El Rosal', 14),
(314, 'El Rosario', 21),
(315, 'El Tablon', 21),
(316, 'El Tambo', 10),
(317, 'El Tambo', 21),
(318, 'El Tarra', 22),
(319, 'El Zulia', 22),
(320, 'El?as', 17),
(321, 'Encino', 27),
(322, 'Enciso', 27),
(323, 'Entrerrios', 2),
(324, 'Envigado', 2),
(325, 'Espinal', 29),
(326, 'Facatativa', 14),
(327, 'Falan', 29),
(328, 'Filadelfia', 7),
(329, 'Filandia', 24),
(330, 'Firavitoba', 6),
(331, 'Flandes', 29),
(332, 'Florencia', 8),
(333, 'Florencia', 10),
(334, 'Floresta', 6),
(335, 'Florian', 27),
(336, 'Florida', 30),
(337, 'Floridablanca', 27),
(338, 'Fomeque', 14),
(339, 'Fonseca', 18),
(340, 'Fortul', 3),
(341, 'Fortul', 3),
(342, 'Fosca', 14),
(343, 'Francisco Pizarro', 21),
(344, 'Fredonia', 2),
(345, 'Fresno', 29),
(346, 'Frontino', 2),
(347, 'Fuente de Oro', 20),
(348, 'Fundacion', 19),
(349, 'Funes', 21),
(350, 'Funza', 14),
(351, 'Fuquene', 14),
(352, 'Fusagasuga', 14),
(353, 'Gachala', 14),
(354, 'Gachancipa', 14),
(355, 'Gachantiva', 6),
(356, 'Gacheta', 14),
(357, 'Galan', 27),
(358, 'Galapa', 4),
(359, 'Galeras (Nueva Granada)', 28),
(360, 'Gama', 14),
(361, 'Gamarra', 11),
(362, 'Gambita', 27),
(363, 'Gameza', 6),
(364, 'Garagoa', 6),
(365, 'Garzon', 17),
(366, 'Genova', 24),
(367, 'Gigante', 17),
(368, 'Ginebra', 30),
(369, 'Giraldo', 2),
(370, 'Girardot', 14),
(371, 'Girardota', 2),
(372, 'Giron', 27),
(373, 'Gomez Plata', 2),
(374, 'Gonzalez', 11),
(375, 'Gramalote', 22),
(376, 'Granada', 2),
(377, 'Granada', 14),
(378, 'Granada', 20),
(379, 'Guaca', 27),
(380, 'Guacamayas', 6),
(381, 'Guacari', 30),
(382, 'Guacheta', 14),
(383, 'Guachucal', 21),
(384, 'Guadalupe', 2),
(385, 'Guadalupe', 17),
(386, 'Guadalupe', 27),
(387, 'Guaduas', 14),
(388, 'Guaitarilla', 21),
(389, 'Gualmatan', 21),
(390, 'Guamal', 19),
(391, 'Guamal', 20),
(392, 'Guamo', 29),
(393, 'Guapi', 6),
(394, 'Guapota', 27),
(395, 'Guaranda', 28),
(396, 'Guarne', 2),
(397, 'Guasca', 14),
(398, 'Guatape', 2),
(399, 'Guataqui', 14),
(400, 'Guatavita', 14),
(401, 'Guateque', 6),
(402, 'Guatica', 25),
(403, 'Guavata', 27),
(404, 'Guayabal de Siquima', 14),
(405, 'Guayabetal', 14),
(406, 'Guayata', 6),
(407, 'Guepsa', 27),
(409, 'Gutierrez', 14),
(410, 'Hacari', 22),
(411, 'Hatillo de Loba', 4),
(412, 'Hato Corozal', 9),
(413, 'Hato', 27),
(414, 'Hatonuevo', 18),
(415, 'Heliconia', 2),
(416, 'Herran', 22),
(417, 'Herveo', 29),
(418, 'Hispania', 2),
(419, 'Hobo', 17),
(420, 'Honda', 29),
(421, 'Ibague', 29),
(422, 'Icononzo', 29),
(423, 'Iles', 21),
(424, 'Imues', 21),
(425, 'Inza', 10),
(426, 'Ipiales', 21),
(427, 'Iquira', 17),
(428, 'Isnos', 17),
(429, 'Itagui', 2),
(430, 'Itsmina', 12),
(431, 'Ituango', 2),
(432, 'Iza', 6),
(433, 'Jambalo', 10),
(434, 'Jamundi', 30),
(435, 'Jardin', 2),
(436, 'Jenesano', 6),
(437, 'Jerico', 2),
(438, 'Jerico', 6),
(439, 'Jerusalen', 14),
(440, 'Jesus Maria', 27),
(441, 'Jordan', 27),
(442, 'Juan de Acosta', 4),
(443, 'Junin', 14),
(444, 'Jurado', 12),
(445, 'La Apartada (Frontera)', 13),
(446, 'La Argentina', 17),
(447, 'La Belleza', 27),
(448, 'La Calera', 14),
(449, 'La Capilla', 6),
(450, 'La Ceja', 2),
(451, 'La Celia', 25),
(452, 'La Cruz', 21),
(453, 'La Cumbre', 30),
(454, 'La Dorada', 7),
(455, 'La Esperanza', 22),
(456, 'La Estrella', 2),
(457, 'La Florida', 21),
(458, 'La Gloria', 11),
(459, 'La Jagua de Ibirico', 11),
(460, 'La Llanada', 21),
(461, 'La Macarena', 20),
(462, 'La Merced', 7),
(463, 'La Mesa', 14),
(464, 'La Montanita', 8),
(465, 'La Palma', 14),
(466, 'La Paz (Robles)', 11),
(467, 'La Paz', 27),
(468, 'La Pena', 14),
(469, 'La Pintada', 2),
(470, 'La Plata', 17),
(471, 'La Playa', 22),
(472, 'La Primavera', 32),
(473, 'La Salina', 9),
(474, 'La Sierra', 10),
(475, 'La Tebaida', 24),
(476, 'La Tola', 21),
(477, 'La Ubita', 6),
(478, 'La Union', 2),
(479, 'La Union', 21),
(480, 'La Union', 28),
(481, 'La Union', 30),
(482, 'La Uribe', 20),
(483, 'La Vega', 10),
(484, 'La Vega', 14),
(485, 'La Victoria', 6),
(486, 'La Victoria', 30),
(487, 'La Virginia', 25),
(488, 'Labateca', 22),
(489, 'Labranzagrande', 6),
(490, 'Landazuri', 27),
(491, 'Lebrija', 27),
(492, 'Leiva', 21),
(493, 'Lejanias', 20),
(494, 'Lenguazaque', 14),
(495, 'Lerida', 29),
(496, 'Leticia', 1),
(497, 'Libano', 29),
(498, 'Liborina', 2),
(499, 'Linares', 21),
(500, 'Lloro', 12),
(501, 'Lopez (Micay)', 10),
(503, 'Los Andes (Sotomayor)', 21),
(504, 'Los Cordobas', 13),
(505, 'Los Palmitos', 28),
(506, 'Los Patios', 22),
(507, 'Los Santos', 27),
(508, 'Lourdes', 22),
(509, 'Luruaco', 4),
(510, 'Macanal', 6),
(511, 'Macaravita', 27),
(512, 'Maceo', 2),
(513, 'Macheta', 14),
(514, 'Madrid', 14),
(515, 'Magangue', 4),
(516, 'Magui (Payan)', 21),
(517, 'Mahates', 4),
(518, 'Maicao', 18),
(519, 'Majagual', 28),
(520, 'Mlaga', 27),
(521, 'Malambo', 4),
(522, 'Mallama (Piedrancha)', 21),
(523, 'Manati', 4),
(524, 'Manaure Balcon Cesar', 11),
(525, 'Manaure', 18),
(526, 'Mani', 9),
(527, 'Manizales', 7),
(528, 'Manta', 14),
(529, 'Manzanares', 7),
(530, 'Mapiripan', 20),
(531, 'Margarita', 4),
(532, 'Maria la Baja', 4),
(533, 'Marinilla', 2),
(534, 'Maripi', 6),
(535, 'Mariquita', 29),
(536, 'Marmato', 7),
(537, 'Marquetalia', 7),
(538, 'Marsella', 25),
(539, 'Marulanda', 7),
(540, 'Matanza', 27),
(541, 'Medellin', 2),
(542, 'Medina', 14),
(543, 'Melgar', 29),
(544, 'Mercaderes', 10),
(545, 'Mesetas', 20),
(546, 'Milan', 8),
(547, 'Miraflores', 6),
(548, 'Miraflores', 16),
(549, 'Miranda', 10),
(550, 'Mistrato', 25),
(551, 'Mitu', 31),
(552, 'Mocoa', 23),
(553, 'Mogotes', 27),
(554, 'Molagavita', 27),
(555, 'Momil', 13),
(556, 'Mompos', 4),
(557, 'Mongua', 6),
(558, 'Mongui', 6),
(559, 'Moniquira', 6),
(560, 'Monitos', 13),
(561, 'Montebello', 2),
(562, 'Montecristo', 4),
(563, 'Montelibano', 13),
(564, 'Montenegro', 24),
(565, 'Monteria', 13),
(566, 'Monterrey', 9),
(567, 'Morales', 4),
(568, 'Morales', 10),
(569, 'Morelia', 8),
(570, 'Morroa', 28),
(571, 'Mosquera', 14),
(572, 'Mosquera', 21),
(573, 'Motavita', 6),
(574, 'Murillo', 29),
(575, 'Murindo', 2),
(576, 'Mutata', 2),
(577, 'Mutiscua', 22),
(578, 'Muzo', 6),
(579, 'Narino', 2),
(580, 'Narino', 14),
(581, 'Nataga', 17),
(582, 'Natagaima', 29),
(583, 'Nechi', 2),
(584, 'Necocli', 2),
(585, 'Neira', 7),
(586, 'Neiva', 17),
(587, 'Nemocon', 14),
(588, 'Nilo', 14),
(589, 'Nimaima', 14),
(590, 'Nobsa', 6),
(591, 'Nocaima', 14),
(592, 'Novita', 12),
(593, 'Nuevo Colon', 6),
(594, 'Nunchia', 9),
(595, 'Nuqui', 12),
(596, 'Obando', 30),
(598, 'Ocana', 22),
(599, 'Oiba', 27),
(600, 'Oicata', 6),
(601, 'Olaya', 2),
(602, 'Olaya', 21),
(603, 'Onzaga', 27),
(604, 'Oporapa', 17),
(605, 'Orito', 23),
(606, 'Orocue', 9),
(607, 'Ortega', 29),
(608, 'Ospina', 21),
(609, 'Otanche', 6),
(610, 'Ovejas', 28),
(611, 'Pachavita', 6),
(612, 'Pacho', 14),
(613, 'Pacora', 7),
(614, 'Padilla', 10),
(615, 'Paez (Belalcazar)', 10),
(616, 'Paez', 6),
(617, 'Paicol', 17),
(618, 'Pailitas', 11),
(619, 'Paime', 14),
(620, 'Paipa', 6),
(621, 'Pajarito', 6),
(622, 'Palermo', 17),
(623, 'Palestina', 7),
(624, 'Palestina', 17),
(625, 'Palmar de Varela', 4),
(626, 'Palmar', 27),
(627, 'Palmas del Socorro', 27),
(628, 'Palmira', 30),
(629, 'Palmito', 28),
(630, 'Palocabildo', 29),
(631, 'Pamplona', 22),
(632, 'Pamplonita', 22),
(633, 'Pandi', 14),
(634, 'Panqueba', 6),
(635, 'Paramo', 27),
(636, 'Paratebueno', 14),
(637, 'Pasca', 14),
(638, 'Pasto', 21),
(639, 'Patia (El Bordo)', 10),
(640, 'Pauna', 6),
(641, 'Paya', 6),
(642, 'Paz de Ariporo', 9),
(643, 'Paz de Rio', 6),
(644, 'Pedraza', 19),
(645, 'Pelaya', 11),
(646, 'Pensilvania', 7),
(647, 'Penol', 2),
(648, 'Peque', 2),
(649, 'Pereira', 25),
(650, 'Pesca', 6),
(651, 'Piamonte', 10),
(652, 'Pie de Cuesta', 27),
(653, 'Piedras', 29),
(654, 'Piendamo', 10),
(655, 'Pijao', 24),
(656, 'Pijino del Carmen', 19),
(657, 'Pinchote', 27),
(658, 'Pinillos', 4),
(659, 'Piojo', 4),
(660, 'Pisva', 6),
(661, 'Pital', 17),
(662, 'Pitalito', 17),
(663, 'Pivijay', 19),
(664, 'Planadas', 29),
(665, 'Planeta Rica', 13),
(666, 'Plato', 19),
(667, 'Policarpa', 21),
(668, 'Polonuevo', 4),
(669, 'Ponedera', 4),
(670, 'Popayan', 10),
(671, 'Pore', 9),
(672, 'Potosi', 21),
(673, 'Pradera', 30),
(674, 'Prado', 29),
(675, 'Providencia', 21),
(676, 'Providencia', 26),
(677, 'Publoviejo', 19),
(678, 'Pueblo Bello', 11),
(679, 'Pueblo Nuevo', 13),
(680, 'Pueblo Rico', 25),
(681, 'Pueblorrico', 2),
(682, 'Puente Nacional', 27),
(683, 'Puerres', 21),
(684, 'Puerto Asis', 23),
(685, 'Puerto Berrio', 2),
(686, 'Puerto Boyaca', 6),
(687, 'Puerto Caicedo', 23),
(688, 'Puerto Carreno', 32),
(689, 'Puerto Colombia', 4),
(690, 'Puerto Concordia', 20),
(691, 'Puerto Escondido', 13),
(692, 'Puerto Gaitan', 20),
(693, 'Puerto Guzman', 23),
(694, 'Puerto Inirida', 15),
(695, 'Puerto Leguizamo', 23),
(696, 'Puerto Libertador', 13),
(697, 'Puerto Lleras', 20),
(698, 'Puerto Lpez', 20),
(699, 'Puerto Nare', 2),
(700, 'Puerto Narino', 1),
(701, 'Puerto Parra', 27),
(702, 'Puerto Rico', 8),
(703, 'Puerto Rico', 20),
(704, 'Puerto Rondon', 3),
(705, 'Puerto Rondon', 3),
(706, 'Puerto Salgar', 14),
(707, 'Puerto Santander', 22),
(708, 'Puerto Tejada', 10),
(709, 'Puerto Triunfo', 2),
(710, 'Puerto Wilches', 27),
(711, 'Puli', 14),
(712, 'Pupiales', 21),
(713, 'Purace (Coconuco)', 10),
(714, 'Purificacion', 29),
(715, 'Purisima', 13),
(716, 'Quebradanegra', 14),
(717, 'Quetame', 14),
(718, 'Quibdo', 12),
(719, 'Quimbaya', 24),
(720, 'Quinchia', 25),
(721, 'Quipama', 6),
(722, 'Quipile', 14),
(723, 'Rafael', 14),
(724, 'Ragonvalia', 22),
(725, 'Ramiquiri', 6),
(726, 'Raquira', 6),
(727, 'Recetor', 9),
(728, 'Regidor', 4),
(729, 'Remedios', 2),
(730, 'Remolino', 19),
(731, 'Repelon', 4),
(732, 'Restrepo', 20),
(733, 'Restrepo', 30),
(734, 'Retiro', 2),
(735, 'Ricaurte', 14),
(736, 'Ricaurte', 21),
(737, 'Rio de Oro', 11),
(738, 'Rio Viejo', 4),
(739, 'Rioblanco', 29),
(740, 'Riofrio', 30),
(741, 'Riohacha', 18),
(742, 'Rionegro', 2),
(743, 'Rionegro', 27),
(744, 'Riosucio', 7),
(745, 'Riosucio', 12),
(746, 'Risaralda', 7),
(747, 'Rivera', 17),
(748, 'Roberto Payan (San Jose)', 21),
(749, 'Roldanillo', 30),
(750, 'Roncesvalles', 3),
(751, 'Rondon', 6),
(752, 'Rosas', 10),
(753, 'Rovira', 29),
(754, 'Sabalarga', 9),
(755, 'Sabana de Torres', 27),
(756, 'Sabanagrande', 4),
(757, 'Sabanalarga', 2),
(758, 'Sabanalarga', 4),
(759, 'Sabaneta', 2),
(760, 'Saboya', 6),
(761, 'Sacama', 9),
(762, 'Sachica', 6),
(763, 'Sahagun', 13),
(764, 'Saladoblanco', 17),
(765, 'Salamina', 7),
(766, 'Salamina', 19),
(767, 'Salazar', 22),
(768, 'Saldana', 29),
(769, 'Salento', 24),
(770, 'Salgar', 2),
(771, 'Samaca', 6),
(772, 'Samana', 7),
(773, 'Samaniego', 21),
(774, 'Sampues', 28),
(775, 'San Agustin', 17),
(776, 'San Alberto', 11),
(777, 'San Andres Sotavento', 13),
(778, 'San Andres', 2),
(779, 'San Andres', 26),
(780, 'San Andres', 27),
(781, 'San Antero', 13),
(782, 'San Antonio de Tequendama', 14),
(783, 'San Antonio', 29),
(784, 'San Benito Abad', 28),
(785, 'San Benito', 27),
(786, 'San Bernardo del Viento', 13),
(787, 'San Bernardo', 14),
(788, 'San Bernardo', 21),
(789, 'San Calixto', 22),
(790, 'San Carlos de Guaroa', 20),
(791, 'San Carlos', 2),
(792, 'San Carlos', 13),
(793, 'San Cayetano', 14),
(794, 'San Cayetano', 22),
(795, 'San Cristobal', 4),
(796, 'San Diego', 11),
(797, 'San Eduardo', 6),
(798, 'San Estanislao', 4),
(799, 'San Fernando', 4),
(800, 'San francisco', 2),
(801, 'San Francisco', 14),
(802, 'San Francisco', 23),
(803, 'San Gil', 27),
(804, 'San Jacinto del Cauca', 4),
(805, 'San Jacinto', 4),
(806, 'San Jeronimo', 2),
(807, 'San Joaquin', 27),
(808, 'San Jose de Miranda', 27),
(809, 'San Jose de Montana', 2),
(810, 'San Jose de Pare', 6),
(811, 'San Jose del Fragua', 8),
(812, 'San Jose del Guaviare', 16),
(813, 'San Jose del Palmar', 12),
(814, 'San Jose', 7),
(815, 'San Juan de Arama', 20),
(816, 'San Juan de Betulia', 28),
(817, 'San Juan de Rioseco', 14),
(818, 'San Juan de Uraba', 2),
(819, 'San Juan del Cesar', 11),
(820, 'San Juan Nepomuceno', 4),
(821, 'San Juanito', 20),
(822, 'San Lorenzo', 21),
(823, 'San Luis de Gaceno', 6),
(824, 'San Luis de Palenque', 9),
(825, 'San Luis', 2),
(826, 'San Luis', 29),
(827, 'San Marcos', 28),
(828, 'San Martin de Loba', 4),
(829, 'San Martin', 11),
(830, 'San Martin', 20),
(831, 'San Mateo', 6),
(832, 'San Miguel de Sema', 6),
(833, 'San Miguel', 23),
(834, 'San Miguel', 27),
(835, 'San Onofre', 28),
(836, 'San Pablo de Borbur', 6),
(837, 'San Pablo', 4),
(838, 'San Pablo', 21),
(839, 'San Pedro de Cartago', 21),
(840, 'San Pedro de Uraba', 2),
(841, 'San Pedro', 2),
(842, 'San Pedro', 28),
(843, 'San Pedro', 30),
(844, 'San Pelayo', 13),
(845, 'San Rafael', 2),
(846, 'San Roque', 2),
(847, 'San Sebastian de Buuenavista', 19),
(848, 'San Sebastian', 10),
(849, 'San Vicente de Chucuri', 27),
(850, 'San Vicente del Caguan', 8),
(851, 'San Vicente', 2),
(852, 'San Zenon', 19),
(853, 'Sandona', 21),
(854, 'Santa Ana', 19),
(855, 'Santa Barbara (Iscuande)', 21),
(856, 'Santa Barbara', 2),
(857, 'Santa Barbara', 27),
(858, 'Santa Catalina', 4),
(859, 'Santa Cruz (Guachavez)', 21),
(860, 'Santa Helena del Opon', 27),
(861, 'Santa Isabel', 29),
(862, 'Santa Lucia', 4),
(863, 'Santa Maria', 6),
(864, 'Santa Maria', 17),
(865, 'Santa Marta', 19),
(866, 'Santa Rosa de Cabal', 25),
(867, 'Santa Rosa de Osos', 2),
(868, 'Santa Rosa de Viterbo', 6),
(869, 'Santa Rosa del Sur', 4),
(870, 'Santa Rosa', 4),
(871, 'Santa Rosa', 10),
(872, 'Santa Rosalia', 32),
(873, 'Santa Sofia', 6),
(875, 'Santana', 6),
(876, 'Santander de Quilichao', 10),
(877, 'Santiago', 22),
(878, 'Santiago', 23),
(879, 'Santo Domingo', 2),
(880, 'Santo Tomas', 4),
(881, 'Santuario', 2),
(882, 'Santuario', 25),
(883, 'Sapuyes', 21),
(884, 'Saravena', 3),
(885, 'Sardinata', 22),
(886, 'Sasaima', 14),
(887, 'Sativanorte', 6),
(888, 'Sativasur', 6),
(889, 'Segovia', 2),
(890, 'Sesquile', 14),
(891, 'Sevilla', 30),
(892, 'Siachoque', 6),
(893, 'Sibate', 14),
(894, 'Sibundoy', 23),
(895, 'Silos', 22),
(896, 'Silvania', 14),
(897, 'Silvia', 10),
(898, 'Simacota', 27),
(899, 'Simijaca', 14),
(900, 'Simiti', 4),
(901, 'Sincelejo', 28),
(902, 'Sincelejo', 28),
(903, 'Sipi', 12),
(904, 'Sitionuevo', 19),
(905, 'Soacha', 14),
(906, 'Soata', 6),
(907, 'Socha', 6),
(908, 'Socorro', 27),
(909, 'Socota', 6),
(910, 'Sogamoso', 6),
(911, 'Solano', 8),
(912, 'Soledad', 4),
(913, 'Solita', 8),
(914, 'Somondoco', 6),
(915, 'Sonson', 2),
(916, 'Sopetran', 2),
(917, 'Soplaviento', 4),
(918, 'Sopo', 14),
(919, 'Sora', 6),
(920, 'Soraca', 6),
(921, 'Sotaquira', 6),
(922, 'Sotara (Paispamba)', 10),
(923, 'Suaita', 27),
(924, 'Suan', 4),
(925, 'Suarez', 10),
(926, 'Surez', 29),
(927, 'Suaza', 17),
(928, 'Subachoque', 14),
(929, 'Sucre', 27),
(930, 'Sucre', 28),
(931, 'Suesca', 14),
(932, 'Supata', 14),
(933, 'Supia', 7),
(934, 'Surata', 27),
(935, 'Susa', 14),
(936, 'Susacon', 6),
(937, 'Sutamarchan', 6),
(938, 'Sutatausa', 14),
(939, 'Sutatenza', 6),
(940, 'Tabio', 14),
(941, 'Tado', 12),
(942, 'Talaigua Nuevo', 4),
(943, 'Tamalameque', 11),
(944, 'Tamara', 9),
(945, 'Tame', 3),
(946, 'Tamesis', 2),
(947, 'Taminango', 21),
(948, 'Tangua', 21),
(949, 'Taraza', 2),
(950, 'Tarqui', 17),
(951, 'Tarso', 2),
(952, 'Tasco', 6),
(953, 'Tatama', 31),
(954, 'Tauramena', 9),
(955, 'Tausa', 14),
(956, 'Tello', 17),
(957, 'Tena', 14),
(958, 'Tenerife', 19),
(959, 'Tenjo', 14),
(960, 'Tenza', 6),
(961, 'Teorama', 22),
(962, 'Teruel', 17),
(963, 'Tesalia', 17),
(964, 'Tibacuy', 14),
(965, 'Tibana', 6),
(966, 'Tibasosa', 6),
(967, 'Tibirita', 14),
(968, 'Tibu', 22),
(969, 'Tierralta', 13),
(970, 'Timana', 17),
(971, 'Timbio', 10),
(972, 'Timbiqui', 10),
(973, 'Tinjaca', 6),
(974, 'Tipacoque', 6),
(975, 'Tiquisio (Puerto Rico)', 4),
(976, 'Titiribi', 2),
(977, 'Toca', 6),
(978, 'Tocaima', 14),
(979, 'Tocancipa', 14),
(980, 'Togui', 6),
(981, 'Toledo', 2),
(982, 'Toledo', 22),
(983, 'Toluviejo', 28),
(984, 'Toluviejo', 28),
(985, 'Tona', 27),
(986, 'Topaga', 6),
(987, 'Topaipi', 14),
(988, 'Toribio', 10),
(989, 'Toro', 30),
(990, 'Tota', 6),
(991, 'Totoro', 10),
(992, 'Trinidad', 9),
(993, 'Trujillo', 30),
(994, 'Tubara', 4),
(995, 'Tulua', 30),
(996, 'Tumaco', 21),
(997, 'Tunja', 6),
(998, 'Tunungua', 6),
(999, 'Tuquerres', 21),
(1000, 'Turbaco', 4),
(1001, 'Turbana', 4),
(1002, 'Turbo', 2),
(1003, 'Turmeque', 6),
(1004, 'Tuta', 6),
(1005, 'Tutaza', 6),
(1006, 'Ubala', 14),
(1007, 'Ubaque', 14),
(1008, 'Ubate', 14),
(1009, 'Ulloa', 30),
(1010, 'Umbita', 6),
(1011, 'Une', 14),
(1012, 'Unguia', 12),
(1013, 'Uramita', 2),
(1014, 'Uribia', 18),
(1015, 'Urrao', 2),
(1016, 'Urumita', 18),
(1017, 'Usiacuri', 4),
(1018, 'Utica', 14),
(1019, 'Valdivia', 2),
(1020, 'Valencia', 13),
(1021, 'Valle de San Jose', 27),
(1022, 'Valle de San Juan', 29),
(1023, 'Valledupar', 11),
(1024, 'Valparaiso', 2),
(1025, 'Valparaso', 8),
(1026, 'Vegachi', 2),
(1027, 'Velez', 27),
(1028, 'Venadillo', 29),
(1029, 'Venecia (Ospina Perez)', 14),
(1030, 'Venecia', 2),
(1031, 'Ventaquemda', 6),
(1032, 'Vergara', 14),
(1033, 'Versalles', 30),
(1034, 'Vetas', 27),
(1035, 'Viani', 14),
(1036, 'Victoria', 7),
(1037, 'Vigia del Fuerte', 2),
(1038, 'Vijes', 30),
(1039, 'Villa de Leyva', 6),
(1040, 'Villa del Rosario', 22),
(1041, 'Villa Gamuez (La Hormiga)', 23),
(1042, 'Villa Garzon', 23),
(1043, 'Villacaro', 22),
(1044, 'Villagomez', 14),
(1045, 'Villahermosa', 29),
(1046, 'Villamaria', 7),
(1047, 'Villanueva', 4),
(1048, 'Villanueva', 9),
(1049, 'Villanueva', 18),
(1050, 'Villanueva', 27),
(1051, 'Villapinzon', 14),
(1052, 'Villarrica', 29),
(1053, 'Villavicencio', 20),
(1054, 'Villavieja', 17),
(1055, 'Villeta', 14),
(1056, 'Viota', 14),
(1057, 'Viracacha', 6),
(1058, 'Vistahermosa', 20),
(1059, 'Viterbo', 7),
(1060, 'Yacopi', 14),
(1061, 'Yacuanquer', 21),
(1062, 'Yaguara', 17),
(1063, 'Yali', 2),
(1064, 'Yarumal', 2),
(1065, 'Yolombo', 2),
(1066, 'Yondo (Casabe)', 2),
(1067, 'Yopal', 9),
(1068, 'Yotoco', 30),
(1069, 'Yumbo', 30),
(1070, 'Zambrano', 4),
(1071, 'Zapatoca', 27),
(1072, 'Zaragoza', 2),
(1073, 'Zarzal', 30),
(1074, 'Zetaquira', 6),
(1075, 'Zipacon', 14),
(1076, 'Zipaquira', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupacion`
--

CREATE TABLE `ocupacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ocupacion`
--

INSERT INTO `ocupacion` (`id`, `nombre`) VALUES
(1, 'Empleado'),
(2, 'Independiente'),
(3, 'Pensionado'),
(4, ' Estudiante'),
(5, ' Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id`, `nombre`) VALUES
(1, ' Mensual'),
(2, ' Bimensual'),
(3, 'Trimestral'),
(4, 'Semestral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_credito`
--

CREATE TABLE `tipo_credito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_credito`
--

INSERT INTO `tipo_credito` (`id`, `nombre`) VALUES
(1, 'Libre Inversión'),
(2, 'Educación'),
(3, 'Vivienda'),
(4, 'Vehículo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_identificacion`
--

INSERT INTO `tipo_identificacion` (`id`, `nombre`) VALUES
(1, 'Cédula'),
(2, 'Tarjeta Identidad'),
(3, 'NIT'),
(4, 'Pasaporte'),
(5, 'Cédula Extranjería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_transaccion`
--

CREATE TABLE `tipo_transaccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_transaccion`
--

INSERT INTO `tipo_transaccion` (`id`, `nombre`) VALUES
(1, 'Pagos '),
(2, 'Nota Débito '),
(3, 'Nota Crédito ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id` int(11) NOT NULL,
  `fecha_movimiento` date NOT NULL,
  `nro_credito` varchar(20) NOT NULL,
  `tipo_transaccion_id` int(11) NOT NULL,
  `cuota_pago` varchar(20) NOT NULL,
  `valor_capital` varchar(30) NOT NULL,
  `valor_interes` varchar(20) NOT NULL,
  `afiliado_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id`, `fecha_movimiento`, `nro_credito`, `tipo_transaccion_id`, `cuota_pago`, `valor_capital`, `valor_interes`, `afiliado_id`, `estado`) VALUES
(1, '2016-11-27', '546546', 2, '565', '565', '54654', 1, 1),
(2, '2016-11-27', '546547654', 1, '4565', '54654', '56546', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `remember_token` varchar(100) NOT NULL,
  `create_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `remember_token`, `create_at`, `updated_at`, `estado`) VALUES
(1, 'Desarrollo', 'Desarrollo', 'desarrollo@cooperativaxyz.com', '$2y$10$9R/SilIaZWVfMiNk38nyJuyP98lxQXkhY1Vec/b0OccP1UkN332gG', 'Gi5nzYmTtXJG3wpg7t2atMBIQZEw5HT31jj9SM6kD8IDkwOfpnOFImkJ9KeX', '2016-08-15 19:55:41.971000', '2016-11-25 23:53:06', 1),
(2, 'Documentacion', 'Documentacion', 'documnetacion@sena.com', '$2y$10$9R/SilIaZWVfMiNk38nyJuyP98lxQXkhY1Vec/b0OccP1UkN332gG', 'dD3nwZnSppG5TwuuZtshsDssNJbzL583eEsohpI1Fe3gaZlh8b6iIsw2F05T', '2016-08-15 20:10:26.755000', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_afil_departamento` (`departamento_id`),
  ADD KEY `fk_afil_estado` (`estado_civil_id`),
  ADD KEY `fk_afil_estudios` (`estudios_id`),
  ADD KEY `fk_afil_munici` (`municipio_id`),
  ADD KEY `fk_afil_ocupacion` (`ocupacion_id`),
  ADD KEY `fk_afil_tipo_iden` (`tipo_identificacion_id`);

--
-- Indices de la tabla `amortizacion`
--
ALTER TABLE `amortizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_afil_credito` (`afiliado_id`),
  ADD KEY `fk_amortizacion_credito` (`amortizacion_id`),
  ADD KEY `fk_credito` (`tipo_credito_id`) USING BTREE,
  ADD KEY `fk_credito_periodo` (`periodo_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_departamento` (`departamento_id`);

--
-- Indices de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_credito`
--
ALTER TABLE `tipo_credito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_transaccion`
--
ALTER TABLE `tipo_transaccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_afil_transaccion` (`afiliado_id`),
  ADD KEY `fk_tipo_transacion` (`tipo_transaccion_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `amortizacion`
--
ALTER TABLE `amortizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1077;
--
-- AUTO_INCREMENT de la tabla `ocupacion`
--
ALTER TABLE `ocupacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_credito`
--
ALTER TABLE `tipo_credito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo_transaccion`
--
ALTER TABLE `tipo_transaccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD CONSTRAINT `fk_afil_departamento` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`),
  ADD CONSTRAINT `fk_afil_estado` FOREIGN KEY (`estado_civil_id`) REFERENCES `estado_civil` (`id`),
  ADD CONSTRAINT `fk_afil_estudios` FOREIGN KEY (`estudios_id`) REFERENCES `estudios` (`id`),
  ADD CONSTRAINT `fk_afil_munici` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`),
  ADD CONSTRAINT `fk_afil_ocupacion` FOREIGN KEY (`ocupacion_id`) REFERENCES `ocupacion` (`id`),
  ADD CONSTRAINT `fk_afil_tipo_iden` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`);

--
-- Filtros para la tabla `credito`
--
ALTER TABLE `credito`
  ADD CONSTRAINT `fk_afil_credito` FOREIGN KEY (`afiliado_id`) REFERENCES `afiliado` (`id`),
  ADD CONSTRAINT `fk_amortizacion_credito` FOREIGN KEY (`amortizacion_id`) REFERENCES `amortizacion` (`id`),
  ADD CONSTRAINT `fk_credito` FOREIGN KEY (`tipo_credito_id`) REFERENCES `tipo_credito` (`id`),
  ADD CONSTRAINT `fk_credito_periodo` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id`),
  ADD CONSTRAINT `fk_per_credito` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_departamento` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`);

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `fk_afil_transaccion` FOREIGN KEY (`afiliado_id`) REFERENCES `afiliado` (`id`),
  ADD CONSTRAINT `fk_tipo_transacion` FOREIGN KEY (`tipo_transaccion_id`) REFERENCES `tipo_transaccion` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
