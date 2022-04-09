/*
SUBCONSULTAS: 
- Consultas que se ejecutan dentro de otras
- Consiste en utilizar los resultados de la subconsulta
para operar en la consulta principal
- Jugando con las foreign keys

*/

# Selecciona los usuarios de la tabla usuarios que tengan contenido en la tabla entradas
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
# Seleccion los usuarios de la tabla usuarios que no tienen contenido en la tabla entradas
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar usuarios que tengan alguna entrada que en su titulo hable de GTA
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE '%GTA%');

# Sacar todas las entradas de la categoria Accion utilizando su nombre
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Accion'); 

# Mostrar las categorias con mas de tres entradas
SELECT * FROM categorias WHERE id 
    IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) > 3);

# Mostrar los usuarios que crearon entradas un Lunes DAYOFWEEK(fecha) = 2
SELECT * FROM usuarios WHERE id
    IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 2 );

# Mostrar el nombre del usuario que tenga mas entradas
SELECT CONCAT(nombre, ' ',apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id =
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar categorias sin entradas
SELECT * FROM categorias WHERE id NOT IN
    (SELECT categoria_id FROM entradas);







