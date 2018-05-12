<?php
require_once './model/Database.php';
require_once './model/Alumno.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Futuros profesionales</title>

        <!-- Enlazamos los ficheros necesarios para el correcto funcionamiento de la aplicación-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- DIV principal - Contenedor -->
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation nose q es</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Gestión de Formación en Centros de Trabajo</a>
                </div>
                <!-- Mensajería de la aplicación -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="./images/hector.jpg" width="40px" height="50px" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Héctor Capdevila</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Lunes 08/04/2018 - 15:32h</p>
                                            <p>Este es un mensaje de prueba que se ha recibido en la aplicación</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Todos los mensajes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Notificación 1 <span class="label label-default">Solicitud alumno</span></a>
                            </li>
                            <li>
                                <a href="#">Notificación 2 <span class="label label-primary">Alumno registrado</span></a>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Todas las notificaciones</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrador <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Configuración</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Mensajería de la aplicación -->

                <!-- Panel navegación izquierdo -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="javascript:;" data-toggle="collapse" data-target="#empresas"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Empresas<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="empresas" class="collapse">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-plus"></i> Registrar empresa</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-edit"></i> Solicitar alumnos</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-pencil"></i> Editar empresa</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-trash"></i> Baja empresa</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#tutores"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tutores<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="tutores" class="collapse">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-plus"></i> Registrar tutor</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-edit"></i> Ofertar alumnos</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-pencil"></i> Editar tutor</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-trash"></i> Baja tutor</a>
                                </li>
                            </ul>
                        </li>     
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#alumnos"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Alumnos<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="alumnos" class="collapse">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-plus"></i> Registrar alumno</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-pencil"></i> Editar alumno</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-trash"></i> Baja alumno</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Panel navegación izquierdo -->
            </nav>
            <!-- Panel navegación izquierdo y superior -->

            <!-- Panel central -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Panel de Administración <small> FUTUROS PROFESIONALES</small>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>¿Necesitas alumnos para realizar las prácticas en tu empresa?</strong> ¡Nuestros alumnos tienen las aptitudes y habilidades que estás buscando!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>¿Necesitas alumnos para realizar las prácticas en tu empresa?</strong> ¡Nuestros alumnos tienen las aptitudes y habilidades que estás buscando!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>¿Necesitas alumnos para realizar las prácticas en tu empresa?</strong> ¡Nuestros alumnos tienen las aptitudes y habilidades que estás buscando!
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>¿Necesitas alumnos para realizar las prácticas en tu empresa?</strong> ¡Nuestros alumnos tienen las aptitudes y habilidades que estás buscando!
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>¿Necesitas alumnos para realizar las prácticas en tu empresa?</strong> ¡Nuestros alumnos tienen las aptitudes y habilidades que estás buscando!
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>¿Necesitas alumnos para realizar las prácticas en tu empresa?</strong> ¡Nuestros alumnos tienen las aptitudes y habilidades que estás buscando!
                            </div>
                        </div>
                    </div>

                    <!-- DIV de colores -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">3</div>
                                            <div>Nuevos comentarios!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">2</div>
                                            <div>Nuevas tareas!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shield fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">1</div>
                                            <div>Certificado AENOR!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">7</div>
                                            <div>Ciclos formativos!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- DIV de colores -->

                    <!-- DIV de colores -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">3</div>
                                            <div>Nuevos comentarios!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">2</div>
                                            <div>Nuevas tareas!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shield fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">1</div>
                                            <div>Certificado AENOR!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">7</div>
                                            <div>Ciclos formativos!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver detalles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- DIV de colores -->
                </div>
            </div>
            <!-- Panel central -->
        </div>
        <!-- DIV principal - Contenedor -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>

    </body>

</html>
