   <html>
    <head>
    <title>Cadastro de Clientes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>
      <h1>Cadastro de Cliente</h1>
      <form action="respcad.php" method="post">
        <label>Email:
        <input name="email" type="email" id="email"/></label><br />
        <label>Senha:
        <input name="senha1" type="password" id="senha1"/></label><br />
        <label>Confirme a sua senha:
        <input name="senha2" type="password" id="senha2"/></label><br />
        <label>Nome:
        <input name="nome" type="text" id="nome"/></label><br />
        <label>CPF:
        <input name="cpf" type="text" id="cpf"/></label><br />
        <label>Cep:
        <input name="cep" type="text" id="cep" maxlength="9" onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua"/></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro"/></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade"/></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf"/></label><br />
        <input type="reset"/><input type="submit" onclick="return validaSenha()"/>
      </form>
    </body>
    <script type="text/javascript" src="meuscript.js"></script>
    </html>