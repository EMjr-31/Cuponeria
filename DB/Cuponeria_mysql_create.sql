CREATE TABLE `Cupon` (
	`IDCupon` varchar(5) NOT NULL AUTO_INCREMENT,
	`Titulo_Cupon` varchar(20) NOT NULL AUTO_INCREMENT,
	`PrecioRegular_Cupon` FLOAT(5) NOT NULL AUTO_INCREMENT,
	`PrecioOferta_Cupon` FLOAT(5) NOT NULL AUTO_INCREMENT,
	`FechaInicioOferta_Cupon` DATETIME NOT NULL AUTO_INCREMENT,
	`FechaFinOferta_Cupon` DATETIME NOT NULL AUTO_INCREMENT,
	`FechaLimite_Cupon` DATETIME NOT NULL AUTO_INCREMENT,
	`Descripcion_Cupon` varchar(255) NOT NULL AUTO_INCREMENT,
	`Cantidad_Cupon` INT NOT NULL AUTO_INCREMENT,
	`Estado_Cupon` BOOLEAN NOT NULL AUTO_INCREMENT,
	`ID_Empresa` varchar NOT NULL,
	PRIMARY KEY (`IDCupon`)
);

CREATE TABLE `Cliente` (
	`ID_Cliente` varchar NOT NULL,
	`ID_Usuario` varchar NOT NULL,
	`Nombre_Cliente` varchar NOT NULL,
	`FechaNacimiento_Cliente` DATETIME NOT NULL,
	`Identificacion_Cliente` varchar NOT NULL,
	`Estado_Cliente` BOOLEAN NOT NULL,
	`FechaCreacion_Cliente` DATETIME NOT NULL
);

CREATE TABLE `Roles` (
	`ID_Rol` varchar NOT NULL AUTO_INCREMENT,
	`nombre _Rol` varchar NOT NULL AUTO_INCREMENT,
	`Estado_Rol` BOOLEAN NOT NULL,
	PRIMARY KEY (`ID_Rol`)
);

CREATE TABLE `Usuario` (
	`ID_Usuario` varchar NOT NULL,
	`Correo_Usuario` varchar NOT NULL,
	`Contrasenia_Usuario` varchar NOT NULL,
	`Estado_Usuario` varchar(255) NOT NULL,
	`FechaCreacion_Usuario` DATETIME NOT NULL,
	`ID_Empresa` varchar NOT NULL,
	`ID_Rol` varchar NOT NULL
);

CREATE TABLE `Ventas` (
	`ID_Venta` varchar NOT NULL,
	`ID_Cupon` varchar NOT NULL,
	`ID_Cliente` varchar NOT NULL,
	`Fechacompra_Venta` DATETIME NOT NULL,
	`EstadoPago_Venta` BOOLEAN NOT NULL,
	`EstadoCanje_Venta` BINARY NOT NULL,
	`FechaCanje_Venta` DATETIME NOT NULL
);

CREATE TABLE `Empresa` (
	`IDID_Empresa` varchar NOT NULL AUTO_INCREMENT,
	`ComisonI_Empresa` FLOAT NOT NULL AUTO_INCREMENT,
	`Estado_Empresa` BOOLEAN NOT NULL,
	`FechaCreacion_Empresa` DATETIME NOT NULL,
	`Rubro_Empresa` BINARY NOT NULL,
	PRIMARY KEY (`IDID_Empresa`)
);

ALTER TABLE `Cupon` ADD CONSTRAINT `Cupon_fk0` FOREIGN KEY (`ID_Empresa`) REFERENCES `Empresa`(`IDID_Empresa`);

ALTER TABLE `Cliente` ADD CONSTRAINT `Cliente_fk0` FOREIGN KEY (`ID_Usuario`) REFERENCES `Usuario`(`ID_Usuario`);

ALTER TABLE `Usuario` ADD CONSTRAINT `Usuario_fk0` FOREIGN KEY (`ID_Empresa`) REFERENCES `Empresa`(`IDID_Empresa`);

ALTER TABLE `Usuario` ADD CONSTRAINT `Usuario_fk1` FOREIGN KEY (`ID_Rol`) REFERENCES `Roles`(`ID_Rol`);

ALTER TABLE `Ventas` ADD CONSTRAINT `Ventas_fk0` FOREIGN KEY (`ID_Cupon`) REFERENCES `Cupon`(`IDCupon`);

ALTER TABLE `Ventas` ADD CONSTRAINT `Ventas_fk1` FOREIGN KEY (`ID_Cliente`) REFERENCES `Cliente`(`ID_Cliente`);







