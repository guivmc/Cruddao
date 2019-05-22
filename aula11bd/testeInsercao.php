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
        }

        $sql = "INSERT INTO produto VALUES (1, 'AIFONYXXX', 1357.43)";
        if (mysqli_query($con, $sql)) {
            echo 'Dados gravados';
        } else {
            echo 'Falha na gravacao';
        }
        
        mysqli_close($con);
        ?>
    </body>
</html>
