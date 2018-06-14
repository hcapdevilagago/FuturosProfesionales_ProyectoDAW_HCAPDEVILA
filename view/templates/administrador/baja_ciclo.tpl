<!-- Panel central -->
<div class="w3-content" style="background-color:white; height: 100%; ">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action=" " method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center">BAJA CICLO FORMATIVO</legend>
                                    <div class="form-group has-feedback">
                                        <label for="ciclos_formativos"  class="col-md-4 control-label">Ciclo formativo <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="ciclos" class="form-control selectpicker" required>
                                                    <option value=" ">Por favor, seleccione el ciclo formativo</option>
                                                    {foreach $ciclos as $ciclo}
                                                        <option>{$ciclo->getNombre()}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin: 3%;">
                                        <div class="col-lg-12">
                                            <div class="alert alert-info alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <i class="fa fa-info-circle"></i> <strong>Se eliminarán todos los tutores del centro que pertenezcan al ciclo formativo seleccionado y sus solicitudes de alumnos.</strong>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="form-group text-center">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">                                            
                                            <button type="submit" name="baja_ciclo" class="btn btn-danger" style="margin-top: 1%; display: inline-block; width: 300px;"><span class="glyphicon glyphicon-send"></span> CONFIRMAR BAJA DEL CICLO</button>
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