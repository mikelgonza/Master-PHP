# RENOMBRAR TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR NOMBRE DE UNA COLUMNA
ALTER TABLE usuarios CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE
ALTER TABLE usuarios MODIFY apellido char(50) not null;

# AÑADIR COLUMNA
ALTER TABLE usuarios ADD website varchar(100) null;

# AÑADIR RESTRICCION A COLUMNA
ALTER TABLE usuarios ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR COLUMNA
ALTER TABLE usuarios DROP website;
