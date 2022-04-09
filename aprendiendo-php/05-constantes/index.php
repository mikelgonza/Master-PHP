<?php

// Constantes
// Un contenedor de información que no puede variar

define('nombre','Mikel Gonzalez');
define('web','mikel.es');

// sin el $
echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

// variable
$web = 'miweb.com';
echo '<h1>'.$web.'</h1>';

// Constantes predefinidas

echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo __LINE__.'<br>';


?>