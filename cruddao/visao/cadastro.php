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
        <h1>Cadastro de Conta de Acesso</h1>
        <form action="../acoes/respcad.php" method="post">
            <p>
                <label>Email</label><br>
                <input type="email" name="txtemail"/>
            </p>
            <p>
                <label>Senha</label><br>
                <input type="password" name="txtsenha" id="txtsenha"/>
            </p>
            <p>
                <label>Confirme sua senha</label><br>
                <input type="password" name="txtsenhatmp" id='txtsenhatmp' onblur="verificaSenha()"/>
            </p>
            <p>                
                <input type="reset" value="Limpar"/>
                <input type="submit" value="Gravar" id="btn" style="visibility: hidden;"/>
            </p>
        </form>
        <?php include 'footer.php';?>
        <script src="meuscript.js"></script>
    </body>
</html>
