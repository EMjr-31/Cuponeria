Create database Cuponeria;
use Cuponeria;
-- Estructura de tabla para la tabla `empresa`
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` varchar(5)  NOT NULL,
  `nombre_empresa` varchar(255) NOT NULL,
  `comision_empresa` float NOT NULL,
  `estado_empresa` tinyint(1) NOT NULL,
  `fechacreacion_empresa` datetime NOT NULL,
  `rubro_empresa` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_empresa`)
);
-- Estructura de tabla para la tabla `roles`
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `rol_roles` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_roles` tinyint(1) NOT NULL,
  `id_rol` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ;
-- Estructura de tabla para la tabla `usuario`
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario`INT AUTO_INCREMENT,
  `correo_usuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenia_usuario` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_usuario` tinyint(1) NOT NULL,
  `fechacreacion_usuario` datetime NOT NULL,
  `id_empresa` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_rol` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa),
  FOREIGN KEY (id_empresa) REFERENCES roles(id_empresa)
);

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` INT AUTO_INCREMENT 		,
  `id_usuario` INT NOT NULL,
  `nombre` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `fechanacimiento_cliente` datetime NOT NULL,
  `identificacion_cliente` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_cliente` tinyint(1) NOT NULL,
  `fechacreacion_cliente` datetime NOT NULL,
    PRIMARY KEY (`id_cliente`),
  FOREIGN KEY (id_usuario) REFERENCES Usuarios (`id_usuario`)
);

-- Estructura de tabla para la tabla `cupon`
DROP TABLE IF EXISTS `cupon`;
CREATE TABLE IF NOT EXISTS `cupon` (
  `id_cupon` varchar(7) COLLATE utf8_spanish2_ci NOT NULL,
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
  `imagen` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cupon`),
  FOREIGN KEY (id_empresa) REFERENCES empresa (`id_empresa`)
);
-- Estructura de tabla para la tabla `ventas`
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` INT AUTO_INCREMENT,
  `id_cupon` VARCHAR(7) NOT NULL,
  `id_cliente` INT NOT NULL,
  `cantidad` int not null,
  `fecha_compra_ventas` datetime NOT NULL,
  `estado_pago_ventas` tinyint(1) NOT NULL,
  `estado_canje_ventas` binary(10) NOT NULL,
  `fecha_canje_ventas` datetime NOT NULL,
    PRIMARY KEY (`id_venta`),
  FOREIGN KEY (id_cupon) REFERENCES cupon(`id_cupon`),
  FOREIGN KEY (id_cliente) REFERENCES cliente(`id_cliente`)
) ;

-- Datos para la tabla `cliente`
INSERT INTO `cliente` ( `id_usuario`, `nombre`, `fechanacimiento_cliente`, `identificacion_cliente`, `estado_cliente`, `fechacreacion_cliente`) VALUES
(2, 'JUAN JOSE ', '2023-04-06 22:09:33', '067846348', 1, '2023-04-06 22:09:33');

