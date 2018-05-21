<?php
//Cargamos las clases en el caso de que no hayan sido cargadas antes
require_once ('Smarty.class.php');
require_once ('./model/Database.php');

//Creamos un objeto de la clase Smarty que hará referencia a la plantilla
$plantilla = new Smarty();

//Asignamos las plantillas en las rutas correspondientes
$plantilla->template_dir = "./view/templates";
$plantilla->compile_dir = "./view/templates_c";
$plantilla->cache_dir = "./view/cache";
$plantilla->config_dir = "./view/config";

//Creamos un nuevo objeto de la clase Database
$db = new Database();

//Iniciamos sesión para utilizar variables de este ámbito
session_start();

if (isset($_POST['user']) && isset($_POST['pass'])) {
    if ($db->verificaUsuario($_POST['user'], md5($_POST['pass']))) {
        //En el caso de que el usuario introducido exista en la base de datos, y corresponde con un usuario existente
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];

        //En este caso la contraseña es correcta, y redirigimos el flujo de la ejecución a admin.php
        header("Location: admin.php");
        exit;
    } else {
        //Asignamos la variable msj_error para poder visualizarla en el fichero .tpl
        $plantilla->assign("msj_error", "Las credenciales introducidas no son correctas, vuelve a intentarlo de nuevo.");

        //Indicamos que el fichero de la parte de vista es index.tpl
        $plantilla->display("index.tpl");
    }
} else {
    //Indicamos que el fichero de la parte de vista es index.tpl
    $plantilla->display("index.tpl");
}