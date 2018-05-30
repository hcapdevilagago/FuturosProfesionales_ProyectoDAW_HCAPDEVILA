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
            $this->conexion = new PDO("mysql:host=localhost;dbname=proyecto;charset=utf8", "root", "root");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("<h2>No se ha podido realizar la conexión con la base de datos."
                    . "</h2><hr/><br/><h3>" . $ex->getMessage() . "</h3>");
        }
    }

    /**
     * @description Devuelve un objeto correspondiente a la empresa pasada como parámetro
     */
    function devuelveEmpresa($nombre) {
        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare("SELECT * FROM empresa WHERE nombre_legal = ?");

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $nombre);

        //Ejecutamos la consulta
        $consulta->execute();

        //Creamos un nuevo objeto con los datos de una empresa
        if ($e = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $empresa = new Empresa($e['id_empresa'], $e['cif'], $e['nombre_legal'], $e['direccion_fiscal'], $e['email_rrhh'], $e['horario'], $e['descripcion'], $e['telefono']);
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
        //Creamos un nuevo objeto con los datos de una empresa
        while ($e = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $empresa = new Empresa($e['id_empresa'], $e['cif'], $e['nombre_legal'], $e['direccion_fiscal'], $e['email_rrhh'], $e['horario'], $e['descripcion'], $e['telefono']);
            $array_objetos->append($empresa);
        }

        //Retornamos el array con los objetos de cada empresa
        return $array_objetos;
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
        if ($this->verificaTutorEmpresa($user, $pass)) {
            $_SESSION['rol'] = 'tutor_empresa';
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
        $select = "SELECT * FROM alumno WHERE user = ? AND pass = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $user);
        $consulta->bindParam(2, $pass);

        //Ejecutamos la consulta
        $consulta->execute();

        //En el caso de que el usuario exista y la clave sea la correcta, devolvemos TRUE, en caso contrario devolvemos FALSE
        return ($consulta->rowCount()) ? true : false;
    }

    /**
     * @description Devuelve un booleano que indica si el tutor_empresa es válido o no
     */
    function verificaTutorEmpresa($user, $pass) {
        //Generamos la sentencia para realizar la comprobación, el usuario introducido debe existir y la password coincida
        $select = "SELECT * FROM tutor_empresa WHERE user = ? AND pass = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

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
        $select = "SELECT * FROM tutor_centro WHERE user = ? AND pass = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

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
     * @return object [Alumno, TutorEmpresa, TutorCentro] encontrado dado el user pasado como parámetro de entrada
     */
    function obtieneRol($user) {
        for ($x = 1; $x < 4; $x++) {
            switch ($x) {
                //Generamos 3 sentencias, 3 roles que se encargarán de devolver el rol que coincida con el nombre de usuario pasado como parámetro
                case 1:
                    $rol = 'tutor_empresa';
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
     *
     * @description Devuelve UN objeto del usuario del rol indicado que corresponde al user pasado como parámetro de entrada
     * @param string $rol hace referencia al rol del usuario que deseamos buscar
     * @param string $user hace referencia al nombre del usuario que deseamos buscar
     * @return object [Alumno, TutorEmpresa, TutorCentro] encontrado dado el user pasado como parámetro de entrada
     */
    function obtieneUsuario($rol, $user) {
        //Generamos la sentencia que se encargará de devolver el usuario que coincida con el nombre de usuario en la tabla correspondiente
        $select = "SELECT * FROM $rol WHERE user = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $user);

        //Ejecutamos la consulta
        $consulta->execute();

        if ($u = $consulta->fetch(PDO::FETCH_ASSOC)) {
            //Creamos un nuevo objeto con los datos del usuario con dicho ROL de acceso
            switch ($rol) {
                case 'tutor_empresa':
                    $id_tutor_e = $u['id_tutor_e'];
                    $id_empresa_e = $u['id_empresa'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $dni = $u['dni'];
                    $telefono = $u['telefono'];
                    $email = $u['email'];
                    $usuario = new TutorEmpresa($id_tutor_e, $id_empresa_e, $user, $pass, $nombre, $dni, $telefono, $email);
                    break;
                case 'tutor_centro':
                    $id_tutor_c = $u['id_tutor_c'];
                    $user = $u['user'];
                    $pass = $u['pass'];
                    $nombre = $u['nombre'];
                    $email = $u['email'];
                    $dni = $u['dni'];
                    $telefono = $u['telefono'];
                    $usuario = new TutorCentro($id_tutor_c, $user, $pass, $nombre, $email, $dni, $telefono);
                    break;
                case 'alumno':
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
        $select = "SELECT * FROM ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

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

    function modificaTutorEmpresa($id_tutor_e, $user, $nombre, $dni, $email, $telefono) {
        try {
            //Genero la consulta para realizar la actualización de los datos de la database
            $sql = "UPDATE tutor_empresa SET user = ?, nombre = ?, dni = ?, email = ?, telefono = ? WHERE id_tutor_e = ?";

            //Preparamos la sentencia
            $stmt = $this->conexion->prepare($sql);

            //Asignamos a cada posición una variable y le indicamos el tipo de dato
            $stmt->bindParam(1, $user, PDO::PARAM_STR);
            $stmt->bindParam(2, $nombre, PDO::PARAM_STR);
            $stmt->bindParam(3, $dni, PDO::PARAM_STR);
            $stmt->bindParam(4, $email, PDO::PARAM_STR);
            $stmt->bindParam(5, $telefono, PDO::PARAM_STR);
            $stmt->bindParam(6, $id_tutor_e, PDO::PARAM_INT);

            //Devolvemos un boolean, que indica si se han añadido nuevos registros
            $stmt->execute();
        } catch (PDOException $ex) {
            $ex = new Exception("No se ha podido ejecutar la modificación del perfil de usuario");
        }
    }

    function modificaTutorCentro($id, $user, $nombre, $dni, $email, $telefono) {
        try {
            //Generamos la sentencia de actualización
            $sql = "UPDATE tutor_centro SET user=?, nombre=?, dni=?, email=?, telefono=?, WHERE id=?";

            //Preparamos la sentencia sql para actualizar el registro
            $statement->prepare($sql)->execute([$user, $nombre, $dni, $email, $telefono, $id]);

            //Devolvemos un boolean, que indica si se han añadido nuevos registros
            return $resultado = $statement->execute();
        } catch (PDOException $ex) {
            echo "<h1>$ex->getMessage()</h1>";
        }
    }

}
