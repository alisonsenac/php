<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Postagens</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="painel">
        <div class="cabeçalho">
            <h1> Definição de Cookie </h1>
            <a href="index.html" class="botao"> Fazer Nova Postagem </a>
        </div>
        <div class="conteudo">
            <?php
                //verifica se requisição é tipo POST
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    //pega do formulaerio o usuario digitado
                    $nome = $_POST["usuario"];
                    setcookie("nome", $nome, time () + 86400 * 30, "/");
                    $usuario = $_COOKIE["nome"];

                    echo "Cookie de nome de usuaário definido com sucesso. <br>";
                    echo "Nome Usuário: $nome";

                }else{
                    echo "Erro: Requisição Inválida";
                }
            ?>
            
           

        </div>
        <div class="rodape"> </div>
    </div>

</body>

</html>