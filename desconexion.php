<?php
//Iniciamos sesión para utilizar variables de este ámbito
session_start();

//En el caso de que se haya pulsado el botón de desconexión, destruimos las variables, la sesión
session_unset();

//Redirigimos el flujo de la tienda al login de inicio
header("Location: index.php");
exit;
?>