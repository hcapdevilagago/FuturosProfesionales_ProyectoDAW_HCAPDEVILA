<?php
/* Smarty version 3.1.32, created on 2018-05-28 23:03:26
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\modificar_tutor_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0c6e9ed3e855_52882875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6380d4d864aa38ee3ddc0302b80c0b971e5198' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\modificar_tutor_empresa.tpl',
      1 => 1527541402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0c6e9ed3e855_52882875 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white;">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> Modificación del perfil del tutor de empresa</legend>        
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
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre empresa a la que pertenece</label>
                                        <div class="col-md-6 selectContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="ciclos" class="form-control selectpicker">
                                                    <option value=" " >Por favor, seleccione su empresa</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresas']->value, 'empresa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->value) {
?>
                                                        <option><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getNombre_legal();?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-4 control-label"></span>
                                        <div class="input-group">
                                            <input type="submit" name="clear" value="Limpiar formulario" class="btn btn-primary">
                                            <input type="submit" name="edit" value="Modificar perfil del alumno" class="btn btn-primary">
                                        </div>                                       
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
