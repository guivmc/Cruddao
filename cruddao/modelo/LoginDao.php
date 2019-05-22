<?php

/*
 * Importante executar o script de criacao e populacao do BD
 */

/**
 * Description of LoginDao
 *
 * @author mac
 */
require_once 'DataSource.php';
require_once 'Login.php';

class LoginDao {

    private $link;

    function __construct() {
        $this->link = new DataSource("dswbanco");
    }

    function __destruct() {
        $this->link = NULL;
    }

    function inserir($obj) {
        $sql = "INSERT INTO login (email, senha) VALUES (?, ?)";
        $email = $obj->email;
        $senha = $obj->senha;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $email, $senha)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function remover($obj) {
        $sql = "DELETE FROM login WHERE email=? AND senha=?";
        $email = $obj->email;
        $senha = $obj->senha;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $email, $senha)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }

    function atualizar($obj, $novo) {
        $sql = "UPDATE login SET senha=? WHERE email=? AND senha=?";
        $email = $obj->email;
        $senha = $obj->senha;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("sss", $novo, $email, $senha)) {
            die('Falha na atribuicao de valores');
        }

        return $stm->execute();
    }
    
    function consultar($obj) {
        $sql = "SELECT * FROM login WHERE email=? AND senha=?";
        $email = $obj->email;
        $senha = $obj->senha;

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->bind_param("ss", $email, $senha)) {
            die('Falha na atribuicao de valores');
        }

        if (!$stm->execute()) {
            die('Falha na execucao SQL');
        }

        $result = $stm->get_result();
        if ($result->num_rows === 0) {
            return false;
        } else {
            return true;
        }
    }

    function listar() {
        $sql = "SELECT * FROM login";

        $stm = mysqli_prepare($this->link->con, $sql);
        if (!$stm) {
            die('Falha na construcao SQL');
        }

        if (!$stm->execute()) {
            die('Falha na execucao SQL');
        }

        $vet = array();
        $result = $stm->get_result();
        if ($result->num_rows === 0) {
            return false;
        } else {
            while ($row = $result->fetch_assoc()) {
                $obj = new Login();
                $obj->email = $row['email'];
                $obj->senha = $row['senha'];
                array_push($vet, $obj);
            }
        }
        return $vet;
    }
}
