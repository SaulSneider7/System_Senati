CREATE DATABASE system_senati;

CREATE TABLE perfiles(
    id_perfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

CREATE TABLE usuarios(
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_perfil INT,
    nombre VARCHAR(50),
    email VARCHAR(50),
    password text,
    FOREIGN KEY (id_perfil) REFERENCES perfiles(id_perfil)
);
-- Drop TABLE usuarios;
-- INSERTAR DATOS 
INSERT INTO perfiles (nombre) VALUES ('administrador');
INSERT INTO perfiles (nombre) VALUES ('usuario');
INSERT INTO perfiles (nombre) VALUES ('vendedor');

INSERT INTO usuarios (id_perfil, nombre, email, password) VALUES (1, 'Karina', 'karina@senati', '12345');
INSERT INTO usuarios (id_perfil, nombre, email, password) VALUES (1, 'Lorena', 'lorena@senati', '11111');