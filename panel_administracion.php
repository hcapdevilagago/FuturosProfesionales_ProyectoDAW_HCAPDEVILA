<?php
//Cargamos las clases en el caso de que no hayan sido cargadas antes
require_once ('SmartyBC.class.php');
require_once ('./model/Database.php');

//Incluimos las librerías necesarias en el caso de que no se hayan incluído antes
include "./phpmailer/class.phpmailer.php";
include "./phpmailer/class.smtp.php";

//Creamos un objeto de la clase Smarty que hará referencia a la plantilla
$plantilla = new SmartyBC();

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

    error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/access.log");
    error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". El usuario " . $u->getNombre() . " estaba conectado en la plataforma con el nombre de usuario: " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/access.log");

    //Asignamos el nombre del usuario a una variable Smarty
    $plantilla->assign("nombre", $u->getNombre());

    //Asignamos el objeto del usuario a una variable Smarty
    $plantilla->assign("usuario", $u);

    $ciclos = $db->devuelveCiclos();

    //Asignamos el array de los ciclos formativos a una variable Smarty
    $plantilla->assign("ciclos", $ciclos);

    //Asignamos el array de las empresas a una variable Smarty
    $plantilla->assign("empresas", $db->devuelveEmpresas());

    //Asignamos el array de las solicitudes a una variable Smarty
    $plantilla->assign("solicitudes", $db->devuelveSolicitudes());

    if ($u instanceof Empresa) {
        //En el caso de que $u sea una instancia de Empresa
        foreach ($db->devuelveEmpresas() as $empresa) {
            if ($empresa->getId_empresa() == $u->getId_empresa()) {
                //Asignamos el nombre de la empresa a una variable Smarty
                $plantilla->assign("nombre_empresa", $empresa->getNombre());
            }
        }

        //Asignamos el array de las solicitudes a una variable Smarty
        $plantilla->assign("solicitudes_empresa", $db->devuelveSolicitudesPorEmpresa($u->getId_empresa()));
    } else if ($u instanceof TutorCentro) {
        //En el caso de que sea un tutor del centro educativo vamos a almacenar el valor del registro privilegios_admin
        $_SESSION['privilegios_admin'] = $u->getPrivilegios_admin();
        $plantilla->assign("privilegios_admin", $_SESSION['privilegios_admin']);
        $plantilla->assign("tutores", $db->devuelveTutoresCentro());
        $tutor_ciclos = array();
        foreach ($ciclos as $ciclo) {
            //Añadimos al array los ciclos de los que está a cargo este tutor_centro
            if ($ciclo->getId_tutor_c() == $u->getId_tutor_c()) {
                array_push($tutor_ciclos, $ciclo->getId_ciclo());
            }
        }

        //Asignamos el id del ciclo formativo que cursa el alumno a una variable Smarty
        $plantilla->assign("tutor_ciclos", $tutor_ciclos);
    }

    //Almacenamos el valor de la tabla que hace referencia también al rol del usuario que se ha logueado
    $tabla = $_SESSION['rol'];

    if (isset($_POST['editar'])) {
        switch ($tabla) {
            //Identificamos el rol del usuario logueado
            case "empresa":
                $nombre = $_POST['nombre'];
                $cif = strtoupper($_POST['cif']);
                $direccion_fiscal = $_POST['direccion_fiscal'];
                if (is_numeric($_POST['telefono'])) {
                    $telefono = $_POST['telefono'];
                    $email = $_POST['email'];
                    $horario = $_POST['horario'];
                    $representante_nombre = $_POST['representante_nombre'];
                    $representante_dni = strtoupper($_POST['representante_dni']);
                    $descripcion = $_POST['descripcion'];
                    $actividad = $_POST['actividad'];
                    $id_empresa = $u->getId_empresa();
                    //Modificamos el perfil del usuario de dicho rol
                    $db->modificaEmpresa($nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $id_empresa);
                    error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                    error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha modificado el perfil de usuario de " . $u->getNombre() . ": " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");

                    //Recargamos la página para que se vea afectada en los datos del perfil de usuario
                    header("Location: panel_administracion.php");
                } else {
                    $_SESSION['error'] = true;
                }
                break;
            case "tutor_centro":
                $id = $u->getId_tutor_c();
                $nombre = $_POST['nombre'];
                $dni = strtoupper($_POST['dni']);
                $email = $_POST['email'];
                if (is_numeric($_POST['telefono'])) {
                    $telefono = $_POST['telefono'];
                    //Modificamos el perfil del usuario de dicho rol
                    $db->modificaTutorCentro($id, $nombre, $dni, $email, $telefono);
                    error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                    error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha modificado el perfil de usuario de " . $u->getNombre() . ": " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");

                    //Recargamos la página para que se vea afectada en los datos del perfil de usuario
                    header("Location: panel_administracion.php");
                } else {
                    $_SESSION['error'] = true;
                }
                break;
        }
    } else if (isset($_POST['baja'])) {
        //En el caso de que se quiera eliminar el usuario con el que se ha accedido a la plataforma
        $pass = sha1($_POST['password']);
        switch ($tabla) {
            //Identificamos el rol del usuario logueado
            case "empresa":
                if ($db->verificaEmpresa($u->getUser(), $pass)) {
                    //Damos de baja el usuario de dicho rol
                    $db->bajaUsuario($u->getId_empresa(), $tabla, null);
                    error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                    error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha dado de baja el perfil de usuario de " . $u->getNombre() . ": " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");

                    //Redirigimos el flujo de la aplicación al index porque la baja se habrá hecho efectiva
                    header("Location: index.php");
                } else {
                    $_SESSION['error'] = true;
                }
                break;
            case "tutor_centro":
                if ($db->verificaTutorCentro($u->getUser(), $pass)) {
                    //Verificamos que la contraseña introducida coincide con la del usuario
                    $tutor_ciclos = array();
                    $ciclos_formativos = $db->devuelveCiclos();
                    foreach ($ciclos_formativos as $ciclo) {
                        //Buscamos los id del ciclo del tutor
                        if ($ciclo->getId_tutor_c() == $u->getId_tutor_c()) {
                            array_push($tutor_ciclos, $ciclo->getId_ciclo());
                        }
                    }
                    //Procedemos a dar de baja el usuario de la base de datos        
                    $db->bajaUsuario($u->getId_tutor_c(), $tabla, $tutor_ciclos);
                    error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                    error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha dado de baja el perfil de usuario de " . $u->getNombre() . ": " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");

                    //Redirigimos el flujo de la aplicación al index porque la baja se habrá hecho efectiva
                    header("Location: index.php");
                } else {
                    $_SESSION['error'] = true;
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
            //Damos de alta la solicitud de alumnos
            $db->altaSolicitud($id_ciclo, $u->getId_empresa(), $cantidad_alumnos, $_POST['actividad'], $_POST['observaciones'], $proyecto);

            //Recuperamos el nombre del ciclo formativo del que se solicitan los alumnos
            $nombre_ciclo_solicitado = $db->devuelveCiclo($_POST['ciclos'])->getNombre();
            $id_ciclo_solicitado = $db->devuelveCiclo($_POST['ciclos'])->getId_ciclo();

            //Almacenamos los tutores del centro para identificar el email del tutor que dicho ciclo
            $tutores = $db->devuelveTutoresCentro();
            $ciclos = $db->devuelveCiclos();
            foreach ($ciclos as $ciclo) {
                if ($ciclo->getId_ciclo() == $id_ciclo) {
                    foreach ($tutores as $tutor) {
                        if ($ciclo->getId_tutor_c() == $tutor->getId_tutor_c()) {
                            //En el caso de que se haya realizado la solicitud enviamos el email al tutor del ciclo
                            enviarCorreoSolicitud($tutor->getEmail(), mb_strtoupper($u->getNombre(), 'UTF-8'), $cantidad_alumnos, $id_ciclo_solicitado, mb_strtoupper($nombre_ciclo_solicitado, 'UTF-8'));
                            error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                            error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha realizado una solicitud de alumnos del ciclo $nombre_ciclo_solicitado -> Usuario: " . $u->getNombre() . ": " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");
                        }
                    }
                }
            }
        } else {
            $_SESSION['error'] = true;
        }
    } else if (isset($_POST['alta_ciclo'])) {
        //Rescatamos la valores para dar de alta el nuevo ciclo
        $id_ciclo = $_POST['id'];
        $tutor = $db->devuelveTutorCentro($_POST['tutores']);
        $id_tutor_c = $tutor->getId_tutor_c();
        $nombre = $_POST['nombre'];

        //Damos de alta el ciclo formativo
        $db->altaCiclo($id_ciclo, $id_tutor_c, $nombre);
        error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
        error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha dado de alta un nuevo ciclo formativo ($id_ciclo): " . $_SESSION['user'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");
    } else if (isset($_POST['baja_ciclo'])) {
        //Damos de baja el ciclo formativo, pasándole como parámetro de entrada el id del ciclo a borrar
        $db->bajaCiclo($db->devuelveCiclo($_POST['ciclos'])->getId_ciclo());
        //Recargamos la página para que se vea afectada la baja del ciclo en la plataforma
        header("Location: panel_administracion.php");
    } else if (isset($_POST['alta_tutor'])) {
        $user = $_POST['user'];
        $pass = sha1($_POST['pass']);
        $nombre = $_POST['nombre'];
        $dni = strtoupper($_POST['dni']);
        $email = $_POST['email'];
        if (is_numeric($_POST['telefono'])) {
            $telefono = $_POST['telefono'];
            if (isset($_POST['privilegios_admin'])) {
                $privilegios_admin = 1;
            } else {
                $privilegios_admin = 0;
            }
            //Damos de alta el nuevo tutor del centro educativo
            $db->altaTutorCentro($user, $pass, $nombre, $dni, $email, $telefono, $privilegios_admin);

            if (!isset($_SESSION['error'])) {
                error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha dado de alta un nuevo tutor del centro: " . $user . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");
                //Recargamos la página para que se vea afectada la alta del nuevo tutor del centro educativo en la plataforma
                header("Location: panel_administracion.php");
            }
        } else {
            $_SESSION['error'] = true;
        }
    } else if (isset($_POST['baja_tutor'])) {
        //Rescatamos el objeto del tutor del centro que se desea dar de baja
        $t = $db->devuelveTutorCentro($_POST['tutores']);
        //Reservamos una variable que es una instancia de un array, que contendrá los ids de cada uno de los ciclos a los que pertenece el tutor seleccionado
        $tutor_ciclos = array();
        $ciclos_formativos = $db->devuelveCiclos();
        foreach ($ciclos_formativos as $ciclo) {
            //Añadimos al array los ciclos de los que está a cargo este tutor_centro
            if ($ciclo->getId_tutor_c() == $t->getId_tutor_c()) {
                array_push($tutor_ciclos, $ciclo->getId_ciclo());
            }
        }
        //Procedemos a dar de baja el usuario de la base de datos        
        $db->bajaUsuario($t->getId_tutor_c(), $tabla, $tutor_ciclos);
        error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
        error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha dado de baja el tutor del centro: " . $t->getUser() . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");

        //Recargamos la página para que se vea afectada la baja de la empresa en la plataforma
        header("Location: panel_administracion.php");
    } elseif (isset($_POST['solicitud_accion'])) {
        switch ($_POST['solicitud_accion']) {
            case 'Mostrar':
                $db->mostrarOcultarSolicitud($_POST['id_solicitud'], 1);
                error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha marcado como visible la solicitud con id: " . $_POST['id_solicitud'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");
                break;
            case 'Ocultar':
                $db->mostrarOcultarSolicitud($_POST['id_solicitud'], 0);
                error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha marcado como oculta la solicitud con id: " . $_POST['id_solicitud'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");
                break;
            case 'Eliminar':
                $db->eliminarSolicitud($_POST['id_solicitud']);
                error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "log/error.log");
                error_log("OK :: ROL DEL USUARIO: " . $_SESSION['rol'] . ". Se ha eliminado solicitud con id: " . $_POST['id_solicitud'] . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "log/error.log");
                break;
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

