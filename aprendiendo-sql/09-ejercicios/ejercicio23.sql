/* 
23. Listar todos los encargos realizados con la marca de coche y el nombre
del cliente
 */

SELECT e.id, cl.nombre, co.marca, e.cantidad, e.fecha
FROM encargos e, clientes cl, coches co
WHERE e.cliente_id = cl.id AND e.coche_id = co.id;

SELECT e.id, cl.nombre, co.marca, e.cantidad, e.fecha FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id;