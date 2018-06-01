<?php
/* Smarty version 3.1.32, created on 2018-06-01 01:51:47
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\centro\menu_tutor_centro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b108a93a12909_34193380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d522f66b4e46b82f1e7979fbd60c2780ebde536' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\centro\\menu_tutor_centro.tpl',
      1 => 1527810679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:centro/ver_solicitudes.tpl' => 1,
    'file:modificar_tutor.tpl' => 1,
    'file:baja_tutor.tpl' => 1,
  ),
),false)) {
function content_5b108a93a12909_34193380 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel navegación izquierdo -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="javascript:;" data-toggle="collapse" data-target="#tutores"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tutores<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="tutores" class="collapse">
                <li>
                    <a href="panel_administracion.php?accion=ver_solicitudes"><i class="fa fa-fw fa-eye"></i> Ver solicitudes</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=modificar_tutor"><i class="fa fa-fw fa-pencil"></i> Modificar tutor</a>
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

<!-- Panel central -->
<div id="page-wrapper" style="height: 100%;">
    <?php if (isset($_GET['accion'])) {?>
        <?php if ($_GET['accion'] == 'solicitar_alumnos') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_solicitudes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_GET['accion'] == 'modificar_tutor') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:modificar_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_GET['accion'] == 'baja_tutor') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:baja_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php } else { ?>
        <h1>BIENVENIDO HECTOR</h1>
    <?php }?>
</div>
<!-- Panel central --><?php }
}
