CREATE DATABASE libro_db;

-- TABLA PAIS
CREATE TABLE pais (
pais_id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(40) NOT NULL
);

-- TABLA EDITORIAL
CREATE TABLE editorial (
editorial_id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(40) NOT NULL,
pais_id INT,
FOREIGN KEY (pais_id) REFERENCES pais(pais_id) ON DELETE SET NULL
);

-- TABLA AUTOR
CREATE TABLE autor (
autor_id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(40) NOT NULL,
apellido VARCHAR(40) NOT NULL,
fecha_nacimiento DATE,
sexo VARCHAR(10),
pais_id INT,
FOREIGN KEY (pais_id) REFERENCES pais(pais_id) ON DELETE SET NULL
);

-- TABLA GENERO
CREATE TABLE genero (
genero_id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(40) NOT NULL,
descripcion VARCHAR(300)
);

-- TABLA IDIOMA
CREATE TABLE idioma (
idioma_id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(40) NOT NULL
);

-- TABLA PORTADA
CREATE TABLE portada (
portada_id INT PRIMARY KEY AUTO_INCREMENT,
tipo VARCHAR(40) NOT NULL,
descripcion VARCHAR(300)
);

-- TABLA LIBRO
CREATE TABLE libro (
  libro_id INT PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(150) NOT NULL,
  autor_id INT, -- FOREIGN KEY
  editorial_id INT, -- FOREIGN KEY
  pais_id INT, -- FOREIGN KEY
  fecha_publicacion DATE,
  edicion INT,
  genero_id INT, -- FOREIGN KEY
  idioma_id INT, -- FOREIGN KEY
  portada_id INT, -- FOREIGN KEY
  paginas INT,
  isbn VARCHAR(40),
  notas VARCHAR(300),
  FOREIGN KEY (autor_id) REFERENCES autor(autor_id) ON DELETE SET NULL,
  FOREIGN KEY (pais_id) REFERENCES pais(pais_id) ON DELETE SET NULL,
  FOREIGN KEY (editorial_id) REFERENCES editorial(editorial_id) ON DELETE SET NULL,
  FOREIGN KEY (genero_id) REFERENCES genero(genero_id) ON DELETE SET NULL,
  FOREIGN KEY (idioma_id) REFERENCES idioma(idioma_id) ON DELETE SET NULL,
  FOREIGN KEY (portada_id) REFERENCES portada(portada_id) ON DELETE SET NULL
);
-- ----------------------------------------------------------------------
-- Tipo de portadas
INSERT INTO portada(tipo, descripcion) VALUES ('Papel', 'Portada sencilla'); -- 1
INSERT INTO portada(tipo, descripcion) VALUES ('Dura', 'Portada especial'); -- 2
INSERT INTO portada(tipo, descripcion) VALUES('Especial', 'Portada especial'); -- 3

