/* 
22. Obtener listado de clientes (numero de cliente y nombre)
mostrar tambien el numero de vendedor y su nombre
 */


SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Nombre'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;

