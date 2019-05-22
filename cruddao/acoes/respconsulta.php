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
        require_once '../modelo/LoginDao.php';
        $conta = new Login();
        $conta->email = $_POST['txtemail'];
        $conta->senha = $_POST['txtsenha'];
        
        $banco = new LoginDao();
        if(!$banco->consultar($conta)) {
            echo '<h1>Dados Incorretos</h1>';
        } else {
            echo '<h1>Bem Vindo!</h1>';
        }
        
        include 'respfooter.php';
        ?>
    </body>
</html>