-- Ingresar paises
INSERT INTO pais (nombre) VALUES('Afganist??n');
INSERT INTO pais (nombre) VALUES('Islas Gland');
INSERT INTO pais (nombre) VALUES('Albania');
INSERT INTO pais (nombre) VALUES('Alemania');
INSERT INTO pais (nombre) VALUES('Andorra');
INSERT INTO pais (nombre) VALUES('Angola');
INSERT INTO pais (nombre) VALUES('Anguilla');
INSERT INTO pais (nombre) VALUES('Ant??rtida');
INSERT INTO pais (nombre) VALUES('Antigua y Barbuda');
INSERT INTO pais (nombre) VALUES('Antillas Holandesas');
INSERT INTO pais (nombre) VALUES('Arabia Saud??');
INSERT INTO pais (nombre) VALUES('Argelia');
INSERT INTO pais (nombre) VALUES('Argentina');
INSERT INTO pais (nombre) VALUES('Armenia');
INSERT INTO pais (nombre) VALUES('Aruba');
INSERT INTO pais (nombre) VALUES('Australia');
INSERT INTO pais (nombre) VALUES('Austria');
INSERT INTO pais (nombre) VALUES('Azerbaiy??n');
INSERT INTO pais (nombre) VALUES('Bahamas');
INSERT INTO pais (nombre) VALUES('Bahr??in');
INSERT INTO pais (nombre) VALUES('Bangladesh');
INSERT INTO pais (nombre) VALUES('Barbados');
INSERT INTO pais (nombre) VALUES('Bielorrusia');
INSERT INTO pais (nombre) VALUES('B??lgica');
INSERT INTO pais (nombre) VALUES('Belice');
INSERT INTO pais (nombre) VALUES('Benin');
INSERT INTO pais (nombre) VALUES('Bermudas');
INSERT INTO pais (nombre) VALUES('Bhut??n');
INSERT INTO pais (nombre) VALUES('Bolivia');
INSERT INTO pais (nombre) VALUES('Bosnia y Herzegovina');
INSERT INTO pais (nombre) VALUES('Botsuana');
INSERT INTO pais (nombre) VALUES('Isla Bouvet');
INSERT INTO pais (nombre) VALUES('Brasil');
INSERT INTO pais (nombre) VALUES('Brun??i');
INSERT INTO pais (nombre) VALUES('Bulgaria');
INSERT INTO pais (nombre) VALUES('Burkina Faso');
INSERT INTO pais (nombre) VALUES('Burundi');
INSERT INTO pais (nombre) VALUES('Cabo Verde');
INSERT INTO pais (nombre) VALUES('Islas Caim??n');
INSERT INTO pais (nombre) VALUES('Camboya');
INSERT INTO pais (nombre) VALUES('Camer??n');
INSERT INTO pais (nombre) VALUES('Canad??');
INSERT INTO pais (nombre) VALUES('Rep??blica Centroafricana');
INSERT INTO pais (nombre) VALUES('Chad');
INSERT INTO pais (nombre) VALUES('Rep??blica Checa');
INSERT INTO pais (nombre) VALUES('Chile');
INSERT INTO pais (nombre) VALUES('China');
INSERT INTO pais (nombre) VALUES('Chipre');
INSERT INTO pais (nombre) VALUES('Isla de Navidad');
INSERT INTO pais (nombre) VALUES('Ciudad del Vaticano');
INSERT INTO pais (nombre) VALUES('Islas Cocos');
INSERT INTO pais (nombre) VALUES('Colombia');
INSERT INTO pais (nombre) VALUES('Comoras');
INSERT INTO pais (nombre) VALUES('Rep??blica Democr??tica del Congo');
INSERT INTO pais (nombre) VALUES('Congo');
INSERT INTO pais (nombre) VALUES('Islas Cook');
INSERT INTO pais (nombre) VALUES('Corea del Norte');
INSERT INTO pais (nombre) VALUES('Corea del Sur');
INSERT INTO pais (nombre) VALUES('Costa de Marfil');
INSERT INTO pais (nombre) VALUES('Costa Rica');
INSERT INTO pais (nombre) VALUES('Croacia');
INSERT INTO pais (nombre) VALUES('Cuba');
INSERT INTO pais (nombre) VALUES('Dinamarca');
INSERT INTO pais (nombre) VALUES('Dominica');
INSERT INTO pais (nombre) VALUES('Rep??blica Dominicana');
INSERT INTO pais (nombre) VALUES('Ecuador');
INSERT INTO pais (nombre) VALUES('Egipto');
INSERT INTO pais (nombre) VALUES('El Salvador');
INSERT INTO pais (nombre) VALUES('Emiratos ??rabes Unidos');
INSERT INTO pais (nombre) VALUES('Eritrea');
INSERT INTO pais (nombre) VALUES('Eslovaquia');
INSERT INTO pais (nombre) VALUES('Eslovenia');
INSERT INTO pais (nombre) VALUES('Espa??a');
INSERT INTO pais (nombre) VALUES('Islas ultramarinas de Estados Unidos');
INSERT INTO pais (nombre) VALUES('Estados Unidos');
INSERT INTO pais (nombre) VALUES('Estonia');
INSERT INTO pais (nombre) VALUES('Etiop??a');
INSERT INTO pais (nombre) VALUES('Islas Feroe');
INSERT INTO pais (nombre) VALUES('Filipinas');
INSERT INTO pais (nombre) VALUES('Finlandia');
INSERT INTO pais (nombre) VALUES('Fiyi');
INSERT INTO pais (nombre) VALUES('Francia');
INSERT INTO pais (nombre) VALUES('Gab??n');
INSERT INTO pais (nombre) VALUES('Gambia');
INSERT INTO pais (nombre) VALUES('Georgia');
INSERT INTO pais (nombre) VALUES('Islas Georgias del Sur y Sandwich del Sur');
INSERT INTO pais (nombre) VALUES('Ghana');
INSERT INTO pais (nombre) VALUES('Gibraltar');
INSERT INTO pais (nombre) VALUES('Granada');
INSERT INTO pais (nombre) VALUES('Grecia');
INSERT INTO pais (nombre) VALUES('Groenlandia');
INSERT INTO pais (nombre) VALUES('Guadalupe');
INSERT INTO pais (nombre) VALUES('Guam');
INSERT INTO pais (nombre) VALUES('Guatemala');
INSERT INTO pais (nombre) VALUES('Guayana Francesa');
INSERT INTO pais (nombre) VALUES('Guinea');
INSERT INTO pais (nombre) VALUES('Guinea Ecuatorial');
INSERT INTO pais (nombre) VALUES('Guinea-Bissau');
INSERT INTO pais (nombre) VALUES('Guyana');
INSERT INTO pais (nombre) VALUES('Hait??');
INSERT INTO pais (nombre) VALUES('Islas Heard y McDonald');
INSERT INTO pais (nombre) VALUES('Honduras');
INSERT INTO pais (nombre) VALUES('Hong Kong');
INSERT INTO pais (nombre) VALUES('Hungr??a');
INSERT INTO pais (nombre) VALUES('India');
INSERT INTO pais (nombre) VALUES('Indonesia');
INSERT INTO pais (nombre) VALUES('Ir??n');
INSERT INTO pais (nombre) VALUES('Iraq');
INSERT INTO pais (nombre) VALUES('Irlanda');
INSERT INTO pais (nombre) VALUES('Islandia');
INSERT INTO pais (nombre) VALUES('Israel');
INSERT INTO pais (nombre) VALUES('Italia');
INSERT INTO pais (nombre) VALUES('Jamaica');
INSERT INTO pais (nombre) VALUES('Jap??n');
INSERT INTO pais (nombre) VALUES('Jordania');
INSERT INTO pais (nombre) VALUES('Kazajst??n');
INSERT INTO pais (nombre) VALUES('Kenia');
INSERT INTO pais (nombre) VALUES('Kirguist??n');
INSERT INTO pais (nombre) VALUES('Kiribati');
INSERT INTO pais (nombre) VALUES('Kuwait');
INSERT INTO pais (nombre) VALUES('Laos');
INSERT INTO pais (nombre) VALUES('Lesotho');
INSERT INTO pais (nombre) VALUES('Letonia');
INSERT INTO pais (nombre) VALUES('L??bano');
INSERT INTO pais (nombre) VALUES('Liberia');
INSERT INTO pais (nombre) VALUES('Libia');
INSERT INTO pais (nombre) VALUES('Liechtenstein');
INSERT INTO pais (nombre) VALUES('Lituania');
INSERT INTO pais (nombre) VALUES('Luxemburgo');
INSERT INTO pais (nombre) VALUES('Macao');
INSERT INTO pais (nombre) VALUES('ARY Macedonia');
INSERT INTO pais (nombre) VALUES('Madagascar');
INSERT INTO pais (nombre) VALUES('Malasia');
INSERT INTO pais (nombre) VALUES('Malawi');
INSERT INTO pais (nombre) VALUES('Maldivas');
INSERT INTO pais (nombre) VALUES('Mal??');
INSERT INTO pais (nombre) VALUES('Malta');
INSERT INTO pais (nombre) VALUES('Islas Malvinas');
INSERT INTO pais (nombre) VALUES('Islas Marianas del Norte');
INSERT INTO pais (nombre) VALUES('Marruecos');
INSERT INTO pais (nombre) VALUES('Islas Marshall');
INSERT INTO pais (nombre) VALUES('Martinica');
INSERT INTO pais (nombre) VALUES('Mauricio');
INSERT INTO pais (nombre) VALUES('Mauritania');
INSERT INTO pais (nombre) VALUES('Mayotte');
INSERT INTO pais (nombre) VALUES('M??xico');
INSERT INTO pais (nombre) VALUES('Micronesia');
INSERT INTO pais (nombre) VALUES('Moldavia');
INSERT INTO pais (nombre) VALUES('M??naco');
INSERT INTO pais (nombre) VALUES('Mongolia');
INSERT INTO pais (nombre) VALUES('Montserrat');
INSERT INTO pais (nombre) VALUES('Mozambique');
INSERT INTO pais (nombre) VALUES('Myanmar');
INSERT INTO pais (nombre) VALUES('Namibia');
INSERT INTO pais (nombre) VALUES('Nauru');
INSERT INTO pais (nombre) VALUES('Nepal');
INSERT INTO pais (nombre) VALUES('Nicaragua');
INSERT INTO pais (nombre) VALUES('N??ger');
INSERT INTO pais (nombre) VALUES('Nigeria');
INSERT INTO pais (nombre) VALUES('Niue');
INSERT INTO pais (nombre) VALUES('Isla Norfolk');
INSERT INTO pais (nombre) VALUES('Noruega');
INSERT INTO pais (nombre) VALUES('Nueva Caledonia');
INSERT INTO pais (nombre) VALUES('Nueva Zelanda');
INSERT INTO pais (nombre) VALUES('Om??n');
INSERT INTO pais (nombre) VALUES('Pa??ses Bajos');
INSERT INTO pais (nombre) VALUES('Pakist??n');
INSERT INTO pais (nombre) VALUES('Palau');
INSERT INTO pais (nombre) VALUES('Palestina');
INSERT INTO pais (nombre) VALUES('Panam??');
INSERT INTO pais (nombre) VALUES('Pap??a Nueva Guinea');
INSERT INTO pais (nombre) VALUES('Paraguay');
INSERT INTO pais (nombre) VALUES('Per??');
INSERT INTO pais (nombre) VALUES('Islas Pitcairn');
INSERT INTO pais (nombre) VALUES('Polinesia Francesa');
INSERT INTO pais (nombre) VALUES('Polonia');
INSERT INTO pais (nombre) VALUES('Portugal');
INSERT INTO pais (nombre) VALUES('Puerto Rico');
INSERT INTO pais (nombre) VALUES('Qatar');
INSERT INTO pais (nombre) VALUES('Reino Unido');
INSERT INTO pais (nombre) VALUES('Reuni??n');
INSERT INTO pais (nombre) VALUES('Ruanda');
INSERT INTO pais (nombre) VALUES('Rumania');
INSERT INTO pais (nombre) VALUES('Rusia');
INSERT INTO pais (nombre) VALUES('Sahara Occidental');
INSERT INTO pais (nombre) VALUES('Islas Salom??n');
INSERT INTO pais (nombre) VALUES('Samoa');
INSERT INTO pais (nombre) VALUES('Samoa Americana');
INSERT INTO pais (nombre) VALUES('San Crist??bal y Nevis');
INSERT INTO pais (nombre) VALUES('San Marino');
INSERT INTO pais (nombre) VALUES('San Pedro y Miquel??n');
INSERT INTO pais (nombre) VALUES('San Vicente y las Granadinas');
INSERT INTO pais (nombre) VALUES('Santa Helena');
INSERT INTO pais (nombre) VALUES('Santa Luc??a');
INSERT INTO pais (nombre) VALUES('Santo Tom?? y Pr??ncipe');
INSERT INTO pais (nombre) VALUES('Senegal');
INSERT INTO pais (nombre) VALUES('Serbia y Montenegro');
INSERT INTO pais (nombre) VALUES('Seychelles');
INSERT INTO pais (nombre) VALUES('Sierra Leona');
INSERT INTO pais (nombre) VALUES('Singapur');
INSERT INTO pais (nombre) VALUES('Siria');
INSERT INTO pais (nombre) VALUES('Somalia');
INSERT INTO pais (nombre) VALUES('Sri Lanka');
INSERT INTO pais (nombre) VALUES('Suazilandia');
INSERT INTO pais (nombre) VALUES('Sud??frica');
INSERT INTO pais (nombre) VALUES('Sud??n');
INSERT INTO pais (nombre) VALUES('Suecia');
INSERT INTO pais (nombre) VALUES('Suiza');
INSERT INTO pais (nombre) VALUES('Surinam');
INSERT INTO pais (nombre) VALUES('Svalbard y Jan Mayen');
INSERT INTO pais (nombre) VALUES('Tailandia');
INSERT INTO pais (nombre) VALUES('Taiw??n');
INSERT INTO pais (nombre) VALUES('Tanzania');
INSERT INTO pais (nombre) VALUES('Tayikist??n');
INSERT INTO pais (nombre) VALUES('Territorio Brit??nico del Oc??ano ??ndico');
INSERT INTO pais (nombre) VALUES('Territorios Australes Franceses');
INSERT INTO pais (nombre) VALUES('Timor Oriental');
INSERT INTO pais (nombre) VALUES('Togo');
INSERT INTO pais (nombre) VALUES('Tokelau');
INSERT INTO pais (nombre) VALUES('Tonga');
INSERT INTO pais (nombre) VALUES('Trinidad y Tobago');
INSERT INTO pais (nombre) VALUES('T??nez');
INSERT INTO pais (nombre) VALUES('Islas Turcas y Caicos');
INSERT INTO pais (nombre) VALUES('Turkmenist??n');
INSERT INTO pais (nombre) VALUES('Turqu??a');
INSERT INTO pais (nombre) VALUES('Tuvalu');
INSERT INTO pais (nombre) VALUES('Ucrania');
INSERT INTO pais (nombre) VALUES('Uganda');
INSERT INTO pais (nombre) VALUES('Uruguay');
INSERT INTO pais (nombre) VALUES('Uzbekist??n');
INSERT INTO pais (nombre) VALUES('Vanuatu');
INSERT INTO pais (nombre) VALUES('Venezuela');
INSERT INTO pais (nombre) VALUES('Vietnam');
INSERT INTO pais (nombre) VALUES('Islas V??rgenes Brit??nicas');
INSERT INTO pais (nombre) VALUES('Islas V??rgenes de los Estados Unidos');
INSERT INTO pais (nombre) VALUES('Wallis y Futuna');
INSERT INTO pais (nombre) VALUES('Yemen');
INSERT INTO pais (nombre) VALUES('Yibuti');
INSERT INTO pais (nombre) VALUES('Zambia');
INSERT INTO pais (nombre) VALUES('Zimbabue');

