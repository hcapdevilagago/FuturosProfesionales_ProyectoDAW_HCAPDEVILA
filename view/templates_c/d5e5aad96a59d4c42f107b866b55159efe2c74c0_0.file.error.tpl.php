<?php
/* Smarty version 3.1.32, created on 2018-05-30 21:38:24
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0efdb0b86284_02000837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e5aad96a59d4c42f107b866b55159efe2c74c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\error.tpl',
      1 => 1527709099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0efdb0b86284_02000837 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
        <title>:: CAMBIOS ERROR ::</title>
    </head>
    <body>
        <div class="informacion" style="padding: 3%">
            <div class="tile-header">
                <h4 class="text-center" style="color: red; font-weight: bold;">MENSAJE INFORMATIVO DE LA APLICACIÓN WEB</h4><hr/>
                <img src="./images/logo1.png" height="25%" width="25%" style="margin-left: auto; margin-right: auto; display: block;"/>
            </div>
            <div class="tile-body text-center" style="margin-top: 2%;">
                <img src="./images/error.png" height="18%" width="18%" style="margin-left: auto; flaot: left; margin-right: auto;"/>
                <h3 class="text-center" style="color: red; display: inline-block; font-weight: bold;">No se han realizado los cambios.</h3>
                <h5 class="text-center" style="padding-top: 1%; color: red; display: inline-block;">La acción que se ha intentado realizar no se ha podido llevar a cabo, 
                    si cree que hay algún problema contacte con el administrador de la Aplicación Web en el siguiente e-mail: <strong><u>info@futurosprofesionales.com</u></strong></h5>
            </div>
        </div>
    </body>
</html><?php }
}
