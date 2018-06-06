<?php
/* Smarty version 3.1.32, created on 2018-06-06 04:18:43
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\panel_administracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b174483397061_83350299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07afedfbb36bc328ac60fe6b5196d8a471acf6ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\panel_administracion.tpl',
      1 => 1528251520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:empresas/menu_empresa.tpl' => 1,
    'file:centro/menu_tutor_centro.tpl' => 1,
  ),
),false)) {
function content_5b174483397061_83350299 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
    <head>
        <title>:: <?php echo strtoupper($_smarty_tpl->tpl_vars['rol']->value);?>
 :: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 ::</title>
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
        <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/datatables.js"><?php echo '</script'; ?>
>
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
                    <a class="navbar-brand" href="panel_administracion.php" >Conectad@, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['nombre']->value, 'UTF-8');?>
</a>
                </div>
                <!-- Mensajería de la aplicación -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="desconexion.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Mensajería de la aplicación -->

                                <?php if ($_smarty_tpl->tpl_vars['rol']->value == "empresa") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:empresas/menu_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == "tutor_centro") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/menu_tutor_centro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
        </div>
        <!-- DIV principal - Contenedor -->

        <!--Referenciamos la ubicación de ficheros Bootstrap Core JavaScript para el correcto funcionamiento de la aplicación web-->
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!--Referenciamos la ubicación de ficheros Morris Charts JavaScript para el correcto funcionamiento de la aplicación web-->
        <?php echo '<script'; ?>
 src="js/plugins/morris/raphael.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/plugins/morris/morris-data.js"><?php echo '</script'; ?>
>

        <!--Referenciamos la ubicación de ficheros JQUERY para el correcto funcionamiento de la aplicación web-->
        <?php echo '<script'; ?>
 src="js/bootstrapvalidator.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/validate.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
