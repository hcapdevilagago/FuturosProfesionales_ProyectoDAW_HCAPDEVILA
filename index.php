<?php
require_once './model/Database.php';
$db = new Database();
?>
<!DOCTYPE html>
<!--
******************************************************************
******PROYECTO FINAL DE CICLO DESARROLLO DE APLICACIONES WEB******
******************************************************************
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./estilos.css">       
        <script type="text/javascript" src="./prueba.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="tile">
            <div class="tile-header">
                <img src="./images/logo1.png" height="80%" width="80%" style="margin-top:5%; margin-left: auto; margin-right: auto; display: block;"/>
            </div>
            <div class="tile-body">
                <form id="form" action="index.php" method="POST">
                    <label class="form-input">
                        <i class="material-icons">person</i>
                        <input type="text" name="user" autofocus="true" required />
                        <span class="label">USUARIO</span>
                        <span class="underline"></span>
                    </label>
                    <label class="form-input">
                        <i class="material-icons">lock</i>
                        <input type="password" name="pass" required/>
                        <span class="label">CONTRASEÑA</span>
                        <div class="underline"></div>
                    </label>
                    <div class="submit-container clearfix" style="margin-top: 2rem;">  
                        <input type="submit" value="INICIAR SESIÓN" class="btn btn-irenic float-right"/>
                        <div class="login-pending">
                            <div class=spinner>
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                            </div>
                            <div class="login-granted-content">
                                <i class="material-icons">done</i>
                            </div>
                        </div>
                    </div>
                    <span class="label">USUARIO</span>
                </form>
                <?php
                if (isset($_POST['user']) && isset($_POST['pass'])) {
                    if ($db->verificaUsuario($_POST['user'], md5($_POST['pass']))) {
                        //En el caso de que el usuario introducido exista en la base de datos, y corresponde con un usuario existente
                        session_start();
                        $_SESSION['user'] = $_POST['user'];
                        $_SESSION['pass'] = $_POST['pass'];
                        header("Location: admin.php");
                        exit;
                    } else {
                        //En el caso de que el usuario introducido NO exista en la base de datos
                        ?>
                        <span class="label" style="margin-top: 2%; color: red;"><span class="glyphicon glyphicon-remove"></span> Los datos introducidos no son válidos.</span>
                        <div class="underline"></div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>
