<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Produto {
    private $nome;
    private $descricao;
    private $categoria;
    private $qtde;
    private $preco;
    
    function getNome() {
        return $this->nome;
    }
    
    function setNome($novo) {
        $this->nome = $novo;
    }
}

