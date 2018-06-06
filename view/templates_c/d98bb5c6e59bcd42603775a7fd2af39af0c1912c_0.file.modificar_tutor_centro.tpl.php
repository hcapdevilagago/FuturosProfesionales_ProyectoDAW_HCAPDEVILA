<?php
/* Smarty version 3.1.32, created on 2018-06-06 03:59:50
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\centro\modificar_tutor_centro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1740165f4dd4_83403943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd98bb5c6e59bcd42603775a7fd2af39af0c1912c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\centro\\modificar_tutor_centro.tpl',
      1 => 1528249901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1740165f4dd4_83403943 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <legend class="text-center"> MODIFICACIÓN PERFIL <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['rol']->value, 'UTF-8');?>
</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre completo del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  maxlength="50" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">DNI del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input minlength="9" maxlength="9" name="dni" class="form-control text-center" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getDni();?>
" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo Eléctronico <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input maxlength="50" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>
" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input minlength="9" maxlength="9" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getTelefono();?>
" class="form-control text-center" type="tel" required>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="col-md-4 control-label"></span>
                                    <div class="input-group" style="margin-bottom: 5%;">
                                        <input type="submit" name="editar" value="Modificar perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
" class="btn btn-primary">
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
