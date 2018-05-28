<?php
/* Smarty version 3.1.32, created on 2018-05-28 21:34:52
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\menu_tutor_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0c59dc835ef1_31079061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba23c4d2c459981db4dbf298b3e3eea31f1efec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\menu_tutor_empresa.tpl',
      1 => 1527536086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:empresas/solicitar_alumnos.tpl' => 1,
    'file:empresas/modificar_tutor_empresa.tpl' => 1,
    'file:empresas/baja_tutor.tpl' => 1,
  ),
),false)) {
function content_5b0c59dc835ef1_31079061 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel navegación izquierdo -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="javascript:;" data-toggle="collapse" data-target="#empresas"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Empresas<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="empresas" class="collapse">
                <li>
                    <a href="panel_administracion.php?accion=solicitar_alumnos"><i class="fa fa-fw fa-plus"></i> Solicitar alumnos</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=modificar_tutor"><i class="fa fa-fw fa-edit"></i> Modificar tutor</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=baja_tutor"><i class="fa fa-fw fa-trash"></i> Baja tutor</a>
                </li>
            </ul>
        </li>              
    </ul>
</div>
<!-- Panel navegación izquierdo -->
</nav>
<!-- Panel navegación izquierdo y superior -->

<?php if (isset($_GET['accion'])) {?>
    <?php if ($_GET['accion'] == 'solicitar_alumnos') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:empresas/solicitar_alumnos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_GET['accion'] == 'modificar_tutor') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:empresas/modificar_tutor_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_GET['accion'] == 'baja_tutor') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:empresas/baja_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
} else { ?>
    <h1>BIENVENIDO HECTOR</h1>
<?php }
}
}