INSERT INTO `cupon` (`id_cupon`, `titulo_cupon`, `precio_regular_cupon`, `precio_oferta_cupon`, `fecha_inicio_of_cupon`, `fecha_final_of_cupon`, `fecha_limite_cupon`, `descripcion_cupon`, `cantidad_cupon`, `estado_cupon`, `id_empresa`, `imagen`) VALUES
('CUP0001', 'mar de vida spa', 60, 19, '2023-04-10 03:00:28', '2023-04-20 21:00:28', '2023-04-25 21:00:28', '¡Paga $19 en Lugar de $60 por 2 Masajes Relajantes + 2 Masajes de Piedras Calientes + 2 Masajes Craneofacial + 2 Reflexologías!', 20, 1, 'EMP03', 'IMG0001'),
('CUP0002', 'TRATAMIENTO CELULAS', 49, 10, '2023-04-12 21:00:28', '2023-04-29 21:00:28', '2023-05-06 21:00:28', '¡Paga $10 en Lugar de $49 por Tratamiento de Células Madre con Uva Macerada + Corte con Split Ender Pro o Cauterización Infrarroja + Lavado Desintoxicante + Planchado + Aplicación de Gotas!', 20, 1, 'EMP04', 'IMG0002'),
('CUP0003', 'DON LI', 23.96, 11.98, '2023-04-16 21:11:49', '2023-04-30 21:11:49', '2023-05-14 21:11:49', '¡Paga $11.98 en Lugar de $23.96 por Menú para 2: Pollo de Especialidad a Elección entre Terikayi, Agridulce o en Salsa Naranja + 1 Bowl Grande de Arroz Blanco + 1 Orden de Wantanes de Pollo + 1 Pichel de Té Verde o de Melocotón!', 60, 1, 'EMP05', 'IMG0003'),
('CUP0004', 'LU DE MIEL', 165, 25, '2023-04-11 03:14:15', '2023-04-28 21:14:26', '2023-05-05 21:14:26', '¡Paga $25 en Vez de $165 por Alisado de la Exclusiva Marca Lu de Melo a Elección entre Samba (Aceite de Coco), Guaraná, Chocolate, Argán o Do Brasil Acai + Potencializador Photon Lizze Supreme + Lavado Detox + Mascarilla Hidratante y Más!', 10, 1, 'EMP06', 'IMG0004'),
('CUP0005', '28 EXAMENES DE LAB', 147.5, 18, '2023-04-11 03:14:15', '2023-04-20 21:14:26', '2023-04-27 21:14:26', '¡Paga $18 en Lugar de $147.50 por 28 Exámenes de Laboratorio Clínico: Glucosa, Colesterol, Trigliceridos, Creatinina y Más!', 5, 1, 'EMP07', 'IMG0005'),
('CUP0006', 'OFERTA HAMBURGUESAS', 17.98, 9, '2023-04-19 21:14:26', '2023-04-29 21:14:26', '2023-05-13 21:14:26', '¡Paga $9 en Lugar de $17.98 por 2 Hamburguesas a Elección entre Chanchona, Gordibuena, Burguesita, Camarón Vaquero o Maximus Gordelius + Papas Fritas!', 100, 1, 'EMP08', 'IMG0006'),
('CUP0007', 'RELLENOS DENTALES', 135, 25, '2023-04-11 03:14:15', '2023-04-21 21:14:26', '2023-05-05 21:14:26', '¡Paga $25 en Lugar de $135 por 3 Rellenos o 4 Sellantes + Limpieza con Ultrasonido + Aplicación de Flúor + Diagnostico con Cámara Intraoral + Evaluación de Ortodoncia!', 50, 1, 'EMP09', 'IMG0007'),
('CUP0008', 'LIMPIEZA FACIAL', 190, 20, '2023-04-11 03:14:15', '2023-04-30 21:14:26', '2023-05-14 21:14:26', '¡Paga $20 en Lugar de $190 por 2 Sesiones de Limpieza Facial Profunda con: 1 Microdermoabrasión con Punta de Diamante + 1 Extracción de Puntos Negros con Vapor de Ozono + 2 Exfoliaciones + 2 Aplicaciones de Serum + 2 Crioterapias y Más!', 20, 1, 'EMP10', 'IMG0008'),
('CUP0009', 'ALISADO DE PELO', 190, 29, '2023-04-11 03:14:15', '2023-04-26 21:14:26', '2023-05-03 21:14:26', '¡Paga $29 en Lugar de $190 por Alisado de Taninoplastía Copacabana de La Exclusiva Marca Lu de Melo + Potencializador Photon Lizze Supreme + Lavado Detox + Mascarilla Capilar Hidratante + Limpieza de Puntas + Gotas de Argán!', 10, 1, 'EMP11', 'IMG0009'),
('CUP0010', 'OFERTA BRACKETS ', 420, 49, '2023-04-11 03:14:15', '2023-04-30 21:14:26', '2023-05-07 21:14:26', '¡Paga $49 en Lugar de $420 por Colocación de Brackets Metálicos + Evaluación y Diagnóstico Clínico + Fotografías y Modelo de Estudio + 1 Consulta de Control + 1 Limpieza Dental!', 10, 1, 'EMP12', 'IMG0010'),
('CUP0011', 'LIMPIEZA DE CISTERNA', 55, 23, '2023-04-17 21:14:26', '2023-04-24 21:14:26', '2023-05-08 21:14:26', '¡Paga $23 en Lugar de $55 por Limpieza y Desinfección de Cisterna!', 50, 1, 'EMP13', 'IMG0011'),
('CUP0012', 'OFERTA DE CEJAS', 50, 15, '2023-04-11 03:14:15', '2023-04-17 21:14:26', '2023-04-24 21:14:26', '¡Paga $15 en Lugar de $50 por Set de Pestañas Naturales o Lifting de Pestañas con Pigmento + Diseño y Depilación de Cejas + Laminado de Cejas + Pigmento en Cejas!', 90, 1, 'EMP14', 'IMG0012'),
('CUP0013', 'OFERTA DELINEADO', 74, 35, '2023-05-01 21:14:26', '2023-05-31 21:14:26', '2023-06-14 21:14:26', '¡Paga $35 en Lugar de $74 por Delineado Permanente de Ojos (Superior o Inferior) + Depilación y Diseño de Cejas!', 500, 1, 'EMP15', 'IMG0013'),
('CUP0014', 'REJUVENECIMIENTO', 350, 30, '2023-05-01 21:14:26', '2023-05-15 21:14:26', '2023-05-29 21:14:26', '¡Paga $30 en Lugar de $350 por Rejuvenecimiento Facial con: 1 Sesión de Plasma Rico en Plaquetas con Dermapen + 1 Microdermoabrasión con Punta de Diamante + 1 Mascarilla Natural de Miel o Pepino con Altafrecuencia!', 100, 1, 'EMP16', 'IMG0014'),
('CUP0015', 'SESION DE LASER', 150, 30, '2023-04-11 03:14:15', '2023-04-30 21:14:26', '2023-05-14 21:14:26', '¡Paga $30 en Lugar de $150 por 1 Sesión Láser para Eliminar Arañas Vasculares + Consulta Médica!', 50, 1, 'EMP17', 'IMG0015'),
('CUP0016', 'LIMPIEZA DENTAL', 105, 12, '2023-04-11 03:14:15', '2023-04-29 21:14:26', '2023-05-13 21:14:26', '¡Paga $12 en Lugar de $105 por Limpieza Dental con Ultrasonido + Pulido + Consulta y Diagnóstico Bucodental + Evaluación de Cordales + 1 Radiografía Periapical Digital!', 5, 1, 'EMP18', 'IMG0016'),
('CUP0017', 'PRESOTERAPIA', 40, 12, '2023-04-20 21:14:26', '2023-04-30 21:14:26', '2023-05-14 21:14:26', '¡Paga $12 en Lugar de $40 por 1 Sesión de Presoterapia + 1 Masaje de Cuello y Espalda + 1 Terapia TENS para Aliviar Dolores y Contracturas Musculares!', 50, 1, 'EMP19', 'IMG0017'),
('CUP0018', 'ESTETICA', 200, 22, '2023-06-01 21:14:26', '2023-06-30 21:14:26', '2023-07-31 21:14:26', '¡Paga $22 en vez de $200 por Tratamiento \"GLUPACK 4 en 1\" + Bono de 2 Limpiezas Faciales: Levanta los Glúteos, Reduce Las Piernas, Moldea Las Caderas y Elimina La Celulitis con: 5 Nanofrecuencias Brasileñas + 3 Maderoterapias + 3 Lumicell y Más!', 100, 1, 'EMP20', 'IMG0018'),
('CUP0019', 'CHEQUEO DE ORGANOS', 50, 10, '2023-04-11 03:14:15', '2023-04-30 21:14:26', '2023-05-31 21:14:26', '¡Paga $10 en Lugar de $50 por Análisis Cuántico de Bioresonancia Magnética (Chequeo Computarizado de Todos los Órganos)!', 50, 1, 'EMP21', 'IMG0019'),
('CUP0020', 'PERFORACION DE OREJA', 25, 10, '2023-04-11 03:47:37', '2023-04-18 21:47:37', '2023-05-09 21:47:37', '¡Paga $10 en Lugar de $25 por 1 Perforación en Oreja, Ombligo o Nariz + Pieza Básica!', 65, 1, 'EMP22', 'IMG0020');
-- Volcado de datos para la tabla `empresa`
INSERT INTO `empresa` (`id_empresa`, `nombre_empresa`,`comision_empresa`, `estado_empresa`, `fechacreacion_empresa`, `rubro_empresa`) VALUES
('EMP01', 'Crew Co', 0, 1, '2023-04-06 21:51:17', 'ADMINISTRADOR'),
('EMP03', 'Las Magnolias Spa ', 0.3, 1, '2023-04-11 02:42:41', 'SPA'),
('EMP04', 'Diva Violeta Spa & Beauty Salon', 0.4, 1, '2023-04-11 02:42:41', 'BELLEZA Y RELAJACION '),
('EMP02', 'Thrive Market', 0, 1, '2023-04-11 02:19:08', 'CLIENTE'),
('EMP05', 'Rustika Restaurante', 0.5, 1, '2023-04-11 02:42:41', 'COMIDA '),
('EMP06', 'Makeover Beauty Supply', 0.2, 1, '2023-04-11 02:42:41', 'COSMETICO'),
('EMP07', 'Sero-Lab', 0.1, 1, '2023-04-11 02:42:41', 'LABORATORIO CLINICO'),
('EMP08', 'El Sazón De La Abuela', 0.1, 1, '2023-04-11 02:42:41', 'COMIDA '),
('EMP09', 'Avodent Clinica Dental', 0.2, 1, '2023-04-11 02:42:41', 'ODONTOLOGIA'),
('EMP10', 'DreamBeaty Skin', 0.4, 1, '2023-04-11 02:42:41', 'LIMPIEZA FACIAL'),
('EMP11', 'Belleza Glam', 0.15, 1, '2023-04-11 02:42:41', 'COSMETICO'),
('EMP12', 'Ortonova', 0.25, 1, '2023-04-11 02:42:41', 'ODONTOLOGIA'),
('EMP13', 'EcoClean', 0.3, 1, '2023-04-11 02:42:41', 'LIMPIEZA'),
('EMP14', 'Claro de Luna Salon', 0.5, 1, '2023-04-11 02:42:41', 'BELLEZA'),
('EMP15', 'Essence Salon', 0.2, 1, '2023-04-11 02:42:41', 'BELLEZA'),
('EMP16', 'Midas Touch  Salon', 0.3, 1, '2023-04-11 02:42:41', 'BELLEZA'),
('EMP17', 'Bluepearl Spa', 0.4, 1, '2023-04-11 02:42:41', 'SPA'),
('EMP18', 'Clínica Dental Smiling', 0.5, 1, '2023-04-11 02:42:41', 'ODONTOLOGIA'),
('EMP19', 'Beauty Lair Salon', 0.1, 1, '2023-04-11 02:42:41', 'BELLEZA'),
('EMP20', 'Kinesalud', 0.4, 1, '2023-04-11 02:42:41', 'MEDICINA'),
('EMP21', 'Medical Supply Co', 0.4, 1, '2023-04-11 02:58:51', 'BIOMEDICA'),
('EMP22', 'Pagoda Piercing', 0.3, 1, '2023-04-11 02:58:51', 'PERFORACION');

