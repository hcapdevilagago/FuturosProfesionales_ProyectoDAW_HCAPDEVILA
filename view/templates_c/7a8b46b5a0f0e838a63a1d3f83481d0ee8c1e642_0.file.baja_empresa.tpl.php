<?php
/* Smarty version 3.1.32, created on 2018-06-05 00:57:02
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\administrador\baja_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b15c3be259fc3_92731751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a8b46b5a0f0e838a63a1d3f83481d0ee8c1e642' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\administrador\\baja_empresa.tpl',
      1 => 1528153019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b15c3be259fc3_92731751 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action=" " method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center">BAJA EMPRESA</legend>
                                    <div class="form-group has-feedback">
                                        <label for="ciclos_formativos"  class="col-md-4 control-label">Empresa colaboradora <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="empresas" class="form-control selectpicker" required>
                                                    <option value=" ">Por favor, seleccione una empreas</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresas']->value, 'empresa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->value) {
?>
                                                        <option><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getNombre();?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Estoy seguro, y soy consciente de que se va a proceder con la baja de la empresa colaboradora seleccionada.<br/>También se eliminarán todas las solicitudes de alumnos relacionadas con dicha empresa y los tutores de empresa que esta tenga.</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="baja_empresa" class="btn btn-danger" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> CONFIRMAR BAJA DE LA EMPRESA</button>
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
