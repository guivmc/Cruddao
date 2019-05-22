<?php
require_once './DataSource.php';
require_once './Cliente.php';

class ClienteDao {
    private $linkDB;
    
    function __construct() {
        $this->linkDB = new DataSource("meubanco");
    }

    function inserir($obj) {
        $sql = "INSERT INTO cliente(email, senha, nome, cpf, cep) VALUES(?, ?, ?, ?, ?)";
        
        //tratamento do sql injection
        $stm = mysqli_prepare($this->linkDB->con, $sql);
        if(!$stm) {
            die("Falha no comando SQL");
        }
        
        $email = $obj->email;
        $senha = $obj->senha;
        $nome = $obj->nome;
        $cpf = $obj->cpf;
        $cep = $obj->cep;
                
        if(!$stm->bind_param("sssss", $email, $senha, $nome, $cpf, $cep)) {
            die("Falha na atribuicao de valores");
        }
        
        return $stm->execute();       
    }
    
    function __destruct() {
        $this->linkDB = NULL;
    }
}