-- Volcado de datos para la tabla `usuario`
INSERT INTO `usuario` ( `correo_usuario`, `contrasenia_usuario`, `estado_usuario`, `fechacreacion_usuario`, `id_empresa`, `id_rol`) VALUES
('admin@admin.com', SHA2('admin',256), 1, '2023-04-06 21:48:26', 'EMP01', 'ROL01'),
('usuario@usuario.com',  SHA2('123456',256) , 1, '2023-04-11 02:20:55', NULL, 'ROL02');
INSERT INTO `usuario` ( `correo_usuario`, `contrasenia_usuario`, `estado_usuario`, `fechacreacion_usuario`, `id_empresa`, `id_rol`) VALUES
('prueba@usuario.com',  SHA2('123456',256) , 1, '2023-04-11 02:20:55', NULL, 'ROL02');

INSERT INTO `usuario` ( `correo_usuario`, `contrasenia_usuario`, `estado_usuario`, `id_rol`) VALUES
('prueba2@usuario.com',  SHA2('1234',256) , 1, 'ROL02');
SELECT MAX(id_usuario)FROM Usuario;
INSERT INTO `cliente` ( `id_usuario`, `nombre`, `fechanacimiento_cliente`, `identificacion_cliente`, `estado_cliente`) VALUES
(4, 'EDUAROD MARTINEZ ', '2023-04-06 22:09:33', '067846348', 1);

SELECT MAX(id_cliente)FROM cliente;
-- Volcado de datos para la tabla `roles`
INSERT INTO `roles` (`rol_roles`, `estado_roles`, `id_rol`) VALUES
('administrador', 1, 'ROL01'),
('cliente', 1, 'ROL02');


Select U.id_usuario,U.id_rol, A.nombre from usuario as U
INNER JOIN cliente as A on U.id_usuario=A.id_usuario
WHERE U.correo_usuario='prueba2@usuario.com' AND U.contrasenia_usuario=SHA2('1234',256)

