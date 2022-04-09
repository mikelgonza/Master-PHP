<?php

/*
cookies: Es un fichero que se almacena en el ordenador del usuario, con el fin
de recordar datos o rastrear el comportamiento del mismo en la web.
*/

// Crear cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// Cookie basica
setcookie("micookie", "valor de mi galleta");

// Cookie con expiracion
// 60 segundos * 60 minutos * 24 horas * 365 dias 
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));



header('Location:ver_cookies.php');

?>


