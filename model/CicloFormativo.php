<?php

/**
 * Clase Modelo del Ciclo Formativo del Centro Educativo
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class CicloFormativo {
    
    /*
     * @description Características de cada Ciclo Formativo del Centro Educativo
     */
    private $id_ciclo;
    private $id_familia;
    private $id_tutor_c;
    private $nombre;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new CicloFormativo()
     */
    function __construct($id_ciclo, $id_familia, $id_tutor_c, $nombre) {
        $this->id_ciclo = $id_ciclo;
        $this->id_familia = $id_familia;
        $this->id_tutor_c = $id_tutor_c;
        $this->nombre = $nombre;
    }

    function getId_ciclo() {
        return $this->id_ciclo;
    }

    function getId_familia() {
        return $this->id_familia;
    }

    function getId_tutor_c() {
        return $this->id_tutor_c;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_ciclo($id_ciclo) {
        $this->id_ciclo = $id_ciclo;
    }

    function setId_familia($id_familia) {
        $this->id_familia = $id_familia;
    }

    function setId_tutor_c($id_tutor_c) {
        $this->id_tutor_c = $id_tutor_c;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }    
}
