<?php

if (isset($_COOKIE['micookie'])){

    unset($_COOKIE['micookie']); // quitar cookie
    setcookie('micookie','',time()-100); // caducar cookie

}

// header modifica cabeceras
// Cambiamos Location, la url de la pagina, y asi redirige
header('Location:ver_cookies.php');

?>



