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
        <h1>Atualizacao de Senha</h1>
        <form action="../acoes/respatualiza.php" method="post">
            <p>
                <label>Email</label><br>
                <input type="email" name="txtemail"/>
            </p>
            <p>
                <label>Senha</label><br>
                <input type="password" name="txtsenha"/>
            </p>
            <p>
                <label>Nova senha</label><br>
                <input type="password" name="txtsenhanova"/>
            </p>
            <p>                
                <input type="reset" value="Limpar"/>
                <input type="submit" value="Gravar"/>
            </p>
        </form>
        <?php include 'footer.php';?>
    </body>
</html>
