/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Raúl
 * Created: 24-nov-2019
 */

CREATE TABLE clientes (
id              int (255) auto_increment not null,
nombre          varchar (255) not null,
direccion       varchar (255) null,
codigo_postal   int (255) null,
ciudad          varchar (100) null,
provincia       varchar (100) null,
pais            varchar (100) null,
gestor_cuentas  varchar (255) null,
fecha_alta      date null,
baja            varchar (100) null,
division        varchar (100) null,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT uq_nombre UNIQUE(nombre)
)ENGINE=InnoDb;

CREATE TABLE contactos (
id              int (255) auto_increment not null,
contacto        varchar (255) not null,
cliente_id      int (255) not null,
cargo           varchar (100) null,
telefono        varchar (100) null,
email           varchar (255) null,
CONSTRAINT pk_contactos PRIMARY KEY(id),
CONSTRAINT fk_contacto_cliente FOREIGN KEY(cliente_id) REFERENCES clientes (id),
CONSTRAINT uq_contacto UNIQUE(contacto)
)ENGINE=InnoDb;

CREATE TABLE servicios (
id              int (255) auto_increment not null,
cliente_id      int (255) not null,
servicios       varchar (100) null,
CONSTRAINT pk_servicios PRIMARY KEY(id),
CONSTRAINT fk_servicio_cliente FOREIGN KEY(cliente_id) REFERENCES clientes (id)
)ENGINE=InnoDb;

CREATE TABLE webs (
id              int (255) auto_increment not null,
web             varchar (255) not null,
url             varchar (255) not null,
cliente_id      int (255) not null,
ano             year null,
servidor        varchar (100) null,
CONSTRAINT pk_webs PRIMARY KEY(id),
CONSTRAINT fk_web_cliente FOREIGN KEY(cliente_id) REFERENCES clientes (id),
CONSTRAINT uq_web UNIQUE(web),
CONSTRAINT uq_url UNIQUE(url)
)ENGINE=InnoDb;

CREATE TABLE tematicas (
id              int (255) auto_increment not null,
tematica        varchar (255) not null,
web_id          int (255) not null,
CONSTRAINT pk_tematicas PRIMARY KEY(id),
CONSTRAINT fk_tematica_web FOREIGN KEY(web_id) REFERENCES webs (id)
)ENGINE=InnoDb;

CREATE TABLE caracteristicas (
id              int (255) auto_increment not null,
web_id          int (255) not null,
desarrollo      varchar (100) not null,
tipo            varchar (100) null,
framework       varchar (100) null,
theme           varchar (100) null,
design          varchar (100) null,
cartificado     varchar (100) null,
responsive      varchar (100) null,
idiomas         varchar (100) null,
seo             varchar (100) null,
CONSTRAINT pk_caracteristicas PRIMARY KEY(id),
CONSTRAINT fk_caracteristica_web FOREIGN KEY(web_id) REFERENCES webs (id)
)ENGINE=InnoDb;

CREATE TABLE seo (
id                          int (255) auto_increment not null,
web_id                      int (255) not null,
nota                        varchar (100) null,
visitas2019                 int (100) null,
visitas2020                 int (100) null,
palabras_mas_10_busquedas   int (100) null,
posicion_media              float (10,1) null,
indice_posicionamiento      int (100) null,
total_busquedas             int (100) null,
rebote                      float (5,2) null,
CONSTRAINT pk_seo PRIMARY KEY(id),
CONSTRAINT fk_seo_web FOREIGN KEY(web_id) REFERENCES webs (id)
)ENGINE=InnoDb;


INSERT INTO clientes VALUES (null, 'MARIA DEL CARMEN MAIQUEZ LOPEZ' , 'C/ SANTIAGO, 25. CASA 13', 8290, 'BARCELONA', 'BARCELONA', 'España', null, '2019-04-01', 'Habitual', 'TLC');
INSERT INTO clientes VALUES (null, 'SANG JOONG LEE', 'C/ JOAQUIN MARIA LOPEZ, 41 C. LOCAL', 28008, 'MADRID', 'MADRID', 'España', null, '2018-03-01', 'Habitual', 'TLC');
INSERT INTO clientes VALUES (null, 'AEROTECNICA S.A.', 'C/ Gutenberg, 4 - Pol. Ind. San Marcos', 28906, 'MADRID', 'MADRID', 'España', null, '2019-06-01', 'Habitual', 'TLC');
INSERT INTO clientes VALUES (null, 'AGROSER S.L.', null, 28028, 'MADRID', 'MADRID', 'España', null, '2019-10-01', 'Habitual', 'TLC');
INSERT INTO clientes VALUES (null, 'DECORACION DANIEL ESTEBAN S.L.', null, 28922, 'MADRID', 'MADRID', 'España', null, '2018-03-01', 'Habitual', 'TLC');
INSERT INTO clientes VALUES (null, 'EVENTOS PROFESIONALES ALEA, S.L.', 'C/San Rafael Nave 3, 6', 28108, 'Alcobendas', 'MADRID', 'España', 'Rocío dos Santos Iglesias', '2019-03-14', 'Habitual', 'TLC');
INSERT INTO clientes VALUES (null, 'ALUMINIOS HERMANOS GARCIA SIEU S.L.', 'PLAZA DE FLANDES, 15 POSTERIOR', 28936, 'MADRID', 'MADRID', 'España', null, '2018-08-01', 'Habitual', 'TLC');


