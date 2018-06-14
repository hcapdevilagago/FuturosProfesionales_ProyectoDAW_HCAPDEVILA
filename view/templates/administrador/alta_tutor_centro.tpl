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
                                    <legend class="text-center">ALTA TUTOR CENTRO EDUCATIVO</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre de usuario <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input maxlength="30" name="user" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Contraseña de acceso <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input  maxlength="255" name="pass" class="form-control text-center" type="password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  maxlength="50" name="nombre" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">DNI del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input minlength="9" maxlength="9" name="dni" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo electrónico del tutor <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input maxlength="50" name="email" class="form-control text-center" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto <span style="color:red;">*</span></label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input minlength="9" maxlength="9" name="telefono" class="form-control text-center" type="tel" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback text-center">
                                        <label>
                                            <div style="margin-top: 1%;">
                                                <input type="checkbox" name="privilegios_admin" /><span style="font-size: 14px;"> Conceder a este tutor privilegios de administrador.</span>
                                            </div>
                                        </label>
                                    </div>
                                    <span class="col-md-4 control-label"></span>
                                    <div class="input-group" style="margin-bottom: 5%;">
                                        <input type="submit" name="alta_tutor" value="DAR DE ALTA TUTOR" class="btn btn-success">
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