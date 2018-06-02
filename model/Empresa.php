<?php

/**
 * Clase Modelo de la Empresa que solicita Alumnos para formar en su período de prácticas de fin de ciclo
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class Empresa {
    /*
     * @description Características de cada Empresa que solicita Alumnos para formar en su período de prácticas de fin de ciclo
     */

    private $id_empresa;
    private $nombre;
    private $cif;
    private $direccion_fiscal;
    private $telefono;
    private $email;
    private $horario;
    private $representante_nombre;
    private $representante_dni;
    private $descripcion;
    private $actividad;
    private $user;
    private $pass;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new Empresa()
     */
    function __construct($id_empresa, $nombre, $cif, $direccion_fiscal, $telefono, $email, $horario, $representante_nombre, $representante_dni, $descripcion, $actividad, $user, $pass) {
        $this->id_empresa = $id_empresa;
        $this->nombre = $nombre;
        $this->cif = $cif;
        $this->direccion_fiscal = $direccion_fiscal;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->horario = $horario;
        $this->representante_nombre = $representante_nombre;
        $this->representante_dni = $representante_dni;
        $this->descripcion = $descripcion;
        $this->actividad = $actividad;
        $this->user = $user;
        $this->pass = $pass;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCif() {
        return $this->cif;
    }

    function getDireccion_fiscal() {
        return $this->direccion_fiscal;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getHorario() {
        return $this->horario;
    }

    function getRepresentante_nombre() {
        return $this->representante_nombre;
    }

    function getRepresentante_dni() {
        return $this->representante_dni;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getActividad() {
        return $this->actividad;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCif($cif) {
        $this->cif = $cif;
    }

    function setDireccion_fiscal($direccion_fiscal) {
        $this->direccion_fiscal = $direccion_fiscal;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setRepresentante_nombre($representante_nombre) {
        $this->representante_nombre = $representante_nombre;
    }

    function setRepresentante_dni($representante_dni) {
        $this->representante_dni = $representante_dni;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setActividad($actividad) {
        $this->actividad = $actividad;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

}
