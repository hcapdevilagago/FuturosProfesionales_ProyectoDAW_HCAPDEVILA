<!-- Panel navegación izquierdo -->
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

{if isset($smarty.get.accion)}
    {if $smarty.get.accion eq 'modificar'}
        {include file="alumnos/modificar_alumno.tpl"}
    {elseif $smarty.get.accion eq 'ver_empresas'}
        {include file="alumnos/ver_empresas.tpl"}
    {elseif $smarty.get.accion eq 'baja'}
        {include file="alumnos/baja_alumno.tpl"}
    {/if}
{else}
    <h1>BIENVENIDO HECTOR</h1>
{/if}