<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Cadastro</title>
    </head>
        <body>
            <div class="Header">
                <h1>Cadastro de Produtos</h1>
            </div>    
            <div class="row">
                <div class="Content Side"></div>
                <div class="Content Middle">
                    <br><h2>Formulário de cadastro</h2><br>
                <center>
                    <fieldset id="borda">
                        <legend id="legend">Preencha com os dados para cadastrar um novo produto</legend>
                            <form action="salvar.php" method="get" id="form">
                                <br><br><label for="select">Categorias</label>
                                <select id="select" name="select">
                                    <option value="Selecione...">Selecione...</option>
                                    <option value="Alimentos">Alimentos</option>
                                    <option value="Bebidas">Bebidas</option>
                                    <option value="Objetos">Objetos</option>
                                    <option value="Gerais">Gerais</option>
                                </select><br><br><br>
                                <label for="nome">Nome </label>
                                <input id="nome" name="nome" type="text"><br><br><br>
                                <label for="preco">Preço </label>
                                <input id="preco" name="preco" type="double" placeholder="0.00"><br><br><br>
                                <label for="quantidade">Quantidade </label>
                                <input id="quantidade" name="quantidade" type="int"><br><br><br>
                                <label for="data">Data de validade </label>
                                <input id="data" name="data" type="date"><br><br><br>
                                <br><br><br><br>
                                <label for="imagem">Carregue uma Imagem</label><br><br>
                                <input type="file" id="imagem" name="imagem">
                    </fieldset><br>                              
                                <input type="submit" value="Salvar" id="salvar">
                                <input type="reset" value="Limpar" id="limpar">
                            </form>
                </center>
                </div>
                <div class="Content Side"></div>
            </div>
            <div class="Footer"></div>
        </body>
</html>