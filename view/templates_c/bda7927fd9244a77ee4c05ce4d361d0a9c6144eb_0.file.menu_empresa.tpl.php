<?php
/* Smarty version 3.1.32, created on 2018-06-02 11:06:17
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\menu_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b125e097b1d36_36170393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda7927fd9244a77ee4c05ce4d361d0a9c6144eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\menu_empresa.tpl',
      1 => 1527930373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:empresas/solicitar_alumnos.tpl' => 2,
    'file:modificar_tutor.tpl' => 1,
    'file:baja_tutor.tpl' => 1,
  ),
),false)) {
function content_5b125e097b1d36_36170393 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel navegación izquierdo -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="javascript:;" data-toggle="collapse" data-target="#empresas"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Empresas<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="empresas" class="collapse">
                <li>
                    <a href="panel_administracion.php?accion=solicitar_alumnos"><i class="fa fa-fw fa-graduation-cap"></i> Solicitar alumnos</a>
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
        <?php $_smarty_tpl->_subTemplateRender("file:modificar_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_GET['accion'] == 'baja_tutor') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:baja_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:empresas/solicitar_alumnos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
