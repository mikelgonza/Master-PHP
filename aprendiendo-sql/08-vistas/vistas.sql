/* 
VISTAS:
Las podemos definir como una consulta almacenada en la base de datos
que se utiliza como una tabla virtual.
No almacena datos sino que utiliza asociaciones y los datos originales
de las tablas, de forma que siempre se mantiene actualizada.

show tables; - muestra la vista como otra tabla
drop view entradas_con_nombres; - borra la vista

SELECT * FROM entradas_con_nombres; - muestra los resultados de la consulta de la vista
como si fuera una tabla.
Lo que hace es guardar una tabla temporal con los resultados de la vista.
Le podemos añadir modificadores como WHERE y modificar el resultado a nuestro gusto
 */

CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

