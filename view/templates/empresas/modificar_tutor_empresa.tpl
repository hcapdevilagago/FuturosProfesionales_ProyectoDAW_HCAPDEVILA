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
                                    <legend class="text-center"> Modificación del perfil del tutor de empresa</legend>        
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre de usuario</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="usuario" placeholder="Introduzca el nombre de usuario" class="form-control" value="{$usuario->getUser()}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    {*<div class="form-group">
                                        <label class="col-md-4 control-label">Contraseña</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input  name="pass" placeholder="Introduzca la contraseña de usuario" class="form-control" value="{$usuario->getPass()}" id="userPw" type="password" data-minLength="8" data-error="some error" required>
                                                <span class="glyphicon form-control-feedback"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                    </div>*}
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre completo</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="nombre" placeholder="Introduzca su nombre completo" value="{$usuario->getNombre()}" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Documento Nacional de Identidad</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                <input  name="dni" placeholder="Introduzca su dni" class="form-control" value="{$usuario->getDni()}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Correo Eléctronico</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input name="email" placeholder="Introduzca su dirección de correo electrónico" value="{$usuario->getEmail()}" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono de contacto</label>
                                        <div class="col-md-6  inputGroupContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input name="tel" placeholder="Introduzca su teléfono (9 dígitos numéricos)" value="{$usuario->getTelefono()}" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre empresa a la que pertenece</label>
                                        <div class="col-md-6 selectContainer">
                                            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="ciclos" class="form-control selectpicker">
                                                    <option value=" " >Por favor, seleccione su empresa</option>
                                                    {foreach $empresas as $empresa}
                                                        <option>{$empresa->getNombre_legal()}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-4 control-label"></span>
                                        <div class="input-group">
                                            <input type="submit" name="clear" value="Limpiar formulario" class="btn btn-primary">
                                            <input type="submit" name="edit" value="Modificar perfil del alumno" class="btn btn-primary">
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