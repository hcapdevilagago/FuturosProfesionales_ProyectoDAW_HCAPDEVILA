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

if (isset($_SESSION['user'])) {
    //En el caso de que exista la variable $_SESSION['user'] creamos un nuevo objeto de la clase Database
    $db = new Database();

    //Asignamos el tipo de rol de usuario a una variable Smarty
    $plantilla->assign("rol", $_SESSION['rol']);

    //Almacenamos en una variable de smarty el nombre del usuario
    $plantilla->assign("user", strtoupper($_SESSION['user']));

    //Vamos a recuperar los datos del usuario que está registrado en la plataforma como un objeto
    $u = $db->obtieneUsuario($_SESSION['rol'], $_SESSION['user']);

    //Asignamos el nombre del usuario a una variable Smarty
    $plantilla->assign("nombre", $u->getNombre());

    //Asignamos el objeto del usuario a una variable Smarty
    $plantilla->assign("usuario", $u);

    //Almacenamos el valor de la tabla que hace referencia también al rol del usuario que se ha logueado
    $tabla = $_SESSION['rol'];

    if (isset($_POST['edit'])) {
        switch ($tabla) {
            //Identificamos el rol del usuario logueado
            case "tutor_empresa":
                $id_tutor = $u->getId_tutor_e();
                $empresa = $db->devuelveEmpresa($_POST['empresa']);
                $usuario = $_POST['usuario'];
                $nombre = $_POST['nombre'];
                $dni = $_POST['dni'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $db->modificaTutorEmpresa($id_tutor, $usuario, $nombre, $dni, $email, $tel);
                $_SESSION['user'] = $usuario;
                break;
            case "tutor_centro":

                break;
            case "alumno":

                break;
        }
    }

    //Asignamos el array de las familias profesionales a una variable Smarty
    $plantilla->assign("familias", $db->devuelveFamilias());

    //Asignamos el array de los ciclos formativos a una variable Smarty
    $plantilla->assign("ciclos", $db->devuelveCiclos());

    //Asignamos el array de los ciclos formativos a una variable Smarty
    $plantilla->assign("empresas", $db->devuelveEmpresas());

    //Indicamos que el fichero de la parte de vista es admin.tpl
    $plantilla->display("panel_administracion.tpl");
} else {
    //En el caso de que no exista la variable $_SESSION['user'], ridirigimos el flujo a index.php
    header("Location: index.php");
}