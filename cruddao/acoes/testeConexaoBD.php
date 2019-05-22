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
        require_once '../modelo/DataSource.php';
        
        $conexao = new DataSource('dswbanco');
        echo '<h1>Conexao efetuada</h1>';
        $conexao = NULL;
        echo 'Fim da conexao';
        
        include 'respfooter.php';
        ?>
    </body>
</html>
