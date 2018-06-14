<!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <h3 class="text-center" style="margin-top: 6%;">EMPRESAS REGISTRADAS EN LA BASE DE DATOS</h3><hr/>
                    <div class="container">                                     
                        <div class="col-lg-9">
                            <div id="cuadro">
                                <table id="tabla" class="display centerTable" cellspacing="0" width="130%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>CIF</th>
                                            <th>Dirección</th>
                                            <th>Teléfono</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    {foreach $empresas as $empresa}
                                        <tr>
                                            <th>{$empresa->getId_empresa()}</th>
                                            <th>{$empresa->getNombre()}</th>
                                            <th>{$empresa->getCif()}</th>
                                            <th>{$empresa->getDireccion_fiscal()}</th>
                                            <th>{$empresa->getTelefono()}</th>
                                            <th>{$empresa->getEmail()}</th>
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