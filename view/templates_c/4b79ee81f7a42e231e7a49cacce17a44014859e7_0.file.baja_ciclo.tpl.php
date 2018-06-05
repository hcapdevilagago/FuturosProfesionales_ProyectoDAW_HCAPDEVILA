<?php
/* Smarty version 3.1.32, created on 2018-06-05 00:56:36
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\administrador\baja_ciclo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b15c3a4f10dc8_79077117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b79ee81f7a42e231e7a49cacce17a44014859e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\administrador\\baja_ciclo.tpl',
      1 => 1528152993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b15c3a4f10dc8_79077117 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <legend class="text-center">BAJA CICLO FORMATIVO</legend>
                                    <div class="form-group has-feedback">
                                        <label for="ciclos_formativos"  class="col-md-4 control-label">Ciclo formativo <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="ciclos" class="form-control selectpicker" required>
                                                    <option value=" ">Por favor, seleccione el ciclo formativo</option>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Estoy seguro, y soy consciente de que se va a proceder con la baja del ciclo formativo seleccionado.<br/>También se eliminarán todos los alumnos y tutores del centro educativo que pertenezcan a este ciclo formativo.</span>
                                            </div>
                                        </label>   
                                    </div>                
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="baja_ciclo" class="btn btn-danger" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> CONFIRMAR BAJA DEL CICLO</button>
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
