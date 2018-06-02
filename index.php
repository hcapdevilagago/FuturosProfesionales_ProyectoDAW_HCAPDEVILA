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
$plantilla->assign("tutores", $db->devuelveTutoresCentro());

//Asignamos el array de los ciclos formativos a una variable Smarty
$plantilla->assign("empresas", $db->devuelveEmpresas());

//Para evitar que se acceda a la cuenta de un perfil de usuario que se ha logueado anteriormente, deshechamos las variables de sesión que haya en el sistema
session_unset();

if (isset($_POST['acceder'])) {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        if ($db->verificaUsuario($_POST['user'], sha1($_POST['pass']))) {
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
    } else {
        //Indicamos que el fichero de la parte de vista es index.tpl porque se ha pulsado el botón de volver
        $plantilla->display("index.tpl");
    }
} else if (isset($_POST['registrar'])) {
    switch ($_POST['registrar']) {
        case 'REGISTRAR ALUMNO':
            //Indicamos que el fichero de la parte de vista es registrar_alumno.tpl
            $plantilla->display("alumnos/registrar_alumno.tpl");
            break;
        case 'REGISTRAR EMPRESA':
            //Indicamos que el fichero de la parte de vista es registrar_empresa.tpl
            $plantilla->display("empresas/registrar_empresa.tpl");
            break;
        case '¿Ha olvidado la contraseña?':
            $plantilla->display("recuperar.tpl");
            break;
    }
} else if (isset($_POST['anadir_alumno'])) {
    //Comprobamos que se haya pulsado el botón de añadir nuevo alumno
    if (strlen($_POST['tutores']) > 0 && strlen($_POST['ciclos']) > 0) {
        //Comprobamos que si se ha pulsado el botón de añadir nuevo alumno, ha seleccionado un tutor y un ciclo
        $id_tutor_c = $db->devuelveTutorCentro($_POST['tutores'])->getId_tutor_c();
        $id_ciclo_a = $db->devuelveCiclo($_POST['ciclos'])->getId_ciclo();
        $user_a = $_POST['user'];
        $pass_a = sha1($_POST['pass']);
        $nombre_a = $_POST['nombre'];
        $dni_a = $_POST['dni'];
        $email_a = $_POST['email'];
        $telefono_a = $_POST['tel'];
        $db->altaAlumno($id_tutor_c, $id_ciclo_a, $user_a, $pass_a, $nombre_a, $dni_a, $email_a, $telefono_a);
        if (!$_SESSION['error']) {
            header('Location: exito.php');
        } else {
            session_unset();
            header('Location: error.php');
        }
    } else {
        header('Location: error.php');
    }
} else if (isset($_POST['anadir_empresa'])) {
    //Comprobamos que se haya pulsado el botón de añadir nueva empresa
    $nombre = strtoupper($_POST['nombre']);
    $cif = strtoupper($_POST['cif']);
    $direccion_fiscal = strtoupper($_POST['direccion_fiscal']);
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $horario = strtoupper($_POST['horario']);
    $representante_nombre = strtoupper($_POST['representante_nombre']);
    $representante_dni = strtoupper($_POST['representante_dni']);
    $descripcion = $_POST['descripcion'];
    $actividad = $_POST['actividad'];
    $user = $_POST['user'];
    $pass = sha1($_POST['pass']);
    $db->altaEmpresa($nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $user, $pass);
    if (!$_SESSION['error']) {
        header('Location: exito.php');
    } else {
        session_unset();
        header('Location: error.php');
    }
} else {
    //Indicamos que el fichero de la parte de vista es index.tpl
    $plantilla->display("index.tpl");
}