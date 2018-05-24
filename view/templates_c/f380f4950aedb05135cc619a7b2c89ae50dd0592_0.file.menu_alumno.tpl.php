<?php
/* Smarty version 3.1.32, created on 2018-05-25 00:50:00
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\alumnos\menu_alumno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b074199008bb2_92413103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f380f4950aedb05135cc619a7b2c89ae50dd0592' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\alumnos\\menu_alumno.tpl',
      1 => 1527202197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alumnos/modificar_alumno.tpl' => 1,
    'file:alumnos/ver_empresas.tpl' => 1,
    'file:alumnos/baja_alumno.tpl' => 1,
  ),
),false)) {
function content_5b074199008bb2_92413103 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel navegación izquierdo -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="javascript:;" data-toggle="collapse" data-target="#alumnos"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Alumnos<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="alumnos" class="collapse">
                <li>
                    <a href="panel_administracion.php?accion=modificar"><i class="fa fa-fw fa-plus"></i> Modificar alumno</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=ver_empresas"><i class="fa fa-fw fa-pencil"></i> Ver empresas</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=baja"><i class="fa fa-fw fa-trash"></i> Baja alumno</a>
                </li>
            </ul>
        </li>         
    </ul>
</div>
<!-- Panel navegación izquierdo -->
</nav>
<!-- Panel navegación izquierdo y superior -->

<?php if (isset($_GET['accion'])) {?>
    <?php if ($_GET['accion'] == 'modificar') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:alumnos/modificar_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_GET['accion'] == 'ver_empresas') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:alumnos/ver_empresas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_GET['accion'] == 'baja') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:alumnos/baja_alumno.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
} else { ?>
    <h1>BIENVENIDO HECTOR</h1>
<?php }
}
}
