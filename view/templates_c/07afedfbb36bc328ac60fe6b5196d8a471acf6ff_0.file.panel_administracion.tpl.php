<?php
/* Smarty version 3.1.32, created on 2018-06-02 13:10:39
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\panel_administracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b127b2f9b2955_39290692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07afedfbb36bc328ac60fe6b5196d8a471acf6ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\panel_administracion.tpl',
      1 => 1527937833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alumnos/menu_alumno.tpl' => 1,
    'file:empresas/menu_empresa.tpl' => 1,
    'file:centro/menu_tutor_centro.tpl' => 1,
  ),
),false)) {
function content_5b127b2f9b2955_39290692 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Gestión de Administración de FCT :: CPIFP Los Enlaces (Trabajo de Fin de Ciclo - DAW)">
        <meta name="author" content="Héctor Capdevila Gago">
        <title>:: <?php echo strtoupper($_smarty_tpl->tpl_vars['rol']->value);?>
 :: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 ::</title>

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
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="./images/logo4.png" style="float: left; padding-top:0.5%; padding-bottom: -5%;" height="4%" width="4%"/>
                    <a class="navbar-brand" href="index.php" >Conectad@, <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 <b class="caret"></b></a>
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
                                <a href="desconexion.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Mensajería de la aplicación -->
                <?php if ($_smarty_tpl->tpl_vars['rol']->value == "alumno") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:alumnos/menu_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == "empresa") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:empresas/menu_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == "tutor_centro") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/menu_tutor_centro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
        </div>
        <!-- DIV principal - Contenedor -->

        <!-- Bootstrap Core JavaScript -->
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!-- Morris Charts JavaScript -->
        <?php echo '<script'; ?>
 src="js/plugins/morris/raphael.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/plugins/morris/morris-data.js"><?php echo '</script'; ?>
>

        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrapvalidator.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/validate.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
