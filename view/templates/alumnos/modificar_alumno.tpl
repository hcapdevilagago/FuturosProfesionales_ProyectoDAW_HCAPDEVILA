<!-- Panel central -->
<div class="w3-content" style="background-color:white;">
    <div class="w3-row w3-padding w3-border">
        <div class="w3-col l12 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="select-boxes">
                    <div class="container">
                        <div class="col-lg-9">
                            <br /><br />
                            <form class="form-horizontal" action="panel_administracion.php" method="POST"  id="reg_form">
                                <fieldset>
                                    <legend class="text-center"> Modificación del perfil del alumno</legend>        
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre de usuario</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="usuario" placeholder="Introduzca el nombre de usuario" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Contraseña</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input  name="contrasena" placeholder="Introduzca la contraseña de usuario" class="form-control" id="userPw" type="password" data-minLength="8" data-error="some error" required>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre completo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="nombre" placeholder="Introduzca su nombre completo" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Documento Nacional de Identidad</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input  name="dni" placeholder="Introduzca su dni" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo Eléctronico</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input name="email" placeholder="Introduzca su dirección de correo electrónico" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input name="tel" placeholder="Introduzca su teléfono (9 dígitos numéricos)" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Familia Profesional</label>
                                            <div class="col-md-6 selectContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <form class="form-familias" method="POST">
                                                    <select name="familias" class="form-control selectpicker" onchange="familias()">
                                                        <option value=" ">Por favor, selecciona una familia profesional</option>
                                                        {foreach $familias as $familia}
                                                            <option>{$familia->getNombre()}</option>
                                                        {/foreach}
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Ciclo Formativo</label>
                                        <div class="col-md-6 selectContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="ciclos" class="form-control selectpicker">
                                                    <option value=" " >Por favor, selecciona un ciclo formativo</option>
                                                    {foreach $ciclos as $ciclo}
                                                        <option>{$ciclo->getNombre()}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-4 control-label"></span>
                                        <div class="input-group">
                                            <input type="submit" name="editar" value="Modificar perfil del alumno" class="btn btn-primary">
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