<?php
/* Smarty version 3.1.32, created on 2018-06-02 12:31:27
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\solicitar_alumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1271ff1622b2_18030278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e921784271557db782dab5b26031769ca6345243' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\solicitar_alumnos.tpl',
      1 => 1527935481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1271ff1622b2_18030278 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> SOLICITUD DE ALUMNOS PARA REALIZACIÓN DE FCT</legend>
                                    <div class="form-group has-feedback">
                                        <label for="empresas_colaboradoras"  class="col-md-4 control-label">Empresa colaboradora</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <select name="empresas" class="form-control selectpicker" disabled>
                                                    <option selected ><?php echo $_smarty_tpl->tpl_vars['nombre_empresa']->value;?>
</option>
                                                </select>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="ciclos_formativos"  class="col-md-4 control-label">Ciclo formativo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="cantidad"  class="col-md-4 control-label">Cantidad de alumnos formativo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                <input minlength="1" name="cantidad_alumnos" type="number" value="1" class="form-control" >
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="proyecto" /><span style="font-size: 12px;"> El/los alumno/s que solicita SI podrán avanzar proyecto final de ciclo en <?php echo $_smarty_tpl->tpl_vars['nombre_empresa']->value;?>
 durante el período que estén de prácticas.</span>
                                            </div>
                                        </label>   
                                    </div>
                                    <div class="form-group text-center" style="margin: 0 auto; margin-top: 1%; width: 80%;">
                                        <textarea maxlength="1500" name="observaciones" placeholder="Indique cualquier observación oportuna que quiera dejar reflejada en su solicitud, por ejemplo las actividades que van a desarrollar el/los alumno/s que solicitan." class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Estoy de acuerdo con solicitar al CPIFP Los Enlaces el número de alumnos arriba específicado.</span>
                                            </div>
                                        </label>   
                                    </div>                
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="solicitar" class="btn btn-success" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> SOLICITAR ALUMNOS</button>
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
