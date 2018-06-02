<!-- Panel central -->
<div class="w3-content" style="background-color:white;">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST" id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> MODIFICACIÓN PERFIL {$rol|upper}</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre completo del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  maxlength="50" name="nombre" value="{$usuario->getNombre()}" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">DNI del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input minlength="9" maxlength="9" name="dni" class="form-control text-center" value="{$usuario->getDni()}" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo Eléctronico <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input maxlength="50" name="email" value="{$usuario->getEmail()}" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input minlength="9" maxlength="9"name="telefono" value="{$usuario->getTelefono()}" class="form-control text-center" type="tel" required>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="col-md-4 control-label"></span>
                                    <div class="input-group" style="margin-bottom: 5%;">
                                        <input type="submit" name="editar" value="Modificar perfil de {$usuario->getNombre()}" class="btn btn-primary">
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