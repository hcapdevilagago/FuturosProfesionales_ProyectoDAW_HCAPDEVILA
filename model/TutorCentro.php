<?php

/**
 * Clase Modelo del Tutor del Centro Educativo
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class TutorCentro {

    /**
     * @description Características de cada Tutor del Centro Educativo
     */
    private $id_tutor_c;
    private $user;
    private $pass;
    private $nombre;
    private $dni;
    private $email;
    private $telefono;
    private $privilegios_admin;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new TutorCentro()
     */
    function __construct($id_tutor_c, $user, $pass, $nombre, $dni, $email, $telefono, $privilegios_admin) {
        $this->id_tutor_c = $id_tutor_c;
        $this->user = $user;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->privilegios_admin = $privilegios_admin;
    }

    function getId_tutor_c() {
        return $this->id_tutor_c;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDni() {
        return $this->dni;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getPrivilegios_admin() {
        return $this->privilegios_admin;
    }

    function setId_tutor_c($id_tutor_c) {
        $this->id_tutor_c = $id_tutor_c;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setPrivilegios_admin($privilegios_admin) {
        $this->privilegios_admin = $privilegios_admin;
    }

}
