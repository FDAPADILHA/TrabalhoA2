<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css" type="text/css">
            <title>Cadastros</title>
        </head>
            <body>
                <div class="Header">
                    <h1>Cadastro de Produtos</h1>
                </div>    
                <div class="row">
                    <div class="Content Side"></div>
                    <div class="Content Middle">
                        <br><h2>Verificação de Cadastro</h2><br>
                    <center>
                        <fieldset id="borda">
                            <legend id="legend">Produto Cadastrado</legend><br><br><br>
                                Categoria: <?php echo htmlspecialchars($_POST["select"]);?><br><br>
                                Nome: <?php echo htmlspecialchars($_POST["nome"]);?><br><br>
                                Preço: <?php echo (double)$_POST["preco"];?><br><br>
                                Quantidade: <?php echo (int)$_POST["quantidade"];?><br><br>
                                Data de validade: <?php echo date($_POST["data"]);?><br><br><br><br>
                                <?php $_FILES['imagem'];
                                        echo $_FILES['imagem']['tmp_name'];?>
                        </fieldset>
                        <input type=button id="voltar" value="Voltar" onclick="history.go(-1)">
                    </center>
                    </div>
                    <div class="Content Side"></div>
                </div>
                <div class="Footer"></div>
                <script src="scripts.js"></script>
            </body>
</html>