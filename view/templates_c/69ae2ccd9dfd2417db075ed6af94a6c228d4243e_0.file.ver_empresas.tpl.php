<?php
/* Smarty version 3.1.32, created on 2018-06-05 19:22:39
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\centro\ver_empresas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b16c6df4e42c5_95628404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ae2ccd9dfd2417db075ed6af94a6c228d4243e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\centro\\ver_empresas.tpl',
      1 => 1528219321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b16c6df4e42c5_95628404 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <div  id="cuadro" style="margin-top: 100px;">
                                <h2 class="text-center">EMPRESAS REGISTRADAS EN LA BASE DE DATOS</h2><hr style="margin-bottom: 8%;"/>
                                <table id="tabla" class="display" cellspacing="0" width="130%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>CIF</th>
                                            <th>Dirección</th>
                                            <th>Teléfono</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empresas']->value, 'empresa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->value) {
?>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getId_empresa();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getNombre();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getCif();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getDireccion_fiscal();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getTelefono();?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getEmail();?>
</th>
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
