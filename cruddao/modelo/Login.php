<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author mac
 */
class Login {

    private $email, $senha;

    function __get($name) {
        switch ($name) {
            case 'email':
                return $this->email;
            case 'senha':
                return $this->senha;
        }
    }

    function __set($atributo, $valor) {
        switch ($atributo) {
            case 'email':
                $this->email = $valor;
                break;
            case 'senha':
                $this->senha = $valor;
                break;
        }
    }

}
