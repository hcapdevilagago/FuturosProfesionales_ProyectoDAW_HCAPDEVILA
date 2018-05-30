<?php
/* Smarty version 3.1.32, created on 2018-05-31 00:53:32
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\registrar_alumno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0f2b6cd2ede8_66273408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49e01ad3e128f1009f93862b24c058d1581b648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\registrar_alumno.tpl',
      1 => 1527717536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0f2b6cd2ede8_66273408 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title>:: REGISTRAR ALUMNO ::</title>
    </head>
    <body>
        <div class="registro" style="padding: 4%">
            <div class="tile-header">
                <img src="./images/logo1.png" height="18%" width="18%" style="margin-left: auto; margin-right: auto; display: block;"/>
                <h4 class="text-center">REGISTRAR NUEVO ALUMNO DEL CENTRO EDUCATIVO</h4><hr/>
            </div>
            <div class="tile-body" style="margin-top: 3%;">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <input type="text" name="user" autofocus="true" style="text-align: center;" required />
                        <span class="label">USUARIO</span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <input type="password" name="pass" style="text-align: center;" required/>
                        <span class="label">CONTRASEÑA</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="text" name="nombre" style="text-align: center;" required/>
                        <span class="label">NOMBRE COMPLETO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="text" name="dni" style="text-align: center;" required/>
                        <span class="label">DOCUMENTO NACIONAL DE IDENTIDAD</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="email" name="email" style="text-align: center;" required/>
                        <span class="label">CORREO ELÉCTRONICO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="tel" name="tel" style="text-align: center;" required/>
                        <span class="label">TELÉFONO DE CONTACTO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input text-center">
                        <span class="select">CICLO FORMATIVO</span>
                        <select name="ciclos" class="form-control selectpicker" required>
                            <option value=" ">Por favor, seleccione el ciclo formativo al que pertenece</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciclos']->value, 'ciclo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ciclo']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['ciclo']->value->getNombre();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </label>
                    <label class="form-input text-center">
                        <span class="select">TUTOR DEL CENTRO EDUCATIVO</span>
                        <select name="tutores" class="form-control" required>
                            <option value=" ">Por favor, seleccione su tutor del centro educativo</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tutores']->value, 'tutor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tutor']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['tutor']->value->getNombre();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </label>
                    <label>
                        <div style="margin-top: 1%;">
                            <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Acepto los términos y condiciones del registro en la base de datos del CPIFP Los Enlaces</span>
                        </div>
                    </label>
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 1%;">  
                        <input type="reset" style="margin-top: 1%; display: inline-block; width: 250px;" name="limpiar" value="LIMPIAR FORMULARIO" class="btn btn-success"/>
                        <input type="submit" style="margin-top: 1%; display: inline-block; width: 250px;" name="anadir_alumno" value="REGISTRAR NUEVO ALUMNO" class="btn btn-success"/>
                    </div>
                </form>
                <form id="form" action="index.php" method="POST">
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 1%;">  
                        <input type="submit" style="margin-top: 1%; width: 500px;" name="volver" value="VOLVER AL LOGIN DE INICIO" class="btn btn-info"/>
                    </div>  
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
