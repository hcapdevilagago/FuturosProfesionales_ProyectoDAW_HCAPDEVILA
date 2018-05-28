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
    
    if (isset($_POST['user'])) {
        
    }
    
    
    //Asignamos el tipo de rol de usuario a una variable Smarty
    $plantilla->assign("rol", $_SESSION['rol']);

    //Almacenamos en una variable de smarty el nombre del usuario
    $user = strtoupper($_SESSION['user']);
    $plantilla->assign("user", $user);

    //Vamos a recuperar los datos del usuario que está registrado en la plataforma como un objeto
    $a = $db->obtieneUsuario($_SESSION['rol'], $_SESSION['user']);
    
    //Asignamos el nombre del usuario a una variable Smarty
    $plantilla->assign("nombre", $a->getNombre());

    //Asignamos el objeto del usuario a una variable Smarty
    $plantilla->assign("usuario", $a);
    
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