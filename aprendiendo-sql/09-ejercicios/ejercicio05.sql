/* 
5. Mostrar todos los vendedeores con su nombre y número de dias que llevan 
en el concesionario.
 */

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'DIAS' FROM vendedores;

