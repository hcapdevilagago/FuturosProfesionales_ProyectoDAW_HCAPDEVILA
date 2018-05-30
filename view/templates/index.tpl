<!DOCTYPE html>
<!--
******************************************************************
***** PROYECTO FINAL DE CICLO DESARROLLO DE APLICACIONES WEB *****
***** El actual proyecto ha sido desarrollado por el alumno  *****
***** HÉCTOR CAPDEVILA GAGO, estudiante de 2º de Desarrollo  *****
***** de Aplicaciones Web del CPIFP Los Enlaces de Zaragoza  *****
******************************************************************
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>:: FUTUROS PROFESIONALES ::</title>
    </head>
    <body>
        <div class="tile">
            <div class="tile-header">
                <img src="./images/logo1.png" height="75%" width="75%" style="margin-top:5%; margin-left: auto; margin-right: auto; display: block;"/>
            </div>
            <div class="tile-body">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <i class="material-icons">persona</i>
                        <input type="text" name="user" autofocus="true" style="text-align: center;" required />
                        <span class="label">USUARIO</span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <i class="material-icons">lock</i>
                        <input type="password" name="pass" style="text-align: center;" required/>
                        <span class="label">CONTRASEÑA</span>
                        <div class="underline"></div>
                    </label>
                    <div class="submit-container clearfix" style="text-align: center; margin-top: 4rem;">  
                        <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="acceder" value="ACCEDER AL SITIO" class="btn btn-success"/>
                </form>
                <form id="form2" action="index.php" method="POST">
                    <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="registrar" value="REGISTRAR ALUMNO" class="btn btn-warning"/>
                    <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="registrar" value="REGISTRAR TUTOR DE EMPRESA" class="btn btn-warning"/>
                    <input type="submit" style="margin-top: 3%; display:inline-block; width: 250px;" name="registrar" value="¿Ha olvidado la contraseña?" class="btn btn-link"/>
                </form>
            </div>
            <span class="label">USUARIO</span>
            {if isset($msj_error)}
                <!--En el caso de que el usuario introducido NO exista en la base de datos-->
                <span class="label" style="margin-top: 1%; color: red;"><span class="glyphicon glyphicon-remove"></span> {$msj_error}</span>
                <div class="underline"></div>
            {/if}
        </div>
    </div>
</body>
</html>