-- Idiomas
INSERT INTO idioma(nombre) VALUES('Ingl??s'); -- 1
INSERT INTO idioma(nombre) VALUES('Espa??ol'); -- 2
INSERT INTO idioma(nombre) VALUES('Alem??n'); -- 3
INSERT INTO idioma(nombre) VALUES('Japon??s'); -- 4

-- Ingresar editorial
INSERT INTO editorial(nombre, pais_id) VALUES('Harper Collins Mexico', 146);
INSERT INTO editorial(nombre, pais_id) VALUES('epubli', 4);
INSERT INTO editorial(nombre, pais_id) VALUES('Penhaligon', 4);
INSERT INTO editorial(nombre, pais_id) VALUES('Blanvalet', 4);
INSERT INTO editorial(nombre, pais_id) VALUES('Century', 180);
INSERT INTO editorial(nombre, pais_id) VALUES('Bantam Books', 75);
INSERT INTO editorial(nombre, pais_id) VALUES('Phoenix', 180);
INSERT INTO editorial(nombre, pais_id) VALUES('Gm??nder', 4);

-- Ingresar autor
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Mark','Manson', '1984-03-09', 'm', 75);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Fadi','Gaziri', NULL, 'm', 180);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('George R. R.','Martin', '1948-09-20', 'm', 75);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Bill','Clinton', '1946-08-19', 'm', 75);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('James','Patterson', '1947-03-22', 'm', 75);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Paula','Hawkins', '1972-08-26', 'f', 180);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Gillian','Flynn', '1971-02-24', 'f', 75);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Giuliana','Finnochiaro', '1989-09-19', 'f', 112);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Ann-Katrin','G??se', '1987-01-20', 'f', 4);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('Tanya S.','Powell', '1986-04-21', 'f', 4);
INSERT INTO autor(nombre, apellido, fecha_nacimiento, sexo, pais_id) VALUES('M??nica E.','Vaquerano', '1988-10-09', 'f', 68);

