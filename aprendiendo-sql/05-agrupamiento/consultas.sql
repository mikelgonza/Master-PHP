# CONSULTAS AGRUPAMIENTO
# Muestra 1 registro por categoria
SELECT titulo FROM entradas GROUP BY categoria_id;
# Asi podemos mostrar el numero de registros por categoria, por ejemplo
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS AGRUPAMIENTO CON CONDICION
# Muestra las entradas de las categorias que tienen 3 o mas registros
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 3;

# FUNCIONES AGRUPAMIENTO
/*  AVG     sacar la media
    COUNT   contar el numero de elementos
    MAX     valor maximo del grupo
    MIN     valor minimo del grupo
    SUM     Sumar todo el contenido del grupo
*/
# Saca la media de todos los id de los registros
SELECT AVG(id) AS 'Media de entradas' FROM entradas;

# Saca el registro con id mas alto
SELECT MAX(id) AS 'Maximo Id', titulo FROM entradas;
# Saca el registro con id mas bajo
SELECT MIN(id) AS 'Maximo Id', titulo FROM entradas;
# Suma todos los id
SELECT SUM(id) AS 'Suma de los Id', titulo FROM entradas;