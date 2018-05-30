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

//Iniciamos sesión para utilizar variables de este ámbito
session_start();

//Creamos un nuevo objeto de la clase Database
$db = new Database();

//Asignamos el array de las familias profesionales a una variable Smarty
$plantilla->assign("familias", $db->devuelveFamilias());

//Asignamos el array de los ciclos formativos a una variable Smarty
$plantilla->assign("ciclos", $db->devuelveCiclos());

//Asignamos el array de los ciclos formativos a una variable Smarty
$plantilla->assign("empresas", $db->devuelveEmpresas());

//Para evitar que se acceda a la cuenta de un perfil de usuario que se ha logueado anteriormente, deshechamos las variables de sesión que haya en el sistema
session_unset();

if (isset($_POST['acceder'])) {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        if ($db->verificaUsuario($_POST['user'], md5($_POST['pass']))) {
            //En el caso de que el usuario introducido exista en la base de datos, y corresponde con un usuario existente
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pass'] = $_POST['pass'];

            //En este caso la contraseña es correcta, y redirigimos el flujo de la ejecución a admin.php
            header("Location: panel_administracion.php");
            exit;
        } else {
            //Asignamos la variable msj_error para poder visualizarla en el fichero .tpl
            $plantilla->assign("msj_error", "Las datos introducidos no son correctos.");

            //Indicamos que el fichero de la parte de vista es index.tpl
            $plantilla->display("index.tpl");
        }
    }
} else if (isset($_POST['registrar'])) {
    switch ($_POST['registrar']) {
        case 'REGISTRAR ALUMNO':
            //Indicamos que el fichero de la parte de vista es registrar_alumno.tpl
            $plantilla->display("registrar_alumno.tpl");
            break;
        case 'REGISTRAR TUTOR DE EMPRESA':
            $plantilla->display("registrar_tutor.tpl");
            break;
    }
} else {
    //Indicamos que el fichero de la parte de vista es index.tpl
    $plantilla->display("index.tpl");
}