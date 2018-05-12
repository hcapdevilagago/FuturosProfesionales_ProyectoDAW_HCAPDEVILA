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
    private $email;
    private $dni;
    private $telefono;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new TutorCentro()
     */
    function __construct($id_tutor_c, $user, $pass, $nombre, $email, $dni, $telefono) {
        $this->id_tutor_c = $id_tutor_c;
        $this->user = $user;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->dni = $dni;
        $this->telefono = $telefono;
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

    function getEmail() {
        return $this->email;
    }

    function getDni() {
        return $this->dni;
    }

    function getTelefono() {
        return $this->telefono;
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

    function setEmail($email) {
        $this->email = $email;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}
