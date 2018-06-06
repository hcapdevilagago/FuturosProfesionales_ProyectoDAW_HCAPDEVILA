<?php
/* Smarty version 3.1.32, created on 2018-06-06 03:32:59
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\administrador\baja_tutor_centro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1739cbc489f8_63888125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4150ed081599cd02840edd7f26c85bfced438b7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\administrador\\baja_tutor_centro.tpl',
      1 => 1528248748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1739cbc489f8_63888125 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div style="margin-top: 5%;" class="col-lg-9">
                            <form class="form-horizontal" action="panel_administracion.php" method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center">BAJA TUTOR CENTRO</legend>
                                    <div class="form-group has-feedback">
                                        <label for="ciclos_formativos"  class="col-md-4 control-label">Tutor del centro educativo <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="tutores" class="form-control selectpicker" required>
                                                    <option value=" ">Por favor, seleccione un tutor del centro</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tutores']->value, 'tutor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tutor']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['tutor']->value->getNombre() != $_smarty_tpl->tpl_vars['nombre']->value) {?>
                                                            <option><?php echo $_smarty_tpl->tpl_vars['tutor']->value->getNombre();?>
</option>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin: 3%;">
                                        <div class="col-lg-12">
                                            <div class="alert alert-info alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <i class="fa fa-info-circle"></i> <strong>Se eliminarán todas las solicitudes de alumnos relacionadas con los ciclos formativos que tengan relación con el tutor del centro educativo que se ha seleccionado.</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="baja_tutor" class="btn btn-danger" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> CONFIRMAR BAJA DEL TUTOR</button>
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
