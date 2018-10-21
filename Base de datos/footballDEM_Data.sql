#SELECCIONAMOS LA BASE DE DATOS
USE footballDEM;

#VALORES PARA LA TABLA 'Usuario'
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('walter','root','Administrador');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('admin','root','Administrador');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('luis','ingeniebrios','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('diego','niupi','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('francisco','equipo','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('ginac','abejas','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('orozco','campesinos','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('yuca','malumas','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('rodo','valler','Estudiante');
INSERT INTO Usuario(Usuario, Pass, Tipo) VALUES('chelis','dreamteam','Estudiante');


#VALORES PARA LA TABLA 'Alumno'
#Ingeniebrios
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Mauricio', 'Calderón Carmona', 810179, 26, 'Nutrición');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Carlos', 'Durán Carmona', 812094, 23, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jonatan Rubén', 'Esparza Villagómez', 810277, 25, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Fernando', 'Gonzalez Valtierra', 810324, 25, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José María', 'Guerrero Lara', 810229, 23, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Sergio', 'López Ruíz', 810299, 24, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Aldo Santiago', 'Martínez Acosta', 907203, 28, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Juan de Dios ', 'Martínez Arellano', 402270, 24, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jesús Alberto', 'Martínez Gaytán', 755589, 25, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Walter Alejandro', 'Moreno Ramírez', 810243, 22, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Luis Enrique', 'Pérez Rodríguez', 810244, 23, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José Baltazar', 'Ramírez Rodríguez', 909793, 25, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jesús Alberto', 'Vieyra Cintora', 810412, 24, 'ICE');

#Niupi
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Diego Noel', 'Cornejo Sánchez', 757401, 26, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Juan Diego', 'Almanza Lémus', 810428, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Oscar', 'Angiano Cortés', 734793, 30, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Eduardo', 'Nieto Cardoso', 911494, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Eduardo', 'Cueto Martínez', 810439, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Javier', 'Calderón Carmona', 810474, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Cristian Miguel', 'Pérez Rodríguez', 000000, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Irving Eduardo', 'Alvarado Armenta', 912393, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José Francisco', 'González Gallardo', 145699, 23, 'LGE');

#Sin nombre
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Juan Pablo', 'Zavala Paramo', 810380, 22, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jesús', 'Torres Carmona', 810417, 22, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Francisco David', 'Gómez Pérez', 810415, 22, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jesús Alberto', 'Calderón', 810339, 22, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Cristian', 'Almanza Armenta', 810347, 22, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Bernardo', 'Quintino Guzmán', 810348, 22, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José Jeovanni', 'Olmos Zavala', 810349, 22, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Luis Enrique', 'Martínez', 810485, 22, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Miguel', 'Martínez León', 909754, 28, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Sergio', 'Núñes Santoyo', 810419, 22, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Armando Israel', 'Castillo López', 170771, 22, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jonathan Leobardo', 'Miranda Porras', 911171, 22, 'LEI');

#Abejas Sport
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Iván Manuel', 'Parra MArtínez', 145851, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José Guadalupe', 'Rodríguez Rodríguez', 145721, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Oscar Alberto', 'Raya Cruz', 765909, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Alan', 'Gallardo Flores', 402803, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Mauricio', 'Muños Ponce', 145345, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Alexis Ramsés', 'Gómez Guzmán', 402682, 23, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Raimundo', 'Bedoya Sosa', 770516, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José Alexis', 'Flores Guzmán', 146006, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jorge', 'Rodríguez Rosas', 146017, 21, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Andrés', 'Rodríguez Núñes', 763346, 21, 'LGE');

#Campesinos
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Oscar', 'Ortega', 111111, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José', 'Ruíz Orozco', 111112, 28, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Fernando', 'Bedoya', 111113, 24, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Javier', 'Aguilera', 111114, 27, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Edgar', 'Martínez', 111115, 23, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Nicolas', 'Chávez', 111116, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Rodrigo', 'González', 111117, 24, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Daniel', 'Vazquez', 111118, 22, 'LGE');

#Maluma Babys
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Dylan', 'Rodríguez', 222221, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Yuca', 'Rojo', 222222, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Yuca', 'Verde', 222223, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Armando', 'Casas', 222224, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Luis', 'Ramírez', 222225, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Fernando', 'Farfan', 222226, 24, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Alejandro', 'Almanza', 222227, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Pablo', 'García', 222228, 23, 'LGE');

