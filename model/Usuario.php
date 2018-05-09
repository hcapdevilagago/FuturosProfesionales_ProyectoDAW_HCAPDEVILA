<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Héctor Capdevila
 */
class Usuario {
    
    //Características de cada usuario/objeto
    private $user, $pass;
    
    function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }
    
    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }
    
}