INSERT INTO contactos VALUES (null, 'Maria Del Carmen Maiquez', 1, null, '936 91 56 67', 'carmenpatchwork@telefonica.net');
INSERT INTO contactos VALUES (null, 'Sang Joong Lee', 2, null, '915 44 53 38', 'occ2000@gmail.com');
INSERT INTO contactos VALUES (null, 'Javier Huertas', 3, null, '916 96 73 78', 'javier.huertas@grupohastinik.com');
INSERT INTO contactos VALUES (null, 'Jesus De La Fuente', 3, null, null, 'jesus.delafuente@grupohastinik.com');
INSERT INTO contactos VALUES (null, 'Enrique Lopez Eusebio', 4, null, '696 41 42 43', 'agroser.ele@telefonica.net');
INSERT INTO contactos VALUES (null, 'Daniel Esteban Herrador', 5, null, '916 43 45 79', 'danielpintores@hotmail.com');
INSERT INTO contactos VALUES (null, 'Juan Jose Herranz Del Espíritu Santo' , 6, 'Propietario', '655 58 06 02', 'info@aleahosteleria.com');
INSERT INTO contactos VALUES (null, 'Jorge', 7, null, '916 45 46 98', 'contacto@aluminios-hermanos-garcia.com');


INSERT INTO webs VALUES (null, 'acolchados-patchwork.com', 'http://www.acolchados-patchwork.com/', 1, null, 'Pro');
INSERT INTO webs VALUES (null, 'acupuntura2000.es', 'http://www.acupuntura2000.es/', 2, null, 'Pro');
INSERT INTO webs VALUES (null, 'aerotecnica.es', 'https://www.aerotecnica.es/', 3, null, 'Pro');
INSERT INTO webs VALUES (null, 'agroser.es', 'http://www.agroser.es/', 4, null, 'Pro');
INSERT INTO webs VALUES (null, 'alcorcon-pintor.es', 'http://www.alcorcon-pintor.es/', 5, null, 'Pro');
INSERT INTO webs VALUES (null, 'aleahosteleria.com', 'aleahosteleria.com/', 6, null, 'Pro');
INSERT INTO webs VALUES (null, 'aluminios-hermanos-garcia.com', 'aluminios-hermanos-garcia.com', 7, null, 'Pro');


INSERT INTO caracteristicas VALUES (null, 1, 'php', null, null, null, null, 'No', 'No', 'Español', 'No');
INSERT INTO caracteristicas VALUES (null, 2, 'Starweb', null, null, null, null, 'No', 'No', 'Español', 'Si');
INSERT INTO caracteristicas VALUES (null, 3, 'WordPress', 'Catalogo', null, 'Canvas', null, 'Si', 'Si', 'Español', 'Si');
INSERT INTO caracteristicas VALUES (null, 4, 'php', null, null, null, null, 'No', 'No', 'Español', 'Si');
INSERT INTO caracteristicas VALUES (null, 5, 'php', null, null, null, null, 'No', 'No', 'Español', 'Si');
INSERT INTO caracteristicas VALUES (null, 6, 'WordPress', null, null, 'Dt the 7', null, null, null, null, null);
INSERT INTO caracteristicas VALUES (null, 7, 'Starweb', null, null, null, null, 'No', 'No', 'Español', 'Si');


INSERT INTO seo VALUES (null, 1, null, null, null, null, null, null, null, null);
INSERT INTO seo VALUES (null, 2, 'Media', 1500, null, null, null, null, null, null);
INSERT INTO seo VALUES (null, 3, null, 27400, null, null, null, null, null, null);
INSERT INTO seo VALUES (null, 4, 'Baja', 200, null, 59, 30, 0, 21440, null);
INSERT INTO seo VALUES (null, 5, null, 200, null, null, null, null, null, null);
INSERT INTO seo VALUES (null, 6, null, null, null, null, null, null, null, null);
INSERT INTO seo VALUES (null, 7, 'Media-Baja', 2600, null, null, null, null, null, null);


INSERT INTO tematicas VALUES (null, 'Patchwork', 1);
INSERT INTO tematicas VALUES (null, 'Acupuntura', 2);
INSERT INTO tematicas VALUES (null, 'Diseño industrial', 3);
INSERT INTO tematicas VALUES (null, 'Fertilizantes', 4);
INSERT INTO tematicas VALUES (null, 'Pintura', 5);
INSERT INTO tematicas VALUES (null, 'Productos para hostelería', 6);
INSERT INTO tematicas VALUES (null, 'Aluminios', 7);
INSERT INTO tematicas VALUES (null, 'Acolchados', 1);
INSERT INTO tematicas VALUES (null, 'Abonos', 4);
INSERT INTO tematicas VALUES (null, 'Maquinaria agrícola', 4);
INSERT INTO tematicas VALUES (null, 'Reformas', 5);
INSERT INTO tematicas VALUES (null, 'PVC', 7);
INSERT INTO tematicas VALUES (null, 'Ventanas', 7);
INSERT INTO tematicas VALUES (null, 'Puertas', 7);


INSERT INTO servicios VALUES (null, 1, null);
INSERT INTO servicios VALUES (null, 2, null);
INSERT INTO servicios VALUES (null, 3, null);
INSERT INTO servicios VALUES (null, 4, null);
INSERT INTO servicios VALUES (null, 5, null);
INSERT INTO servicios VALUES (null, 6, null);
INSERT INTO servicios VALUES (null, 7, null);


SELECT nombre, direccion, fecha_alta FROM clientes WHERE YEAR(fecha_alta) = 2019;

SELECT cl.nombre, c.contacto, w.web, t.tematica
FROM clientes cl, contactos c, webs w, tematicas t
WHERE c.cliente_id = cl.id AND w.cliente_id = cl.id AND t.web_id = w.id GROUP BY t.tematica;