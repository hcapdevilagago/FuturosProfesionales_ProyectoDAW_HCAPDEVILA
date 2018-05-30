<?php
/* Smarty version 3.1.32, created on 2018-05-30 21:52:17
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\exito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0f00f1a472e6_31647173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '701a067c272b78db6274e8a82ab2fc00f617d816' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\exito.tpl',
      1 => 1527709910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0f00f1a472e6_31647173 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>//Redirigimos el flujo de la ejecución al login de inicio
header("Refresh: 1; url=index.php");
exit;
<?php echo '?>';?>
<!DOCTYPE html>
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
        <title>:: CAMBIOS OK ::</title>
    </head>
    <body>
        <div class="informacion" style="padding: 3%">
            <div class="tile-header">
                <h4 class="text-center" style="color: green; font-weight: bold;">MENSAJE INFORMATIVO DE LA APLICACIÓN WEB</h4><hr/>
                <img src="./images/logo1.png" height="25%" width="25%" style="margin-left: auto; margin-right: auto; display: block;"/>
            </div>
            <div class="tile-body text-center" style="margin-top: 7%;">
                <img src="./images/check.png" height="18%" width="18%" style="margin-left: auto; flaot: left; margin-right: auto;"/>
                <h3 style="color: green; display: inline-block; font-weight: bold;">Los cambios se han realizado con éxito.</h3>
            </div>
        </div>
    </body>
</html><?php }
}
