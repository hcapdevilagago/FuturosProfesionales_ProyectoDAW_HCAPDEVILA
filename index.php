<?php
//Cargamos las clases en el caso de que no hayan sido cargadas antes
require_once ('Smarty.class.php');
require_once ('./model/Database.php');

//Incluimos las librerías necesarias en el caso de que no se hayan incluído antes
include "./phpmailer/class.phpmailer.php";
include "./phpmailer/class.smtp.php";

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
        case 'REGISTRAR EMPRESA':
            //Indicamos que el fichero de la parte de vista es registrar_empresa.tpl
            $plantilla->display("empresas/registrar_empresa.tpl");
            break;
        case '¿Ha olvidado la contraseña?':
            $plantilla->display("recuperar.tpl");
            break;
    }
} else if (isset($_POST['anadir_empresa'])) {
    //Comprobamos que se haya pulsado el botón de añadir nueva empresa
    $nombre = mb_strtoupper($_POST['nombre'], 'UTF-8');
    $cif = mb_strtoupper($_POST['cif'], 'UTF-8');
    $direccion_fiscal = mb_strtoupper($_POST['direccion_fiscal'], 'UTF-8');
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $horario = mb_strtoupper($_POST['horario'], 'UTF-8');
    $representante_nombre = mb_strtoupper($_POST['representante_nombre'], 'UTF-8');
    $representante_dni = mb_strtoupper($_POST['representante_dni'], 'UTF-8');
    $descripcion = $_POST['descripcion'];
    $actividad = $_POST['actividad'];
    $user = $_POST['user'];
    $pass = sha1($_POST['pass']);

    //Procedemos a dar de alta la nueva empresa
    $db->altaEmpresa($nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $user, $pass);
    if (!$_SESSION['error']) {
        //En el caso de que se haya realizado la alta correctamente enviamos el email y mostramos el mensaje de éxito
        enviarCorreoRegistro($user, $email);
        header('Location: exito.php');
        error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "./log/error.log");
        error_log("PERFIL EMPRESA DADO DE ALTA CORRECTAMENTE: " . $user . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "./log/error.log");
    } else {
        //En el caso de que se haya producido error, borramos la variable de error pero luego mostramos el mensaje de error
        session_unset();
        header('Location: error.php');
        error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "./log/error.log");
        error_log("PERFIL EMPRESA NO SE HA PODIDO DAR DE ALTA: " . $user . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "./log/error.log");
    }
} else if (isset($_POST['recuperar_pass'])) {
    //Recuperamos la dirección de correo del usuario que se desea recuperar
    $email = $_POST['email'];

    //En el caso de que el email sea correcto y haya un usuario con dicho email, preparamos el proceso para generar la contraseña
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $password = "";

    //Generamos la contraseña de 10 carácteres de longitud
    for ($i = 0; $i < 10; $i++) {
        //Obtenemos un carácter aleatorio escogido de la cadena de carácteres
        $password .= substr($str, rand(0, 62), 1);
    }

    //Comprobamos el email, si no existe en la base de datos $tabla valdrá NULL.
    $tabla = $db->existeEmail($email);

    if (!is_null($tabla)) {
        //En el caso de que el email corresponda con el de un usuario existente, cambiamos la password
        $db->cambiaContraseña($tabla[0], $password, $email);
        //En el caso de que se haya realizado el cambio de contraseña enviamos el email y mostramos el mensaje de éxito
        enviarCorreoContraseña($tabla[1], $password, $email);
        header('Location: exito.php');
        error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "./log/error.log");
        error_log("PERFIL $tabla SE HA CAMBIADO LA CONTRASEÑA CORRECTAMENTE: " . $email . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "./log/error.log");
    } else {
        header('Location: error.php');
        error_log("_________________________________________________________________________________________________________________________________________________________________________\n", 3, "./log/error.log");
        error_log("NO SE HA PODIDO CAMBIAR LA CONTRASEÑA DEL EMAIL: " . $email . " -> " . strftime("%d/%m/%Y %H:%M:%S") . "\n", 3, "./log/error.log");
    }
} else {
    //Indicamos que el fichero de la parte de vista es index.tpl
    $plantilla->display("index.tpl");
}

/**
 * @description Realiza un envío de correo electrónico al email pasado como parámetro indicando que el registro de $user ha sido realizado con éxito
 * @param String $user hace referencia al nombre del usuario que se acaba de registrar en la plataforma
 * @param String $email hace referencia al email del usuario que se ha registrado en la plataforma
 */
