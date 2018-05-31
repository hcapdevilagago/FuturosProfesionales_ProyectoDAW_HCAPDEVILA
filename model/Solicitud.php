<?php

/**
 * Clase Modelo de la Solicitud de alumnos que realizan los tutores de la Empresa
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class Solicitud {
    /*
     * @description Características de cada Solicitud de alumnos que realizan los tutores de la Empresa
     */

    private $id_solicitud;
    private $id_tutor_e;
    private $id_ciclo;
    private $cantidad_alumnos;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new Solicitud()
     */
    function __construct($id_solicitud, $id_tutor_e, $id_ciclo, $cantidad_alumnos) {
        $this->$id_tutor_e = $$id_tutor_e;
        $this->id_solicitud = $id_solicitud;
        $this->id_ciclo = $id_ciclo;
        $this->cantidad_alumnos = $cantidad_alumnos;
    }

    function getId_solicitud() {
        return $this->id_solicitud;
    }

    function getId_tutor_e() {
        return $this->id_tutor_e;
    }

    function getId_ciclo() {
        return $this->id_ciclo;
    }

    function getCantidad_alumnos() {
        return $this->cantidad_alumnos;
    }

    function setId_solicitud($id_solicitud) {
        $this->id_solicitud = $id_solicitud;
    }

    function setId_tutor_e($id_tutor_e) {
        $this->id_tutor_e = $id_tutor_e;
    }

    function setId_ciclo($id_ciclo) {
        $this->id_ciclo = $id_ciclo;
    }

    function setCantidad_alumnos($cantidad_alumnos) {
        $this->cantidad_alumnos = $cantidad_alumnos;
    }

}
