<?php
/* Smarty version 3.1.32, created on 2018-05-31 00:44:15
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0f293f1ea822_29424965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3c58294693ee4041554167a5deca7487cd14b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\index.tpl',
      1 => 1527720252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0f293f1ea822_29424965 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--
******************************************************************
***** PROYECTO FINAL DE CICLO DESARROLLO DE APLICACIONES WEB *****
***** El actual proyecto ha sido desarrollado por el alumno  *****
***** HÉCTOR CAPDEVILA GAGO, estudiante de 2º de Desarrollo  *****
***** de Aplicaciones Web del CPIFP Los Enlaces de Zaragoza  *****
******************************************************************
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
        <title>:: FUTUROS PROFESIONALES ::</title>
    </head>
    <body>
        <div class="tile">
            <div class="tile-header">
                <img src="./images/logo1.png" height="75%" width="75%" style="margin-top:5%; margin-left: auto; margin-right: auto; display: block;"/>
            </div>
            <div class="tile-body">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <i class="material-icons">persona</i>
                        <input type="text" name="user" autofocus="true" style="text-align: center;" required />
                        <span class="label">USUARIO</span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <i class="material-icons">lock</i>
                        <input type="password" name="pass" style="text-align: center;" required/>
                        <span class="label">CONTRASEÑA</span>
                        <div class="underline"></div>
                    </label>
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 4rem;">  
                        <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="acceder" value="ACCEDER AL SITIO" class="btn btn-success"/>
                </form>
                <form id="form2" action="index.php" method="POST">
                    <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="registrar" value="REGISTRAR ALUMNO" class="btn btn-warning"/>
                    <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="registrar" value="REGISTRAR TUTOR DE EMPRESA" class="btn btn-warning"/>
                    <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="registrar" value="¿Ha olvidado la contraseña?" class="btn btn-link"/>
                </form>
            </div>
            <span class="label">USUARIO</span>
            <?php if (isset($_smarty_tpl->tpl_vars['msj_error']->value)) {?>
                <!--En el caso de que el usuario introducido NO exista en la base de datos-->
                <span class="label" style="margin-top: 1%; color: red;"><span class="glyphicon glyphicon-remove"></span> <?php echo $_smarty_tpl->tpl_vars['msj_error']->value;?>
</span>
                <div class="underline"></div>
            <?php }?>
        </div>
    </div>
</body>
</html><?php }
}
