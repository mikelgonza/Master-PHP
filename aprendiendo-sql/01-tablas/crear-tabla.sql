/*
Tipos de datos:

int(nº caracteres)  ENTERO
integer(nº caracteres)  ENTERO (max 4294967295)
varchar(nº carcteres)   STRING / ALFANUMERICO (max 255)
char(nº carcteres)   STRING / ALFANUMERICO
float(nº cifras, nº decimales) DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MAS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones caracteres
LONGTEXT 4 billones de caracteres

// ENTEROS MAS GRANDES
MEDIUMINT
BIGINT



CREAR TABLA

*/

CREATE TABLE usuarios(
    id  int(11) auto_increment not null primary key,
    nombre varchar(100) not null,
    apellidos varchar(255) default 'hola que tal',
    email varchar(100) not null,
    password varchar(255)
);

CREATE TABLE ejemplo(
    IdEjemplo int auto_increment not null,
    IdUsuarios int not null,
    Otro nvarchar(100) not null,
    PRIMARY KEY (IdEjemplo),
    FOREIGN KEY (IdUsuarios) references usuarios(id)
);