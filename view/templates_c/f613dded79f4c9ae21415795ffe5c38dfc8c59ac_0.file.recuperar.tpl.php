<?php
/* Smarty version 3.1.32, created on 2018-06-06 19:08:25
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\recuperar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b181509b33695_48379241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f613dded79f4c9ae21415795ffe5c38dfc8c59ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\recuperar.tpl',
      1 => 1528214829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b181509b33695_48379241 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title>:: RECUPERACIÓN DE CONTRASEÑA ::</title>
    </head>
    <body>
        <div class="recuperacion" style="padding: 4%">
            <form id="form" action="index.php" method="POST">
                <div class="tile-header">
                    <img src="./images/logo1.png" height="18%" width="18%" style="margin-left: auto; margin-right: auto; display: block;"/>
                    <h4 class="text-center">RECUPERACIÓN DE CONTRASEÑA DE ACCESO</h4><hr/>
                </div>
                <label class="form-input">
                    <i class="material-icons">email</i>
                    <input type="email" name="email" autofocus="true" style="text-align: center;" required />
                    <span class="label">INTRODUZCA EL CORREO ELÉCTRONICO DEL USUARIO QUE QUIERA RECUPERAR LA CONTRASEÑA DE ACCESO</span>
                    <span class="underline"></span>
                </label>
                <div class="tile-body" style="margin-top: 3%;">
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 1%;">
                        <input type="submit" style="margin-top: 1%; display: inline-block; width: 500px;" name="recuperar_pass" value="ENVIAR CONTRASEÑA" class="btn btn-success"/>
                    </div>  
                </div>
            </form>
            <form id="form" action="index.php" method="POST">
                <div class="submit-container clearfix" style="text-align: center; margin-top: 1%;">  
                    <input type="submit" style="margin-top: 1%; width: 500px;" name="volver" value="VOLVER AL LOGIN DE INICIO" class="btn btn-info"/>
                </div>  
            </form>
        </div>
    </body>
</html><?php }
}
