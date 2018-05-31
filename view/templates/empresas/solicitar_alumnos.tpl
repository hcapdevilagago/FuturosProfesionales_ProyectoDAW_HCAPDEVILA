<!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> SOLICITUD DE ALUMNOS PARA REALIZACIÓN DE FCT</legend>
                                    <div class="form-group has-feedback">
                                        <label for="empresas_colaboradoras"  class="col-md-4 control-label">Empresa colaboradora</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <select name="empresas" class="form-control selectpicker" disabled>
                                                    <option selected >{$nombre_empresa}</option>
                                                </select>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="ciclos_formativos"  class="col-md-4 control-label">Ciclo formativo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                <select name="ciclos" class="form-control selectpicker" required>
                                                    <option value=" ">Por favor, seleccione el ciclo formativo</option>
                                                    {foreach $ciclos as $ciclo}
                                                        <option>{$ciclo->getNombre()}</option>
                                                    {/foreach}
                                                </select>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="cantidad_alumnos"  class="col-md-4 control-label">Cantidad de alumnos formativo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                <input  name="cantidad" type="number" value="" class="form-control" >
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Confirmo que estoy de acuerdo con solicitar al CPIFP Los Enlaces el número de alumnos arriba específicado.</span>
                                            </div>
                                        </label>   
                                    </div>                
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="solicitar" class="btn btn-success" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> SOLICITAR ALUMNOS</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel central -->