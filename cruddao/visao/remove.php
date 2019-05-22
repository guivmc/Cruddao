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
        <h1>Cancelamento de Conta</h1>
        <form action="../acoes/respremove.php" method="post">
            <p>
                <label>Email</label><br>
                <input type="email" name="txtemail"/>
            </p>
            <p>
                <label>Senha</label><br>
                <input type="password" name="txtsenha"/>
            </p>     
            <p>
                <input type="checkbox" onchange="habilitaBtn()" id="ok"/>
                <label>Confirmo o cancelamento da conta</label>
            </p>
            <p>                
                <input type="reset" value="Limpar"/>
                <input type="submit" value="Enviar" id="btn" style="visibility:hidden;"/>
            </p>
        </form>
        <?php include 'footer.php';?>
        <script src="meuscript.js"></script>
    </body>
</html>
