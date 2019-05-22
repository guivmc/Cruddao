<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>
    <body>
        <h1>Cadastro de Produtos</h1>
        <form method="post" action="cadresp.php">
            <p>
                <label>Nome do produto:</label><br>
                <input name="nome"/>
            </p>
            <p>
                <label>Descricao:</label><br>
                <textarea cols="21" rows="3" name="desc">
                </textarea>
            </p>
            <p>
                <label>Categoria:</label><br>
                <select name="cat">
                    <option disabled selected value> -- selecione -- </option>
                    <option value="1">Informatica</option>
                    <option value="2">Games</option>
                    <option value="3">Livros</option>
                    <option value="4">Vestuario</option>
                    <option value="5">Cosmeticos</option>
                </select>
            </p>
            <p>
                <label>Preco:</label><br>
                <input name="preco"/>
            </p>
            <p>
                <label>Qtde:</label><br>
                <input name="qtde"/>
            </p>
            <input type="reset" value="Limpar" />
            <input type="submit" value="Salvar" />
        </form>
        
    </body>
</html>