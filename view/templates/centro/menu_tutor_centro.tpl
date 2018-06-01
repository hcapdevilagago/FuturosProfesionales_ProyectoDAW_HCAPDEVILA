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
    {if isset($smarty.get.accion)}
        {if $smarty.get.accion eq 'solicitar_alumnos'}
            {include file="centro/ver_solicitudes.tpl"}
        {elseif $smarty.get.accion eq 'modificar_tutor'}
            {include file="modificar_tutor.tpl"}
        {elseif $smarty.get.accion eq 'baja_tutor'}
            {include file="baja_tutor.tpl"}
        {/if}
    {else}
        <h1>BIENVENIDO HECTOR</h1>
    {/if}
</div>
<!-- Panel central -->