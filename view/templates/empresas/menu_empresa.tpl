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

{if isset($smarty.get.accion)}
    {if $smarty.get.accion eq 'solicitar_alumnos'}
        {include file="empresas/solicitar_alumnos.tpl"}
    {elseif $smarty.get.accion eq 'modificar_tutor'}
        {include file="modificar_tutor.tpl"}
    {elseif $smarty.get.accion eq 'baja_tutor'}
        {include file="baja_tutor.tpl"}
    {/if}
{else}
    {include file="empresas/solicitar_alumnos.tpl"}
{/if}