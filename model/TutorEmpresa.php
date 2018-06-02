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
    private $id_empresa;
    private $nombre;
    private $dni;
    private $telefono;
    private $email;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new TutorEmpresa()
     */
    function __construct($id_tutor_e, $id_empresa, $nombre, $dni, $telefono, $email) {
        $this->id_tutor_e = $id_tutor_e;
        $this->id_empresa = $id_empresa;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    function getId_tutor_e() {
        return $this->id_tutor_e;
    }

    function getId_empresa() {
        return $this->id_empresa;
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

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
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
