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
        $con = mysqli_connect("localhost", "root", "", "meubanco");

        if (!$con) {
            die('Falha na conexao');
        } else {
            echo 'Conexao efetuada com sucesso';
        }
        
        mysqli_close($con);
        ?>
        <a href="index.php">Voltar</a>
    </body>
</html>
