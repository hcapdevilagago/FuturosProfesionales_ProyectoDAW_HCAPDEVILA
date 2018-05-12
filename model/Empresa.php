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
    private $cif;
    private $nombre_legal;
    private $direccion_fiscal;
    private $email_rrhh;
    private $horario;
    private $descripcion;
    private $telefono;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new Empresa()
     */
    function __construct($id_empresa, $cif, $nombre_legal, $direccion_fiscal, $email_rrhh, $horario, $descripcion, $telefono) {
        $this->id_empresa = $id_empresa;
        $this->cif = $cif;
        $this->nombre_legal = $nombre_legal;
        $this->direccion_fiscal = $direccion_fiscal;
        $this->email_rrhh = $email_rrhh;
        $this->horario = $horario;
        $this->descripcion = $descripcion;
        $this->telefono = $telefono;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getCif() {
        return $this->cif;
    }

    function getNombre_legal() {
        return $this->nombre_legal;
    }

    function getDireccion_fiscal() {
        return $this->direccion_fiscal;
    }

    function getEmail_rrhh() {
        return $this->email_rrhh;
    }

    function getHorario() {
        return $this->horario;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setCif($cif) {
        $this->cif = $cif;
    }

    function setNombre_legal($nombre_legal) {
        $this->nombre_legal = $nombre_legal;
    }

    function setDireccion_fiscal($direccion_fiscal) {
        $this->direccion_fiscal = $direccion_fiscal;
    }

    function setEmail_rrhh($email_rrhh) {
        $this->email_rrhh = $email_rrhh;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

}