/**
 * @description Realiza un envío de correo electrónico al email pasado como parámetro que hace referencia al email del tutor del ciclo indicando el nº de alumnos que se solicitan
 * @param String $email hace referencia al email del tutor del ciclo del que se solicitan los alumnos
 * @param String $empresa_nombre hace referencia al nombre de la empresa solicitante
 * @param Integer $cantidad hace referencia al número de alumnos que se han solicitado
 * @param String $ciclo_nombre hace referencia al nombre del ciclo formativo del que se solicitan alumnos
 */
function enviarCorreoSolicitud($email, $empresa_nombre, $cantidad, $id_ciclo, $ciclo_nombre) {
    //Asignamos los valores de cada uno de los campos del correo
    $email_user = "info.futurosprofesionales@gmail.com";
    $email_password = "cpifplosenlaces";
    $the_subject = "Futuros profesionales: Una empresa ha realizado una nueva solicitud de alumnos.";
    $address_to = $email;
    $from_name = "Futuros Profesionales - CPIFP LOS ENLACES";
    $phpmailer = new PHPMailer();

    //Datos de la cuenta de correo gmail
    $phpmailer->Username = $email_user;
    $phpmailer->Password = $email_password;
    $phpmailer->SMTPSecure = 'ssl';

    //Datos del servidor de Google
    $phpmailer->Host = "smtp.gmail.com";
    $phpmailer->Port = 465;
    $phpmailer->IsSMTP();
    $phpmailer->SMTPAuth = true;

    //Datos del mensaje de correo electrónico
    $phpmailer->setFrom($phpmailer->Username, $from_name);
    $phpmailer->AddAddress($address_to);
    $phpmailer->Subject = $the_subject;
    $phpmailer->Body .= "<h2 style='color:#3498db;'>Ha recibido una solicitud de alumnos para el ciclo $id_ciclo!</h2>";
    $phpmailer->Body .= "<p>La empresa <strong>$empresa_nombre</strong> ha realizado una solicitud de $cantidad alumnos del ciclo formativo <strong>$id_ciclo: $ciclo_nombre</strong> en la App Web Futuros Profesionales - CPIFP Los Enlaces de Zaragoza.</p><br /><hr />";
    $phpmailer->Body .= "<h5>Ponte en contacto con $empresa_nombre, esta empresa quiere colaborar acogiendo a un total de $cantidad alumnos.</h5>";
    $phpmailer->Body .= " <img style='margin-top: 5%;' src='https://www.hectorcapdevila.es/images/cpifp_logo.png' alt='Logotipo del CPIFP LOS ENLACES' height='150' width='250'>";
    $phpmailer->Body .= "<h4>El equipo del CPIFP LOS ENLACES.</h4><hr />";
    $phpmailer->Body .= "<h4 style='color: green;'> Por favor considere el medio ambiente antes de imprimir este e-mail!<br />Por favor, tenga en cuenta su responsabilidad ambiental. Antes de imprimir este mensaje de correo, piense si realmente necesita una copia en papel.</h4>";
    $phpmailer->Body .= "<h5>" . date("d-m-Y H:i:s") . "</h5>";
    $phpmailer->IsHTML(true);
    $phpmailer->Send();
}