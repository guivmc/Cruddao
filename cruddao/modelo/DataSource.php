<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataSource
 *
 * @author mac
 */
class DataSource {
    private $con;
    
    function __construct($nomebd) {
        $this->con = mysqli_connect("localhost", "root", "", $nomebd);
        if(!$this->con) {            
            die('Falha na conexao');
        }
    }
    
    function __destruct() {
        mysqli_close($this->con);        
    }
    
    function __get($name) {
        return $this->con;
    }
}
