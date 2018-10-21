USE footballDEM;
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES('INTER','BEIGE',0,0,0,0,0,0,0,0);

SELECT *FROM Equipo;
SELECT *FROM Jugador;
SELECT *FROM Alumno;
SELECT *FROM Jornada;
SELECT *FROM Partido;
SELECT *FROM Semestre;
SELECT *FROM Usuario;

SELECT *FROM Jugador INNER JOIN Alumno USING (ID_Alumno) WHERE Jugador.ID_Equipo IS NULL;
SELECT DISTINCT Num_Jornada FROM Jornada ORDER BY Num_Jornada ASC;
SELECT ID_Semestre, Semestre FROM Semestre;
SELECT *FROM Jornada ORDER BY Num_Jornada ASC;
SELECT COUNT(ID_Equipo) AS NumTeams FROM Equipo;
SELECT Num_Jornada, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora FROM Partido INNER JOIN Jornada ON Partido.ID_Jornada = Jornada.ID_Jornada WHERE Jornada.ID_Jornada = 1;
SELECT Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora FROM Partido INNER JOIN Jornada ON Partido.ID_Jornada = Jornada.ID_Jornada WHERE Jornada.ID_Jornada = 2;
SELECT *FROM Jornada ORDER BY Num_Jornada DESC LIMIT 1;
SELECT * FROM Jornada ORDER BY Num_Jornada DESC;
SELECT Nombre, Apellidos, Edad, NUA, CONVERT(Carrera USING utf8) AS Carrera FROM Alumno;

SELECT ID_Jugador, Nombre, Apellidos, Posicion, Goles_Marcados FROM Jugador INNER JOIN Alumno USING(ID_Alumno) WHERE ID_Equipo = 1;

SELECT Alumno.Nombre AS NameAlumno, Apellidos, NUA, Carrera, Equipo.Nombre AS NameTeam, Jugador.Goles_Marcados
FROM Alumno
INNER JOIN Jugador
ON Jugador.ID_Alumno = Alumno.ID_Alumno
INNER JOIN Equipo
ON Jugador.ID_Equipo = Equipo.ID_Equipo;

SELECT Alumno.Nombre AS NameAlumno, Apellidos, Equipo.Nombre AS NameTeam, Jugador.Goles_Marcados
FROM Alumno
INNER JOIN Jugador
ON Jugador.ID_Alumno = Alumno.ID_Alumno
INNER JOIN Equipo
ON Jugador.ID_Equipo = Equipo.ID_Equipo;

DELETE FROM Equipo WHERE ID_Equipo = 1;
DELETE FROM Semestre WHERE ID_Semestre = 4;

UPDATE Semestre SET Semestre = 'Walter' WHERE ID_Semestre = 1;
UPDATE Jugador SET Jugador.ID_Equipo = 1 WHERE ID_Jugador = 1;
UPDATE Equipo SET Nombre = 'Ingeniebrios', Color_Uniforme = 'rgb(100,100,0)' WHERE ID_Equipo = 1;
UPDATE Equipo SET Equipo.ID_Equipo = 0 WHERE ID_Equipo = 1;
UPDATE Jugador SET Jugador.ID_Equipo = 0 WHERE ID_Equipo = 1;
UPDATE Equipo SET PJ = 0, PG = 0, PE = 0, PP = 0, GA = 0, GR = 0, Diff = 0, Puntos = 0 WHERE ID_Equipo = 1;

DROP DATABASE footballDEM;
