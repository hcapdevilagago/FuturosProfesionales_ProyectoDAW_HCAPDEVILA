<?php

/**
 * Clase Modelo de la Solicitud de alumnos que realizan los usuarios de Rol Empresa
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
    private $id_ciclo;
    private $id_empresa;
    private $cantidad_alumnos;
    private $fecha_creacion;
    private $actividad;
    private $observaciones;
    private $proyecto;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new Solicitud()
     */
    function __construct($id_solicitud, $id_ciclo, $id_empresa, $cantidad_alumnos, $fecha_creacion, $actividad, $observaciones, $proyecto) {
        $this->id_solicitud = $id_solicitud;
        $this->id_ciclo = $id_ciclo;
        $this->id_empresa = $id_empresa;
        $this->cantidad_alumnos = $cantidad_alumnos;
        //Cambiamos el formato de la fecha a mostrar
        $año = substr($fecha_creacion, 0, 4);
        $mes = substr($fecha_creacion, 5, -3);
        $dia = substr($fecha_creacion, -2);       
        $this->fecha_creacion = $dia . "/" . $mes . "/" . $año;
        $this->actividad = $actividad;
        $this->observaciones = $observaciones;
        $this->proyecto = $proyecto;
    }

    function getId_solicitud() {
        return $this->id_solicitud;
    }

    function getId_ciclo() {
        return $this->id_ciclo;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    function getCantidad_alumnos() {
        return $this->cantidad_alumnos;
    }

    function getFecha_creacion() {
        return $this->fecha_creacion;
    }

    function getActividad() {
        return $this->actividad;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function getProyecto() {
        return $this->proyecto;
    }

    function setId_solicitud($id_solicitud) {
        $this->id_solicitud = $id_solicitud;
    }

    function setId_ciclo($id_ciclo) {
        $this->id_ciclo = $id_ciclo;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setCantidad_alumnos($cantidad_alumnos) {
        $this->cantidad_alumnos = $cantidad_alumnos;
    }

    function setFecha_creacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
    }

    function setActividad($actividad) {
        $this->actividad = $actividad;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    function setProyecto($proyecto) {
        $this->proyecto = $proyecto;
    }

}
