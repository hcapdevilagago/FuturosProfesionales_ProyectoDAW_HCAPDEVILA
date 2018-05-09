<?php
////Cargamos la clase Producto en el caso de que no haya sido cargada antes
//require_once("./Usuario.php");

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
            $this->conexion = new PDO("mysql:host=localhost;dbname=proyecto;charset=UTF8", "root", "root");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("<h2>No se ha podido realizar la conexión con la base de datos."
                    . "</h2><hr/><br/><h3>" . $ex->getMessage() . "</h3>");
        }
    }

    /**
     * @description Devuelve un booleano que indica si el usuario es válido o no
     */
    function verificaUsuario($user, $pass) {
        //Generamos la sentencia para realizar la comprobación, el usuario introducido debe existir y la password coincida
        $select = "SELECT user FROM usuario WHERE user = ? AND pass = ?";

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
     * @description Devuelve UN objeto del producto que corresponde al código pasado como parámetro de entrada
     * @param string $codigo hace referencia al código del producto que deseamos buscar
     * @return object Producto encontrado dado el código pasado como parámetro de entrada
     */
    function obtieneUsuario($codigo) {
        //Generamos la sentencia que se encargará de devolver todos los productos ordenados por familia
        $select = "SELECT * FROM producto WHERE cod = ?";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

        //Preparamos la sentencia parametrizada
        $consulta->bindParam(1, $codigo);

        //Ejecutamos la consulta
        $consulta->execute();

        if ($p = $consulta->fetch(PDO::FETCH_ASSOC)) {
            //Creamos un nuevo objeto con los datos del producto
            $cod = $p['cod'];
            $nombre = $p['nombre'];
            $nombre_corto = $p['nombre_corto'];
            $descripcion = $p['descripcion'];
            $pvp = $p['PVP'];
            $familia = $p['familia'];
            $producto = new Producto($cod, $nombre, $nombre_corto, $descripcion, $pvp, $familia);
        }

        //Retornamos el objeto que corresponde con el código que se le ha pasado como parámetro de entrada
        return $producto;
    }

    /**
     * @description Devuelve TODOS los objetos de los productos de la tienda
     */
    function obtieneUsuarios() {
        //Generamos un Array en el que almacenaremos objetos de la clase Producto
        $array_objetos = new ArrayObject();

        //Generamos la sentencia que se encargará de devolver todos los productos ordenados por familia
        $select = "SELECT * FROM producto ORDER BY familia";

        //Preparamos la sentencia, nos devolverá la consulta
        $consulta = $this->conexion->prepare($select);

        //Ejecutamos la consulta
        $consulta->execute();

        while ($p = $consulta->fetch(PDO::FETCH_ASSOC)) {
            //Creamos un nuevo objeto con los datos del producto
            $cod = $p['cod'];
            $nombre = $p['nombre'];
            $nombre_corto = $p['nombre_corto'];
            $descripcion = $p['descripcion'];
            $pvp = $p['PVP'];
            $familia = $p['familia'];
            $prod = new Producto($cod, $nombre, $nombre_corto, $descripcion, $pvp, $familia);
            $array_objetos->append($prod);
        }

        //Retornamos el array con los objetos de cada producto
        return $array_objetos;
    }

}
