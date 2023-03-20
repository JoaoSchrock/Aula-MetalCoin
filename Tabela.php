<?php
  require("conn.php");

  $tabela = $pdo-> prepare("SELECT id_produto, nome_produto, quantidade_produto, valor_produto, categoria_produto FROM produtos");
  $tabela->execute();
  $rowTabela = $tabela->fetchAll();

  if(empty($rowTabela)){
    echo "<script>
    alert('Tabela vazia!!!');
    </script>";
  }

//   echo '<pre>';
//   print_r($rowTabela);
//   echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicionando o link do css do Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center;">Tabela de Produtos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id do Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria do Produto</th>
                    <th scope="col">Quantidade do Produto</th>
                    <th scope="col">Valor do Produto</th>
                </tr>
            </thead>
            <tbody>
               <?php 

                foreach($rowTabela as $linha){
                    echo '<tr>';
                    echo "<th scope='row'>".$linha['id_produto']."</th>";
                    echo "<td>".$linha['nome_produto']."</td>";
                    echo "<td>".$linha['categoria_produto']."</td>";
                    echo "<td>".$linha['quantidade_produto']."</td>";
                    echo "<td>".$linha['valor_produto']."</td>";
                    echo '<td><a href=edit_tabela.php?produto='.$linha['id_produto'].' class="btn btn-warning">Editar</a></td>';
                    echo "<td><button type='button' class='btn btn-danger'>Excluir</button></td>";
                    echo "</tr>";
                }
               ?>
            </tbody> 
        </table>
    </div>

    <!-- Adicionando o link do Javascript do Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
