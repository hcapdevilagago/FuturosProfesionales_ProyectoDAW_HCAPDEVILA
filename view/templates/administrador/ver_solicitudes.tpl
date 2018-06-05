<!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <div id="cuadro" style="margin-top: 100px;">
                                <h2>SOLICITUDES REGISTRADAS EN LA BASE DE DATOS</h2><hr style="margin-bottom: 8%;"/>
                                <table id="tabla" class="display" cellspacing="0" width="120%">
                                    <thead>
                                        <tr>
                                            <th>Empresa</th>
                                            <th>Ciclo</th>
                                            <th>Cantidad alumnos</th>
                                            <th>Fecha</th>
                                            <th>Actividad</th>
                                            <th>Observaciones</th>
                                            <th>Proyecto</th>
                                        </tr>
                                    </thead>
                                    {foreach $solicitudes as $solicitud}
                                        <tr>
                                            <th>
                                                {foreach $empresas as $empresa}
                                                    {if $empresa->getId_empresa() eq $solicitud->getId_empresa()}
                                                        {$empresa->getNombre()}
                                                    {/if}
                                                {/foreach}
                                            </th>
                                            <th>
                                                {foreach $ciclos as $ciclo}
                                                    {if $solicitud->getId_ciclo() eq $ciclo->getId_ciclo()}
                                                        {$ciclo->getNombre()}
                                                    {/if}
                                                {/foreach}
                                            </th>
                                            <th>{$solicitud->getCantidad_alumnos()}</th>
                                            <th>{$solicitud->getFecha_creacion()}</th>
                                            <th>{$solicitud->getActividad()}</th>
                                            <th>{$solicitud->getObservaciones()}</th>
                                            <th>{if $solicitud->getProyecto() == 0}<input type="checkbox" disabled/>{else}<input type="checkbox" checked disabled/>{/if}</th>
                                        </tr>
                                    {/foreach}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel central -->