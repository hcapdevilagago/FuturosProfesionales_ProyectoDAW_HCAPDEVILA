<?php
/* Smarty version 3.1.32, created on 2018-06-06 19:44:24
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\empresas\menu_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b181d78c087b0_16342856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda7927fd9244a77ee4c05ce4d361d0a9c6144eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\empresas\\menu_empresa.tpl',
      1 => 1528307063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
    'file:empresas/solicitar_alumnos.tpl' => 2,
    'file:empresas/ver_solicitudes_empresa.tpl' => 1,
    'file:empresas/modificar_empresa.tpl' => 1,
    'file:baja_perfil.tpl' => 1,
  ),
),false)) {
function content_5b181d78c087b0_16342856 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="panel_administracion.php?accion=ver_solicitudes_empresa"><i class="fa fa-fw fa-eye"></i> Ver mis solicitudes</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=modificar_empresa"><i class="fa fa-fw fa-edit"></i> Modificar empresa</a>
                </li>
                <li>
                    <a href="panel_administracion.php?accion=baja_perfil"><i class="fa fa-fw fa-trash"></i> Baja empresa</a>
                </li>
            </ul>
        </li>              
    </ul>
</div>
<!-- Panel navegación izquierdo -->
</nav>
<!-- Panel central -->
<?php if (isset($_SESSION['error'])) {?>
    <?php 
      unset($_SESSION['error']);
    ?>
    <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php if (isset($_GET['accion'])) {?>
        <?php if ($_GET['accion'] == 'solicitar_alumnos') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:empresas/solicitar_alumnos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_GET['accion'] == 'ver_solicitudes_empresa') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:empresas/ver_solicitudes_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_GET['accion'] == 'modificar_empresa') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:empresas/modificar_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>            
        <?php } elseif ($_GET['accion'] == 'baja_perfil') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:baja_perfil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:empresas/solicitar_alumnos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}?>
<div class="pie" style="margin-bottom: -3%;">
    <div class="container">
        <p class="text-muted credit">© Copyright 2018 <a href="http://www.cpilosenlaces.com/" target="_blank">http://www.cpilosenlaces.com/</a> - Todos los derechos están reservados.</p>
        <p class="text-muted ">Desarrollo realizado por el alumno <strong>Héctor Capdevila Gago</strong> como trabajo de fin de ciclo de Desarrollo de Aplicaciones Web.</p>
    </div>
</div>
<!-- Panel central --><?php }
}
