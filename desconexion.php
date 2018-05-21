<?php
//Iniciamos sesión para utilizar variables de este ámbito
session_start();

//En el caso de que se haya pulsado el botón de desconexión, destruimos las variables, la sesión
session_unset();
session_destroy();


//Redirigimos el flujo de la tienda al login de inicio
header("Refresh: 1; url=index.php");
exit;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./estilos.css">       
        <script type="text/javascript" src="./prueba.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta charset="UTF-8">
        <title>Desconectando ...</title>
        <style>
            body {
                text-align: center;
                background-color: slategray;
            }
        </style>
    </head>
    <body>
        <h3>Estamos cerrando la sesión. Espere, por favor.</h3><hr />
    </body>
</html>
