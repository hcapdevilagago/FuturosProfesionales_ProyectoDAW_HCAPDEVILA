<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>:: CAMBIOS OK ::</title>
    </head>
    <body>
        <div class="informacion" style="padding: 3%">
            <div class="tile-header">
                <h4 class="text-center" style="color: green; font-weight: bold;">MENSAJE INFORMATIVO DE LA APLICACIÓN WEB</h4><hr/>
                <img src="images/logo1.png" height="25%" width="25%" style="margin-left: auto; margin-right: auto; display: block;"/>
            </div>
            <div class="tile-body text-center" style="margin-top: 7%;">
                <img src="images/check.png" height="18%" width="18%" style="margin-left: auto; flaot: left; margin-right: auto;"/>
                <h3 style="color: green; display: inline-block; font-weight: bold;">Los cambios se han realizado con éxito.</h3>
            </div>
        </div>
    </body>
</html>
<?php
//Redirigimos el flujo de la ejecución al login de inicio
header("Refresh: 4; url=index.php");
exit;
?>