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
        require_once './produto.php';
        
        $obj = new Produto();
        $obj->setNome($_POST['nome']);

        //como armazenar o obj em um vetor de produtos?
        
        echo 'Dados Recebidos<hr>';
        echo 'Nome: ' . $obj->getNome();
        ?>
    </body>
</html>
