/* 
CONSULTA MULTITABLA
Consultar varias tablas en una sola sentencia

INNER JOIN: saca registros con datos en las dos tablas
LEFT JOIN: saca todos los registros de la tabla izquierda, 
           aunque no haya datos en la derecha
RIGHT JOIN: saca todos los registros de la tabla derecha,
           aunque no haya datos en la izquierda 
 */

# Mostrar las entradas con el nombre del usuario y categoria
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# Con INNER JOIN
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;


# Mostrar el nombre de las categorias y al lado cuantas entradas tienen
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

# Con INNER JOIN y LEFT JOIN
# INNER JOIN saca 3 registros porque hay una cattegoria sin entradas
# LEFT JOIN saca 4 registros porque son todas las categorias y una sale con 0 entradas
SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

# Con LEFT JOIN saca todos los registros de la tabla derecha
SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;

# Mostrar el email de los usuarios y al lado cuantas entradas tienen
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

# 








