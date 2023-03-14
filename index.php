<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicionando o link do css do Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro Produtos</title>
</head>

<body>
    <div class="container">
        <br>
        <h1 style="text-align:center;">Cadastro de Produtos</h1>
        <br>
            <form action="CRUD/cad_produto.php" method="post">
                <div class="form-group offset-md-3 col-4">
                    <label for="">Nome Produto: </label>
                    <input class="form-control input-group mb-3" type="text" name="" id="" required>
                </div>
                <div class="form-group offset-md-3 col-4">
                    <label for="">Quantidade do produto: </label>
                    <input class="form-control input-group mb-3" type="text" name="" id="" required>
                </div>
                <div class="form-group offset-md-3 col-4">
                    <label for="">Valor do Produto: </label>
                    <input class="form-control input-group mb-3" type="text" name="" id="" required>
                </div>
                <div class="form-group offset-md-3 col-4">
                    <label for="">Categoria do Produto: </label>
                    <input class="form-control input-group mb-3" type="text" name="" id="" required>
                </div>
                <div class="form-group offset-md-3 col-4">
                    <button type="submit" class="btn btn-success"> ENVIAR PRODUTOS </button>
                    <a href="tabela.php" class="btn btn-primary float-end"> LISTAR PRODUTOS </a>
                </div>
            </form>
    </div>
    <!-- Adicionando o link do Javascript do Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
