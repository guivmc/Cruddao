<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php        
        require_once 'ClienteDao.php';

        $obj = new Cliente();
        $obj->email = "teste@email.com";
        $obj->senha = "1234";
        $obj->nome = "Xu Xu Braus";
        $obj->cpf = "1234567890";
        $obj->cep = "12345678";

        $banco = new ClienteDao();
        if ($banco->inserir($obj)) {
            echo 'Dado inserido';
        } else {
            echo 'Falha na insercao';
        }
        ?>
    </body>
</html>