#El Valler
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Rodolfo', 'Valle', 333331, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Manuel', 'Valle', 333332, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Layun', 'Desmayos', 333333, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Ulises', 'Temblores', 333334, 21, 'ISC');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Alberto', 'PAramo', 333335, 21, 'ICE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Alfredo', 'Bibian', 333336, 23, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Rodrigo', 'Tellez', 333337, 22, 'LGE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Alfonzo', 'Pérez', 333338, 21, 'ICE');

#Dream Team
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('José Luis', 'Corona Meléndez', 143879, 29, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Victor', 'Figueroa Chávez', 740291, 26, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Miguel Ángel', 'Valdes Ochoa', 810150, 29, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Sergio Alan', 'Orrala Silva', 146472, 29, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Reynaldo', 'Reynoso Godínez', 308113, 27, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Luis Alejandro', 'Zendejas Andrade', 143424, 29, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('David', 'Sánchez Guzmán', 441327, 30, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Edwin Miguel', 'Lara Espinoza', 907202, 26, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Esaú', 'González Villagómez', 907210, 26, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Jacob', 'González Villagómez', 907211, 26, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Héctor Ghandi', 'Flores Saldívar', 335912, 28, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Carlos Leopoldo', 'Rojas Delgado', 145656, 27, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Sergio Noé', 'Calderón Andrade', 145125, 26, 'MIAE');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Uriel', 'Calderón Uribe', 906201, 28, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Iván', 'Núñez García', 810127, 27, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Luis Mario', 'Morales Villagómez', 810010, 29, 'MIEA');
INSERT INTO Alumno(Nombre, Apellidos, NUA, Edad, Carrera) VALUES
('Ignacio', 'Contreras Contreras', 810213, 26, 'MIEA');


#VALORES PARA LA TABLA 'Equipo'
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Ingeniebrios','white',7,6,0,1,10,0,10,18);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Niupi','Azul',7,7,0,0,0,10,-10,21);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Sin nombre','red',7,2,0,5,0,5,0,6);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Abejas sport','orange',7,1,1,5,3,5,-2,5);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Campesinos','green',7,4,0,3,5,3,2,12);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Maluma babys','black',7,1,0,6,0,20,-20,3);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('El valler','yellow',7,1,2,4,0,5,0,6);
INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES
('Dream team','gray',7,4,1,2,5,0,0,13);

