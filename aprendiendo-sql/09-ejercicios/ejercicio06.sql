/* 
6. Visualizar el nombre y apellidos de los vendedores en una misma columna,
su fecha de registro y el dia de la semana que se registraron
 */

SELECT CONCAT(nombre, ' ', apellidos) AS 'nombre y apellidos',
    fecha, DAYNAME(fecha) FROM vendedores;
