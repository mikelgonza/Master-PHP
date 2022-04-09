# MODIFICAR REGISTROS / ACTUALIZAR DATOS

# Actualiza el campo fecha en todos los registros de la tabla, con la fecha actual
UPDATE usuarios SET fecha = CURDATE();

# Actualiza fecha y apellido del id 4
UPDATE usuarios SET fecha = '2019-07-09', apellidos = 'Martinez' WHERE id=3;
