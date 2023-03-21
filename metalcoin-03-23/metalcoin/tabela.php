<?php
    require("conn.php");

    $tabela = $pdo->prepare("SELECT id_produto, nome_produto, qtd_produto, valor_produto, cat_produto 
    FROM produtos;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Tabela de Produtos</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID PRODUTO</th>
            <th scope="col">NOME PRODUTO</th>
            <th scope="col">CATEGORIA PRODUTO</th>
            <th scope="col">QUANTIDADE PRODUTO</th>
            <th scope="col">PREÇO PRODUTO</th>
            <th scope="col">EDITAR PRODUTO</th>
            <th scope="col">EXCLUIR PRODUTO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($rowTabela as $linha){
                echo '<tr>';
                echo "<th scope='row'>".$linha['id_produto']."</th>";
                echo "<td>".$linha['nome_produto']."</td>";
                echo "<td>".$linha['cat_produto']."</td>";
                echo "<td>".$linha['qtd_produto']."</td>";
                echo "<td>".$linha['valor_produto']."</td>";
                echo '<td><a href=edit_tabela.php?produto='.$linha['id_produto'].' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=CRUD\del_prod.php?produto='.$linha['id_produto'].' class="btn btn-danger">Excluir</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">CADASTRAR PRODUTO</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>