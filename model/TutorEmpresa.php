<?php

/**
 * Clase Modelo del Tutor de la Empresa Formadora
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class TutorEmpresa {

    /**
     * @description Características de cada Tutor de la Empresa Formadora
     */
    private $id_tutor_e;
    private $id_empresa_e;
    private $user;
    private $pass;
    private $nombre;
    private $dni;
    private $telefono;
    private $email;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new TutorEmpresa()
     */
    function __construct($id_tutor_e, $id_empresa_e, $user, $pass, $nombre, $dni, $telefono, $email) {
        $this->id_tutor_e = $id_tutor_e;
        $this->id_empresa_e = $id_empresa_e;
        $this->user = $user;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    function getId_tutor_e() {
        return $this->id_tutor_e;
    }

    function getId_empresa_e() {
        return $this->id_empresa_e;
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

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function setId_tutor_e($id_tutor_e) {
        $this->id_tutor_e = $id_tutor_e;
    }

    function setId_empresa_e($id_empresa_e) {
        $this->id_empresa_e = $id_empresa_e;
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

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

}
