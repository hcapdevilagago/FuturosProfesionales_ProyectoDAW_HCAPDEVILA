<?php

/**
 * Clase Modelo de las Familias Profesionales que contienen los Ciclos Formativos del Centro Educativo
 * 
 * Fecha de creación: 12/05/2018
 * Fecha de modificación: 12/05/2018
 * 
 * Proyecto Fin de Ciclo de Grado Superior - Desarrollo de Aplicaciones Web
 * Tutora de 2º DAW: Teresa Martínez Suñer
 * @author Héctor Capdevila Gago
 * 
 */
class FamiliaProfesional {
    
    /*
     * @description Características de cada Ciclo Formativo del Centro Educativo
     */
    private $id_familia;
    private $nombre;

    /**
     * @description Este constructor es invocado a la hora de realizar una instancia de un nuevo objeto new FamiliaProfesional()
     */
    function __construct($id_familia, $nombre) {
        $this->id_familia = $id_familia;
        $this->nombre = $nombre;
    }

    function getId_familia() {
        return $this->id_familia;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_familia($id_familia) {
        $this->id_familia = $id_familia;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}
