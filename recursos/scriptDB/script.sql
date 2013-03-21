/*
Created		14/03/2013
Modified		20/03/2013
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/

















drop table IF EXISTS tarea;
drop table IF EXISTS comentario;
drop table IF EXISTS foro;
drop table IF EXISTS pagos;
drop table IF EXISTS modulo;
drop table IF EXISTS proyecto;
drop table IF EXISTS mensaje;
drop table IF EXISTS novedad;
drop table IF EXISTS cliente;
drop table IF EXISTS usuario;




Create table usuario (
	id_usuario Int NOT NULL AUTO_INCREMENT,
	user Varchar(30),
	pass Varchar(40),
	apellido Varchar(40),
	nombre Varchar(40),
	email Varchar(50),
	foto Varchar(500),
	UNIQUE (id_usuario),
 Primary Key (id_usuario)) ENGINE = MyISAM;

Create table cliente (
	id_cliente Int NOT NULL AUTO_INCREMENT,
	nombre Char(50),
	apellido Varchar(50),
	dni Int,
	telefono Varchar(12),
	celular Varchar(12),
	direccion Varchar(100),
	mail Varchar(100),
	UNIQUE (id_cliente),
	UNIQUE (dni),
 Primary Key (id_cliente)) ENGINE = MyISAM;

Create table novedad (
	id_novedad Int NOT NULL AUTO_INCREMENT,
	contenido Text,
	fecha Date,
	hora Time,
	id_usuario Int NOT NULL,
	UNIQUE (id_novedad),
 Primary Key (id_novedad,id_usuario)) ENGINE = MyISAM;

Create table mensaje (
	id_mensaje Int NOT NULL AUTO_INCREMENT,
	id_de Int,
	id_para Int,
	contenido Text,
	fecha Date,
	hora Time,
	UNIQUE (id_mensaje),
 Primary Key (id_mensaje)) ENGINE = MyISAM;

Create table proyecto (
	id_proyecto Int NOT NULL AUTO_INCREMENT,
	nombre Varchar(50),
	descripcion Varchar(200),
	fecha Date,
	id_cliente Int NOT NULL,
	id_usuario Int NOT NULL,
	UNIQUE (id_proyecto),
 Primary Key (id_proyecto,id_cliente,id_usuario)) ENGINE = MyISAM;

Create table modulo (
	id_modulo Int NOT NULL AUTO_INCREMENT,
	id_proyecto Int NOT NULL,
	nombre Varchar(50),
	descripcion Varchar(20),
	precio Float,
	pagado Bool,
	prioridad Varchar(20),
	estado Varchar(20),
	UNIQUE (id_modulo),
 Primary Key (id_modulo,id_proyecto)) ENGINE = MyISAM;

Create table pagos (
	id_pago Int NOT NULL AUTO_INCREMENT,
	fecha Date,
	id_modulo Int NOT NULL,
	UNIQUE (id_pago),
 Primary Key (id_pago,id_modulo)) ENGINE = MyISAM;

Create table foro (
	id_publicacion Int NOT NULL AUTO_INCREMENT,
	contenido Text,
	fecha Date,
	hora Time,
	id_usuario Int NOT NULL,
	UNIQUE (id_publicacion),
 Primary Key (id_publicacion,id_usuario)) ENGINE = MyISAM;

Create table comentario (
	id_comentario Int NOT NULL AUTO_INCREMENT,
	contenido Text,
	fecha Date,
	hora Time,
	id_publicacion Int NOT NULL,
	id_usuario Int NOT NULL,
	UNIQUE (id_comentario),
 Primary Key (id_comentario,id_publicacion,id_usuario)) ENGINE = MyISAM;

Create table tarea (
	id_tarea Int NOT NULL AUTO_INCREMENT,
	descripcion Text,
	fecha_inicio Date,
	fecha_fin Date,
	estado Varchar(20),
	id_usuario Int NOT NULL,
	id_modulo Int NOT NULL,
	UNIQUE (id_tarea),
 Primary Key (id_tarea,id_usuario,id_modulo)) ENGINE = MyISAM;












Alter table proyecto add Foreign Key (id_usuario) references usuario (id_usuario) on delete  restrict on update  restrict;
Alter table novedad add Foreign Key (id_usuario) references usuario (id_usuario) on delete  restrict on update  restrict;
Alter table foro add Foreign Key (id_usuario) references usuario (id_usuario) on delete  restrict on update  restrict;
Alter table tarea add Foreign Key (id_usuario) references usuario (id_usuario) on delete  restrict on update  restrict;
Alter table comentario add Foreign Key (id_usuario) references usuario (id_usuario) on delete  restrict on update  restrict;
Alter table proyecto add Foreign Key (id_cliente) references cliente (id_cliente) on delete  restrict on update  restrict;
Alter table modulo add Foreign Key (id_proyecto) references proyecto (id_proyecto) on delete  restrict on update  restrict;
Alter table pagos add Foreign Key (id_modulo) references modulo (id_modulo) on delete  restrict on update  restrict;
Alter table tarea add Foreign Key (id_modulo) references modulo (id_modulo) on delete  restrict on update  restrict;
Alter table comentario add Foreign Key (id_publicacion) references foro (id_publicacion) on delete  restrict on update  restrict;















/* Users permissions */






