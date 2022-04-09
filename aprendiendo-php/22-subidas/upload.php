<?php

$archivo = $_FILES['archivo'];

//var_dump($archivo);
//die();

$nombre = $archivo['name'];
$tipo = $archivo['type'];

// Segun el tipo
if ($tipo == "image/jpg" || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){
    
    if(!is_dir('images')){
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header("Refresh: 5; URL=index.php");
    echo "<h1>La imagen se ha subido correctamente</h1>";
    
} else {
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con el formato correcto, por favor...</h1>";
}




?>