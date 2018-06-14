<!-- Panel navegación izquierdo -->
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
{if isset($smarty.session.error)}
    {php}
      unset($_SESSION['error']);
    {/php}
    {include file="error.tpl"}
{else}
    {if isset($smarty.get.accion)}
        {if $smarty.get.accion eq 'solicitar_alumnos'}
            {include file="empresas/solicitar_alumnos.tpl"}
        {elseif $smarty.get.accion eq 'ver_solicitudes_empresa'}
            {include file="empresas/ver_solicitudes_empresa.tpl"}
        {elseif $smarty.get.accion eq 'modificar_empresa'}
            {include file="empresas/modificar_empresa.tpl"}            
        {elseif $smarty.get.accion eq 'baja_perfil'}
            {include file="baja_perfil.tpl"}
        {/if}
    {else}
        {include file="empresas/solicitar_alumnos.tpl"}
    {/if}
{/if}
<!-- Panel central -->