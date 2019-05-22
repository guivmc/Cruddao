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
        $objcli = new Cliente();
        $objcli->email = $_POST['email'];
        //...

        $banco = new ClienteDao();
        if ($banco->inserir($objcli)) {
            echo 'Dado inserido';
        } else {
            echo 'Falha na insercao';
        }
        ?>
        <a href="index.php">Voltar</a>        
    </body>
</html>
