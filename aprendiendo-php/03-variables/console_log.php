<?php

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

$myvar = array(1,2,3);
console_log( $myvar ); // [1,2,3]



?>
