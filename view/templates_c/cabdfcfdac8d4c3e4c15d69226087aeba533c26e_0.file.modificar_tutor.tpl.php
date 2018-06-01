<?php
/* Smarty version 3.1.32, created on 2018-06-01 01:36:57
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\modificar_tutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b108719a11424_77614305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabdfcfdac8d4c3e4c15d69226087aeba533c26e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\modificar_tutor.tpl',
      1 => 1527809796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b108719a11424_77614305 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white;">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST" id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> MODIFICACIÓN PERFIL CON ROL <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['rol']->value, 'UTF-8');?>
</legend>        
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre de usuario</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="usuario" placeholder="Introduzca el nombre de usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getUser();?>
" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre completo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="nombre" placeholder="Introduzca su nombre completo" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Documento Nacional de Identidad</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input  name="dni" placeholder="Introduzca su dni" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getDni();?>
" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo Eléctronico</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input name="email" placeholder="Introduzca su dirección de correo electrónico" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>
" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input name="tel" placeholder="Introduzca su teléfono (9 dígitos numéricos)" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getTelefono();?>
" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="col-md-4 control-label"></span>
                                    <div class="input-group">
                                        <input type="reset" name="limpiar" value="Limpiar formulario" class="btn btn-primary">
                                        <input type="submit" name="editar" value="Modificar perfil del alumno" class="btn btn-primary">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel central --><?php }
}
