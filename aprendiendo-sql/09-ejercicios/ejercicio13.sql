/* 
13. Sacar la media de sueldo entre todos los vendedores por grupo

CEIL() quita los decimales
 */


SELECT CEIL(AVG(v.sueldo)) AS 'MEdoa salarial', g.nombre, g.cuidad FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
 GROUP BY grupo_id;
