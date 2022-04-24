/* 
28. Listar los vendedores y numero de clientes tengan o no clientes
 */

SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedores', COUNT(c.id)
FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id 
GROUP BY v.id;

