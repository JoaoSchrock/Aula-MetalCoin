<?php 

    require("conn.php");
    $tabela = $pdo->prepare("SELECT nome_produto, qtd_produto, valor_produto, cat_produto FROM produtos;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de Pessoas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Tabela de Pessoas</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID PESSOA</th>
            <th scope="col">NOME PESSOA</th>
            <th scope="col">CPF PESSOA</th>
            <th scope="col">EMAIL PESSOA</th>
            <th scope="col">RAÇA PESSOA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Pedro</td>
            <td>123456789</td>
            <td>usuarioanonimo@gmail.com</td>
            <td>Branca</td>
            </tr>
        </tbody>
        </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>