-- G??neros
INSERT INTO genero(nombre, descripcion) VALUES('Autoayuda', NULL);
INSERT INTO genero(nombre, descripcion) VALUES('Drama', 'Se va a enfocar principalmente en el ser humano y sus padecimientos, conflictos y circunstancias en las que se generen debates emocionales y sentimentales que conmuevan a sus lectores y espectadores.');
INSERT INTO genero(nombre, descripcion) VALUES('Fantas??a', 'Se conoce como literatura fant??stica a cualquier relato en que participan fen??menos sobrenaturales y extraordinarios, como la magia o la intervenci??n de criaturas inexistentes.');
INSERT INTO genero(nombre, descripcion) VALUES('Romance', NULL);
INSERT INTO genero(nombre, descripcion) VALUES('Intriga/Misterio', NULL);
INSERT INTO genero(nombre, descripcion) VALUES('Ciencia', "Libros de tem??tica cient??fica");

-- Libro 1
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) 
VALUES (
'El sutil arte de que te importe un carajo. Un enfoque disruptivo para vivir una buena vida', 1,
 1, 146, '2018-01-01', 1, 1, 2, 1, 224, '978-1-4002-1330-6', 
 'T??tulo original: The Subtle Art of Not Giving a Fuck. An alternative Approach to Happines and Success. 
 Traducci??n al espa??ol: Anna Roig'
 );

