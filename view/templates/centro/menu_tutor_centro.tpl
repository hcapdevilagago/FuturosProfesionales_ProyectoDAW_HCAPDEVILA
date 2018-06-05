<!-- Panel navegación izquierdo -->
{if (isset($privilegios_admin) && $privilegios_admin == 1)}
    <!-- Panel navegación izquierdo -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="javascript:;" data-toggle="collapse" data-target="#tutores"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tutores<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="tutores" class="collapse">
                    <li>
                        <a href="panel_administracion.php?accion=ver_solicitudes"><i class="fa fa-fw fa-eye"></i> Ver solicitudes</a>
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
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#administrador"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Administrador<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="administrador" class="collapse nav-second-level">
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
{else}
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="javascript:;" data-toggle="collapse" data-target="#tutores"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Tutores<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="tutores" class="collapse">
                    <li>
                        <a href="panel_administracion.php?accion=ver_solicitudes"><i class="fa fa-fw fa-eye"></i> Ver solicitudes</a>
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
{/if}
<!-- Panel navegación izquierdo -->
</nav>
<!-- Panel navegación izquierdo y superior -->

<!-- Panel central -->
{if isset($smarty.session.error)}
    {php}
      unset($_SESSION['error']);
    {/php}
    {include file="error.tpl"}
{else}
    <div id="page-wrapper" style="height: 100%;">
        {if (isset($privilegios_admin) && $privilegios_admin == 1)}
            {if isset($smarty.get.accion)}
                {if $smarty.get.accion eq 'ver_solicitudes'}
                    {include file="centro/ver_solicitudes.tpl"}
                {elseif $smarty.get.accion eq 'modificar_tutor_centro'}
                    {include file="centro/modificar_tutor_centro.tpl"}
                {elseif $smarty.get.accion eq 'baja_perfil'}
                    {include file="baja_perfil.tpl"}
                {elseif $smarty.get.accion eq 'ver_empresas'}
                    {include file="centro/ver_empresas.tpl"}
                {elseif $smarty.get.accion eq 'alta_familia'}
                    {include file="administrador/alta_familia.tpl"}
                {elseif $smarty.get.accion eq 'baja_familia'}
                    {include file="administrador/baja_familia.tpl"}
                {elseif $smarty.get.accion eq 'alta_ciclo'}
                    {include file="administrador/alta_ciclo.tpl"}
                {elseif $smarty.get.accion eq 'baja_ciclo'}
                    {include file="administrador/baja_ciclo.tpl"}
                {elseif $smarty.get.accion eq 'baja_empresa'}
                    {include file="administrador/baja_empresa.tpl"}
                {/if}
            {else}
                {include file="centro/ver_solicitudes.tpl"}
            {/if}
        {else}
            {if isset($smarty.get.accion)}
                {if $smarty.get.accion eq 'ver_solicitudes'}
                    {include file="centro/ver_solicitudes.tpl"}
                {elseif $smarty.get.accion eq 'modificar_tutor_centro'}
                    {include file="centro/modificar_tutor_centro.tpl"}
                {elseif $smarty.get.accion eq 'baja_perfil'}
                    {include file="baja_perfil.tpl"}
                {/if}
            {else}
                {include file="centro/ver_solicitudes.tpl"}
            {/if}
        {/if}
    </div>
{/if}
<!-- Panel central -->
