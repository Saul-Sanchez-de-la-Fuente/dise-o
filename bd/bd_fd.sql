CREATE DATABASE siiupv;

CREATE TABLE alumno(matricula int(7) NOT NULL PRIMARY KEY, nombre varchar(100) NOT NULL, apellido varchar(100) NOT NULL, grupo varchar(50), correo varchar(18) NOT NULL, contrasena varchar(50) NOT NULL);

CREATE TABLE materia(id varchar(10) NOT NULL PRIMARY KEY, nombre varchar(50) NOT NULL, profesor varchar(100) NOT NULL);

CREATE TABLE profesor(numEmp varchar(20) NOT NULL PRIMARY KEY, nombre varchar(100) NOT NULL, apellido varchar(100) NOT NULL);

ALTER TABLE alumno ADD FOREIGN KEY(grupo) REFERENCES materia(id);

ALTER TABLE materia ADD FOREIGN KEY(profesor) REFERENCES profesor(numEmp);