-- Libro 2
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
"Ze Germans. An expat's guide to living in Germany", 2,
2, 4, '2021-04-29', 1, 1, 1, 1, 308, '978-3-7514-1213-7', 
'Gu??a ilustrada acerca de vivir en Alemania'
);

-- Libro 3
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Feuer und Blut. Aufstieg und Fall des Hauses Targaryen von Westeros', 3,
3, 4, '2018-01-01', 2, 3, 3, 3, 889, '978-3-7645-3223-9', 
'T??tulo original: Fire & Blood: 300 Years Before a Game of Thrones (A Targeryan History). 
Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 4
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 4. Die Saat des goldenen L??wen', 3,
4, 4, '2011-01-01', 7, 3, 3, 2, 670, '978-3-442-26821-4', 
'T??tulo original: >>A Clash of Kings<< (Pages 332-728 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 5
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 9. Der Sohn des Greifen', 3,
3, 4, '2012-01-01', 9, 3, 3, 1, 830, '978-3-7645-3104-1', 
'T??tulo original: >>A Dance with Dragons<< (Pages 1-499 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 6
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'The President is Missing', 4,
5, 180, '2018-01-01', 1, 2, 1, 1, 513, '978-1-780-89840-7',
'Un drama pol??tico. Coescrito por el ex presidente de los EEUU: Bill Clinton.'
);

