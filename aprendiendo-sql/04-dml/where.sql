/* CONSULTA CON CONDICION WHERE
Operadores:
=
!=
<
>
<=
>=
BETWEEN A AND B (entre)
IN
IS NULL
IS NOT NULL
LIKE
NOT LIKE

AND
OR
NOT


#Comodines:
cualquier cantidad de caracteres: %
un caracter desconocido: _
*/

SELECT * FROM usuarios WHERE email = 'mikel@gmail.com';

# Mostrar resultador en los que la fecha sea del año 2019
SELECT * FROM usuarios WHERE YEAR(fecha) = 2019;

# Mostrar email cuyo apellido contanga letra a y contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';


# Sacar registros de usuarios cuyo año sea PAR
SELECT * FROM usuarios WHERE (YEAR(fecha)%2) = 0;

# Sacar registros de usuarios cuyo nombre tenga mas de 5 letras
# y que se hayan registrado antes de 2020, y mostrar el nombre en mayus
SELECT UPPER(nombre) AS 'NOMBRE', apellidos FROM usuarios WHERE (LENGTH(nombre) > 4) AND (YEAR(fecha) < 2020);



# ORDENAR
# ORDER BY
SELECT * FROM usuarios ORDER BY id ASC; ordena por id ascendente
SELECT * FROM usuarios ORDER BY id DESC; por id descendente

# LIMIT
# Limita el numero de registros, solo 3
SELECT * FROOM usuarios LIMIT 3;

# Registros del 0 al 2
SELECT * FROOM usuarios LIMIT 0,2;

























