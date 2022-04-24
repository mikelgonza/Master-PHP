/* 
15. Mostrar los clientes que mas encargos han hecho y mostrar cuantos hicieron
 */

SELECT c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY e.cliente_id ORDER BY 2 DESC LIMIT 2;

