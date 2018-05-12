<?php

/**
 * Clase Modelo del Alumno del Centro Educativo
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class Alumno {
    
    /*
     * @description Características de cada Alumno del Centro Educativo
     */
    private $id_alumno;
    private $id_ciclo;
    private $id_tutor_c;
    private $user;
    private $pass;
    private $nombre;
    private $dni;
    private $telefono;
    private $email;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new Alumno()
     */
    function __construct($id_alumno, $id_ciclo, $id_tutor_c, $user, $pass, $nombre, $dni, $telefono, $email) {
        $this->id_alumno = $id_alumno;
        $this->id_ciclo = $id_ciclo;
        $this->id_tutor_c = $id_tutor_c;
        $this->user = $user;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function getId_ciclo() {
        return $this->id_ciclo;
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

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    function setId_ciclo($id_ciclo) {
        $this->id_ciclo = $id_ciclo;
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

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

}