function enviarCorreoRegistro($user, $email) {
    //Asignamos los valores de cada uno de los campos del correo
    $email_user = "info.futurosprofesionales@gmail.com";
    $email_password = "cpifplosenlaces";
    $the_subject = "Futuros profesionales: Registro realizado correctamente en nuestra plataforma.";
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
    $phpmailer->Body .= "<h2 style='color:#3498db;'>Bienvenid@ a su cuenta, $user!</h2>";
    $phpmailer->Body .= "<p>La cuenta de usuario que acaba de dar de alta en la App Web Futuros Profesionales le da acceso a la parte administrativa de las fct de l@s alumn@s del CPIFP Los Enlaces de Zaragoza.</p><br /><hr />";
    $phpmailer->Body .= "<h3>Acceso a tu cuenta</h3>";
    $phpmailer->Body .= "<p>Para acceder a su cuenta tiene que ir a la siguiente URL: <strong>https://www.hectorcapdevila.es/</strong> e introduzca las credenciales de acceso que ha elegido en el registro.</p>";
    $phpmailer->Body .= "<h5>NOTA: No olvide que si en cualquier momento no recuerda su usuario de acceso o password, en el formulario de login puede recuperar dichos datos de acceso.</h5>";
    $phpmailer->Body .= " <img style='margin-top: 5%;' src='https://www.hectorcapdevila.es/images/cpifp_logo.png' alt='Logotipo del CPIFP LOS ENLACES' height='150' width='250'>";
    $phpmailer->Body .= "<h4>El equipo del CPIFP LOS ENLACES.</h4><hr />";
    $phpmailer->Body .= "<h4 style='color: green;'> Por favor considere el medio ambiente antes de imprimir este e-mail!<br />Por favor, tenga en cuenta su responsabilidad ambiental. Antes de imprimir este mensaje de correo, piense si realmente necesita una copia en papel.</h4>";
    $phpmailer->Body .= "<h5>" . date("d-m-Y H:i:s") . "</h5>";
    $phpmailer->IsHTML(true);
    $phpmailer->Send();
}

/**
 * @description Realiza un envío de correo electrónico al email pasado como parámetro indicando la nueva contraseña que se le ha asignado al usuario
 * @param String $user hace referencia al nombre del usuario que ha solicitado cambiar la contraseña
 * @param String $password hace referencia a la nueva constraseña de acceso del usuario que ha solicitado cambiar la contraseña
 * @param String $email hace referencia al email del usuario que ha solicitado cambiar la contraseña
 */
function enviarCorreoContraseña($user, $password, $email) {
    //Asignamos los valores de cada uno de los campos del correo
    $email_user = "info.futurosprofesionales@gmail.com";
    $email_password = "cpifplosenlaces";
    $the_subject = "Futuros profesionales: Cambio de clave de acceso realizado correctamente.";
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
    $phpmailer->Body .= "<h2 style='color:#3498db;'>Hola, $user!</h2>";
    $phpmailer->Body .= "<p>Se ha cambiado la password de acceso a tu cuenta de usuario de la App Web Futuros Profesionales - CPIFP Los Enlaces de Zaragoza.</p><br /><hr />";
    $phpmailer->Body .= "<h3>Datos de acceso de tu cuenta</h3>";
    $phpmailer->Body .= "<p>Para acceder a tu cuenta tienes que ir a la siguiente URL: <strong>https://www.hectorcapdevila.es/</strong> e introducir los siguientes datos:</p>";
    $phpmailer->Body .= "<li><ul><h3>Nombre de usuario: $user</h3></ul></li>";
    $phpmailer->Body .= "<li><ul><h3>Nueva password: $password</h3></ul></li>";
    $phpmailer->Body .= "<h5>NOTA: No olvide que si en cualquier momento no recuerda su usuario de acceso o password, en el formulario de login puede recuperar dichos datos de acceso.</h5>";
    $phpmailer->Body .= " <img style='margin-top: 5%;' src='https://www.hectorcapdevila.es/images/cpifp_logo.png' alt='Logotipo del CPIFP LOS ENLACES' height='150' width='250'>";
    $phpmailer->Body .= "<h4>El equipo del CPIFP LOS ENLACES.</h4><hr />";
    $phpmailer->Body .= "<h4 style='color: green;'> Por favor considere el medio ambiente antes de imprimir este e-mail!<br />Por favor, tenga en cuenta su responsabilidad ambiental. Antes de imprimir este mensaje de correo, piense si realmente necesita una copia en papel.</h4>";
    $phpmailer->Body .= "<h5>" . date("d-m-Y H:i:s") . "</h5>";
    $phpmailer->IsHTML(true);
    $phpmailer->Send();
}