<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>:: REGISTRAR TUTOR EMPRESA ::</title>
    </head>
    <body>
        <div class="registro" style="padding: 4%">
            <div class="tile-header">
                <img src="./images/logo1.png" height="18%" width="18%" style="margin-left: auto; margin-right: auto; display: block;"/>
                <h4 class="text-center">REGISTRAR NUEVO TUTOR DE EMPRESA</h4><hr/>
            </div>
            <div class="tile-body" style="margin-top: 3%;">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <input type="text" name="user" autofocus="true" style="text-align: center;" required />
                        <span class="label">USUARIO</span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <input type="password" name="pass" style="text-align: center;" required/>
                        <span class="label">CONTRASEÑA</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="text" name="nombre" style="text-align: center;" required/>
                        <span class="label">NOMBRE COMPLETO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="text" name="dni" style="text-align: center;" required/>
                        <span class="label">DOCUMENTO NACIONAL DE IDENTIDAD</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="email" name="email" style="text-align: center;" required/>
                        <span class="label">CORREO ELÉCTRONICO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input">
                        <input type="tel" name="tel" style="text-align: center;" required/>
                        <span class="label">TELÉFONO DE CONTACTO</span>
                        <div class="underline"></div>
                    </label>
                    <label class="form-input text-center">
                        <span class="select">EMPRESA</span>
                        <select name="empresas" class="form-control selectpicker">
                            <option value=" " >Por favor, seleccione la empresa a la que pertenece</option>
                            {foreach $empresas as $empresa}
                                <option>{$empresa->getNombre_legal()}</option>
                            {/foreach}
                        </select>
                    </label>
                    <label>
                        <div style="margin-top: 5%;">
                            <input type="checkbox" name="terminos" value="términos_y_condiciones" required/><span style="font-size: 12px;"> Acepto los términos y condiciones del registro en la base de datos del CPIFP Los Enlaces</span>
                        </div>
                    </label>
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 5%;">
                        <input type="submit" style="margin-top: 1%; display: inline-block; width: 250px;" name="clear" value="LIMPIAR FORMULARIO" class="btn btn-success"/>
                        <input type="submit" style="margin-top: 1%; display: inline-block; width: 250px;" name="acceder" value="REGISTRAR NUEVO ALUMNO" class="btn btn-success"/>
                    </div>
                </form>
                <form id="form" action="index.php" method="POST">
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 1%;">  
                        <input type="submit" style="margin-top: 1%; width: 500px;" name="volver" value="VOLVER AL LOGIN DE INICIO" class="btn btn-info"/>
                    </div>  
                </form>
            </div>
        </div>
    </body>
</html>