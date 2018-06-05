<!DOCTYPE html>
<html lang="es">
    <head>
        <title>:: {strtoupper($rol)} :: {$user} ::</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gestión de Administración de FCT :: CPIFP Los Enlaces (Trabajo de Fin de Ciclo - DAW)">
        <meta name="author" content="Héctor Capdevila Gago">

        <!--Referenciamos la ubicación de ficheros CSS para el correcto funcionamiento de la aplicación web-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

        <!--Referenciamos la ubicación de ficheros JS para el correcto funcionamiento de la aplicación web-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/datatables.js"></script>
    </head>
    <body>
        <!-- DIV principal - Contenedor -->
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Menú desplegable</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="./images/logo4.png" style="float: left; padding-top:0.5%; padding-bottom: -5%;" height="4%" width="4%"/>
                    <a class="navbar-brand" href="panel_administracion.php" >Conectad@, {$nombre}</a>
                </div>
                <!-- Mensajería de la aplicación -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$user} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="desconexion.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Mensajería de la aplicación -->

                {*Vamos a comprobar cual es el rol del usuario que se ha logueado, y según el rol mostraremos un template u otro*}
                {if $rol eq "empresa"}
                    {include file="empresas/menu_empresa.tpl"}
                {elseif $rol eq "tutor_centro"}
                    {include file="centro/menu_tutor_centro.tpl"}
                {/if}
        </div>
        <!-- DIV principal - Contenedor -->

        <!--Referenciamos la ubicación de ficheros Bootstrap Core JavaScript para el correcto funcionamiento de la aplicación web-->
        <script src="js/bootstrap.min.js"></script>

        <!--Referenciamos la ubicación de ficheros Morris Charts JavaScript para el correcto funcionamiento de la aplicación web-->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>

        <!--Referenciamos la ubicación de ficheros JQUERY para el correcto funcionamiento de la aplicación web-->
        <script src="js/bootstrapvalidator.min.js"></script>
        <script src="js/validate.js"></script>
    </body>
</html>