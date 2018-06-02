<?php
/* Smarty version 3.1.32, created on 2018-06-02 17:58:52
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\modificar_tutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b12bebc9c70e0_44695203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '843db620c92e564b48196071cf17b9af56da1b66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\modificar_tutor.tpl',
      1 => 1527955062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b12bebc9c70e0_44695203 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <label class="col-md-4 control-label">Nombre de la empresa <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  maxlength="50" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
" class="form-control text-center"  type="text" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">CIF de la empresa <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input minlength="9" maxlength="9" name="cif" class="form-control text-center" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCif();?>
" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Dirección fiscal <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input maxlength="300" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getDireccion_fiscal();?>
" class="form-control text-center"  type="text" required>
                                            </div>
                                        </div>
                                    </div>                                            
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input minlength="9" maxlength="9"name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getTelefono();?>
" class="form-control text-center" type="tel" required>
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
                                        <label class="col-md-4 control-label">Horario laboral <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input maxlength="50" name="horario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getHorario();?>
" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre del representante <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input maxlength="50" name="representante_nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getRepresentante_nombre();?>
" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">DNI del representante <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input minlength="9" maxlength="9" name="representante_dni" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getRepresentante_dni();?>
" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Actividad de la empresa <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <textarea maxlength="50" name="actividad" class="form-control text-center" rows="2" required><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getActividad();?>
</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Descripción formal de la empresa que se realizan en la empresa <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <textarea maxlength="1500" name="descripcion" class="form-control text-center" rows="6" required><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getDescripcion();?>
</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Confirmo que quiero modificar los datos del perfil de usuario <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['usuario']->value->getUser(), 'UTF-8');?>
.</span>
                                            </div>
                                        </label>   
                                    </div>
                                    <span class="col-md-4 control-label"></span>
                                    <div class="input-group" style="margin-bottom: 5%;">
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
