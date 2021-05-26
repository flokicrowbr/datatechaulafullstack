<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

        <form action="receber_dados.php" method="POST">
            <input type="text" id="nome_cliente" name="nome_cliente" placeholder="Nome do Cliente" value="<?php echo $_COOKIE['nome_cookie'] ?>" />
            <br><br>
            <input type="text" id="preco_produto" name="preco_produto" placeholder="Preço do Produto" />
            <br><br>
            <input type="text" id="quantidade" name="quantidade" placeholder="Quantidade" />
            <br><br>
            <input type="submit" value="Calcular" />
        </form>
    
</body>
</html>