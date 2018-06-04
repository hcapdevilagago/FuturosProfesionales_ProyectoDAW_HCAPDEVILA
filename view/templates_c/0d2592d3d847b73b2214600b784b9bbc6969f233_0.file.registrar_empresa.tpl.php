<?php
/* Smarty version 3.1.32, created on 2018-06-04 23:39:34
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\registrar_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b15b1969dfb43_55746808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2592d3d847b73b2214600b784b9bbc6969f233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\registrar_empresa.tpl',
      1 => 1528129114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b15b1969dfb43_55746808 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title>:: REGISTRAR EMPRESA ::</title>
    </head>
    <body>
        <div class="registro" style="padding: 4%">
            <div class="tile-header">
                <img src="./images/logo1.png" height="18%" width="18%" style="margin-left: auto; margin-right: auto; display: block;"/>
                <h4 class="text-center">REGISTRO DE NUEVA EMPRESA</h4><hr/>
            </div>
            <div class="tile-body" style="margin-top: 3%;">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <input maxlength="30" type="text" name="user" autofocus="true" style="text-align: center;" required />
                        <span class="label">NOMBRE DE USUARIO <span style="color:red;">*</span></span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <input maxlength="255" type="password" name="pass" style="text-align: center;" required/>
                        <span class="label">CONTRASEÑA DE ACCESO <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input maxlength="50" type="text" name="nombre" style="text-align: center;" required/>
                        <span class="label">NOMBRE DE LA EMPRESA <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input minlength="9" maxlength="9" type="text" name="cif" style="text-align: center;" required/>
                        <span class="label">CÓDIGO DE IDENTIFICACIÓN FISCAL (CIF) <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input maxlength="300" type="text" name="direccion_fiscal" style="text-align: center;" required/>
                        <span class="label">DIRECCIÓN FISCAL COMPLETA <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label> 
                    <label class="form-input">
                        <input minlength="9" maxlength="9" type="tel" name="telefono" style="text-align: center;" required/>
                        <span class="label">TELÉFONO DE CONTACTO <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input maxlength="50" type="email" name="email" style="text-align: center;" required/>
                        <span class="label">CORREO ELÉCTRONICO <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input maxlength="50" type="text" name="horario" placeholder="Por favor, siga el siguiente formato: L-V (09:00H-18:00H)" style="text-align: center;" required/>
                        <span class="label">HORARIO LABORAL <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input maxlength="50" type="text" name="representante_nombre" style="text-align: center;" required/>
                        <span class="label">NOMBRE COMPLETO DEL REPRESENTANTE <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input minlength="9" maxlength="9" type="text" name="representante_dni" style="text-align: center;" required/>
                        <span class="label">DNI DEL REPRESENTANTE <span style="color:red;">*</span></span>
                        <div class="underline"></div>
                    </label>
                    <div>       
                        <label class="form-input">
                            <span class="textarea">ACTIVIDAD DE LA EMPRESA <span style="color:red;">*</span></span>
                        </label>
                    </div>
                    <div class="form-input text-center" style="margin: 0 auto; margin-top: 8%;">
                        <textarea maxlength="200" name="actividad" class="form-control" rows="2" required></textarea>
                    </div>
                    <div>       
                        <label class="form-input">
                            <span class="textarea">DESCRIPCIÓN DE LA EMPRESA <span style="color:red;">*</span></span>
                        </label>
                    </div>
                    <div class="form-input text-center" style="margin: 0 auto; margin-top: 8%;">
                        <textarea maxlength="1500" name="descripcion" placeholder="Escriba la descripción formal de su empresa en la que se cuenten aspectos relevantes que se quieran destacar." class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                    <label>
                        <div style="margin-top: 5%;">
                            <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Acepto los términos y condiciones del registro en la base de datos del CPIFP Los Enlaces.</span>
                        </div>
                    </label>
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 5%;">
                        <input type="reset" style="margin-top: 1%; display: inline-block; width: 200px;" name="limpiar" value="LIMPIAR FORMULARIO" class="btn btn-success"/>
                        <input type="submit" style="margin-top: 1%; display: inline-block; width: 300px;" name="anadir_empresa" value="REGISTRAR NUEVA EMPRESA" class="btn btn-success"/>
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