-- Libro 7
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Girl on the Train. Du kennst sie nicht, aber sie kennt dich', 6,
4, 4, '2015-01-01', 1, 5, 3, 1, 447, '978-3-7645-0601-8', 
'T??tulo original: The Girl on the Train. Traducci??n al alem??n: Christoph G??hler'
);

-- Libro 8
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'A Dance with Dragons', 3,
6, 75, '2012-01-01', 1, 3, 1, 1, 1112, '978-0-553-84112-1',
'Dentro de la colecci??n se encuentra la versi??n de este libro traducida al alem??n tambi??n.'
);

-- Libro 9
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 7. Zeit der Kr??hen', 3,
4, 4, '2012-01-01', 8, 3, 3, 1, 576, '978-3-442-26859-7', 
'T??tulo original: >>A Feast of Crows<< (Pages 1-327 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 10
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 10. Ein Tanz mit Drachen', 3,
3, 4, '2012-01-01', 9, 3, 3, 1, 798, '978-3-7645-3102-7', 
'T??tulo original: >>A Dance with Dragons<< (Pages 500-960 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 11
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 6. Der K??nigin der Drachen', 3,
4, 4, '2012-01-01', 5, 3, 3, 1, 831, '978-3-442-26847-4', 
'T??tulo original: >>A Storm of Swords<< (Pages 439-975 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 12
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 5. Sturm der Schwerter', 3,
4, 4, '2011-01-01', 7, 3, 3, 1, 768, '978-3-442-26846-7',
'T??tulo original: >>A Storm of Swords<< (Pages 1-438 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 13
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Das Lied von Eis und Feuer 8. Die dunkle K??nigin.', 3,
4, 4, '2012-01-01', 8, 3, 3, 1, 768, '978-3-442-26860-3', 
'T??tulo original: >>A Feast of Crows<< (Pages 328-685 + Appendix). Traducci??n al alem??n: Andreas Helweg'
);

