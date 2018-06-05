<?php
/* Smarty version 3.1.32, created on 2018-06-05 20:08:31
  from 'C:\xampp\htdocs\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\view\templates\centro\menu_tutor_centro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b16d19f5a5319_68436044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d522f66b4e46b82f1e7979fbd60c2780ebde536' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FuturosProfesionales_ProyectoDAW_HCAPDEVILA\\view\\templates\\centro\\menu_tutor_centro.tpl',
      1 => 1528222091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
    'file:centro/ver_solicitudes_tutor.tpl' => 4,
    'file:administrador/ver_solicitudes.tpl' => 1,
    'file:centro/modificar_tutor_centro.tpl' => 2,
    'file:baja_perfil.tpl' => 2,
    'file:centro/ver_empresas.tpl' => 2,
    'file:administrador/alta_familia.tpl' => 1,
    'file:administrador/baja_familia.tpl' => 1,
    'file:administrador/alta_ciclo.tpl' => 1,
    'file:administrador/baja_ciclo.tpl' => 1,
    'file:administrador/baja_empresa.tpl' => 1,
  ),
),false)) {
function content_5b16d19f5a5319_68436044 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Panel navegación izquierdo -->
<?php if ((isset($_smarty_tpl->tpl_vars['privilegios_admin']->value) && $_smarty_tpl->tpl_vars['privilegios_admin']->value == 1)) {?>
    <!-- Panel navegación izquierdo -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="javascript:;" data-toggle="collapse" data-target="#tutores"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tutores<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="tutores" class="collapse">
                    <li>
                        <a href="panel_administracion.php?accion=ver_solicitudes_tutor"><i class="fa fa-fw fa-eye"></i> Ver mis solicitudes</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=ver_empresas"><i class="fa fa-fw fa-eye"></i> Ver empresas</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=modificar_tutor_centro"><i class="fa fa-fw fa-pencil"></i> Modificar tutor</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=baja_perfil"><i class="fa fa-fw fa-trash"></i> Baja tutor</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#administrador"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Administrador<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="administrador" class="collapse nav-second-level">
                    <li>
                        <a href="panel_administracion.php?accion=ver_solicitudes"><i class="fa fa-fw fa-eye"></i> Ver todas solicitudes</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=alta_familia"><i class="fa fa-fw fa-graduation-cap"></i> Alta familia profesional</a>
                    </li>

                    <li>
                        <a href="panel_administracion.php?accion=alta_ciclo"><i class="fa fa-fw fa-graduation-cap"></i> Alta ciclo formativo</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=baja_familia"><i class="fa fa-fw fa-graduation-cap"></i> Baja familia profesional</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=baja_ciclo"><i class="fa fa-fw fa-graduation-cap"></i> Baja ciclo formativo</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=baja_empresa"><i class="fa fa-fw fa-graduation-cap"></i> Baja empresa</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
<?php } else { ?>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="javascript:;" data-toggle="collapse" data-target="#tutores"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tutores<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="tutores" class="collapse">
                    <li>
                        <a href="panel_administracion.php?accion=ver_solicitudes_tutor"><i class="fa fa-fw fa-eye"></i> Ver solicitudes</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=ver_empresas"><i class="fa fa-fw fa-trash"></i> Ver empresas</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=modificar_tutor_centro"><i class="fa fa-fw fa-pencil"></i> Modificar tutor</a>
                    </li>
                    <li>
                        <a href="panel_administracion.php?accion=baja_perfil"><i class="fa fa-fw fa-trash"></i> Baja tutor</a>
                    </li>
                </ul>
            </li>     
        </ul>
    </div>
<?php }?>
<!-- Panel navegación izquierdo -->
</nav>
<!-- Panel navegación izquierdo y superior -->

<!-- Panel central -->
<?php if (isset($_SESSION['error'])) {?>
    <?php 
      unset($_SESSION['error']);
    ?>
    <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <div id="page-wrapper" style="height: 100%;">
        <?php if ((isset($_smarty_tpl->tpl_vars['privilegios_admin']->value) && $_smarty_tpl->tpl_vars['privilegios_admin']->value == 1)) {?>
            <?php if (isset($_GET['accion'])) {?>
                <?php if ($_GET['accion'] == 'ver_solicitudes_tutor') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_solicitudes_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'ver_solicitudes') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:administrador/ver_solicitudes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'modificar_tutor_centro') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/modificar_tutor_centro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'baja_perfil') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:baja_perfil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'ver_empresas') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_empresas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'alta_familia') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:administrador/alta_familia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'baja_familia') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:administrador/baja_familia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'alta_ciclo') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:administrador/alta_ciclo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'baja_ciclo') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:administrador/baja_ciclo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_GET['accion'] == 'baja_empresa') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:administrador/baja_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_solicitudes_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php } else { ?>
            <?php if (isset($_GET['accion'])) {?>
                <?php if ($_GET['accion'] == 'ver_solicitudes_tutor') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_solicitudes_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } elseif ($_GET['accion'] == 'ver_empresas') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_empresas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } elseif ($_GET['accion'] == 'modificar_tutor_centro') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:centro/modificar_tutor_centro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } elseif ($_GET['accion'] == 'baja_perfil') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:baja_perfil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:centro/ver_solicitudes_tutor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php }?>
    </div>
<?php }?>
<!-- Panel central -->
<?php }
}
