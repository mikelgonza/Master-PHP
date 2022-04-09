<?php

/*
Ejercicio 6:
Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10
*/

echo "<table border='1'>"; // inicio de la tabla

echo "<tr>"; // inicio fila 1 de celdas
    for ($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>"; // cierre fila 1 de celdas

echo "<tr>"; // inicio fila de la tabla de multiplicar

    for ($tabla = 1; $tabla <= 10; $tabla++){
        echo "<td>"; // inicio celda de cada tabla

            // bucle para rellenar cada tabla
            for ($n = 1; $n <= 10; $n++) {
                echo "$tabla x $n = ".($tabla * $n)."<br>";
            }

        echo "</td>"; // fin celda de cada tabla
    }
    
echo "</tr>"; // cierre fila tabla de multiplicar

echo "</table>";
?>