-- Libro 14
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'Gone Girl', 7,
7, 180, '2013-01-01', 1, 5, 1, 1, 466, '978-1-7802-2135-9',
'Fue adaptada al cine y gan?? muchos premios'
);

-- Libro 15
INSERT INTO libro(
titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas
) VALUES (
'This is a Test', 8,
8, 4, '2022-01-01', 1, 6, 1, 3, 1000, '001-2-0034-5678-9', 
'Libro de prueba con varios autores'
);

-- -------------------------------------
SELECT libro.titulo AS 'T??tulo', concat(autor.nombre, ' ', autor.apellido) AS 'Autor', editorial.nombre AS 'Editorial', pais.nombre AS 'Pa??s de publicaci??n',
fecha_publicacion AS 'Fecha de publicaci??n', libro.edicion AS 'N?? de edici??n', genero.nombre AS 'G??nero', idioma.nombre AS 'Idioma', portada.tipo AS 'Tipo de portada',
libro.paginas AS 'N??mero de p??ginas', libro.isbn AS 'ISBN', libro.notas AS 'Notas adicionales' 
FROM libro
JOIN autor ON autor.autor_id = libro.autor_id
JOIN editorial ON editorial.editorial_id = libro.editorial_id
JOIN pais ON pais.pais_id = libro.pais_id
JOIN genero ON genero.genero_id = libro.genero_id
JOIN idioma ON idioma.idioma_id = libro.idioma_id
JOIN portada ON portada.portada_id = libro.portada_id
ORDER BY libro_id;
-- --------------------------------------------------------------------------------
-- --------------------------------------------------------------------------------