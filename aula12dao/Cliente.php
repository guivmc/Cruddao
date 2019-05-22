
<?php
/** Exemplo de classe POPO - Plain Old PHP Object */
class Cliente {
    private $email;
    private $senha;
    private $nome;
    private $cpf;
    private $cep;

    function __get($name) {
        switch (strtolower($name)) {
            case 'email':
                return $this->email;
                break;
            case 'senha':
                return $this->senha;
                break;
            case 'nome':
                return $this->nome;
                break;
            case 'cpf':
                return $this->cpf;
                break;
            case 'cep':
                return $this->cep;
                break;
        }
    }

    function __set($atributo, $valor) {
        switch (strtolower($atributo)) {
            case "email":
                $this->email = $valor;
                break;
            case "senha":
                $this->senha = $valor;
                break;
            case "nome":
                $this->nome = $valor;
                break;
            case "cpf":
                $this->cpf = $valor;
                break;
            case "cep":
                $this->cep = $valor;
                break;
        }
    }
}
