<?php

/**
 * Clase Modelo de la Database que se encarga de la gestión completa de la base de datos de la Aplicación Web Futuros Profesionales
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
//Cargamos las clases de cada ROL de usuario en el caso de que no hayan sido cargada antes
require_once($_SERVER['DOCUMENT_ROOT'] . '/FuturosProfesionales_ProyectoDAW_HCAPDEVILA/model/TutorCentro.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/FuturosProfesionales_ProyectoDAW_HCAPDEVILA/model/TutorEmpresa.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/FuturosProfesionales_ProyectoDAW_HCAPDEVILA/model/Alumno.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/FuturosProfesionales_ProyectoDAW_HCAPDEVILA/model/FamiliaProfesional.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/FuturosProfesionales_ProyectoDAW_HCAPDEVILA/model/CicloFormativo.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/FuturosProfesionales_ProyectoDAW_HCAPDEVILA/model/Empresa.php');

//Iniciamos la sesión para poder utilizar las variables de este ámbito en esta clase
session_start();

class Database {

    //Creamos el atributo $conexion de cada base de datos con encapsulamiento privado
    private $conexion;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new Database()
     */
    public function __construct() {
        //El atributo privado $conexion lo inicializamos por defecto a null antes de realizar ninguna acción
        $this->conexion = null;
        try {
            //Instanciamos un objeto de la clase PDO e intentamos realizar la conexión            
            $this->conexion = new PDO("mysql:host=localhost;dbname=futuros_profesionales;charset=utf8", "root", "root");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("<h2>No se ha podido realizar la conexión con la base de datos."
                    . "</h2><hr/><br/><h3>" . $ex->getMessage() . "</h3>");
        }
    }

    /**
     * @description Devuelve un objeto correspondiente a la empresa pasada como parámetro
     */
    function devuelveTutorCentro($nombre) {
        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM tutor_centro WHERE nombre = ?");

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $nombre);

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de una empresa
        if ($t = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $tutor = new TutorCentro($t['id_tutor_c'], $t['user'], $t['pass'], $t['nombre'], $t['email'], $t['dni'], $t['telefono']);
        }

        //Retornamos el objeto del tutor del centro educativo
        return $tutor;
    }

    /**
     * @description Devuelve TODOS los objetos de los tutores del centro educativo que hay registradas en la base de datos
     */
    function devuelveTutoresCentro() {
        //Generamos un Array en el que almacenaremos objetos que harán referencia a los tutores del centro educativo que hay en la base de datos
        $array_objetos = new ArrayObject();

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM tutor_centro");

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de un tutor de centro educativo
        while ($t = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $tutor = new TutorCentro($t['id_tutor_c'], $t['user'], $t['pass'], $t['nombre'], $t['email'], $t['dni'], $t['telefono']);
            $array_objetos->append($tutor);
        }

        //Retornamos el array con los objetos de los tutores del centro educativo
        return $array_objetos;
    }

    /**
     * @description Devuelve un objeto correspondiente a la empresa pasada como parámetro
     */
    function devuelveEmpresa($nombre) {
        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM empresa WHERE nombre = ?");

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $nombre);

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de una empresa
        if ($e = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $empresa = new Empresa($e['id_empresa'], $e['nombre'], $e['cif'], $e['direccion_fiscal'], $e['telefono'], $e['email'], $e['horario'], $e['representante_nombre'], $e['representante_dni'], $e['descripcion'], $e['actividad'], $e['user'], $e['pass']);
        }

        //Retornamos el objeto de la clase Empresa
        return $empresa;
    }

    /**
     * @description Devuelve TODOS los objetos de las empresas que hay registradas en la base de datos
     */
    function devuelveEmpresas() {
        //Generamos un Array en el que almacenaremos objetos que harán referencia a las empresas que hay en la base de datos
        $array_objetos = new ArrayObject();
        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM empresa");
        //Ejecutamos la consulta
        $consulta->execute();
        while ($e = $consulta->fetch(PDO::FETCH_ASSOC)) {
            //Creamos un nuevo objeto con los datos de una empresa y lo vamos añadiendo al array de objetos
            $empresa = new Empresa($e['id_empresa'], $e['nombre'], $e['cif'], $e['direccion_fiscal'], $e['telefono'], $e['email'], $e['horario'], $e['representante_nombre'], $e['representante_dni'], $e['descripcion'], $e['actividad'], $e['user'], $e['pass']);
            $array_objetos->append($empresa);
        }

        //Retornamos el array con los objetos de cada empresa
        return $array_objetos;
    }

    /**
     * @description Devuelve un objeto correspondiente al ciclo formativo pasado como parámetro
     */
    function devuelveCiclo($nombre) {
        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM ciclo_formativo WHERE nombre = ?");

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $nombre);

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de una empresa
        if ($c = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $ciclo = new CicloFormativo($c['id_ciclo'], $c['id_familia'], $c['id_tutor_c'], $c['nombre']);
        }

        //Retornamos el objeto de la clase Empresa
        return $ciclo;
    }

    /**
     * @description Devuelve TODOS los objetos de las familias profesionales que hay en la base de datos
     */
    function devuelveCiclos() {
        //Generamos un Array en el que almacenaremos objetos que harán referencia a los ciclos formativos que hay en la base de datos
        $array_objetos = new ArrayObject();

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM ciclo_formativo");

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de un ciclo formativo
        while ($c = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $ciclo = new CicloFormativo($c['id_ciclo'], $c['id_familia'], $c['id_tutor_c'], $c['nombre']);
            $array_objetos->append($ciclo);
        }

        //Retornamos el array con los objetos de cada ciclo
        return $array_objetos;
    }

    /**
     * @description Devuelve TODOS los objetos de las familias profesionales que hay en la base de datos
     */
    function devuelveFamilias() {
        //Generamos un Array en el que almacenaremos objetos que harán referencia a las familias profesionales que hay en la base de datos
        $array_objetos = new ArrayObject();

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM familia_profesional");

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de una familia profesional
        while ($f = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $familia = new FamiliaProfesional($f['id_familia'], $f['nombre']);
            $array_objetos->append($familia);
        }

        //Retornamos el array con los objetos de cada familia
        return $array_objetos;
    }

    /**
     * @description Comprueba los métodos de verificación de usuarios y devuelve un booleano que indica si el usuario es válido o no
     */
    function verificaUsuario($user, $pass) {
        if ($this->verificaEmpresa($user, $pass)) {
            $_SESSION['rol'] = 'empresa';
            return true;
        } else if ($this->verificaTutorCentro($user, $pass)) {
            $_SESSION['rol'] = 'tutor_centro';
            return true;
        } else if ($this->verificaAlumno($user, $pass)) {
            $_SESSION['rol'] = 'alumno';
            return true;
        } else {
            return false;
        }
    }

    /**
     * @description Devuelve un booleano que indica si el alumno es válido o no
     */
    function verificaAlumno($user, $pass) {
        //Generamos la sentencia para realizar la comprobación, el usuario introducido debe existir y la password coincida
        $sentencia = "SELECT * FROM alumno WHERE user = ? AND pass = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($sentencia);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $user);
        $consulta->bindParam(2, $pass);

        //Ejecutamos la consulta
        $consulta->execute();

        //En el caso de que el usuario exista y la clave sea la correcta, devolvemos TRUE, en caso contrario devolvemos FALSE
        return ($consulta->rowCount()) ? true : false;
    }

    /**
     * @description Devuelve un booleano que indica si los datos de acceso de la empresa son válidos o no
     */
    function verificaEmpresa($user, $pass) {
        //Generamos la sentencia para realizar la comprobación, el usuario introducido debe existir y la password coincida
        $sentencia = "SELECT * FROM empresa WHERE user = ? AND pass = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($sentencia);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $user);
        $consulta->bindParam(2, $pass);

        //Ejecutamos la consulta
        $consulta->execute();

        //En el caso de que el usuario exista y la clave sea la correcta, devolvemos TRUE, en caso contrario devolvemos FALSE
        return ($consulta->rowCount()) ? true : false;
    }

    /**
     * @description Devuelve un booleano que indica si el tutor_centro es válido o no
     */
    function verificaTutorCentro($user, $pass) {
        //Generamos la sentencia para realizar la comprobación, el usuario introducido debe existir y la password coincida
        $sentencia = "SELECT * FROM tutor_centro WHERE user = ? AND pass = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($sentencia);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $user);
        $consulta->bindParam(2, $pass);

        //Ejecutamos la consulta
        $consulta->execute();

        //En el caso de que el usuario exista y la clave sea la correcta, devolvemos TRUE, en caso contrario devolvemos FALSE
        return ($consulta->rowCount()) ? true : false;
    }

    /**
     *
     * @description Devuelve UN objeto del usuario del rol indicado que corresponde al user pasado como parámetro de entrada
     * @param string $rol hace referencia al rol del usuario que deseamos buscar
     * @return string contendrá el rol del user pasado como parámetro de entrada
     */
    function obtieneRol($user) {
        for ($x = 1; $x < 4; $x++) {
            switch ($x) {
                //Generamos 3 sentencias, 3 roles que se encargarán de devolver el rol que coincida con el nombre de usuario pasado como parámetro
                case 1:
                    $rol = 'empresa';
                    $sentencia = "SELECT * FROM $rol WHERE user = ?";
                    break;
                case 2:
                    $rol = 'tutor_centro';
                    $sentencia = "SELECT * FROM $rol WHERE user = ?";
                    break;
                case 3:
                    $rol = 'alumno';
                    $sentencia = "SELECT * FROM $rol WHERE user = ?";
                    break;
            }
            //Preparamos la sentencia, nos devolverá la consulta
            $consulta = $this->conexion->prepare($sentencia);

            //Preparamos la sentencia parametrizada
            $consulta->bindParam(1, $user);

            //Ejecutamos la consulta
            $consulta->execute();

            if ($u = $consulta->fetch(PDO::FETCH_ASSOC)) {
                //Creamos un nuevo objeto con los datos del usuario con dicho ROL de acceso
                switch ($rol) {
                    case 'tutor_empresa':
                        return $rol;
                        break;
                    case 'tutor_centro':
                        return $rol;
                        break;
                    case 'alumno':
                        return $rol;
                        break;
                }
            }
        }

        //Retornamos null por el motivo de que el usuario es incorrecto, y no se ha encontrado en ninguna de las 3 tablas
        return null;
    }

    /**
     * @description Devuelve UN objeto del usuario del rol indicado que corresponde al user pasado como parámetro de entrada
     * @param string $rol hace referencia al rol del usuario que deseamos buscar
     * @param string $user hace referencia al nombre del usuario que deseamos buscar
     * @return object [Empresa, TutorCentro, Alumno] encontrado dado el user pasado como parámetro de entrada
     */
    function obtieneUsuario($rol, $user) {
        //Generamos la sentencia que se encargará de devolver el usuario que coincida con el nombre de usuario en la tabla correspondiente
        $sentencia = "SELECT * FROM $rol WHERE user = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($sentencia);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $user);

        //Ejecutamos la consulta
        $consulta->execute();

        if ($u = $consulta->fetch(PDO::FETCH_ASSOC)) {
            //Creamos un nuevo objeto con los datos del usuario con dicho ROL de acceso
            switch ($rol) {
                case 'empresa':
                    //Recuperamos las tuplas del resultado de la ejecución de la consulta
                    $id_empresa = $u['id_empresa'];
                    $nombre = $u['nombre'];
                    $cif = $u['cif'];
                    $direccion_fiscal = $u['direccion_fiscal'];
                    $telefono = $u['telefono'];
                    $email = $u['email'];
                    $horario = $u['horario'];
                    $representante_nombre = $u['representante_nombre'];
                    $representante_dni = $u['representante_dni'];
                    $descripcion = $u['descripcion'];
                    $actividad = $u['actividad'];
                    $user = $u['user'];
                    $pass = $u['pass'];

                    //Creamos un objeto con los datos que se han recuperado de la sentencia SELECT ejecutada anteriormente
                    $usuario = new Empresa($id_empresa, $nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $user, $pass);
                    break;
                case 'tutor_centro':
                    //Recuperamos las tuplas del resultado de la ejecución de la consulta

                    $id_tutor_c = $u['id_tutor_c'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $dni = $u['dni'];
                    $email = $u['email'];
                    $telefono = $u['telefono'];
                    $privilegios_admin = $u['privilegios_admin'];

                    //Creamos un objeto con los datos que se han recuperado de la sentencia SELECT ejecutada anteriormente
                    $usuario = new TutorCentro($id_tutor_c, $user, $pass, $nombre, $dni, $email, $telefono, $privilegios_admin);
                    break;
                case 'alumno':
                    //Recuperamos las tuplas del resultado de la ejecución de la consulta
                    $id_alumno = $u['id_alumno'];
                    $id_ciclo = $u['id_ciclo'];
                    $id_tutor_c = $u['id_tutor_c'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $dni = $u['dni'];
                    $telefono = $u['telefono'];
                    $email = $u['email'];

                    //Creamos un objeto con los datos que se han recuperado de la sentencia SELECT ejecutada anteriormente
                    $usuario = new Alumno($id_alumno, $id_ciclo, $id_tutor_c, $user, $pass, $nombre, $dni, $telefono, $email);
                    break;
            }
        }

        //Retornamos el objeto que corresponde con el user del rol que se le ha pasado como parámetro de entrada
        return $usuario;
    }

    /**
     * @description Devuelve TODOS los objetos de los usuarios de la tabla pasada como parámetro de entrada
     */
    function obtieneUsuarios($rol) {
        //Generamos un Array en el que almacenaremos objetos que harán referencia a los usuarios según el rol pasado
        $array_objetos = new ArrayObject();

        //Generamos la sentencia que se encargará de devolver todos los usuarios según el rol pasado
        $sentencia = "SELECT * FROM ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($sentencia);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $rol);

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos del usuario
        switch ($rol) {
            case 'tutor_empresa':
                while ($u = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    $id_tutor_e = $u['id_tutor_e'];
                    $id_empresa_e = $u['id_empresa'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $dni = $u['dni'];
                    $telefono = $u['telefono'];
                    $email = $u['email'];
                    $usuario = new TutorEmpresa($id_tutor_e, $id_empresa_e, $user, $pass, $nombre, $dni, $telefono, $email);
                    $array_objetos->append($usuario);
                }
                break;
            case 'tutor_centro':
                while ($u = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    $id_tutor_c = $u['id_tutor_c'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $email = $u['email'];
                    $dni = $u['dni'];
                    $telefono = $u['telefono'];
                    $usuario = new TutorCentro($id_tutor_c, $user, $pass, $nombre, $email, $dni, $telefono);
                    $array_objetos->append($usuario);
                }
                break;
            case 'alumno':
                while ($u = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    $id_alumno = $u['id_alumno'];
                    $id_ciclo = $u['id_ciclo'];
                    $id_tutor_c = $u['id_tutor_c'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $dni = $u['dni'];
                    $telefono = $u['telefono'];
                    $email = $u['email'];
                    $usuario = new Alumno($id_alumno, $id_ciclo, $id_tutor_c, $user, $pass, $nombre, $dni, $telefono, $email);
                    $array_objetos->append($usuario);
                }
                break;
        }

        //Retornamos el array con los objetos (usuario) cada rol
        return $array_objetos;
    }

    /**
     * @description Esta función se encarga de modificar los datos de una empresa
     * @param string $nombre hace referencia al nombre completo de la empresa
     * @param string $cif hace referencia al código de identificación fiscal de la empresa
     * @param string $direccion_fiscal hace referencia a la dirección fiscal de la empresa
     * @param string $telefono hace referencia al número de teléfono de contacto de la empresa
     * @param string $email hace referencia al correo electrónico de contacto de la empresa
     * @param string $horario hace referencia al período de tiempo que se trabaja en dicha empresa
     * @param string $representante_nombre hace referencia al nombre del representante de la empresa
     * @param string $representante_dni hace referencia al dni del representante de la empresa
     * @param string $descripcion hace referencia a la descripción detallada de la empresa
     * @param string $actividad hace referencia a las actividades que la empresa realiza
     * @param integer $id_empresa hace referencia al identificador único de la base de datos (primary key)
     */
    function modificaEmpresa($nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $id_empresa) {
        try {
            //Genero la consulta para realizar la actualización de los datos de la database
            $sentencia = "UPDATE empresa SET nombre = ?, cif = ?, direccion_fiscal = ?, telefono = ?, email = ?, horario = ?, representante_nombre = ?, representante_dni = ?, descripcion = ?, actividad = ? WHERE id_empresa = ?";

            //Preparamos la sentencia
            $stmt = $this->conexion->prepare($sentencia);

            //Asignamos a cada posición una variable y le indicamos el tipo de dato
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $cif);
            $stmt->bindParam(3, $direccion_fiscal);
            $stmt->bindParam(4, $telefono);
            $stmt->bindParam(5, $email);
            $stmt->bindParam(6, $horario);
            $stmt->bindParam(7, $representante_nombre);
            $stmt->bindParam(8, $representante_dni);
            $stmt->bindParam(9, $descripcion);
            $stmt->bindParam(10, $actividad);
            $stmt->bindParam(11, $id_empresa);

            //Ejecutamos la consulta para modificar el registro de la base de datos
            $stmt->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

    function modificaTutorCentro($id, $nombre, $dni, $email, $telefono) {
        try {
            //Generamos la sentencia de actualización
            $sentencia = "UPDATE tutor_centro SET nombre = ?, dni = ?, email = ?, telefono = ? WHERE id_tutor_c = ?";

            //Preparamos la sentencia, nos devolverá la consulta
            $consulta = $this->conexion->prepare($sentencia);

            //Preparamos la sentencia parametrizada
            $consulta->bindParam(1, $nombre);
            $consulta->bindParam(2, $dni);
            $consulta->bindParam(3, $email);
            $consulta->bindParam(4, $telefono);
            $consulta->bindParam(5, $id);

            //Ejecutamos la consulta
            $consulta->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

    function altaAlumno($id_tutor_c, $id_ciclo, $user, $pass, $nombre, $dni, $email, $telefono) {
        try {
            //Genero la consulta para realizar la inserción de los datos en la database
            $sentencia = "INSERT INTO alumno (id_tutor_c, id_ciclo, user, pass, nombre, dni, email, telefono) VALUES (?,?,?,?,?,?,?,?)";

            //Preparamos la sentencia
            $stmt = $this->conexion->prepare($sentencia);

            //Asignamos a cada posición una variable y le indicamos el tipo de dato
            $stmt->bindParam(1, $id_tutor_c);
            $stmt->bindParam(2, $id_ciclo);
            $stmt->bindParam(3, $user);
            $stmt->bindParam(4, $pass);
            $stmt->bindParam(5, $nombre);
            $stmt->bindParam(6, $dni);
            $stmt->bindParam(7, $email);
            $stmt->bindParam(8, $telefono);

            //Devolvemos un boolean, que indica si se han añadido nuevos registros
            $stmt->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

    function altaEmpresa($nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $user, $pass) {
        try {
            //Genero la consulta para realizar la inserción de los datos en la database
            $sentencia = "INSERT INTO empresa (nombre, cif, direccion_fiscal, telefono, email, horario, representante_nombre, representante_dni, descripcion, actividad, user, pass) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

            //Preparamos la sentencia
            $stmt = $this->conexion->prepare($sentencia);

            //Asignamos a cada posición una variable y le indicamos el tipo de dato
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $cif);
            $stmt->bindParam(3, $direccion_fiscal);
            $stmt->bindParam(4, $telefono);
            $stmt->bindParam(5, $email);
            $stmt->bindParam(6, $horario);
            $stmt->bindParam(7, $representante_nombre);
            $stmt->bindParam(8, $representante_dni);
            $stmt->bindParam(9, $descripcion);
            $stmt->bindParam(10, $actividad);
            $stmt->bindParam(11, $user);
            $stmt->bindParam(12, $pass);

            //Devolvemos un boolean, que indica si se han añadido nuevos registros
            $stmt->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

    function altaTutorEmpresa($id_empresa, $user, $pass, $nombre, $telefono, $email, $dni) {
        try {
            //Genero la consulta para realizar la inserción de los datos en la database
            $sentencia = "INSERT INTO tutor_empresa (id_empresa, user, pass, nombre, telefono, email, dni) VALUES (?,?,?,?,?,?,?)";

            //Preparamos la sentencia
            $stmt = $this->conexion->prepare($sentencia);

            //Asignamos a cada posición una variable y le indicamos el tipo de dato
            $stmt->bindParam(1, $id_empresa);
            $stmt->bindParam(2, $user);
            $stmt->bindParam(3, $pass);
            $stmt->bindParam(4, $nombre);
            $stmt->bindParam(5, $telefono);
            $stmt->bindParam(6, $email);
            $stmt->bindParam(7, $dni);

            //Devolvemos un boolean, que indica si se han añadido nuevos registros
            $stmt->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

    /**
     * @description Función que se encarga de dar de baja usuarios
     * @param integer $id hace referencia al identificador único del usuario - primary key de la tabla
     * @param string $tabla hace referencia al nombre de la tabla de la que queremos dar de baja el usuario
     * @param string $id_ciclo hace referencia al identificador único del ciclo formativo - primary key de la tabla
     * @return boolean que hace referencia al proceso de borrado del usuario que se pretende eliminar de la tabla
     */
    function bajaUsuario($id, $tabla, $id_ciclo) {
        try {
            switch ($tabla) {
                case "empresa":
                    //Generamos la sentencia para realizar la eliminación de la solicitud
                    $sentencia = "DELETE FROM solicitud WHERE id_empresa = ?";

                    //Preparamos la sentencia, nos devolverá la consulta
                    $consulta = $this->conexion->prepare($sentencia);

                    //Preparamos la sentencia parametrizada
                    $consulta->bindParam(1, $id);

                    //Ejecutamos la consulta
                    $consulta->execute();

                    //Generamos la sentencia para realizar la eliminación de la solicitud
                    $sentencia = "DELETE FROM tutor_empresa WHERE id_empresa = ?";

                    //Preparamos la sentencia, nos devolverá la consulta
                    $consulta = $this->conexion->prepare($sentencia);

                    //Preparamos la sentencia parametrizada
                    $consulta->bindParam(1, $id);

                    //Ejecutamos la consulta
                    $consulta->execute();

                    //Generamos la sentencia para realizar la eliminación del usuario
                    $sentencia = "DELETE FROM $tabla WHERE id_empresa = ?";
                    break;
                case "tutor_centro":
                    //Generamos la sentencia para realizar la eliminación de los alumnos
                    $sentencia = "DELETE FROM alumno WHERE id_tutor_c = ?";

                    //Preparamos la sentencia, nos devolverá la consulta
                    $consulta = $this->conexion->prepare($sentencia);

                    //Preparamos la sentencia parametrizada
                    $consulta->bindParam(1, $id);

                    //Ejecutamos la consulta
                    $consulta->execute();

                    //Generamos la sentencia para realizar la eliminación de la solicitud
                    $sentencia = "DELETE FROM solicitud WHERE id_ciclo = ?";

                    //Preparamos la sentencia, nos devolverá la consulta
                    $consulta = $this->conexion->prepare($sentencia);

                    //Preparamos la sentencia parametrizada
                    $consulta->bindParam(1, $id_ciclo);

                    //Ejecutamos la consulta
                    $consulta->execute();

                    //Generamos la sentencia para realizar la eliminación de los ciclos formativos de este tutor
                    $sentencia = "DELETE FROM ciclo_formativo WHERE id_tutor_c = ?";

                    //Preparamos la sentencia, nos devolverá la consulta
                    $consulta = $this->conexion->prepare($sentencia);

                    //Preparamos la sentencia parametrizada
                    $consulta->bindParam(1, $id);

                    //Ejecutamos la consulta
                    $consulta->execute();

                    //Generamos la sentencia para realizar la eliminación del usuario
                    $sentencia = "DELETE FROM $tabla WHERE id_tutor_c = ?";
                    break;
                case "alumno":
//                $sentencia = "DELETE FROM $tabla WHERE user = ?";
                    break;
            }

            //Preparamos la sentencia, nos devolverá la consulta
            $consulta = $this->conexion->prepare($sentencia);

            //Preparamos la sentencia parametrizada
            $consulta->bindParam(1, $id);

            //Ejecutamos la consulta
            $consulta->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

    /**
     * 
     * @description Esta función se encarga de añadir una nueva solicitud de alumnos por parte de una empresa
     * @param string $id_ciclo hace referecia al identificador único del ciclo formativo del que se solicitan alumnos
     * @param integer $id_empresa hace referencia al identificador único de la empresa
     * @param integer $cantidad_alumnos hace referencia al nº de alumnos que la empresa desea acoger en prácticas
     * @param string $observaciones hace referencia a una pequeña descripción de lo que busca la empresa y lo que harán los alumnos
     * @param boolean $proyecto hace referencia a que si en la empresa van a permitir al alumno hacer el proyecto mientras hace las prácticas
     */
    function altaSolicitud($id_ciclo, $id_empresa, $cantidad_alumnos, $observaciones, $proyecto) {
        try {
            //Genero la consulta para realizar la inserción de los datos en la database
            $sentencia = "INSERT INTO solicitud (id_ciclo, id_empresa, cantidad_alumnos, fecha_creacion, observaciones, proyecto) VALUES (?,?,?,NOW(),?,?)";

            //Preparamos la sentencia
            $stmt = $this->conexion->prepare($sentencia);

            //Asignamos a cada posición una variable y le indicamos el tipo de dato
            $stmt->bindParam(1, $id_ciclo);
            $stmt->bindParam(2, $id_empresa);
            $stmt->bindParam(3, $cantidad_alumnos);
            $stmt->bindParam(4, $observaciones);
            $stmt->bindParam(5, $proyecto);

            //Devolvemos un boolean, que indica si se han añadido nuevos registros
            $stmt->execute();
        } catch (PDOException $ex) {
            $_SESSION['error'] = true;
        }
    }

}
