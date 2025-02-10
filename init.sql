-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS alfabetiza;
USE alfabetiza;

-- Tabla de Administradores
CREATE TABLE IF NOT EXISTS administrador (
    cedulaAdministrador INT(11) NOT NULL,
    cargoAdministrador VARCHAR(45) NOT NULL,
    nombreAdministrador VARCHAR(45) NOT NULL,
    correoAdministrador VARCHAR(45) NOT NULL UNIQUE,
    contrasenaAdministrador VARCHAR(45) NOT NULL,
    PRIMARY KEY (cedulaAdministrador)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Estudiantes
CREATE TABLE IF NOT EXISTS estudiantes (
    numeroCarnetEstudiante INT(11) NOT NULL,
    nombreEstudiante VARCHAR(45) NOT NULL,
    apellidoEstudiante VARCHAR(45) NOT NULL,
    edadEstudiante INT(11) DEFAULT NULL,
    estadoEstudiante ENUM('Por Completar', 'Activo', 'Inactivo') DEFAULT 'Por Completar' NOT NULL,
    numeroDocumentoEstudiante INT(11) NOT NULL UNIQUE,
    seccionEstudiante INT(11) DEFAULT NULL,
    gradoEstudiante INT(11) DEFAULT NULL,
    horasServicio INT(10) UNSIGNED ZEROFILL NOT NULL DEFAULT 0,
    contrasenaEstudiante VARCHAR(45) NOT NULL,
    PRIMARY KEY (numeroCarnetEstudiante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Solicitar (Solicitudes de Servicio)
CREATE TABLE IF NOT EXISTS solicitar (
    numeroSolicitud INT(11) NOT NULL AUTO_INCREMENT,
    lugarServicio VARCHAR(45) DEFAULT NULL,
    fechaSolicitud DATE DEFAULT NULL,
    numeroCarnetEstudiante INT(11) NOT NULL,
    PRIMARY KEY (numeroSolicitud),
    FOREIGN KEY (numeroCarnetEstudiante) REFERENCES estudiantes(numeroCarnetEstudiante) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla de Asignar (Asignaciones de Servicio)
CREATE TABLE IF NOT EXISTS asignar (
    lugarServicio VARCHAR(45) NOT NULL,
    fechaAsignacion DATE NOT NULL,
    numeroSolicitud INT(11) NOT NULL,
    cedulaAdministrador INT(11) NOT NULL,
    PRIMARY KEY (numeroSolicitud),
    FOREIGN KEY (numeroSolicitud) REFERENCES solicitar(numeroSolicitud) ON DELETE NO ACTION ON UPDATE NO ACTION,
    FOREIGN KEY (cedulaAdministrador) REFERENCES administrador(cedulaAdministrador) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Crear o reemplazar vistas
DROP VIEW IF EXISTS InicioSesionEs;
CREATE VIEW InicioSesionEs AS
SELECT 
    es.nombreEstudiante, 
    es.apellidoEstudiante, 
    es.numeroCarnetEstudiante, 
    es.contrasenaEstudiante, 
    es.horasServicio
FROM estudiantes es;

DROP VIEW IF EXISTS InicioSesionAd;
CREATE VIEW InicioSesionAd AS
SELECT 
    nombreAdministrador, 
    cedulaAdministrador, 
    contrasenaAdministrador
FROM administrador;

DROP VIEW IF EXISTS SearchEstudiantes;
CREATE VIEW SearchEstudiantes AS
SELECT 
    e.numeroCarnetEstudiante, 
    e.nombreEstudiante, 
    e.apellidoEstudiante, 
    e.estadoEstudiante, 
    e.seccionEstudiante, 
    e.gradoEstudiante, 
    e.horasServicio, 
    so.fechaSolicitud, 
    so.numeroSolicitud, 
    so.lugarServicio
FROM estudiantes e
JOIN solicitar so ON e.numeroCarnetEstudiante = so.numeroCarnetEstudiante
ORDER BY so.fechaSolicitud ASC;

-- Insertar datos de prueba para Administradores
INSERT INTO administrador (cedulaAdministrador, cargoAdministrador, nombreAdministrador, correoAdministrador, contrasenaAdministrador) VALUES
(99999999, 'Profesor', 'Kenji', 'Kenji@inemjose.edu.co', 'Kenji1'),
(99999998, 'Coordinador Unidad', 'Hiroshi', 'Hiroshi@inemjose.edu.co', 'Hiroshi2'),
(99999997, 'Secretaria Bienestar', 'Sachiko', 'Sachiko@inemjose.edu.co', 'Sachiko3');

-- Insertar datos de prueba para Estudiantes
INSERT INTO estudiantes (numeroCarnetEstudiante, nombreEstudiante, apellidoEstudiante, edadEstudiante, estadoEstudiante, numeroDocumentoEstudiante, horasServicio, contrasenaEstudiante) VALUES
(100000, 'Antonio', 'Hernández', 19, 'Activo', 1000000000, 38, 'Hernandez8'),
(100001, 'Manuel', 'García', 18, 'Inactivo', 1000000001, 42, 'Garcia2'),
(100002, 'Jose', 'Martínez', 19, 'Activo', 1000000002, 57, 'Martinez1');

INSERT INTO estudiantes (numeroCarnetEstudiante, nombreEstudiante, apellidoEstudiante, edadEstudiante, numeroDocumentoEstudiante, horasServicio, contrasenaEstudiante) 
VALUES (200000, 'Jeronimo', 'Tobon', 18, 1011393181, 0, 'Jero14');


-- Insertar datos de prueba para Solicitar
INSERT INTO solicitar (lugarServicio, fechaSolicitud, numeroCarnetEstudiante) VALUES
('Restaurante Escolar', '2021-05-02', 100000),
('Talleres', '2021-10-13', 100001),
('Bienestar Estudiantil', '2021-06-22', 100002);

-- Insertar datos de prueba para Asignar
INSERT INTO asignar (numeroSolicitud, lugarServicio, fechaAsignacion, cedulaAdministrador) VALUES
(1, 'Restaurante Escolar', '2022-11-10', 99999999),
(2, 'Talleres', '2022-11-05', 99999998),
(3, 'Bienestar Estudiantil', '2022-11-21', 99999997);
