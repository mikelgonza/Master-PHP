# MOSTRAR TODOS LOS REGISTROS DE UNA TABLA
SELECT * FROM usuarios;

# MOSTAR TODOS LOS REGISTROS DE LOS CAMPOS DETERMINADOS
SELECT email, nombre, apellidos FROM usuarios;

# OPERADORES ARITMETICOS
# (te saca un campo numerico llamado OPERACION con el resultado de la operacion en todos los registros
SELECT email, (4+7) AS 'OPERACION' FROM usuarios;

# OPERAR CON LOS OTROS CAMPOS
SELECT id, email, (id+7) AS 'OPERACION' FROM usuarios;

# FUNCIONES MATEMATICAS (buscar en google sql functions math)
# ABS valor absoluto
SELECT ABS(7) AS 'OPERACION' FROM usuarios;

# redondea decimales
# CEIL() al alza
# FLOOR() a la baja
# RAND() nº aleatorio
# ROUND(numero, nº decimales) ROUND(7.321, 2) saca 7.32, redondea los decimales
# TRUNCATE(7.39, 1) saca 7.3, quita decimales
# Tambien se puede meter en la funcion campos, como ROUND(id, 1)
SELECT CEIL(7.01) AS 'OPERACION' FROM usuarios;



# OPERACIONES CON CARACTERES
# UPPER(campo) a mayusculas
# LOWER(campo) a minusculas
# CONCAT()
SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre y Ape' FROM usuarios;

# se pueden anidar funciones, una dentro de otra
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Nombre y Ape' FROM usuarios;

# LENGHT() Cuenta los caracteres del campo
# TRIM() limpia los espacios


# FUNCIONES FECHAS
# CURDATE() muestra la fecha actual
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;
# DATEDIFF(fecha1, fecha2) muestra los dias de diferencia
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Fecha actual' FROM usuarios;
# DAYNAME(fecha) saca el dia de la semana
# DAYOFMONTH(fecha) saca el dia del mes
# DAYOFWEEK(fecha) saca el dia de la semana en numero
# DAYOFYEAR(fecha) saca el dia del año
# MONTH(fecha) saca el numero del mes
# YEAR()
# DAY()
# HOUR()
# MINUTE()
# CURTIME() saca la hora
# SYSDATE() la hora del sistema
# DATEFORMAT()
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') AS 'Fecha actual' FROM usuarios;


# FUNCIONES GENERALES
# IS NULL() muestra true o false si es null el campo metido
SEELCT email, ISNULL(apellidos) FROM usuarios;
# STRCMP('string1','string2') true si son diferentes, false si son iguales
# DISTINCT solo muestra registros que no sean iguales
# IFNULL(campo, 'string') si es null mete el string asignado
SEELCT IFNULL(apellidos, 'ESTE CAMPO ESTA VACIO') FROM usuarios;


















