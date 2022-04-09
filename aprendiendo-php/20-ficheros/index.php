<?php
/*
// abrir archivo
//$archivo = fopen("fichero_texto.txt", "r"); // abrir con permiso lectura
$archivo = fopen("fichero_texto.txt", "a+"); // abrir con permiso lectura y escritura

// leer contenido
while (!feof($archivo)){
    $contenido = fgets($archivo);

    echo $contenido."<br/>";
}

// Escribir
fwrite($archivo, "*** Soy un texto metido desde php ***");


// cerrar archivo
fclose($archivo);

*/

// Copiar archivos
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// Renombrar
//rename('fichero_copiado.txt', 'fichero_renombrado.txt');

// Eliminar
//unlink('fichero_renombrado.txt') or die('error al eliminar el archivo');

// Comprobar si el fichero existe
if(file_exists('fichero_texto.txt')){
    echo "El archivo existe";
} else {
    echo "El archivo NO existe";
}

?>