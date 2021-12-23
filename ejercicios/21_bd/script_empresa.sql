CREATE DATABASE IF NOT EXISTS empresa;
USE EMPRESA;

CREATE TABLE usuario(
	id int(255) auto_increment not null,
	nombre varchar(100) not null,
	password varchar(255) not null,
 	rol int(10) not null,
	constraint pk_usuarios primary key(id)
)engine=InnoDb;

INSERT INTO usuario(nombre, clave, rol) VALUES('Susana', '44444', '0');

