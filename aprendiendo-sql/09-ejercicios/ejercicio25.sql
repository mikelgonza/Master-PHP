/* 
25. Obtener lista de los nombres de clientes con el importe
de sus encargos acumulados
 */

SELECT cl.nombre, SUM(co.precio * e.cantidad) AS 'Importe' FROM clientes cl
INNER JOIN encargos e ON e.cliente_id = cl.id
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY cl.nombre;

