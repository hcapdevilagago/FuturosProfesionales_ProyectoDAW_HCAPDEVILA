<?php
/* Smarty version 3.1.32, created on 2018-06-05 20:12:42
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\centro\ver_solicitudes_tutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b16d29a0f1fa6_33034223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de2c6f63e37ebfa83135962585ebe287458065d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\centro\\ver_solicitudes_tutor.tpl',
      1 => 1528222359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b16d29a0f1fa6_33034223 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <div id="cuadro" style="margin-top: 100px;">
                                <h2>SOLICITUDES PARA EL TUTOR</h2><hr style="margin-bottom: 8%;"/>
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
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tutor_ciclos']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['solicitud']->value->getId_ciclo()) {?>
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
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
