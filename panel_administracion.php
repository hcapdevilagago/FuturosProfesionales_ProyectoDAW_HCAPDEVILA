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

    //Asignamos el array de las familias profesionales a una variable Smarty
    $plantilla->assign("familias", $db->devuelveFamilias());

    $ciclos = $db->devuelveCiclos();

    //Asignamos el array de los ciclos formativos a una variable Smarty
    $plantilla->assign("ciclos", $ciclos);

    if ($u instanceof Alumno) {
        //En el caso de que $u sea una instancia de Alumno
        foreach ($ciclos as $ciclo) {
            if ($ciclo->getId_ciclo() == $u->getId_ciclo()) {
                //Asignamos el nombre del ciclo formativo que cursa el alumno a una variable Smarty
                $plantilla->assign("ciclo_usuario", $ciclo->getNombre());
            }
        }
    } else if ($u instanceof Empresa) {
        //En el caso de que $u sea una instancia de Empresa
        foreach ($db->devuelveEmpresas() as $empresa) {
            if ($empresa->getId_empresa() == $u->getId_empresa()) {
                //Asignamos el nombre de la empresa a una variable Smarty
                $plantilla->assign("nombre_empresa", $empresa->getNombre());
            }
        }
    } else if ($u instanceof TutorCentro) {
        //En el caso de que sea un tutor del centro educativo vamos a almacenar el valor del registro privilegios_admin
        $_SESSION['privilegios_admin'] = $u->getPrivilegios_admin();
        $plantilla->assign("privilegios_admin", $_SESSION['privilegios_admin']);
    }

    //Almacenamos el valor de la tabla que hace referencia también al rol del usuario que se ha logueado
    $tabla = $_SESSION['rol'];

    if (isset($_POST['editar'])) {
        switch ($tabla) {
            //Identificamos el rol del usuario logueado
            case "empresa":
                $nombre = $_POST['nombre'];
                $cif = $_POST['cif'];
                $direccion_fiscal = $_POST['direccion_fiscal'];
                $telefono = $_POST['telefono'];
                $email = $_POST['actividad'];
                $horario = $_POST['horario'];
                $representante_nombre = $_POST['representante_nombre'];
                $representante_dni = $_POST['representante_dni'];
                $descripcion = $_POST['descripcion'];
                $actividad = $_POST['actividad'];
                $id_empresa = $u->getId_empresa();
                $db->modificaEmpresa($nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $id_empresa);
                $_SESSION['user'] = $db->obtieneUsuario($tabla, $u->getUser());
                break;
            case "tutor_centro":
//                $id = $u->getId_tutor_c();
//                $id_ciclo = $_POST[''];
//                $usuario = $_POST['usuario'];
//                $nombre = $_POST['nombre'];
//                $dni = $_POST['dni'];
//                $email = $_POST['email'];
//                $tel = $_POST['tel'];
//                $db->modificaTutorCentro($id, $user, $nombre, $dni, $email, $telefono);
                break;
            case "alumno":
//                $id_tutor = $u->getId_tutor_e();
//                $empresa = $db->devuelveEmpresa($_POST['empresa']);
//                $usuario = $_POST['usuario'];
//                $nombre = $_POST['nombre'];
//                $dni = $_POST['dni'];
//                $email = $_POST['email'];
//                $tel = $_POST['tel'];
//                $db->modificaTutorEmpresa($id_tutor, $usuario, $nombre, $dni, $email, $tel);
//                $_SESSION['user'] = $usuario;
                break;
        }
    } else if (isset($_POST['baja'])) {
        //En el caso de que se quiera eliminar el usuario con el que se ha accedido a la plataforma
        $pass = sha1($_POST['password']);
        switch ($tabla) {
            //Identificamos el rol del usuario logueado
            case "empresa":
                if ($db->verificaEmpresa($u->getUser(), $pass)) {
                    if ($db->bajaUsuario($u->getId_empresa(), $tabla, null)) {
                        header('Location: exito_admin.php');
                    } else {
                        header('Location: error_admin.php');
                    }
                } else {
                    header('Location: error_admin.php');
                }
                break;
            case "tutor_centro":
                if ($db->verificaTutorCentro($u->getUser(), $pass)) {
                    //Verificamos que la contraseña introducida coincide con la del usuario
                    foreach ($ciclos as $ciclo) {
                        //Buscamos el id del ciclo del tutor
                        if ($ciclo->getId_tutor_c() == $u->getId_tutor_c()) {
                            $id_ciclo = $ciclo->getId_ciclo();
                        }
                    }
                    if ($db->bajaUsuario($u->getId_tutor_c(), $tabla, $id_ciclo)) {
                        header('Location: exito_admin.php');
                    } else {
                        header('Location: error_admin.php');
                    }
                } else {
                    header('Location: error_admin.php');
                }
                break;
            case "alumno":
                if ($db->verificaAlumno($u->getUser(), $pass)) {
                    if ($db->bajaUsuario($u->getId_alumno(), $u->getUser(), $tabla, null)) {
                        header('Location: exito_admin.php');
                    } else {
                        header('Location: error_admin.php');
                    }
                } else {
                    header('Location: error_admin.php');
                }
                break;
        }
    } else if (isset($_POST['solicitar'])) {
        //Rescatamos el ciclo seleccionado del que se solicitan alumnos
        $id_ciclo = $db->devuelveCiclo($_POST['ciclos'])->getId_ciclo();
        $cantidad_alumnos = $_POST['cantidad_alumnos'];
        if (is_numeric($cantidad_alumnos) && $cantidad_alumnos > 0 && $cantidad_alumnos < 100) {
            //Comprobamos que la cantidad introducida es un número mayor que 0 y menor que 100
            if (isset($_POST['proyecto'])) {
                $proyecto = 1;
            } else {
                $proyecto = 0;
            }
            //Procedemos a dar de alta la solicitud
            $db->altaSolicitud($id_ciclo, $u->getId_empresa(), $cantidad_alumnos, $_POST['observaciones'], $proyecto);

            if (!$_SESSION['error']) {
                header('Location: exito_admin.php');
            } else {
                session_unset();
                header('Location: error_admin.php');
            }
        } else {
            header('Location: error_admin.php');
        }
    }

    //Asignamos el array de los ciclos formativos a una variable Smarty
    $plantilla->assign("empresas", $db->devuelveEmpresas());

    //Indicamos que el fichero de la parte de vista es admin.tpl
    $plantilla->display("panel_administracion.tpl");
} else {
    //En el caso de que no exista la variable $_SESSION['user'], ridirigimos el flujo a index.php
    header("Location: index.php");
}