# CREAR TABLAS PARA UN BLOG
# usuarios, entradas y categorias

CREATE TABLE usuarios(
id int not null auto_increment,
nombre nvarchar(100) not null,
apellidos nvarchar(250) not null,
email nvarchar(100) not null,
password nvarchar(100) not null,
fecha datetime not null,
PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id int not null auto_increment,
nombre nvarchar(100),
PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id int not null auto_increment,
usuario_id int not null,
categoria_id int not null,
titulo nvarchar(100) not null,
descripcion nvarchar(255) not null,
fecha datetime not null,
PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

# Despues del foreign: ON DELETE CASCADE
# CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
# Es que cuando se borre una categoria tambien se borre el registro

# ON UPDATE CASCADE
# ON DELETE NULL
# ON DELETE DEFAULT
# ON DELETE NO ACTION (la opcion por defecto)

