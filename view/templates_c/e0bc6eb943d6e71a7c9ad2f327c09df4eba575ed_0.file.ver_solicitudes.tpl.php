<?php
/* Smarty version 3.1.32, created on 2018-06-05 19:47:47
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\administrador\ver_solicitudes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b16ccc3ce65f2_79048945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0bc6eb943d6e71a7c9ad2f327c09df4eba575ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\administrador\\ver_solicitudes.tpl',
      1 => 1528219865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b16ccc3ce65f2_79048945 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <div id="cuadro" style="margin-top: 100px;">
                                <h2>SOLICITUDES REGISTRADAS EN LA BASE DE DATOS</h2><hr style="margin-bottom: 8%;"/>
                                <table id="tabla" class="display" cellspacing="0" width="120%">
                                    <thead>
                                        <tr>
                                            <th>Empresa</th>
                                            <th>Ciclo</th>
                                            <th>Cantidad alumnos</th>
                                            <th>Fecha</th>
                                            <th>Actividad</th>
                                            <th>Observaciones</th>
                                            <th>Proyecto</th>
                                        </tr>
                                    </thead>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['solicitudes']->value, 'solicitud');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['solicitud']->value) {
?>
                                        <tr>
                                            <th>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresas']->value, 'empresa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['empresa']->value->getId_empresa() == $_smarty_tpl->tpl_vars['solicitud']->value->getId_empresa()) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['empresa']->value->getNombre();?>

                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </th>
                                            <th>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciclos']->value, 'ciclo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ciclo']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['solicitud']->value->getId_ciclo() == $_smarty_tpl->tpl_vars['ciclo']->value->getId_ciclo()) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['ciclo']->value->getNombre();?>

                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['solicitud']->value->getCantidad_alumnos();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['solicitud']->value->getFecha_creacion();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['solicitud']->value->getActividad();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['solicitud']->value->getObservaciones();?>
</th>
                                            <th><?php if ($_smarty_tpl->tpl_vars['solicitud']->value->getProyecto() == 0) {?><input type="checkbox" disabled/><?php } else { ?><input type="checkbox" checked disabled/><?php }?></th>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel central --><?php }
}
