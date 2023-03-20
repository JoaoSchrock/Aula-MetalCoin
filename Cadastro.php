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
        <br>
        <h1 style="text-align:center;">Cadastro de Usuario</h1>
        <br>
        <form action="CRUD/cad_usuario.php" method="post">
            <div class="form-group offset-md-3 col-4">
                <label for="">Nome</label>
                <input type="text" name="nome" id="" placeholder="Digite seu Nome" required>
            </div>
            <div>
                <label for="">E-mail</label>
                <input type="email" name="email" id="" placeholder="Digite seu email" required>
            </div>
            <div>
                <label for="">Digite sua senha</label>
                <input type="password" name="password" id="" placeholder="Crie sua senha" required>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <!-- Adicionando o link do Javascript do Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