#VALORES PARA LA TABLA 'Jugador'
#Ingeniebrios
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (1,1,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (2,1,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (3,1,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (4,1,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (5,1,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (6,1,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (7,1,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (8,1,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (9,1,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (10,1,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (11,1,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (12,1,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (13,1,'Por',0);

#Niupi
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (14,2,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (15,2,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (16,2,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (17,2,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (18,2,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (19,2,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (20,2,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (21,2,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (22,2,'Por',0);

#Un equipo no tiene nombre
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (23,3,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (24,3,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (25,3,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (26,3,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (27,3,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (28,3,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (29,3,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (30,3,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (31,3,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (32,3,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (33,3,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (34,3,'Med',0);

#Abejas Sport
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (35,4,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (36,4,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (37,4,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (38,4,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (39,4,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (40,4,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (41,4,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (42,4,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (43,4,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (44,4,'Del',0);

#Campesinos
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (45,5,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (46,5,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (47,5,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (48,5,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (49,5,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (50,5,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (51,5,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (52,5,'Del',0);

#Maluma Babys
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (53,6,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (54,6,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (55,6,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (56,6,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (57,6,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (58,6,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (59,6,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (60,6,'Del',0);

#El Valler
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (61,7,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (62,7,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (63,7,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (64,7,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (65,7,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (66,7,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (67,7,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (68,7,'Del',0);

#Dream Team
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (69,8,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (70,8,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (71,8,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (72,8,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (73,8,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (74,8,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (75,8,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (76,8,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (77,8,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (78,8,'Del',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (79,8,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (80,8,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (81,8,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (82,8,'Def',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (83,8,'Med',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (84,8,'Por',0);
INSERT INTO Jugador(ID_Alumno, ID_Equipo, Posicion, Goles_Marcados) VALUES (85,8,'Del',0);


#VALORES PARA LA TABLA 'Arbitro'
INSERT INTO Arbitro(ID_Alumno) VALUES(16); #Monki
INSERT INTO Arbitro(ID_Alumno) VALUES(20); #Mosti
INSERT INTO Arbitro(ID_Alumno) VALUES(46); #Orozco

#VALORES PARA LA TABLA 'Semestre'
INSERT INTO Semestre(Semestre) VALUES('Ene-Jun 2018');

#VALORES PARA LA TABLA 'Jornada'
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 1, '2017-09-20');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 1, '2017-09-20');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 1, '2017-09-20');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 1, '2017-09-20');

INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 2, '2017-09-27');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 2, '2017-09-27');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 2, '2017-09-27');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 2, '2017-09-27');

INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 3, '2017-10-04');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 3, '2017-10-04');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 3, '2017-10-04');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 3, '2017-10-04');

INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 4, '2017-10-11');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 4, '2017-10-11');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 4, '2017-10-11');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 4, '2017-10-11');

INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 5, '2017-10-18');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 5, '2017-10-18');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 5, '2017-10-18');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 5, '2017-10-18');

INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 6, '2017-10-25');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 6, '2017-10-25');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 6, '2017-10-25');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 6, '2017-10-25');

INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 7, '2017-11-01');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 7, '2017-11-01');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 7, '2017-11-01');
INSERT INTO Jornada(ID_Semestre, Num_Jornada, Fecha) VALUES (1, 7, '2017-11-01');

#VALORES PARA LA TABLA 'Partido'
#1
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(1, 3, 'Ingeniebrios', 4, 'Niupi', 5, '2017-09-20', '08:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(1, 1, 'Campesinos', 6, 'Maluma babys', 3, '2017-09-20', '09:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(1, 3, 'Sin nombre', 4, 'Abejas sport', 6, '2017-09-20', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(1, 2, 'Dream team', 6, 'El valler', 3, '2017-09-20', '11:00');

#2
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(2, 1, 'Malumas babys', 4, 'Sin nombre', 4, '2017-09-27', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(2, 1, 'El valler', 6, 'Abejas sport', 3, '2017-09-27', '11:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(2, 1, 'Campesinos', 4, 'Niupi', 6, '2017-09-27', '12:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(2, 1, 'Dream team', 6, 'Ingeniebrios', 3, '2017-09-27', '01:00');

#3
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(3, 1, 'Malumas babys', 4, 'Sin nombre', 4, '2017-10-04', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(3, 1, 'El valler', 6, 'Abejas sport', 3, '2017-10-04', '11:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(3, 1, 'Campesinos', 4, 'Niupi', 6, '2017-10-04', '12:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(3, 1, 'Dream team', 6, 'Ingeniebrios', 3, '2017-10-04', '01:00');

#4
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(4, 1, 'Malumas babys', 4, 'Sin nombre', 4, '2017-10-11', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(4, 1, 'El valler', 6, 'Abejas sport', 3, '2017-10-11', '11:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(4, 1, 'Campesinos', 4, 'Niupi', 6, '2017-10-11', '12:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(4, 1, 'Dream team', 6, 'Ingeniebrios', 3, '2017-10-11', '01:00');

#5
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(5, 1, 'Malumas babys', 4, 'Sin nombre', 4, '2017-10-18', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(5, 1, 'El valler', 6, 'Abejas sport', 3, '2017-10-18', '11:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(5, 1, 'Campesinos', 4, 'Niupi', 6, '2017-10-18', '12:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(5, 1, 'Dream team', 6, 'Ingeniebrios', 3, '2017-10-18', '01:00');

#6
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(6, 1, 'Malumas babys', 4, 'Sin nombre', 4, '2017-10-25', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(6, 1, 'El valler', 6, 'Abejas sport', 3, '2017-10-25', '11:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(6, 1, 'Campesinos', 4, 'Niupi', 6, '2017-10-25', '12:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(6, 1, 'Dream team', 6, 'Ingeniebrios', 3, '2017-10-25', '01:00');

#7
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(7, 1, 'Malumas babys', 4, 'Sin nombre', 4, '2017-11-01', '10:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(7, 1, 'El valler', 6, 'Abejas sport', 3, '2017-11-01', '11:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(7, 1, 'Campesinos', 4, 'Niupi', 6, '2017-11-01', '12:00');
INSERT INTO Partido(ID_Jornada, ID_Arbitro, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora) VALUES
(7, 1, 'Dream team', 6, 'Ingeniebrios', 3, '2017-11-01', '01:00');
