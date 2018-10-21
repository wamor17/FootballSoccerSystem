CREATE DATABASE footballDEM;
USE footballDEM;

CREATE TABLE Usuario(
	ID_Usuario INT AUTO_INCREMENT NOT NULL,
    Usuario VARCHAR(25),
    Pass VARCHAR(25),
    Tipo VARCHAR(25),
    
    PRIMARY KEY(ID_Usuario)
) ENGINE = INNODB;

CREATE TABLE Alumno(
	ID_Alumno INT AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    Apellidos VARCHAR(50),
    NUA INT(6),
    Edad INT(2),
    Carrera VARCHAR(80),

    PRIMARY KEY (ID_Alumno)
) ENGINE = INNODB;

CREATE TABLE Equipo(
	ID_Equipo INT AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(50),
    Color_Uniforme VARCHAR(50),
    PJ TINYINT,
    PG TINYINT,
    PE TINYINT,
    PP TINYINT,
    GA TINYINT,
    GR TINYINT,
    Diff TINYINT,
    Puntos TINYINT,
    
    PRIMARY KEY (ID_Equipo)
) ENGINE = INNODB;

CREATE TABLE Jugador(
	ID_Jugador INT AUTO_INCREMENT NOT NULL,
    ID_Alumno INT NOT NULL,
    ID_Equipo INT,
    Posicion VARCHAR(15),
    Goles_Marcados TINYINT,
    
    PRIMARY KEY (ID_Jugador),
    FOREIGN KEY (ID_Alumno)
		REFERENCES Alumno(ID_Alumno),
	FOREIGN KEY (ID_Equipo)
		REFERENCES Equipo(ID_Equipo) ON DELETE SET NULL
) ENGINE = INNODB;

CREATE TABLE Arbitro(
	ID_Arbitro INT AUTO_INCREMENT NOT NULL,
	ID_Alumno INT NOT NULL,

    PRIMARY KEY (ID_Arbitro),
    FOREIGN KEY (ID_Alumno)
		REFERENCES Alumno(ID_Alumno)
) ENGINE = INNODB;

CREATE TABLE Semestre(
	ID_Semestre INT AUTO_INCREMENT NOT NULL,
    Semestre VARCHAR(20),

    PRIMARY KEY (ID_Semestre)
) ENGINE = INNODB;

CREATE TABLE Jornada(
	ID_Jornada INT AUTO_INCREMENT NOT NULL,
    ID_Semestre INT NOT NULL,
    Num_Jornada TINYINT,
    Fecha DATE,

    PRIMARY KEY (ID_Jornada),
    FOREIGN KEY (ID_Semestre)
		REFERENCES Semestre(ID_Semestre)
) ENGINE = INNODB;

CREATE TABLE Partido(
	ID_Partido INT AUTO_INCREMENT NOT NULL,
    ID_Jornada INT NOT NULL,
    ID_Arbitro INT NOT NULL,
	Equipo_1 VARCHAR(30),
    Goles_E1 TINYINT,
	Equipo_2 VARCHAR(30),
    Goles_E2 TINYINT,
    Dia DATE,
    Hora VARCHAR(10),

    PRIMARY KEY (ID_Partido),
	FOREIGN KEY (ID_Jornada)
		REFERENCES Jornada(ID_Jornada),
	FOREIGN KEY (ID_Arbitro)
		REFERENCES Arbitro(ID_Arbitro)
) ENGINE = INNODB;
