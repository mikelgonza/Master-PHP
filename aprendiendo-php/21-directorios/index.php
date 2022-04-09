<?php

// Crear carpeta
//mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');

// Comprobar si existe
if (!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
    echo "Carpeta CREADA";
} else {
    echo "la carpeta ya esta creada";
}


// Borrar carpeta
// rmdir('mi_carpeta');

// Mostrar contenido carpeta
echo "<h1>Contenido carpeta</h1>";
if ($gestor = opendir('./mi_carpeta')){
    while (false !== ($archivo = readdir($gestor))){
        if ($archivo != '.' && $archivo != '..'){
            echo $archivo."<br/>";
        }
    }
}

?>